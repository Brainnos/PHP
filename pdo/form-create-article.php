<?php
include('include/pdo-handler.php');
?>
<?php if (empty($_SESSION["is_user"])) : ?>
  <?php header("Location: login.php") ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<?php
$titre_page = "Création d'un article";
include('include/head.php');
?>

<body>

  <h1 class="display-1 py-5 my-5 text-center text-secondary">Création d'un article</h1>

  <div class="container text-right"><?php require_once("include/bouton.php"); ?></div>


  <!-- Si la variable $article n'est pas considerée comme vide, on affiche le formulaire. -->
    <div class="container py-5 mb-5">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="article-list.php">Liste</a></li>
          <li class="breadcrumb-item active" aria-current="page">Édition</li>
        </ol>
      </nav>

      <?php
      function get_auteur($dbh) {
      $requete_auteur = $dbh->query("SELECT auteur.id, auteur.nom, auteur.prenom FROM auteur");
      $auteur = $requete_auteur->fetchALL();
      return $auteur;
      }
      $list_auteur = get_auteur($dbh);

      ?>

      <form action="article-create.php" enctype="multipart/form-data" method="post" class="shadow p-5 my-5 rounded border w-50 mx-auto">

        <div class="form-group">
          <label for="titre">Titre</label>
          <input type="text" class="form-control" id="titre" name="titre">
          <small class="form-text text-muted">Titre de l'article</small>
        </div>

        <div class="form-group">
          <label for="corps">Contenu</label>
          <textarea class="form-control" id="corps" name="corps" rows="3"></textarea>
          <small class="form-text text-muted">Contenu de l'article</small>
        </div>

        <!-- <div class="form-group">
          <label for="tag">Tag</label>
          <input type="text" class="form-control" id="tag" name="tag">
          <small class="form-text text-muted">Tags de l'article</small>
        </div> <-->

        <div class="form-group">
          <label for="auteur_id">Auteur</label>
          <select class="form-control" name="auteur_id" id="auteur_id">
            <?php foreach ($list_auteur as $auteur) : ?>
            <option value="<?php echo $auteur["id"]?>"><?php echo $auteur["nom"] . " " . $auteur["prenom"]; ?></option>
            <?php endforeach; ?>
          </select>
          <small class="form-text text-muted">Auteur de l'article</small>
        </div>

        <div class="form-group">
          <label for="corps">Date de création</label>
          <input type="date" class="form-control" id="date" name="date">
          <small class="form-text text-muted">Contenu de l'article</small>
        </div>

        <label for="userfile">Envoyez un fichier</label>
        <input name="userfile" type="file">

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


    </div>
<!-- fin du if/else -->

  <?php include('include/footer.php'); ?>
</body>

</html>
