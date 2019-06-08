<?php

class Router{

    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function define($routes){
        
        $this->routes = $routes;
    }

    public function direct($uri, $requestType){

        if (array_key_exists($uri, $this->routes[$requestType])){
         return $this->callAction(...explode('@', $this->routes[$requestType]));
       } 
    
    }

    public static function load($file){
        
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri, $controller){
        $this->routes['GET'][$uri] = $controller;
    }

    public function callAction($controller, $action){
        $controller = new $controller;

        if(! method_exists($controller, $action)){
            throw new Exception("{$controller} não responde a {$action} ação");
        }

        return $controller->$action();
    }
}