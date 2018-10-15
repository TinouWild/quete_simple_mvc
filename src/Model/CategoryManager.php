<?php
/**
 * Created by PhpStorm.
 * User: etienne
 * Date: 01/10/18
 * Time: 13:28
 */
namespace Model;
use Model\Category;

class CategoryManager extends AbstractManager
{
    const TABLE = 'category';

    public function __construct($pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    public function insert(Category $category): int
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (`nom`) VALUES (:nom)");
        $statement->bindValue('nom', $category->getNom(), \PDO::PARAM_STR);
        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }

    public function update(Category $category)
    {
        $statement = $this->pdo->prepare("UPDATE " . self::TABLE . " SET nom = :nom WHERE id = :id");
        $statement->bindValue('nom', $category->getNom(), \PDO::PARAM_STR);
        $statement->bindValue('id', $category->getId(), \PDO::PARAM_INT);
        return $statement->execute();
    }

    public function delete(Category $category)
    {
        $statement = $this->pdo->prepare("DELETE FROM " . self::TABLE . " WHERE id = :id");
        $statement->bindValue('id', $category->getId(), \PDO::PARAM_INT);
        return $statement->execute();
    }
}