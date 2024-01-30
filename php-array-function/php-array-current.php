<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array Current
        <!--  
            array search => 
        -->

       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "Time ".date("h:i:sa") ."<br/>";
        ?>
        </span>
        <hr> 

            <?php

            $name = array("jamal", "kamal", "salam", "rahim");

            echo "This is current valu ". current($name)."<br/>";
            echo "Next Value ". next($name)."<br/>";
            echo "Previous Value ". prev($name)."<br/>";
            echo "Last Value ". end($name)."<br/>"; 
            echo "First Value ". reset($name)."<br/>";

            
                
/*
                print ("<pre>");
                print_r($result);
                print ("<pre>");
*/
                
                
            ?>

        

        </section>
        
<?php include 'footer.php';?>