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
    ?> 
    
        <select name="Liste" id="liste">
            <option value="<?php echo $string1 ?>"><?php echo $string1 ?></option>
            <option value="<?php echo $string2 ?>"><?php echo $string2 ?></option>
            <option value="<?php echo $string3 ?>"><?php echo $string3 ?></option>
        </select>
    
    <?php
    }

// Second solution using an array, works now, afficherArray was in the function itself rather than outside
afficherListe("Monsieur","Madame","Mademoiselle");
$liste = ["Monsieur","Madame","Mademoiselle"];
function afficherArray($liste){
    ?>

        <select name="Liste" id="liste">
            <?php
                foreach($liste as $choice){?>
                    <option value="<?php echo $choice ?>"><?php echo $choice ?></option>
                <?php
                }
            ?>
        </select>

    <?php
}
afficherArray($liste);