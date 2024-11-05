<?php

$tab = [1 => [2, 4, 6], 2 => [5, 8, 9]];

foreach($tab as $key=>$val){
    foreach($val as $key1=>$val2){
        echo "$val2 <br>";
    }
}