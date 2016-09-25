<?php 

class QueryBuilder{
    protected $pdo;
    
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass){
        $stmt = $this->pdo->prepare("select * from {$table}");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }
}