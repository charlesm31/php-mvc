<?php

class Request{
    
    //  Get request URI
    public static function uri()
    {
        return  trim(
            parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH), '/'
        );
    }
    
    
    //  Determine Request Method
    public static function method()
    {
       return $_SERVER['REQUEST_METHOD'];
    }
}