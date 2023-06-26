<?php
require_once __DIR__ . '/../config.php';
mysqli_report(MYSQLI_REPORT_STRICT);

try {
    $connectionMiranda_DB = new mysqli($servername, $username, $password, $database);
    if ($connectionMiranda_DB->connect_error) {
        throw new Exception('Connection failed: ' . $connectionMiranda_DB->connect_error);
    }
    echo "Connected successfully";
} catch (Exception $error) {
    echo 'ERROR: ' . $error->getMessage();
}

?>