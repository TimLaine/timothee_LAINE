<h1>Exercice 9</h1>
<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</p>
<p>Exemple : <br>
afficherRadio($nomsRadio);
</p>

<h2>Résultat</h2>

<?php

$nomsRadio = ["Masculin","Féminin","Autre"];
function afficherRadio($nomsRadio){
    $result = "";
    foreach($nomsRadio as $nomRadio){
        $result .= "<input type=\"radio\" id=\"".mb_strtolower($nomRadio)."\" name=\"genre\" value=\"strtolower($nomRadio)\">
        <label for=\"strtolower($nomRadio)\">$nomRadio</label><br>";
    }
    return $result;
}
echo afficherRadio($nomsRadio);
?>