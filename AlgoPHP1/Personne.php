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
$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");
$p1->setAge("1996-03-23");
echo $p1->getPrenom()." ". $p1->getNom()." a ".$p1->getAge()." ans";
?>