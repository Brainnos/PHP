<?php
require ("pdo-connector.php");

$params = [
    "nom" => $nom,
    "taille" => $taille,
    "boisson" => $boisson,
    "cafetiere" => $cafetiere,
    "date_commande" => $date
];

$query = "INSERT INTO commande (nom, taille, boisson, cafetiere, date_commande) VALUES (:nom, :taille, :boisson, :cafetiere, :date)";
$req = $dbh->prepare($query);
$req->execute($params);
