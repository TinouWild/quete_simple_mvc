<?php
/**
 * Created by PhpStorm.
 * User: etienne
 * Date: 01/10/18
 * Time: 13:28
 */

// src/Model/ItemManager.php
require __DIR__ . '/../../app/db.php';

// récupération de tous les items
function selectAllItems() :array
{
    $pdo = new \PDO(DSN, USER, PASS);
    $query = "SELECT * FROM item";
    $res = $pdo->query($query);
    return $res->fetchAll();
}

?>