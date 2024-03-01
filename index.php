<?php
    // Read JSON
    $json = '{"name": "John", "age": 30, "city": "New York"}';
    $array = json_decode($json, associative: true);
    print_r($array);

    // Write JSON
    $json = json_encode(["name" => "John", "age" => 30, "city" => "New York"]);
    echo $json;

    // Read XML
    $xml = '<?xml version="1.0" encoding="UTF-8"?>
    <accounts>
        <account>
            <name>John</name>
            <age>30</age>
            <city>New York</city>
        </account>
        <account>
            <name>Peter</name>
            <age>35</age>
            <city>Chicago</city>
        </account>
        </accounts>';

    $dom = new DOMDocument();
    $dom->loadXML($xml);
    $accounts = $dom->getElementsByTagName("account");

    foreach ($accounts as $account) {
        $name = $account->getElementsByTagName("name")[0]->nodeValue;
        $age = $account->getElementsByTagName("age")[0]->nodeValue;
        $city = $account->getElementsByTagName("city")[0]->nodeValue;
        echo "Nome: $name, Idade: $age, Cidade: $city" . PHP_EOL;
    }

    // Write XML
    $accounts = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8" ?><accounts></accounts>');
    $accounts->addChild("account", "John")->addAttribute('type', 'admin');
    $accounts->addChild("account", "Peter")->addAttribute('type', 'user');

    $accounts->asXML("accounts.xml");
?>