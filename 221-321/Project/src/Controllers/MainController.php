<?php

namespace Controllers;

class MainController{
    public function main(){
        echo "Главная страница";
    }

    public function sayHello(string $name){
        echo "Hello, My name is $name";
    }
}