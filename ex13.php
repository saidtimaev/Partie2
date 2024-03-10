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

// On crée la classe voiture
class Voiture
{
    //On définit les propriétés de la classe
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle= 0; // On met la vitesse de base par défaut à 0
    private int $_numeroVehicule;
    private bool $_estDemarre = false; // On dit que la voiture est stoppée par défaut

    //On met en place un compteur du nombre de véhicules qui est à 1 par défaut
    private static int $_nbVehicules = 1;

    //Fonction construct
    function __construct(string $marque, string $modele, int $nbPortes ) 
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
    
        //Le numéro du véhicule sera attribué au compteur du nombre de véhicules à sa création
        $this->_numeroVehicule = self::$_nbVehicules;
        self::$_nbVehicules++; // Le compteur s'auto incrémente

    }

    // La fonction qui permettra de faire passer le statut de la voiture à demarré (true)
    // Affiche aussi que la voiture a demarré
    public function demarrer()
    {

        if ($this->_estDemarre)
        {
            
            echo "Le véhicule $this est déjà démarré<br>";

            // Le return permet de sortir de la fonction
            return ;
        }

        echo "Le véhicule $this démarre<br>";
        $this->_estDemarre = true;
    } 

    //Fonction qui va nous notifier si on veut accéler alors que la voiture est à l'arrêt (false)
    //ou qui va accélerer si la voiture est allumée
    public function acceler(int $acceleration): void
    {
        // Early exit
        if (!$this->_estDemarre)
        {
            
            echo "Le véhicule $this veut accélérer de ".$acceleration."<br>";
            echo "Pour accélérer il faut démarrer le véhicule $this !<br>"; 

            // Le return permet de sortir de la fonction
            return ;
        }

        
        // Par défaut
        echo "Le véhicule $this accélère de ".$acceleration." km / h<br>";
        $this->_vitesseActuelle += $acceleration;
        
    } 

    // Fonction qui permet de passer le statut de la voiture à arrêté et mettre sa vitesse à 0
    public function stopper(): void
    {
        // Early exit
        if (!$this->_estDemarre)
        {
            
            echo "Le véhicule $this est déjà à l'arrêt<br>";

            // Le return permet de sortir de la fonction
            return ;
        }

        echo "Le véhicule $this est stoppé<br>";
        $this->_vitesseActuelle = 0;
        $this->_estDemarre = false;

    } 

    // Fonction qui permet de réduire la vitesse de la voiture
    public function ralentir($vitesse): void
    {
        if ($this->_vitesseActuelle < $vitesse)
        {
            
            echo "Vous ne pouvez pas ralentir de $vitesse km / h !<br>";

            // Le return permet de sortir de la fonction
            return ;
        }

        echo "Le véhicule $this a ralenti de : ".$vitesse." km / h<br>";
        $this->_vitesseActuelle -= $vitesse;

    } 

// On met en place les getters et setters

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

    public function getNbPortes(): int
    {
        return $this->_nbPortes;
    }

    public function setNbPortes($nbPortes): void
    {
        $this->_nbPortes = $nbPortes;
    }

    public function getPhraseVitesseActuelle(): string
    {
        return "La vitesse du véhicule $this est de : ".$this->_vitesseActuelle." km / h<br>";

    }

    public function setVitesseActuelle($vitesseActuelle): void
    {
        $this->_vitesseActuelle = $vitesseActuelle;
    }

    public function getNumeroVehicule(): int
    {
        return $this->_numeroVehicule;
    }

    public function setNumeroVehicule($numeroVehicule): void
    {
        $this->_numeroVehicule = $numeroVehicule;
    }

    public function getEstDemarre(): bool
    {
        return $this->_estDemarre;
    }

    public function setEstDemarre(bool $estDemarre): void
    {
        $this->_estDemarre = $estDemarre;
    }


    public function __toString() {
        return "$this->_marque $this->_modele";
    }

    // La méthode magique qui nous permettra d'afficher les infos du véhicule
    public function afficherInfos() 
    {

        // // Par défaut
        // $statutVehicule = "Le véhicule {$this->getMarque()} est demarré";

        // // Si on rentre dans la condition
        // if ($this->_vitesseActuelle == 0)
        // {
        //     $statutVehicule = "Le véhicule {$this->getMarque()} est à l'arrêt";
        // } 

        // Version ternaire 
        $statutVehicule = $this->_vitesseActuelle == 0 ? "Le véhicule {$this->getMarque()} est à l'arrêt" : "Le véhicule {$this->getMarque()} est demarré";
        
        

        $infosVehicule = "<br>Infos véhicule {$this->getNumeroVehicule()}<br>"
                        ."*****************************************<br>"
                        ."Nom et modèle du véhicule :$this<br>"
                        ."Nombre de portes :{$this->getNbPortes()}<br>"
                        .$statutVehicule."<br>"
                        ."Sa vitesse actuelle est de : {$this->_vitesseActuelle} km / h<br>";

        return $infosVehicule;

    }
}

$v1 = new Voiture("Peugeot","408",5);
$v2 = new Voiture("Citroën","C4",3);

$v1->demarrer();
$v1->demarrer();

$v1->acceler(50);
$v1->ralentir(10);
$v1->ralentir(41);
$v2->demarrer();
$v2->stopper();
$v2->stopper();

$v2->acceler(20);
echo $v1->getPhraseVitesseActuelle();
echo $v2->getPhraseVitesseActuelle();

echo $v1->afficherInfos();
echo $v2->afficherInfos();


?>