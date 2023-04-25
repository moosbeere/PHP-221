<?php
    namespace Controllers;
    use View\View;

    class MainController{

        private $view;

        public function __construct(){
            $this->view = new View(__DIR__.'/../../templates');
        }

        public function main(){
            $articles = [
                ['name'=>'Статья 1', 'text'=>"Text 1"],
                ['name'=>'Статья 2', 'text'=>"Text 2"],
            ];
            $this->view->renderHtml("main/main.php", ['articles' => $articles]);
            // include(__DIR__."/../../templates/main/main.php");
        }

        public function sayHello(string $name){
            $this->view->renderHtml("main/hello.php", ['name' => $name]);
        }
    }