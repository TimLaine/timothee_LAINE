<h1>Exercice 11</h1>
<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.</p>
<p>Exemple : <br>
formaterDateFr("2018-02-23");
</p>

<h2>Résultat</h2>
<?php
function formaterDateFr($numDate){
    //First, the string needs to be converted to DateTime
    $frDate = new DateTime($numDate);
    // Then, a third variable express the format we want for our DateTime
    $formatterDate = new IntlDateFormatter('fr_FR', 
    IntlDateFormatter::FULL, IntlDateFormatter::NONE);
    // Finally, we convert the original DateTime into our desired format using the third variable
    echo $formatterDate->format($frDate);
}
formaterDateFr("2018-02-23");
?>