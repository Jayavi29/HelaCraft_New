<?php

class ShopController extends Controller
{
    public function index()
    {
        // Sample shop data
        $data = [
            'search_query' => $_GET['search'] ?? '',
            'category_filter' => $_GET['category'] ?? '',
            'price_filter' => $_GET['price'] ?? '',
            'artisan_filter' => $_GET['artisan'] ?? '',
            'products' => [
                [
                    'id' => 1,
                    'name' => 'Cane Basket',
                    'price' => 4500,
                    'image' => '/HelaCraft/public/assets/images/products/basket1.jpg',
                    'artisan' => 'John Doe',
                    'category' => 'baskets',
                    'description' => 'Handwoven cane basket perfect for storage and decoration',
                    'in_stock' => true,
                    'rating' => 4.5
                ],
                [
                    'id' => 2,
                    'name' => 'Cane Basket',
                    'price' => 3900,
                    'image' => '/HelaCraft/public/assets/images/products/basket2.jpg',
                    'artisan' => 'Jane Smith',
                    'category' => 'baskets',
                    'description' => 'Traditional style cane basket with modern appeal',
                    'in_stock' => true,
                    'rating' => 4.3
                ],
                [
                    'id' => 3,
                    'name' => 'Cane Basket',
                    'price' => 4200,
                    'image' => '/HelaCraft/public/assets/images/products/basket3.jpg',
                    'artisan' => 'Mike Johnson',
                    'category' => 'baskets',
                    'description' => 'Durable cane basket for everyday use',
                    'in_stock' => true,
                    'rating' => 4.7
                ],
                [
                    'id' => 4,
                    'name' => 'Cane Basket',
                    'price' => 5000,
                    'image' => '/HelaCraft/public/assets/images/products/basket4.jpg',
                    'artisan' => 'Sarah Wilson',
                    'category' => 'baskets',
                    'description' => 'Premium quality cane basket with intricate weaving',
                    'in_stock' => true,
                    'rating' => 4.8
                ],
                [
                    'id' => 5,
                    'name' => 'Cane Basket',
                    'price' => 4100,
                    'image' => '/HelaCraft/public/assets/images/products/basket5.jpg',
                    'artisan' => 'Tom Brown',
                    'category' => 'baskets',
                    'description' => 'Eco-friendly cane basket made from sustainable materials',
                    'in_stock' => true,
                    'rating' => 4.4
                ],
                [
                    'id' => 6,
                    'name' => 'Cane Basket',
                    'price' => 4600,
                    'image' => '/HelaCraft/public/assets/images/products/basket6.jpg',
                    'artisan' => 'Lisa Davis',
                    'category' => 'baskets',
                    'description' => 'Artisanal cane basket with unique design patterns',
                    'in_stock' => true,
                    'rating' => 4.6
                ],
                [
                    'id' => 7,
                    'name' => 'Clay Pottery Vase',
                    'price' => 3200,
                    'image' => '/HelaCraft/public/assets/images/products/pottery1.jpg',
                    'artisan' => 'Anna Garcia',
                    'category' => 'pottery',
                    'description' => 'Handcrafted clay vase with traditional glazing',
                    'in_stock' => true,
                    'rating' => 4.5
                ],
                [
                    'id' => 8,
                    'name' => 'Wooden Carved Bowl',
                    'price' => 2800,
                    'image' => '/HelaCraft/public/assets/images/products/wood1.jpg',
                    'artisan' => 'David Wilson',
                    'category' => 'woodwork',
                    'description' => 'Beautiful hand-carved wooden bowl',
                    'in_stock' => true,
                    'rating' => 4.3
                ]
            ],
            'categories' => [
                ['id' => 'baskets', 'name' => 'Baskets', 'count' => 6],
                ['id' => 'pottery', 'name' => 'Pottery', 'count' => 12],
                ['id' => 'textiles', 'name' => 'Textiles', 'count' => 8],
                ['id' => 'jewelry', 'name' => 'Jewelry', 'count' => 15],
                ['id' => 'woodwork', 'name' => 'Woodwork', 'count' => 10]
            ],
            'artisans' => [
                ['id' => 'john-doe', 'name' => 'John Doe', 'speciality' => 'Basketry'],
                ['id' => 'jane-smith', 'name' => 'Jane Smith', 'speciality' => 'Textiles'],
                ['id' => 'mike-johnson', 'name' => 'Mike Johnson', 'speciality' => 'Pottery'],
                ['id' => 'sarah-wilson', 'name' => 'Sarah Wilson', 'speciality' => 'Jewelry']
            ]
        ];
        
        // Apply filters if any
        if (!empty($data['category_filter'])) {
            $data['products'] = array_filter($data['products'], function($product) use ($data) {
                return $product['category'] === $data['category_filter'];
            });
        }
        
        if (!empty($data['search_query'])) {
            $data['products'] = array_filter($data['products'], function($product) use ($data) {
                return stripos($product['name'], $data['search_query']) !== false || 
                       stripos($product['description'], $data['search_query']) !== false ||
                       stripos($product['artisan'], $data['search_query']) !== false;
            });
        }
        
        // Extract data to variables for the view
        extract($data);
        
        $this->views('public/shop');
    }
    
    public function product($id)
    {
        // Individual product page
        $data = [
            'product' => [
                'id' => $id,
                'name' => 'Cane Basket',
                'price' => 4500,
                'images' => [
                    '/HelaCraft/public/assets/images/products/basket1.jpg',
                    '/HelaCraft/public/assets/images/products/basket1-2.jpg',
                    '/HelaCraft/public/assets/images/products/basket1-3.jpg'
                ],
                'artisan' => 'John Doe',
                'category' => 'baskets',
                'description' => 'This beautiful handwoven cane basket is perfect for storage and decoration. Made from sustainable materials using traditional weaving techniques passed down through generations.',
                'features' => [
                    'Handwoven from natural cane',
                    'Eco-friendly and sustainable',
                    'Perfect for storage or decoration',
                    'Durable and long-lasting',
                    'Traditional craftsmanship'
                ],
                'dimensions' => [
                    'Height' => '25 cm',
                    'Width' => '30 cm',
                    'Depth' => '20 cm'
                ],
                'in_stock' => true,
                'stock_quantity' => 5,
                'rating' => 4.5,
                'reviews_count' => 23
            ]
        ];
        
        extract($data);
        $this->views('public/product_detail');
    }
}
