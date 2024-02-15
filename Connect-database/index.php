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
/*
$sql = "UPDATE tbl_user SET skill = 'PHP' WHERE id = '1'";
$result = $db -> query($sql);

if ($result) {
    echo "Data updated successfully";
}
*/

// preared statement
/*
$sql = "select name, skill from tbl_user";
$stmt = $db -> prepare($sql);
$stmt -> execute();
$stmt -> bind_result($name, $skill);
while ($stmt -> fetch()){
    echo "$skill <br>";
}
*/

// insert statement using prepared bind variable


$sql = "insert into tbl_user(name, email, skill) values(?,?,?)";

$stmt = $db -> prepare($sql);

// "sss" its datatype

$stmt -> bind_param("sss", $name, $email, $skill);

$name = "Ariful";
$email = "ariful@gmail.com";
$skill = "React";

$stmt -> execute();
$stmt -> close();
$db -> close();
echo "Data inserted successfully";
echo "<br>";



  



?>


</section>

<?php include 'footer.php'; ?>