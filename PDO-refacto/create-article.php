<?php

require_once('include/functions.php');
//require_once('include/image_handler.php');

$titre = filter_input(INPUT_POST, 'titre', FILTER_SANITIZE_STRING) ?? 'Article sans titre';
$corps = filter_input(INPUT_POST, 'corps', FILTER_SANITIZE_STRING) ?? ' -- ';
$date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING) ?? '';
$auteur = filter_input(INPUT_POST, 'auteur_id', FILTER_SANITIZE_NUMBER_INT) ?? '';
$file_tmp = $_FILES["image"]["tmp_name"];
$file_name = $_FILES["image"]["name"];
$img_url = 'images/'.$file_name;

if (isset($_FILES["image"])) {
  move_uploaded_file($file_tmp, "images/" . $file_name);
}


//On créé un tableau avec ces variables.
$params = [
  'titre' => $titre,
  'corps' => $corps,
  'date' => $date,
  'auteur_id' => $auteur,
  'img_url' => $img_url
];

//Execution de la requête de mise à jour.
$result = create_article($params);
if ($result) {
  $redirect_url = 'article-list.php?id=' . $params['id'] . '&valid=1';
} else {
  $redirect_url = 'article-list.php?id=' . $params['id'] . '&valid=0';
}
header("Location: $redirect_url");
