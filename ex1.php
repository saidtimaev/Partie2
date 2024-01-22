<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de <br>
caractère passée en argument en majuscules et en rouge.<br>
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;<br>

</p> 

<h2>Résultat</h2>

<p>Affichage (si $texte = « Mon texte en paramètre ») :
</p> 


<?php




function convertirMajRouge($texte) 
{
    
    return '<span style="color: red;">'.strtoupper($texte).'</span>';
    
}

echo convertirMajRouge("Je verifie si ca marche")

?>