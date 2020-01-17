<?php

require_once("include/functions.php");

// Récupération d'un ID d'article transmis par URL.
$article_id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT) ?? 0;

// Récupération de l'article en fonction de l'id issu du paramètre.
$article = get_article($article_id);
if (!$article) {
    http_response_code(404);
    include("erreur_404.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="fr">
<?php
$titre_page = 'Article';
require("include/head.php"); ?>


<body>

    <h1 class="display-1 py-5 my-5 text-center text-secondary">Article</h1>

    <?php require_once('include/admin-panel.php'); ?>

    <div class="container">
        <article class="shadow rounded border p-4 mb-5">
                    <img src="<?php echo "images/protected/" . get_img_src($article["img_url"]); ?>" class="img-fluid" alt="" srcset="">

                    <h2 class="text-primary text-uppercase"><a href="<?php echo 'article.php?id=' . $article['id']; ?>"><?php echo $article['titre']; ?></a></h2>
                    <?php $tags = get_tags($article_id); ?>
                    <?php foreach ($tags as $tag) : ?>
                        <span class="badge badge-primary"><?php echo $tag['nom']; ?></span>
                    <?php endforeach ?>
                    <p class="text-justify">
                        <?php
                        url_clic($article['corps']);
                        ?>
                    </p>
                    <hr>
            <footer class="d-flex justify-content-end">
                    <h6 class="text-muted pr-4"><i class="fa fa-user pr-2" aria-hidden="true"></i><?php echo $article['prenom'] . ' ' . $article['nom']; ?></h6>
                    <h6 class="text-muted"><i class="fa fa-calendar pr-2" aria-hidden="true"></i><?php echo $article['date']; ?></h6>
            </footer>

        </article>
    </div>
    <?php include('include/footer.php'); ?>

</body>


</html>