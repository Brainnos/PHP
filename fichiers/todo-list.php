<?php

$mon_fichier = 'fichier.txt';

// Récupération de la tache du form en main.php

$data = filter_input(INPUT_POST, "tache",FILTER_SANITIZE_STRING ).PHP_EOL;
if ($data) {
    $handle = fopen($mon_fichier, 'r+');
    fwrite($handle, $data);
    fclose($handle);
}

$handle = fopen($mon_fichier, 'r');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
    <div class="jumbotron">
        <h1 class="display-4">To do list</h1>
                    <ul>
                            <?php while($line = fgets($handle))
                             {
                                 echo "<li>$line</li>";
                             };
                                ?>
                    </ul>
    </div>
</body>
</html>