<?php include 'header.php'; ?>
<?php include 'functions.php'; ?>
<section class="maincontent">
        <!-- 
        "->" is a object Operator
        -> "$this"  gives you access to the object variable 
-->


        <form action="" method="post">
                <table>
                        <tr>
                                <td>Enter Data First Number</td>
                                <td><input type="number" name="num1" id="num1"></td>
                        </tr>

                        <tr>
                                <td>Enter Data Second Number</td>
                                <td><input type="number" name="num2" id="num2"></td>
                        </tr>

                        <tr>
                                <td></td>
                                <td> <input type="submit" name="calculation" value="calculate"> </td>
                        </tr>

                </table>
        </form>

        <?php

        if (isset($_POST['calculation'])) {
                $numOne = $_POST['num1'];
                $numTwo = $_POST['num2'];

                if (empty($numOne) or empty($numTwo)) {
                        echo "<span style= 'color:red';> Input Field Must Not Be Empty.</span> <br>";
                } else {
                echo "First Number is:". $numOne. " and Second Number is: ".$numTwo. "<br>";
                $cal = new Calculation();
                $cal->add($numOne, $numTwo);
                $cal->sub($numOne, $numTwo);
                $cal->mul($numOne, $numTwo);
                $cal->div($numOne, $numTwo);
                }
        }

        ?>





</section>

<?php include 'footer.php'; ?>