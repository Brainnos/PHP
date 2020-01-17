<?php
header("Access-Control-Allow-Origin: *");
require_once ("include/pdo-connector.php");

$request = ("SELECT titre, artiste, horaire FROM titres ORDER BY horaire DESC LIMIT 12");
$query = $dbh->prepare($request);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);