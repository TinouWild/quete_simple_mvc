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

class CategoryController extends AbstractController
{
    public function index()
    {
        $categoryManager = new Model\CategoryManager($this->pdo);
        $categorys = $categoryManager->selectAll();

        return $this->twig->render('category.html.twig', ['categorys' => $categorys]);
    }

    public function show($id)
    {
        $categoryManager = new Model\CategoryManager($this->pdo);
        $categorys = $categoryManager->selectOneById($id);

        return $this->twig->render('showcategory.html.twig', ['category' => $categorys]);
    }

    public function add()
    {
        if (!empty($_POST)) {
            // TODO : validations des valeurs saisies dans le form
            // création d'un nouvel objet Item et hydratation avec les données du formulaire
            $category = new Model\Category();
            $category->setNom($_POST['nom']);

            $categoryManager = new Model\CategoryManager($this->pdo);
            // l'objet $item hydraté est simplement envoyé en paramètre de insert()
            $categoryManager->insert($category);
            // si tout se passe bien, redirection
            header('Location: /categorys');
            exit();
        }
        // le formulaire HTML est affiché (vue à créer)
        return $this->twig->render('addCategory.html.twig');
    }

    public function edit($id)
    {
        $categoryManager = new Model\CategoryManager($this->pdo);
        $category = $categoryManager->selectOneById($id);

        if (@$_POST['modifier'] == 'editer')
        {
            $category->setNom($_POST['nom']);
            $categoryManager->update($category);
        }

        return $this->twig->render('editCategory.html.twig', ['category' => $category]);

    }

    public function delete($id)
    {
        $categoryManager = new Model\CategoryManager($this->pdo);
        $category = $categoryManager->selectOneById($id);
        echo $this->twig->render('deleteCategory.html.twig', ['category' => $category]);

        if (@$_POST['delete'] == 'Supprimer')
        {
            $category->setNom($_POST['nom']);
            $categoryManager->delete($category);
            return "<script type='text/javascript'>document.location.replace('/categorys');</script>";
        }

    }
}

?>