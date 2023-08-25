<?php
    require_once './routes/Router.php';
    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $router = new Router($url);
    $router->switchRoute();

    