<?php

//namespace exercice;
/**
 * Autoloader 
 */
require 'class/Autoloader.php';
Autoloader::register();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php orienté Objet</title>
</head>

<body>
    <h1>Bonjour</h1>
    <?php
    $monArticle1 = new Article();
    var_dump($monArticle1);
    $monArticle2 = new Article('le nouveau monde','bonjour bonsoir bien venu chez vous','2021-04-13');

    $monArticle1->setTitre('Ma vie mon oeuvre');
    $monArticle1->setContenu('lorem lorem lorem lorem lorem');
    $monArticle1->setDateDePublication('2021-04-13');

    $monArticle1->afficher();
    $monArticle2->afficher();

    phpinfo();
    ?>
</body>

</html>