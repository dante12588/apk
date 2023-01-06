<?php

class Database{


    private $pdo;
    private $dns;
    private $result;
    public function __construct(){
        $dns = 'mysql:host=' . DB_HOST;

        try{
            $this->pdo = new PDO( $dns .';dbname='.DB_NAME.';port='.DB_PORT, DB_USER, DB_PASSWD);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_PERSISTENT, true);
            $this->pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf8");
        }catch(PDOException $e){
            print_r($e);
        }

    }

    public function __call($name, $arguments){
        echo '<div style="color: red;">Wywołano metodę '. $name .'() do której nie masz dostępu albo nie istnieje</div> <br>';
    }

    public function query($query){
        $this->result = $this->pdo->prepare($query);
    }

    public function bind($params){
        foreach($params as $param => &$value) {
            $this->result->bindParam($param, $value);
        }
	}

    public function exec(){
        return $this->result->execute();
    }

    public function getResult(){
        $this->result->execute();
        return $this->result->fetchAll(PDO::FETCH_OBJ);
    }

    public function getResultSingle(){
        $this->result->execute();
        return $this->result->fetch(PDO::FETCH_OBJ);
    }

}