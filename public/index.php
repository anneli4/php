<?php

// router.php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;  
}

spl_autoload_register(function($class) {
    $parts = explode('\\', $class);
    array_shift($parts); // Remove the namespace part
    $class = implode('/', $parts);
    require_once __DIR__ . '/../src/' . $class . '.php';

});


require_once __DIR__ . '/../helpers.php';
require_once __DIR__ . '/../routes.php';

$router = new App\Router($_SERVER['REQUEST_URI']);
$match =$router->match();
if($match){
    if(is_callable($match['action'])){
       call_user_func($match['action']);
    } else if(is_array($match['action'])){
        $className =$match['action'][0];
        $methodName = $match['action'][1];
        $controller = new $className();
        $controller->$methodName();
    } else {
        echo '404 Ei leitud lehte';
    }
} else {
    echo '404 Ei leitud lehte';
}


