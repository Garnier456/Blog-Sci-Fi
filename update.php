<?php
    require 'config.php';
    require 'functions.php';

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $getId = $_GET['id'];
        $recupUser = modifierArticle($getId);
        $titre = $recupUser['title'];
        $contenu = $recupUser['content'];
    } else {
        echo "erreur";
    }

    if (isset($_POST['valider'])) {
        $titre_saisie = $_POST['titre'];
        $contenu_saisie = $_POST['contenu'];
        updateArticle($titre_saisie, $contenu_saisie,  $getId);

        header('Location:admin.php');
    }
?>

