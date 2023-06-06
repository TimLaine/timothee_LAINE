<h1>Exercice 8</h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme :
</p><br>
<p>Affichage (pour la table de 8) :
Table de 8 :
1 x 8 = 8
2 x 8 = 16
3 x 8 = 24 …
</p><br>

<h2>Résultat</h2>

<?php
$chiffre = 4;
$x = 0;
echo "Table de $chiffre : <br>";
for ($x = 1; $x <= 10; $x++) {
	echo "$x x $chiffre =" . $x*$chiffre . "<br>";
}
echo "Table de $chiffre : <br>";
$x=1;
while ($x<=10) {
	echo "$x x $chiffre =" . $x*$chiffre ."<br>";
	$x++;
}
?>