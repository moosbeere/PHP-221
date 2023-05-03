<?php

namespace Services;

class Db {
    private $pdo;

    public function __construct(){
        $options = include __DIR__.'/../settings.php';
        $this->pdo = new \PDO(
            'mysql:host='.$options['host'].';dbname='.$options['dbname'],
            $options['user'],
            $options['password']
        );
        $this->pdo->exec('SET NAMES UTF8');
    }

    public function query(string $sql, $params=[]): ?array
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);

        if (!$result) return null;
        return $sth->fetchAll();
    }
}