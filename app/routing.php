<?php
// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
        ['add', '/items/add', ['GET', 'POST']],
        ['edit', '/item/edit/{id}', ['GET', 'POST']],
        ['delete', '/item/delete/{id}', ['GET', 'POST']],
    ],
    'Category' => [ // Controller
        ['index', '/categorys', 'GET'],
        ['show', '/category/{id}', 'GET'],
        ['add', '/categorys/addCategory', ['GET', 'POST']],
        ['edit', '/categorys/edit/{id}', ['GET', 'POST']],
        ['delete', '/categorys/delete/{id}', ['GET', 'POST']],
    ],
];