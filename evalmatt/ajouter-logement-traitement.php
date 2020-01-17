<?php

require_once("include/function.php");

//Récupération des variables issues de $_POST.
$titre = filter_input(INPUT_POST, 'titre', FILTER_SANITIZE_STRING) ?? '';
$adresse = filter_input(INPUT_POST, 'adresse', FILTER_SANITIZE_STRING) ?? '';
$ville = filter_input(INPUT_POST, 'ville', FILTER_SANITIZE_STRING) ?? '';
$cp = filter_input(INPUT_POST, 'cp', FILTER_SANITIZE_STRING) ?? '';
$surface_string = filter_input(INPUT_POST, 'surface', FILTER_SANITIZE_STRING) ?? '';
$prix_string = filter_input(INPUT_POST, 'prix', FILTER_SANITIZE_STRING) ?? '';
$type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING) ?? '';
$description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING) ?? '';
if (!empty($_FILES['photo']['name'])) {
    $file_name = $_FILES['photo']['name'];
    $file_tmp = $_FILES['photo']['tmp_name'];
    $img_url = 'images/' . $file_name;
    move_uploaded_file($file_tmp, $img_url);
  } else {
    $img_url = '';
  }
  
// On convertit les strings reçu en post en int
$surface = intval($surface_string);
$prix = intval($prix_string);

//On créé un tableau avec ces variables.
$params = [
    'titre' => $titre,
    'adresse' => $adresse,
    'ville' => $ville,
    'cp' => $cp,
    'surface' => $surface,
    'prix' => $prix,
    'photo' => $img_url,
    'type' => $type,
    'description' => $description,
];


if (!empty($_POST)) {
    if (preg_match("#^[0-9]{5}$#", $cp)) {
        if (is_int($prix) && is_int($surface)) {
        $result = ajouter_logement($params);
        } else {
            echo "Le prix ou la surface ne sont pas des entiers";
        }
    } else {
        echo "Code Postal incorrect";
    }
}

header("Location: liste-logement.php");