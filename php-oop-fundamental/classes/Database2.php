<?php

abstract class Database2{
    public function connect();
    public function query();
    public function insertId();


    public function setHost($host){
        //set host
    }

    public function setDB($db){
        //set database
    }

    public function setUser($user){
        //set user name
    }
    public function setPass($pass){
        //set user pass
    }


}