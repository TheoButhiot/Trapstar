<?php 

namespace App\Models;

class BagModel extends ConnectionModel
{
    public function countArticleBag($article_id, $user_id, $color, $size)
    {
        $sql = 'SELECT * FROM bag where article_id = :article_id and user_id = :user_id and color = :color and size = :size';
        $query = $this->connection->prepare($sql);
        $query->bindValue(':article_id', $article_id,\PDO::PARAM_INT);
        $query->bindValue(':user_id', $user_id, \PDO::PARAM_INT);
        $query->bindValue(':color', $color, \PDO::PARAM_STR);
        $query->bindValue(':size', $size, \PDO::PARAM_STR);
        $query->execute();
        $countArticle = $query->fetchAll();
        return $countArticle;

    }
    public function addArticleBag($article_id,$user_id, $color, $size, $quantity)
    {
        $sql = 'INSERT INTO bag (article_id, user_id, color, size, quantity) VALUES(:article_id, :user_id, :color, :size, :quantity)';
        $query =$this->connection->prepare($sql);
        $query->bindValue(':article_id', $article_id,\PDO::PARAM_INT);
        $query->bindValue(':user_id', $user_id, \PDO::PARAM_INT);
        $query->bindValue(':color', $color, \PDO::PARAM_STR);
        $query->bindValue(':size', $size, \PDO::PARAM_STR);
        $query->bindValue(':quantity', $quantity, \PDO::PARAM_STR);
        $query->execute();

    }

    public function updateArticleBag($article_id,$user_id, $color, $size, $quantity)
    {
        $sql = "UPDATE bag set quantity = :quantity where article_id = :article_id and user_id = :user_id and color = :color and size = :size";
        $query =$this->connection->prepare($sql);
        $query->bindValue(':article_id', $article_id,\PDO::PARAM_INT);
        $query->bindValue(':user_id', $user_id, \PDO::PARAM_INT);
        $query->bindValue(':color', $color, \PDO::PARAM_STR);
        $query->bindValue(':size', $size, \PDO::PARAM_STR);
        $query->bindValue(':quantity', $quantity, \PDO::PARAM_STR);
        $query->execute();
    }

    public function deleteArticleBag()
    {

    }
}

?>