<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec <br>
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).<br>
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques <br>
suivantes :<br><br>
Peugeot 408 : $v1 = new Voiture("Peugeot","408");<br>
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);<br><br>
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante : <br><br>
echo $v1->getInfos()."&lt;br/&gt;";<br>
echo $ve1->getInfos()."&lt;br/&gt;";<br>
</p> 

<h2>Résultat</h2>

<p>Affichage :
</p> 


<?php

// On crée notre classe voiture avec 2 propriétés
class Voiture
{
    private string $_marque;
    private string $_modele;


    // On crée la méthode magique construct
    function __construct(string $marque, string $modele) 
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
    }

    // On crée les setters et getters
    public function getMarque(): string
    {
        return $this->_marque;
    }

    public function setMarque($marque): void
    {
        $this->_marque = $marque;
    }

    public function getModele(): string
    {
        return $this->_modele;
    }

    public function setModele($modele): void
    {
        $this->_modele = $modele;
    }

    // On crée la fonction qui va nous afficher les infos du véhicule
    // Un parent ne peut pas accéder aux propriétés de la classe enfant
    public function getInfos(): string
    {
        return $this->_marque." ". $this->_modele;
    }
}

// On crée notre classe enfant
class VoitureElec extends Voiture
{
    private int $_autonomie;


    function __construct(string $marque, string $modele, int $autonomie) 
    {
        // Permet de récuper les propriétés de la classe parent
        parent::__construct($marque, $modele);

        $this->_autonomie = $autonomie;
    }

    //Getter et setter 
    public function getAutonomie(): int
    {
        return $this->_autonomie;
    }

    public function setAutonomie($autonomie): void
    {
        $this->_autonomie = $autonomie;
    }

    // Fonction qui permet d'afficher les infos de la classe enfant
    public function getInfos(): string
    {
        //Renvoi les propriétés de la classe parent + celles de la classe enfant
        return parent::getInfos() . " " . $this->_autonomie;
    }
}

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);

echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";


?>