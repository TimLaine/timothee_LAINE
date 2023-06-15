<h1>Exercice 10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.</p><br>
<p>Affichage : <br>
Montant à payer : 152 € <br>
Montant versé : 200 € <br>
Reste à payer : 48 € <br>
*************************************************** <br>
Rendue de monnaie : <br>
4 billets de 10 € - 1 billet de 5 € - 1 pièce de 2 € - 1 pièce de 1 €</p><br>

<h2>Résultat</h2>

<?php
$prix = 15;
$donne = 50;
$ancienreste = $donne-$prix;
$reste = $ancienreste;
$dix = intdiv($reste,10);
$reste = $reste-$dix*10;
$cinq = intdiv($reste,5);
$reste = $reste-$cinq*5;
$deux = intdiv($reste,2);
$reste = $reste-$deux*2;
$un = intdiv($reste,1);
//$x = 0;
// for ($x = 1; $reste>9 ; $x++) {
// 	$reste = $reste-10; $dix = $x;
// }
// for ($x = 1; $reste>4 ; $x++) {
// 	$reste = $reste-5; $cinq = $x;
// }
// for ($x = 1; $reste>1 ; $x++) {
// 	$reste = $reste-2; $deux = $x;
// }
// for ($x = 1; $reste>0 ; $x++) {
// 	$reste = $reste-1; $un = $x;
// }
echo "Montant à payer : $prix €<br>Montant versé : $donne €<br>Reste à payer : $ancienreste €<br>***************************************************<br>Rendue de monanie :<br>$dix billets de 10€ - $cinq billet de 5€ - $deux pièce de 2€ - $un pièce de 1€"
?>