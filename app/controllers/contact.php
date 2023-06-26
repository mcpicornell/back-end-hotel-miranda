<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../database/database.php';

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/../views';
$cache = __DIR__ . '/../../cache';

$blade = new Bladeone($views, $cache, Bladeone::MODE_AUTO);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo $blade->run('contact', []);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $connectionMiranda_DB = new mysqli($servername, $username, $password, $database);

    if ($connectionMiranda_DB->connect_error) {
        die("Connection failed: " . $connectionMiranda_DB->connect_error);
    }

    $name = $connectionMiranda_DB->real_escape_string($name);
    $phone = $connectionMiranda_DB->real_escape_string($phone);
    $email = $connectionMiranda_DB->real_escape_string($email);
    $subject = $connectionMiranda_DB->real_escape_string($subject);
    $message = $connectionMiranda_DB->real_escape_string($message);

    $currentDate = date('Y/m/d');
    $randomId = uniqid();
    $isArchive = 0;

    $query = "INSERT INTO contacts (contactId, date, customerName, customerPhoneNumber, customerEmail, subject, comment, isArchive) 
          VALUES ('$randomId', '$currentDate', '$name', '$phone', '$email', '$subject', '$message', '$isArchive')";

    if ($connectionMiranda_DB->query($query) === TRUE) {
        $message = 'Form correctly sended';
    } else {
        $message = 'Fatality';
    }

    
    $connectionMiranda_DB->close();
    

}