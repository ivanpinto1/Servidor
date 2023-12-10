<?php
    //connect to mongodb
    require_once  __DIR__ . '/vendor/autoload.php';
    $m = new MongoDB\Client("mongodb://localhost:27017");
    echo "Connection to database successfully";
?>