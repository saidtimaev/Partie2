<h1>Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg<br>
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.<br><br>
Exemple :<br>
repeterImage($url,4);<br>
</p> 

<h2>Résultat</h2>

<p>Affichage :
</p> 





<?php

// Le lien de l'image qu'on doit afficher 5 fois
$url = "https://my.mobirise.com/data/userpic/764.jpg";


// Fonction qui va nous permettre d'afficher l'image 5 fois
function repeterImage($url,$nombreRep)
{

    $result="";


    // Boucle qui va afficher l'élément 5 fois
    for ($i = 1; $i <= $nombreRep ; $i++) 
    
    {

        $result .='<img src="'.$url.'"/>';


    }

    return $result;


}

// Afficher l'image 5 fois
echo repeterImage($url,4);





?>