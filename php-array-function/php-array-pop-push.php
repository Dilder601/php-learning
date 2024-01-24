<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array pop & push  
        <!--  
            array pop => reduce last value of the array....
            array push => dynamically increase value of the array.... 
        -->

       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "Time ".date("h:i:sa") ."<br/>";
        ?>
        </span>
        <hr> 

            <?php
                
                $arr = array("red", "green", "blue", "yellow", "black");
                //  array_pop($arr);

                array_push($arr, "purple");
                

                print ("<pre>");
                print_r($arr);
                print ("<pre>");

             
                
                
            ?>


        </section>
        
<?php include 'footer.php';?>