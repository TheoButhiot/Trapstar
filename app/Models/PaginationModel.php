<?php

namespace App\Models;

use App\Models\ConnectionModel;


class PaginationModel extends ConnectionModel
{
    private $connection, $articles, $total_records, $limit = 4;
    
    public function __construct($articles)
    {
        $this->articles = $articles;
        
        

    }
    

    
}
