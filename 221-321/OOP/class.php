<?php

class User{
    private $name;

    public function __construct(string $name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}

class Article{
    private $title;
    private $text;
    private $author;

    public function __construct(string $title, string $text, User $author){
        $this->title = $title;
        $this->text = $text;
        $this->author = $author;
    }

    public function getTitle(){
        $this->title;
    }
    public function getText(){
        $this->text;
    }
    public function getAuthor():User
    {
        return $this->author;
    }
}

class Cat{

}

class Admin extends User{
    
}

$admin = new Admin('admin');
$cat = new Cat;
$user = new User("Ivan");
$article = new Article('Title', 'Text', $admin);
echo $article->getAuthor()->getName();