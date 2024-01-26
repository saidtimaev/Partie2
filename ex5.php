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

// On crée le tableau avec les valeurs à partir desquelles on va créer les champs du formulaire
$nomsInput = 
[
    "Nom",
    "Prénom",
    "Ville"
];

// Début du code HTML
$result = "<form action='' method='get' class='form-example'>";


//Fonction qui va permettre d'afficher le formulaire
function afficherInput($nomsInput)
{

  // Boucle qui va nous permettre de parcourir les éléments du tableau et qui à chaque itération va enregistrer l'element du tableau dans la variable $nomFormulaire
    foreach ($nomsInput as $nomFormulaire)
    {
      
      $result .= "<div class='form-example'>
                  <label for='".$nomFormulaire."'>".ucfirst($nomFormulaire)."</label><br>
                  <input type='text' name='".$nomFormulaire."' id='".$nomFormulaire."' required />
                </div>";

    }

    // Fin du code HTML
    $result .= "</form>";

    // Renvoie le formulaire HTML
    return $result;

}


// Affiche le formulaire
echo afficherInput($nomsInput);



?>