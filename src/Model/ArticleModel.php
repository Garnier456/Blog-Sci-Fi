<?php

namespace App\Model;

use App\Core\AbstractModel;
use App\Core\Database;
use App\Entity\Article;
use App\Entity\Category;
use App\Entity\User;

class ArticleModel extends AbstractModel
{

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

  function getOneArticle(int $idArticle)
  {
    $sql = "SELECT *
      FROM article
      WHERE idArticle = ?";

    $result = $this->db->getOneResult($sql, [$idArticle]);

    if (!$result) {
      return null;
    }

    return new Article($result);
  }
}