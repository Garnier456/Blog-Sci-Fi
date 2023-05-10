<?php

namespace App\Model;

use App\Entity\User;
use App\Core\AbstractModel;

class UserModel extends AbstractModel {
    
    public function addUser(User $user)
    {
        $sql = 'INSERT INTO user (username, email, password, isAdmin)
                VALUES (?, ?, ?, NOW(), ?)';

        $values = [
            $user->getUserName(), 
            $user->getEmail(), 
            $user->getPassword(),
            $user->getIsAdmin()
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

}