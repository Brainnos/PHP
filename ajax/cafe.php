<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cafetière Ajax</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="js/ajax.js"></script>
    <script type="text/javascript" src="js/cafe.js"></script>
    <script type="text/javascript" src="js/texte-utils.js"></script>
</head>


<body>

    <h1 class="text-center my-5">Cafetière Ajax</h1>

    <div class="container py-4">
        <div class="row">
            <div class="card col" style="width: 18rem;">
                <img id="img-cafetiere1" src="images/cafetiere1.jpeg" class="card-img-top" alt="Une image de cafetière">
                <div class="card-body">
                    <h2 class="card-title">Cafetière N°1</h2>
                    <p class="card-text" id="status-cafetiere1">Inactive</p>
                </div>
            </div>

            <form class="col d-flex flex-column justify-content-between p-4" action="" method="GET">
                <h3>Commandez votre café ici :</h3>

                <div>
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom">
                </div>

                <div>
                    <label for="taille">Taille :</label>

                    <input type="radio" name="taille" id="petit" value="petit">
                    <label for="petit">Petit</label>

                    <input type="radio" name="taille" id="moyen" value="moyen">
                    <label for="moyen">Moyen</label>

                    <input type="radio" name="taille" id="grand" value="grand">
                    <label for="grand">Grand</label>
                </div>

                <div>
                    <label for="boisson">Boisson :</label>

                    <input type="radio" name="boisson" id="noir" value="noir">
                    <label for="noir">Noir</label>

                    <input type="radio" name="boisson" id="creme" value="creme">
                    <label for="creme">Crème</label>

                    <input type="radio" name="boisson" id="cappucino" value="cappucino">
                    <label for="cappucino">Cappucino</label>
                </div>

                <div><input class="btn btn-primary" onClick="commanderCafe();" value="Commander"></div>
            </form>

            <div class="card col" style="width: 18rem;">
                <img id="img-cafetiere2" src="images/cafetiere2.jpeg" class="card-img-top w-75" alt="Une image de cafetière">
                <div class="card-body">
                    <h2 class="card-title">Cafetière N°2</h2>
                    <p class="card-text" id="status-cafetiere2">Inactive</p>
                </div>
            </div>
        </div>

    </div>

</body>

</html>