<?php
    session_start();
    include 'header.php';
?>
        <section class="maincontent">
        <h1>PHP Sessions </h1>   <br/>
        <p>PHP Sessions are a way to store information (in variables) to be used across multiple pages.</p>
       <hr>
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "time ".date("h:i:sa") ."<br/>";
        ?>
        </span>

            <?php
                $_SESSION['user'] = "Dilder";
                $_SESSION['password'] = "123"; 

                echo "User is ". $_SESSION['user']. "<br/>";
                // session_unset();
                echo "Password is ". $_SESSION['password'];
                session_destroy();
            ?>
         

        </section>
        
<?php include 'footer.php';?>