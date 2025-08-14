<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - HelaCraft</title>
    <link rel="stylesheet" href="/HelaCraft/public/assets/css/main.css">
    <link rel="stylesheet" href="/HelaCraft/public/assets/components/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body style="background-color: var(--background); color: var(--foreground); min-height: 100vh; margin: 0; padding: 0; font-family: 'Geist', sans-serif;">
    
    <!-- Header -->
    <?php include __DIR__ . '/../customer/header.php'; ?>

    <!-- Main Content -->
    <main style="max-width: 1200px; margin: 0 auto; padding: 2rem; padding-top: 6rem;">
        
        <!-- Search and Filters Section -->
        <div style="margin-bottom: 2rem;">
            <!-- Search Bar -->
            <div style="margin-bottom: 1.5rem;">
                <div style="position: relative; max-width: 500px;">
                    <input type="text" 
                           placeholder="Search for handmade crafts" 
                           style="width: 100%; box-sizing: border-box; padding: 0.75rem 1rem 0.75rem 3rem; border: 1px solid var(--border); border-radius: var(--radius); background-color: var(--card); color: var(--foreground); font-size: 0.875rem;"
                           value="<?php echo htmlspecialchars($search_query ?? ''); ?>">
                    <i class="fas fa-search" style="position: absolute; left: 1rem; top: 50%; transform: translateY(-50%); color: var(--muted-foreground);"></i>
                </div>
            </div>

            <!-- Filter Section -->
            <div style="display: flex; align-items: center; gap: 2rem; margin-bottom: 1.5rem;">
                <h1 style="font-size: 1.5rem; font-weight: 600; margin: 0; color: var(--foreground);">All Crafts</h1>
                
                <div style="display: flex; align-items: center; gap: 1rem; margin-left: auto;">
                    <!-- Category Filter -->
                    <div style="position: relative;">
                        <select style="padding: 0.5rem 2rem 0.5rem 0.75rem; border: 1px solid var(--border); border-radius: var(--radius); background-color: var(--card); color: var(--foreground); font-size: 0.875rem; cursor: pointer;">
                            <option value="">Category</option>
                            <option value="baskets">Baskets</option>
                            <option value="pottery">Pottery</option>
                            <option value="textiles">Textiles</option>
                            <option value="jewelry">Jewelry</option>
                        </select>
                        <i class="fas fa-chevron-down" style="position: absolute; right: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--muted-foreground); pointer-events: none;"></i>
                    </div>

                    <!-- Price Range Filter -->
                    <div style="position: relative;">
                        <select style="padding: 0.5rem 2rem 0.5rem 0.75rem; border: 1px solid var(--border); border-radius: var(--radius); background-color: var(--card); color: var(--foreground); font-size: 0.875rem; cursor: pointer;">
                            <option value="">Price Range</option>
                            <option value="0-1000">Rs. 0 - 1,000</option>
                            <option value="1000-5000">Rs. 1,000 - 5,000</option>
                            <option value="5000-10000">Rs. 5,000 - 10,000</option>
                            <option value="10000+">Rs. 10,000+</option>
                        </select>
                        <i class="fas fa-chevron-down" style="position: absolute; right: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--muted-foreground); pointer-events: none;"></i>
                    </div>

                    <!-- Artisan Filter -->
                    <div style="position: relative;">
                        <select style="padding: 0.5rem 2rem 0.5rem 0.75rem; border: 1px solid var(--border); border-radius: var(--radius); background-color: var(--card); color: var(--foreground); font-size: 0.875rem; cursor: pointer;">
                            <option value="">Artisan</option>
                            <option value="john-doe">John Doe</option>
                            <option value="jane-smith">Jane Smith</option>
                            <option value="mike-johnson">Mike Johnson</option>
                        </select>
                        <i class="fas fa-chevron-down" style="position: absolute; right: 0.75rem; top: 50%; transform: translateY(-50%); color: var(--muted-foreground); pointer-events: none;"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 2rem;">
            
            <?php 
            $products = $products ?? [
                ['id' => 1, 'name' => 'Cane Basket', 'price' => 4500, 'image' => '/HelaCraft/public/assets/images/products/basket1.jpg', 'artisan' => 'John Doe'],
                ['id' => 2, 'name' => 'Cane Basket', 'price' => 3900, 'image' => '/HelaCraft/public/assets/images/products/basket2.jpg', 'artisan' => 'Jane Smith'],
                ['id' => 3, 'name' => 'Cane Basket', 'price' => 4200, 'image' => '/HelaCraft/public/assets/images/products/basket3.jpg', 'artisan' => 'Mike Johnson'],
                ['id' => 4, 'name' => 'Cane Basket', 'price' => 5000, 'image' => '/HelaCraft/public/assets/images/products/basket4.jpg', 'artisan' => 'Sarah Wilson'],
                ['id' => 5, 'name' => 'Cane Basket', 'price' => 4100, 'image' => '/HelaCraft/public/assets/images/products/basket5.jpg', 'artisan' => 'Tom Brown'],
                ['id' => 6, 'name' => 'Cane Basket', 'price' => 4600, 'image' => '/HelaCraft/public/assets/images/products/basket6.jpg', 'artisan' => 'Lisa Davis']
            ];
            
            foreach ($products as $product): 
            ?>
            
            <!-- Product Card -->
            <div class="card" style="cursor: pointer; transition: all 0.2s ease;" 
                 onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 2px 8px rgba(0,0,0,0.04)'"
                 onclick="window.location.href='/HelaCraft/public/product/<?php echo $product['id']; ?>'">
                
                <div class="card-content" style="padding: 0;">
                    <!-- Product Image -->
                    <div style="width: 100%; height: 200px; background-color: var(--muted); border-radius: var(--radius) var(--radius) 0 0; overflow: hidden; position: relative;">
                        <img src="<?php echo $product['image']; ?>" 
                             alt="<?php echo htmlspecialchars($product['name']); ?>"
                             style="width: 100%; height: 100%; object-fit: cover;"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                        <div style="display: none; width: 100%; height: 100%; align-items: center; justify-content: center; background-color: var(--muted); position: absolute; top: 0; left: 0;">
                            <i class="fas fa-basket-shopping" style="font-size: 3rem; color: var(--muted-foreground);"></i>
                        </div>
                    </div>
                    
                    <!-- Product Info -->
                    <div style="padding: 1rem;">
                        <h3 style="margin: 0 0 0.5rem 0; font-size: 1rem; font-weight: 600; color: var(--foreground);">
                            <?php echo htmlspecialchars($product['name']); ?>
                        </h3>
                        <p style="margin: 0 0 0.75rem 0; font-size: 0.875rem; color: var(--muted-foreground);">
                            by <?php echo htmlspecialchars($product['artisan']); ?>
                        </p>
                        <div style="font-size: 1.1rem; font-weight: 700; color: var(--primary);">
                            Rs. <?php echo number_format($product['price'], 2); ?>
                        </div>
                        
                        <!-- Add to Cart Button -->
                        <button class="btn btn-primary btn-sm" 
                                style="width: 100%; margin-top: 0.75rem;"
                                onclick="event.stopPropagation(); addToCart(<?php echo $product['id']; ?>)">
                            <i class="fas fa-shopping-cart" style="margin-right: 0.5rem;"></i>
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            
            <?php endforeach; ?>
        </div>

        <!-- Load More Button -->
        <div style="text-align: center; margin-top: 3rem;">
            <button class="btn btn-outline" style="padding: 0.75rem 2rem;">
                Load More Products
            </button>
        </div>

    </main>

    <script>
        // Add to cart functionality
        function addToCart(productId) {
            // Show success message
            const toast = document.createElement('div');
            toast.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background-color: var(--success);
                color: var(--primary-foreground);
                padding: 1rem 1.5rem;
                border-radius: var(--radius);
                z-index: 1000;
                font-weight: 500;
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            `;
            toast.textContent = 'Added to cart successfully!';
            document.body.appendChild(toast);
            
            setTimeout(() => {
                toast.remove();
            }, 3000);
        }

        // Search functionality
        document.querySelector('input[type="text"]').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                const searchTerm = this.value;
                // Implement search logic here
                console.log('Searching for:', searchTerm);
            }
        });

        // Filter change handlers
        document.querySelectorAll('select').forEach(select => {
            select.addEventListener('change', function() {
                // Implement filter logic here
                console.log('Filter changed:', this.value);
            });
        });
    </script>

</body>
</html>
