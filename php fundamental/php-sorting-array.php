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
        
       <h1>PHP Sorting Array</h1>
       <br>   
       <hr>

       <?php
        $names = array("Peter", "Joe", "Glenn", "Cleveland");
        // numeric array
        // $names = array(25,10,198,12,98,852);
        rsort($names);

        $clength = count($names);

        for ($i = 0; $i< $clength; $i++){
            echo $names[$i] . "<br>"; 
        }
       ?>

       <h1>PHP Sorting Array</h1>
       <br>
       <hr>
       <p>asorting</p>
       <br>
       <?php
            $ages = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
            asort($ages); // asort sorting on value
            // ksort($ages); // ksort sorting on key
            foreach($ages as $key =>$value){
                echo $key . " = " . $value . "<br>";
            }
       ?>

        </section>
        <section class="footeroption">
            <h2><?php echo "www.php.com"; ?></h2>
        </section>

    </div>

</body>

</html>