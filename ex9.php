<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de <br>
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").<br><br>
Exemple :<br>
afficherRadio($nomsRadio);<br>
</p> 

<h2>Résultat</h2>

<p>Affichage :
</p> 






<?php

$nomsRadio = 
[
    "Monsieur" => "Masculin",
    "Madame" => "Féminin",
    "Mademoiselle" => "Autre",

];

// Fonction qui permettra d'afficher des boutons radio à partir d'éléments d'un tableau
function afficherRadio($nomsRadio)
{
    
    $result ="";

    foreach($nomsRadio as $civilite=>$appelation)
    {
        

        
            $result .= '<div>
            <input type="radio" id="'.$civilite.'" name="drone" value="'.$civilite.'"  />
            <label for="'.$civilite.'">'.$appelation.'</label></div>';
        
        
        
    }

    

    return $result;
}

echo afficherRadio($nomsRadio);


?>