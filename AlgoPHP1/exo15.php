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
    private string $_nom;
    private string $_prenom;
    private DateTime $_birth;
    private $_age;

    public function __construct (string $nom,string $prenom, string $birth){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        // Converti l'âge en DateTime pour calculer l'âge
        $this->_birth = new DateTime($birth);
        $this->_age = $this->calcAge();
    }
    public function getNom(){
        return $this->_nom;
    }
    public function getPrenom(){
        return $this->_prenom;
    }
    public function getBirth(){
        return $this->_birth;
    }
    public function getAge(){
        return $this->_age;
    }
    // Calcul l'âge et renvoie une string
    public function calcAge():string
    {
        $today = new DateTime();
        $age = $today->diff($this->_birth);
        return $age->y;
    }
    // Permet d'appeler les informations de base de la personne, y compris l'âge
    public function __toString():string
    {
        
        return $this->getPrenom()." ". $this->getNom()." a ".$this->getAge()." ans<br>";
    }

}
$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");

echo $p1;
echo $p2;
?>