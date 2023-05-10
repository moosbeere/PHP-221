<?php
    namespace Models;
    use Services\Db;

    abstract class ActiveRecordEntity{
        protected $id;

        public function __set($name, $value){
            $nameCamelCase = $this->underscoreToCamelcase($name);
            $this->$nameCamelCase = $value;
        }
        
        public function getId(){
            return $this->id;
        }

        public static function getById(int $id): ?self
        {
            $db = new Db;
            $entities = $db->query('SELECT * FROM `'.static::getTableName().'` WHERE `id`=:id', [':id' => $id], static::class);
            return $entities ? $entities[0]:null;
        }

        public static function findAll(): array
        {
            $db = new Db;
            return $db->query('SELECT * FROM `'.static::getTableName().'`', [], static::class);
        }
    
        private function underscoreToCamelcase(string $source)
        {
            return lcfirst(str_replace('_', '', ucwords($source, '_')));
        }

       abstract protected static function getTableName(): string;
    }
?>