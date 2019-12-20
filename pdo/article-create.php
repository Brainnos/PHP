<?php

include('include/pdo-handler.php');

// Récupération des variables issues de $_POST
$titre = filter_input(INPUT_POST, "titre", FILTER_SANITIZE_STRING) ?? "Article sans titre";
$corps = filter_input(INPUT_POST, "corps", FILTER_SANITIZE_STRING) ?? "--";
$date = filter_input(INPUT_POST, "date", FILTER_SANITIZE_STRING) ?? "2019-12-17";
$auteur_id = filter_input(INPUT_POST, "auteur_id", FILTER_SANITIZE_STRING) ?? "--";

// Récupération des auteurs id

// On crée un tableau avec ces variables
$params = [
    "titre" => $titre,
    "corps" => $corps,
    "date" => $date,
    "auteur_id" => $auteur_id
];


function create_article($dbh, $params)
{
  $query = "INSERT INTO article (titre, corps, date, auteur_id)
  VALUES (:titre, :corps, :date, :auteur_id)";
  $request = $dbh->prepare($query);
  $request->execute($params);
  return $request;
}

$result = create_article($dbh, $params);
if ($result) {
    header("Location: article-list.php");
    exit;
}