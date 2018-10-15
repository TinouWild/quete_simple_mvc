<?php
/**
 * Created by PhpStorm.
 * User: etienne
 * Date: 08/10/18
 * Time: 23:59
 */

namespace Model;

class Category
{
    private $id;
    private $nom;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): Category
    {
        $this->id = $id;
        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom($nom):Category
    {
        $this->nom = $nom;
        return $this;
    }
}