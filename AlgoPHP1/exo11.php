<h1>Exercice 11</h1>
<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d’afficher le nombre de marques de voitures présentes dans le tableau. <br>
<b>Exemple</b> : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »
</p><br>
<p>Affichage (attention à utiliser une liste à puces) <br>
Il y a 4 marques de voitures dans le tableau : <br>
<dir>
	<ul>
		<li>Peugeot</li>
		<li>Renault</li>
		<li>BMW</li>
		<li>Mercedes</li>
	</ul>
</dir>
</p>

<h2>Résultat</h2>
<?php
$voiture = array("Peugeot","Renault","BMW","Mercedes");
$nbMarques = count($voiture);
$x = 0;
echo "Il y a ". count($voiture). " marques de voiture dans le tableau : <br>";
for ($x = 0; $x < $nbMarques; $x++) {
	echo "<li>".$voiture[$x];
}
// echo "Il y a ". count($voiture). " marques de voiture dans le tableau : <br><ul><li>$voiture[0]</li><li>$voiture[1]</li><li>$voiture[2]</li><li>$voiture[3]</li></ul>"
?>