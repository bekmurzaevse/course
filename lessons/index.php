<?php

// require "/homeworks/lesson1.php";
// use Homeworks;

function qosiw(...$data): float|int
{
    $sum = 0;
    foreach($data as $item){
        $sum = $sum + $item;
    }
    return $sum;
}

// echo $awa;

qosiw(1,2,4,5,6,8,9,10,100);


