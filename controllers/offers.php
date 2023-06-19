<?php
require_once __DIR__ . '/../vendor/autoload.php';

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/../views';
$cache = __DIR__ . '/../cache';

$blade = new Bladeone($views, $cache, Bladeone::MODE_AUTO);

echo $blade->run('offers', []);
?>