<?php

$n = "3";
$result = match($n) {
    "5" => "5",
    "3", "4" => "3 or 4",
    default => "nothing",
};

echo $result;