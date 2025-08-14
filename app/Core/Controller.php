<?php

class Controller
{
    // Load a view file by name
    public function views($name)
    {
        $filename = "../app/views/" . $name . ".view.php";

        if (file_exists($filename)) {
            require $filename;
        } else {
            // Load fallback 404 view if the view file doesn't exist
            $filename = "../app/views/_404.view.php";
            require $filename;
        }
    }
}
