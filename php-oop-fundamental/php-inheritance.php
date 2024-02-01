<?php include 'header.php'; ?>
<section class="maincontent">

        <!-- Inheritance in OOP = When a class derives from another class.    -->


        <?php
        class userData
        {
                public $id;
                public $username;

                const NAME = "Dilder Hossain";

                public function __construct($id, $username)
                {
                        $this->id = $id;
                        $this->username = $username;
                }

                public function display()
                {
                        echo "ID is: " . $this->id;
                        echo "<br>";
                        echo "Full Name is: " . userData::NAME;
                }
        }

        class Admin extends userData
        {
                public $level;

                public function __construct($id, $username, $level)
                {
                        $this->level = $level;
                        parent::__construct($id, $username);
                }

                public function display()
                {
                        echo "ID is: " . $this->id;
                        echo "<br>";
                        echo "Full Name is: " . userData::NAME;
                        echo "<br>";
                        echo "Level is: " . $this->level;
                }
        }

        $id = "101";
        $username = "Rahim";
        $user = new userData($id, $username);
        echo "<br>";
        $user->display();
        echo "<br>";
        $id = "001";
        $username = "Mithu";
        $level = "Administrator"; // Define $level before using it
        $ad = new Admin($id, $username, $level);
        $ad->display();
        ?>



</section>

<?php include 'footer.php'; ?>