<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Model\ArticleModel;


class AdminDashboardController {
    
    function index()
    {
        $articleModel = new ArticleModel();
        $articles = $articleModel->getAllArticles();

        // Messages flash
        if (array_key_exists('flash', $_SESSION) && $_SESSION['flash']) {
            $flashMessage = $_SESSION['flash'];
            $_SESSION['flash'] = null;
        }



        // Affichage du template
        $template = 'dashboard';
        include TEMPLATE_DIR . '/admin/base_admin.phtml';
    }
}