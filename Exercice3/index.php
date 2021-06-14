<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Créez un tableau associatif contenant comme clé des chiffres de 1 à 5 et comme valeurs cinq langage de programmation. Affichez ces langages.</h1>
    <?php
        $arrayLangages =array(
            1 => "JavaScript",
            2 => "Kotlin",
            3 => "PHP",
            4 => "python",
            5 => "Java",
        );
       
        echo 'le cinquiéme valeurs est :  '.$arrayLangages[5];

    ?>
</body>
</html>