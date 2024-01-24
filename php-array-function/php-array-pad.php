<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array Pad  

         <!-- array_pad(array,length,value)  -->

       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "Time ".date("h:i:sa") ."<br/>";
        ?>
        </span>
        <hr> 

            <?php
                
                $arrayPad = array("A","B","C","D");

                $result = array_pad($arrayPad,10,"E");
                

                print ("<pre>");
                print_r($result);
                print ("<pre>");

             
                
                
            ?>


        </section>
        
<?php include 'footer.php';?>