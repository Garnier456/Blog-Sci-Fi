<?php

namespace App\Controller\Admin;

use App\Entity\Article;
use App\Model\ArticleModel;
use App\Model\CategoryModel;

class AdminArticleController {

    public function new()
    {
        // Initialisations
        $errors = [];
        $title = '';
        $summary = '';
        $content = '';
        $categoryId = null;
        $user = $_SESSION['user'];

        $categoryModel = new CategoryModel();

        if (!empty($_POST)) {

            $title = trim(strip_tags($_POST['title']));
            $summary = trim(strip_tags($_POST['summary']));
            $content = trim(strip_tags($_POST['content']));
            $categoryId = (int) $_POST['category'];

            if (!$title) {
                $errors['title'] = 'Le champ "titre" est obligatoire';
            }

            if (!$summary) {
                $errors['summary'] = 'Le champ "résumé" est obligatoire';
            }

            if (!$content) {
                $errors['content'] = 'Le champ "contenu" est obligatoire';
            }

            // Validation de l'image si un fichier a été uploadé
            if (array_key_exists('image', $_FILES) && $_FILES['image']['error'] != UPLOAD_ERR_NO_FILE) {

                // Validation du poids du fichier
                $filesize = filesize($_FILES['image']['tmp_name']);
                if ($filesize > MAX_UPLOAD_SIZE) {
                    $errors['image'] = 'Votre fichier excède 1 Mo.';
                }

                // Validation du type de fichier
                $allowedMimeTypes = ['image/jpeg', 'image/gif', 'image/png'];
                $mimeType = mime_content_type($_FILES['image']['tmp_name']);

                if (!in_array($mimeType, $allowedMimeTypes)) {
                    $errors['image'] = 'Type de fichier non autorisé';
                }
            }

            if (empty($errors)) {

                $filename = '';

                if (array_key_exists('image', $_FILES) && $_FILES['image']['error'] != UPLOAD_ERR_NO_FILE) {

                    // Nettoyer le nom du fichier
                    $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                    $basename = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);

                    // Slugification du nom du fichier (on supprime caractères spéciaux, accents, majuscules, espaces, etc)
                    $basename = slugify($basename);

                    // On ajoute une chaîne aléatoire pour éviter les conflits
                    $filename = $basename .sha1(uniqid(rand(),true)) . '.' . $extension;

                    // Copier le fichier temporaire dans notre dossier "images"
                    if (!file_exists('images')) {
                        mkdir('images');
                    }

                    move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$filename);
                }

                $article = new Article([
                    'title' => $title,
                    'summary' => $summary,
                    'content' => $content,
                    'user' => $user,
                    'category' => $categoryModel->getCategoryById($categoryId),
                    'image' => $filename
                ]);


                $articleModel = new ArticleModel();
                $articleModel->addArticle($article);

                // Ajout d'un message flash en session
                $_SESSION['flash'] = 'Article créé avec succès.';

                // Redirection
                header('Location: ' . constructUrl('admin_dashboard'));
                exit;
            }
        }

        // Sélection des catégories
        $categories = $categoryModel->getAllCategories();

        // Affichage du template
        $template = 'article_new';
        include TEMPLATE_DIR . '/admin/base_admin.phtml';
    }

    public function edit()
    {
        // Initialisations
        $errors = [];
        $title = '';
        $summary = '';
        $content = '';
        $categoryId = null;
        $user = $_SESSION['user'];

        $categoryModel = new CategoryModel();

        if (!empty($_POST)) {

            $title = trim(strip_tags($_POST['title']));
            $summary = trim(strip_tags($_POST['summary']));
            $content = trim(strip_tags($_POST['content']));
            $categoryId = (int) $_POST['category'];

            if (!$title) {
                $errors['title'] = 'Le champ "titre" est obligatoire';
            }

            if (!$summary) {
                $errors['summary'] = 'Le champ "résumé" est obligatoire';
            }

            if (!$content) {
                $errors['content'] = 'Le champ "contenu" est obligatoire';
            }

            // Validation de l'image si un fichier a été uploadé
            if (array_key_exists('image', $_FILES) && $_FILES['image']['error'] != UPLOAD_ERR_NO_FILE) {

                // Validation du poids du fichier
                $filesize = filesize($_FILES['image']['tmp_name']);
                if ($filesize > MAX_UPLOAD_SIZE) {
                    $errors['image'] = 'Votre fichier excède 1 Mo.';
                }

                // Validation du type de fichier
                $allowedMimeTypes = ['image/jpeg', 'image/gif', 'image/png'];
                $mimeType = mime_content_type($_FILES['image']['tmp_name']);

                if (!in_array($mimeType, $allowedMimeTypes)) {
                    $errors['image'] = 'Type de fichier non autorisé';
                }
            }

            if (empty($errors)) {

                $filename = '';

                if (array_key_exists('image', $_FILES) && $_FILES['image']['error'] != UPLOAD_ERR_NO_FILE) {

                    // Nettoyer le nom du fichier
                    $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                    $basename = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);

                    // Slugification du nom du fichier (on supprime caractères spéciaux, accents, majuscules, espaces, etc)
                    $basename = slugify($basename);

                    // On ajoute une chaîne aléatoire pour éviter les conflits
                    $filename = $basename .sha1(uniqid(rand(),true)) . '.' . $extension;

                    // Copier le fichier temporaire dans notre dossier "images"
                    if (!file_exists('images')) {
                        mkdir('images');
                    }

                    move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$filename);
                }

                $article = new Article([
                    'title' => $title,
                    'summary' => $summary,
                    'content' => $content,
                    'user' => $user,
                    'category' => $categoryModel->getCategoryById($categoryId),
                    'image' => $filename
                ]);


                $articleModel = new ArticleModel();
                $articleModel->updateArticle($article);

                // Ajout d'un message flash en session
                $_SESSION['flash'] = 'Article modifié avec succès.';

                // Redirection
                header('Location: ' . constructUrl('admin_dashboard'));
                exit;
            }
        }

        // Sélection des catégories
        $categories = $categoryModel->getAllCategories();

        // Affichage du template
        $template = 'article_edit';
        include TEMPLATE_DIR . '/admin/base_admin.phtml';
    }
    
    public function delete()
{
    if (!empty($_POST['id'])) {
        $articleId = (int)$_POST['id'];

        $articleModel = new ArticleModel();
        $article = $articleModel->getOneArticle($articleId);

        if ($article) {
            $articleModel->deleteArticle($articleId);

            // Ajout d'un message flash en session
            $_SESSION['flash'] = 'Article supprimé avec succès.';
        }
    }

    // Redirection
    header('Location: ' . constructUrl('admin_dashboard'));
    exit;
}
    
}