<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../database/database.php';

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/../views';
$currentPath = realpath(__DIR__);
$basePath = realpath($currentPath . '/..');
$cache = $basePath . '/cache';

$blade = new Bladeone($views, $cache, Bladeone::MODE_AUTO);

echo $blade->run('about', []);
?>