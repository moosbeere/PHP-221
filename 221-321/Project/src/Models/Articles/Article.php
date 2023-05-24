<?php
namespace Models\Articles;
use Models\Users\User;
use Services\Db;
use Models\ActiveRecordEntity;

class Article extends ActiveRecordEntity{
    protected $authorId;
    protected $title;
    protected $text;
    protected $createdAt;

    public function getAuthorId():User
    {
        return User::getbyId($this->authorId);
    }
    public function getTitle(){
        return $this->title;
    }
    public function getText(){
        return $this->text;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function setText(string $text){
        $this->text = $text;
    }

    public function setAuthorId(User $author){
        $this->authorId = $author->getId();
    }

    public static function getTableName(): string
    {
        return 'articles';
    }
}