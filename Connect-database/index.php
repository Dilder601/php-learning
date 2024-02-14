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

$sql = "select * from tbl_user";
$result = $db -> query($sql);

// fetch data from database using while loop

while ($data = $result->fetch_object()){
    echo "<pre>";
    echo   $data->skill;
    echo "</pre>";
}




?>


</section>

<?php include 'footer.php'; ?>