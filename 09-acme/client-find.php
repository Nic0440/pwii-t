<?php

require __DIR__ . "/source/autoload.php";
require __DIR__ . "/source/Boot/config.php";

$client = new \Source\Clients\Client();

$client->findById(8);

var_dump($client);