<?php
    $fonts = "verdana";
    $bgcolor = "#005972";
    $errusername = $erremail = $errwebsite = $errcomment = $errcontact = $errgender = "";

    $username = $email = $website = $comment = $contact = $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST['username'])){
            $errusername = "<span style='color:red';>Name is required</span>";  
        } else {
                $username = input_validation($_POST['username']);
        }
        if (empty($_POST['email'])){
            $erremail = "<span style='color:red';>Email is required</span>"; 
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $erremail = "<span style='color:red';>Invalid email address</span>";
        }
        else {
                $email = input_validation($_POST['email']);
        }
        if (empty($_POST['website'])){
            $errwebsite = "<span style='color:red';>Website is required</span>";  
        } elseif (!filter_var($_POST['website'], FILTER_VALIDATE_URL)) {
            $errwebsite = "<span style='color:red';>Invalid URL</span>";
        } 
        else {
                $website = input_validation($_POST['website']);
        }
        if (empty($_POST['contact'])){
            $errcontact = "<span style='color:red';>Contact is required</span>";
        } else {
                $contact = input_validation($_POST['contact']);
        }
        if (empty($_POST['comment'])){
            $errcomment = "";
        } else {
                $comment = input_validation($_POST['comment']);
        }
        if (empty($_POST['gender'])){
            $errgender = "<span style='color:red';>Gender is required</span>";
        }else {
                $gender = input_validation($_POST['gender']);
        } 

        // echo "Name: ".$username."<br>";
        // echo "Email: ". $email."<br>";
        // echo "Website: ".$website."<br>";
        // echo "Contact: ".$contact."<br>";
        // echo "Comment: ".$comment."<br>";
        // echo "Gender: ".$gender;
    }

    function input_validation($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        // $data = strtolower($data);
        return $data;
    }
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
        <h1>PHP Form Validation</h1>
        <hr>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

            <table>
                <p style="color: red;"> * Required Field </p>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name = "username">* <?php echo $errusername ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name = "email">* <?php echo $erremail ?></td>
                </tr>
                <tr>
                    <td>Website:</td>
                    <td><input type="text" name = "website"><?php echo $errwebsite ?></td>
                </tr>
                <tr>
                    <td>Contact No:</td>
                    <td><input type="text" name = "contact">* <?php echo $errcontact ?></td>
                </tr>
                <tr>
                    <td>Comment:</td>
                    <td><textarea name="comment" id="" cols="40" rows="5"><?php echo $errcomment ?></textarea></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender" value="female">Female</textarea> 
                        <input type="radio" name="gender" value="male">Male</textarea>
                        * <?php echo $errgender  ?>
                   </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name= "submit" value="submit"></td>
                </tr>
            </table>

        </form>

        <?php
        
        // echo "Name: ".$username."<br>";
        // echo "Email: ". $email."<br>";
        // echo "Website: ".$website."<br>";
        // echo "Contact: ".$contact."<br>";
        // echo "Comment: ".$comment."<br>";
        // echo "Gender: ".$gender;

        ?>
        </section>
        <section class="footeroption"> 
                <h2><?php echo "www.php.com"; ?></h2>
        </section>
         
    </div>
    
</body>
</html>