<?php

use dilder\Java;

 include 'header.php'; ?>
<section class="maincontent">


<?php
/*        
function my_autoload($class_name)
{
        include "classes/".$class_name.".php"; 
}

spl_autoload_register('my_autoload');
*/

include "classes/java.php";
include "classes/ruby.php";

use dilder\live\Ruby as ru;

new dilder\Java();
new  ru;
echo HTML;
echo "<br>";
echo \dilder\live\CSS;
echo "<br>";
dilder\live\coding();

  

 
?>


</section>

<?php include 'footer.php'; ?>