<?php 

$controllers = [
    'pages' => ['home', 'error'],
];

if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
    $controller = 'pages';
    $action = 'error';
}


$folders = ['admin', 'user', ''];

$class = ucfirst($controller) . 'Controller';
foreach($folders as $folder) {
    $path = $folder ? "controllers/$folder/$class.php" : "controllers/$class.php";
    if(file_exists($path)) {
        include_once $path;
        if(class_exists($class)) {
            $controller = new $class;
            if(method_exists($controller, $action)) {
                    $controller -> $action();
            }
            else {
                $controller = 'pages';
                $action = 'error';
            }
        }
        else {
            $controller = 'pages';
            $action = 'error';
        }
    }
}
