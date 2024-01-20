<?php
  //  session_start();
    include 'header.php';
?>
        <section class="maincontent">
        <h1>PHP Cookie </h1>   <br/>
        <p>Cookie is a small piece of data stored on the client's computer.</p>
       <hr>
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "time ".date("h:i:sa") ."<br/>";
        ?>
        </span>

            <?php
               if(isset($_COOKIE["visitor"])){
               setcookie("visitor","1",time()+86400, "/") or die("Cookie is not set");
               echo "This is your first visit in the website!";
               }else{
                   echo "You are are registed visitor!";
               }
            ?>
         

        </section>
        
<?php include 'footer.php';?>