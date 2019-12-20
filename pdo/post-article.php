<?php

include('include/pdo-handler.php');

//Récupération des variables issues de $_POST
$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT) ?? 0;
$titre = filter_input(INPUT_POST, "titre", FILTER_SANITIZE_STRING) ?? "Article sans titre";
$corps = filter_input(INPUT_POST, "corps", FILTER_SANITIZE_STRING) ?? "--";
$date = filter_input(INPUT_POST, "date", FILTER_SANITIZE_STRING) ?? "--";

// On crée un tableau avec ces variables
$params = [
    "id" => $id,
    "titre" => $titre,
    "corps" => $corps,
    "date" => $date
];

// Ma fonction, moins lisible
// function update_article(PDO $dbh)
// {

//     $request = $dbh->prepare("UPDATE article
//     SET titre = :titre, corps = :corps, date = :date
//     WHERE id = :id");
//     $request->execute(array(
//         "id" => $_POST["id"],
//         "titre" => $_POST["titre"],
//         "corps" => $_POST["corps"],
//         "date" => $_POST["date"]
//     ));
//     return $request;
// }

// update_article($dbh);

/**
 * Mise à jour d'un article en base /!\CORRIGE/!\
 * @param PDO $dbh
 * @param INT $article_id
 * @param array $params
 */
function update_article(PDO $dbh, $params)
{
$query = "UPDATE article
SET titre = :titre, corps = :corps, date = :date
WHERE id = :id";
$request = $dbh->prepare($query);
$request->execute($params);
return $request;
}

// Execution de la requête mise à jour
$result = update_article($dbh, $params);
if ($result) {
    header("Location: article-list.php");
    exit;
}


