<h1>Exercice 13</h1>
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). Elle devra être affichée avec 2 décimales.</p><br>
<p>Affichage :
Les notes obtenues par l’élève sont : 10 12 8 19 3 16 11 13 9
Sa moyenne générale est donc de : 11.22</p>
<h2>Réponse</h2>

<?php
$notes = [10,12,8,19,3,16,11,13,9];
$moyenne = array_sum($notes)/count($notes);
echo "Les notes obtenues par l'élève sont : "; foreach ($notes as $detail) {
	echo " $detail";
}; echo "<br>Sa moyenne générale est donc de : ". round ($moyenne, 2, PHP_ROUND_HALF_UP);
?>