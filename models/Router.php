<?php

class Router{

    protected $routes = [];

    public function define($routes){
        
        $this->routes = $routes;
    }

    public function direct($uri){
       
        if (array_key_exists($uri, $this->routes)){
         return $this->routes[$uri];
       } 
       else{
           throw new Exception('Nenhuma rota associada a essa URI');
       }
    }

    public static function load($file){
        
        $router = new static;
        require $file;
        return $router;
    }
}