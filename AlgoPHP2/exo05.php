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
?> 

    <label for="input1"><?php echo $string1 ?></label><br>
    <input type="text" id="input1" name="input1"><br>
    <label for="input2"><?php echo $string2 ?></label><br>
    <input type="text" id="input2" name="input2"><br>
    <label for="input3"><?php echo $string3 ?></label><br>
    <input type="text" id="input3" name="input3">

<?php
}
afficherInput("Nom", "Prénom", "Ville");

// Second solution using an array
?> <br><br><br><br> <?php
$nomsInput = ["Nom","Prénom","Ville"];

function afficherArray($nomsInput){

    foreach($nomsInput as $input){?>
        <label for="input"><?php echo $input ?></label><br>
        <input type="text" id="input" name="input"><br>
<?php
    }
}

afficherArray($nomsInput);


