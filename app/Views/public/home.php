<!-- You can add some specific styles for the homepage -->
<style>
    .hero-section { background: #e9ecef; padding: 4rem 0; text-align: center; }
    .section-title { text-align: center; margin-bottom: 2rem; }
    .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; }
    .card { background: white; border: 1px solid #ddd; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    .card img { width: 100%; height: 200px; object-fit: cover; }
    .card-content { padding: 1rem; }
    .card h3 { margin-top: 0; }
    .card .price { font-weight: bold; color: #3498db; }
</style>

<!-- Promotional banner / hero section -->
<section class="hero-section">
    <div class="container">
        <h1>Discover Unique Handcrafted Treasures</h1>
        <p>Your one-stop marketplace for authentic goods from local artisans.</p>
    </div>
</section>

<div class="container" style="padding-top: 2rem;">
    <!-- Featured products -->
    <section class="featured-products">
        <h2 class="section-title">Featured Products</h2>
        <div class="grid">
            <?php foreach ($featuredProducts as $product): ?>
                <div class="card">
                    <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
                    <div class="card-content">
                        <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                        <p>by <?php echo htmlspecialchars($product['artisan']); ?></p>
                        <p class="price">$<?php echo htmlspecialchars($product['price']); ?></p>
                        <a href="/products/<?php echo $product['id']; ?>" class="button-secondary">View Details</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Upcoming workshops highlights -->
    <section class="upcoming-workshops" style="margin-top: 3rem;">
        <h2 class="section-title">Upcoming Workshops</h2>
        <div class="grid">
             <?php foreach ($upcomingWorkshops as $workshop): ?>
                <div class="card">
                    <div class="card-content">
                        <h3><?php echo htmlspecialchars($workshop['title']); ?></h3>
                        <p><strong>Type:</strong> <?php echo htmlspecialchars($workshop['type']); ?></p>
                        <p><strong>Date:</strong> <?php echo htmlspecialchars($workshop['date']); ?></p>
                        <a href="/workshops/<?php echo $workshop['id']; ?>" class="button-secondary">Learn More</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Live or upcoming auction previews -->
    <section class="live-auctions" style="margin-top: 3rem;">
        <h2 class="section-title">Live Auctions</h2>
        <div class="grid">
            <?php foreach ($liveAuctions as $auction): ?>
                <div class="card">
                    <div class="card-content">
                        <h3><?php echo htmlspecialchars($auction['title']); ?></h3>
                        <p><strong>Ends In:</strong> <span style="color: red;"><?php echo htmlspecialchars($auction['ends_in']); ?></span></p>
                        <a href="/auctions/<?php echo $auction['id']; ?>" class="button-secondary">View Auction</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>
```*(Note: For the images to show up, you would need to create an `/public/images/` folder and place files named `product1.jpg`, `product2.jpg` etc. inside it, or just use placeholders for now.)*

#### Action 4: Create the Login and Registration Views

**A) Create the Login View:** `/app/Views/public/login.php`

```html
<style>
    .form-container { max-width: 450px; margin: 2rem auto; padding: 2rem; background: #fff; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
    .form-group { margin-bottom: 1.5rem; }
    .form-group label { display: block; margin-bottom: 0.5rem; font-weight: bold; }
    .form-group input { width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
    .form-button { width: 100%; padding: 0.75rem; border: none; border-radius: 4px; background: #3498db; color: white; font-size: 1rem; cursor: pointer; }
    .form-link { text-align: center; margin-top: 1rem; }
</style>

<div class="container">
    <div class="form-container">
        <h2>Login to Your Account</h2>
        <form action="/login" method="POST"> <!-- The POST action will be implemented later -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="form-button">Login</button>
        </form>
        <div class="form-link">
            <a href="/forgot-password">Forgot Password?</a>
        </div>
    </div>
</div>