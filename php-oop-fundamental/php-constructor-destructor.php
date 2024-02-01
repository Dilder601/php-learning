<?php include 'header.php'; ?>
<section class="maincontent">

        <!-- Constructor is a special method that is called when an object is created. -->
        <!-- destructors are used to free up resources that were allocated during the object's lifetime. -->

        <?php
                class userData {
                        public $id;
                        public $username;

                        public function __construct($id, $username) {
                                $this->id = $id;
                                $this->username = $username;
                                echo "User Id is {$this->id} and User Name is {$this->username} "; 
                        }

                        public function __destruct() {
                                unset($this->id);
                                unset($this->username);
                        }
                }

                $id ="101";
                $username = "Rahim";
                $user = new userData($id, $username);
         

        ?>


</section>

<?php include 'footer.php'; ?>