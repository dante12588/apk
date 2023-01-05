<?php

class Database{


    private $pdo;
    private $dns;
    public function __construct(){
        $dns = 'mysql:host=' . DB_HOST;

        try{
            $this->pdo = new PDO( $dns .';dbname='.DB_NAME.';port='.DB_PORT, DB_USER, DB_PASSWD);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            print_r($e);
        }

    }

    public function query(){
        $result = $this->pdo->prepare('SELECT * FROM test');
        $result->execute();
        return $result->fetchAll();
    }


}