<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array slice
<!--        
         array slice : from which index or whick key you want to slice you array -->

       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "Time ".date("h:i:sa") ."<br/>";
        ?>
        </span>
        <hr> 

            <?php

                $arrayOne = array("red",
                                  "green",
                                  "blue",
                                  "yellow"
                                );
                
                $result = array_slice($arrayOne, 1, 2);
                

                print ("<pre>");
                print_r($result);
                print ("<pre>");

                
                
            ?>

        

        </section>
        
<?php include 'footer.php';?>