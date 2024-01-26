<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array sum 

         <!-- array_sum   -->

       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "Time ".date("h:i:sa") ."<br/>";
        ?>
        </span>
        <hr> 

            <?php

                $num = array(
                    "a" => 10,
                    "b" => 20,
                    "c" => 30,
                    "d" => 40
                );

                $result = array_sum($num);

                echo "total: ".$result;


                 /*
                $numbers = array(1,2,3,4,5,6,7,8,9,10);

                $result = array_sum($numbers);

                echo "total: ".$result;
                */

                // print ("<pre>");
                // print_r($result);
                // print ("<pre>");

                
                
            ?>

        

        </section>
        
<?php include 'footer.php';?>