<h1>Exercice 9</h1>
<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</p>
<p>Exemple : <br>
afficherRadio($nomsRadio);
</p>

<h2>Résultat</h2>

<?php

$nomsRadio = ["Masculin","Féminin","Autre"];
function afficherRadio($nomsRadio){
    foreach($nomsRadio as $nomRadio){?>
        <input type="radio" id="<?php echo strtolower($nomRadio) ?>" name="genre" value="<?php echo strtolower($nomRadio) ?>">
        <label for="<?php echo strtolower($nomRadio) ?>"><?php echo $nomRadio ?></label><br>
   <?php }
}
afficherRadio($nomsRadio);
?>