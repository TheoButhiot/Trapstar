<?php

namespace App\Models;

use App\Models\ConnectionModel;

class UserModel extends ConnectionModel 

{
    public function createUser($name, $password, $email)
    {
        $sql = 'INSERT INTO users(name, password, email) VALUES (:name, :password, :email)';
        $query = $this->connection->prepare($sql);
        $query->bindValue(':name', $name, \PDO::PARAM_STR);
        $query->bindValue(':password', $password, \PDO::PARAM_STR);
        $query->bindValue(':email', $email, \PDO::PARAM_STR);
        $query->execute();
    }

    public function getUser($email)
    {
        $sql = "SELECT * FROM users WHERE email = :email";
        $query =$this->connection->prepare($sql);
        $query->bindValue(':email', $email, \PDO::PARAM_STR);
        $query->execute();
        $user =  $query->fetch();
        return $user;
    }
}