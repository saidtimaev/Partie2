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
    "Nom",
    "Prénom",
    "Adresse",
    "Email",
    "Ville",
    "Sexe",
    $formations = [
                    "Dev"=>"Développeur Logiciel",
                    "Designer"=>"Designer Web",
                    "Integ"=>"Intégrateur",
                    "Chef"=>"Chef de projet"
                    ]
];



// Fonction qui va créer un formulaire à partir d'élements récupérés d'un tableau
function afficherFormulaire($elements)
{

    $result = "<form action='' method='get' class='form-example'>";

    // Pour chaque élément du tableau
    foreach ($elements as $nomFormulaire)
    {

        //Si le tableau contient un tableau
        if (is_array($nomFormulaire))
        {
            $result .= '<p>Formations :';
            foreach($nomFormulaire as $formation=>$intitule)
            {
                $result .= '<div class="form-example">
                

                <input type="checkbox" id="scales" name="'.$intitule.'"'.$formation.'/>
                <label for="'.$intitule.'">'.$intitule.'</label><br><br>';
            }
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