<?php

require __DIR__ . '/../vendor/autoload.php';

use Controller;
$index = new Controller\ItemController();

echo $index->index();

?>
