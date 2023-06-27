<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../database/database.php';

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/../views';
$currentPath = realpath(__DIR__);
$basePath = realpath($currentPath . '/..');
$cache = $basePath . '/cache';


$blade = new BladeOne($views, $cache, Bladeone::MODE_AUTO);

$sql = "SELECT * FROM rooms";
$result = $connectionMiranda_DB->query($sql);

$rooms = [];



if ($result !== false && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $room = new stdClass();
        $room->roomId = $row["roomId"];
        $room->amenities = $row["amenities"];
        $room->isAvailable = $row["isAvailable"];
        $room->offerPrice = $row["offerPrice"];
        $room->photos = $row["photos"];
        $room->price = $row["price"];
        $room->roomName = $row["roomName"];
        $room->roomNumber = $row["roomNumber"];
        $room->roomType = $row["roomType"];
        $rooms[] = $room;
    }
} else {
    echo "No rooms found.";
}

echo $blade->run('index', ['rooms' => $rooms]);
$connectionMiranda_DB->close();
?> 