<?php
require __DIR__.'/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

var_dump(getenv('PASSWORD'), getenv('TRUE_ME'), $_ENV, $_SERVER);


