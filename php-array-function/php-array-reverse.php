<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array reverse
        <!--  
            array reverse => 
        -->

       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "Time ".date("h:i:sa") ."<br/>";
        ?>
        </span>
        <hr> 

            <?php
                
                $arrayOne = array("a" => "red", "b" => "green");
                // $arrayTwo = array("c" => "blue", "d" => "yellow");

                $result = array_reverse($arrayOne);

                // $result = array_replace($arrayOne, array("a" => "blue", "c" => "yellow"));
                

                print ("<pre>");
                print_r($result);
                print ("<pre>");

             
                
                
            ?>


        </section>
        
<?php include 'footer.php';?>