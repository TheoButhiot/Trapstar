<?php

namespace Stand;

use App\Models\ConnectionModel;

final class Stand extends ConnectionModel
{
    public function standDatabase()
    {
        $queries = [
            "insert into articles(name,price,img,quantity) VALUES('CHENILLE DECODED 2.0 HOODED', '99£', 'assets/img/puffer.png', 80),
            ('HYPERDRIVE GILET 2.0', '100£', 'assets/img/yellow.webp',25),
            ('HYPERDRIVE RIPSTOP CITY', '115£', 'assets/img/bomber.webp', 35),
            ('SHOOTERS 1/4 ZIP PULLOVER', '200£', 'assets/img/doudounebleu.webp',63)"

        ];

        foreach ($queries as $query) {
            try {
                $statement = $this->connection->prepare($query);
                $statement->execute();
            } catch (Exception $e) {
                echo 'Erreur : ' . $e->getMessage() . '<br/>';
            }
        }

    }
}


