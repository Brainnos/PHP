<?php
require_once('include/pdo-handler.php');

?>


<!DOCTYPE html>
<html lang="en">

<?php
$titre_page = 'Liste des articles';
include('include/head.php');
?>

<body>

  <h1 class="display-1 py-5 my-5 text-center text-secondary">Articles</h1>

  <div class="container mb-5">
    <div class="row">
        <div class="col-6">
        <?php if (!empty($_SESSION["is_user"])) : ?>
          <a href="form-create-article.php" class="btn btn-primary w-25" type="button">Créer un article</a>
          <?php endif; ?>
        </div>
      <div class="col-6 text-right"><?php require_once("include/bouton.php"); ?>
      </div>
    </div>
  </div>

  <div class="container">
    <?php foreach ($articles as $article) : ?>
      <article class="shadow rounded border p-4 mb-5">
        <h2 class="text-primary text-uppercase"><?php echo $article['titre']; ?></h2>

        <?php $tags = get_tags($dbh, $article['id']); ?>

        <?php foreach ($tags as $tag) : ?>
          <span class="badge badge-primary"><?php echo $tag['nom']; ?></span>
        <?php endforeach ?>


        <p class="text-justify">
          <?php echo $article['corps']; ?>
        </p>
        <hr>
        <footer class="d-flex justify-content-between align-items-center">
          <a href="article-edit.php?id=<?php echo $article['id']; ?>" class="btn btn-outline-primary"><i class="fa fa-pencil pr-2" aria-hidden="true"></i> Éditer</a>
          <form method="post" action="delete-article.php">
            <input type="hidden" name="id" value=" <?php echo $article["id"] ?>">
            <?php if (!empty($_SESSION["is_user"])) : ?>
              <input type="submit" class="btn btn-outline-danger" value="Supprimer">
            <?php endif; ?>
          </form>
          <div class="d-flex">
            <h6 class="text-muted pr-4"><i class="fa fa-user pr-2" aria-hidden="true"></i><?php echo $article['prenom'] . ' ' . $article['nom']; ?></h6>
            <h6 class="text-muted"><i class="fa fa-calendar pr-2" aria-hidden="true"></i><?php echo $article['date']; ?></h6>
          </div>
        </footer>
      </article>
    <?php endforeach; ?>

  </div>

  <?php include('include/footer.php'); ?>
</body>

</html>