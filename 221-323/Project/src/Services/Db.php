<?php
namespace Services;

class Db{
    private $pdo;
    private static $instance;

    private function __construct(){
        $dbOptions = require(__DIR__.'/../settings.php');
        $this->pdo = new \PDO(
            'mysql:host='.$dbOptions['host'].';dbname='.$dbOptions['dbname'],
            $dbOptions['user'],
            $dbOptions['password']
        );
        $this->pdo->exec('SET NAMES UTF8');
    }

    public static function getInstance(){
        if (self::$instance === null)
            self::$instance = new self();
        return self::$instance;
    }

    public function query(string $sql, array $params = [], string $className = 'StdClass'): ?array
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);

        if ($result === false) return null;

        return $sth->fetchAll(\PDO::FETCH_CLASS, $className);
    }

}