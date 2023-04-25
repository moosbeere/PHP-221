<?php
    namespace Models\Articles;
    use Models\Users\User;

    class Article{
        private $id;
        private $authorId;
        private $name;
        private $text;
        private $createdAt;

       public function __set($name, $value){
        $camelCaseName = $this->underScoreToCamelCase($name);
        $this->$camelCaseName = $value;
        // echo "Я пытаюсь создать свойство $name со значением $value<br>";
       }

       private function underScoreToCamelCase(string $str){
        return lcfirst(str_replace('_', '', ucwords($str, '_')));
       }

       public function getId(){
        return $this->id;
       }
       public function getText(){
        return $this->text;
       }
       public function getName(){
        return $this->name;
       }
    }
