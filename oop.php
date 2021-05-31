<?php 
require_once('class/Page.php');
require_once('class/Article.php');

$lacigalle = new Page ('lettre à mon pèere', 'Dans une ambiance délétère, Laurence Bertrand Dorléac va être proposée pour succéder à Olivier Duhamel. Les tractations ont été suivies de près par le ministre Blanquer, avec en ligne de mire l’élection du directeur de l’IEP à la rentrée. ','2021-04-13','https://www.php.net/');
$monArticle = new Article('le nouveau monde','bonjour bonsoir bien venu chez vous','2021-04-13');


echo "<div>" .var_dump($lacigalle). "</div>";

echo " <br>";

var_dump($monArticle);




