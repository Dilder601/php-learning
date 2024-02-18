<?php include 'header.php'; ?>
<section class="maincontent">


<?php

// dsn -> data source name

$dsn = "mysql:dbname=userdata;host=localhost;"; 
$user = "root";
$pass = "";

try{
     $pdo = new PDO($dsn, $user, $pass);
    // echo "Database Connect Succefully!"."<br>";
} catch (PDOException $se){
    echo "Connection failed: " . $se->getMessage();
}


$id = 5;


$sql = " delete from tbl_user where id = :id";
$stmt = $pdo -> prepare($sql);
$stmt -> bindParam(':id', $id);
$stmt -> execute();
echo "Delete succefully!";


?>


</section>

<?php include 'footer.php'; ?>