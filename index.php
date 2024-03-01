<?php
    $data = '{
        "UK": "44",
        "US": "1",
        "India": "91",
        "China": "86",
        "Nigeria": "234",
        "Brazil": "55",
        "Japan": "81",
        "Germany": "49",
        "Russia": "7",
        "Mexico": "52",
        "Canada": "1",
        "France": "33",
        "Italy": "39",
        "South Korea": "82",
        "Spain": "34",
        "Australia": "61",
        "Indonesia": "62",
        "Netherlands": "31",
        "Saudi Arabia": "966",
        "Switzerland": "41",
        "Sweden": "46",
        "Norway": "47",
        "Denmark": "45",
        "Finland": "358",
        "Belgium": "32",
        "Austria": "43",
        "Greece": "30",
        "Poland": "48",
        "Turkey": "90",
        "Portugal": "351",
        "Czech Republic": "420",
        "Hungary": "36",
        "Ireland": "353",
        "New Zealand": "64",
        "Singapore": "65"
    }';

    // Search for Brazil
    $query = 'Brazil';
    $countries = json_decode($data, true);
    $phone_code = $countries[$query];

    echo $phone_code;

    // Saving the CSV file
    $file = fopen('countries.csv', 'w');

    fputcsv($file, ['Country', 'Phone Code']);
    foreach ($countries as $country => $phone_code) {
        fputcsv($file, [$country, $phone_code]);
    }

    fclose($file);
?>