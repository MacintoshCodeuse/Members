<?php
// Définit une valeur REQUEST page pour récupérer une page
require_once 'controler/UserControler.php';

$controler = new UserControler();

if(empty($_REQUEST["page"])){
    $page = "home";
} else {
    $page = $_REQUEST["page"];
}

$controler->$page();
?>
