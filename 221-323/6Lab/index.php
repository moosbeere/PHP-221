<?php

// Петров Иван Иванович 
// [A-Я][а-я]* [A-Я][а-я]* [A-Я][а-я]*

// Петров И.И.
// ([A-Я][а-я]*) ([A-Я])[а-я]* ([A-Я])[а-я]*


// $str = 'Ivanov Ivan Ivanovich';
// preg_match("/([A-Z][a-z]*).([A-Z])[a-z]*.([A-Z])[a-z]*/",$str, $arr);
// print $arr[0].'<br>';
// print "$arr[1] $arr[2]. $arr[3].";

// echo str_replace('abb', '!', 'aaabbaaa').'<br>';
// echo preg_replace('/abb*/', '!', 'aaabbbbbbbbbaaaa');
// echo preg_replace('/abb*/i', '!', 'AaAbbbbbbbbbaaaa');

// echo 'xax xx xsx x-x saaa xaasasx<br>';
// echo preg_replace('/x.+?x/', '!', 'xax xx xsx x-x saaa xaasasx');

// echo 'xabx xababx xaabbx<br>';
// echo preg_replace('/x(ab)+x/', '!', 'xabx xababx xaabbx');

// echo 'a+x ax aax aaaax<br>';
// echo preg_replace('/a\+x/', '!', 'a+x ax aax aaaax');

// echo 'a.x<br>';
// echo preg_replace('/a\.x/', '!', 'a.x azx abx');

// echo 'aaaaaa<br>';
// echo preg_replace('/a{0,5}/', '!', 'aaaaaa');

$str = 'a1b2c3';
// echo preg_replace('/(\d)/','$1$1', $str);

$skobki= 'axx ^xx bxx cxx exx';
// echo $skobki.'<br>';
// echo preg_replace('/[abc]x{2}/', '!', $skobki).'<br>' ;
// echo preg_replace('/[^abc]x{2}/', '!', $skobki).'<br>' ;
// echo '.xx ..xx .a.xx bxx<br>';
// echo preg_replace('/[.a]+?xx/', '!', '.xx ..xx .a.xx bxx');

// echo 'аяя Ёяя 2яя<br>';
// echo preg_replace('/[а-яё]яя/ui', '!', 'аяя Ёяя 2яя');

// echo preg_replace('/^[a\s]+$/', '!', 'aaa aaa aaa');

// echo preg_replace('/\b(a|b+)xx\b/', '!', 'aaxx bxx bbxx exx');

// echo preg_replace('/\\\\+/', '!', '\\ \\ \\\\', 3);

preg_match_all('/(a+)/', 'eee aaa aa a aaaaa bbb', $arr);
// var_dump($arr);
// echo '<br>';
// echo $arr[1][0];


// preg_match_all('/(?:[a-z]+)\.([a-z]{2,3})/', 'domain.ru site.com hello.by', $matches);
// // var_dump($matches);
// foreach($matches as $match){
//     foreach($match as $value){
//         echo $value.' ';
//     }
//     echo '<br>';
// }

echo preg_replace('/(?<=x)aaa/', '!', 'xaaa baaa').'<br>';//позитивный просмотр назад
//x! baaa
echo preg_replace('/(?<!x)aaa/', '!', 'xaaa baaa').'<br>';//негативный просмотр назад
//xaaa b!
echo preg_replace('/aaa(?=x)/', '!', 'aaax baaa').'<br>';//позитивный просмотр вперед
//xaaa baaa
echo preg_replace('/aaa(?!x)/', '!', 'xaaa baaa').'<br>';//негативный просмотр вперед
//x! b!
                              