<?php
require_once 'model/Database.php';
require_once 'model/Member.php';
require_once 'identifiants.php';

// Requête SQL : récupère la liste des membres sous forme d'objets
$db = new database($db_name, $db_host, $db_user, $db_pass);
$statement = 'SELECT * from members';
$class = 'Member';
$members = $db->query($statement, $class);

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>membres</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap MD CSS -->
        <link href ="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
        <!--Utilisation CSS local!-->
        <link href="css/styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <header>
            <h1>Membres</h1>
            <a href="index.php" class="btn btn-default btn-sm">Retour</a>
        </header>

        <section>

            <table class="table table-bordered table-hover table-sm">

                <!-- Table head -->
                <thead class="mdb-color darken-3">
                    <tr class="text-white">
                        <th>Nom</th>
                        <th>Mot de passe</th>
                        <th>Email</th>
                    </tr>
                <!-- Table head -->
                </thead>

                <!-- Table body -->
                <tbody>

                    <?php
                    foreach($members as $member) :
                    ?>

                    <tr>
                        <td><?= $member->getUserName(); ?></td>
                        <td><?= $member->getPassword(); ?></td>
                        <td><?= $member->getMail(); ?></td>
                    </tr>

                    <?php endforeach; ?>

                <!-- Table body -->
                </tbody>
            <!-- Table -->
            </table>
        </section>

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
