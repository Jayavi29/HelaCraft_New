<?php

class CartController extends Controller
{
    public function index()
    {
        // Sample cart data
        $data = [
            'cart_items' => [
                [
                    'id' => 1,
                    'product_id' => 1,
                    'name' => 'Cane Basket',
                    'price' => 4500,
                    'quantity' => 2,
                    'image' => '/HelaCraft/public/assets/images/products/basket1.jpg',
                    'artisan' => 'John Doe',
                    'subtotal' => 9000
                ],
                [
                    'id' => 2,
                    'product_id' => 3,
                    'name' => 'Cane Basket',
                    'price' => 4200,
                    'quantity' => 1,
                    'image' => '/HelaCraft/public/assets/images/products/basket3.jpg',
                    'artisan' => 'Mike Johnson',
                    'subtotal' => 4200
                ]
            ],
            'cart_summary' => [
                'subtotal' => 13200,
                'shipping' => 500,
                'tax' => 1320,
                'total' => 15020
            ]
        ];
        
        extract($data);
        $this->views('customer/cart');
    }
    
    public function add()
    {
        // Handle AJAX add to cart requests
        header('Content-Type: application/json');
        
        $product_id = $_POST['product_id'] ?? null;
        $quantity = $_POST['quantity'] ?? 1;
        
        if ($product_id) {
            // In a real application, you'd save to database or session
            echo json_encode([
                'success' => true,
                'message' => 'Item added to cart successfully',
                'cart_count' => 3 // Example cart count
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Invalid product'
            ]);
        }
    }
    
    public function remove()
    {
        // Handle remove from cart
        header('Content-Type: application/json');
        
        $cart_item_id = $_POST['cart_item_id'] ?? null;
        
        if ($cart_item_id) {
            echo json_encode([
                'success' => true,
                'message' => 'Item removed from cart'
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Invalid cart item'
            ]);
        }
    }
    
    public function update()
    {
        // Handle quantity updates
        header('Content-Type: application/json');
        
        $cart_item_id = $_POST['cart_item_id'] ?? null;
        $quantity = $_POST['quantity'] ?? 1;
        
        if ($cart_item_id && $quantity > 0) {
            echo json_encode([
                'success' => true,
                'message' => 'Cart updated successfully'
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => 'Invalid update request'
            ]);
        }
    }
}
