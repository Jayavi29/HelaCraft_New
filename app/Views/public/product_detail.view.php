<!DOCTYPE html>
<html lang="en">
           <!-- Navigation -->
            <nav style="display: flex; align-items: center; gap: 2rem;">
                <a href="/HelaCraft/customer/dashboard" style="text-decoration: none; color: var(--foreground); font-weight: 500;">Dashboard</a>
                <a href="/HelaCraft/customer/shop" style="text-decoration: none; color: var(--foreground); font-weight: 500;">Shop</a>
                <a href="/HelaCraft/customer/auctions" style="text-decoration: none; color: var(--foreground); font-weight: 500;">Auctions</a>
                <a href="/HelaCraft/customer/workshops" style="text-decoration: none; color: var(--foreground); font-weight: 500;">Workshop</a>
                <a href="/HelaCraft/public/customize" style="text-decoration: none; color: var(--foreground); font-weight: 500;">Customize Item</a>
            </nav>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($product['name']); ?> - HelaCraft</title>
    <link rel="stylesheet" href="/HelaCraft/public/assets/css/main.css">
    <link rel="stylesheet" href="/HelaCraft/public/assets/css/components/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body style="background-color: var(--background); color: var(--foreground); min-height: 100vh; margin: 0; padding: 0; font-family: 'Geist', sans-serif;">
    
    <!-- Header -->
    <header style="background-color: var(--card); border-bottom: 1px solid var(--border); padding: 1rem 0; position: sticky; top: 0; z-index: 100;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem; display: flex; align-items: center; justify-content: space-between;">
            <!-- Logo -->
            <div style="display: flex; align-items: center; gap: 0.5rem;">
                <div style="width: 32px; height: 32px; background-color: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-leaf" style="color: var(--primary-foreground); font-size: 16px;"></i>
                </div>
                <span style="font-size: 1.25rem; font-weight: 700; color: var(--foreground);">HelaCraft</span>
            </div>

            <!-- Navigation -->
            <nav style="display: flex; align-items: center; gap: 2rem;">
                <a href="/HelaCraft/public/home" style="text-decoration: none; color: var(--foreground); font-weight: 500;">Home</a>
                <a href="/HelaCraft/public/shop" style="text-decoration: none; color: var(--primary); font-weight: 600;">Shop</a>
                <a href="/HelaCraft/public/auctions" style="text-decoration: none; color: var(--foreground); font-weight: 500;">Auctions</a>
                <a href="/HelaCraft/public/workshops" style="text-decoration: none; color: var(--foreground); font-weight: 500;">Workshop</a>
                <a href="/HelaCraft/public/customize" style="text-decoration: none; color: var(--foreground); font-weight: 500;">Customize Item</a>
            </nav>

            <!-- User Info -->
            <div style="display: flex; align-items: center; gap: 1rem;">
                <a href="/HelaCraft/public/cart" style="text-decoration: none; color: var(--foreground);">
                    <i class="fas fa-shopping-cart" style="font-size: 1.2rem;"></i>
                </a>
                <div style="display: flex; align-items: center; gap: 0.5rem;">
                    <div style="width: 32px; height: 32px; background-color: var(--muted); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <span style="font-size: 0.875rem; font-weight: 500;">MS</span>
                    </div>
                    <div>
                        <div style="font-size: 0.875rem; font-weight: 600;">MS Thalagala</div>
                        <div style="font-size: 0.75rem; color: var(--muted-foreground);">Customer</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div style="max-width: 1200px; margin: 0 auto; padding: 1rem 2rem;">
        <nav style="font-size: 0.875rem; color: var(--muted-foreground);">
            <a href="/HelaCraft/customer/dashboard" style="text-decoration: none; color: var(--muted-foreground);">Dashboard</a>
            <span style="margin: 0 0.5rem;">/</span>
            <a href="/HelaCraft/public/shop" style="text-decoration: none; color: var(--muted-foreground);">Shop</a>
            <span style="margin: 0 0.5rem;">/</span>
            <span style="color: var(--foreground);"><?php echo htmlspecialchars($product['name']); ?></span>
        </nav>
    </div>

    <!-- Main Content -->
    <main style="max-width: 1200px; margin: 0 auto; padding: 0 2rem 2rem;">
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; margin-bottom: 3rem;">
            
            <!-- Product Images -->
            <div>
                <!-- Main Image -->
                <div style="margin-bottom: 1rem;">
                    <div style="width: 100%; height: 400px; background-color: var(--muted); border-radius: var(--radius); overflow: hidden;">
                        <img id="mainImage" 
                             src="<?php echo $product['images'][0] ?? '/HelaCraft/public/assets/images/products/placeholder.jpg'; ?>" 
                             alt="<?php echo htmlspecialchars($product['name']); ?>"
                             style="width: 100%; height: 100%; object-fit: cover;"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                        <div style="display: none; width: 100%; height: 100%; align-items: center; justify-content: center; background-color: var(--muted);">
                            <i class="fas fa-basket-shopping" style="font-size: 4rem; color: var(--muted-foreground);"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Thumbnail Images -->
                <div style="display: flex; gap: 0.5rem;">
                    <?php foreach ($product['images'] as $index => $image): ?>
                    <div style="width: 80px; height: 80px; background-color: var(--muted); border-radius: var(--radius); overflow: hidden; cursor: pointer; border: 2px solid transparent;"
                         onclick="changeMainImage('<?php echo $image; ?>', this)"
                         onmouseover="this.style.borderColor='var(--primary)'"
                         onmouseout="this.style.borderColor='transparent'">
                        <img src="<?php echo $image; ?>" 
                             alt="<?php echo htmlspecialchars($product['name']); ?> view <?php echo $index + 1; ?>"
                             style="width: 100%; height: 100%; object-fit: cover;"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                        <div style="display: none; width: 100%; height: 100%; align-items: center; justify-content: center; background-color: var(--muted);">
                            <i class="fas fa-image" style="color: var(--muted-foreground);"></i>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Product Info -->
            <div>
                <h1 style="font-size: 2rem; font-weight: 600; margin: 0 0 0.5rem 0; color: var(--foreground);">
                    <?php echo htmlspecialchars($product['name']); ?>
                </h1>
                
                <p style="margin: 0 0 1rem 0; color: var(--muted-foreground);">
                    by <span style="color: var(--primary); font-weight: 500;"><?php echo htmlspecialchars($product['artisan']); ?></span>
                </p>

                <!-- Rating -->
                <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 1rem;">
                    <div style="display: flex; gap: 0.125rem;">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <i class="fas fa-star" style="color: <?php echo $i <= $product['rating'] ? 'var(--chart-4)' : 'var(--muted)'; ?>; font-size: 0.875rem;"></i>
                        <?php endfor; ?>
                    </div>
                    <span style="font-size: 0.875rem; color: var(--muted-foreground);">
                        <?php echo $product['rating']; ?> (<?php echo $product['reviews_count']; ?> reviews)
                    </span>
                </div>

                <!-- Price -->
                <div style="font-size: 2rem; font-weight: 700; color: var(--primary); margin-bottom: 1.5rem;">
                    Rs. <?php echo number_format($product['price'], 2); ?>
                </div>

                <!-- Description -->
                <div style="margin-bottom: 2rem;">
                    <h3 style="font-size: 1.1rem; font-weight: 600; margin: 0 0 0.5rem 0; color: var(--foreground);">Description</h3>
                    <p style="margin: 0; line-height: 1.6; color: var(--muted-foreground);">
                        <?php echo htmlspecialchars($product['description']); ?>
                    </p>
                </div>

                <!-- Features -->
                <div style="margin-bottom: 2rem;">
                    <h3 style="font-size: 1.1rem; font-weight: 600; margin: 0 0 0.75rem 0; color: var(--foreground);">Features</h3>
                    <ul style="margin: 0; padding-left: 1.25rem; color: var(--muted-foreground);">
                        <?php foreach ($product['features'] as $feature): ?>
                        <li style="margin-bottom: 0.25rem;"><?php echo htmlspecialchars($feature); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Dimensions -->
                <div style="margin-bottom: 2rem;">
                    <h3 style="font-size: 1.1rem; font-weight: 600; margin: 0 0 0.75rem 0; color: var(--foreground);">Dimensions</h3>
                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem;">
                        <?php foreach ($product['dimensions'] as $dimension => $value): ?>
                        <div style="text-align: center; padding: 0.75rem; background-color: var(--muted); border-radius: var(--radius);">
                            <div style="font-size: 0.75rem; color: var(--muted-foreground); margin-bottom: 0.25rem;"><?php echo $dimension; ?></div>
                            <div style="font-weight: 600; color: var(--foreground);"><?php echo $value; ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Stock Status -->
                <div style="margin-bottom: 1.5rem;">
                    <?php if ($product['in_stock']): ?>
                        <span style="color: var(--success); font-weight: 500;">
                            <i class="fas fa-check-circle" style="margin-right: 0.5rem;"></i>
                            In Stock (<?php echo $product['stock_quantity']; ?> available)
                        </span>
                    <?php else: ?>
                        <span style="color: var(--destructive); font-weight: 500;">
                            <i class="fas fa-times-circle" style="margin-right: 0.5rem;"></i>
                            Out of Stock
                        </span>
                    <?php endif; ?>
                </div>

                <!-- Actions -->
                <div style="display: flex; gap: 1rem;">
                    <button class="btn btn-primary" style="flex: 1; padding: 0.75rem 1.5rem;"
                            onclick="addToCart(<?php echo $product['id']; ?>)"
                            <?php echo !$product['in_stock'] ? 'disabled' : ''; ?>>
                        <i class="fas fa-shopping-cart" style="margin-right: 0.5rem;"></i>
                        Add to Cart
                    </button>
                    
                    <button class="btn btn-outline" style="padding: 0.75rem;"
                            onclick="toggleWishlist(<?php echo $product['id']; ?>)">
                        <i class="fas fa-heart"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Related Products -->
        <div>
            <h2 style="font-size: 1.5rem; font-weight: 600; margin: 0 0 1.5rem 0; color: var(--foreground);">
                Related Products
            </h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem;">
                <!-- Related products would be dynamically loaded here -->
                <div class="card" style="cursor: pointer;">
                    <div class="card-content" style="padding: 0;">
                        <div style="width: 100%; height: 150px; background-color: var(--muted); border-radius: var(--radius) var(--radius) 0 0;"></div>
                        <div style="padding: 1rem;">
                            <h4 style="margin: 0 0 0.5rem 0; font-size: 0.9rem; color: var(--foreground);">Similar Basket</h4>
                            <p style="margin: 0 0 0.5rem 0; font-size: 0.75rem; color: var(--muted-foreground);">by Jane Smith</p>
                            <div style="font-weight: 600; color: var(--primary);">Rs. 3,900.00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script>
        function changeMainImage(imageSrc, thumbnail) {
            document.getElementById('mainImage').src = imageSrc;
            
            // Remove active state from all thumbnails
            document.querySelectorAll('[onclick*="changeMainImage"]').forEach(thumb => {
                thumb.style.borderColor = 'transparent';
            });
            
            // Add active state to clicked thumbnail
            thumbnail.style.borderColor = 'var(--primary)';
        }

        function addToCart(productId) {
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
            `;
            toast.textContent = 'Added to cart successfully!';
            document.body.appendChild(toast);
            
            setTimeout(() => toast.remove(), 3000);
        }

        function toggleWishlist(productId) {
            const button = event.target.closest('button');
            const icon = button.querySelector('i');
            
            if (icon.classList.contains('fas')) {
                icon.classList.remove('fas');
                icon.classList.add('far');
                button.style.color = 'var(--muted-foreground)';
            } else {
                icon.classList.remove('far');
                icon.classList.add('fas');
                button.style.color = 'var(--destructive)';
            }
        }

        // Set first thumbnail as active on load
        document.addEventListener('DOMContentLoaded', function() {
            const firstThumbnail = document.querySelector('[onclick*="changeMainImage"]');
            if (firstThumbnail) {
                firstThumbnail.style.borderColor = 'var(--primary)';
            }
        });
    </script>

</body>
</html>
