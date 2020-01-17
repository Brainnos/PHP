<?php
header("Access-Control-Allow-Origin: *");
require_once ("include/pdo-connector.php");

$recherche = $_REQUEST["recherche"];

$request = ("SELECT artiste, titre, horaire FROM titres WHERE artiste LIKE '%$recherche%' ORDER BY horaire LIMIT 20");
$query = $dbh->prepare($request);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);