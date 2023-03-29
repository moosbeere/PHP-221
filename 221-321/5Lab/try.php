<?php

$text = 'hello world';
$arr = explode(' ', $text);
upper($arr);
print_r(implode(' ', $arr))

function upper(&$arr){
    for ($i = 0; $i<count($arr); $i++){
        if ($i%2)
            $arr[$i] = strtoupper($arr[$i]);
    }
}