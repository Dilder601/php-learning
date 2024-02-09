<?php
    class Person{
        public $name = "Dilder";
        public $age = "29";
        public $skill = "Oracle Apex";

        private $email = "dilder@gmail.com";
        protected $password = "123456";

        function iteratorInner(){
        
            echo "Inside Class"."<br>";
    
            foreach ($this as $key => $value) {
                echo "<pre>";
                echo "$key=>$value";
                echo "</pre>";
            }
        }

    }

 

   



?>