<?php

require 'conf.php';

class database{
    public function connect(){
        try{
            $con = new PDO(DBTYPE.':host='.HOST.';dbname='.DBNAME,USER,PASS);
            //$con = new PDO("mysql:host=localhost;dbname=test",'root','');
            //echo 'connection success!';
        }
        catch (PDOException $e){
            die('Error!: '. $e->getMessage());
        }

        return $con;
    }

    public function selectAll(){
        $stmt = $this->connect()->prepare('Select * from test');
        $stmt->execute();

        $res = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $res;
    }

    public function insert($data = array()){
        $stmt = $this->connect()->prepare('Insert into test(name) values(:name)');
        $stmt->execute($data);
        
        if(!$stmt){
            return false;
        }
        return true;
    }
}