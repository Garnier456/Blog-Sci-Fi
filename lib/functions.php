<?php
                    /***************
                    SIGNUP FUNCTIONS
                    ****************/

function validateForm(
    $username,
    $email,
    $password,
    $passwordConfirm
)
{
    // On initialise un tableau, on stockera les messages d'erreur dedans
    $errors = [];

    // Si le champ "Pseudo" n'est pas rempli...
    if(!$username) {
        $errors['username'] = 'Veuillez remplir le champ "Pseudo"';
    }

    // Validation de l'email
    if(!$email) {
        $errors['email'] = 'Veuillez remplir le champ "Email"';
    // Si l'email n'est pas au bon format...
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Veuillez remplir un email valide';
    // Si l'email existe déjà dans notre base de donnée ...
    } elseif(checkEmailExists($email)) {
        $errors['email'] = 'Un compte existe déjà avec cet email';
    }

    if(strlen($password) < 8) {
        $errors['password'] = 'Le mot de passe doit comporter au moins 8 caractères';
    } elseif ($password != $passwordConfirm) {
        $errors['password-confirm'] = 'La confirmation ne correspond pas';
    }

    return $errors;
}

function checkEmailExists($email)
{
    global $pdo;

    $sql = "SELECT *
            FROM users
            WHERE email= ?";

    $checkMail = $pdo->prepare($sql);
    $checkMail->execute([$email]);

    if ($checkMail->rowCount() > 0) {
        return true;
    } else {
        return false;
    }
}

function addUser($username, $password, $email)
{
    global $pdo;

    $sql = "INSERT INTO
            users (username, password, email)
            VALUES (?, ?, ?)";

    $query = $pdo->prepare($sql);
    $query->execute([$username, $password, $email]);
}

                    /***************
                     SIGNUP FUNCTIONS
                    ****************/



                    /***************
                     LOGIN FUNCTIONS
                    ****************/

function isConnected()
{
    return (isset($_SESSION['user']) || isset($_SESSION['admin'])) ? true : false;
}

function isAdmin()
{
    if (isset($_SESSION['admin']) && $_SESSION['admin']) {
        return true;
    } else {
        return false;
    }
}



function getUserByEmail($email)
{
    global $pdo;

    $sql = "SELECT *
            FROM user
            WHERE email = ?";

    $query = $pdo->prepare($sql);
    $query->execute([$email]);

    return $query->fetch();
}

function verifyPassword($password, $hash)
{
    return password_verify($password, $hash);
}

                    /***************
                     LOGIN FUNCTIONS
                    ****************/


function addComment($author, $comment, $article_id) {
    global $pdo;

    $sql = "INSERT INTO comments
            (author, content, article_id, created_at) VALUES (?, ?, ?, NOW())";

    $data = $pdo->prepare($sql);
    $data->execute([$author, $comment, $article_id]);

    return $data->fetchAll();
}

function getComments($articleId) {
    global $pdo;

    $sql = "SELECT *
            FROM comments
            WHERE article_id = ?";

    $data = $pdo->prepare($sql);
    $data->execute([$articleId]);

    return $data->fetchAll();
}

function getAllComments() {
    global $pdo;

    $sql = "SELECT *
            FROM comments";

    $data = $pdo->prepare($sql);
    $data->execute();

    return $data->fetchAll();
}


function getDayFact() {
    global $pdo;

    $sql = "SELECT content
            FROM fact
            ORDER BY RAND()
            LIMIT 1";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchColumn();
}


function banned($id) {
    global $pdo;

    $sql = "SELECT *
            FROM users
            WHERE id= ?";

    $dataUser = $pdo->prepare($sql);
    $dataUser->execute([$id]);

    if($dataUser->rowCount() > 0) {
        $sql = "DELETE
                FROM users
                WHERE id= ?";

        $data = $pdo->prepare($sql);
        $data->execute([$id]);

        header('Location:admin.php');
    } else {
        echo 'aucun utilisateur trouvé';
    }
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

function insertArticle($title, $content, $intro, $image, $category, $user_id) {
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


function modifierArticle($id) {
    global $pdo;

    $sql = "SELECT *
            FROM articles
            WHERE id = ?";

    $data = $pdo->prepare($sql);
    $data->execute([$id]);

    return $data->fetch();
}

function updateArticle($titre, $contenu, $id) {
    global $pdo;

    $sql = "UPDATE articles
            SET title = ?, content = ?
            WHERE id = ?";

    $data = $pdo->prepare($sql);
    $data->execute([$titre, $contenu, $id]);

    return $data->fetch();
}

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