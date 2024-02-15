<?php include 'header.php'; ?>
<section class="maincontent">


<?php
        
// connect database
$db = new mysqli("localhost", "root", "", "test");     

if (mysqli_connect_errno()) {
    echo "Database connection failed with following errors: " . mysqli_connect_error();
    die();
} else {
    echo "Database connected successfully. <br>";
}


$sql = "select file_upload from adm_blob where id = ?";
$stmt = $db -> prepare($sql);
$stmt -> bind_param("i", $id);
$id = 1;
$stmt -> execute();
$stmt -> bind_result($file);
$stmt -> fetch();
echo "<img src='data:image/png;base64," . base64_encode($file) . "'>";
$stmt -> close();
$db -> close();

 


/*
$sql = "insert into adm_blob(file_upload) values(?)";
$stmt = $db -> prepare($sql);

// "b" its datatype blob

$stmt -> bind_param("b", $file);
$file = file_get_contents("me.png");
$stmt -> send_long_data(0, $file);
$stmt -> execute();
echo "File uploaded successfully.";
*/



?>


</section>

<?php include 'footer.php'; ?>