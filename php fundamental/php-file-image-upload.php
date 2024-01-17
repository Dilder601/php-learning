<?php include 'header.php';?>
        <section class="maincontent">
        <h1>PHP File/Image Upload</h1>   
       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "time ".date("h:i:sa") ."<br/>";
        ?>
        </span>

            <?php

            if (isset($_FILES['image'])){
                $fileNames = $_FILES['image']['name'];
                $fileTmpNames = $_FILES['image']['tmp_name'];
                move_uploaded_file($fileTmpNames, "images/".$fileNames);
                echo "File Upoaded succefully!!";
            }

            ?>

            <form action= "" method="POST" enctype="multipart/form-data">
                <input type="file" name="image" id="">
                <input type="submit" value="submit">
            </form>
         

        </section>
        
<?php include 'footer.php';?>