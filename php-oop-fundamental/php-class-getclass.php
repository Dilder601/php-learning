<?php include 'header.php'; ?> 


<section class="maincontent">

       <!-- Method Changing   -->
       <?php

              function my_autoload($class_name)
              {
                     include "classes/".$class_name.".php"; 
              }

              spl_autoload_register('my_autoload');

              
          class phpChild extends php1{

              public function cms (){
                     echo "Child Class contant and class name ".__CLASS__."<br/>";
                     echo "Child class framework and class name ".get_class($this)."<br/>";
                 }
          }

          $php = new phpChild();
          $php->cms();


          class phpChild1 extends php1{

              public function cms (){
                     echo "Child Class contant and class name ".__CLASS__."<br/>";
                     echo "Child class framework and class name ".get_class($this)."<br/>";
                 }
          }


       ?>






</section>

<?php include 'footer.php'; ?>