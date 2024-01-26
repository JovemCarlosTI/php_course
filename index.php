<?php

$array = [1, 2, 3, 'carlos', [10, 20, 30]];
$b = array(1, 2, 3, 4);

// print_r($array);
// var_dump($array);

// each item
    // key
    // value

// Indexed
$c = [
    0 => 1,
    23 => 2,
    55 => 'carlos'
];

// Associative
$d = [
    'a' => 1,
    'c' => 2,
    'xyz' => 'carlos'
];

$d['novo'] = 'novo valor';
echo $d['novo'];