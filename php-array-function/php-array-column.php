<?php include 'header.php';?>
        <section class="maincontent">
         PHP Array Column Key
       
       
        <span style="float: right;">

        <?php 
            date_default_timezone_set("Asia/Dhaka");
            echo "Time ".date("h:i:sa") ."<br/>";
        ?>
        </span>
        <hr> 

            <?php
                $userInfo = array(
                    array("id"      => "200",
                          "name"    => "Rahim",
                          "address" => "Dhaka",
                          "salary"  => "10000"
                        ),
                    array("id"      => "201",
                          "name"    => "Karim",
                          "address" => "Chittagong",
                          "salary"  => "20000"
                        ),
                    array("id"      => "202",
                          "name"    => "Dilder",
                          "address" => "Japan",
                          "salary"  => "50000"
                        )
                    );

                $nameNid = array_column($userInfo, "name", "id");

                print ("<pre>");
                print_r( $nameNid);
                print ("<pre>");
            ?>


        </section>
        
<?php include 'footer.php';?>