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


$id = 1;

$sql = "select * from tbl_user where id = :id";
$stmt = $pdo -> prepare($sql);
$stmt -> execute(array(':id' => $id));
while ($data = $stmt-> fetch()){
    echo "Name : ".$data['name']."<br>";
    echo "Email : ".$data['email']."<br>";
    echo "Skill : ".$data['skill']."<br>";
    echo "Age: ".$data['age']."<br>";
    echo "<hr>";
}





?>


</section>

<?php include 'footer.php'; ?>