<h1>Exercice 15</h1>
<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format.</p>
<p>Affichage <br>
L’adresse elan@elan-formation.fr est une adresse e-mail valide
</p>
<h2>Résultat</h2>
<?php

function emailValidation($string){
    if (filter_var($string, FILTER_VALIDATE_EMAIL)){
        echo "L'adresse $string est une adresse e-mail valide. <br>";
    } else {
        echo "L'adresse $string n'est pas une adresse e-mail valide. <br>";
    }
}
$email = "elan@elan-formation.fr";
emailValidation($email);
?>