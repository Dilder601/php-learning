<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array Shift
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
                                  "d"=>"yellow"
                                );
                
                array_shift($arrayOne);
                

                print ("<pre>");
                print_r($arrayOne);
                print ("<pre>");

                
                
            ?>

        

        </section>
        
<?php include 'footer.php';?>