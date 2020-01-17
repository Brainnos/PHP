<?php

/**
 * On définit le $dbh en variable globale afin de pouvoir y acceder
 * depuis toutes nos fonctions de requetes vers MySQL.
 * Cela évite d'avoir à le passer systématiquement en paramètre.
 */
global $dbh;


// Tentative de connexion à MySQL.
try {
  global $dbh;
  $dbh = new PDO("mysql:host=localhost;dbname=cafe;charset=utf8", "root", "", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
//Si erreur on affiche le message issu de l'exception et on arrête tout.
catch (PDOException $e) {
  print "Erreur !: " . $e->getMessage() . "<br/>";
  die();
}