<?php
session_start();

// Initialisation du connecteur PDO.
$dbh = init_PDO();

// Récupération des articles.
$articles = get_articles($dbh);

// ---------------------------------------------------------------------- //
// ------------------------ Debut de nos fonctions ---------------------- //
// ---------------------------------------------------------------------- //

/**
 * Initialisation de l'objet de connexion à la base de données.
 * @return PDO
 */
function init_PDO()
{
  try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    return $dbh;
  } catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
  }
}

/**
 * Récupération de tous les articles.
 *
 * @param PDO $dbh le gestionnaire de connexion PDO.
 * @return mixed array ou FALSE
 */
function get_articles(PDO $dbh)
{
  $query = 'SELECT article.id, article.titre, article.corps,  DATE_FORMAT(article.date, "%D %b %Y") AS date, auteur.nom, auteur.prenom
    FROM article
    JOIN auteur ON auteur.id = article.auteur_id';

  $rows = $dbh->query($query);
  $articles = $rows->fetchAll(PDO::FETCH_ASSOC);
  return $articles;
}


/**
 * Récupération des tags d'un article.
 *
 * @param PDO $dbh
 * @param INT $article_id
 *
 * @return mixed array ou FALSE
 */
function get_tags(PDO $dbh, $article_id){

  $query = "SELECT article_has_tag.article_id, tag.nom
  FROM article_has_tag
  JOIN tag ON tag.id = article_has_tag.tag_id
  WHERE article_has_tag.article_id = :article_id";

  $req = $dbh->prepare($query);
  $params = [
    'article_id' => $article_id
  ];
  //Éxecution de la requête.
  $req->execute($params);

  $tags = $req->fetchAll(PDO::FETCH_ASSOC);
  return $tags;
}

/**
 * Récupération des détails d'un seul article.
 *
 * @param PDO $dbh
 * @param INT $article_id
 *
 * @return mixed array or false
 */
function get_article(PDO $dbh, $article_id)
{
  $query = 'SELECT article.id, article.titre, article.corps,  DATE_FORMAT(article.date, "%Y-%m-%d") AS date
  FROM article
  WHERE id = :article_id';

  $req = $dbh->prepare($query);
  $params = [
    'article_id' => $article_id
  ];
  //Éxecution de la requête.
  $req->execute($params);

  $article = $req->fetch(PDO::FETCH_ASSOC);
  return $article;
}

/**
 * Récupération des données utilisateurs
 */
function get_users_id ($dbh, $pseudo) {

$request = $dbh->prepare("SELECT * FROM users
WHERE username = :username");
$request->execute(["username" => $pseudo]);
return $request->fetch();
}


function init_user_session($users) {
  $_SESSION["is_user"] = true;
  $_SESSION["username"] = $users["username"];
}