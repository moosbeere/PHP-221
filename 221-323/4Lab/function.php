<?php
if (isset($_GET['name'], $_GET['age'])){
    echo 'Ваше имя: '.$_GET['name'].'<br>';
    echo 'Ваш возраст: '.$_GET['age'];
}else echo "Недостаточно входных параметров<br>";

if (!empty($_POST['name'] && $_POST['email'])){
    echo 'Ваше имя: '.$_POST['name'].'<br>';
    echo 'Ваш email: '.$_POST['email'];
}else echo 'Вы не ввели значения';




// echo sum(10,2);// вызов функции 
// echo '<br>';
// echo div($a,2);


// foreach ($GLOBALS as $key=>$glob){
//     // echo $key .' = '.$glob.'<br>';
// }

// function sum($a, $b){//объявление функции
//     global $a;
//     $a = 30;
//     return $a;
// }


// function div($a, $b){
//     return $a/$b;
// }

    

// function fact($n){
//     $k = 1;
//     for ($i = 2; $i<=$n;$i++) $k*=$i;
//     return $k;
// }

// function factRec($n){
//     if ($n<2) return 1;
//     else return $n*factRec($n-1);
// }

// echo fact(5);
// echo '<br>';
// echo factRec(5);