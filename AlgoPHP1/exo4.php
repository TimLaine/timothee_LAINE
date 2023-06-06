<h1>Exercice 4</h1>
<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Résultat</h2>
<html>
    <body>
        
    </body>
</html>
<?php

$phrase = "Engage le jeu que je le gagne";
$phrase = str_replace(" ","",$phrase);
$phrase = strtolower($phrase);
echo $phrase;
if ($phrase == strrev($phrase)){
    echo "La phrase est un palindrome";
} else{
    echo "La phrase n'est pas un palindrome";
}

?>