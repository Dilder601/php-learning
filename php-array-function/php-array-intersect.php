<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array intersect
<!--          
         array_intersect() function is used to find the intersection of two or more arrays.
         array_intersect_assoc () function is used to find the intersection of two or more arrays and returns the result in an associative array.
         array_intersect_key () function is used to find the intersection of two or more arrays and returns the result in an associative array.
         array_intersect_uassoc () function is used to find the intersection of two or more arrays and returns the result in an associative array.
         array_intersect_ukey () function is used to find the intersection of two or more arrays and returns the result in an associative array.
        -->
       
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

                // $diffArray = array_intersect($array_one, $array_two);
                // $diffArray = array_intersect_assoc($array_one, $array_two);
                $diffArray = array_intersect_key($array_one, $array_two);


                print ("<pre>");
                print_r($diffArray);
                print ("<pre>");
            ?>


        </section>
        
<?php include 'footer.php';?>