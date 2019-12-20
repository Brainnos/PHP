<?php require_once("pdo-handler.php"); ?>

<?php if (!empty($_SESSION["is_user"])) : ?>
    <?php echo '<a class="btn btn-success text-white" href="logout.php" type="button">Déconnexion <img style="width: 30px; height: 30px;" class="img-fluid" src="include/pngfuel.com.png" alt=""></a>'?>
<?php else :?>
    <?php echo '<a class="btn btn-primary text-white" href="login.php" type="button">Connexion <img style="width: 30px; height: 30px;" class="img-fluid" src="include/pngfuel.com.png" alt=""></a>'?>
<?php endif; ?>

