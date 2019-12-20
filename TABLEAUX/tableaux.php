<?php

//--------------------Rappels sur les tableaux -------------------------------------//

//Tableau simple
$tableau_simple = [
  'lundi',
  'mardi',
  'mercredi',
  'jeudi',
  'vendredi'
];

//Tableau associatif
$tableau_associatif = [
  'jour_01' => 'lundi',
  'jour_02' => 'mardi',
  'jour_03' => 'mercredi',
  'jour_04' => 'jeudi',
  'jour_05' => 'vendredi'
];


//Tableau à 2 dimensions.
$tableau_2d = [
  'lundi' => ['cours php', 'midi', 'soir'],
  'mardi' => ['cours html', 'midi', 'soir'],
  'mercredi' => ['cours css', 'midi', 'soir'],
  'jeudi' => ['cours js', 'midi', 'soir'],
  'vendredi' => ['cours ANGULAR NOOOO', 'midi', 'soir']
];

// - Parcourir ces tableaux avec for puis avec foreach.

foreach ($tableau_2d as $key => $value) {
  foreach ($value as $num => $event) {
    echo "$key event n° $num  -> $event  <br>";
  } echo  '<br>';
};

for ($i = 0; $i <5; $i++) {
  echo $tableau_simple[$i].PHP_EOL;
}

$cle_tab_asso = array_keys($tableau_associatif);
print_r($cle_tab_asso);










$var = ['1', 'bonjour'];


// - vérifiez que $var est un tableau avec 'is_array()'.
if(is_array($var)) {
  echo "oui c'est un tableau";
} else {
  echo "non ce n'est pas un tableau";
};


$fruits = ['pomme','fraise','kiwi','cerise','poire','banane','raisin'];

// - utilisez 'count()' pour le nombre d'éléments.
$count = count($fruits);
echo "<p>$count</p>";

// - Retournez uniquement le 3ème fruit.
echo $fruits[2];

// - Crééz un bloc de condition pour savoir s'il existe un fruit nommé 'cerise'.
if (in_array("cerise", $fruits)) {
  echo "<p>oui ce fruit existe</p>";
} else {
  echo "<p>non ce fruit n'existe pas</p>";
}

// - Crééz un bloc de condition pour savoir s'il existe un fruit nommé 'cassis'.
if (in_array("cassis", $fruits)) {
  echo "<p>oui ce fruit existe</p>";
} else {
  echo "<p>non ce fruit n'existe pas</p>";
}

// - Triez le tableau $fruits par ordre alphabetique.
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "<p>$val</p>";
}

// - Mélangez le tableau $fruits
//shuffle($fruits);
//print_r($fruits);

// - Manipulez les fonctions 'explode()' et 'implode()' de php sur le tableau $fruits.

$array_to_str = implode(", ", $fruits);
echo $array_to_str . "<br>";
echo "<br>";
$str_to_array = explode(', ', $array_to_str);
print_r($str_to_array);
echo "<br>";



$user_profile = [
  'first_name' => 'Bob',
  'last_name' => 'MARTIN',
  'age' => 25
];
// - Utilisez 'extract()' sur ce tableau associatif pour automatiquement créer des variables PHP portant le nom des clés.
extract($user_profile);
echo "<p>$first_name, $last_name, $age</p>";

//Voici les listes de courses d'Alice & Bob.
$liste_alice = [
  'oeufs',
  'farine',
  'huile',
  'mayo',
  'lait',
  'crème fraîche',
  'sucre',
  'compote',
  'carottes',
];

$liste_bob = [
  'thé',
  'café',
  'oeufs',
  'crème fraîche',
  'lentilles',
  'compote',
  'ketchup',
  'pommes de terre',
  'lait',
  'huitres',
  'bacon',
  'bieres',
  'champagne',
  'Meursault Premier Cru “Genevrières” 2016'
];

// - Lister sous forme de tableau les produits en commun dans les 2 listes
$result_array = array_intersect($liste_alice, $liste_bob);
print_r($result_array);
echo "<br>";
echo "<br>";

// - Lister sous forme de tableau les produits en exclusifs à la liste de Bob.
$result = array_diff($liste_alice, $liste_bob);
print_r($result);
echo "<br>";
echo "<br>";

// - Donner la liste sous forme de tableau de tous les produits de bob et alice sans doublons.
$resultmix = array_unique(array_merge($liste_alice, $liste_bob));
print_r($resultmix);
echo "<br>";
echo "<br>";
// - Aouter l'ingrédient 'riz' au début de la liste de bob.
array_unshift($liste_bob, "riz");
print_r($liste_bob);