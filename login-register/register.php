<?php
include 'inc/header.php';
include 'library/User.php';
?>

<?php

$user = new User();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $userRegi = $user->userRegistration($_POST);
}

?>

<div class="panel panel-default">

    <div class="panel-heading">
        <h2>User Registration </h2>
    </div>

    <div class="panel-body">

        <?php
        if (isset($userRegi)) {
            echo $userRegi;
        }
        ?>

        <form class="mx-1 mx-md-4" action="" method="POST">

            <div class="d-flex flex-row align-items-center mb-4">
                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0">
                    <input type="text" id="name" name="name" class="form-control" />
                    <label class="form-label" for="form3Example1c">Your Name</label>
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0">
                    <input type="text" id="username" name="username" class="form-control" />
                    <label class="form-label" for="form3Example1c">User Name</label>
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0">
                    <input type="email" id="email" name="email" class="form-control" />
                    <label class="form-label" for="form3Example3c">Your Email</label>
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-4">
                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0">
                    <input type="password" id="password" name="password" class="form-control" />
                    <label class="form-label" for="form3Example4c">Password</label>
                </div>
            </div>



            <div class="form-check d-flex justify-content-center mb-5">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                <label class="form-check-label" for="form2Example3">
                    I agree all statements in <a href="#!">Terms of service</a>
                </label>
            </div>

            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                <button type="submit" name="register" id="register" class="btn btn-primary btn-lg">Register</button>
            </div>

        </form>

    </div>

</div>



<?php
include 'inc/footer.php';
?>