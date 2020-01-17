<?php require_once("include/function.php");
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un logement</title>

    <!-- Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>


<body>

    <h1 class="text-center display-2 text-primary my-5">Ajouter un logement</h1>

    <div class="container">
        <form class="border rounded shadow my-5 p-5" enctype="multipart/form-data" action="ajouter-logement-traitement.php" method="POST">

            <div class="form-group">
                <label for="titre">Titre</label>
                <input class="form-control" type="text" name="titre" id="titre" required>
            </div>

            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input class="form-control" type="text" name="adresse" id="adresse" required>
            </div>

            <div class="form-group">
                <label for="ville">Ville</label>
                <input class="form-control" type="text" name="ville" id="ville" required>
            </div>

            <div class="form-group">
                <label for="cp">Code postal</label>
                <input class="form-control" type="number" name="cp" id="cp" maxlength="5" required>
            </div>

            <div class="form-group">
                <label for="surface">Surface</label>
                <input class="form-control" type="number" name="surface" id="surface" required>
            </div>

            <div class="form-group">
                <label for="prix">Prix</label>
                <input class="form-control" type="number" name="prix" id="prix" required>
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="30000">
                <input class="form-control" type="file" name="photo" id="photo" accept="image/png, image/jpeg">
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" name="type" required>
                    <option value="location">Location</option>
                    <option value="vente">Vente</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            </div>

            <button class="btn btn-primary" role="submit">Ajouter</button>

        </form> <!-- Fin du form -->
    </div> <!-- Fin du container -->
</body>

</html>