<?php

    spl_autoload_register(function (string $className){
            require_once('../src/'.$className.'.php');
        }
    );

    $route = $_GET['route'] ?? '';
    $routes = require '../src/routes.php';

    $isRouteFound = false;
    foreach($routes as $pattern => $controllerAndAction){
        preg_match($pattern, $route, $matches);
        if (!empty($matches)){
            $isRouteFound = true;
            break;
        }    
    }

    if (!$isRouteFound) {
        echo "Страница не найдена";
        return;
    }

    $controllerName = $controllerAndAction[0];
    $actionName = $controllerAndAction[1];

    $controller = new $controllerName;
    $controller->$actionName(...$matches);


    // $pattern = '~^hello/(.*)$~';
    // preg_match('/^$/', $route, $matches);
    // if (!empty($matches)){
    //     $controller = new Controllers\MainController;
    //     $controller->main();
    // }

   

    // $user = new Models\Users\User("Ivan");
    // $article = new Models\Articles\Article("title", "text", $user);
    // var_dump($article);

    // if (isset($_GET['name'])){
    //     $controller->sayHello($_GET['name']);
    // }else $controller->main();