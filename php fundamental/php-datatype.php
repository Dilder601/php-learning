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
        body{font-family: <?php echo $fonts;?>}
        .phpcoding{width: 900px; margin: 0 auto; background:<?php echo "#ddd"?>; min-height: 400px;}
        .headeroption, .footeroption{background: <?php echo $bgcolor;?>;color: #fff;text-align: center;padding: 10px;}
        .headeroption h2, .footeroption h2{margin: 0;}  
        .maincontent{min-height: 400px;padding: 20px;}
    </style>
</head>
<body>
    <div class="phpcoding">
        <section class="headeroption">
            <h2><?php echo "Learn PHP"; ?> </h2>
        </section>
        <section class="maincontent">

        1) String
        2) Integer
        3) Float (floating point numbers - also called double)
        4) Boolean
        5) Array
        6) Object
        7) NULL
        8) Resource

        <br/>
        <hr>
        1) String
        <hr>

        <!-- string is a sequence of characters. In PHP, string can be written in single quotes, double quotes, heredoc syntax and nowdoc syntax. -->
                
        <?php

            $chardatatype = "PHP is a server-side scripting language designed for web development.";
            echo strlen($chardatatype);

            // string function: 
            // 1. strlen();
            // 2. strpos();
            // 3. str_replace();
            // 4. str_word_count();
            // 5. str_shuffle();
            // 6. str_repeat();
            // 7. strtoupper();
            // 8. strtolower();
            // 9. substr();
            // 10. strrev();
            // 11. strpos();
            // 12. str_replace();
            // 13. str_word_count();
            // 14. str_shuffle();
            // 15. str_repeat();
            // 16. strtoupper();
            // 17. strtolower();
            // 18. substr();
            // 19. strrev();
            // 20. strpos();
            // 21. str_replace();
            // 22. str_word_count();
            // 23. str_shuffle();
            // 24. str_repeat();
            // 25. strtoupper();
            // 26. strtolower();
            // 27. substr();
            // 28. strrev();
            // 29. strpos();
            // 30. str_replace();
            // 31. str_word_count();
            // 32. str_shuffle();
        ?>

        <br/>
        <hr>
        2) Integer
        <hr>
        

        <?php
            $integerDataType = 5;
        
            // echo $integerDataType;
            var_dump($integerDataType);
            //

        ?>

        <br/>
        <hr>
        3) Float
        <hr>
        

        <?php
            $floatDataType = 5.3;
        
            // echo $floatDataType;
            var_dump($floatDataType);
        ?>


        <br/>
        <hr>
         4) Boolean
        <hr>
        

        <?php
            $booleanDataType = true;
        
            // echo $booleanDataType;
            var_dump($booleanDataType);
        ?>


        <br/>
        <hr>
         5) Array
        <hr>
        

        <?php
            $arraynDataType = ["Dilder","Hossain","Mithu"];
        
            // echo $booleanDataType;
            var_dump($arraynDataType);
        ?>

        <br/>
        <hr>
        6) Object
        <hr>

        <!-- N.B: kono class er modde jakhon kono function declare kora hoy takhon take bola hoy "METHOD"  -->

        <?php
           
           class student {
            function department () {
                return "CSE";
            }

            function details () {
                echo $this->department();
            }
           } 

        //    new keyword diye object toiri korte hoy

        $st = new student();
        $st-> details();
        

        ?>

        <br/>
        <hr>
         7) Null
        <hr>
        
           <!-- null is a special data type that represents the absence of a value. -->

        <?php
            $nullDataType = "PHP is fun";
            $nullDataType = null;  // null is a special data type that represents the absence of a value.
        
            // echo $nullDataType;
            var_dump($nullDataType);
        ?>


        <br/>
        <hr>
         8) Resource
        <hr>
        
          <!-- resource is a special type of data that represents a system resource such as a file, a network connection, or a database connection. -->

        <?php
            $resourceDataType = "resource is a special type of data that represents a system resource such as a file, a network connection, or a database connection.";
            echo $resourceDataType;
            // var_dump($nullDataType);
        ?>




        </section>
        <section class="footeroption"> 
                <h2><?php echo "www.php.com"; ?></h2>
        </section>
         
    </div>
    
</body>
</html>