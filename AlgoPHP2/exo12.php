<h1>Exercice 12</h1>
<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable. <br>
Soit le tableau suivant : <br>
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2")); <br>
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.
</p>
<p>Affichage <br>
bool(true) <br>
string(5) "texte" <br>
int(10) <br>
float(25.369) <br>
array(2) { [0]=> string(7) "valeur1" [1]=> string(7) "valeur2" }</p>

<h2>Résultat</h2>

<?php
$tableauValeurs = [true, "texte",10,25.369,["valeur1","valeur2"]];
foreach ($tableauValeurs as $var){
    var_dump($var);
    echo "<br>";
}
?>