<<<<<<< HEAD
<h1>Exercice 14</h1>
<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).</p>
<p>Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques suivantes : <br>
Peugeot 408 : $v1 = new Voiture("Peugeot","408"); <br>
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
</p>
<p>Votre programme de test devra afficher les informations des 2 voitures de la façon suivante : <br>
echo $v1->getInfos()."<br/>"; <br>
echo $ve1->getInfos()."<br/>";</p> <br>

<h2>Résultat</h2>

<?php

Class Voiture{
    protected string $_marque;
    protected string $_modele;
    protected string $_type;

    public function __construct(string $marque, string $modele, string $type){
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_type = $type;
    }
    public function getMarque(){
        echo "Le véhicule est une $this->_marque";
    }
    public function getModele(){
        echo "Le véhicule est une $this->_modele";
    }
    public function getInfos(){
        if($this->_type == "électrique"){
            echo "Le véhicule est une $this->_marque $this->_modele. C'est un véhicule $this->_type. Il lui reste $self->_autonomie km d'autonomie.";            
        } else{
            echo "Le véhicule est une $this->_marque $this->_modele. C'est un véhicule $this->_type.";
        }
    }
}
Class VoitureElec extends Voiture{
    private int $_autonomie;
    public function __construct(string $marque, string $modele, string $type, int $autonomie){
        parent::__construct($marque, $modele, $type);
        $this->_autonomie = $autonomie;
    }
    public function getAutonomie(){
        echo "Il reste $this->_autonomie km d'autonomie.";
    }
    public function getInfos(){
        echo "Le véhicule est une $this->_marque $this->_modele. C'est un véhicule électrique. Il lui reste $this->_autonomie km d'autonomie.";
    }
}
$v1 = new Voiture("Peugeot","408","thermique");
$ve2 = new VoitureElec("Citroen","C4","électrique",100);
echo $ve2->getInfos();
echo "<br>";
=======
<h1>Exercice 14</h1>
<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).</p>
<p>Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques suivantes : <br>
Peugeot 408 : $v1 = new Voiture("Peugeot","408"); <br>
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
</p>
<p>Votre programme de test devra afficher les informations des 2 voitures de la façon suivante : <br>
echo $v1->getInfos()."<br/>"; <br>
echo $ve1->getInfos()."<br/>";</p> <br>

<h2>Résultat</h2>

<?php

Class Voiture{
    protected string $_marque;
    protected string $_modele;
    protected string $_type;

    public function __construct(string $marque, string $modele, string $type){
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_type = $type;
    }
    public function getMarque(){
        echo "Le véhicule est une $this->_marque";
    }
    public function getModele(){
        echo "Le véhicule est une $this->_modele";
    }
    public function getInfos(){
        if($this->_type == "électrique"){
            echo "Le véhicule est une $this->_marque $this->_modele. C'est un véhicule $this->_type. Il lui reste $this->_autonomie km d'autonomie.";            
        } else{
            echo "Le véhicule est une $this->_marque $this->_modele. C'est un véhicule $this->_type.";
        }
    }
}
Class VoitureElec extends Voiture{
    private int $_autonomie;
    public function __construct(string $marque, string $modele, string $type, int $autonomie){
        parent::__construct($marque, $modele, $type);
        $this->_autonomie = $autonomie;
    }
    public function getAutonomie(){
        echo "Il reste $this->_autonomie km d'autonomie.";
    }
    public function getInfos(){
        echo "Le véhicule est une $this->_marque $this->_modele. C'est un véhicule électrique. Il lui reste $this->_autonomie km d'autonomie.";
    }
}
$v1 = new Voiture("Peugeot","408","thermique");
$ve2 = new VoitureElec("Citroen","C4","électrique",100);
echo $ve2->getInfos();
echo "<br>";
>>>>>>> a6878dc0266cd340b3a3eb134541c2c66016f2b4
echo $v1->getInfos();