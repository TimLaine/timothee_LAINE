<h1>Exercice 14</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>
<p>Affichage <br>
Si la date courante est le 21/05/2018 et la date de naissance le 
17/01/1985 : <br>
Age de la personne : 33 ans 4 mois 4 jours </p>

<h2>Résultat</h2>

<?php
$date = new DateTime();
$birth = new DateTime('01-01-2000');
$age = $date->diff($birth);

echo "Si la date courante est le " .$date->format('d-m-Y'). " et la date de naissance le : " .$birth->format('d-m-Y'). "<br>Age de la personne : $age->y ans $age->m mois $age->d jours";
?>
