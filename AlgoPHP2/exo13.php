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
        echo "Le véhicule est une $this->_modele";
    }
    public function getNbPortes(){
        echo "Le véhicule a $this->_nbPortes portes";
    }
    public function getVitesseActuelle(){
        echo "Le véhicule $this->_marque $this->_modele va actuellement à $this->_vitesseActuelle km/h";
    }
    public function getMarche(){
        var_dump($this->_marche);
    }
    public function demarrer(){
        if(!$this->_marche){
            echo "Le véhicule $this->_marque $this->_modele démarre";
            $this->_marche = true;
        } else {
            echo "Le véhicule $this->_marque $this->_modele est déjà démarré";
        }
    }
    public function stopper(){
        if($this->_marche){
            echo "Le véhicule $this->_marque $this->_modele s'arrête";
            $this->_marche = false;
        } else{
            echo "Le véhicule $this->_marque $this->_modele est déjà à l'arrêt";
        }
    }
    public function accelerer($vitesse){
        if(!$this->_marche){
            echo "Le véhicule $this->_marque $this->_modele veut accélerer de $vitesse km/h <br>";
            echo "Pour accélérer, il faut démarrer le véhicule $this->_marque $this->_modele !";
        } else {
            echo "Le véhicule $this->_marque $this->_modele accélère de $vitesse km/h";
            $this->_vitesseActuelle = $this->_vitesseActuelle + $vitesse;
        }
    }
    public function ralentir($vitesse){
        if(!$this->_marche){
            echo "Le véhicule $this->_marque $this->_modele veut ralentir de $vitesse km/h <br>";
            echo "Le véhicule $this->_marque $this->_modele est déjà à l'arrêt !";
        } else {
            echo "Le véhicule $this->_marque $this->_modele ralenti de $vitesse km/h";
            $this->_vitesseActuelle = $this->_vitesseActuelle - $vitesse;
        }
    }
    public function getInfo(){ ?>
        <p>Infos véhicule</p>
        <p>**********************</p>
        <p>Nom et modèle du véhicule : <?php echo $this->_marque ." ". $this->_modele; ?> <br>
        <p>Nombre de portes : <?php echo $this->_nbPortes ?> <br>
        <p> <?php if($this->_marche){
            echo "Le véhicule $this->_marque est démarré";
        } else {
            echo "Le véhicule $this->_marque est à l'arrêt";
        } ?> <br>
        <p>Sa vitesse actuelle est de : <?php echo $this->_vitesseActuelle; ?> kmh/h</p>
    <?php
    }
}
$v1 = new Voiture("Peugeot","408",5);
$v2 = new Voiture("Citroen","C4",3);
$v1->demarrer();
$v1->accelerer(50);
$v1->ralentir(80);
$v1->getInfo();