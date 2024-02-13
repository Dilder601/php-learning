<?php

class Database{
    public $driver;
    public $link;

    public function setDriver($driver){
        $this ->driver = $driver;
    }

    public function connect(){
        if ($this-> driver == "mysql"){
            $mngMysql = new ManageMysql();
            $mngMysql -> setHost($host);
            $mngMysql -> setDb($db);
            $mngMysql -> setUsername($username);
            $mngMysql -> setPassword($password);
            $this->link = $mngMysql -> connect();
            
        }else if($this -> driver =="sqlite"){
            $mngSqlLite = new ManageSqlLite();
            $mngSqlLite -> setHost($host);
            $mngSqlLite -> setDb($db);
            $mngSqlLite -> setUsername($username);
            $mngSqlLite -> setPassword($password);
            $this->link = $mngSqlLite -> connect();
        }
    }



}