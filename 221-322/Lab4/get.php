<?php

if (isset($_GET['name'], $_GET['age'])){
    echo $_GET['name'].' '.$_GET['age'];
} else echo 'ok<br>';

if (!empty($_POST['name'] && $_POST['email'])){
    echo 'Your name is '.$_POST['name'].', your email is '.$_POST['email'];
} else 'your enter undefined';