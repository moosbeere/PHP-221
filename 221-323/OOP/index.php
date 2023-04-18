<?php

class Cat{
    private $name;
    public $color;
    public $weigth; 

    public function __construct(string $name="Manke", string $color="white", int $weight = 25){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    
    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function sayHello(){
        return "Hello, I`m ".$this->name.'<br>';
    }
}

$cat1 = new Cat("Murka", "blue", 30);
$cat2 = new Cat("Barsik", "black", 30);
$cat3 = new Cat;
// $cat4 = new Cat();

$cat1->setName("Murka");
$cat2->setName("Barsik");
$cat3->setName("abrakadabra");
echo $cat1->getName().'<br>';
echo $cat1->sayHello();
echo $cat2->sayHello();
echo $cat3->sayHello();

// $cat1->name = "Murka";
// $cat2->name = "Barsik";
// echo $cat1->name;

// var_dump($cat1);
// var_dump($cat2);
