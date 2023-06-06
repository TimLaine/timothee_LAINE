<h1>Exercice 12</h1>
<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
</p><br>
<p><b>Exemple</b> : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG</p>
<p>Affichage : <br>
Salut Mickaël <br>
Hola Virgile <br>
Hello Marie-Claire</p>
<p><b>Variante</b> : trier d’abord le tableau par ordre alphabétique du prénom</p>
<p>Affichage : <br>
Hello Marie-Claire <br>
Salut Mickaël <br>
Hola Virgile</p>

<h2>Résultat</h2>

<?php
$bonjour = [
	"Mickael" => "FRA",
	"Virgil" => "ESP",
	"Marie-Claire" => "ENG",
];

$salutations = [
	"FRA" => "Bonjour",
	"ESP" => "Hola",
	"ENG" => "Hello",
];

$x = 0;
ksort ($bonjour);

foreach ($bonjour as $nom => $langue){
	echo "$salut $nom";
}
// foreach ($bonjour as $nom => $langue){
// 	if ($langue == "ESP") {
// 		echo "Hola ". $nom;
// 	} elseif ($langue == "ENG") {
// 		echo "Hello ". $nom;
// 	} else {
// 		echo "Bonjour ". $nom;
// 	}
// 	echo "<br>";
// };
?>