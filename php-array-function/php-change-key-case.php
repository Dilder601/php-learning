<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array change Key case
       
       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "Time ".date("h:i:sa") ."<br/>";
        ?>
        </span>
        <hr> 

            <?php
                $nameNage = array(
                                    "Rahim"  =>"30", 
                                    "Karim"  =>"32", 
                                    "Rakib"  =>"36", 
                                    "Shakib" =>"40");
                print ("<pre>");
                print_r(array_change_key_case($nameNage, CASE_UPPER));
                print ("<pre>");
            ?>


        </section>
        
<?php include 'footer.php';?>