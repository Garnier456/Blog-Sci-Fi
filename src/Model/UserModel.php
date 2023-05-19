<?php

namespace App\Model;

use App\Entity\User;
use App\Core\AbstractModel;

class UserModel extends AbstractModel {

    public function addUser(User $user)
    {
        $sql = 'INSERT INTO user (username, email, password)
                VALUES (?, ?, ?)';

        $values = [
            $user->getUserName(),
            $user->getEmail(),
            $user->getPassword(),
        ];

        return $this->db->insert($sql, $values);
    }


    public function getUserByEmail(string $email)
    {
        $sql = 'SELECT *
                FROM user
                WHERE email = ?';

        $result = $this->db->getOneResult($sql, [$email]);

        if (!$result) {
            return null;
        }

        return new User($result);
    }

    public function insertSaveArticle($userId, $IdArticle) {

        $sql = "INSERT INTO articles_saves
                (id_user, id_article)
                VALUES (?, ?)";

        $this->db->prepareAndExecute($sql, [$userId, $IdArticle]);
    }
    
    function checkSaveArticle($userId, $IdArticle) {
    
        $sql = "SELECT *
                FROM articles_saves
                WHERE id_article = ? AND id_user = ?";
    
        $result = $this->db->getOneResult($sql, [$userId, $IdArticle]);

        return var_dump($result);
    
        if($result) {
            return true;
        }
    }

}