<?php
include 'inc/header.php';
include 'library/User.php';
?>

<?php

$user = new User();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $userLogin = $user->userLogin($_POST);
}

?>


<div class="panel panel-default">

    <div class="panel-heading">
        <h2>User Login </h2>
    </div>

    
    <?php
        if (isset($userLogin)) {
            echo $userLogin;
        }
    ?>

    <div class="panel-body">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" id="email" name="email" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required="" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox"  class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" name="login"  class="btn btn-primary">Login</button>
        </form>

    </div>

</div>



<?php
include 'inc/footer.php';
?>