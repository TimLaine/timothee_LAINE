<style>
    table,th,td{
        border : 1px solid;
        border-collapse: collapse;
    }
</style>
<h1>Exercice 2</h1>
<p>Soit le tableau suivant : <br>
$capitales = array <br>
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"); <br>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée. <br>
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales); <br>
</p>
<p>Affichage<br><br>
<h2>Résultat</h2>
<table >
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitale</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>France</td>
            <td>Paris</td>
        </tr>
        <tr>
            <td>Allemagne</td>
            <td>Berlin</td>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washington</td>
        </tr>
        <tr>
            <td>Italie</td>
            <td>Rome</td>
        </tr>
    </tbody>
</table>
</p>
<?php
$capitales = ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
function afficherTableHTML($capitales)
{
    $capitales = ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
    //Sorts capitales in alphabetical order
    ksort($capitales);
    echo "<table>
            <thead>
                <tr>
                    <th>Pays</th>
                    <th>Capitale</th>
                </tr>
            </thead><tbody>";
    foreach($capitales as $pays=>$capitale){
        echo "<tr>
                <td>".mb_strtoupper($pays)."</td>
                <td>".$capitale."</td>
            </tr>";
    }
    "</tbody></table>";
}
afficherTableHTMLEmmetHTML($capitales);
function afficherTableHTMLEmmetHTML($capitales)
{
    $capitales = ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
    //Sorts capitales in alphabetical order
    ksort($capitales);
    // Les balises de PHP sont ouvertes et refermées pour profiter de Emmet pour le HTML
    ?><table>
            <thead>
                <tr>
                    <th>Pays</th>
                    <th>Capitale</th>
                </tr>
            </thead><tbody>
    <?php
    foreach($capitales as $pays=>$capitale){
        ?><tr>
                <td><?= mb_strtoupper($pays) ?></td>
                <td><?= $capitale ?></td>
            </tr>
        <?php
    }
    ?> </tbody></table> <?php
}
?>