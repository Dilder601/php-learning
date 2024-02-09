<?php include 'header.php'; ?> 


<section class="maincontent">

       <!-- Method Changing   -->
       <?php

              function my_autoload($class_name)
              {
                     include "classes/".$class_name.".php"; 
              }

              spl_autoload_register('my_autoload');

              
             $person = new Person;

              foreach ($person as $key => $value) {
                  echo "<pre>";
                  echo "$key=>$value";
                  echo "</pre>";
              }

              $person -> iteratorInner();


       ?>






</section>

<?php include 'footer.php'; ?>