<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP </title>
    <style>
        .phpcoding{width: 900px; margin: 0 auto; background:<?php echo "#ddd"?>; min-height: 400px;}
        .headeroption, .footeroption{background: #444;color: #fff;text-align: center;padding: 10px;}
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

                
                <?php
                    echo "<h2>PHP is Fun!</h2>";
                ?>

        </section>
        <section class="footeroption">
                <h2><?php echo "www.php.com"; ?></h2>
        </section>
         
    </div>
    
</body>
</html>