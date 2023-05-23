<?php
namespace Models;
use Services\Db;

abstract class ActiveRecordEntity{
    protected $id;

    public function __set($name, $value){
        $nameToCamelCase = $this->underscoreToCamelCase($name);
        $this->$nameToCamelCase = $value;
    }

    private function underscoreToCamelCase(string $source){
        return lcfirst(str_replace('_', '', ucwords($source, '_')));
    }

    public function getId(){
        return $this->id;
    }

    public static function findAll(): array
    {
        $db = Db::getInstance();
        return $articles = $db->query('SELECT * FROM `'.static::getTableName().'`', [], static::class);
    }

    public static function getById(int $id): ?self
    {
        $db = Db::getInstance();
        $entities = $db->query('SELECT * FROM `'.static::getTableName().'` WHERE `id`=:id;', [':id'=>$id], static::class);
        return $entities ? $entities[0] : null;
    }
    abstract protected static function getTableName(): string;
}