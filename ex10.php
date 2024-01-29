<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire <br>
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un<br> intitulé de formation : <br>
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br><br>
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement <br>
de validation (submit).<br>
</p> 

<h2>Résultat</h2>

<p>Affichage :
</p> 





<?php

$elements = 
[
    "Nom" => "",
    "Prénom" => "",
    "Adresse" => "",
    "Email" => "",
    "Ville" => "",
    "Sexe" => "",
    "formations" => [
                    "Dev"=>"Développeur Logiciel",
                    "Designer"=>"Designer Web",
                    "Integ"=>"Intégrateur",
                    "Chef"=>"Chef de projet"
                    ]
];

function afficherSexe()
{
    $result = '<div class="form-example">
                    <label for="sexe">Sexe:</label><br>
                    <input type="radio" id="homme" name="sexe" value="homme" required>
                    <label for="homme">Homme</label><br>
                    <input type="radio" id="femme" name="sexe" value="femme">
                    <label for="femme">Femme</label><br>
                </div><br>';

    return $result;
}

function afficherFormations($formations)
{
    $result = '<div class="form-example"><p>Formations :</p>';
    foreach ($formations as $formation => $intitule) {
        $result .= '<div class="form-example">
                        <input type="checkbox" id="'.$formation.'" name="formation[]" value="'.$intitule.'"/>
                        <label for="'.$formation.'">'.$intitule.'</label><br><br>
                    </div>';
    }
    $result .= '</div><br>';
    return $result;
}

// Fonction qui va créer un formulaire à partir d'élements récupérés d'un tableau
function afficherFormulaire($elements)
{

    $result = "<form action='' method='get' class='form-example'>";

    // Pour chaque élément du tableau
    foreach ($elements as $nomFormulaire => $valeurFormulaire)
    {

        // Si l'élément est "sexe"
        if ($nomFormulaire === "Sexe")
        {
            // Appel de la fonction pour afficher la liste radio
            $result .= afficherSexe();
        }
        //Si le tableau contient un tableau
        elseif (is_array($valeurFormulaire))
        {
            // Appel de la fonction pour afficher les cases à cocher des formations
            $result .= afficherFormations($valeurFormulaire);
        }
        else
        {
            $result .= "<div class='form-example'>
                            <label for='".$nomFormulaire."'>".ucfirst($nomFormulaire).":"."</label><br>
                            <input type='text' name='".$nomFormulaire."' id='".$nomFormulaire."' required />
                        </div><br>";
        }

    }

    $result .= "<div class='form-example'>
    <br><input type='submit' value='Valider' />
  </div>
    </form>";

    return $result;

}



echo afficherFormulaire($elements);



?>