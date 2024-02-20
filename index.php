<?php

// break
$names = ['John', 'Alex', 'Simon', 'Amir', 'Carlos'];
$name_to_find = 'Alex';
$found_name = false;
foreach ($names as $name) {
    if ($name === $name_to_find) {
        $found_name = true;
        break;
    }
}

if ($found_name) {
    echo "$name_to_find is found" . PHP_EOL;
} else {
    echo "$name_to_find is not found" . PHP_EOL;
}

// continue
$numbers = [3, 3000, 457, 786, 234];
foreach ($numbers as $number) {
    if ($number % 3 == 0) {
        continue;
    }
    echo $number . PHP_EOL;
}