<?php

class Post{
    private $title;
    private $text;

    public function __construct(string $title, string $text){
        $this->title = $title;
        $this->text = $text;
    }
    public function setTitle(string $title){
        $this->title = $title;
    }
    public function getTitle(){
        return $this->title;
    }
    public function setText(string $text){
        $this->text = $text;
    }
    public function getText(){
        return $this->text;
    }
}

class HomeWork extends Post {
    private $homeWork;

    public function __construct(string $title, string $text, string $homeWork){
        parent::__construct($title, $text);
        $this->homeWork = $homeWork;
    }
    public function setHomeWork(string $homeWork){
        $this->homeWork = $homeWork;
    }
    public function gethomeWork(){
        return $this->homeWork;
    }
}

$post = new Post("title", "text");
$hw = new HomeWork("title_hw", "text", "different");
$hw->setHomeWork("1213");
echo $hw->getTitle().' ';
echo $hw->getHomeWork();

// echo $post->getTitle().' ';
// echo $hw->getTitle();