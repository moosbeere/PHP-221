<?php
    session_start();
    require('form.html');
    if (isset($_POST['calculate']) && !empty($_POST['calc'])){
        eval('$res='.$_POST['calc'].';');
        $_SESSION['history'][] = $_POST['calc'].' = '.$res;
        for ($i = 0; $i < count($_SESSION['history']); $i++)
            echo $_SESSION['history'][$i].'<br>';
    }
    if (isset($_POST['destroy'])) session_destroy();
?>