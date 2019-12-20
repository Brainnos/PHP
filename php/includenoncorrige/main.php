<?php
date_default_timezone_set("Europe/Paris");
$heure = date('H:i:s');



function traduction_date($jour_a_traduire) {
    $tableau_jour = 
["Monday" => "Lundi",
"Tuesday" => "Mardi",
"Wednesday" => "Mercredi",
"Thursday" => "Jeudi",
"Friday" => "Vendredi",
"Saturday" => "Samedi",
"Sunday" => "Dimanche"
];

$traduction = $tableau_jour[$jour_a_traduire];
return $traduction;
};

$jour_de_la_semaine_en = date("l");
$jour_de_la_semaine_fr = traduction_date($jour_de_la_semaine_en);

//$prenom = $_GET['prenom'];
//var_dump($prenom);

if (empty($_GET['prenom'])) {
    $user = "inconnu";
} else {
    $user = $_GET['prenom'];
}

$couleur_titre = $_GET["color"] ?? "#ff0000";

$todo_list = ["Faire une todo list", "Bloc d'info", "Devenir un maitre angulariste (probablement jamais)"];


?>