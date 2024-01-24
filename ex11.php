<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une <br>
chaîne de caractère représentant une date.<br><br>
Exemple :<br>
formaterDateFr("2018-02-23");<br>
</p> 

<h2>Résultat</h2>

<p>Affichage :
</p> 



<?php

// Date en chaîne de charactères
$date ="2018-02-23";

// Fonction qui permettra d'afficher la date dans le format souhaité cad FR
function formaterDateFr($date)
{

    // Crée un objet DateTime qui prend en argument un string
    $dateTime = new DateTime($date);

    //Crée un objet IntlDateFormatter qui va permettre de formater la date en français, avec comme arguments fr_FR pour le pays, IntlDateFormatter::FULL pour afficher un style complet et
    //IntlDateFormatter::NONE pour ne pas afficher l'heure
    $dateFormatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
    

    return $dateFormatter->format($dateTime);



}

echo formaterDateFr($date);


?>