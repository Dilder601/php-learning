<?php include 'header.php'; ?>
<?php include 'student.php'; ?>
<section class="maincontent">

       <!-- Class & Method Existance   -->
       <?php

       if (class_exists('Student')) {
              $st = new Student();
              if (method_exists($st, 'describe')) {
                     $st->describe();
              } else {
                     echo "Method Not Exist";
              }
       } else {
              echo "Class Not Exist";
       }


       ?>






</section>

<?php include 'footer.php'; ?>