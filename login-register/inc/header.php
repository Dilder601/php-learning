<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../library/Session.php');
Session::init();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Register System PHP</title>
    <link rel="stylesheet" href="inc/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" />
    <script src="inc/bootstrap.min.js"></script>
    <script src="inc/jquery.min.js"></script>
</head>

<?php
if (isset($_GET['action']) && $_GET['action'] == "logout") {
    Session::destroy();
}

?>

<body>
    <div class="container">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary" style="background-color: rgba(0, 0, 0, 0.05);" data-mdb-theme="light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Login Register System PHP & PDO</a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarText">
                    <ul class="navbar-nav mb-2 mb-lg-0">

                        <?php
                        $id = Session::get("id");
                        $userLogin = Session::get("login");
                        if ($userLogin == true) {
                        ?>
                             <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="profile.php?id=<?php echo $id; ?>">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?action=logout">Logout</a>
                            </li>


                        <?php } else { ?>


                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="register.php">Register</a>
                            </li>
                        <?php } ?>
                    </ul>

                </div>
            </div>
        </nav>