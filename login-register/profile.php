<?php
include 'library/User.php';
include 'inc/header.php';
Session::checkSession();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Register System PHP</title>
    <link rel="stylesheet" href="inc/bootstrap.min.css">
    <script src="inc/bootstrap.min.js"></script>
    <script src="inc/jquery.min.js"></script>
</head>

<body>
    <div class="container">



        <?php
        if (isset($_GET['id'])) {
            $userid = (int)$_GET['id']; 
        }

        $user = new User();
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
            $updateUser = $user->updateUserData($userid, $_POST);
        }
        ?>

        <div class="panel panel-default">

            <div class="panel-heading">
                <h2>User Profile <span class="justify-content-end"> <a class="btn btn-primary" href="index.php">Back</a> </span> </h2>
            </div>

            <div class="panel-body">

                <?php 
                    if (isset($updateUser)) {
                        echo $updateUser;
                    }
                ?>

                <?php
                 
                    if (isset($userid)) {
                        $userData = $user->getUserById($userid);
                ?>

                    <form class="mx-1 mx-md-4" action="" method="POST">

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="text" id="name" name="name" class="form-control" value="<?php echo $userData->name; ?>" />
                                <label class="form-label" for="form3Example1c">Your Name</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="text" id="username" name="username" class="form-control" value="<?php echo $userData->username; ?>" />
                                <label class="form-label" for="form3Example1c">User Name</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="email" id="email" name="email" class="form-control" value="<?php echo $userData->email; ?>" />
                                <label class="form-label" for="form3Example3c">Your Email</label>
                            </div>
                        </div>


                        <div class="form-check d-flex justify-content-center mb-5">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                            <label class="form-check-label" for="form2Example3">
                                I agree all statements in <a href="#!">Terms of service</a>
                            </label>
                        </div>
                        <?php
                            $sessId = Session::get("id");
                            if ($userid == $sessId) {

                        ?>
                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                <button type="submit" name="update" id="update"  class="btn btn-primary btn-lg">Update</button>
                                <a class="btn btn-success btn-lg" href="changepass.php?id= <?php echo $userid; ?>">Password Change</a>
                            </div>
                        <?php } ?>

                    </form>
                <?php } ?>

            </div>

        </div>



        <?php include 'inc/footer.php'; ?>