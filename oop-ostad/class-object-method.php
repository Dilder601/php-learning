<?php
    class Human{
        public $name;
        function sayHi(){
            echo "Salam <br/>";
            $this->sayName();
        }
        function sayName(){
            echo "My name is {$this->name} <br/>";
        }
    }

    class Cat{
        function sayHi(){
            echo "Meow  <br/>";
        }
    }

    class Dog{
        function sayHi(){
            echo "Woof";
        }
    }

    $h1 = new Human();
    $h1->name ="Dilder";
    $h2 = new Human();
    $h2->name ="Mithu";
    $c1 = new Cat();
    $d1 = new Dog();

    $h1->sayHi();
    $h2->sayHi();
    $c1->sayHi();
    $d1->sayHi();

   