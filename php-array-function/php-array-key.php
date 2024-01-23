<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array Key

       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "Time ".date("h:i:sa") ."<br/>";
        ?>
        </span>
        <hr> 

            <?php
                
                $arr = array(
                        "name" => "Dilder",
                        "age" => "29"
                );

                if (array_key_exists("names", $arr)){
                        echo "Array key is exists";
                } else {
                    echo "Array key is not exists";
                }



                /*
                // $diffArray = array_intersect($array_one, $array_two);
                // $diffArray = array_intersect_assoc($array_one, $array_two);
                // $diffArray = array_intersect_key($array_one, $array_two);

                print ("<pre>");
                print_r($diffArray);
                print ("<pre>");
                */
                
            ?>


        </section>
        
<?php include 'footer.php';?>