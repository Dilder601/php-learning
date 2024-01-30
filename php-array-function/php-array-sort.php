<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array Sort
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

            $nameNage = array(
                "Akbor" => "35",
                "Rakib" => "40",
                "Rahim" => "30",    
                "Karim" => "20",
                "Jamal" => "25"
            );
            // descending order
            // arsort($nameNage);
            //ascending order
            asort($nameNage);

            foreach ($nameNage as $key => $value) {
                echo "Name : $key, Age : $value <br/>";
            }
               
/*
                print ("<pre>");
                print_r($result);
                print ("<pre>");
*/
                
                
            ?>

        

        </section>
        
<?php include 'footer.php';?>