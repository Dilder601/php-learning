<?php



 include 'header.php'; ?>
<section class="maincontent">


<?php
       
function my_autoload($class_name)
{
        include "classes/".$class_name.".php"; 
}

spl_autoload_register('my_autoload');



$db = new Database();
$db = new Database();
$db = new Database();


 
?>


</section>

<?php include 'footer.php'; ?>