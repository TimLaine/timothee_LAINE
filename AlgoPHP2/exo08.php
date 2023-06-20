<h1>Exercice 8</h1>
<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg <br>
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p>
<p>Exemple : <br>
repeterImage($url,4);
</p>
<h2>Résultat</h2>
<?php
function repeterImage($url,$nb){
    $result = "";
    for($i=1; $i<=$nb; $i++){
        $result .= "<img src=\"$url\" alt=\"chien$i\">";
     }
    return $result;
}
echo repeterImage("http://my.mobirise.com/data/userpic/764.jpg",4);

// echo str_repeat("<img src='http://my.mobirise.com/data/userpic/764.jpg'>",4);

// foreach(range(1, $nb)) {
//     //...
// }