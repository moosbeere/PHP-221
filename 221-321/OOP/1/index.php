<?php

    class Cat{
        private $name;
        public $color;
        public $weidth;

        public function __construct(string $name="Basic", string $color="White", int $weidth=4){
            $this->name = $name;
            $this->color = $color;
            $this->weidth = $weidth;
        }

        public function setName(string $name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }

        public function sayHello(){
            echo "Hello, I'm ".$this->name.'<br>';
        }        
    }

    $cat = new Cat("Murka", "Black", 2);
    echo $cat->getName().' ,'.$cat->color.' ,'.$cat->weidth.'<br>';
    // $cat->name = "Murka";
    $cat1 = new Cat("Barsik", "Grey", 5);
    // $cat1->name = "Barsik";
    $cat1->setName("Barsik");
    // echo $cat1->getName().'<br>';
    // var_dump($cat);
    $cat2 = new Cat;
    $cat->setName("Murka");    
    $cat->sayHello();
    $cat1->sayHello();
    $cat2->sayHello();


