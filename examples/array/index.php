<?php
// Introduction aux tableaux en PHP

/* ---------------------------------------------
   SECTION 1: Les bases des tableaux
   --------------------------------------------- */
echo "<h2>SECTION 1: Les bases des tableaux</h2>";

// Création d'un tableau simple
$nombres = array(1, 2, 3, 4, 5);
echo "Tableau de nombres: ";
print_r($nombres);
echo "<br><br>";

// Création d'un tableau avec la syntaxe courte
$fruits = ["pomme", "banane", "cerise"];
echo "Tableau de fruits: ";
print_r($fruits);
echo "<br><br>";

// Accès à un élément du tableau
echo "Le premier fruit est: " . $fruits[0]; // Les indices commencent à 0
echo "<br><br>";

// Modifier un élément
$fruits[1] = "mangue";
echo "Après modification, le deuxième fruit est: " . $fruits[1];
echo "<br><br>";

// Ajouter un élément
$fruits[] = "orange";
echo "Après ajout, le tableau de fruits contient: ";
print_r($fruits);
echo "<br><br>";

//* Exercice 1: Créez un tableau contenant les jours de la semaine et affichez-le.


/* ------------------------------------------------
   SECTION 2: Tableaux associatifs
   ------------------------------------------------ */
echo "<h2>SECTION 2: Tableaux associatifs</h2>";

// Création d'un tableau associatif
$age = [
    "Alice" => 25,
    "Bob" => 30,
    "Charlie" => 28,
];
echo "Tableau d'âges: ";
print_r($age);
echo "<br><br>";

// Accès à un élément du tableau associatif
echo "L'âge de Bob est: " . $age["Bob"];
echo "<br><br>";

// Exercice 2: Ajoutez un nouvel élément au tableau `$age` et affichez-le.


/* ---------------------------------------------
   SECTION 3: Parcourir les tableaux
   --------------------------------------------- */
echo "<h2>SECTION 3: Parcourir les tableaux</h2>";

// Boucle foreach pour un tableau simple
echo "Liste des fruits: ";
foreach ($fruits as $fruit) {
    echo $fruit . ", ";
}
echo "<br><br>";

// Boucle foreach pour un tableau associatif
echo "Âges des personnes: ";
foreach ($age as $nom => $agePersonne) {
    echo $nom . " a " . $agePersonne . " ans, ";
}
echo "<br><br>";

// Exercice 3: Utilisez une boucle pour afficher les jours de la semaine.


/* ---------------------------------------------
   SECTION 4: Débogage
   --------------------------------------------- */
echo "<h2>SECTION 4: Débogage</h2>";

// Utilisation de var_dump()
echo "Débogage avec var_dump(): ";
var_dump($fruits);
echo "<br><br>";


echo "Débogage avec print_r(); et la balise pre pour les tableaux associatifs";
echo "<pre>";
print_r($age);
echo "</pre>";
echo "<br><br>";

// Exercice 4: Utilisez `var_dump()` pour déboguer le tableau des jours de la semaine.

?>
