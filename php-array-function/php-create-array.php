<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array() Function - Create Array 
       
       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "Time ".date("h:i:sa") ."<br/>";
        ?>
        </span>
        <hr>
         <h4>index array</h4> <hr> 
         <?php
         // index array
            $car = array("Volvo", "BMW", "Toyota");
            $length = count($car);

            for ($i=0; $i < $length; $i++){
                echo $car[$i]."<br/>";
            }
         ?>
         <br>
        <h4>associative array</h4> <hr> 
         <?php
            // associative array
            $nameNage = array("Akbar"=>"20", 
                              "Rahim"=>"25", 
                              "Karim"=>"30"
                            );
            foreach ($nameNage as $key => $value){
                echo "Name : ".$key.", Age : ".$value."<br/>";
            }
         ?> 
         <h4>multidimensional array</h4> <hr> 
         <?php
            $car = array(
                array("Volvo",22,18),
                array("BMW",15,13),
                array("Saab",5,2),
                array("Land Rover",17,15)
            );

            $length = count($car);

            // echo $car[0][0].": In stock: ".$car[0][1].", sold: ".$car[0][2].".<br>";
            // echo $car[1][0].": In stock: ".$car[1][1].", sold: ".$car[1][2].".<br>";
            // echo $car[2][0].": In stock: ".$car[2][1].", sold: ".$car[2][2].".<br>";
            // echo $car[3][0].": In stock: ".$car[3][1].", sold: ".$car[3][2].".<br>";

            for ($row = 0; $row < $length; $row++) {
                echo "<p><b>Row number $row</b></p>";
                echo "<ul>";
                for ($col = 0; $col < 3; $col++) {
                    echo "<li>".$car[$row][$col]."</li>";
                }
                echo "</ul>";
            }

         ?>



        </section>
        
<?php include 'footer.php';?>