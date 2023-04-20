<?php
    require 'config.php';
    require 'functions.php';

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $getId = $_GET['id'];
        $recupUser = suppArticle($getId);
    } else {
        echo "erreur";
    }
?>