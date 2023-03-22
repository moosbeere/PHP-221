<?php
// const olga = 1;
echo '<form action="" method="get">
<input type="text" name="name" id="">
<input type="text" name="x" id="">
<button type="submit">Enter</button>
</form>';

if (isset($_GET['name'], $_GET['x'])){
    if (!empty($_GET['name'] && $_GET['x'])){
    foreach($_GET as $key => $value){
        eval("\$$key = $value;");
    }  
    echo "name = $name, x = $x<br>";
}
}


$XIX = 'Николай Павлович';
$XVI ="Иван Васильевич";
$XVIII ="Пётр Алексеевич";

if (isset($_GET['x'])){
    $vek = $_GET['x'];
    echo "В $vek правил ".$$vek;
}