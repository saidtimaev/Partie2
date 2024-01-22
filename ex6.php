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

$elements = 
[
    "Monsieur",
    "Madame",
    "Mademoiselle"
];



function alimenterListeDeroulante($elements)
{

    $result = "<select name='civilite' id='civilite-select'>";

    
    foreach($elements as $civilite)
    {
        $result .= "<option value='".$civilite."'>".$civilite."</option>";
    }

    $result .= "</select>";

    return $result;
    

}

echo alimenterListeDeroulante($elements);


?>