<?php
require_once  __DIR__ . '/vendor/autoload.php';

$config = parse_ini_file("config.ini", true);
$servername = $config["MongoDB"]["servername"];
$database = $config["MongoDB"]["database"];
$agenda = $config["MongoDB"]["collection"];

// Replace the following line with your MongoDB Atlas connection string
// Reemplaza 'TU_USUARIO' con tu nombre de usuario y 'TU_CONTRASEÑA' con tu contraseña
$connectionString = "mongodb+srv://ivancetepin:06Atlas29@cluster0.ladjru0.mongodb.net/?retryWrites=true&w=majority";

// Create a new MongoDB client using the connection string
$client = new MongoDB\Client($connectionString);

// Select the database and collection
$collection = $client->$database->$agenda;
?>