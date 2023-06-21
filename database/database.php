<?php
require_once '../config.php';

$connectionMiranda_DB = new mysqli($servername, $username, $password, $database);

if ($connectionMiranda_DB->connect_error) {
    die("Connection failed: " . $connectionMiranda_DB->connect_error);
}

echo "Connected successfully";


?>