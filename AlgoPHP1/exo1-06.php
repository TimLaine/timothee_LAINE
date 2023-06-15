<h1>Exercice 1</h1>
<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p><br>
<p>Affichage :
Prix unitaire de l’article : 9.99 €
Quantité : 5
Taux de TVA : 0.2
Le montant de la facture à régler est de : 59.94 €</p>

<h2>Résultat</h2>

<?php
$prix = 9.99;
$quantite = 5;
$prixfinal = $prix * $quantite;
$tva = $prixfinal * 1.20;
echo "Prix unitaire de l'article : $prix € <br>Quantité : $quantite <br>Taux de TVA : 0.2<br>Le montant de la facture à régler est de : " . round($tva,2,PHP_ROUND_HALF_UP) . " €"
?>