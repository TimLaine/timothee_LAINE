<h1>Exercice 7</h1>
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser.</p><br>
<p>Affichage :
L’enfant qui a 10 ans appartient à la catégorie « Minime »</p><br>

<h2>Résultat</h2>

<?php
$age = 8;
if ($age >5 and $age <8) {
	echo "L'enfant qui a $age ans appartient à la catégorie « Poussin »";
} elseif ($age >7 and $age <10) {
	echo "L'enfant qui a $age ans appartient à la catégorie « Pupille »";
} elseif ($age >9 and $age <12){
	echo "L'enfant qui a $age ans appartient à la catégorie « Minime »";
} elseif ($age >= 12) {
	echo "L'enfant qui a $age ans appartient à la catégorie « Cadet »";
} else {
	echo "L'enfant qui a $age ans est trop jeune pour rejoindre le club.";
}
?>
