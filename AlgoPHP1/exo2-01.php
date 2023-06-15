<h1>Exercice 1</h1>
<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge. <br>
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ; <br>
</p>
<p>Affichage (si $texte = « Mon texte en paramètre ») <br>
MON TEXTE EN PARAMETRE
</p>

<h2>Résultat</h2>

<?php
function convertirMajRouge($texte){
echo "<font color=red>".mb_strtoupper($texte)."</font>";
}
convertirMajRouge("Mon texte en paramètre");
?>