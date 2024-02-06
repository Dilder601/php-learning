<?php include 'header.php'; ?>


<section class="maincontent">

       <!-- Autoload Classes   -->
       <?php

              function my_autoload($class_name)
              {
                     include "classes/".$class_name.".php"; 
              }

              spl_autoload_register('my_autoload');

              $ruby = new Ruby;
              $java = new Java;
              $php  = new Php;
        


       ?>






</section>

<?php include 'footer.php'; ?>