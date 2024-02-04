<?php include 'header.php'; ?>
<section class="maincontent">

       <!-- 
        access modifier:
       1. public
       2. private
       3. protected
       4. static
       5. final
       6. abstract
       7. interface
        -->


        <?php
        class userData
        {
                public $id;
                public $username;
                // public $age = "29";
                // private $age = "29";
                protected $age = "29";
                 

                public function __construct($id, $username)
                {
                        $this->id = $id;
                        $this->username = $username;
                }
                
                public  function display()
                {
                        echo "ID is: " . $this->id;
                        echo "<br>";
                        echo "Full Name is: " . $this->username;
                        echo "<br>";
                        echo "Age is: " . $this->age ." Inside Class";
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
                        echo "Full Name is: " . $this->username;
                        echo "<br>";
                        echo "Level is: " . $this->level;
                        echo "<br>";
                        echo "Age is: " . $this->age ." in the sub Class";
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