<?php include 'header.php'; ?>
<section class="maincontent">


<?php
        
// connect database
$db = new mysqli("localhost", "root", "", "userdata");     

if (mysqli_connect_errno()) {
    echo "Database connection failed with following errors: " . mysqli_connect_error();
    die();
} else {
    echo "Database connected successfully. <br>";
}


// for select (query)
/*
$sql = "select * from tbl_user";
$result = $db -> query($sql);
*/


// fetch data from database using while loop
/*
while ($data = $result->fetch_object()){
    echo "<pre>";
    echo   $data->skill;
    echo "</pre>";
}

*/



// for update statement

$sql = "UPDATE tbl_user SET skill = 'PHP' WHERE id = '1'";
$result = $db -> query($sql);

if ($result) {
    echo "Data updated successfully";
}





?>


</section>

<?php include 'footer.php'; ?>