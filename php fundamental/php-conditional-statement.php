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

            <h1>PHP Conditional Statement</h1>
            <hr>
            Conditional statement is used to perform different actions based on different conditions.
            1. if statement
            2. if else statement
            3. if elseif else statement
            4. switch statement
            5. ternary operator
            <hr>
            <h2>if statement</h2>
            <?php
            $gradeValue = 95;
            if ($gradeValue >= 33 && $gradeValue <= 39) {
                $grade = 'D';
                echo "<strong>Congratulations! You secured " . $grade . " grade.</strong>";
            } elseif ($gradeValue >= 40 && $gradeValue <= 49) {
                $grade = 'C';
                echo "<strong>Congratulations! You secured " . $grade . " grade.</strong>";
            } elseif ($gradeValue >= 50 && $gradeValue <= 59) {
                $grade = 'B';
                echo "<strong>Congratulations! You secured " . $grade . " grade.</strong>";
            } elseif ($gradeValue >= 60 && $gradeValue <= 69) {
                $grade = '-A';
                echo "<strong>Congratulations! You secured " . $grade . " grade.</strong>";
            } elseif ($gradeValue >= 70 && $gradeValue <= 79) {
                $grade = 'A';
                echo "<strong>Congratulations! You secured " . $grade . " grade.</strong>";
            } elseif ($gradeValue >= 80 && $gradeValue <= 100) {
                $grade = 'A+';
                echo "<strong>Congratulations! You secured " . $grade . " grade.</strong>";
            } elseif ($gradeValue > 100) {
                echo "<strong>Sorry! You entered invalid value.</strong>";
            } else {
                $grade = 'F';
                echo "<strong>Sorry! You secured " . $grade . " grade.</strong>";
            }
            ?>
            <br/>
            <hr>
            <h2>switch statement</h2>
            <hr>
            <?php
                $lang ="Oracle";
                
                switch($lang){
                    case "html";
                    echo "HTML is a markup language";
                    break;
                    case "css";
                    echo "CSS is a styling language";
                    break;
                    case "java";
                    echo "Java is a programming language";
                    break;
                    default:
                    echo "Invalid language";
                }
            ?>




        </section>
        <section class="footeroption">
            <h2><?php echo "www.php.com"; ?></h2>
        </section>

    </div>

</body>

</html>