<?php 
require_once("include/pdo-handler.php");
$pseudo = filter_input(INPUT_POST, "pseudo", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
$erreur_msg = FALSE;


if ($pseudo && $password) {
    if ($users = get_users_id($dbh, $pseudo)) {
        if (password_verify($password, $users["password"])) {
            init_user_session($users);
            header("Location: article-list.php");
        } else {
            $erreur_msg = 'Mot de passe incorrect';
        }
    } else {
        $erreur_msg = "Pseudo incorrect";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<?php require_once('include/head.php'); ?>


<body>
    <h1 class="display-1 py-5 my-5 text-center text-secondary">Connexion</h1>

    <form class="shadow p-5 my-5 rounded border w-25 mx-auto" method="post">

        <?php if ($erreur_msg) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo $erreur_msg; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input class="form-control" type="text" name="pseudo" id="pseudo">
        </div>

        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>

        <div class="text-center"><input class="btn btn-primary" type="submit" value="Connexion"></div>
    </form>



</body>

</html>