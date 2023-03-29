<?php

    // $str = "Петров Иван Иванович";
    // preg_match('/([А-ЯЁ][а-яё]+)\s([А-ЯЁ])[а-яё]+\s([А-ЯЁ])[а-яё]+/u',$str, $mathes);
    // // var_dump($mathes);
    // echo "$mathes[1] $mathes[2]. $mathes[3].";
    // echo "Петров И.И.";

    // echo str_replace('aA', '!', 'aA bAb abab').'<br>';
    // echo preg_replace('/[aA]/', '!', 'aA bAb abab');

    // echo 'xabx xababx xaabbx<br>';
    // echo preg_replace('/x(ab)+x/', '!', 'xabx xababx xaabbx');

    // echo 'a23e4x qw x e<br>';
    // echo preg_replace('/a.+?x/', '!', 'a23e4x qw x e');

    // echo 'xx xax xaax xaaaax<br>';
    // echo preg_replace('/xa{0,2}x/', '!', 'xx xax xaax xaaaax');

    // echo 'axx bxx -xx dxx<br>';
    // echo preg_replace('/[:@-]xx/', '!', 'axx bxx -xx dxx');

    // echo $str = 'aaa aaa aaa';
    // echo '<br>';
    // echo preg_replace('/^aaa$/', '!', $str);//работа со строкой
    // echo preg_replace('/\baaa\b/', '!', $str);//работа со словом
    
    // echo $str = 'bbbb';
    // echo '<br>';
    // echo preg_replace('/a|b+|c/', '!', $str);

    // echo $str = '\\ \\ \\\\';
    // echo '<br>';
    // echo preg_replace('/\\\\/', '!', $str, 3);//работа со строкой


    // $str = 'hello.my-site.by.my-site.com';
    
    // if (preg_match('/https?:\/\/[a-z]{2,}\.[a-z]{2,3}/i', $str)) echo 'ok';
    //     else echo 'no';

    //  if (preg_match('/^([a-z-]+\.){2}[a-z]{2,3}$/', $str)) echo 'ok';
    //     else echo 'no';

    // preg_match('/^\d{0,12}$/');

    // echo $str = 'eee ee aaa aa bbb<br>';
    // preg_match_all('/(a)+/', $str, $mathes);
    // var_dump($mathes);

    // $str = 'domain.ru site.com hello.by';
    // preg_match_all('/([a-z]+)\.([a-z]{2,3})/', $str, $mathes);
    // // var_dump($mathes);
    // foreach ($mathes as $match){
    //     foreach($match as $value){
    //         echo $value.' ';
    //     }
    //     echo '<br>';
    // }

    // echo preg_replace('/(?:a+)@(b+)/','$2@$1' ,'a@b aa@bb aaa@bbb');
$str = 'xaaa baaa';
//  echo preg_replace('/(?<!x)aaa/', '!', $str);
 $str1 = 'aaax aaab';
 echo preg_replace('/aaa(?=x)/', '!', $str1);
