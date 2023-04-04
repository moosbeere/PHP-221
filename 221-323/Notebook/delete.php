<?php
    require('menu.php');
    require('db.php');
    $mysqli = connect();
    $sql = "SELECT  `firstname`, LEFT(name,1) as name, LEFT(lastname, 1) as lastname FROM `notebook`";
    $res = mysqli_query($mysqli, $sql);
    $array = mysqli_fetch_assoc($res);
    foreach($array as $key=>$value){
        echo $key.'='.$value.'<br>';
    }
    // while($array = mysqli_fetch_assoc($res)){
        // echo '<a href="">'.$array['firstname'].' '.$array['name'].'.'.$array['lastname'].'.</a>';
    // }
    require('footer.php');
?>