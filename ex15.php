<h1>Exercice 15</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format.<br><br>
Affichage<br><br>
L’adresse elan@elan-formation.fr est une adresse e-mail valide<br><br>
L’adresse contact@elan est une adresse e-mail invalid<br>
</p> 

<h2>Résultat</h2>

<p>Affichage :</p>


<?php

//Version ternaire
$email = "elan@elan-formation.fr";

$valide = (filter_var($email, FILTER_VALIDATE_EMAIL)) ? "L'adresse $email est une adresse e-mail valide" : "L'adresse $email est une adresse e-mail invalide";

echo $valide;
   


// if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
// {
//     echo("L'adresse $email est une adresse e-mail valide");
// }
// else{
//     echo("L'adresse $email est une adresse e-mail invalide");

// }
  

?>