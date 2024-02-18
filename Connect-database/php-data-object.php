<?php include 'header.php'; ?>
<section class="maincontent">


<?php

// dsn -> data source name

$dsn = "mysql:dbname=userdata;host=localhost;"; 
$user = "root";
$pass = "";

try{
     $pdo = new PDO($dsn, $user, $pass);
     echo "Database Connect Succefully!"."<br>";
} catch (PDOException $se){
    echo "Connection failed: " . $se->getMessage();
}

$sql = "select * from tbl_user";
$result = $pdo -> query($sql);

foreach ($result as $value) {
    echo $value['skill']."<br>";
}



?>


</section>

<?php include 'footer.php'; ?>