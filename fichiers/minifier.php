<?php

require_once('fonctions/minified-file.php');

// La CSS non minifiée.
$ma_css = 'css/styles.css';

// css minifiée.
$min_css = minified_this_file($ma_css);

//@TODO créer un fichier de style nommé styles.min.css dans le sous dossier
//'css'comportant la css minifiée

if ($min_css) {
    $handle = fopen('css/style.min.css', 'w') or die('Impossible de  créer: '.$mon_fichier);
    fwrite($handle, $min_css);
    fclose($handle);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
    <h1>Bonjour</h1>
</body>
</html>