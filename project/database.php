<?php

class DATABASE{
    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $db_name = DB_NAME;

    public $link;
    public $error;

    public function __construct()
    {
        $this -> connectDatabase();
    }


    private function connectDatabase(){
        $this->link = new mysqli($this->host,$this->user, $this->pass, $this->db_name);

        if(!$this->link){
            $this->error = "Connection Failed".$this->link->connect_error;
            return false;
        } else{
             "Database Connectd Succefully";
        }
    }

    // select or read databas

    public function Select($query){
        $result = $this->link->query($query) or die ($this->link->error.__LINE__);
        if($result->num_rows>0){
            return $result;
        } else {
            return false;
        }
    }

}