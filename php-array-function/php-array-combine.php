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
                $name = array("Dilder", "Nazmul", "Suman", "Zaman");
                $tech = array("PHP", "Java", "Python", "C++");

                $nameNtech = array_combine($name, $tech);

                print ("<pre>");
                print_r($nameNtech);
                print ("<pre>");
            ?>


        </section>
        
<?php include 'footer.php';?>