<?php

namespace App\Model;

use App\Core\AbstractModel;
use App\Core\Database;
use App\Entity\Article;
use App\Entity\Category;
use App\Entity\User;

class ArticleModel extends AbstractModel
{

  function getAllArticles()
  {
      $sql = 'SELECT * 
              FROM article AS A
              INNER JOIN user AS U
              ON A.userId = U.idUser
              INNER JOIN category AS C 
              ON A.categoryId = C.idCategory 
              ORDER BY createdAt DESC';
  
      $results = $this->db->getAllResults($sql);
  
      $articles = [];
      foreach ($results as $result) {
          $result['user'] = new User($result);
          $result['category'] = new Category($result);
          $articles[] = new Article($result);
      }
  
      return $articles;
  } 
  
  function getOneArticleById(int $idArticle)
{
  $sql = "SELECT A.*, U.*, C.*
    FROM article AS A
    INNER JOIN user AS U
    ON A.userId = U.idUser
    INNER JOIN category AS C 
    ON A.categoryId = C.idCategory
    WHERE idArticle = ?";

  $result = $this->db->getOneResult($sql, [$idArticle]);

  if (!$result) {
    return null;
  }

  $user = new User($result); // Instancie la classe User avec les données de l'utilisateur
  $category = new Category($result); // Instancie la classe Category avec les données de la catégorie

  $articleData = [
    'idArticle' => $result['idArticle'],
    'title' => $result['title'],
    'summary' => $result['summary'],
    'image' => $result['image'],
    'createdAt' => $result['createdAt'],
    'content' => $result['content'],
    'user' => $user, // Ajoute l'objet User à l'array des données de l'article
    'category' => $category, // Ajoute l'objet Category à l'array des données de l'article
  ];

  return new Article($articleData); // Instancie la classe Article avec les données de l'article
}

public function getArticlesByCategory($categoryId)
{
    $sql = 'SELECT A.*, U.*, C.*
            FROM article AS A
            INNER JOIN user AS U
            ON A.userId = U.idUser
            INNER JOIN category AS C 
            ON A.categoryId = C.idCategory 
            WHERE A.categoryId = ? 
            ORDER BY A.createdAt DESC';

    $results = $this->db->getAllResults($sql, [$categoryId]);

    $articles = [];
    foreach ($results as $result) {
        $result['user'] = new User($result);
        $result['category'] = new Category($result);
        $articles[] = new Article($result);
    }

    return $articles;
}

  function getLastArticles()
  {

    $sql = $sql = 'SELECT *
    FROM article AS A
    INNER JOIN category AS C
    ON A.categoryId = C.idCategory
    INNER JOIN user AS U
    ON A.userId = U.idUser
    ORDER BY createdAt DESC
    LIMIT 10';


    $results = $this->db->getAllResults($sql);

    $articles = [];
    foreach ($results as $result) {
      $result['category'] = new Category($result);
      $result['user'] = new User($result);
      $articles[] = new Article($result);
    }

    return $articles;
  }

  function get3LastArticles()
  {

    $sql = $sql = 'SELECT *
    FROM article AS A
    INNER JOIN category AS C
    ON A.categoryId = C.idCategory
    INNER JOIN user AS U
    ON A.userId = U.idUser
    ORDER BY createdAt DESC
    LIMIT 3';

    $results = $this->db->getAllResults($sql);

    $articles = [];
    foreach ($results as $result) {
      $result['category'] = new Category($result);
      $result['user'] = new User($result);
      $articles[] = new Article($result);
    }

    return $articles;
  }


  public function addArticle(Article $article)
    {
        $sql = 'INSERT INTO article (title, summary, content, image, userId, categoryId, createdAt )
                VALUES (?,?,?,?,?,?, NOW())';

        return $this->db->insert($sql, [
            $article->getTitle(),
            $article->getSummary(),
            $article->getContent(),
            $article->getImage(),
            $article->getUser()->getIdUser(),
            $article->getCategory()->getIdCategory()
        ]);
    }

    public function updateArticle(Article $article)
    {
        $sql = 'UPDATE article
                SET title = ?, summary = ?, content = ?, image = ?, userId = ?, categoryId = ?
                WHERE idArticle = ?';

        return $this->db->update($sql, [
            $article->getTitle(),
            $article->getSummary(),
            $article->getContent(),
            $article->getImage(),
            $article->getUser()->getIdUser(),
            $article->getCategory()->getIdCategory(),
            $article->getIdArticle()
        ]);
    }

    public function deleteArticle(int $idArticle)
    {
        $sql = 'DELETE FROM article WHERE idArticle = ?';

        return $this->db->delete($sql, [$idArticle]);
    }

}
