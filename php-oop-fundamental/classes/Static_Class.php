<?php

    class Static_Class{
        public function framework(){
            echo  self::getClass()."<br>";
        }

        // public function getFramework(){
        //     self::framework();
        // }
        public static function getClass(){
            return __CLASS__;
        }


    }

    

?>