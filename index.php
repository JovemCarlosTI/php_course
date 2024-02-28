<?php
    // Read CSV
    $file = fopen('./example.csv', 'r');

    $line = fgetcsv($file);
    while($line) {
        $id = $line[0];
        $name = $line[1];

        echo "ID: $id, Name: $name" . PHP_EOL;
        $line = fgetcsv($file);
    }

    fclose($file);

    // Write CSV
    $file = fopen('./example.csv', 'a');

    fputcsv($file, ['4', 'Pinterest']);

    fclose($file);
?>