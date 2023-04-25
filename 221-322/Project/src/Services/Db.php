<?php

    namespace Services;

    class Db{
        private $pdo;

        public function __construct(){
            $dbOptions = require __DIR__.'/../settings.php';
            $this->pdo = new \PDO(
                'mysql:host='.$dbOptions['host'].';dbname='.$dbOptions['dbname'],
                $dbOptions['user'],
                $dbOptions['password']
            );
            $this->pdo->exec('SET NAMES UTF8');
        }
        public function query(string $sql, $params = [], string $className = 'stdClass'){
            $sth = $this->pdo->prepare($sql);
            $result = $sth->execute($params);

            if ($result === false) return null;
            else return $sth->fetchAll(\PDO::FETCH_CLASS, $className);
        }
    }