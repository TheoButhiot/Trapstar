<?php

namespace App\Models;

use App\Models\ConnectionModel;

class ArticleModel extends ConnectionModel
{
    // public function createArticle($name, $password, $email)
    // {
    //     $sql = 'INSERT INTO articles(name, price) VALUES (:name, :price)';
    //     var_dump($name, $password, $email);
    //     $query = $this->connection->prepare($sql);
    //     $query->bindValue(':name', $name, \PDO::PARAM_STR);
    //     $query->bindValue(':password', $password, \PDO::PARAM_STR);
    //     $query->bindValue(':email', $email, \PDO::PARAM_STR);
    //     $query->execute();
    // }

    public function getArticleAll(): bool|array
    {
        $sql = 'SELECT * FROM articles';
        $query = $this->connection->prepare($sql);
        $query->execute();
        $articles = $query->fetchAll();
        return $articles;
    }
    public function getArticleById(int $id)
    {
        $sql = "SELECT * FROM articles WHERE id = $id";
        $query = $this->connection->prepare($sql);
        $query->execute();
        $articleById = $query->fetch();
        return $articleById;
       
    }
}
