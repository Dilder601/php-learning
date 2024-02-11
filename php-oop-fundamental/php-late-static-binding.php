<?php include 'header.php'; ?>
<section class="maincontent">
 

        <?php
                function my_autoload($class_name)
                {
                        include "classes/".$class_name.".php"; 
                }

                spl_autoload_register('my_autoload');

                class staticClass extends Static_Class{
                        public static function getClass(){
                                return __CLASS__;
                        }
                }

                $stClass = new staticClass();
                $stClass -> framework();
                $stClass = new staticClass();
                $stClass -> framework();
         

        ?>


</section>

<?php include 'footer.php'; ?>