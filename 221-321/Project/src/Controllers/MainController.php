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
            ['title'=>'Статья 1', 'text'=>'Всем привет, это текст первой статьи'],
            ['title'=>'Статья 2', 'text'=>'Всем привет, это текст второй статьи'],
        ];
        
        $this->view->renderHtml('main/main.php', ['articles' => $articles]);
    }

    public function sayHello(string $name){
       
        $this->view->renderHtml('main/hello.php', ['name' => $name]);
    }
}