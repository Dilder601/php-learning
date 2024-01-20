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

            <!-- operators is a symbol used to perform operations on variables and values. -->
            php operators:
            1. Arithmetic operators
            2. Assignment operators
            3. Comparison operators
            4. Increment/Decrement operators
            5. Logical operators
            6. String operators
            7. Array operators
            8. Conditional assignment operators
            9. Ternary operators
            10. Null coalescing operator
            11. Bitwise operators
            12. Type-casting operators
            13. Pre-increment and pre-decrement operators
            14. Post-increment and post-decrement operators
            15. Reference operators
            16. Compound assignment operators
            17. Null coalescing assignment operator
            18. Array destructuring assignment operator
            19. Property access operators
            20. Property promotion operators
            
            <br />
            <hr>
            1. Arithmetic operators: +, -, *, /, %, **, ++, --
            <hr>

            <?php
            $x = 10;
            $y = 20;
            //  echo "operators is a symbol used to perform operations on variables and values.";       
            echo $x + $y;
            ?>

            <br />
            <hr>
            2. Assignment operators: =, +=, -=, *=, /=, %=, **=, .=, <<=,>>=, &=, ^=, |=
            <hr>

            <?php
            $x = 10;
            $x += 20;
            echo $x;
            ?>



            <br />
            <hr>
            3. Comparison operators: ==, ===, !=, !==, <,>, <=,>=
            <!-- === is a identical operator -->
            <hr>

            <?php
            $x = 10;
            $y = "10";
            var_dump($x === $y);
            ?>


            <br />
            <hr>
            4. Increment/Decrement operators: ++, --
            <hr>

            <?php
            $x = 10;
            --$x;
            echo $x;
            ?>



            <br />
            <hr>
            5. Logical operators: &&, ||, !

            <!-- xor(!) specification is that if both the operands are true then the result will be false, and if one of the operands is true then the result will be true.  -->

            <hr>

            <?php
            $x = 10;
            $y = 20;

            ++$y;

            if ($x == 10 && $y == 20) {
                echo "Hello World";
            } else {
                echo "Hello Universe";
            }
            ?>




            <br />
            <hr>
            6. String operators: ., .=

            <!-- xor(!) specification is that if both the operands are true then the result will be false, and if one of the operands is true then the result will be true.  -->

            <hr>

            <?php
            $x = 10;
            $y = 20;

            echo $x . $y;

            ?>




            <br />
            <hr>
            7. Array operators:   +, -, *, /, %, **, ++, --
            <hr>

            <?php
                $x = array("a" => "red", "b" => "green");
                $y = array("c" => "blue", "d" => "yellow");

                var_dump($x != $y);

            ?>



        </section>
        <section class="footeroption">
            <h2><?php echo "www.php.com"; ?></h2>
        </section>

    </div>

</body>

</html>