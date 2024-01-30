<?php include 'header.php';?>
        <section class="maincontent"> 
<!-- 
        "->" is a object Operator
        -> "$this"  gives you access to the object variable 
-->

            <?php
        
            class Person { // class
                public $name;  // property
                public $age;

                public function personName(){ //method
                        echo "Person name is: ".$this->name;
                }

                public function personAge($value){
                    echo "Person age is: ".$this->age=$value;
                }

            }

            $personNameNage = new Person(); // object (class of object refer by new)
            $personNameNage->name ="Rakib";
            $personNameNage-> personName();
            echo "<br>";
            $personNameNage->personAge(20);
           
                
                
            ?>

        

        </section>
        
<?php include 'footer.php';?>