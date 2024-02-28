<?php
    // Files

    //Flags
        // r - read
        // w - write
        // a - append

        
    // Read file
    $file = fopen(filename: './example.txt', mode: 'r');

    $line = fgets($file);
    while($line) {
        echo $line . PHP_EOL;
        $line = fgets($file);
    }
    
    // Write file
    $file = fopen(filename: './example.txt', mode: 'w');
    
    fwrite($file, 'Hello World' . PHP_EOL);

    // Close file
    fclose($file);
?>