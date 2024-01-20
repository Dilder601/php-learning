<?php
$fonts = "verdana";
$bgcolor = "#005972";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP </title>
    <style>
        body {
            font-family: <?php echo $fonts; ?>
        }

        .phpcoding {
            width: 900px;
            margin: 0 auto;
            background: <?php echo "#ddd" ?>;
            min-height: 400px;
        }

        .headeroption,
        .footeroption {
            background: <?php echo $bgcolor; ?>;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        .headeroption h2,
        .footeroption h2 {
            margin: 0;
        }

        .maincontent {
            min-height: 400px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="phpcoding">
        <section class="headeroption">
            <h2><?php echo "Learn PHP"; ?> </h2>
        </section>
        <section class="maincontent">
        
        <h1>PHP Array</h1>
        <br>
        <hr>
        PHP array is a variable that can hold more than one value.
        types of array:
        1. Indexed array
        2. Associative array
        3. Multidimensional array
        <br>
        <hr>
        1. Indexed array:
        <br>
        <h1>Indexed array is an array that is indexed.</h1>
        <br>
        <hr>

        <?php

            $x = array(5,10,15,20,89);
            $length = count($x);
            for ($i=0; $i<$length; $i++){
                echo $x[$i];
                echo "<br>";
            }

        ?>

        <br>
        2. Associative array:
        <br>
        <h1>Associative array is an array that is indexed by keys.</h1>
        <hr>

        <?php
            $ages = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
            foreach($ages as $key => $value){
                echo "Name: ".$key.": Age: ".$value;
                echo "<br>";
            }
        ?>

       <br>
       3. Multidimensional array:
        <br>
        <h1>Multidimensional array is an array that can hold arrays as values.</h1> 
        <hr>

        <?php
            $cars = array(
                array("Volvo",22,18),
                array("BMW",15,13),
                array("Saab",5,2),
                array("Land Rover",17,15)
            );

            // count array
            $count = count($cars);
            echo "Count: ".$count."<br>"; 

            echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
            echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
            echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
            echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

            for ($row = 0; $row < $count; $row++){
                echo "<p><b>Row number $row</b></p>";

                echo "<ul>";
                for ($col = 0; $col < 3; $col++){
                    echo "<li>".$cars[$row][$col]."</li>";
                }
                echo "</ul>";
            }
        ?>

        </section>
        <section class="footeroption">
            <h2><?php echo "www.php.com"; ?></h2>
        </section>

    </div>

</body>

</html>