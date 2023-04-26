<?php

// class A{
//     static public function test(int $x){
//         return "x = $x";
//     }
// }

// echo A::test(232);

// $a = new A;
// echo $a->test(6);

class User{
    private $role;
    private $name;
    static public $count;

    public function __construct(string $role, string $name){
        $this->role = $role;
        $this->name = $name;
        self::$count++;
    }

    static public function createAdmin(string $name){
        return new self('admin', $name);
    }
}

$user = new User('admin', 'Ivan');
$admin = User::createAdmin("Gena");
// var_dump($admin);
echo User::$count;