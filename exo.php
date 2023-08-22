<?php
// Ajout et suppression d'éléments
// Créez un tableau vide.
$tableau = array();
// Ajoutez les nombres de 1 à 5 à ce tableau.
for ($n = 1; $n <= 5; $n++) {
    array_push($tableau, $n);
}
// Supprimez le troisième élément.
$tableau = array(1, 2, 3, 4, 5);
array_splice($tableau, 2, 1);
// Affichez le contenu final du tableau.
print_r($tableau);







// Recherche et modification
// Créez un tableau contenant plusieurs noms de pays.
$pays = ["France", "Maroc", "Algerie", "Espagne", "Italie"];
// Vérifiez si "France" est présent dans le tableau.
// Si oui, remplacez "France" par "Espagne".
if (in_array("France", $pays)) {
    $position = array_search("France", $pays); //Je déclare une variable position, puis je recherche sa position
    $pays[$position] = "Espagne"; //Je remplace l'element france par Espagne
    echo "Oui, France est présent dans le tableau" . "<br>";
} else {
    echo "Non, France est pas présent dans ce tableau";
}
// Affichez le tableau modifié.
print_r($pays);

# Tirage du loto :
/*
- on veut 5 n° au hasard
- on des n° différents
- numéros de 1 à 49
- comment savoir si le n° est déjà sorti ?
- Trier les n° pour l'affichage final
- les numeros doivent etre séparé par des tirets (-) dans l'affichage final
- exemple : 5-7-12-49-34

 

- utilisez la fonction rand pour générer un nombre aléatoire
- exemple : $nombreAleatoire = rand(1, 49);
*/
$numero = [];
// for ($i = 0; $i < 5; $i++) {
while (count($numero) <= 5) {
    $numeroAleatoire = rand(1, 49);
    if (!in_array($numeroAleatoire, $numero)) {
        $numero[] = $numeroAleatoire;
    }
}
// sort($numero);
// implode("-", $numero);
// echo "<pre>";
// print_r($numero);
// echo "<pre>";
sort($numero);
$numero = implode("-", $numero);
echo $numero;
# Tirage EuroMillions
/*
 - Pour jouer à EuroMillions , il vous faut cocher 7 numéros : 
 - 5 numéros sur une grille de 50 numéros 
 - et 2 étoiles sur une grille de 12 numéros. 
 - Vous remportez le jackpot si vous avez 5 numéros gagnants et les 2 étoiles.

 

 - ecrire une fonction tirage qui prends un deux parametres
 - le premier parametres correspond au nombre de numeros a tiré
 - le second correspond au nombre maximum que les numeros ne doivent pas dépasser
*/

function tirage($num, $max)
{
    $numeros = [];
    while (count($numeros) < $num) {
        $numeroAleatoire = rand(1, $max);
        if (!in_array($numeroAleatoire, $numeros)) {
            $numeros[] = $numeroAleatoire;
        }
    }
}

?>