<?php
if (isset($_GET['name'],$_GET['age'])){
    echo $_GET['name'].' ';
    echo $_GET['age'];
}else echo 'error<br>';

if (!empty($_POST['name']) && $_POST['email']){
    echo 'Your name '.$_POST['name'].'<br>';
    echo 'Your email '.$_POST['email'].'<br>';
}else echo 'empty';

