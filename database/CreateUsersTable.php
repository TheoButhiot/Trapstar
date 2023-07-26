<?php


namespace Database;



use App\Models\ConnectionModel;


final class CreateUsersTable extends ConnectionModel
{
    public function handle() {
        $queries = [
            "CREATE TABLE IF NOT EXISTS users (
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            name VARCHAR(60) NOT NULL,
            password VARCHAR(320) NOT NULL,
            email VARCHAR(320) NOT NULL
            ) character set utf8", 
            
            "CREATE TABLE IF NOT EXISTS  articles (
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            name VARCHAR(50) NOT NULL,
            price VARCHAR(255) NOT NULL,
            img VARCHAR(50) NOT NULL,
            quantity INT
            ) character set utf8", 

            "CREATE TABLE IF NOT EXISTS bag (
                user_id INT NOT NULL,
                article_id INT NOT NULL,
                quantity INT,
                color VARCHAR(50),
                size VARCHAR(10)
            ) character set utf8",
            "ALTER TABLE `bag`
            ADD CONSTRAINT `FK_bag_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION,
            ADD CONSTRAINT `FK_bag_articles` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION"
        

        ];

        foreach ($queries as $query) {
            try {
                $statement = $this->connection->prepare($query);
                $statement->execute();
            } catch (Exception $e) {
                echo 'Erreur : ' . $e->getMessage() .'<br/>';
            }
        }
        
    }
}