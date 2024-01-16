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
        
       <h1>PHP Variable Scope</h1>
       <br>   
       <hr>
       <h1>local and global variable scope</h1>
       <br>
        
       <?php
            $a = 500;

            function test1(){
                global $a;
                $x = 20;
                echo "X is $x <br>";
                echo "Global Variable Value $a <br>";
                return $x;
            }

            function test2(){
                global $a;
                $y = 30;
                echo "Y is $y <br>";
                echo "Global Variable Value $a <br>";
                return $y;
            }
 
            test1();
            test2();

            $test3 = test1() + test2(); 
            echo "Test 3 is $test3 <br>";
       ?>

       <h1>PHP Superglobals [$GLOBALS & $_SERVER]</h1>
       <br>
       superglobals is a PHP predefined variable which holds information about headers, paths, and script locations.
       <br>
       <hr> 
       <h1>PHP Superglobals are:</h1>
       1. $GLOBALS
       2. $_SERVER
       3. $_REQUEST
       4. $_POST
       5. $_GET
       6. $_FILES
       7. $_ENV
       8. $_COOKIE
       9. $_SESSION 
       <br>
       <h1>1. $GLOBALS</h1>
       <hr>
       <?php 

        $x = 10;
        $y = 20;

        function sum(){
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
        }
        sum();
        echo "Sum is $z <br>";
       ?>

       <h1>2. $_SERVER</h1>
       <br>
       $_SERVER is a PHP predefined variable which holds information such as headers, paths, and script locations. 
       <hr>
       <?php
            echo $_SERVER['PHP_SELF'];
            echo "<br>";
            echo $_SERVER['SERVER_NAME'];
            echo "<br>";
            echo $_SERVER['HTTP_HOST'];
            echo "<br>";
            echo $_SERVER['SCRIPT_NAME'];
            echo "<br>";
            echo $_SERVER['REQUEST_TIME'];
            echo "<br>";
            echo $_SERVER['REQUEST_METHOD'];
            echo "<br>";
            echo $_SERVER['SERVER_ADDR'];
       ?>
       <br>
        <h1>php superglobals 3. $_REQUEST & 4. $_POST</h1>
       <br>
       $_REQUEST is a PHP predefined variable which holds information about the request. <br>
       $_POST is a PHP predefined variable which holds information about the request.
       <hr>

       <form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post">
            <input type="text" name ="username">
            <button type="submit" class="btn btn-primary" >
                Submit
            </button>
            
       </form>

       <?php
           if ($_SERVER['REQUEST_METHOD'] == "POST"){
            //   $name = $_REQUEST ['username'];
              $name = $_POST ['username'];
              if (empty($name)){
                  echo "<span style='color:red';>User Name can not null</span>";
              } else {
                echo "<span  style='color:green';>User Name is </span>". $name;
              }
           } 
       ?>

        <br>
        <h1>php superglobals 5. $_GET</h1>
        <br>
        $_GET is a PHP predefined variable which holds information about the request.
       <br>
       <hr>


      <a href="text.php?msg=Good&txt=Bye">Sent Data</a>

        </section>
        <section class="footeroption">
            <h2><?php echo "www.php.com"; ?></h2>
        </section>

    </div>

</body>

</html>