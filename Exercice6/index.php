<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice6</title>
</head>
<body>
    <h1>Créez un tableau associatif contenant comme clé des numéro de département et comme valeurs les départements correspondants. Affichez les départements et leurs clés respectives.</h1>
    <?php
    $departementArray = array(
        75 => "Paris",
        62 => "Pas-de Calais",
        69 => "Rhône",
        976 => "Mayotte",
        81 => "Tarn"
    );
    foreach ($departementArray as $k => $v) {
        echo $k .' '.$v ."<br>";
    }
    ?>
</body>
</html>