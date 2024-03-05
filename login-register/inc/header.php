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

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary" style="background-color: rgba(0, 0, 0, 0.05);" data-mdb-theme="light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Login Register System PHP & PDO</a>
                <div class="collapse navbar-collapse justify-content-end" id="navbarText">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="profile.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <div class="panel panel-default">

            <div class="panel-heading">
                <h2>User List <span class="justify-content-end"> <strong>Welcome</strong> Dilder</span> </h2>
            </div>

            <div class="panel-body">
                <table class="table table-striped">
                    <th width="20%">SL</th>
                    <th width="20%">Name</th>
                    <th width="20%">Username</th>
                    <th width="20%">Email Address</th>
                    <th width="20%">Action</th>

                    <tr>
                        <td>1</td>
                        <td>Dilder</td>
                        <td>dilder</td>
                        <td>dilder.hossain.feni@gmail.com</td>
                        <td><a class="btn btn-primary" href="profile.php">View</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Dilder</td>
                        <td>dilder</td>
                        <td>dilder.hossain.feni@gmail.com</td>
                        <td><a class="btn btn-primary" href="profile.php">View</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Dilder</td>
                        <td>dilder</td>
                        <td>dilder.hossain.feni@gmail.com</td>
                        <td><a class="btn btn-primary" href="profile.php">View</a></td>
                    </tr>

                </table>

            </div>

        </div>
