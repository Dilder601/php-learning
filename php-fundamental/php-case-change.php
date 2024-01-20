<?php
   session_start();
    include 'header.php';
?>
        <section class="maincontent">
            PHP Case Change 
            <span style="float: right;">

                <?php 
                    date_default_timezone_set("Asia/Dhaka");
                    echo "time ".date("h:i:sa") ."<br/>";
                ?>

            </span>
            <hr>

            <?php
                if(isset($_POST['text'])){
                    global $txt;
                    $txt = $_POST['text'];
                    // echo "<h2>".strtoupper($txt)."</h2>";
                    // echo "<h2>".strtolower($txt)."</h2>";
                    // echo "<h2>".ucwords($txt)."</h2>";
                    echo "<h2>".ucfirst($txt)."</h2>";
                }

            ?> 

            <form action="php-case-change.php" method="POST">
                <input type="text" name="text" value="<?php global $txt; echo $txt;?>">
                <input type="submit" value="submit">
            </form>



         

        </section>
        
<?php include 'footer.php';?>
