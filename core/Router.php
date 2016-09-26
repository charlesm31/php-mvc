<?php

class Router {

    // Define Route to Execute
    public $routes = [
        'GET' => [],
        'POST' => []
    ];
    

    //  Create new Instance of Router class and load routes.php
    public static function load($file) {
        $router = new self;
        require $file;
        return $router;
    }
    

    //  Process GET Request
    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }

    
    //  Process POST Request
    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }

    
    //  Redirect User to the requested URL
    public function direct($uri, $requestTyepe) {
        if (array_key_exists($uri, $this->routes[$requestTyepe])) {
            return $this->routes[$requestTyepe][$uri];
        }

        echo '<pre>';
        throw new Exception('No route defined for this URI.');
    }

}
