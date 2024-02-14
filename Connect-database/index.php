<?php include 'header.php'; ?>
<section class="maincontent">


<?php
        
// connect database
$db = new mysqli("localhost", "root", "", "userdata");     

if (mysqli_connect_errno()) {
    echo "Database connection failed with following errors: " . mysqli_connect_error();
    die();
} else {
    echo "Database connected successfully";
}


?>


</section>

<?php include 'footer.php'; ?>