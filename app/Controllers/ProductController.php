<?php

class ProductController extends Controller
{
    // Default method for /product
    public function index($a = '$home', $b = 'index')
    {
        echo "product.php Welcome to the Product Page!";
        $this->views('product/product'); // Load the product view
    }
}
// Additional methods can be added here for different product actions