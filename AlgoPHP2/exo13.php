<h1>Exercice 13</h1>
<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
véhicule. </p>
<p>v1 ➔ "Peugeot","408",5 <br>
v2 ➔ "Citroën","C4",3
</p>

<h2>Résultat</h2>

<?php

Class Voiture{
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;
    private bool $_marche;

    public function __construct(string $marque, string $modele, int $nbPortes){
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = 0;
        $this->_marche = false;
    }
    public function getMarque(){
        return $this->_marque;
        // echo "Le véhicule est une $this->_marque";
    }
    public function getModele(){
        return $this->_modele;
    }
    public function getNbPortes(){
        return $this->_nbPrtes;
    }
    public function getVitesseActuelle(){
        return $this->_vitesseActuelle;
    }
    public function getMarche(){
        return $this->_marche;
    }
    public function demarrer(){
        if(!$this->_marche){
            echo "Le véhicule $this->_marque $this->_modele démarre <br>";
            $this->_marche = true;
        } else {
            echo "Le véhicule $this->_marque $this->_modele est déjà démarré <br>";
        }
    }
    public function stopper(){
        if($this->_marche){
            echo "Le véhicule $this->_marque $this->_modele s'arrête <br>";
            $this->_marche = false;
        } else{
            echo "Le véhicule $this->_marque $this->_modele est déjà à l'arrêt <br>";
        }
    }
    public function accelerer($vitesse){
        if(!$this->_marche){
            echo "Le véhicule $this->_marque $this->_modele veut accélerer de $vitesse km/h <br>";
            echo "Pour accélérer, il faut démarrer le véhicule $this->_marque $this->_modele ! <br>";
        } else {
            echo "Le véhicule $this->_marque $this->_modele accélère de $vitesse km/h <br>";
            $this->_vitesseActuelle = $this->_vitesseActuelle + $vitesse;
        }
    }
    public function ralentir($vitesse){
        if(!$this->_marche){
            echo "Le véhicule $this->_marque $this->_modele veut ralentir de $vitesse km/h <br>";
            echo "Le véhicule $this->_marque $this->_modele est déjà à l'arrêt ! <br>";
        } elseif($vitesse > $this->_vitesseActuelle){
            echo "Impossible de ralentir la voiture autant ! <br>";
        } else {
            echo "Le véhicule $this->_marque $this->_modele ralenti de $vitesse km/h <br>";
            $this->_vitesseActuelle = $this->_vitesseActuelle - $vitesse;
        }
    }
    public function getInfo(){
        $result = "";
        $result .= "<br>Infos véhicule <br><br>
        **********************<br><br>
        Nom et modèle du véhicule : $this->_marque $this->_modele<br>
        Nombre de portes : $this->_nbPortes<br>";
         if($this->_marche){
            $result .= "Le véhicule $this->_marque est démarré <br>";
        } else {
            $result .= "Le véhicule $this->_marque est à l'arrêt<br>";
        }
        $result .= "Sa vitesse actuelle est de : $this->_vitesseActuelle  kmh/h <br><br>";

        return $result;
    }
}
$v1 = new Voiture("Peugeot","408",5);
$v2 = new Voiture("Citroen","C4",3);
$v1->demarrer();
$v1->accelerer(50);
$v1->ralentir(80);
$v1->ralentir(40);
echo $v1->getInfo();
$v2->accelerer(20);
$v2->ralentir(20);
$v2->stopper();

