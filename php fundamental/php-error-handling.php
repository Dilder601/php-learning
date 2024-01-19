<?php
   session_start();
    include 'header.php';
?>
        <section class="maincontent">
            PHP Error Handling 
            <span style="float: right;">

                <?php 
                    date_default_timezone_set("Asia/Dhaka");
                    echo "time ".date("h:i:sa") ."<br/>";
                ?>

            </span>
            <hr>

            <?php
                error_reporting(E_ERROR | E_PARSE | E_WARNING | E_NOTICE);

                $price = 45;

                if ($price == 45){
                    print "Price is 45";
                } else {
                    print "Price is not 45";
                }

            ?>


         

        </section>
        
<?php include 'footer.php';?>