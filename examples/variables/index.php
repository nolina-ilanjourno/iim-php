<?php
// Introduction aux variables en PHP

/* ---------------------------------------
   SECTION 1: Introduction aux variables
   --------------------------------------- */
// En PHP, une variable commence toujours par le signe dollar ($) suivi du nom de la variable.
// Exemple :
$nom = "Alice";

// Pour afficher une variable, on peut utiliser echo.
echo $nom;

//* Exercice 1: Créez une variable qui stocke votre âge et affichez-la.


/* ------------------------------------------------
   SECTION 2: Les types de variables
   ------------------------------------------------ */
// PHP supporte différents types de variables :
// - String (chaînes de caractères)
// - Integer (nombres entiers)
// - Float (nombres à virgule flottante ou décimaux)
// - Boolean (vrai ou faux)
// - Array (tableaux)
// - Object (objets)
// - NULL

// Exemple de chaque type :
$string = "Ceci est une chaîne de caractères";
$integer = 25;
$float = 10.5;
$boolean = true; // ou false
$array = array("pomme", "banane", "cerise");
$null = NULL;

//* Exercice 2: Créez une variable pour chaque type et utilisez echo pour les afficher.


/* ---------------------------------------------
   SECTION 3: Opérations sur les variables
   --------------------------------------------- */
// On peut effectuer des opérations simples sur les variables.
// Addition:
$somme = 5 + 3; // donne 8

// Concaténation de chaînes de caractères :
$phrase = "Bonjour, " . "le monde!"; // donne "Bonjour, le monde!"

//* Exercice 3: Créez deux variables numériques et affichez la somme.
//* Exercice 4: Créez deux chaînes de caractères et concaténez-les.


/* ---------------------------------------------
   Conclusion
   --------------------------------------------- */
// Les variables sont fondamentales en PHP. Vous avez appris comment les créer, les différents types, et comment les manipuler.
// Continuez à pratiquer avec les exercices ci-dessus et expérimentez avec différents types de données et opérations.

?>
