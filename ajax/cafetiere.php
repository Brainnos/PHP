<?php
header('Content-Type: application/json');

$nom = $_REQUEST["nom"];
$taille = $_REQUEST["taille"];
$boisson = $_REQUEST["boisson"];
$cafetiere = $_REQUEST["cafetiere"];
$date = date("Y-m-d H:i:s");


for ($i = 0; $i < 5000000; $i++) {
    // Préparation env 10s
};

$requete = ["nom" => $nom, "taille" => $taille, "boisson" => $boisson, "cafetiere" => $cafetiere];

echo json_encode($requete);
