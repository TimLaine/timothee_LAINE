<h1>Exercice 5</h1>
<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.
</p><br>
<p>Affichage :
Montant en francs : 100 <br>
100 francs = 15.24 €</p><br>

<h2>Résultat</h2>

<?php
$franc = 463.00;
$euro = 0.00;
$euro = $franc *0.2137;
echo "Montant en francs : $franc <br>";
echo "$franc francs = " . (round($euro,2, PHP_ROUND_HALF_UP)) ." € <br>";
?>