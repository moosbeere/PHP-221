<?php include __DIR__."/../header.php";
?>
            <h2><?=$article->getTitle();?></h2>
            <p><?=$article->getText();?></p>
<ul>
    <li><a href="/student-221/221-321/Project/www/article/edit/<?=$article->getId();?>">Редактировать статью</a></li>
    <li><a href="/student-221/221-321/Project/www/article/delete/<?=$article->getId();?>">Удалить статью</a></li>
</ul>

<?php var_dump($comments);?>
            
<?php include __DIR__."/../footer.html";?>