<?php

namespace App\Controller;

use App\Model\ArticleModel;

class HomeController {

    public function index()
    {
        // Sélection des 3 derniers articles
        $articleModel = new ArticleModel();
        $articles = $articleModel->getLastArticles();
        $topArticles = $articleModel->get3LastArticles();

        // Messages flash
        if (array_key_exists('flash', $_SESSION) && $_SESSION['flash']) {
            $successMessage = $_SESSION['flash'];
            $_SESSION['flash'] = null;
        }

        // Affichage : inclusion du template
        $template = 'home';
        include TEMPLATE_DIR .'/base.phtml';
    }
}