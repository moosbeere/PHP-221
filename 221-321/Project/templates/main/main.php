<?php include __DIR__."/../header.php";?>
        <?php foreach($articles as $article):?>
            <h2><a href="article/show/<?=$article->getId();?>"><?=$article->getTitle();?></a></h2>

            <p><?=$article->getText();?></p>

            <hr>
        <?php endforeach;?>
<?php include __DIR__."/../footer.html";?>