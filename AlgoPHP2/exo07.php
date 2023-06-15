<h1>Exercice 7</h1>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.
</p>
<p>Exemple :
genererCheckbox($elements); <br>
//où $elements est un tableau associatif clé => valeur avec 3 entrées.
</p>
<h2>Résultat</h2>

<?php
// Simple methode using an array
$elements = ["Choix 1"=>"checked","Choix 2"=>"checked","Choix 3"=>""];

function genererCheckbox($elements){

    foreach($elements as $choice=>$check){?>
        <label for="check"><?php echo $choice ?></label><br>
        <input type="checkbox" id="check" name="check" <?php echo $check ?>><br>
<?php
    }
}
genererCheckbox($elements);
?>
<?php
// Just for fun, I'll try and make one with booleans and an IF (works great)
$elementsif = ["Choix 1"=>true,"Choix 2"=>false,"Choix 3"=>false];
function genererCheckboxIF($elementsif){
    foreach($elementsif as $choiceif=>$checkif){
        if($checkif){?>
                <label for="check"><?php echo $choiceif ?></label><br>
                <input type="checkbox" id="check" name="check" checked><br><?php            
        } else{?>
            <label for="check"><?php echo $choiceif ?></label><br>
            <input type="checkbox" id="check" name="check"><br><?php
        }
    }
}
genererCheckboxIF($elementsif);
