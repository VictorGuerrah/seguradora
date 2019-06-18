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


    public function insert($table, $parameters){

        $sql = sprintf(

        'insert into %s (%s) values (%s)',

        $table,

        implode(', ', array_keys($parameters)),
        ':' . implode(', :', array_keys($parameters))
    );
        

        try{
        $statement = $this->pdo->prepare($sql);


        $statement->execute($parameters);

        }catch(Exception $e) {

        die('Alguma coisa deu errado.');
        }
    }

    public function delete($table, $parameter){

        $sql = sprintf(

        'delete from %s where id=%s',

        $table, $parameter

        );


        try{

        $statement = $this->pdo->prepare($sql);

        
        $statement->execute();

        }catch(Exception $e) {

        die('Alguma coisa deu errado.');
        }
    }

    public function update($table, $parameters, $id){

        $sql = sprintf(

            'update %s set ',
                $table
        );
        
        foreach($parameters as $parameter=>$val){
       
        $sql.=$parameter." = "."'".$val."'".",";
        }

        $sql = substr(trim($sql), 0, -1);
        
        $sql.=" where id=".$id;
        
            try{
                
            var_dump($sql);

            $statement = $this->pdo->prepare($sql);
    
            $statement->execute();
    
            }catch(Exception $e) {
    
            die('Alguma coisa deu errado.');
            }
    }
}
