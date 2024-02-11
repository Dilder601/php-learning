<?php
    class Human{
        public $name;
        public $age;

        public function __construct($personName, $personAge = "0"){ 
            $this->name = $personName;
            $this->age = $personAge;
        }

        public function sayHi(){
            echo "Salam <br/>";
            $this->sayName();
        }
        public function sayName(){
            if ($this->age){
                echo "My name is {$this->name} and I'm {$this->age} years old <br/>";
            } else
            echo "My name is {$this->name} <br/>";
        }
    }



    $h1 = new Human("Dilder","21");
    // $h1->name ="Dilder";
    $h2 = new Human("Mithu");
    // $h2->name ="Mithu";
   

    $h1->sayHi();
    $h2->sayHi();


   