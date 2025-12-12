<?php

$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = $request_uri;

$route = rtrim($request_uri, '/');
if ($route === '') {
    $route = '/';
}

switch ($route){
    case '/':
        require CONTROLLERS . 'CatalogController.php'; 
        break;
    case '/about':
        require CONTROLLERS . 'AboutController.php';
        break;
    case '/catalog':
        require CONTROLLERS . 'CatalogController.php';
        break;
    case '/item':
        require CONTROLLERS . 'ItemController.php';
        break;
    case '/author':
        require CONTROLLERS . 'AuthorController.php';
        break;
    case '/profile':
        require CONTROLLERS . 'ProfileController.php';
        break;
    case '/login':
        require CONTROLLERS . 'LoginController.php';
        break;
    default:
        require VIEWS . '404.tpl.php';
}
