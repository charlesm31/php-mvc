<?php

class QueryBuilder {

    protected $pdo;

    // Start new DB Connection
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    //  Select all Records of a Table
    public function selectAll($table, $intoClass) {
        $stmt = $this->pdo->prepare("SELECT * FROM {$table}");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    //  Insert values in a table
    public function insert($table, $parameters) {

        $query = sprintf(
                'INSERT INTO %s (%s) values (%s)', 
                $table, 
                implode(', ', array_keys($parameters)), 
                ':' . implode(', :', array_keys($parameters))
        );

        try {
            
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($parameters);
            
        } catch (Exception $ex) {
            
            die('Error! Cannot Execute Query.');
            
        }
    }

}
