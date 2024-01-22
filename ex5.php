<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en <br>
précisant le nom des champs associés.<br><br>
Exemple :<br>
$nomsInput = array("Nom","Prénom","Ville");<br>
afficherInput($nomsInput);<br>
</p> 

<h2>Résultat</h2>

<p>Affichage :
</p> 

<?php

$nomsInput = 
[
    "Nom",
    "Prénom",
    "Ville"
];

$result = "<form action='' method='get' class='form-example'>";

function afficherInput($nomsInput)
{

  

    foreach ($nomsInput as $nomFormulaire)
    {
      
      $result .= "<div class='form-example'>
                  <label for='".$nomFormulaire."'>".ucfirst($nomFormulaire)."</label><br>
                  <input type='text' name='".$nomFormulaire."' id='".$nomFormulaire."' required />
                </div>";

    }

    $result .= "</form>";

    return $result;

}



echo afficherInput($nomsInput);



?>