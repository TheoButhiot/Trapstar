<?php

require_once './vendor/autoload.php';

$userTable = new \Database\CreateUsersTable();
$userTable->handle();