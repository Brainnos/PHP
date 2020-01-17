<?php

$source = imagecreatefromjpeg("images/cofee.jpg");
$destination = imagecreatetruecolor(200, 150);

$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);
$largeur_destination = imagesx($destination);
$hauteur_destination = imagesy($destination);

// On crée la miniature
imagecopyresampled($destination, $source,0,0,0,0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);

// On enregistre la miniature sous le nom
imagejpeg($destination, "images/thumbnails/cofee-mini.jpg");