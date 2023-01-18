<?php
require_once "../vendor/autoload.php";


// Router system
$router = new AltoRouter();


// List of routes
$router->map('GET', '/', function() {
  echo "hola cosa";
});

// End of list

$match = $router->match();
if($match) {
 $target = $match["target"];
 if(is_string($target) && strpos($target, "#") !== false) {
     list($controller, $action) = explode("#", $target);
     $controller = "Controller\\" . $controller;
     $controller = new $controller;
     $controller->$action($match["params"]);
 } else {
     if(is_callable($match["target"])) call_user_func_array($match["target"], $match["params"]);
     else require $match["target"];
 }
} else {
 echo "Ruta no válida";
 die();
}