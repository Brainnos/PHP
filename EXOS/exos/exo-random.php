<?php

$name = ["Alexandra", "Than-Hui", "Marc", "Théo", "Steeven", "Alexandre", "Jacques", "Thibault", "Yann", "Nathaëlle", "Fayçal", "Olivier", "Eloïse", "Juliette", "Karla"];

$profession = [
"pompier", "policier", "infirmier", "webdeveloppeur", "dentiste", "agriculture", "boucher"
];

$adjectif_list = "Absolu Admirable Agréable Aimable Amusant Apocalyptique Approximatif Attachant Banal Bas Bavarois Bien Bof Bon Bouleversant Boute-en-train Captivant Caractériel Cataclysmique Catastrophique Céleste Charmant Chef-d’œuvre Chouette Commun convenable Convivial Coquet Correct Crédible Croquante Cynique Dégueulasse Délectable Délicieuse Disjoncté Divin Douce Doué Drôle Éblouissant Ébouriffé Efficace Emballant Émouvant Endiablé Ennuyant Enragé Enthousiasmant Épatant Époustouflant Épouvantable Équitable Exaltant Exceptionnel Excusable Exemplaire Extra moelleux Féru Festif Flamboyante Formidable Grandiose Hardi Honnête Horrible Important Impressionnant Inconnu Incrédule Indépendant Infernal Innommable Insignifiant Insuffisant Insupportable Intenable Intéressant Irrésistible Libidineux Louable Majestueux Magistral Magnifique Médiocre Merdique Merveilleux Mignon Minable Mirobolante Mortel Moyen Négligeable Nul Ordinaire Original Parfait Pas pire Passable Passionnant Percutant Persévérant Phénoménal Placide Plaisant Prestant Prodigieux Proverbial Quelconque Ravissant Recyclé Relatif Remarquable Renversant Revendicatrice Révolutionnaire Rocambolesque Rutilant Saint Satisfaisant Séduisant Sexy Somptueux Spiritueux Splendide Suave Sublime Sulfureuse Superbe Suprême Supportable Talentueux Tolérable Tragique Trépidant Très bon Troublant Valable Valeureux Vénérable Vitaminés Vivable Vulgaire";

$adjectif = explode(" ", $adjectif_list);




function random($name, $profession, $adjectif)
{
    $random_name = $name[mt_rand(0, sizeof($name) - 1)];
    $random_profession = $profession[mt_rand(0, sizeof($profession) - 1)];
    $random_adjectif = $adjectif[mt_rand(0, sizeof($adjectif) - 1)];
    echo $random_name . ', ' . $random_profession . ', ' . $random_adjectif;
}

random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";random($name, $profession, $adjectif); echo "<br>";