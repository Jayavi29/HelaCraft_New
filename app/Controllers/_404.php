<?php

class _404 extends Controller
{
    // Default method for 404 errors
    public function index()
    {
        echo "_404.php Welcome to the 404 controller Page!";
        $this->views('_404'); // Load the 404 view
    }
}
