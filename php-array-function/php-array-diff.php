<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array Diff 
       
       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "Time ".date("h:i:sa") ."<br/>";
        ?>
        </span>
        <hr> 

            <?php
                
                $array_one = array(
                    "a" => "green",
                    "b" => "brown",
                    "c" => "blue",
                    "d" => "yellow"
                );

                $array_two = array(
                    "a" => "green",
                    "b" => "brown",
                    "c" => "blue"
                );

                $diffArray = array_diff($array_one, $array_two);


                print ("<pre>");
                print_r($diffArray);
                print ("<pre>");
            ?>


        </section>
        
<?php include 'footer.php';?>