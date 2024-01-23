<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array Merge  

       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "Time ".date("h:i:sa") ."<br/>";
        ?>
        </span>
        <hr> 

            <?php
                
                $arrayOne = array("a" => "red", "b" => "green");
                $arrayTwo = array("c" => "blue", "b" => "yellow");

                $result = array_merge($arrayOne, $arrayTwo);

                print ("<pre>");
                print_r($result);
                print ("<pre>");
                
                
            ?>


        </section>
        
<?php include 'footer.php';?>