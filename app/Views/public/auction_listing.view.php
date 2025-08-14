<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auctions - HelaCraft</title>
    <link rel="stylesheet" href="/HelaCraft/public/assets/css/main.css">
    <link rel="stylesheet" href="/HelaCraft/public/assets/components/header.css">
    <link rel="stylesheet" href="/HelaCraft/public/assets/css/components/card.css">
    <link rel="stylesheet" href="/HelaCraft/public/assets/css/components/button.css">
    <link rel="stylesheet" href="/HelaCraft/public/assets/css/components/badge.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body style="background-color: var(--background); color: var(--foreground); min-height: 100vh; margin: 0; padding: 0; font-family: 'Geist', sans-serif;">
    
    <!-- Header -->
    <?php include __DIR__ . '/../customer/header.php'; ?>

    <!-- Main Content -->
    <main style="max-width: 1200px; margin: 0 auto; padding: 2rem; padding-top: 6rem;">
        
        <!-- Page Header -->
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 2rem;">
            <div>
                <h1 style="font-size: 2rem; font-weight: 600; margin: 0; color: var(--foreground);">Live Auctions</h1>
                <p style="color: var(--muted-foreground); margin: 0.5rem 0 0 0;">Bid on unique handcrafted items from talented artisans</p>
            </div>
            
            <!-- Auction Status Filter -->
            <div style="display: flex; gap: 1rem;">
                <button class="btn btn-outline" onclick="filterAuctions('live')">
                    <i class="fas fa-gavel" style="margin-right: 0.5rem;"></i>
                    Live Auctions
                </button>
                <button class="btn btn-secondary" onclick="filterAuctions('upcoming')">
                    <i class="fas fa-clock" style="margin-right: 0.5rem;"></i>
                    Upcoming
                </button>
                <button class="btn btn-secondary" onclick="filterAuctions('ended')">
                    <i class="fas fa-history" style="margin-right: 0.5rem;"></i>
                    Ended
                </button>
            </div>
        </div>

        <!-- Search and Filters Section -->
        <div style="margin-bottom: 2rem;">
            <!-- Search Bar -->
            <div style="margin-bottom: 1.5rem;">
                <div style="position: relative; max-width: 500px;">
                    <input type="text" 
                           placeholder="Search auctions..." 
                           style="width: 100%; padding: 0.75rem 1rem 0.75rem 3rem; border: 1px solid var(--border); border-radius: var(--radius); background-color: var(--card); color: var(--foreground); font-size: 0.875rem;">
                    <i class="fas fa-search" style="position: absolute; left: 1rem; top: 50%; transform: translateY(-50%); color: var(--muted-foreground);"></i>
                </div>
            </div>

            <!-- Category Filter -->
            <div style="display: flex; align-items: center; gap: 1rem;">
                <span style="font-weight: 500; color: var(--foreground);">Categories:</span>
                <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                    <button class="btn btn-outline" onclick="filterCategory('all')">All</button>
                    <button class="btn btn-secondary" onclick="filterCategory('pottery')">Pottery</button>
                    <button class="btn btn-secondary" onclick="filterCategory('jewelry')">Jewelry</button>
                    <button class="btn btn-secondary" onclick="filterCategory('textiles')">Textiles</button>
                    <button class="btn btn-secondary" onclick="filterCategory('woodwork')">Woodwork</button>
                    <button class="btn btn-secondary" onclick="filterCategory('metalwork')">Metalwork</button>
                </div>
            </div>
        </div>

        <!-- Auction Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 1.5rem;">
            
            <!-- Auction Item 1 -->
            <div class="card" style="position: relative; overflow: hidden;">
                <!-- Live Auction Badge -->
                <div style="position: absolute; top: 1rem; right: 1rem; background: linear-gradient(45deg, #ff4444, #ff6666); color: white; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem; font-weight: 600; z-index: 10;">
                    <i class="fas fa-circle" style="color: #fff; font-size: 0.5rem; margin-right: 0.25rem; animation: pulse 2s infinite;"></i>
                    LIVE
                </div>
                
                <img src="/HelaCraft/public/assets/images/pottery-vase.jpg" 
                     alt="Handcrafted Pottery Vase" 
                     style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px; margin-bottom: 1rem;"
                     onerror="this.src='https://via.placeholder.com/300x200/e9ecef/666?text=Pottery+Vase'">
                
                <div class="card-content">
                    <h3 class="card-subtitle">Handcrafted Pottery Vase</h3>
                    <p class="card-description">Beautiful ceramic vase with traditional Sri Lankan patterns</p>
                    
                    <!-- Auction Details -->
                    <div style="margin: 1rem 0;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="color: var(--muted-foreground); font-size: 0.875rem;">Current Bid:</span>
                            <span style="font-weight: 600; color: var(--primary);">Rs. 2,500</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="color: var(--muted-foreground); font-size: 0.875rem;">Time Left:</span>
                            <span style="font-weight: 600; color: var(--destructive);">2h 45m</span>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <span style="color: var(--muted-foreground); font-size: 0.875rem;">Bids:</span>
                            <span style="font-weight: 600;">12 bids</span>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <button class="btn btn-primary" style="width: 100%;" onclick="bidOnItem(1)">
                        <i class="fas fa-gavel" style="margin-right: 0.5rem;"></i>
                        Place Bid
                    </button>
                </div>
            </div>

            <!-- Auction Item 2 -->
            <div class="card" style="position: relative; overflow: hidden;">
                <!-- Live Auction Badge -->
                <div style="position: absolute; top: 1rem; right: 1rem; background: linear-gradient(45deg, #ff4444, #ff6666); color: white; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem; font-weight: 600; z-index: 10;">
                    <i class="fas fa-circle" style="color: #fff; font-size: 0.5rem; margin-right: 0.25rem; animation: pulse 2s infinite;"></i>
                    LIVE
                </div>
                
                <img src="/HelaCraft/public/assets/images/jewelry-set.jpg" 
                     alt="Silver Jewelry Set" 
                     style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px; margin-bottom: 1rem;"
                     onerror="this.src='https://via.placeholder.com/300x200/e9ecef/666?text=Jewelry+Set'">
                
                <div class="card-content">
                    <h3 class="card-subtitle">Traditional Silver Jewelry Set</h3>
                    <p class="card-description">Authentic handmade silver necklace and earrings with gemstones</p>
                    
                    <!-- Auction Details -->
                    <div style="margin: 1rem 0;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="color: var(--muted-foreground); font-size: 0.875rem;">Current Bid:</span>
                            <span style="font-weight: 600; color: var(--primary);">Rs. 8,750</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="color: var(--muted-foreground); font-size: 0.875rem;">Time Left:</span>
                            <span style="font-weight: 600; color: var(--destructive);">1h 23m</span>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <span style="color: var(--muted-foreground); font-size: 0.875rem;">Bids:</span>
                            <span style="font-weight: 600;">8 bids</span>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <button class="btn btn-primary" style="width: 100%;" onclick="bidOnItem(2)">
                        <i class="fas fa-gavel" style="margin-right: 0.5rem;"></i>
                        Place Bid
                    </button>
                </div>
            </div>

            <!-- Auction Item 3 -->
            <div class="card" style="position: relative; overflow: hidden;">
                <!-- Upcoming Auction Badge -->
                <div style="position: absolute; top: 1rem; right: 1rem; background: linear-gradient(45deg, #3b82f6, #60a5fa); color: white; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem; font-weight: 600; z-index: 10;">
                    <i class="fas fa-clock" style="margin-right: 0.25rem;"></i>
                    UPCOMING
                </div>
                
                <img src="/HelaCraft/public/assets/images/wooden-sculpture.jpg" 
                     alt="Wooden Sculpture" 
                     style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px; margin-bottom: 1rem;"
                     onerror="this.src='https://via.placeholder.com/300x200/e9ecef/666?text=Wood+Sculpture'">
                
                <div class="card-content">
                    <h3 class="card-subtitle">Handcarved Wooden Elephant</h3>
                    <p class="card-description">Exquisite ebony wood elephant sculpture with intricate details</p>
                    
                    <!-- Auction Details -->
                    <div style="margin: 1rem 0;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="color: var(--muted-foreground); font-size: 0.875rem;">Starting Bid:</span>
                            <span style="font-weight: 600; color: var(--primary);">Rs. 5,000</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="color: var(--muted-foreground); font-size: 0.875rem;">Starts In:</span>
                            <span style="font-weight: 600; color: var(--primary);">3h 15m</span>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <span style="color: var(--muted-foreground); font-size: 0.875rem;">Watchers:</span>
                            <span style="font-weight: 600;">24 watching</span>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <button class="btn btn-outline" style="width: 100%;" onclick="watchAuction(3)">
                        <i class="fas fa-eye" style="margin-right: 0.5rem;"></i>
                        Watch Auction
                    </button>
                </div>
            </div>

            <!-- Auction Item 4 -->
            <div class="card" style="position: relative; overflow: hidden;">
                <!-- Ended Auction Badge -->
                <div style="position: absolute; top: 1rem; right: 1rem; background: linear-gradient(45deg, #6b7280, #9ca3af); color: white; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem; font-weight: 600; z-index: 10;">
                    <i class="fas fa-check" style="margin-right: 0.25rem;"></i>
                    ENDED
                </div>
                
                <img src="/HelaCraft/public/assets/images/batik-art.jpg" 
                     alt="Batik Art Piece" 
                     style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px; margin-bottom: 1rem; opacity: 0.8;"
                     onerror="this.src='https://via.placeholder.com/300x200/e9ecef/666?text=Batik+Art'">
                
                <div class="card-content">
                    <h3 class="card-subtitle">Traditional Batik Wall Art</h3>
                    <p class="card-description">Authentic Sri Lankan batik featuring peacock motifs</p>
                    
                    <!-- Auction Details -->
                    <div style="margin: 1rem 0;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="color: var(--muted-foreground); font-size: 0.875rem;">Final Bid:</span>
                            <span style="font-weight: 600; color: var(--muted-foreground);">Rs. 12,500</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="color: var(--muted-foreground); font-size: 0.875rem;">Winner:</span>
                            <span style="font-weight: 600; color: var(--muted-foreground);">Priya K.</span>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <span style="color: var(--muted-foreground); font-size: 0.875rem;">Total Bids:</span>
                            <span style="font-weight: 600; color: var(--muted-foreground);">31 bids</span>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <button class="btn btn-secondary" style="width: 100%;" onclick="viewDetails(4)" disabled>
                        <i class="fas fa-info-circle" style="margin-right: 0.5rem;"></i>
                        View Details
                    </button>
                </div>
            </div>

            <!-- Auction Item 5 -->
            <div class="card" style="position: relative; overflow: hidden;">
                <!-- Live Auction Badge -->
                <div style="position: absolute; top: 1rem; right: 1rem; background: linear-gradient(45deg, #ff4444, #ff6666); color: white; padding: 0.25rem 0.75rem; border-radius: 1rem; font-size: 0.75rem; font-weight: 600; z-index: 10;">
                    <i class="fas fa-circle" style="color: #fff; font-size: 0.5rem; margin-right: 0.25rem; animation: pulse 2s infinite;"></i>
                    LIVE
                </div>
                
                <img src="/HelaCraft/public/assets/images/metal-lantern.jpg" 
                     alt="Brass Lantern" 
                     style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px; margin-bottom: 1rem;"
                     onerror="this.src='https://via.placeholder.com/300x200/e9ecef/666?text=Brass+Lantern'">
                
                <div class="card-content">
                    <h3 class="card-subtitle">Antique Brass Lantern</h3>
                    <p class="card-description">Vintage-style brass lantern with intricate engravings</p>
                    
                    <!-- Auction Details -->
                    <div style="margin: 1rem 0;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="color: var(--muted-foreground); font-size: 0.875rem;">Current Bid:</span>
                            <span style="font-weight: 600; color: var(--primary);">Rs. 4,200</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="color: var(--muted-foreground); font-size: 0.875rem;">Time Left:</span>
                            <span style="font-weight: 600; color: var(--destructive);">6h 12m</span>
                        </div>
                        <div style="display: flex; justify-content: space-between;">
                            <span style="color: var(--muted-foreground); font-size: 0.875rem;">Bids:</span>
                            <span style="font-weight: 600;">7 bids</span>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <button class="btn btn-primary" style="width: 100%;" onclick="bidOnItem(5)">
                        <i class="fas fa-gavel" style="margin-right: 0.5rem;"></i>
                        Place Bid
                    </button>
                </div>
            </div>

        </div>

        <!-- Load More Button -->
        <div style="text-align: center; margin-top: 3rem;">
            <button class="btn btn-outline" onclick="loadMore()">
                <i class="fas fa-plus" style="margin-right: 0.5rem;"></i>
                Load More Auctions
            </button>
        </div>

    </main>

    <!-- JavaScript for Interactivity -->
    <script>
        // CSS Animation for live badge pulse
        const style = document.createElement('style');
        style.textContent = `
            @keyframes pulse {
                0% { opacity: 1; }
                50% { opacity: 0.5; }
                100% { opacity: 1; }
            }
        `;
        document.head.appendChild(style);

        // Button click handlers (placeholder functions)
        function filterAuctions(status) {
            console.log('Filtering auctions by status:', status);
            // Update active button styling
            document.querySelectorAll('button').forEach(btn => {
                if (btn.textContent.toLowerCase().includes(status)) {
                    btn.className = 'btn btn-primary';
                } else if (btn.textContent.toLowerCase().includes('live') || 
                          btn.textContent.toLowerCase().includes('upcoming') || 
                          btn.textContent.toLowerCase().includes('ended')) {
                    btn.className = 'btn btn-secondary';
                }
            });
        }

        function filterCategory(category) {
            console.log('Filtering by category:', category);
            // Update active category button styling
            const categoryButtons = document.querySelectorAll('button[onclick^="filterCategory"]');
            categoryButtons.forEach(btn => {
                if (btn.textContent.toLowerCase() === category) {
                    btn.className = 'btn btn-primary';
                } else {
                    btn.className = 'btn btn-secondary';
                }
            });
        }

        function bidOnItem(itemId) {
            alert(`Opening bid dialog for auction item ${itemId}`);
            // Here you would open a bid modal or redirect to bid page
        }

        function watchAuction(itemId) {
            alert(`Added auction item ${itemId} to watchlist`);
            // Here you would add to watchlist functionality
        }

        function viewDetails(itemId) {
            alert(`Viewing details for auction item ${itemId}`);
            // Here you would redirect to auction details page
        }

        function loadMore() {
            alert('Loading more auctions...');
            // Here you would load more auction items via AJAX
        }

        // Set initial active state
        filterAuctions('live');
        filterCategory('all');
    </script>

</body>
</html>
