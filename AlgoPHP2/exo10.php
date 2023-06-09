<h1>Exercice 10</h1>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : <br>
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ». <br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).</p>
<h2>Résultat</h2>

<?php

function afficherInfos($arrayInfos){
    $resultInfos = "";
    foreach($arrayInfos as $info){
        $resultInfos .= "<label for=\"input\">$info</label><br>
        <input type=\"text\" id=\"input\" name=\"input\"><br>";
    }
    return $resultInfos;
}
function afficherRadio($gendersRadio){
    $resultRadio = "<br>";
    foreach($gendersRadio as $genderRadio){
        $resultRadio .= "<input type=\"radio\" id=\"".strtolower($genderRadio)."\" name=\"genre\" value=\"strtolower($genderRadio)\">
        <label for=\"".strtolower($genderRadio)."\">$genderRadio</label><br>";
         }
    return $resultRadio;
}
function afficherExperience ($experiences){
    $resultExp = "<br>Quelles expériences avez-vous eu dans l'industrie ? <br><br>";    
    foreach($experiences as $choice=>$check){
    $resultExp .= "<label for=\"check\">$choice</label><br>
    <input type=\"checkbox\" id=\"check\" name=\"check\"$check><br>";
}
return $resultExp;
}
function afficherFormulaire($arrayInfos,$gendersRadio,$experiences){
    $result = afficherInfos($arrayInfos).afficherRadio($gendersRadio).afficherExperience($experiences). "<br><input type=\"submit\" value=\"Envoyer le dossier\">";
    return $result;
}
$arrayInfos = ["Nom","Prénom","Adresse e-mail","Ville"];
$gendersRadio = ["Masculin","Féminin","Autre"];
$experiences = ["Développeur logiciel"=>"checked","Designer web"=>"checked","Intégrateur"=>"","Chef de projet"=>""];
echo afficherFormulaire($arrayInfos,$gendersRadio,$experiences);