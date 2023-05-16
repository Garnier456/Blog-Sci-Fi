<?php
                   
function insertSaveArticle($userId, $articleId) {
    global $pdo;

    $sql = "INSERT INTO articles_saves
            (id_user, id_article)
            VALUES (?, ?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$userId, $articleId]);
}

function checkSaveArticle($userId, $articleId) {
    global $pdo;

    $sql = "SELECT *
            FROM articles_saves
            WHERE id_article = ? AND id_user = ?";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$userId, $articleId]);

    if($stmt->rowCount() > 0) {
        return true;
    } else {
        return false;
    }
}


function asset(string $path)
{
    return BASE_URL . '/' . $path;
}

function constructUrl(string $routeName, array $params = [])
{
    // Si la route donnée en paramètre n'existe pas on lance une exception
    if (!array_key_exists($routeName, ROUTES)) {
        throw new Exception('ERREUR : pas de route nommée ' . $routeName);
    }

    $url = BASE_URL . 'index.php' . ROUTES[$routeName]['path'];

    if ($params) {
        $url .= '?' . http_build_query($params);
    }

    return $url;
}

function slugify($string) {
    // Remplace les caractères spéciaux par des tirets
    $string = preg_replace('/[^\p{L}\p{N}]+/u', '-', $string);

    // Convertit en minuscules
    $string = mb_strtolower($string, 'UTF-8');

    // Supprime les tirets en début et fin de chaîne
    $string = trim($string, '-');

    // Supprime les tirets répétés
    $string = preg_replace('/-+/', '-', $string);

    return $string;
}