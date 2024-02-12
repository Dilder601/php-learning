<?php include 'header.php'; ?>
<section class="maincontent">
 

        <?php
                function my_autoload($class_name)
                {
                        include "classes/".$class_name.".php"; 
                }

                spl_autoload_register('my_autoload');


         $java = new Language();
         $java -> setCat("OOP");
         $java -> setFramework("Spring");
         echo $java -> getCat();
         echo "<br/>";

         $php = clone $java;
         $java -> setFramework("Laravel");

         echo $java-> getCat()."<br/>";
         echo $java-> getFramework()."<br/>";

         echo $php-> getCat()."<br/>";
         echo $php-> getFramework()."<br/>";

        ?>


</section>

<?php include 'footer.php'; ?>