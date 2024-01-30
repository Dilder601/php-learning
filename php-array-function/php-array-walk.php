<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array walk
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

            function myfunction($name, $subject)
            {
                echo "$name studies $subject <br/>";
                // echo "$key reads $value books <br/>";
            }

            $nameNsub = array("Rahim"   => "Bangla", 
                              "Karim"   => "English", 
                              "Jabbar"  => "Math", 
                              "Rony"    => "Science"
                            );

            array_walk($nameNsub, "myfunction");

               
/*
                print ("<pre>");
                print_r($result);
                print ("<pre>");
*/
                
                
            ?>

        

        </section>
        
<?php include 'footer.php';?>