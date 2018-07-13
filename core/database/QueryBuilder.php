<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }


    public function insert($table, $parametro)
    {
        $statement = $this->pdo->prepare("insert into $table values ('$parametro')");

        $statement->execute();

    }
    
    public function delete($table, $parametro)
    {
        $statement = $this->pdo->prepare("delete from $table where nome='$parametro'");

        $statement->execute();

    }
}