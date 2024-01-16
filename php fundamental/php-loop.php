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

           <h1>PHP Loop</h1>
           <br/>
           <hr>
           1. while loop
           <hr>

           <?php
            $x = 1;
            while($x <= 10){
                echo "The number is: $x <br>";
                $x++;
            }       
           ?>

           <br/>
           <hr>
           2. For loop
           <hr>
           <?php
            for($x = 1; $x <= 10; $x++){
                echo "The number is: $x <br>";
            }
           ?>

           <br/>
           <hr>
           3. foreach loop
           <br/>
           foreach loop is used to loop through the elements of an array.
           <hr>
            <?php
                $colors = array("red", "green", "blue", "yellow");
                foreach($colors as $mycolor){
                    echo "$mycolor <br>";
                }
            ?>




        </section>
        <section class="footeroption">
            <h2><?php echo "www.php.com"; ?></h2>
        </section>

    </div>

</body>

</html>