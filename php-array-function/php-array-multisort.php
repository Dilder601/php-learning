<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array Multisort  

       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "Time ".date("h:i:sa") ."<br/>";
        ?>
        </span>
        <hr> 

            <?php
                
                $arrayOne = array( "red", "green");
                $arrayTwo = array( "blue", "yellow");

                array_multisort($arrayOne, $arrayTwo);

                print ("<pre>");
                print_r($arrayOne);
                print ("<pre>");
                
                
            ?>


        </section>
        
<?php include 'footer.php';?>