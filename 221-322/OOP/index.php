<?php

    class Cat{
        private $name;
        private $color;

        public function __construct(string $name="Murka", string $color="grey"){
            $this->name = $name;
            $this->color = $color;
        }

        public function setColor($color){
            $this->color = $color;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }
        public function sayHello(){
            echo "Мяу ".$this->color.'<br>';
        }
    }

    $cat = new Cat;
    // $cat->setColor('grey');
    // $cat->setName('Murka');
    $cat->sayHello();
    // echo $cat->getName();
    // var_dump($cat);

    $cat1 = new Cat("Barsik", "black");
    // var_dump($cat1);

    // $x = 3;
    if (isset($x)) echo "ok"; else echo 'no';