<!DOCTYPE html>
<html lang="        <!-- Navigation Tabs -->
        <div style="border-bottom: 1px solid var(--border); margin-bottom: 2rem;">
            <div style="display: flex; gap: 2rem;">
                <span style="padding: 1rem 0; font-weight: 600; color: var(--primary); border-bottom: 2px solid var(--primary);">
                    Available Workshops
                </span>
            </div>
        </div>>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Workshops - HelaCraft</title>
    <link rel="stylesheet" href="/HelaCraft/public/assets/css/main.css">
    <link rel="stylesheet" href="/HelaCraft/public/assets/css/components/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body style="background-color: var(--background); color: var(--foreground); min-height: 100vh; margin: 0; padding: 0; font-family: 'Geist', sans-serif;">
    
    <!-- Header -->
    <?php include __DIR__ . '/header.php'; ?>

    <!-- Main Content -->
    <main style="max-width: 1200px; margin: 0 auto; padding: 2rem; padding-top: 6rem;">
        
        <!-- Page Header -->
        <div style="margin-bottom: 3rem;">
            <h1 style="font-size: 2.5rem; font-weight: 700; margin: 0 0 0.5rem 0; color: var(--foreground);">
                My Workshops
            </h1>
            <p style="font-size: 1.1rem; color: var(--muted-foreground);">
                View and manage your workshop registrations
            </p>
        </div>

        <!-- Workshop Tabs -->
        <div style="border-bottom: 1px solid var(--border); margin-bottom: 2rem;">
            <div style="display: flex; gap: 2rem;">
                <button class="tab-button active" data-tab="available" style="background: none; border: none; padding: 1rem 0; font-weight: 600; color: var(--primary); border-bottom: 2px solid var(--primary); cursor: pointer;">
                    Available Workshops
                </button>
                <button class="tab-button" data-tab="registered" style="background: none; border: none; padding: 1rem 0; font-weight: 600; color: var(--muted-foreground); cursor: pointer;">
                    My Registrations
                </button>
            </div>
        </div>

        <!-- Available Workshops -->
        <div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 2rem;">
                
                <?php if (isset($workshops) && !empty($workshops)): ?>
                <?php foreach ($workshops as $workshop): ?>
                <div class="card" style="overflow: hidden;">
                    
                    <!-- Workshop Image -->
                    <div style="height: 200px; background-color: var(--muted); position: relative; overflow: hidden;">
                        <img src="<?php echo $workshop['image']; ?>" 
                             alt="<?php echo htmlspecialchars($workshop['title']); ?>"
                             style="width: 100%; height: 100%; object-fit: cover;"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex'">
                        <div style="display: none; width: 100%; height: 100%; align-items: center; justify-content: center; background-color: var(--muted); position: absolute; top: 0; left: 0;">
                            <i class="fas fa-tools" style="font-size: 3rem; color: var(--muted-foreground);"></i>
                        </div>
                        
                        <!-- Status Badge -->
                        <?php 
                        $statusColor = $workshop['registration_status'] === 'open' ? 'var(--success)' : 
                                      ($workshop['registration_status'] === 'full' ? 'var(--destructive)' : 'var(--muted-foreground)');
                        $statusText = $workshop['registration_status'] === 'open' ? 'Open' : 
                                     ($workshop['registration_status'] === 'full' ? 'Full' : 'Closed');
                        ?>
                        <div style="position: absolute; top: 1rem; right: 1rem; background-color: <?php echo $statusColor; ?>; color: white; padding: 0.25rem 0.75rem; border-radius: var(--radius); font-size: 0.875rem; font-weight: 500;">
                            <?php echo $statusText; ?>
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
                                <i class="fas fa-calendar" style="color: var(--primary);"></i>
                                <span><?php echo date('F j, Y', strtotime($workshop['date'])); ?> at <?php echo htmlspecialchars($workshop['time']); ?></span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.875rem; color: var(--muted-foreground);">
                                <i class="fas fa-users" style="color: var(--primary);"></i>
                                <span><?php echo $workshop['available_spots']; ?> spots available (<?php echo $workshop['registered_participants']; ?>/<?php echo $workshop['max_participants']; ?> registered)</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.875rem; color: var(--muted-foreground);">
                                <i class="fas fa-map-marker-alt" style="color: var(--primary);"></i>
                                <span><?php echo htmlspecialchars($workshop['location']); ?></span>
                            </div>
                        </div>
                        
                        <!-- Action Button -->
                        <?php 
                        $user_registered = false;
                        if (isset($user_registrations)) {
                            foreach ($user_registrations as $registration) {
                                if ($registration['workshop_id'] == $workshop['id']) {
                                    $user_registered = true;
                                    break;
                                }
                            }
                        }
                        ?>
                        
                        <?php if ($user_registered): ?>
                            <button class="btn btn-outline btn-block" disabled>
                                <i class="fas fa-check" style="margin-right: 0.5rem;"></i>
                                Already Registered
                            </button>
                        <?php elseif ($workshop['registration_status'] === 'full'): ?>
                            <button class="btn btn-outline btn-block" disabled>
                                <i class="fas fa-times" style="margin-right: 0.5rem;"></i>
                                Workshop Full
                            </button>
                        <?php elseif ($workshop['registration_status'] === 'open'): ?>
                            <button class="btn btn-primary btn-block">
                                <i class="fas fa-calendar-plus" style="margin-right: 0.5rem;"></i>
                                Register Now
                            </button>
                        <?php else: ?>
                            <button class="btn btn-outline btn-block" disabled>
                                Registration Closed
                            </button>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php else: ?>
                <div style="text-align: center; padding: 3rem 0; grid-column: 1 / -1;">
                    <i class="fas fa-tools" style="font-size: 4rem; color: var(--muted-foreground); margin-bottom: 1rem;"></i>
                    <h3 style="margin: 0 0 0.5rem 0; color: var(--foreground);">No Workshops Available</h3>
                    <p style="margin: 0; color: var(--muted-foreground);">Check back later for new workshop offerings</p>
                </div>
                <?php endif; ?>
                
            </div>
        </div>

        <!-- My Registrations Tab -->
        <div class="tab-content" id="registered" style="display: none;">
            <div style="text-align: center; padding: 3rem 0;">
                <i class="fas fa-calendar-check" style="font-size: 4rem; color: var(--muted-foreground); margin-bottom: 1rem;"></i>
                <h3 style="margin: 0 0 0.5rem 0; color: var(--foreground);">Your Workshop Registrations</h3>
                <p style="margin: 0; color: var(--muted-foreground);">Your registered workshops will appear here</p>
            </div>
        </div>

        <!-- Quick Actions -->
        <div style="margin-top: 3rem; text-align: center;">
            <a href="/HelaCraft/public/workshops" class="btn btn-outline">
                <i class="fas fa-search" style="margin-right: 0.5rem;"></i>
                Browse All Workshops
            </a>
        </div>

    </main>

</body>
</html>
