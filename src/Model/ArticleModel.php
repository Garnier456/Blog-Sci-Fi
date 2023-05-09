<?php

namespace App\Model;

use App\Core\AbstractModel;
use App\Core\Database;
use App\Entity\Article;
use App\Entity\category;

class ArticleModel extends AbstractModel
{

  function getLastArticles()
  {

    $sql = "SELECT *
            FROM article
            ORDER BY idArticle DESC
            LIMIT 10";

  $results = $this->db->getAllResults($sql);

  $articles = [];
  foreach ($results as $result) {
      $result['category'] = new Category($result);
      $articles[] = new Article($result);
  }

  return $articles;
  }

}
