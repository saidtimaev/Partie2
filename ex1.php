<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de <br>
caractère passée en argument en majuscules et en rouge.<br>
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;<br>

</p> 

<h2>Résultat</h2>

<p>Affichage (si $texte = « Mon texte en paramètre ») :
</p> 


<?php



// On crée la fonction qui va permettre de convertir notre texte en couleur rouge et en majuscules
function convertirMajRouge($texte) 
{
    // La fonction mb_strtoupper() permet de convertir notre texte en MAJUSCULES
    // et <span style="color: red;> de convertir le texte en rouge
    return '<span style="color: red;">'.mb_strtoupper($texte).'</span>';
    
}

echo convertirMajRouge("Je verifie si ca marche")

?>