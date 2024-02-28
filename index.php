<?php
// strtotime
// $timestamp = strtotime(datetime: '20 feb 2024');

$nascimento = '19 jun 2004';
$dias_desde_nascimento = floor((strtotime('now') - strtotime($nascimento)) / 3600 / 24);

echo "Dias desde o nascimento em $nascimento: $dias_desde_nascimento dias.";
?>