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


// Tableau duquel on veut afficher les informations des variables 
$tableauValeurs=
[
    true,
    "texte",
    10,
    25.369,
    array("valeur1","valeur2")
];


    // Boucle qui va nous permettre de parcourir les éléments du tableau et qui à chaque itération va enregistrer l'element du tableau dans la variable $info

foreach($tableauValeurs as $info)
{
    echo(var_dump($info)."<br>");
}


