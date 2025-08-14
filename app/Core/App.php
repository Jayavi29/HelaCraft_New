<?php

class App
{
    private $controller = 'Home';
    private $method = 'index';

    // Split the URL into segments
    private function splitURL()
    {
        $url = $_GET['url'] ?? 'home';
        $url = explode("/", $url);
        return $url;
    }

    // Load the requested controller and method
    public function loadController()
    {
        $URL = $this->splitURL();

        // Try nested folder structure first (e.g., Customer/DashboardController.php)
        if (!empty($URL[1])) {
            $filename = "../app/controllers/" . ucfirst($URL[0]) . "/" . ucfirst($URL[1]) . "Controller.php";
            if (file_exists($filename)) {
                require $filename;
                $this->controller = ucfirst($URL[1]) . "Controller";
                $controller = new $this->controller;
                
                // Default to index method if no third URL segment
                if (!empty($URL[2]) && method_exists($controller, $URL[2])) {
                    $this->method = $URL[2];
                }
                
                // Pass remaining URL parts as parameters
                call_user_func_array([$controller, $this->method], array_slice($URL, 3));
                return;
            }
        }

        // Fallback to original logic for top-level controllers
        $filename = "../app/controllers/" . ucfirst($URL[0]) . "Controller.php";

        if (file_exists($filename)) {
            require $filename;
            $this->controller = ucfirst($URL[0]) . "Controller";
        } else {
            require "../app/controllers/_404.php";
            $this->controller = "_404";
        }

        $controller = new $this->controller;

        if (!empty($URL[1]) && method_exists($controller, $URL[1])) {
            $this->method = $URL[1];
        }

        // Pass remaining URL parts as parameters
        call_user_func_array([$controller, $this->method], array_slice($URL, 2));
    }
}
