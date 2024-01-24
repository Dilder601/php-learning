<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array search
        <!--  
            array search => 
        -->

       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "Time ".date("h:i:sa") ."<br/>";
        ?>
        </span>
        <hr> 

            <?php
                
                $colors = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");

                if(isset($_POST['text'])){
                    global $txt;
                    $txt = trim($_POST['text']);
                    $result = array_search($txt, $colors);
                    echo "The search result is : ".$result;
                    echo "<br/>";
                    echo "The search text is : ".$txt;
                }


                

             

                // $result = array_reverse($arrayOne);
 
                /*

                print ("<pre>");
                print_r($result);
                print ("<pre>");

                */
                
                
            ?>

            <form action="php-array-search.php" method="post">
                <input type="text" name="text"    placeholder="Enter a text to search in array"  style="width: 300px; height: 30px; border-radius: 5px; border: 1px solid black; padding: 5px; margin: 5px; font-size: 20px; font-weight ">
                <input type="submit" name="submit" value="submit">
            </form>

        </section>
        
<?php include 'footer.php';?>