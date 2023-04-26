<?php
    const PI = 3.14;

    interface CalculateSquare{
        public function calculateSquare():float;
    }

class Rectangle implements CalculateSquare{
    private $x;
    private $y;

    public function __construct( int $x, int $y){
        $this->x = $x;
        $this->y = $y;
    }

    public function calculateSquare():float
    {
        return $this->x * $this->y;
    }
}

class Square implements CalculateSquare{
    private $x;

    public function __construct( int $x){
        $this->x = $x;        
    }

    public function calculateSquare():float
    {
        return $this->x ** 2;
    }
}

class Circle{
    private $r;

    public function __construct(int $r){
        $this->r = $r;
    }

    public function calculateSquare():float
    {
        return PI * ($this->r ** 2);
    }
}

$object = [
    new Rectangle(2, 5),
    new Square(4),
    new Circle(5),
];

foreach ($object as $ob){
    if ($ob instanceof CalculateSquare){
        echo $ob->calculateSquare().'<br>';
    }
    if ($ob instanceof Rectangle) echo 'This is rectangle<br>';
}


