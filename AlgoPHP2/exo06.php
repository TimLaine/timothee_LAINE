<h1>Exercice 6</h1>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>
<p>Exemple : <br>
$elements = array("Monsieur","Madame","Mademoiselle"); <br>
alimenterListeDeroulante($elements); <br>
</p>

<h2>Résultat</h2>

<?php
// First solution using a simple function with strings
function afficherListe($string1, $string2, $string3){
        $result = "";
        $result .= "<select name=\"Liste\" id=\"liste\">
            <option value=\"$string1\">$string1</option>
            <option value=\"$string2\">$string2</option>
            <option value=\"$string3\">$string3</option>
        </select>";
    return $result;
    }

// Second solution using an array, had a problem, afficherArray was in the function itself rather than outside
echo afficherListe("Monsieur","Madame","Mademoiselle");
$liste = ["Monsieur","Madame","Mademoiselle"];
function afficherArray($liste){
    $result = "";
    $result .= "<select name=\"Liste\" id=\"liste\">";
    foreach($liste as $choice){
        $result .= "<option value=\"$choice\">$choice</option>";
        }
    $result .= "</select>";
    return $result;
}
echo afficherArray($liste);