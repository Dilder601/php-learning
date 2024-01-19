<?php
   session_start();
    include 'header.php';
?>
        <section class="maincontent">
        PHP Filters /Advanced
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "time ".date("h:i:sa") ."<br/>";
        ?>

        </span>
        <hr>
       
<!-- 
        <table>
            <tr>
                <td>Filter Name</td>
                <td>Filter ID</td>
            </tr>
        </table> -->


        </span>

            <?php
                // foreach (filter_list() as $id =>$filter) {
                //     echo '<tr><td>'.$filter . '</td><td> ' .filter_id($filter) . ' </td> <br/> </tr>';
                // }
            ?>

            <?php 
                $intNum = 300;
                $min    = 1;
                $max    = 200;

                if (filter_var($intNum, FILTER_VALIDATE_INT, array("options"=>array("min_range"=>$min, "max_range"=>$max)))){
                    echo "The number is valid";
                } else {
                    echo "The number is not valid";
                }
                echo "<br/>";

                $url = "https://dilder.vercel.app/";
                if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
                    echo "The url is valid";
                } else {
                    echo "The url is not valid";
                }

            ?>

         

        </section>
        
<?php include 'footer.php';?>