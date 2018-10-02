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


class CategoryController {
    public function index(){
        $categoryManager = new Model\CategoryManager();
        $categorys = $categoryManager->selectAllCategory();

        require __DIR__ . '/../View/category.php';
    }

    public function show(int $id)
    {
        $categoryManager = new Model\CategoryManager();
        $categorys = $categoryManager->selectOneCategory($id);

        require __DIR__ . '/../View/showcategory.php';
    }
}

?>