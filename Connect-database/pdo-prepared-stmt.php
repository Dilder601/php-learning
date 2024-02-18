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

$name = "Sakib Al Hasan";
$email ="sakib@gmail.com";
$skill = "Oracle";
$age = "30";


$sql = "insert into tbl_user(name, email, skill, age) 
        values(:name, :email, :skill, :age)";
$stmt = $pdo -> prepare($sql);
$stmt -> bindParam(':name', $name,PDO::PARAM_STR);
$stmt -> bindParam(':email', $email,PDO::PARAM_STR);
$stmt -> bindParam(':skill', $skill,PDO::PARAM_STR);
$stmt -> bindParam(':age', $age,PDO::PARAM_INT);
$stmt -> execute();
echo "Data Inserted Successfully!";

// bind param only pass variable
// bind value pass variable and value





?>


</section>

<?php include 'footer.php'; ?>