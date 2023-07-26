<?php

    require_once './vendor/autoload.php';

    $userTable = new database\CreateUsersTable();
    $userTable->handle();

    $standTable = new Stand\Stand();
    $standTable->standDatabase();

