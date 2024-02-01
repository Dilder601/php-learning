<?php include 'header.php'; ?>
<section class="maincontent">
 

        <?php
                class userData {
                        public $id;
                        public $username;

                        const NAME ="Dilder Hossain";
                        public static $college = "Feni Govt. College.";

                  

                        public function __construct($id, $username) {
                                $this->id = $id;
                                $this->username = $username;
                                echo "User Id is {$this->id} and User Name is {$this->username} "; 
                        }

                        public function display() {
                                echo "Full Name is: ".userData::NAME;
                                echo "<br>";
                                echo "College Name is: ".userData::$college;
                        }

                        public function __destruct() {
                                unset($this->id);
                                unset($this->username);
                        }
                }

                $id ="101";
                $username = "Rahim";
                $user = new userData($id, $username);
                echo "<br>";
                $user->display();
         

        ?>


</section>

<?php include 'footer.php'; ?>