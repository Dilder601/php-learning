<?php
   session_start();
    include 'header.php';
?>
        <section class="maincontent">
            PHP Exception Handling 
            <span style="float: right;">

                <?php 
                    date_default_timezone_set("Asia/Dhaka");
                    echo "time ".date("h:i:sa") ."<br/>";
                ?>

            </span>
            <hr>

            <?php
               function numCheck ($num){
                if ($num>1) {
                    throw new Exception("Value must be 1 or below");
                }
                return true;
                }

                //trigger exception in a "try" block
                try {
                    numCheck(2);
                    echo "If you see this, the number is 1 or below";
                }

                //catch exception
                catch (Exception $err) {
                    echo "Error: " .$err->getMessage();
                }
            

            ?>


         

        </section>
        
<?php include 'footer.php';?>