<?php include 'header.php'; ?>


<section class="maincontent">

       <!-- Method Changing   -->
       <?php

              function my_autoload($class_name)
              {
                     include "classes/".$class_name.".php"; 
              }

              spl_autoload_register('my_autoload');

              
              

              $cal  = new Calculation;
              echo "Result is:". $cal->getValue(3,5)->getResult();


       ?>






</section>

<?php include 'footer.php'; ?>