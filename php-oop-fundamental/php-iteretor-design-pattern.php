<?php



 include 'header.php'; ?>
<section class="maincontent">


<?php
       
function my_autoload($class_name)
{
        include "classes/".$class_name.".php"; 
}

spl_autoload_register('my_autoload');


echo "Iteretor design pattern";

/// Now its look very uncomfortable while need i will full fill the code....

?>


</section>

<?php include 'footer.php'; ?>