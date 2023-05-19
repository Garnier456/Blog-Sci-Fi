<?php

namespace App\Controller;

use App\Model\ArticleModel;
use App\Model\CategoryModel;

class CategoryController
{
  
  public function index()
  {
      $idCategory = $_GET['id'];
      // Instanciation des classes de modèles
      $articleModel = new ArticleModel();
      $categoryModel = new CategoryModel();
  
      // Récupération de la catégorie par son identifiant
      $category = $categoryModel->getCategoryById($idCategory);
  
      // Vérification de l'existence de la catégorie
      if (!$category) {
          http_response_code(404);
          echo 'Catégorie introuvable (id ' . $idCategory . ')';
          exit; // Fin de l'exécution du script PHP
      }
  
      // Récupération des articles de la catégorie
      $articles = $articleModel->getArticlesByCategory($idCategory);
  
      // Affichage des articles
      foreach ($articles as $article) {
          echo 'Titre : ' . $article->getTitle() . '<br>';
          echo 'Contenu : ' . $article->getContent() . '<br>';
          // Autres données de l'article à afficher
          echo '<br>';
      }
  }
}