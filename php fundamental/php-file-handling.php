<?php include 'header.php';?>
        <section class="maincontent">
        <h1>PHP File Handling</h1> 
        <!-- PHP File Handling is a way to store and retrieve data from a file. It is a way to store and retrieve data from a file.   -->
       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "time ".date("h:i:sa") ."<br/>";
        ?>
        </span>

            <?php
               readfile("file-handling.txt");
            ?>
         

        </section>
        
<?php include 'footer.php';?>