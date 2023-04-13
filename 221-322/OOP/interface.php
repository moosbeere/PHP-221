<?php
    const PI =  3.1416;

    interface Calculate
    {
        public function calculate():float;
    }


    class Rectangle implements Calculate
    {
        private $x;
        private $y;

        public function __construct(float $x, float $y){
            $this->x = $x;
            $this->y = $y;
        }

        public function calculate():float
        {
            return $this->x * $this->y;
        }
    }

    class Square implements Calculate{
        private $x;
        
        public function __construct(float $x){
            $this->x = $x;
        }

        public function calculate():float
        {
            return $this->x ** 2;
        }
    }

    class Circle {
        private $r;
        
        public function __construct(float $r){
            $this->r = $r;
        }

        public function calculate():float
        {
            return PI * ($this->r ** 2);
        }
    }

    $objects = [
        new Rectangle(3,5),
        new Square(6),
        new Circle(2)
    ];

    foreach($objects as $ob){
        if ($ob instanceof Calculate)
            echo 'Площадь '.$ob->calculate().'<br>';
        else echo 'Объект не реализует интерфейс';
    }