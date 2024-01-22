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

$elements = 
[
    "Choix 1" => "checked",
    "Choix 2" => "",
    "Choix 3" => "checked"
];


function genererCheckbox($elements)
{
    $result = "";

    foreach($elements as $choix=>$coche)
    {
        $result .= '<input type="checkbox" id="scales" name="'.$choix.'"'.$coche.'/>
                    <label for="'.$choix.'">'.$choix.'</label><br>';
    }

   

    return $result;

}

echo genererCheckbox($elements);






?>