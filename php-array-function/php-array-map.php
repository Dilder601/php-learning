<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array Map 
         <!-- array_map (callback, array1, array2, array3, ...) -->

       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "Time ".date("h:i:sa") ."<br/>";
        ?>
        </span>
        <hr> 

            <?php
                

                function myFunction ($value){
                    $arraySum = strtoupper($value);
                    return $arraySum;
                }

                // $arr = array(1,2,3,4,5);
                $arr = array("Animal" => "Cow",
                            "Type" => "mammal"
                );

                $result = array_map("myFunction", $arr);

                print ("<pre>");
                print_r($result);
                print ("<pre>");
                
                
            ?>


        </section>
        
<?php include 'footer.php';?>