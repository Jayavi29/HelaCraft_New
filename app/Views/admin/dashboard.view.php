<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - HelaCraft</title>
    <link rel="stylesheet" href="/HelaCraft/public/assets/css/main.css">
    <link rel="stylesheet" href="/HelaCraft/public/assets/components/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body style="background-color: var(--background); color: var(--foreground); min-height: 100vh; margin: 0; padding: 0; font-family: 'Geist', sans-serif;">
    
    <!-- Main Container -->
    <div style="display: flex; min-height: 100vh;">
        
        <!-- Sidebar -->
        <div style="flex-shrink: 0;">
            <?php include __DIR__ . '/../partials/admin_sidebar.php'; ?>
        </div>
        
        <!-- Main Content Area -->
        <div style="flex: 1; background-color: var(--secondary);">
            
            <!-- Header Section -->
            <div style="background-color: var(--secondary); padding: 1.5rem 2rem; border-bottom: 1px solid var(--border);">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <h1 style="font-size: 1.5rem; font-weight: 600; margin: 0; color: var(--foreground);">
                        Admin Dashboard
                    </h1>
                    <div style="font-size: 0.875rem; color: var(--muted-foreground);">
                        Last 30 days
                    </div>
                </div>
                <p style="margin: 0.5rem 0 0 0; font-size: 0.875rem; color: var(--muted-foreground);">
                    Welcome back! Here's what's happening on your platform.
                </p>
            </div>

            <!-- Content Area -->
            <div style="padding: 2rem;">
                
                <!-- Stats Cards -->
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
                    
                    <!-- Overall Sales Card -->
                    <div class="card">
                        <div class="card-content">
                            <div style="margin-bottom: 0.5rem;">
                                <span style="font-size: 0.875rem; color: var(--muted-foreground); font-weight: 500;">Overall Sales</span>
                            </div>
                            <div style="font-size: 2rem; font-weight: 700; color: var(--foreground); margin-bottom: 0.25rem;">
                                <?php echo $stats['overall_sales']['value'] ?? '$45,231.89'; ?>
                            </div>
                            <div style="font-size: 0.75rem; color: var(--success); font-weight: 500;">
                                <?php echo $stats['overall_sales']['description'] ?? 'Over from last month'; ?>
                            </div>
                        </div>
                    </div>

                    <!-- User Growth Card -->
                    <div class="card">
                        <div class="card-content">
                            <div style="margin-bottom: 0.5rem;">
                                <span style="font-size: 0.875rem; color: var(--muted-foreground); font-weight: 500;">User Growth</span>
                            </div>
                            <div style="font-size: 2rem; font-weight: 700; color: var(--foreground); margin-bottom: 0.25rem;">
                                <?php echo $stats['user_growth']['value'] ?? '2,350'; ?>
                            </div>
                            <div style="font-size: 0.75rem; color: var(--success); font-weight: 500;">
                                <?php echo $stats['user_growth']['description'] ?? 'Active users'; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Platform Revenue Card -->
                    <div class="card">
                        <div class="card-content">
                            <div style="margin-bottom: 0.5rem;">
                                <span style="font-size: 0.875rem; color: var(--muted-foreground); font-weight: 500;">Platform Revenue</span>
                            </div>
                            <div style="font-size: 2rem; font-weight: 700; color: var(--foreground); margin-bottom: 0.25rem;">
                                <?php echo $stats['platform_revenue']['value'] ?? '$12,234'; ?>
                            </div>
                            <div style="font-size: 0.75rem; color: var(--success); font-weight: 500;">
                                <?php echo $stats['platform_revenue']['description'] ?? 'Commission earned'; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Active Workshops Card -->
                    <div class="card">
                        <div class="card-content">
                            <div style="margin-bottom: 0.5rem;">
                                <span style="font-size: 0.875rem; color: var(--muted-foreground); font-weight: 500;">Active Workshops</span>
                            </div>
                            <div style="font-size: 2rem; font-weight: 700; color: var(--foreground); margin-bottom: 0.25rem;">
                                <?php echo $stats['active_workshops']['value'] ?? '573'; ?>
                            </div>
                            <div style="font-size: 0.75rem; color: var(--success); font-weight: 500;">
                                <?php echo $stats['active_workshops']['description'] ?? 'Currently running'; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Management Sections -->
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
                    
                    <!-- User Management -->
                    <div class="card" style="background-color: white; border: 1px solid #e9ecef;">
                        <div class="card-content">
                            <div style="display: flex; justify-content: between; align-items: start; margin-bottom: 1rem;">
                                <div style="flex: 1;">
                                    <h3 style="margin: 0 0 0.5rem 0; font-size: 1.1rem; color: #333; font-weight: 600;">User Management</h3>
                                    <p style="margin: 0 0 1rem 0; font-size: 0.875rem; color: #666; line-height: 1.4;">
                                        Manage customers, artisans, and verification team members
                                    </p>
                                    <div style="display: flex; gap: 1rem; margin-bottom: 1rem;">
                                        <div>
                                            <div style="font-size: 1.25rem; font-weight: 600; color: #333;">1,234</div>
                                            <div style="font-size: 0.75rem; color: #666;">Total Users</div>
                                        </div>
                                        <div>
                                            <div style="font-size: 1.25rem; font-weight: 600; color: #333;">89</div>
                                            <div style="font-size: 0.75rem; color: #666;">Pending</div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-left: 1rem;">
                                    <i class="fas fa-arrow-right" style="color: #6c757d; font-size: 1.2rem;"></i>
                                </div>
                            </div>
                            <button class="btn btn-outline" 
                                    style="font-size: 0.875rem; padding: 0.5rem 1rem; border-color: #6c757d; color: #6c757d;"
                                    onclick="window.location.href='/HelaCraft/public/admin/user-management'">
                                Manage Users
                            </button>
                        </div>
                    </div>

                    <!-- Platform Settings -->
                    <div class="card" style="background-color: white; border: 1px solid #e9ecef;">
                        <div class="card-content">
                            <div style="display: flex; justify-content: between; align-items: start; margin-bottom: 1rem;">
                                <div style="flex: 1;">
                                    <h3 style="margin: 0 0 0.5rem 0; font-size: 1.1rem; color: #333; font-weight: 600;">Platform Settings</h3>
                                    <p style="margin: 0 0 1rem 0; font-size: 0.875rem; color: #666; line-height: 1.4;">
                                        Configure commission rates and pricing tiers
                                    </p>
                                    <div style="display: flex; gap: 1rem; margin-bottom: 1rem;">
                                        <div>
                                            <div style="font-size: 1.25rem; font-weight: 600; color: #333;">5%</div>
                                            <div style="font-size: 0.75rem; color: #666;">Commission</div>
                                        </div>
                                        <div>
                                            <div style="font-size: 1.25rem; font-weight: 600; color: #333;">3</div>
                                            <div style="font-size: 0.75rem; color: #666;">Tiers</div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-left: 1rem;">
                                    <i class="fas fa-arrow-right" style="color: #6c757d; font-size: 1.2rem;"></i>
                                </div>
                            </div>
                            <button class="btn btn-outline" 
                                    style="font-size: 0.875rem; padding: 0.5rem 1rem; border-color: #6c757d; color: #6c757d;"
                                    onclick="window.location.href='/HelaCraft/public/admin/platform-settings'">
                                View Settings
                            </button>
                        </div>
                    </div>

                    <!-- Reporting -->
                    <div class="card" style="background-color: white; border: 1px solid #e9ecef;">
                        <div class="card-content">
                            <div style="display: flex; justify-content: between; align-items: start; margin-bottom: 1rem;">
                                <div style="flex: 1;">
                                    <h3 style="margin: 0 0 0.5rem 0; font-size: 1.1rem; color: #333; font-weight: 600;">Reporting</h3>
                                    <p style="margin: 0 0 1rem 0; font-size: 0.875rem; color: #666; line-height: 1.4;">
                                        Generate detailed reports for sales and user analytics
                                    </p>
                                    <div style="display: flex; gap: 1rem; margin-bottom: 1rem;">
                                        <div>
                                            <div style="font-size: 1.25rem; font-weight: 600; color: #333;">12</div>
                                            <div style="font-size: 0.75rem; color: #666;">Reports</div>
                                        </div>
                                        <div>
                                            <div style="font-size: 1.25rem; font-weight: 600; color: #333;">Daily</div>
                                            <div style="font-size: 0.75rem; color: #666;">Updated</div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-left: 1rem;">
                                    <i class="fas fa-arrow-right" style="color: #6c757d; font-size: 1.2rem;"></i>
                                </div>
                            </div>
                            <button class="btn btn-outline" 
                                    style="font-size: 0.875rem; padding: 0.5rem 1rem; border-color: #6c757d; color: #6c757d;"
                                    onclick="window.location.href='/HelaCraft/public/admin/reports'">
                                Generate Reports
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity Section -->
                <div>
                    <h2 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 1.5rem; color: #333;">
                        Recent Activity
                    </h2>
                    
                    <div class="card" style="background-color: white; border: 1px solid #e9ecef;">
                        <div class="card-content" style="padding: 0;">
                            <?php 
                            $activities = $recent_activities ?? [
                                ['type' => 'new_user_registration', 'message' => 'New user registration', 'details' => 'Sarah Wilson', 'time' => '2 minutes ago'],
                                ['type' => 'workshop_completed', 'message' => 'Workshop completed', 'details' => 'Pottery Basics', 'time' => '15 minutes ago'],
                                ['type' => 'commission_payment', 'message' => 'Commission payment', 'details' => '$32.50', 'time' => '1 hour ago'],
                                ['type' => 'verification_request', 'message' => 'Verification request', 'details' => 'John Artisan', 'time' => '2 hours ago']
                            ];
                            
                            foreach ($activities as $index => $activity): 
                            ?>
                            <div style="padding: 1rem 1.5rem; <?php echo $index > 0 ? 'border-top: 1px solid #e9ecef;' : ''; ?> cursor: pointer;"
                                 onmouseover="this.style.backgroundColor='#f8f9fa';"
                                 onmouseout="this.style.backgroundColor='transparent';">
                                <div style="display: flex; justify-content: space-between; align-items: center;">
                                    <div>
                                        <p style="margin: 0 0 0.25rem 0; font-size: 0.875rem; color: #333; font-weight: 500;">
                                            <?php echo htmlspecialchars($activity['message']); ?>
                                        </p>
                                        <p style="margin: 0; font-size: 0.75rem; color: #6c757d;">
                                            <?php echo htmlspecialchars($activity['details']); ?>
                                        </p>
                                    </div>
                                    <div style="font-size: 0.75rem; color: #6c757d;">
                                        <?php echo htmlspecialchars($activity['time']); ?>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        // Add hover effects to management cards
        document.querySelectorAll('.card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
                this.style.boxShadow = '0 4px 12px rgba(0,0,0,0.1)';
                this.style.transition = 'all 0.2s ease';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = 'none';
            });
        });

        // Add click handlers for action buttons
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.backgroundColor = '#6c757d';
                this.style.color = 'white';
            });
            button.addEventListener('mouseleave', function() {
                this.style.backgroundColor = 'transparent';
                this.style.color = '#6c757d';
            });
        });
    </script>

</body>
</html>
