<?php include 'header.php'; ?>
<section class="maincontent">


<?php
        
        function my_autoload($class_name)
        {
                include "classes/".$class_name.".php"; 
        }

        spl_autoload_register('my_autoload');


$arr = array("HTML", "CSS", "PHP", "JAVA");

 $coding = new ArrayObject($arr);
 $coding->append("PYTHON");

 foreach ($coding as $value) {
        echo $value."<br>";
 }


?>


</section>

<?php include 'footer.php'; ?>