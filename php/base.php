<?php session_start();
?>


<!DOCTYPE html>
<html lang="en">

<?php include("include/main.php");
?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <div class="container">
    <h1 class="display-1 text-center align-middle" style="color: <?php echo $_SESSION["couleur_titre"]; ?>">Bonjour !</h1>
    <h2 class="text-center"><?php echo $_SESSION["prenom"]; ?></h2>
    <p class="text-center">Nous sommes <?php echo $jour_de_la_semaine_fr; ?> et il est <?php echo $heure; ?>.</p>
  </div>

  <div class="container jumbotron">
    <form method="get">
      <div class="row justify-content-center">
        <div class="form-group col-6">
          <h3>Configuration</h3>
          <label for="prenom">Prénom</label>
          <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $prenom; ?>">

          <input type="color" id="color" name="couleur" value="<?php echo $couleur_titre; ?>">
          <label for="color">Couleur du titre</label>

          <div>

            <input type="date" name="new_date" value="<?php echo $new_date; ?>">
          </div>
          <input type="submit" class="btn btn-primary my-2" value="Submit">
        </div>
      </div>
    </form>
  </div>

  <h3 class="text-center display-4 pb-4">Informations cruciales</h3>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="card h-100">
        <div class="card-body">
          <h4 class="card-title">Choses à faire</h4>
          <ul>
            <?php foreach ($liste as $value) : ?>
              <li><?php echo $value; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card h-100">
        <div class="card-body">
          <h4 class="card-title">Bientôt le weekend?</h4>
          <div class="alert alert-warning" role="alert">
            <strong><?php echo $reponse; ?></strong>
          </div>
        </div>
            </div>
      </div>

      <div class="col-sm-4">
        <div class="card h-100">
        <div class="card-body">
          <h4 class="card-title">Quels sont mes cookies?</h4>
          
          <?php if (!empty($_COOKIE)) : ?>
          <dl>
            <?php foreach ($_COOKIE as $cookie_name => $cookie_value) : ?>
              <dt><?php echo $cookie_name; ?></dt>
              <dd><?php echo $cookie_value; ?></dd>
              <?php endforeach ?>
          </dl>
          <?php else : ?>
            <p>Aucun cookie</p>
            <?php endif ?>
        </div>
            </div>
      </div>

    </div>
  </div>

<footer class="container-fluid bg-dark">
  <form  method="post" action="include/contact.php">
    <p>
      <label class="text-white" for="email">Email</label><br>
      <input type="email" name="email" id="email">
    </p>
    <p>
      <label class="text-white" for="message">Message</label><br>
      <textarea name="message" id="message" cols="30" rows="5"></textarea>
    </p>
    <div>
      <button class="btn btn-primary" type="submit" value="submit">Envoyer</button>
    </div>
  </form>
</footer>

</body>

</html>
