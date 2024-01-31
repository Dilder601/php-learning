<?php include 'header.php'; ?>
<section class="maincontent">

        <!-- Constructor is a special method that is called when an object is created. -->

        <?php

        class Person
        { // class
                public $name;  // property
                public $age;

                public function __construct($name, $age)
                { // constructor
                        $this->name = $name;
                        $this->age = $age;
                }

                public function personDetails()
                { //method
                        echo "Person name is: {$this->name} and person name is: {$this->age} <br> ";
                }
        }

        $personDetails = new Person("Dilder Hossain", "29"); // object (class of object refer by new)
        $personDetails->personDetails();

        ?>



</section>

<?php include 'footer.php'; ?>