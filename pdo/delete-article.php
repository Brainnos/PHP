<?php

include('include/pdo-handler.php');

$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT) ?? 0;
delete_article($dbh, $id);

/**
 * Delete d'un article en base /!\CORRIGE/!\
 * @param PDO $dbh
 * @param INT $article_id
 * @param array $params
 */
function delete_article(PDO $dbh, $article_id)
{

// On supprime d'abord les tags eventuellement associés à cet article
$query1 = "DELETE FROM article_has_tag
WHERE article_has_tag.article_id = :id";
$request = $dbh->prepare($query1);
$request->execute(["id" => $article_id]);

// Puis on supprime l'article concerné
$query2 = "DELETE FROM article
WHERE id = :id";
$request = $dbh->prepare($query2);
$request->execute(["id" => $article_id]);
return $request;
}

    
$result = delete_article($dbh, $article_id);
if ($result) {
    header("Location: article-list.php");
    exit;
}