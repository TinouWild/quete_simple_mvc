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


class ItemController {
    public function index(){
        $itemManager = new Model\ItemManager();
        $items = $itemManager->selectAllItems();

        require __DIR__ . '/../View/item.php';
    }

    public function show(int $id)
    {
        $itemManager = new Model\ItemManager();
        $item = $itemManager->selectOneItem($id);

        require __DIR__ . '/../View/showitem.php';
    }
}

?>