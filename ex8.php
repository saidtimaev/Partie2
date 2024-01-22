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

$url = "https://my.mobirise.com/data/userpic/764.jpg";


function repeterImage($url,$nombreRep)
{

    $result="";

    for ($i = 1; $i <= $nombreRep ; $i++) 
    
    {

        $result .='<img src="'.$url.'"/>';


    }

    return $result;


}


echo repeterImage($url,4);





?>