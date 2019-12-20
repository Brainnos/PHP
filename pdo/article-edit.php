<?php

include('include/pdo-handler.php');

// Récupération d'un ID d'article transmis par URL.
$article_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT) ?? 0;

// Récupération de l'article en fonction de l'id issu du paramètre.
$article = get_article($dbh, $article_id);
?>

<?php if (empty($_SESSION["is_user"])) : ?>
  <?php header("Location: login.php") ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<?php
$titre_page = "Édition d'un article";
include('include/head.php');
?>

<body>

  <h1 class="display-1 py-5 my-5 text-center text-secondary">Édition d'un article</h1>

  <div class="container text-right"><?php require_once("include/bouton.php"); ?></div>
  <!-- Si la variable $article n'est pas considerée comme vide, on affiche le formulaire. -->
  <?php if ($article) : ?>
    <div class="container py-5 mb-5">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="article-list.php">Liste</a></li>
          <li class="breadcrumb-item active" aria-current="page">Édition</li>
        </ol>
      </nav>
      <form action="post-article.php" method="post" class="shadow p-5 my-5 rounded border w-50 mx-auto">

        <div class="alert alert-warning" role="alert">
          Vous vous apprêtez à modifier l'article <strong><?php echo $article['titre']; ?></strong>.
        </div>

        <div class="form-group">
          <input id="id" class="form-control" type="hidden" name="id" value="<?php echo $article["id"]; ?>">
        </div>

        <div class="form-group">
          <label for="titre">Titre</label>
          <input type="text" class="form-control" id="titre" name="titre" value="<?php echo $article['titre']; ?>">
          <small class="form-text text-muted">Titre de l'article</small>
        </div>

        <div class="form-group">
          <label for="corps">Contenu</label>
          <textarea class="form-control" id="corps" name="corps" rows="3"><?php echo $article['corps']; ?></textarea>
          <small class="form-text text-muted">Contenu de l'article</small>
        </div>

        <div class="form-group">
          <label for="corps">Date de création</label>
          <input type="date" class="form-control" id="date" name="date" value="<?php echo $article['date'];  ?>">
          <small class="form-text text-muted">Contenu de l'article</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


    </div>
    <!-- Sinon on affiche un message d'erreur. -->
  <?php else : ?>
    <div class="container py-5 mb-5">
      <h2 class="display-1 text-center text-uppercase text-danger">☠️<br>Erreur</h2>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <strong>Hola malheureux!</strong> L'article indiqué n'existe pas.
      </div>
    </div>
<!-- fin du if/else -->
  <?php endif; ?>

  <?php include('include/footer.php'); ?>
</body>

</html>
