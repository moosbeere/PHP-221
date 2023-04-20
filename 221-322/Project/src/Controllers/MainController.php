<?php
    namespace Controllers;

    class MainController{
        public function main(){
            $articles = [
                ['name'=>'Article 1', 'text'=>'text1'],
                ['name'=>'Article 2', 'text'=>'text2'],
            ];
            include(__DIR__.'/../../templates/main/main.php');
        }
        public function sayHello(string $name){
            echo "Привет, $name";
        }
    }