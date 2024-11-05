<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Aula06</title>
</head>
<body>
<?php
$array = [2, 5, 7, 8, 10, 18, 30, 37, 38, 60];

for ($i = 0; $i < count($array); $i++) {
    $numero = $array[$i];
    if ($numero % 2 == 0) {
        echo "$numero é par;\n";
    } else {
        echo "$numero é impar;\n";
    }
}
?>
</body>
</html>