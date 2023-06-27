<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../database/database.php';

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/../views';
$currentPath = realpath(__DIR__);
$basePath = realpath($currentPath . '/..');
$cache = $basePath . '/cache';

$blade = new Bladeone($views, $cache, Bladeone::MODE_AUTO);

$roomId = $_GET['id'];

$sqlRoomObj = "SELECT * FROM rooms WHERE roomId = '$roomId'";
$resultRoomObj = $connectionMiranda_DB->query($sqlRoomObj);

if ($resultRoomObj->num_rows > 0) {
    $room = $resultRoomObj->fetch_object();
    
}else {
    echo "No room found.";
};

$sqlRooms = "SELECT * FROM rooms";
$resultRoomsArr = $connectionMiranda_DB->query($sqlRooms);

if ($resultRoomsArr->num_rows > 0) {
    $rooms = [];
    while ($row = $resultRoomsArr->fetch_assoc()) {
        $roomItem = new stdClass(); 
        $roomItem->roomId = $row["roomId"];
        $roomItem->amenities = $row["amenities"];
        $roomItem->isAvailable = $row["isAvailable"];
        $roomItem->offerPrice = $row["offerPrice"];
        $roomItem->photos = $row["photos"];
        $roomItem->price = $row["price"];
        $roomItem->roomName = $row["roomName"];
        $roomItem->roomNumber = $row["roomNumber"];
        $roomItem->roomType = $row["roomType"];
        $rooms[] = $roomItem;
    }
}else {
    echo "No rooms found.";
};
echo $blade->run('roomDetails', ['room' => $room, 'rooms' => $rooms]);
$connectionMiranda_DB->close()
?>