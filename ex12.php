<h1>Exercice 12</h1>

<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.<br><br>
Soit le tableau suivant : <br>
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));<br>
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.<br>
</p> 

<h2>Résultat</h2>

<p>Affichage :
</p> 


<?php 



$tableauValeurs=
[
    true,
    "texte",
    10,
    25.369,
    array("valeur1","valeur2")
];


foreach($tableauValeurs as $info)
{
    echo(var_dump($info)."<br>");
}


