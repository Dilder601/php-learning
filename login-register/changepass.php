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
            $sessId = Session::get("id");
            if ($userid != $sessId){
                header("Location: index.php");
            }
        }

        $user = new User();
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updatepass'])) {
            $updatePass = $user->updatePassword($userid, $_POST);
        }
        ?>

        <div class="panel panel-default">

            <div class="panel-heading">
                <h2>Change Password <span class="justify-content-end"> <a class="btn btn-primary" href="profile.php">Back</a> </span> </h2>
            </div>

            <div class="panel-body">

                <?php 
                    if (isset($updatePass)) {
                        echo $updatePass; 
                    }
                ?>


                    <form class="mx-1 mx-md-4" action="" method="POST">

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="password" id="old_pass" name="old_pass" class="form-control" />
                                <label class="form-label" for="old_pass">Old Password</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                                <input type="password" id="password" name="password" class="form-control" />
                                <label class="form-label" for="password">New Password</label>
                            </div>
                        </div>




                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                <button type="submit" name="updatepass" id="updatepass"  class="btn btn-primary btn-lg">Update</button> 
                            </div>


                    </form>


            </div>

        </div>



        <?php include 'inc/footer.php'; ?>