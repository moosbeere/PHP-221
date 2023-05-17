<?php


    function sum($a, $b){
        return $a+$b;
    }

    $sumReflector = new ReflectionFunction('sum');
    echo $sumReflector->getFileName().'<br>';
    echo $sumReflector->getStartLine().'<br>';
    echo $sumReflector->getEndLine().'<br>';

    // abstract class HumanAbstract
    // {
    //     private $name;

    //     public function __construct(string $name)
    //     {
    //         $this->name = $name;
    //     }

    //     public function getName(): string
    //     {
    //         return $this->name;
    //     }

    //     abstract public function getGreetings(): string;
    //     abstract public function getMyNameIs(): string;

    //     public function introduceYourself(): string
    //     {
    //         return $this->getGreetings() . '! ' . $this->getMyNameIs() . ' ' . $this->getName() . '.';
    //     }
    // }

    // class RussianHuman extends HumanAbstract{
    //     public function getGreetings(): string
    //     {
    //         return 'Привет';
    //     }
    //     public function getMyNameIs(): string
    //     {
    //         return 'Меня зовут';
    //     }
    // }
    // class EnglishHuman extends HumanAbstract{
    //     public function getGreetings(): string
    //     {
    //         return 'Hello';
    //     }
    //     public function getMyNameIs(): string
    //     {
    //         return 'My name is';
    //     }
    // }

    // $anna = new RussianHuman('Анна');
    // $annet = new EnglishHuman('Annet');

    // echo $anna->introduceYourself();
    // echo $annet->introduceYourself();
?>
