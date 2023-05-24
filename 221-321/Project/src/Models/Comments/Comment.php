<?php

namespace Models\Comments;
use Models\Article;
use Models\ActiveRecordEntity;

class Comment extends ActiveRecordEntity{
    protected $text;
    protected $authorId;
    protected $articleId;
    protected $createdAt;

    public function getArticle(): Article
    {
        return Article::getbyId($this->articleId);
    }

    public static function getTableName(): string
    {
        return 'comments';
    }
}