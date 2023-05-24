<?php
namespace Controllers;
use View\View;
use Models\Articles\Article;
use Models\Users\User;
use Models\Comments\Comment;

class ArticleController{

    private $view;
    private $db;

    public function __construct(){
        $this->view = new View(__DIR__.'/../../templates');
    }

    public function show(int $id){
  
        $article = Article::getById($id);
        $comments = Comment::findAllWhere('article_id', $id);

       if (!$article) {
            $this->view->renderHtml('errors/404.php', [], 404);
            return;
        }
        $this->view->renderHtml('article/show.php', ['article' => $article, 'comments'=>$comments]);
        
    }

    public function create(){
        $users = User::findAll();
        $this->view->renderHtml('article/create.php', ['users' => $users]);
    }

    public function store(){
        $author = User::getbyId($_POST['author']);
        $article = new Article();
        $article->setAuthorId($author);
        $article->setText($_POST['title']);
        $article->setTitle($_POST['text']);
        $res = $article->save();
        // $this->show(34);
    }

    public function edit(int $id){
        $article = Article::getById($id);
        $this->view->renderHtml('article/edit.php', ['article' => $article]);
    }

    public function update(int $id){
        $article = Article::getById($id);
        $article->setTitle($_POST['title']);
        $article->setText($_POST['text']);
        $user = User::getById($_POST['author_id']);
        $article->setAuthorId($user);
        $article->save();
        $this->show($id);
    }

    public function delete(int $id){
        $article = Article::getById($id);
        $article->destroy();
        $article->id = null;
        header("article/show/34");
    }
}