<?php
   session_start();
    include 'header.php';
?>
        <section class="maincontent">
             Explode & Implode Function
           <!-- 
            Explode:
            string holo ekdaroner array
            jekono string amra shahoje array te rupantor korte parbo
            ar eitar jonno je function ta use korte hobe oitar nam "explode" 
            explode function have two paramenter
            ** explode("delimeter","source string")

            Implode: 
            implode function array er element gula ke  string hishebe return korbe.

        -->
            <span style="float: right;">

                <?php 
                    date_default_timezone_set("Asia/Dhaka");
                    echo "time ".date("h:i:sa") ."<br/>";
                ?>

            </span>
            <hr>

            <?php
                $myStr  = "We are learning PHP";

                $strValue = explode(" ", $myStr);
                
                echo $strValue[0]."<br/>";

            ?>
            <br>

            <?php
                $myStr  = array("We","are", "learning", "PHP");

                echo implode(" ", $myStr);
                
                

            ?>


         

        </section>
        
<?php include 'footer.php';?>