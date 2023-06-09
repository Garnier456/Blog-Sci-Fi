<?php

namespace App\Controller;

// Import de classes
use App\Model\ArticleModel;
use App\Model\CommentModel;
use App\Model\UserModel;

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
        
        $errors = [];
        
        // Instanciation des classes de modèles
        $articleModel = new ArticleModel();
        $commentModel = new CommentModel();
        
        // Traitement du formulaire d'ajout de commentaire
        if (!empty($_POST)) {

            // 1. Récupération des données du formulaire
            $nickname = $_POST['nickname'];
            $content = $_POST['content'];
            
            // 2. Validation des données
            $errors = $this->validateCommentForm($nickname, $content);
            
            // 3. Traitements des données 
            if(empty($errors)) {
                
                // Insertion des données
                $commentModel->addComment($nickname, $content, $idArticle);

                // message flash
                $_SESSION['flashbag'] = 'Votre commentaire a bien été ajouté';

                // Redirection vers la page Article
                header('Location: article?id=' . $idArticle);
                exit;

            }
        }
        
        // Récupération de l'article à afficher
        $article = $articleModel->getOneArticleById($idArticle);

        // Vérification de l'existance de l'article
        if (!$article) {
            http_response_code(404);
            echo 'Article introuvable (id ' . $idArticle . ')';
            exit; // Fin de l'exécution du script PHP
        }

         // Sélection des commentaires associés à l'article pour les afficher
         $comments = $commentModel->getCommentsByArticleId($idArticle);

        // Récupérer le message flash le cas échéant
        if (array_key_exists('flashbag', $_SESSION) && $_SESSION['flashbag']) {

            $flashMessage = $_SESSION['flashbag'];
            $_SESSION['flashbag'] = null;
        }

        $template = 'article';
        include '../templates/base.phtml';
    }

    public function saveArticle()
    {
        $userModel = new UserModel();

        $user = $_SESSION['user'];
        $idUser = $user->getIdUser();
        
        $idArticle = $_POST['id'];
        dump($idArticle );


        if ($userModel->checkSaveArticle($idUser, $idArticle)) {
            $userModel->insertSaveArticle($idUser, $idArticle);
          }
    }

    private function validateCommentForm(string $nickname, string $content)
    {
        $errors = [];

        if (!$nickname) {
            $errors['nickname'] = 'Le champ "pseudo" est obligatoire';
        }

        if (strlen($content) < 10) {
            $errors['content'] = 'Le commentaire doit comporter au moins 10 caractères';
        }

        return $errors;
    }
}
