<?php




$people = [
    ['name' => 'Sarah', 'age' => 5],
    ['name' => 'John', 'age' => 35],
    ['name' => 'Sherlock', 'age' => 34],
    ['name' => 'Watson', 'age' => 40],
    ['name' => 'Rachel', 'age' => 9],
    ['name' => 'Joseph', 'age' => 25],
    ['name' => 'Ross', 'age' => 7],
    ['name' => 'Monica', 'age' => 12],
    ['name' => 'Chandler', 'age' => 15],
    ['name' => 'Joey', 'age' => 17],
];

// // Quantidade de pessoas com mais de 18 anos de idade
// $count_adults = 0;
// $count_childs = 0;

// foreach($people as $person) {
//     if($person['age'] >= 18) $count_adults++;
//     else $count_childs++;
// }

// echo "Tem $count_adults adultos e $count_childs crianças" . PHP_EOL;

// // Lista de adultos entre 22 a 30
// $adults_for_job_opening = [];
// foreach($people as $person) {
//     if($person['age'] >= 22 && $person['age'] <= 30) {
//         $adults_for_job_opening[] = $person;
//     }
// }

// print_r($adults_for_job_opening);

// Mesclagem de soluções
$count_adults = 0;
$count_childs = 0;
$adults_for_job_opening = [];
foreach($people as $person) {
    $age = $person['age'];
    if($age >= 18) {
        $count_adults++;

        if($age >= 22 && $age <= 30) $adults_for_job_opening[] = $person;
    } else {
        $count_childs++;
    }
}

echo "Tem $count_adults adultos e $count_childs crianças" . PHP_EOL;
echo "Lista de possíveis candidatos para a vaga de emprego: " . PHP_EOL;
print_r($adults_for_job_opening);