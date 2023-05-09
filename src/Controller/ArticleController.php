<?php

namespace App\Controller;

// Import de classes
use App\Model\ArticleModel;
use App\Model\CommentModel;

class ArticleController
{

    public function index()
    {

        // Validation du paramètre id de l'URL
        if (!array_key_exists('id', $_GET) || !$_GET['id'] || !ctype_digit($_GET['id'])) {
            http_response_code(404);
            echo 'Article introuvable';
            exit; // Fin de l'exécution du script PHP
        }

        // Récupération du paramètre id de l'URL
        $idArticle = (int) $_GET['id'];
        var_dump($idArticle);

        // $errors = [];

        // Instanciation des classes de modèles
        $articleModel = new ArticleModel();
        // $commentModel = new CommentModel();

        // Récupération de l'article à afficher
        $article = $articleModel->getOneArticle($idArticle);

        // Vérification de l'existance de l'article
        if (!$article) {
            http_response_code(404);
            echo 'Article introuvable (id ' . $idArticle . ')';
            exit; // Fin de l'exécution du script PHP
        }

        // Récupérer le message flash le cas échéant
        if (array_key_exists('flashbag', $_SESSION) && $_SESSION['flashbag']) {

            $flashMessage = $_SESSION['flashbag'];
            $_SESSION['flashbag'] = null;
        }

        $template = 'article';
        include '../templates/base.phtml';
    }
}
