<?php

    const PI =  3.1416;
    class Rectangle implements Calculate{
        private $x;
        private $y;

        public function __construct(int $x, int $y){
            $this->x = $x;
            $this->y = $y;
        }
        public function calculate(): float
        {
            return $this->x * $this->y;
        }
           }

    class Square implements Calculate{
        private $a;
        public function __construct(int $a){
            $this->a = $a;

        }
        public function calculate(): float
        {
            return $this->a**2;
        }
    }

    class Circle{
        private $r;
        public function __construct(int $r){
            $this->r = $r;
        }
        public function calculate(): float
        {

            return PI * ($this->r**2);
        }
    }

    interface Calculate{
        public function calculate(): float;
    }

    $rectangle = new Rectangle(2,3);
    

    if ($rectangle instanceof Calculate){
        echo $rectangle->calculate();
    }else echo "ok";

    $objects = [
        new Square(4),
        new Rectangle(4,4),
        new Circle(7)
    ];

    foreach($objects as $ob){
        if ($ob instanceof Calculate)
            echo $ob->calculate(). '<br>';
    }