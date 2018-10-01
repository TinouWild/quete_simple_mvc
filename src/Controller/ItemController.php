<?php
/**
 * Created by PhpStorm.
 * User: etienne
 * Date: 01/10/18
 * Time: 13:30
 */

// src/Controller/ItemController.php

namespace Controller;

use Model;
$itemManager = new Model\ItemManager();
$items = $itemManager->selectAllItems();

require __DIR__ . '/../View/item.php';

class ItemController {
    public function index(){

    }
}
?>