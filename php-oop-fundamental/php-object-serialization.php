<?php include 'header.php'; ?>
<section class="maincontent">


<?php
        
        function my_autoload($class_name)
        {
                include "classes/".$class_name.".php"; 
        }

        spl_autoload_register('my_autoload');


 
        $pro = new Programming();
        $ser = serialize($pro);
        /*
        file_put_contents('programming.txt', $ser);
        echo $ser;
        */
        $getCont = file_get_contents('programming.txt');
        $unSerial = unserialize($getCont);
        echo "<pre>";
        print_r($unSerial);
        echo "</pre>";


?>


</section>

<?php include 'footer.php'; ?>