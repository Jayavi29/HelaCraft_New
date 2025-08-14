<?php

// Autoload model and controller classes automatically
spl_autoload_register(function ($classname) {
    // Try to load from controllers directory first
    if (strpos($classname, 'Controller') !== false) {
        $controllerFile = "../app/controllers/" . $classname . ".php";
        if (file_exists($controllerFile)) {
            require $controllerFile;
            return;
        }
    }
    
    // Fallback to models directory
    $modelFile = "../app/models/" . ucfirst($classname) . ".php";
    if (file_exists($modelFile)) {
        require $modelFile;
    }
});

// Include core config and helper files
require 'config.php';
require 'functions.php';
require 'database.php';
require 'model.php';
require 'controller.php';
require 'App.php';
