<?php

namespace App\Model;

use App\Core\AbstractModel;
use App\Core\Database;
use App\Entity\Article;
use App\Entity\User;
use App\Entity\Category;

class ArticleModel extends AbstractModel
{
  function getLastArticles()
  {
    $sql = "SELECT *
            FROM articles
            ORDER BY id DESC
            LIMIT 10";

    $results = $this->db->getAllResults($sql);

    return $results;
  }

  function getLast3Articles()
  {
    global $pdo;

    $sql = "SELECT *
          FROM articles
          ORDER BY id DESC
          LIMIT 3";

    $data = $pdo->prepare($sql);
    $data->execute();

    return $data->fetchAll();
  }

  function getArticle($id)
  {
    global $pdo;

    $sql = "SELECT *
          FROM articles
          WHERE id = ?";

    $data = $pdo->prepare($sql);
    $data->execute([$id]);

    return $data->fetch();
  }

  function insertArticle($title, $content, $intro, $image, $category, $user_id)
  {
    global $pdo;

    $sql = "INSERT INTO articles
          (title, content, intro, image, category_id, user_id, created_at)
          VALUES (?, ?, ?, ?, ?, ?, NOW())";

    // Récupérer l'id de la catégorie
    $query = $pdo->prepare("SELECT id FROM categories WHERE name = ?");
    $query->execute([$category]);
    $category_id = $query->fetch()['id'];

    // Insérer le nouvel article en utilisant l'id de la catégorie et de l'utilisateur
    $data = $pdo->prepare($sql);
    $data->execute([$title, $content, $intro, $image, $category_id, $user_id]);

    return $data;
  }

  function updateArticle($titre, $contenu, $id)
  {
    global $pdo;

    $sql = "UPDATE articles
          SET title = ?, content = ?
          WHERE id = ?";

    $data = $pdo->prepare($sql);
    $data->execute([$titre, $contenu, $id]);

    return $data->fetch();
  }

  function modifierArticle($id) {
    global $pdo;

    $sql = "SELECT *
            FROM articles
            WHERE id = ?";

    $data = $pdo->prepare($sql);
    $data->execute([$id]);

    return $data->fetch();
}

function suppArticle($id) {
  global $pdo;

  $sql = "SELECT *
          FROM articles
          WHERE id= ?";

  $dataArticle = $pdo->prepare($sql);
  $dataArticle->execute([$id]);

  if($dataArticle->rowCount() > 0) {
      $sql = "DELETE
              FROM articles
              WHERE id= ?";

      $data = $pdo->prepare($sql);
      $data->execute([$id]);

      header('Location:admin.php');
  } else {
      echo 'aucun article trouvé';
  }
}

}
