<?php



 include 'header.php'; ?>
<section class="maincontent">


<?php
       
function my_autoload($class_name)
{
        include "classes/".$class_name.".php"; 
}

spl_autoload_register('my_autoload');



$db = new Database2();
$db -> setDriver("mysql");
$db -> connect("host","user","db","pass");


// if ($dbtype == "mysql") {
// 	//$mng = $mngMysql;
// } else if ($dbtype == "sqlite") {
// 	//$mng = $mngSqlLite;
// }


 
?>


</section>

<?php include 'footer.php'; ?>