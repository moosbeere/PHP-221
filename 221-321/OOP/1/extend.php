<?php

    class Post{
        private $title;
        protected $text;

        public function __construct(string $title, string $text){
            $this->title = $title;
            $this->text = $text;
        }
        public function setTitle(string $title){
            $this->title = $title;
        }
        public function setText(string $text){
            $this->text = $text;
        }
        public function getTitle(){
            return $this->title;
        }
        public function getText(){
            return $this->text;
        }
    }

    class Lesson extends Post{
        private $homework;

        public function __construct(string $title, string $text, string $homework){
            parent::__construct($title, $text);
            $this->homework = $homework;
        }
        public function setHomeWork(string $homework): void
        {
            $this->homework = $homework;
            $this->text = "jhdfgjsg";
        }
        public function getHomeWork(): string
        {
            return $this->homework;
        }
    }

    $post = new Post("Article", "Lorem Ipsum");
    // var_dump($post);

    $lesson = new Lesson("Lesson1", "OOP", "HW");
    $lesson->setTitle("New");
    $lesson->setHomeWork("dfs");
    // $lesson->setHomeWork("HW");
    var_dump($lesson);
