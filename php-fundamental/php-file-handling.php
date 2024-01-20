<?php include 'header.php';?>
        <section class="maincontent">
        <h1>PHP File Handling</h1> 
        <h1>File open/Read/Close</h1>
        <!-- PHP File Handling is a way to store and retrieve data from a file. It is a way to store and retrieve data from a file.   -->
       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "time ".date("h:i:sa") ."<br/>";
        ?>
        </span>

            <?php
                $ourFile = fopen("file-handling.txt","r") or die("file not found!!");
                //this is for file handling//    readfile("file-handling.txt");
                // echo fread($ourFile,filesize("file-handling.txt"));
                // echo fgetc($ourFile);
                echo fgets($ourFile);
                fclose($ourFile);
            ?>
         

        </section>
        
<?php include 'footer.php';?>