<?php

namespace App\Models;

abstract class ConnectionModel
{
    public \PDO $connection;
    public function __construct()
    {
        try{
        $this->connection = new \PDO(
            'mysql:host=' . CONFIG['database']['host'] . ';dbname=' . CONFIG['database']['dbname'] . ';charset=utf8',
            CONFIG['database']['user'],
            CONFIG['database']['password']
        );
    } catch (\Exception $e) {
        exit('Erreur : ' . $e->getMessage());
    
    }
}
}