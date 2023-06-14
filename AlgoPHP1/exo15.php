<h1>Exercice 15</h1>
<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br>
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ; <br>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ; <br>
</p>
<p>Affichage :<br>
Michel DUPONT a … ans<br> 
Alice DUCHEMIN a … ans<br></p>

<h2>Résultat</h2>

<?php
Class Personne{
    private $_nom;
    private $_prenom;
    private $_age;

    public function __construct ($nom,$prenom,$age){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_age = $age;
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getAge(){
        return $this->_age;
    }
    public function setAge($age){
        $this->_age = $age;
    }
}
$date = new DateTime();
$age = new DateTime('01-01-2000');
$vieux = $date->diff($age);
$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");
$p1->setAge("1996-03-23");
$age = strtotime($p1->getPrenom());
echo date('d/M/Y', $age);
// echo $p1->getPrenom()." ". $p1->getNom()." a ".$p1->getAge()." ans<br>";
// echo $p2->getPrenom()." ". $p2->getNom()." a ".$p2->getAge()." ans";
// echo "<br>".$vieux->y;
?>