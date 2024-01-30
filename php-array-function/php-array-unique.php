<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array Unique
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

                $arrayOne = array("a"=>"red",
                                  "b"=>"green",
                                  "c"=>"blue",
                                  "d"=>"yellow",
                                  "e"=>"black",
                                  "f"=>"white",
                                  "g"=>"black",
                                  "h"=>"white",
                                  "i"=>"black",
                                  "j"=>"white",
                                  "k"=>"black"
                                );
                
                $result = array_unique($arrayOne);
                

                print ("<pre>");
                print_r($result);
                print ("<pre>");

                
                
            ?>

        

        </section>
        
<?php include 'footer.php';?>