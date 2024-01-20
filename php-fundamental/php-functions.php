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
        <h1>PHP Functions</h1>

        types of functions:
        1. Built-in functions
        2. User-defined functions
        3. Anonymous functions

        <br/>
        <hr>

        <?php
            function mySchool($schoolName, $estYear){
                echo "My school is $schoolName is established by $estYear  <br/>";
            }
            mySchool("Ataturk Govt. Model High School","1939");
        ?>

        <br>
        <hr>

        <?php
            function sum($firstVal, $secondVal){
                $returnValue = $firstVal + $secondVal;
                return $returnValue;
            }
            $result = sum(10,20);
            echo "Result is $result <br/>";
        ?>

        </section>
        <section class="footeroption">
            <h2><?php echo "www.php.com"; ?></h2>
        </section>

    </div>

</body>

</html>