<?php
require_once("include/pdo-connector.php");




/**
 * Création d'un article en base.
 *
 * @param array $params
 *
 * @return 
 */
function ajouter_logement($params)
{
  global $dbh;
  $query = 'INSERT INTO logement (titre, adresse, ville, cp, surface, prix, photo, type, description)
  VALUES (:titre, :adresse, :ville, :cp, :surface, :prix, :photo, :type, :description)';

  $req = $dbh->prepare($query);
  $result = $req->execute($params);
  return $result;
}



function get_logements()
{
  global $dbh;
  $query = 'SELECT *
  FROM logement';
  $req = $dbh->prepare($query);
  //Éxecution de la requête.
  $req->execute();

  $result = $req->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}


/**
 * Cette fonction permet de créer une image miniature à partir d'une image
 * @param string $image correspond à l'image de base
 * @param string $image_mini correspond au nom que l'on veut donner à l'image réduite
 */
function resize($image)
{
  $path_parts = pathinfo($image);
  $source = imagecreatefromjpeg($image);
  $destination = imagecreatetruecolor(300, 300);

  $largeur_source = imagesx($source);
  $hauteur_source = imagesy($source);
  $largeur_destination = imagesx($destination);
  $hauteur_destination = imagesy($destination);

  // On crée la miniature
  imagecopyresampled($destination, $source, 0, 0, 0, 0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);

  // On enregistre la miniature sous le nom
  imagejpeg($destination, "images/thumbnails/$path_parts[basename]");
}
