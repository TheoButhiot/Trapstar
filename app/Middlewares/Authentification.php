<?php

namespace App\Middlewares;
use App\Models\ConnectionModel;
use FTP\Connection;


class Authentification extends ConnectionModel
{
public function Auth(): void
{
    if($_SESSION['email'] != null){
        header("location: /home");
        exit;
    }
}

public function noAuth(): void
{
    if($_SESSION['email'] === null){
        header("location: /");
        exit;
    }
}
}

