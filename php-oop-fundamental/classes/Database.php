<?php

class Database{

    private static $instance = null;

    public function __construct()
    {
        if (self::$instance == null) {
            self::$instance = $this;
            echo "Created New One.<br>";
            return self::$instance;
        }else{
            echo "Already Created.<br>";
            return self::$instance;
        }
           
    }

}