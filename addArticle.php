<?php

session_start();

require 'config.php';
require 'functions.php';

if (isset($_POST['envoi'])) {
    // Vérifier que tous les champs ont été remplis
    if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_POST['intro']) && !empty($_POST['category'])) {
        // Ajouter le nouvel article à la base de données
        $title = $_POST['title'];
        $intro = $_POST['intro'];
        $content = $_POST['content'];
        $category = ($_POST['category']);
        $user_id = $_SESSION['user_id'];

        // Récupérer le nom du fichier uploadé et le déplacer vers le dossier d'upload
        if(isset($_FILES['inputImage']))
{ 
        $folder = 'images/';
        $file = $_FILES['inputImage']['name'];
        $imagePath =  $folder . $file;
        
        if(move_uploaded_file($_FILES['inputImage']['tmp_name'], $imagesFile . $file)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
        {
          echo 'Upload effectué avec succès !';
          $addArticle = insertArticle($title, $content, $intro, $imagePath, $category, $user_id);
        }
        else //Sinon (la fonction renvoie FALSE).
        {
          echo 'Echec de l\'upload !';
        }
}
        // Rediriger vers la page d'administration
        header("Location: admin.php");
        exit();
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}

