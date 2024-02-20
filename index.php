<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de HTML</title>
</head>
<body>
    <?php
        $names = ['pratham', 'simon', 'amir', 'carlos', 'vitto', 'oliver'];
    ?>
    <h1>Names</h1>
    <ul>
        <?php foreach($names as $name) {
            echo "<li>$name</li>";
        }?>
    </ul>
</body>
</html>