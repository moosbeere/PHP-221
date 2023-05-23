<?php include __DIR__."/../header.php";?>
            <h2><?=$article->getName();?></h2>
            <p><?=$article->getText();?></p>
            <p><?=$article->getAuthorId()->getNickname();?></p>
<?php include __DIR__."/../footer.html";?>