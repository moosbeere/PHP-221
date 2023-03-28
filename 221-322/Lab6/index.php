<?php

$str = "Петров Иван Иванович";
preg_match('/([A-ЯЁ][a-я]+)\s([A-ЯЁ])[a-я]+\s([A-ЯЁ])[a-я]+/u', $str, $arr);        
// echo "$arr[1] $arr[2]. $arr[3].";

// echo str_replace('ba', '!', 'bababab').'<br>';
// echo 'baba789bab(exexex)'.'<br>';
// echo preg_replace('/\\\\/', '!', 'b\\kdsfh');

// echo 'xx xax xaaaaax'.'<br>';
// echo preg_replace('/x.?x/', '!', 'xx xax xaaaaax');

// echo 'xabx xababx xaabbx'.'<br>';
// echo preg_replace('/(ab)+/', '!', 'xabx xababx xaabbx');

// echo 'xabx xababx xaabbx'.'<br>';
// echo preg_replace('/(ab){1,2}/', '!', 'xabx xababx xaabbx');

//   \s - только пробельные символы
//   \S - все кроме пробельных символов
//   \w - цифра или буква
//   \W - не цифра и не буква
//   \d - цифра
//   \D -  не цифра

// echo preg_replace('/\d/', '!', 'gfdh566rft5765tu67');
// echo preg_replace('/[^a-z]/', '!', 'gfdh566rft5765tu67');
// echo preg_replace('/[az^-]/', '!', 'aaaa5555^^^----');
$s = 'aaa aaa aaa';
// echo preg_replace('/\baaa\b/', '!', $s);

// echo preg_replace('/a|b|c/', '!', 'aec eae bccb', 4);

// echo preg_match('/a+?/', 'a aaa aa',$arr).'<br>';
// var_dump($arr);
// echo '<br>';
// echo preg_match_all('/a+?/', 'a aaa aa', $array).'<br>';
// var_dump($array);
// echo '<br>';

// preg_match_all('/([a-z]+)\.(?:[a-z]{2,3})/', 'domain.ru site.com hello.by', $matches);
// // var_dump($matches);
// foreach($matches as $match){
//     foreach($match as $value){
//         echo $value.' ';
//     }
//     echo '<br>';
// }

// echo preg_replace('/(a{3})@(b{3})/','$2@$1' , 'aaa@bbb');

// echo preg_replace('/(?<=@)([a-z]+)/', '!', 'xaaa baaa');
// echo preg_replace('/(?<!x)aaa/', '!', 'xaaa baaa');
// echo preg_replace('/aaa(?=x)/', '!', 'aaax aaab').'<br>';
// echo preg_replace('/aaa(?!x)/', '!', 'aaax aaab');

// echo preg_replace_callback('/(\d)\+(\d)=/', 'sum', '2+3=');
function sum($matches){
    $sum = $matches[1]+$matches[2];
    $result = $matches[0].$sum;
    return $result;
}

$data = 'a1b2c3';
echo preg_replace_callback('/(\d+)/', 'cube', $data);

function cube($matches){
    $result = pow($matches[0], 3);
    return $result;
}



