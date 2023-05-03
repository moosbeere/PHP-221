<?php include __DIR__."/../header.php";?>
        <?php foreach($articles as $article):?>
            <h2><a href="article/show/<?=$article['id'];?>"><?=$article['title'];?></a></h2>

            <p><?=$article['text'];?></p>

            <hr>
        <?php endforeach;?>
<?php include __DIR__."/../footer.html";?>