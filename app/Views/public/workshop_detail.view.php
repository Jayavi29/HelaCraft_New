<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($workshop['title']); ?> - HelaCraft</title>
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
                <a href="/HelaCraft/customer/dashboard" style="text-decoration: none; color: var(--foreground); font-weight: 500;">Dashboard</a>
                <a href="/HelaCraft/public/shop" style="text-decoration: none; color: var(--foreground); font-weight: 500;">Shop</a>
                <a href="/HelaCraft/public/auctions" style="text-decoration: none; color: var(--foreground); font-weight: 500;">Auctions</a>
                <a href="/HelaCraft/public/workshops" style="text-decoration: none; color: var(--primary); font-weight: 600;">Workshop</a>
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
            <a href="/HelaCraft/public/workshops" style="text-decoration: none; color: var(--muted-foreground);">Workshops</a>
            <span style="margin: 0 0.5rem;">/</span>
            <span style="color: var(--foreground);"><?php echo htmlspecialchars($workshop['title']); ?></span>
        </nav>
    </div>

    <!-- Main Content -->
    <main style="max-width: 1200px; margin: 0 auto; padding: 0 2rem 2rem;">
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; margin-bottom: 3rem;">
            
            <!-- Workshop Image -->
            <div>
                <div style="height: 400px; background-color: var(--muted); border-radius: var(--radius); overflow: hidden; position: relative;">
                    <img src="<?php echo $workshop['image']; ?>" 
                         alt="<?php echo htmlspecialchars($workshop['title']); ?>"
                         style="width: 100%; height: 100%; object-fit: cover;"
                         onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                    <div style="display: none; width: 100%; height: 100%; align-items: center; justify-content: center; background-color: var(--muted);">
                        <i class="fas fa-tools" style="font-size: 4rem; color: var(--muted-foreground);"></i>
                    </div>
                    
                    <!-- Difficulty Badge -->
                    <div style="position: absolute; top: 1rem; right: 1rem; background-color: var(--primary); color: var(--primary-foreground); padding: 0.5rem 1rem; border-radius: var(--radius); font-weight: 600;">
                        <?php echo htmlspecialchars($workshop['difficulty']); ?>
                    </div>
                </div>
            </div>
            
            <!-- Workshop Info -->
            <div>
                <h1 style="font-size: 2rem; font-weight: 700; margin: 0 0 1rem 0; color: var(--foreground);">
                    <?php echo htmlspecialchars($workshop['title']); ?>
                </h1>
                
                <p style="font-size: 1rem; color: var(--muted-foreground); line-height: 1.6; margin-bottom: 2rem;">
                    <?php echo htmlspecialchars($workshop['description']); ?>
                </p>
                
                <!-- Price -->
                <div style="font-size: 2rem; font-weight: 700; color: var(--primary); margin-bottom: 2rem;">
                    Rs. <?php echo number_format($workshop['price']); ?>
                </div>
                
                <!-- Workshop Details -->
                <div style="background-color: var(--card); padding: 1.5rem; border-radius: var(--radius); margin-bottom: 2rem; border: 1px solid var(--border);">
                    <h3 style="margin: 0 0 1rem 0; font-size: 1.1rem; font-weight: 600; color: var(--foreground);">Workshop Details</h3>
                    
                    <div style="display: grid; gap: 0.75rem;">
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-user-tie" style="color: var(--primary); width: 20px;"></i>
                            <span style="font-weight: 500;">Instructor:</span>
                            <span style="color: var(--muted-foreground);"><?php echo htmlspecialchars($workshop['instructor']); ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-clock" style="color: var(--primary); width: 20px;"></i>
                            <span style="font-weight: 500;">Duration:</span>
                            <span style="color: var(--muted-foreground);"><?php echo htmlspecialchars($workshop['duration']); ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-calendar" style="color: var(--primary); width: 20px;"></i>
                            <span style="font-weight: 500;">Date & Time:</span>
                            <span style="color: var(--muted-foreground);"><?php echo date('F j, Y', strtotime($workshop['date'])); ?> at <?php echo htmlspecialchars($workshop['time']); ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-map-marker-alt" style="color: var(--primary); width: 20px;"></i>
                            <span style="font-weight: 500;">Location:</span>
                            <span style="color: var(--muted-foreground);"><?php echo htmlspecialchars($workshop['location']); ?></span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-users" style="color: var(--primary); width: 20px;"></i>
                            <span style="font-weight: 500;">Max Participants:</span>
                            <span style="color: var(--muted-foreground);"><?php echo $workshop['max_participants']; ?> people</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <i class="fas fa-check-circle" style="color: var(--success); width: 20px;"></i>
                            <span style="font-weight: 500;">Materials:</span>
                            <span style="color: var(--muted-foreground);"><?php echo $workshop['materials_included'] ? 'All included' : 'Bring your own'; ?></span>
                        </div>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div style="display: flex; gap: 1rem;">
                    <button class="btn btn-primary" style="flex: 1;" onclick="registerForWorkshop(<?php echo $workshop['id']; ?>)">
                        <i class="fas fa-calendar-plus" style="margin-right: 0.5rem;"></i>
                        Register Now
                    </button>
                    <button class="btn btn-outline" onclick="shareWorkshop()">
                        <i class="fas fa-share-alt"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Additional Information Tabs -->
        <div style="margin-bottom: 3rem;">
            <div style="border-bottom: 1px solid var(--border); margin-bottom: 2rem;">
                <div style="display: flex; gap: 2rem;">
                    <button class="tab-button active" data-tab="learn" style="background: none; border: none; padding: 1rem 0; font-weight: 600; color: var(--primary); border-bottom: 2px solid var(--primary); cursor: pointer;">
                        What You'll Learn
                    </button>
                    <button class="tab-button" data-tab="included" style="background: none; border: none; padding: 1rem 0; font-weight: 600; color: var(--muted-foreground); cursor: pointer;">
                        What's Included
                    </button>
                    <button class="tab-button" data-tab="requirements" style="background: none; border: none; padding: 1rem 0; font-weight: 600; color: var(--muted-foreground); cursor: pointer;">
                        Requirements
                    </button>
                </div>
            </div>
            
            <!-- Tab Content -->
            <div class="tab-content" id="learn">
                <h3 style="margin: 0 0 1rem 0; font-size: 1.25rem; font-weight: 600; color: var(--foreground);">What You'll Learn</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <?php foreach ($workshop['what_you_learn'] as $item): ?>
                    <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                        <i class="fas fa-check" style="color: var(--success); font-size: 0.875rem;"></i>
                        <span><?php echo htmlspecialchars($item); ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="tab-content" id="included" style="display: none;">
                <h3 style="margin: 0 0 1rem 0; font-size: 1.25rem; font-weight: 600; color: var(--foreground);">What's Included</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <?php foreach ($workshop['what_included'] as $item): ?>
                    <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                        <i class="fas fa-gift" style="color: var(--primary); font-size: 0.875rem;"></i>
                        <span><?php echo htmlspecialchars($item); ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="tab-content" id="requirements" style="display: none;">
                <h3 style="margin: 0 0 1rem 0; font-size: 1.25rem; font-weight: 600; color: var(--foreground);">Requirements</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <?php foreach ($workshop['requirements'] as $item): ?>
                    <li style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                        <i class="fas fa-info-circle" style="color: var(--muted-foreground); font-size: 0.875rem;"></i>
                        <span><?php echo htmlspecialchars($item); ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        
        <!-- Back to Workshops -->
        <div style="text-align: center;">
            <a href="/HelaCraft/public/workshops" class="btn btn-outline">
                <i class="fas fa-arrow-left" style="margin-right: 0.5rem;"></i>
                Back to All Workshops
            </a>
        </div>

    </main>

    <script>
        // Tab functionality
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetTab = this.getAttribute('data-tab');
                    
                    // Remove active class from all buttons
                    tabButtons.forEach(btn => {
                        btn.style.color = 'var(--muted-foreground)';
                        btn.style.borderBottom = 'none';
                    });
                    
                    // Add active class to clicked button
                    this.style.color = 'var(--primary)';
                    this.style.borderBottom = '2px solid var(--primary)';
                    
                    // Hide all tab contents
                    tabContents.forEach(content => {
                        content.style.display = 'none';
                    });
                    
                    // Show target tab content
                    document.getElementById(targetTab).style.display = 'block';
                });
            });
        });
        
        function registerForWorkshop(workshopId) {
            alert('Registration for workshop ' + workshopId + ' - Feature coming soon!');
        }
        
        function shareWorkshop() {
            if (navigator.share) {
                navigator.share({
                    title: '<?php echo htmlspecialchars($workshop['title']); ?>',
                    text: '<?php echo htmlspecialchars($workshop['description']); ?>',
                    url: window.location.href
                });
            } else {
                // Fallback for browsers that don't support Web Share API
                navigator.clipboard.writeText(window.location.href);
                alert('Workshop link copied to clipboard!');
            </div>
        }
    </script>

</body>
</html>
