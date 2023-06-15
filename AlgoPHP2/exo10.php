<h1>Exercice 10</h1>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : <br>
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ». <br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).</p>
<h2>Résultat</h2>

<?php

$arrayInfos = ["Nom","Prénom","Adresse e-mail","Ville"];
$gendersRadio = ["Masculin","Féminin","Autre"];
$experiences = ["Développeur logiciel"=>"checked","Designer web"=>"checked","Intégrateur"=>"","Chef de projet"=>""];
function afficherArray($arrayInfos,$gendersRadio,$experiences){

    foreach($arrayInfos as $info){?>
        <label for="input"><?php echo $info ?></label><br>
        <input type="text" id="input" name="input"><br>
<?php
    }
    ?> <br> <?php
    foreach($gendersRadio as $genderRadio){?>
        <input type="radio" id="<?php echo strtolower($genderRadio) ?>" name="genre" value="<?php echo strtolower($genderRadio) ?>">
        <label for="<?php echo strtolower($genderRadio) ?>"><?php echo $genderRadio ?></label><br>
   <?php }
?> <p>Quelles expériences avez-vous eu dans l'industrie ?</p> <?php   
   foreach($experiences as $choice=>$check){?>
    <label for="check"><?php echo $choice ?></label><br>
    <input type="checkbox" id="check" name="check" <?php echo $check ?>><br>
<?php 
}
?> <br><input type="submit" value="Envoyer le dossier"> 
<?php
}
afficherArray($arrayInfos,$gendersRadio,$experiences);