<h1>Exercice 11</h1>
<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.</p>
<p>Exemple : <br>
formaterDateFr("2018-02-23");
</p>

<h2>Résultat</h2>
<?php
function formaterDateFr($numDate){
    $frDate = new DateTime($numDate);
    $frDate = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
    echo $frDate->format(time());
}
formaterDateFr("2018-02-23");
?>