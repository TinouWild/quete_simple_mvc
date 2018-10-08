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
use Twig_Loader_Filesystem;
use Twig_Environment;


class CategoryController {
    private $twig;

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }

    public function index(){
        $categoryManager = new Model\CategoryManager();
        $categorys = $categoryManager->selectAllCategory();

        return $this->twig->render('category.html.twig', ['categorys' => $categorys]);    }

    public function show(int $id)
    {
        $categoryManager = new Model\CategoryManager();
        $categorys = $categoryManager->selectOneCategory($id);

        return $this->twig->render('showcategory.html.twig', ['category' => $categorys]);    }
}

?>