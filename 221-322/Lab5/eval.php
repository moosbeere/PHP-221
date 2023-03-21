<?php

// if (!empty($_GET['name'] && $_GET['x'])){
//     foreach($_GET as $key => $value){
//          eval("\$$key=$value;");
//     }
//     echo "name = $name & x = $x";
// }
if (isset($_GET['x'])){
    $vek = $_GET['x'];

$XVI = "Иван Васильевич";
$XVIII = "Петр Алексеевич";
$XIX = "Николай Павлович";

echo 'В '.$vek.' правил '.$$vek;
    
}



