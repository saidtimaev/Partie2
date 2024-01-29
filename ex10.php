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

$contacts = 
[
    "Nom" ,
    "Prénom",
    "Adresse",
    "Email",
    "Ville",
];

$sexes =
[
    "Homme",
    "Femme"
];

$formations =
[
"Dev"=>"Développeur Logiciel",
"Designer"=>"Designer Web",
"Integ"=>"Intégrateur",
"Chef"=>"Chef de projet"
];

// Va permettre de créer la liste radio sexe
function afficherSexe($tableauSexes)
{   
    $result =   '<div class="form-example">
                <label for="sexe">Sexe :</label><br>';

    foreach ($tableauSexes as $sexe)
    {
        $result .= "<input type='radio' id='$sexe' name='sexe' value='$sexe' required>
                    <label for='$sexe'>$sexe</label><br>";
    
    }
    $result .= '</div><br>';

    return $result;
}

// Va permettre de créer les checkboxes pour les formations
function afficherFormations($tableauFormations)
{
    $result = '<div class="form-example"><p>Formations :</p>';
    foreach ($tableauFormations as $formation => $intitule) {
        $result .= '<div class="form-example">
                        <input type="checkbox" id="'.$formation.'" name="formation[]" value="'.$intitule.'"/>
                        <label for="'.$formation.'">'.$intitule.'</label><br><br>
                    </div>';
    }
    $result .= '</div><br>';
    return $result;
}

// Va permettre de créer les champs contacts du formulaire
function afficherContact($tableauContacts)
{
    $result = "";

    foreach ($tableauContacts as $champsContact)
    {
        $result .= "<div class='form-example'>
                            <label for='".$champsContact."'>".ucfirst($champsContact).":"."</label><br>
                            <input type='text' name='".$champsContact."' id='".$champsContact."' required />
                        </div><br>";
    }
    return $result;

}

// Fonction qui va créer un formulaire à partir d'élements récupérés des 3 tableaux
function afficherFormulaire($tableauContacts, $tableauSexes, $tableauFormations)
{

    // Début HTML
    $result = "<form action='' method='get' class='form-example'>";

    // Affiche les résultats renvoyés par les return des fonctions
    echo afficherContact($tableauContacts);
    echo afficherSexe($tableauSexes);
    echo afficherFormations($tableauFormations);

    // Fin HTML
    $result .= "<div class='form-example'>
    <br><input type='submit' value='Valider' />
  </div>
    </form>";

    return $result;

}

echo afficherFormulaire($contacts, $sexes, $formations);


?>