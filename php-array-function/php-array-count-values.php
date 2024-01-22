<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array Combine
       
       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "Time ".date("h:i:sa") ."<br/>";
        ?>
        </span>
        <hr> 

            <?php
                $name = array("Dilder", "Nazmul", "Suman", "Zaman","Dilder", "Nazmul", "Suman", "Zaman","Dilder", "Nazmul", "Suman");
                $tech = array("PHP", "Java", "Python", "C++", "PHP", "Java", "Python", "C++","PHP", "Java", "Python", "C++","PHP", "Java", "Python");


                print ("<pre>");
                print_r(array_count_values($tech));
                print ("<pre>");
            ?>


        </section>
        
<?php include 'footer.php';?>