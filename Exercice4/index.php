<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Créez un tableau associatif contenant comme clé des chiffres de 1 à 5 et comme valeurs cinq langage de programmation. Ajoutez une clé et assignez lui une valeur. Affichez cette valeur.</h1>
    <?php
        $arrayLanguages =array(
            1 => "JavaScript",
            2 => "Kotlin",
            3 => "PHP",
            4 => "python",
            5 => "Java",
        );
        //methode simple : $arrayLanguages[6] = "SQL"

        array_push($arrayLanguages ,"C++","C#");
        echo "la siéxme valeur est : " .$arrayLanguages[6];
        //var_dump($arrayLanguages)

       

    ?>
</body>
</html>