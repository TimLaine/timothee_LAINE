<style>
    table,th,td{
        border : 1px solid;
        border-collapse: collapse;
    }
</style>
<h1>Exercice 4</h1>
<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).</p>
<p>On admet que l’URL de la page Wikipédia de la capitale adopte la forme : <br>
https://fr.wikipedia.org/wiki/</p>
<p>Le tableau passé en argument sera le suivant : <br>
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");
</p>

<h2>Résultat</h2>

<?php
    $capitales = ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome", "Espagne"=>"Madrid"];
function afficherTableHTML($capitales)
{
    $result = "";
    //Sorts capitales in alphabetical order
    ksort($capitales);
    $result .= "<table>
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitale</th>
                            <th>Lien wiki</th>
                        </tr>
                    </thead><tbody>";
    foreach($capitales as $pays=>$capitale){
        $result .= "<tr>
                <td>" .mb_strtoupper($pays). "</td>
                <td> $capitale</td>
                <td><a href=\"https://fr.wikipedia.org/wiki/$capitale\" target=\"_blank\">Lien</a></td>
            </tr>";
        
    }
    $result .= "</tbody></table>";

    return $result;
}
echo afficherTableHTML($capitales)
?>