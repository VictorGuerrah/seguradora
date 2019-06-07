<?php

class QueryBuilder{

    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;

    }

    public function selectAll($table){
             
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();
    
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function select($table, $condition){
        $statement = $this->pdo->prepare("select * from {$table} where {$condition}");
        
        $statement->execute();
    
        return $statement->fetchAll(PDO::FETCH_CLASS);

    }
}