<?php

//On inclus le fichier de connexion à la BDD.
require_once('db-connector.php');


/**
 * Récupération d'un nombre limité de villes.
 *
 * @return mixed array ou FALSE
 */
function get_cities($limit = 10)
{
  global $dbh_world;

  $query = 'SELECT city.ID, city.Name, city.Population FROM city
    LIMIT :debut, :fin';
  $offset = 0;
  $req = $dbh_world->prepare($query);
  $req->bindParam(':debut', $offset, PDO::PARAM_INT);
  $req->bindParam(':fin', $limit, PDO::PARAM_INT);
  $req->execute();
  return $req->fetchAll(PDO::FETCH_ASSOC);
}

function get_country($limit)
{
  global $dbh_world;

  $query = 'SELECT country.Name, country.Continent, country.Population FROM country ORDER BY population DESC
    LIMIT :debut, :fin';
  $offset = 0;
  $req = $dbh_world->prepare($query);
  $req->bindParam(':debut', $offset, PDO::PARAM_INT);
  $req->bindParam(':fin', $limit, PDO::PARAM_INT);
  $req->execute();
  return $req->fetchAll(PDO::FETCH_ASSOC);
}

function get_continent_pop($continents)
{
  global $dbh_world;

  $query = 'SELECT SUM(country.Population) as Population FROM country WHERE Continent = :Continent';
  $req = $dbh_world->prepare($query);
  $req->bindParam(":Continent", $continents);
  $req->execute();
  return $req->fetch(PDO::FETCH_ASSOC);
}



/**
 * Récupération d'un nombre limité d'articles.
 *
 * @return mixed array ou FALSE
 */
function get_articles($limit)
{
  global $dbh_blog;

  $offset = 0;

  $query = 'SELECT article.id, article.titre, article.corps,  DATE_FORMAT(article.date, "%D %b %Y") AS date
    FROM article
    LIMIT :debut, :fin';

  $req = $dbh_blog->prepare($query);
  $req->bindParam(':debut', $offset, PDO::PARAM_INT);
  $req->bindParam(':fin', $limit, PDO::PARAM_INT);
  $req->execute();
  return $req->fetchAll(PDO::FETCH_ASSOC);
}
