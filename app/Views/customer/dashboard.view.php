<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard - HelaCraft</title>
    <link rel="stylesheet" href="/HelaCraft/public/assets/css/main.css">
    <link rel="stylesheet" href="/HelaCraft/public/assets/components/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body style="background-color: var(--background); color: var(--foreground); min-height: 100vh; margin: 0; padding: 0; font-family: 'Geist', sans-serif;">
    
    <!-- Header at the top of the page -->
    <?php include __DIR__ . '/header.php'; ?>
    
    <!-- Main Container with sidebar and content -->
    <div style="display: flex; min-height: calc(100vh - 80px); margin-top: 80px;">
        
        
        
        <!-- Main Content Area -->
        <div style="flex: 1; padding: 2rem;">
            
        

            <!-- Stats Cards -->
            <div class="mb-6">
                <h2 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 1rem; color: var(--foreground);">
                    Your Status
                </h2>

                <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1.5rem;">
                    
                    <!-- Card 1: Total Orders -->
                    <div class="card">
                        <div class="card-content">
                            <p class="card-title">Total Orders</p>
                            <h3 class="card-title text-primary">24</h3>
                            <span class="card-subtitle">Active</span>
                        </div>
                    </div>

                    <!-- Card 2: Auction Items -->
                    <div class="card">
                        <div class="card-content">
                            <p class="card-title">Auction Items</p>
                            <h3 class="card-title text-primary">8</h3>
                            <span class="card-subtitle">Bidding</span>
                        </div>
                    </div>

                    <!-- Card 3: Workshop Enrollments -->
                    <div class="card">
                        <div class="card-content">
                            <p class="card-title">Workshops</p>
                            <h3 class="card-title text-primary">5</h3>
                            <span class="card-subtitle">Enrolled</span>
                        </div>
                    </div>

                    <!-- Card 4: Custom Requests -->
                    <div class="card">
                        <div class="card-content">
                            <p class="card-title">Custom Requests</p>
                            <h3 class="card-title text-primary">3</h3>
                            <span class="card-subtitle">Pending</span>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="mb-6">
                <h2 style="font-size: 1.5rem; font-weight: 600; margin-bottom: 1rem; color: var(--foreground);">
                    Quick Actions
                </h2>
                
                <!-- Workshops Section -->
                <div style="margin-bottom: 2rem;">
                    <h3 style="font-size: 1.2rem; font-weight: 500; margin-bottom: 1rem; color: var(--foreground);">
                        Workshops
                    </h3>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1rem;">
                        
                        <div class="card" style="cursor: pointer; transition: transform 0.2s ease;" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                            <div class="card-content">
                                <div style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <div style="width: 40px; height: 40px; background-color: #8B4513; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                        <i class="fas fa-clay-potte" style="color: white; font-size: 1.2rem;">🏺</i>
                                    </div>
                                    <div>
                                        <h4 style="margin: 0; font-weight: 600;">Pottery Workshop</h4>
                                        <p style="margin: 0; font-size: 0.875rem; color: var(--muted-foreground);">Learn pottery from local artisans</p>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-sm" style="width: 100%;">
                                    <i class="fas fa-calendar-plus" style="margin-right: 0.5rem;"></i>
                                    Book Now
                                </button>
                            </div>
                        </div>

                        <div class="card" style="cursor: pointer; transition: transform 0.2s ease;" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                            <div class="card-content">
                                <div style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <div style="width: 40px; height: 40px; background-color: #D2691E; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                        <i class="fas fa-hammer" style="color: white; font-size: 1.2rem;">🏺</i>
                                    </div>
                                    <div>
                                        <h4 style="margin: 0; font-weight: 600;">Ceramics Workshop</h4>
                                        <p style="margin: 0; font-size: 0.875rem; color: var(--muted-foreground);">Learn pottery from local artisans</p>
                                    </div>
                                </div>
                                <button class="btn btn-secondary btn-sm" style="width: 100%;">
                                    <i class="fas fa-calendar-plus" style="margin-right: 0.5rem;"></i>
                                    Book Now
                                </button>
                            </div>
                        </div>

                        <div class="card" style="cursor: pointer; transition: transform 0.2s ease;" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                            <div class="card-content">
                                <div style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <div style="width: 40px; height: 40px; background-color: #8B4513; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                        <i class="fas fa-tools" style="color: white; font-size: 1.2rem;">🔨</i>
                                    </div>
                                    <div>
                                        <h4 style="margin: 0; font-weight: 600;">Sculpting Workshop</h4>
                                        <p style="margin: 0; font-size: 0.875rem; color: var(--muted-foreground);">Learn sculpting from local artisans</p>
                                    </div>
                                </div>
                                <button class="btn btn-outline btn-sm" style="width: 100%;">
                                    <i class="fas fa-calendar-plus" style="margin-right: 0.5rem;"></i>
                                    Book Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Products Section -->
                <div style="margin-bottom: 2rem;">
                    <h3 style="font-size: 1.2rem; font-weight: 500; margin-bottom: 1rem; color: var(--foreground);">
                        Products
                    </h3>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1rem;">
                        
                        <div class="card" style="cursor: pointer; transition: transform 0.2s ease;" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                            <div class="card-content">
                                <div style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <div style="width: 40px; height: 40px; background-color: #8B4513; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                        <span style="color: white; font-size: 1.2rem;">🏺</span>
                                    </div>
                                    <div>
                                        <h4 style="margin: 0; font-weight: 600;">Handcrafted Vase</h4>
                                        <p style="margin: 0; font-size: 0.875rem; color: var(--muted-foreground);">Discover unique handcrafted items</p>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-sm" style="width: 100%;">
                                    <i class="fas fa-eye" style="margin-right: 0.5rem;"></i>
                                    View Details
                                </button>
                            </div>
                        </div>

                        <div class="card" style="cursor: pointer; transition: transform 0.2s ease;" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                            <div class="card-content">
                                <div style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <div style="width: 40px; height: 40px; background-color: #D2691E; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                        <span style="color: white; font-size: 1.2rem;">🥣</span>
                                    </div>
                                    <div>
                                        <h4 style="margin: 0; font-weight: 600;">Handcrafted Bowl</h4>
                                        <p style="margin: 0; font-size: 0.875rem; color: var(--muted-foreground);">Discover unique handcrafted items</p>
                                    </div>
                                </div>
                                <button class="btn btn-secondary btn-sm" style="width: 100%;">
                                    <i class="fas fa-eye" style="margin-right: 0.5rem;"></i>
                                    View Details
                                </button>
                            </div>
                        </div>

                        <div class="card" style="cursor: pointer; transition: transform 0.2s ease;" onmouseover="this.style.transform='translateY(-2px)'" onmouseout="this.style.transform='translateY(0)'">
                            <div class="card-content">
                                <div style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <div style="width: 40px; height: 40px; background-color: #8B4513; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                        <span style="color: white; font-size: 1.2rem;">🍽️</span>
                                    </div>
                                    <div>
                                        <h4 style="margin: 0; font-weight: 600;">Handcrafted Plate</h4>
                                        <p style="margin: 0; font-size: 0.875rem; color: var(--muted-foreground);">Discover unique handcrafted items</p>
                                    </div>
                                </div>
                                <button class="btn btn-outline btn-sm" style="width: 100%;">
                                    <i class="fas fa-eye" style="margin-right: 0.5rem;"></i>
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- See All Links -->
                <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                    <button class="btn btn-lg" style="flex: 1;">
                        <i class="fas fa-list" style="margin-right: 0.5rem;"></i>
                        See All Workshops
                    </button>
                    <button class="btn btn-lg" style="flex: 1;">
                        <i class="fas fa-shopping-bag" style="margin-right: 0.5rem;"></i>
                        See All Products
                    </button>
                </div>
            </div>

        </div>
    </div>

    <script>
        // Simple interactivity
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function() {
                alert('Action: ' + this.textContent.trim());
            });
        });
    </script>

</body>
</html>
