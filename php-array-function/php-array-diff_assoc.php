<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array Diff assoc  
         <!-- array_diff_assoc — Computes the difference of arrays with additional index check (key and values both) -->
       
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
                    "d" => "Pink"
                );

                $array_two = array(
                    "a" => "green",
                    "b" => "Yellow",
                    "c" => "blue"
                );

                // $diffArray = array_diff_assoc($array_one, $array_two);
                $diffArray = array_diff_key($array_one, $array_two);


                print ("<pre>");
                print_r($diffArray);
                print ("<pre>");
            ?>


        </section>
        
<?php include 'footer.php';?>