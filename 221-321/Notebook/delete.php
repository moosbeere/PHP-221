<?php
    include('menu.php');
    require('db.php');
    $mysqli = connect();

    

    $sql = "SELECT `id`, `firstname`,LEFT(`name`,1) as name, LEFT(`lastname`,1) as lastname FROM `notebook`";
    $res = mysqli_query($mysqli, $sql);
    while($arr = mysqli_fetch_assoc($res)){
        echo '<a href="delete.php?p=delete&id='.$arr['id'].'">'.$arr['firstname'].' '.$arr['name'].'.'.$arr['lastname'].'.</a><br>';
    }
    include('footer.php');
?>