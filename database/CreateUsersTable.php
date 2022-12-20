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
            )", 
            
            "CREATE TABLE IF NOT EXISTS  articles (
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            name VARCHAR(50) NOT NULL,
            price VARCHAR(255) NOT NULL,
            img VARCHAR(50) NOT NULL
            )"

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