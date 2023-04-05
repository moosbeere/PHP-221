<?php
    function connect(){
        $mysqli = mysqli_connect('localhost', 'root', '', 'friendsheep');
        if (mysqli_connect_errno()) echo "Ошибка подключения".mysqli_connect_error();
        return $mysqli;
    }
?>