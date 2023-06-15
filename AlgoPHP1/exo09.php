<h1>Exercice 9</h1>
<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p><br>
<p>Affichage :
Age : 32
Sexe : F
La personne est imposable.</p><br>

<h2>Résultat</h2>

<?php
$age = 36;
$genre = "M";
$condition1 = ($genre == "M" && $age >= 20);
$condition2 = ($genre == "F" && $age >= 18 && $age <= 35);

if($condition1 || $condition2) {
	echo "Age : $age<br>Sexe : $genre<br>La personne est imposable";
} else {
	echo "Age : $age<br>Sexe : $genre<br>La personne est non imposable";
}
?>