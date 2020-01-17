<?php
require_once("include/function.php");

$logements = get_logements();
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des logements</title>

    <!-- Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>

    <h1 class="text-center display-2 text-primary my-5">Liste des logements</h1>

    <table class="table">
        <?php foreach ($logements as $logement) : ?>

            <thead>
                <tr>
                    <!---- On récupère les clés du tableau logement pour les affichers une par une ---->
                    <?php foreach (array_keys($logement) as $keys) : ?>
                        <th scope="col"><?= $keys; ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- On affiche les données de chaque logement -->
                    <th><?= $logement["id_logement"] ?></th>
                    <td><?= $logement["titre"] ?></td>
                    <td><?= $logement["adresse"] ?></td>
                    <td><?= $logement["ville"] ?></td>
                    <td><?= $logement["cp"] ?></td>
                    <td><?= $logement["surface"] ?></td>
                    <td><?= $logement["prix"] ?></td>
                    <?php
                    // Resize de l'image
                    if(!empty($logement["photo"])){
                        resize($logement["photo"]);

                    }
                    $path_part = pathinfo($logement["photo"])
                    ?>
                    <td><img src="<?= "images/thumbnails/$path_part[basename]" ?>" alt=""></td>
                    <td><?= $logement["type"] ?></td>
                    <td><?php $liste = strlen($logement["description"]) > 50 ? substr($logement["description"], 0, 50) . "..." : $logement["description"];
                        echo $liste;
                        ?></td>
                </tr>
            </tbody>
        <?php endforeach; ?>
    </table>

</body>

</html>