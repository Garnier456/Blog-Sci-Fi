<?php 

namespace App\Controller;

use App\Entity\User;
use App\Model\UserModel;
use App\Service\UserSession;

class UserController {

    private UserModel $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function signup()
    {
        $username = '';
        $email = '';
        $successMessage = null;

        // Si le formulaire est soumis
        if (!empty($_POST)) {

            // 1. Récupération des données du formulaire
            $username = strip_tags(trim($_POST['username']));
            $email = strip_tags(trim($_POST['email']));
            $password = $_POST['password'];
            $passwordConfirm = $_POST['password-confirm'];

            // 2. Validation du formulaire
            $errors = $this->validateForm(
                $username, 
                $email,
                $password,
                $passwordConfirm
            );

            // Si il n'y a pas d'erreur... 
            if(empty($errors)) {

                $hash = password_hash($password, PASSWORD_DEFAULT);

                $user = new User([
                    'username' => $username,
                    'email' => $email,
                    'password' => $hash,
                ]);

                // Ajout du nouvel utilisateur dans le fichier JSON
                $this->userModel->addUser($user);

                // Ajout d'un message flash en session
                $successMessage = 'Votre compte a été créé avec succès.';
                $_SESSION['flash'] = $successMessage; 

                // Redirection vers l'index.php mais sans les données du formulaire
                // Design pattern : POST redirect GET (cf https://fr.wikipedia.org/wiki/Post-redirect-get)
                header('Location: ' . constructUrl('home'));
                exit;
            }

        }

        // Affichage du template
        $template = 'signup';
        include TEMPLATE_DIR .'/base.phtml';
    }

    public function showProfile()
    {
        // Vérifier si l'utilisateur est connecté
        $userSession = new UserSession();
        if (!$userSession->getUser()) {
            // Redirection vers la page de connexion si l'utilisateur n'est pas connecté
            header('Location: ' . constructUrl('login'));
            exit;
        }

        // Récupérer les informations de l'utilisateur connecté
        $user = $userSession->getUser();

        // Afficher le template du profil avec les informations de l'utilisateur
        $template = 'profile';
        include TEMPLATE_DIR . '/base.phtml';
    }

    private function validateForm(
        string $nickname,
        string $email,
        string $password,
        string $passwordConfirm
    )
    {
        // On initialise un tableau, on stockera les messages d'erreur dedans
        $errors = [];
    
        // Si le champ "firstname" n'est pas rempli...
        if(!$nickname) {
            $errors['nickname'] = 'Veuillez remplir le champ "Pseudo"';
        }
    
        // Validation de l'email
        if(!$email) {
            $errors['email'] = 'Veuillez remplir le champ "Email"';
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Veuillez remplir un email valide';
        } elseif($this->userModel->getUserByEmail($email)) {
            $errors['email'] = 'Un compte existe déjà avec cet email';
        }
    
        if(strlen($password) < 8) {
            $errors['password'] = 'Le mot de passe doit comporter au moins 8 caractères';
        } elseif ($password != $passwordConfirm) {
            $errors['password-confirm'] = 'La confirmation ne correspond pas';
        }
    
        // On retourne le tableau d'erreurs
        return $errors;
    }
    
}