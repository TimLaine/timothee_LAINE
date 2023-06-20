<h1>Exercice 5</h1>
<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.
</p>
<p>Exemple : <br>
$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);</p>
<h2>Résultat</h2>

<?php
// First solution using a simple function with strings
function afficherInput($string1, $string2, $string3){
    $result = "<label for=\"input1\">$string1</label><br>
    <input type=\"text\" id=\"input1\" name=\"input1\"><br>
    <label for=\"input2\">$string2</label><br>
    <input type=\"text\" id=\"input2\" name=\"input2\"><br>
    <label for=\"input3\">$string3</label><br>
    <input type=\"text\" id=\"input3\" name=\"input3\">";

    return $result;
}
echo afficherInput("Nom", "Prénom", "Ville");
?> 
<br><br><br><br> 
<?php
// Second solution using an array
$nomsInput = ["Nom","Prénom","Ville"];

function afficherArray($nomsInput){
    $result = "";
    foreach($nomsInput as $input){
        $result .= "<label for=\"input\">$input</label><br>
        <input type=\"text\" id=\"input\" name=\"input\"><br>";
    }
    return $result;
}

echo afficherArray($nomsInput);


