<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau <br>
de valeurs.<br><br>
Exemple :<br>
$elements = array("Monsieur","Madame","Mademoiselle");<br>
alimenterListeDeroulante($elements);<br>
</p> 

<h2>Résultat</h2>

<p>Affichage :
</p> 



<?php

// On crée le tableau avec les valeurs à partir desquelles on va créer les champs de la liste déroulante
$elements = 
[
    "Monsieur",
    "Madame",
    "Mademoiselle"
];


//Fonction qui va permettre d'afficher la liste déroulante
function alimenterListeDeroulante($elements)
{

    // Début du code HTML
    $result = "<select name='civilite' id='civilite-select'>";

    // Boucle qui va nous permettre de parcourir les éléments du tableau et qui à chaque itération va enregistrer l'element du tableau dans la variable $civilite
    foreach($elements as $civilite)
    {
        $result .= "<option value='".$civilite."'>".$civilite."</option>";
    }

    // Fin du code HTML
    $result .= "</select>";

    return $result;
    

}

// Affiche la liste déroulante
echo alimenterListeDeroulante($elements);


?>