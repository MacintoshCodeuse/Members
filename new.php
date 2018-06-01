<?php
require_once 'model/Database.php';
require_once 'model/Member.php';
require_once 'identifiants.php';

// Initialisation validation POST
$isPost = false;
// Initialisation insertion réussie
$isInsert = false;

// Validation POST
if(!empty($_POST)) :

    $isPost = true;

    // Réupération de valeurs POST
    $username        = $_POST['username'];
    $password       = $_POST['password'];
    $mail     = $_POST['mail'];

    $db = new database($db_name, $db_host, $db_user, $db_pass);
    // Requête SQL : insère un nouveau film (titre, acteurs, réalisateur, producteur, année de production, langue, catégorie, synopsis, lien vers la video)
    $statement = '
    INSERT INTO members(username, password, mail)
    VALUES(:username, :password, :mail);
    ';
    $attributs = array(
        'username'     => $username,
        'password' => $password,
        'mail'   => $mail
        );
    $member = $db->execute($statement, $attributs);
    header('Location: index.php');

// Validation POST
endif;
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>nouveau membres</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap MD CSS -->
        <link href ="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
        <!--Utilisation CSS local!-->
        <link href="css/styles.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <header>
            <h1>Nouveau membre</h1>
            <a href="index.php" class="btn btn-default btn-sm">Retour</a>
        </header>

        <main>
            <section>

            <form id="form" action="" method ="post" >
                <!-- Pseudo -->
                <div class="form-group mt-2">
                    <label for="username" class="mt-2">Pseudo</label>
                    <input id="username" class="form-control" type="text" name="username">
                    <p class="comments" style="color: red;"></p>
                </div>
                <!-- Password -->
                <div id="password" class="form-group mt-2">
                    <label for="password" class="mt-2">Mot de passe</label>
                    <input id="password" class="form-control" type="password" name="password">
                    <p class="comments" style="color: red;"></p>
                </div>
                <!-- Email -->
                <div class="form-group mt-2">
                    <label for="mail" class="mt-2">Email</label>
                    <input id="mail" class="form-control" type="text" name="mail">
                    <p class="comments" style="color: red;"></p>
                </div>

                <!-- Valider -->
                <input type="submit" value="valider" class="btn btn-deep-orange btn-sm mt-5">

                </form>
            </section>
        </main>

        <!-- SCRIPTS-->
        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!-- Bootstrap MD JS -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>

    </body>
</html>
