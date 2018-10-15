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

class ItemController extends AbstractController
{
    public function index()
    {
        $itemManager = new Model\ItemManager($this->pdo);
        $items = $itemManager->selectAll();

        return $this->twig->render('item.html.twig', ['items' => $items]);
    }

    public function show($id)
    {
        $itemManager = new Model\ItemManager($this->pdo);
        $item = $itemManager->selectOneById($id);

        return $this->twig->render('showitem.html.twig', ['item' => $item]);

    }

    public function add()
    {
        if (!empty($_POST)) {
            // TODO : validations des valeurs saisies dans le form
            // création d'un nouvel objet Item et hydratation avec les données du formulaire
            $item = new Model\Item();
            $item->setTitle($_POST['title']);

            $itemManager = new Model\ItemManager($this->pdo);
            // l'objet $item hydraté est simplement envoyé en paramètre de insert()
            $itemManager->insert($item);
            // si tout se passe bien, redirection
            header('Location: /');
            exit();
        }
        // le formulaire HTML est affiché (vue à créer)
        return $this->twig->render('add.html.twig');
    }

    public function edit($id)
    {
        $itemManager = new Model\ItemManager($this->pdo);
        $item = $itemManager->selectOneById($id);

        if (@$_POST['modifier'] == 'editer')
        {
            $item->setTitle($_POST['title']);
            $itemManager->update($item);
        }

        return $this->twig->render('editItem.html.twig', ['item' => $item]);

    }

    public function delete($id)
    {
        $itemManager = new Model\ItemManager($this->pdo);
        $item = $itemManager->selectOneById($id);

        if (@$_POST['delete'] == 'Supprimer')
        {
            $item->setTitle($_POST['title']);
            $itemManager->update($item);
        }

        return $this->twig->render('deleteItem.html.twig', ['item' => $item]);

    }

}

?>