<?php
/**
 * Created by PhpStorm.
 * User: etienne
 * Date: 01/10/18
 * Time: 13:28
 */
namespace Model;
// src/Model/ItemManager.php
require __DIR__ . '/../../app/db.php';

// récupération de tous les items
//function selectAllItems() :array
//{
//    $pdo = new \PDO(DSN, USER, PASS);
//    $query = "SELECT * FROM item";
//    $res = $pdo->query($query);
//    return $res->fetchAll();
//}

class ItemManager{

    public function selectAllItems() :array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM item";
        $res = $pdo->query($query);
        return $res->fetchAll();
    }

    public function selectOneItem(int $id) : array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM item WHERE id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        // contrairement à fetchAll(), fetch() ne renvoie qu'un seul résultat
        return $statement->fetch();
    }

}
?>