<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser <br>
dans le tableau associatif si la case est cochée ou non.<br><br>
Exemple :<br>
genererCheckbox($elements);<br>
//où $elements est un tableau associatif clé => valeur avec 3 entrées.<br>
</p> 

<h2>Résultat</h2>

<p>Affichage :
</p> 



<?php

// On crée le tableau avec les valeurs à partir desquelles on va créer les cases à cocher
$elements = 
[
    "Choix 1" => "checked",
    "Choix 2" => "",
    "Choix 3" => "checked"
];


//Fonction qui va permettre d'afficher les cases à cocher
function genererCheckbox($elements)
{
    $result = "";

    // Boucle qui va nous permettre de parcourir les éléments du tableau et qui à chaque itération va enregistrer l'element du tableau $coche associé à une clé $choix
    foreach($elements as $choix=>$coche)
    {
        $result .= '<input type="checkbox" id="scales" name="'.$choix.'"'.$coche.'/>
                    <label for="'.$choix.'">'.$choix.'</label><br>';
    }

   

    // Renvoie le code HTML
    return $result;

}

// Affiche les cases à cocher
echo genererCheckbox($elements);






?>