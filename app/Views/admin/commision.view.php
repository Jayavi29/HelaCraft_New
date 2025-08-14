<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platform Settings - HelaCraft</title>
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
                        Platform Settings
                    </h1>
                </div>
                <p style="margin: 0.5rem 0 0 0; font-size: 0.875rem; color: var(--muted-foreground);">
                    Configure commission rules, pricing tiers, and platform settings
                </p>
            </div>

            <!-- Content Area -->
            <div style="padding: 2rem;">
                
                <!-- Settings Navigation Tabs -->
                <div style="margin-bottom: 2rem;">
                    <div style="display: flex; gap: 1rem; border-bottom: 1px solid var(--border);">
                        <button class="btn btn-ghost" style="border-bottom: 2px solid var(--primary); border-radius: 0; padding: 1rem 1.5rem;">
                            Commission Rules
                        </button>
                        <button class="btn btn-ghost" style="border-radius: 0; padding: 1rem 1.5rem; color: var(--muted-foreground);">
                            Pricing Tiers
                        </button>
                        <button class="btn btn-ghost" style="border-radius: 0; padding: 1rem 1.5rem; color: var(--muted-foreground);">
                            Platform Settings
                        </button>
                    </div>
                </div>

                <!-- Commission Rules Section -->
                <div class="card" style="margin-bottom: 2rem;">
                    <div class="card-header" style="padding: 1.5rem; border-bottom: 1px solid var(--border);">
                        <h2 style="font-size: 1.25rem; font-weight: 600; margin: 0; color: var(--foreground);">
                            <i class="fas fa-percentage" style="margin-right: 0.5rem; color: var(--primary);"></i>
                            Pricing Tier Management
                        </h2>
                    </div>
                    <div class="card-content" style="padding: 1.5rem;">
                        
                        <!-- Commission Rules Table -->
                        <div style="overflow-x: auto;">
                            <table style="width: 100%; border-collapse: collapse;">
                                <thead>
                                    <tr style="border-bottom: 1px solid var(--border);">
                                        <th style="text-align: left; padding: 1rem 0.5rem; font-weight: 600; color: var(--foreground);">Tier Name</th>
                                        <th style="text-align: left; padding: 1rem 0.5rem; font-weight: 600; color: var(--foreground);">Commission Rate (%)</th>
                                        <th style="text-align: left; padding: 1rem 0.5rem; font-weight: 600; color: var(--foreground);">Features</th>
                                        <th style="text-align: center; padding: 1rem 0.5rem; font-weight: 600; color: var(--foreground);">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Basic Tier -->
                                    <tr style="border-bottom: 1px solid var(--border);">
                                        <td style="padding: 1rem 0.5rem;">
                                            <div style="font-weight: 500; color: var(--foreground);">Basic</div>
                                        </td>
                                        <td style="padding: 1rem 0.5rem;">
                                            <input type="number" value="5" min="0" max="100" step="0.1" 
                                                   style="width: 80px; padding: 0.5rem; border: 1px solid var(--border); border-radius: var(--radius); background: var(--background); color: var(--foreground);">
                                        </td>
                                        <td style="padding: 1rem 0.5rem;">
                                            <span style="color: var(--muted-foreground); font-size: 0.875rem;">Basic listing • Standard support</span>
                                        </td>
                                        <td style="padding: 1rem 0.5rem; text-align: center;">
                                            <label style="display: inline-flex; align-items: center; cursor: pointer;">
                                                <input type="checkbox" checked style="margin-right: 0.5rem;">
                                                <span style="color: var(--foreground); font-size: 0.875rem;">Active</span>
                                            </label>
                                        </td>
                                    </tr>
                                    
                                    <!-- Standard Tier -->
                                    <tr style="border-bottom: 1px solid var(--border);">
                                        <td style="padding: 1rem 0.5rem;">
                                            <div style="font-weight: 500; color: var(--foreground);">Standard</div>
                                        </td>
                                        <td style="padding: 1rem 0.5rem;">
                                            <input type="number" value="7" min="0" max="100" step="0.1" 
                                                   style="width: 80px; padding: 0.5rem; border: 1px solid var(--border); border-radius: var(--radius); background: var(--background); color: var(--foreground);">
                                        </td>
                                        <td style="padding: 1rem 0.5rem;">
                                            <span style="color: var(--muted-foreground); font-size: 0.875rem;">Priority listing • Premium support • Analytics</span>
                                        </td>
                                        <td style="padding: 1rem 0.5rem; text-align: center;">
                                            <label style="display: inline-flex; align-items: center; cursor: pointer;">
                                                <input type="checkbox" checked style="margin-right: 0.5rem;">
                                                <span style="color: var(--foreground); font-size: 0.875rem;">Active</span>
                                            </label>
                                        </td>
                                    </tr>
                                    
                                    <!-- Enterprise Tier -->
                                    <tr style="border-bottom: 1px solid var(--border);">
                                        <td style="padding: 1rem 0.5rem;">
                                            <div style="font-weight: 500; color: var(--foreground);">Enterprise</div>
                                        </td>
                                        <td style="padding: 1rem 0.5rem;">
                                            <input type="number" value="3" min="0" max="100" step="0.1" 
                                                   style="width: 80px; padding: 0.5rem; border: 1px solid var(--border); border-radius: var(--radius); background: var(--background); color: var(--foreground);">
                                        </td>
                                        <td style="padding: 1rem 0.5rem;">
                                            <span style="color: var(--muted-foreground); font-size: 0.875rem;">Custom features • Dedicated account manager • API access</span>
                                        </td>
                                        <td style="padding: 1rem 0.5rem; text-align: center;">
                                            <label style="display: inline-flex; align-items: center; cursor: pointer;">
                                                <input type="checkbox" checked style="margin-right: 0.5rem;">
                                                <span style="color: var(--foreground); font-size: 0.875rem;">Active</span>
                                            </label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Action Buttons -->
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid var(--border);">
                            <button class="btn btn-outline">
                                <i class="fas fa-plus" style="margin-right: 0.5rem;"></i>
                                Add New Tier
                            </button>
                            <button class="btn btn-primary">
                                <i class="fas fa-save" style="margin-right: 0.5rem;"></i>
                                Save Pricing Tiers
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Additional Settings Card -->
                <div class="card">
                    <div class="card-header" style="padding: 1.5rem; border-bottom: 1px solid var(--border);">
                        <h2 style="font-size: 1.25rem; font-weight: 600; margin: 0; color: var(--foreground);">
                            <i class="fas fa-cogs" style="margin-right: 0.5rem; color: var(--primary);"></i>
                            Platform Configuration
                        </h2>
                    </div>
                    <div class="card-content" style="padding: 1.5rem;">
                        
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                            <!-- Payment Settings -->
                            <div>
                                <h3 style="font-size: 1rem; font-weight: 600; margin: 0 0 1rem 0; color: var(--foreground);">Payment Settings</h3>
                                <div style="space-y: 1rem;">
                                    <div style="margin-bottom: 1rem;">
                                        <label style="display: block; font-weight: 500; margin-bottom: 0.5rem; color: var(--foreground);">Minimum Payout Amount</label>
                                        <input type="number" value="50" min="0" 
                                               style="width: 100%; padding: 0.75rem; border: 1px solid var(--border); border-radius: var(--radius); background: var(--background); color: var(--foreground);">
                                    </div>
                                    <div style="margin-bottom: 1rem;">
                                        <label style="display: block; font-weight: 500; margin-bottom: 0.5rem; color: var(--foreground);">Payout Schedule</label>
                                        <select style="width: 100%; padding: 0.75rem; border: 1px solid var(--border); border-radius: var(--radius); background: var(--background); color: var(--foreground);">
                                            <option>Weekly</option>
                                            <option selected>Monthly</option>
                                            <option>Bi-weekly</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Platform Fees -->
                            <div>
                                <h3 style="font-size: 1rem; font-weight: 600; margin: 0 0 1rem 0; color: var(--foreground);">Platform Fees</h3>
                                <div>
                                    <div style="margin-bottom: 1rem;">
                                        <label style="display: block; font-weight: 500; margin-bottom: 0.5rem; color: var(--foreground);">Transaction Fee (%)</label>
                                        <input type="number" value="2.5" min="0" max="10" step="0.1" 
                                               style="width: 100%; padding: 0.75rem; border: 1px solid var(--border); border-radius: var(--radius); background: var(--background); color: var(--foreground);">
                                    </div>
                                    <div style="margin-bottom: 1rem;">
                                        <label style="display: block; font-weight: 500; margin-bottom: 0.5rem; color: var(--foreground);">Listing Fee</label>
                                        <input type="number" value="0" min="0" 
                                               style="width: 100%; padding: 0.75rem; border: 1px solid var(--border); border-radius: var(--radius); background: var(--background); color: var(--foreground);">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Save Button -->
                        <div style="margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid var(--border);">
                            <button class="btn btn-primary">
                                <i class="fas fa-save" style="margin-right: 0.5rem;"></i>
                                Save Configuration
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>