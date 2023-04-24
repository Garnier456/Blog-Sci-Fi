<?php
// if (session_status() == PHP_SESSION_NONE) {
//     session_start();
// }

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
            FROM users
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


function getLastArticles() {
    global $pdo;

    $sql = "SELECT *
            FROM articles
            ORDER BY created_at DESC
            LIMIT 3";

    $data = $pdo->prepare($sql);
    $data->execute();

    return $data->fetchAll();
}

function getArticle($id) {
    global $pdo;

    $sql = "SELECT *
            FROM articles
            WHERE id = ?";

    $data = $pdo->prepare($sql);
    $data->execute([$id]);

    return $data->fetch();
}

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



function getUsers() {
    global $pdo;

    $sql = "SELECT *
    FROM users
    ORDER BY id DESC
    LIMIT 10";

    $data = $pdo->prepare($sql);
    $data->execute();

    return $data->fetchAll();
}

function getUserName($article_id) {
    global $pdo;

    $sql = "SELECT users.username
            FROM articles
            INNER JOIN users ON articles.user_id = users.id
            WHERE articles.id = ?";

    $data = $pdo->prepare($sql);
    $data->execute([$article_id]);

    $result = $data->fetch();

    if ($result) {
        return $result['username'];
    } else {
        return false;
    }
}

function getCategoryName($article_id) {
    global $pdo;

    $sql = "SELECT categories.name
            FROM articles
            INNER JOIN categories ON articles.category_id = categories.id
            WHERE articles.id = ?";

    $data = $pdo->prepare($sql);
    $data->execute([$article_id]);

    $result = $data->fetch();

    if ($result) {
        return $result['name'];
    } else {
        return false;
    }
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