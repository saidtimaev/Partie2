<h1>Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et <br>
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus <br>
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule <br>
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un <br>
véhicule. <br><br>
v1 ➔ "Peugeot","408",5<br>
v2 ➔ "Citroën","C4",3<br><br>
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de <br>
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments <br>
suivants :<br>
</p> 

<h2>Résultat</h2>

<p>Affichage :
</p> 

<?php

class Voiture
{
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle= 0;
    private int $_numeroVehicule;

    private static int $_nbVehicules = 1;

    function __construct(string $marque, string $modele, int $nbPortes, ) 
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_numeroVehicule = self::$_nbVehicules;
        self::$_nbVehicules++;

    }

    public function demarrer()
    {
        
    } 

    public function acceler()
    {
        
    } 

    public function stopper()
    {
        
    } 

    public function getMarque()
    {
        return $this->_marque;
    }

    public function setMarque($marque)
    {
        $this->_marque = $marque;
    }

    public function getModele()
    {
        return $this->_modele;
    }

    public function setModele($modele)
    {
        $this->_modele = $modele;
    }

    public function getNbPortes()
    {
        return $this->_nbPortes;
    }

    public function setNbPortes($nbPortes)
    {
        $this->_nbPortes = $nbPortes;
    }

    public function getVitesseActuelle()
    {
        return $this->_vitesseActuelle;
    }

    public function setVitesseActuelle($vitesseActuelle)
    {
        $this->_vitesseActuelle = $vitesseActuelle;
    }

    public function getNumeroVehicule()
    {
        return $this->_numeroVehicule;
    }

    public function setNumeroVehicule($numeroVehicule)
    {
        $this->_numeroVehicule = $numeroVehicule;
    }

    public function __toString() 
    {


        $infosVehicule = "Infos véhicule ".$this->_numeroVehicule."<br>"
                        ."*****************************************<br>"
                        ."Nom et modèle du véhicule :".$this->_marque." ".$this->_modele."<br>"
                        ."Nombre de portes :".$this->_nbPortes."<br>"
                        ."Le véhicule ".$this->_marque;

        return $infosVehicule;

    }
}

$v1 = new Voiture("Peugeot","408",5);

echo $v1;








?>