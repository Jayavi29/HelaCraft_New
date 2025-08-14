<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Dashboard - HelaCraft</title>
    <link rel="stylesheet" href="/HelaCraft/public/assets/css/main.css">
    <link rel="stylesheet" href="/HelaCraft/public/assets/components/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body style="background-color: #f5f5f5; color: var(--foreground); min-height: 100vh; margin: 0; padding: 0;">
    
    <!-- Main Container -->
    <div style="display: flex; min-height: 100vh;">
        
        <!-- Sidebar -->
        <div style="flex-shrink: 0;">
            <?php include __DIR__ . '/../partials/verification_sidebar.php'; ?>
        </div>
        
        <!-- Main Content Area -->
        <div style="flex: 1; padding: 2rem; background-color: #f8f9fa;">
            
            <!-- Header Section -->
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                <h1 style="font-size: 2rem; font-weight: 600; margin: 0; color: #333;">
                    Dashboard
                </h1>
                <div style="display: flex; align-items: center; gap: 1rem;">
                    <span style="font-size: 0.875rem; color: #666;">🏠 HOME</span>
                </div>
            </div>

            <!-- Pending Tasks Section -->
            <div style="margin-bottom: 3rem;">
                <h2 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 1.5rem; color: #333;">
                    Pending Tasks
                </h2>
                
                <!-- Artisan Approvals -->
                <div class="card" style="background-color: white; border: 1px solid #e9ecef; margin-bottom: 1.5rem;">
                    <div class="card-content">
                        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 1rem;">
                            <div>
                                <h3 style="margin: 0 0 0.5rem 0; font-size: 1rem; color: #333; font-weight: 600;">Artisan Approvals</h3>
                                <p style="margin: 0; font-size: 0.875rem; color: #666; line-height: 1.4;">
                                    <?php echo $pending_tasks['artisan_approvals']['description'] ?? 'Review and approve new artisan applications'; ?>
                                </p>
                            </div>
                        </div>
                        <button class="btn btn-outline" style="font-size: 0.875rem; padding: 0.5rem 1rem; border-color: #6c757d; color: #6c757d;">
                            <?php echo $pending_tasks['artisan_approvals']['action'] ?? 'View Applications'; ?>
                        </button>
                    </div>
                </div>

                <!-- Workshop Proposals -->
                <div class="card" style="background-color: white; border: 1px solid #e9ecef; margin-bottom: 1.5rem;">
                    <div class="card-content">
                        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 1rem;">
                            <div>
                                <h3 style="margin: 0 0 0.5rem 0; font-size: 1rem; color: #333; font-weight: 600;">Workshop Proposals</h3>
                                <p style="margin: 0; font-size: 0.875rem; color: #666; line-height: 1.4;">
                                    <?php echo $pending_tasks['workshop_proposals']['description'] ?? 'Evaluate and Accept workshop proposals from artisans'; ?>
                                </p>
                            </div>
                        </div>
                        <button class="btn btn-outline" style="font-size: 0.875rem; padding: 0.5rem 1rem; border-color: #6c757d; color: #6c757d;">
                            <?php echo $pending_tasks['workshop_proposals']['action'] ?? 'View Proposals'; ?>
                        </button>
                    </div>
                </div>

                <!-- Pending Auctions -->
                <div class="card" style="background-color: white; border: 1px solid #e9ecef; margin-bottom: 1.5rem;">
                    <div class="card-content">
                        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 1rem;">
                            <div>
                                <h3 style="margin: 0 0 0.5rem 0; font-size: 1rem; color: #333; font-weight: 600;">Pending Auctions</h3>
                                <p style="margin: 0; font-size: 0.875rem; color: #666; line-height: 1.4;">
                                    <?php echo $pending_tasks['pending_auctions']['description'] ?? 'Review and approve new auction listings'; ?>
                                </p>
                            </div>
                        </div>
                        <button class="btn btn-outline" style="font-size: 0.875rem; padding: 0.5rem 1rem; border-color: #6c757d; color: #6c757d;">
                            <?php echo $pending_tasks['pending_auctions']['action'] ?? 'View Auctions'; ?>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Recent Activity Section -->
            <div style="margin-bottom: 2rem;">
                <h2 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 1.5rem; color: #333;">
                    Recent Activity
                </h2>
                
                <div class="card" style="background-color: white; border: 1px solid #e9ecef;">
                    <div class="card-content" style="padding: 0;">
                        <?php 
                        $activities = $recent_activities ?? [
                            ['type' => 'artisan_approved', 'message' => 'Artisan John Doe approved', 'time' => '2 hours ago'],
                            ['type' => 'workshop_rejected', 'message' => 'Workshop proposal rejected', 'time' => '4 hours ago'],
                            ['type' => 'auction_approved', 'message' => 'Vintage pottery auction approved', 'time' => '1 day ago']
                        ];
                        
                        foreach ($activities as $index => $activity): 
                        ?>
                        <div style="padding: 1rem; <?php echo $index > 0 ? 'border-top: 1px solid #e9ecef;' : ''; ?>">
                            <div style="display: flex; align-items: center; gap: 0.75rem;">
                                <div style="width: 8px; height: 8px; border-radius: 50%; background-color: 
                                    <?php 
                                    switch($activity['type']) {
                                        case 'artisan_approved': echo '#28a745'; break;
                                        case 'workshop_rejected': echo '#dc3545'; break;
                                        case 'auction_approved': echo '#007bff'; break;
                                        default: echo '#6c757d';
                                    }
                                    ?>
                                "></div>
                                <div style="flex: 1;">
                                    <p style="margin: 0; font-size: 0.875rem; color: #333; font-weight: 500;">
                                        <?php echo htmlspecialchars($activity['message']); ?>
                                    </p>
                                    <p style="margin: 0; font-size: 0.75rem; color: #6c757d;">
                                        <?php echo htmlspecialchars($activity['time']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        // Add click handlers for action buttons
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function() {
                const text = this.textContent.trim();
                if (text.includes('Applications')) {
                    window.location.href = '/HelaCraft/verification/artisan-approvals';
                } else if (text.includes('Proposals')) {
                    window.location.href = '/HelaCraft/verification/workshop-management';
                } else if (text.includes('Auctions')) {
                    window.location.href = '/HelaCraft/verification/auction-management';
                }
            });
        });

        // Add hover effects to activity items
        document.querySelectorAll('.card-content > div[style*="padding"]').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.backgroundColor = '#f8f9fa';
            });
            item.addEventListener('mouseleave', function() {
                this.style.backgroundColor = 'transparent';
            });
        });
    </script>

</body>
</html>
