<?php
require_once 'model/Database.php';
require_once 'model/Member.php';
require_once 'identifiants.php';

$db = new database($db_name, $db_host, $db_user, $db_pass);
$statement = 'SELECT * from members';
$class = 'Member';
$members = $db->query($statement, $class);


?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>site</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap MD CSS -->
        <link href ="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">
        <!--Utilisation CSS local!-->
        <link href="css/styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-lg navbar-dark mdb-color">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="view.php">Voir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="new.php">Nouveau membre</a>
                    </li>
                </ul>
            </nav>
        </header>

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
