<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshops - HelaCraft</title>
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
                <a href="/HelaCraft/customer/dashboard" style="text-decoration: none; color: var(--foreground); font-weight: 500; transition: color 0.2s ease;"
                   onmouseover="this.style.color='var(--primary)'" onmouseout="this.style.color='var(--foreground)'">Dashboard</a>
                <a href="/HelaCraft/public/shop" style="text-decoration: none; color: var(--foreground); font-weight: 500; transition: color 0.2s ease;"
                   onmouseover="this.style.color='var(--primary)'" onmouseout="this.style.color='var(--foreground)'">Shop</a>
                <a href="/HelaCraft/public/auctions" style="text-decoration: none; color: var(--foreground); font-weight: 500; transition: color 0.2s ease;"
                   onmouseover="this.style.color='var(--primary)'" onmouseout="this.style.color='var(--foreground)'">Auctions</a>
                <a href="/HelaCraft/public/workshops" style="text-decoration: none; color: var(--primary); font-weight: 600;">Workshop</a>
                <a href="/HelaCraft/public/customize" style="text-decoration: none; color: var(--foreground); font-weight: 500; transition: color 0.2s ease;"
                   onmouseover="this.style.color='var(--primary)'" onmouseout="this.style.color='var(--foreground)'">Customize Item</a>
            </nav>

            <!-- User Info -->
            <div style="display: flex; align-items: center; gap: 1rem;">
                <a href="/HelaCraft/public/cart" style="text-decoration: none; color: var(--foreground); position: relative;">
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

    <!-- Main Content -->
    <main style="max-width: 1200px; margin: 0 auto; padding: 2rem;">
        
        <!-- Page Header -->
        <div style="text-align: center; margin-bottom: 3rem;">
            <h1 style="font-size: 2.5rem; font-weight: 700; margin: 0 0 1rem 0; color: var(--foreground);">
                Workshops
            </h1>
            <p style="font-size: 1.1rem; color: var(--muted-foreground); max-width: 600px; margin: 0 auto;">
                Learn traditional Sri Lankan crafts from master artisans. Join our hands-on workshops and create your own masterpieces.
            </p>
        </div>

        <!-- Workshops Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 2rem;">
            
            <?php foreach ($workshops as $workshop): ?>
            <div class="card" style="overflow: hidden; transition: transform 0.2s ease, box-shadow 0.2s ease; cursor: pointer;"
                 onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.1)'"
                 onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='var(--shadow)'"
                 onclick="window.location.href='/HelaCraft/public/workshop/<?php echo $workshop['id']; ?>'">
                
                <!-- Workshop Image -->
                <div style="height: 200px; background-color: var(--muted); position: relative; overflow: hidden;">
                    <img src="<?php echo $workshop['image']; ?>" 
                         alt="<?php echo htmlspecialchars($workshop['title']); ?>"
                         style="width: 100%; height: 100%; object-fit: cover;"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                    <div style="display: none; width: 100%; height: 100%; align-items: center; justify-content: center; background-color: var(--muted); position: absolute; top: 0; left: 0;">
                        <i class="fas fa-tools" style="font-size: 3rem; color: var(--muted-foreground);"></i>
                    </div>
                    
                    <!-- Difficulty Badge -->
                    <div style="position: absolute; top: 1rem; right: 1rem; background-color: var(--primary); color: var(--primary-foreground); padding: 0.25rem 0.75rem; border-radius: var(--radius); font-size: 0.875rem; font-weight: 500;">
                        <?php echo htmlspecialchars($workshop['difficulty']); ?>
                    </div>
                    
                    <!-- Price Badge -->
                    <div style="position: absolute; bottom: 1rem; left: 1rem; background-color: var(--card); color: var(--foreground); padding: 0.5rem 1rem; border-radius: var(--radius); font-weight: 600; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                        Rs. <?php echo number_format($workshop['price']); ?>
                    </div>
                </div>
                
                <div class="card-content">
                    <!-- Workshop Title -->
                    <h3 style="margin: 0 0 0.5rem 0; font-size: 1.25rem; font-weight: 600; color: var(--foreground);">
                        <?php echo htmlspecialchars($workshop['title']); ?>
                    </h3>
                    
                    <!-- Description -->
                    <p style="margin: 0 0 1rem 0; color: var(--muted-foreground); font-size: 0.9rem; line-height: 1.5;">
                        <?php echo htmlspecialchars($workshop['description']); ?>
                    </p>
                    
                    <!-- Workshop Details -->
                    <div style="display: flex; flex-direction: column; gap: 0.5rem; margin-bottom: 1rem;">
                        <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.875rem; color: var(--muted-foreground);">
                            <i class="fas fa-user-tie" style="color: var(--primary);"></i>
                            <span><?php echo htmlspecialchars($workshop['instructor']); ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.875rem; color: var(--muted-foreground);">
                            <i class="fas fa-clock" style="color: var(--primary);"></i>
                            <span><?php echo htmlspecialchars($workshop['duration']); ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.875rem; color: var(--muted-foreground);">
                            <i class="fas fa-calendar" style="color: var(--primary);"></i>
                            <span><?php echo date('F j, Y', strtotime($workshop['date'])); ?> at <?php echo htmlspecialchars($workshop['time']); ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.875rem; color: var(--muted-foreground);">
                            <i class="fas fa-users" style="color: var(--primary);"></i>
                            <span>Max <?php echo $workshop['max_participants']; ?> participants</span>
                        </div>
                    </div>
                    
                    <!-- Register Button -->
                    <button class="btn btn-primary btn-block" 
                            onclick="event.stopPropagation(); registerForWorkshop(<?php echo $workshop['id']; ?>)"
                            style="margin-top: auto;">
                        Register Now
                    </button>
                </div>
            </div>
            <?php endforeach; ?>
            
        </div>
        
        <!-- Info Section -->
        <div style="margin-top: 4rem; text-align: center; padding: 2rem; background-color: var(--muted); border-radius: var(--radius);">
            <h2 style="margin: 0 0 1rem 0; font-size: 1.5rem; font-weight: 600; color: var(--foreground);">
                Why Join Our Workshops?
            </h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 2rem;">
                <div>
                    <i class="fas fa-graduation-cap" style="font-size: 2rem; color: var(--primary); margin-bottom: 0.5rem;"></i>
                    <h3 style="margin: 0 0 0.5rem 0; font-size: 1rem; font-weight: 600;">Expert Instruction</h3>
                    <p style="margin: 0; font-size: 0.875rem; color: var(--muted-foreground);">Learn from master artisans with years of experience</p>
                </div>
                <div>
                    <i class="fas fa-tools" style="font-size: 2rem; color: var(--primary); margin-bottom: 0.5rem;"></i>
                    <h3 style="margin: 0 0 0.5rem 0; font-size: 1rem; font-weight: 600;">All Materials Included</h3>
                    <p style="margin: 0; font-size: 0.875rem; color: var(--muted-foreground);">Everything you need is provided for your workshop</p>
                </div>
                <div>
                    <i class="fas fa-certificate" style="font-size: 2rem; color: var(--primary); margin-bottom: 0.5rem;"></i>
                    <h3 style="margin: 0 0 0.5rem 0; font-size: 1rem; font-weight: 600;">Certificate</h3>
                    <p style="margin: 0; font-size: 0.875rem; color: var(--muted-foreground);">Receive a certificate upon completion</p>
                </div>
                <div>
                    <i class="fas fa-heart" style="font-size: 2rem; color: var(--primary); margin-bottom: 0.5rem;"></i>
                    <h3 style="margin: 0 0 0.5rem 0; font-size: 1rem; font-weight: 600;">Small Groups</h3>
                    <p style="margin: 0; font-size: 0.875rem; color: var(--muted-foreground);">Personal attention in intimate class sizes</p>
                </div>
            </div>
        </div>

    </main>

    <script>
        function registerForWorkshop(workshopId) {
            // In a real application, this would handle workshop registration
            alert('Registration for workshop ' + workshopId + ' - Feature coming soon!');
        }
    </script>

</body>
</html>
