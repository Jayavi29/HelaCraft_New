<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisan Dashboard - HelaCraft</title>
    <link rel="stylesheet" href="/HelaCraft/public/assets/css/main.css">
    <link rel="stylesheet" href="/HelaCraft/public/assets/css/components/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body style="background-color: var(--background); color: var(--foreground); min-height: 100vh; margin: 0; padding: 0; font-family: 'Geist', sans-serif;">
    
    <!-- Main Container -->
    <div style="display: flex; min-height: 100vh;">
        
        <!-- Sidebar -->
        <div style="flex-shrink: 0;">
            <?php include __DIR__ . '/../partials/artisan_sidebar.php'; ?>
        </div>
        
        <!-- Main Content Area -->
        <div style="flex: 1; padding: 2rem; background-color: var(--background);">
            
            <!-- Header Section -->
            <div style="margin-bottom: 2rem;">
                <h1 style="font-size: 2rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--foreground);">
                    Dashboard
                </h1>
            </div>

            <!-- Stats Cards Row -->
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem; margin-bottom: 2rem;">
                
                <!-- Total Sales Card -->
                <div class="card">
                    <div class="card-content">
                        <h3 style="margin: 0 0 0.5rem 0; font-size: 0.9rem; color: var(--muted-foreground); font-weight: 500;">Total Sales</h3>
                        <div style="font-size: 1.5rem; font-weight: 700; color: var(--foreground);">
                            Rs. <?php echo number_format($total_sales ?? 13000, 2); ?>
                        </div>
                    </div>
                </div>

                <!-- Earnings in Escrow Card -->
                <div class="card">
                    <div class="card-content">
                        <h3 style="margin: 0 0 0.5rem 0; font-size: 0.9rem; color: var(--muted-foreground); font-weight: 500;">Earnings in Escrow</h3>
                        <div style="font-size: 1.5rem; font-weight: 700; color: var(--foreground);">
                            Rs. <?php echo number_format($escrow_earnings ?? 4800, 2); ?>
                        </div>
                    </div>
                </div>

                <!-- Orders in Progress Card -->
                <div class="card">
                    <div class="card-content">
                        <h3 style="margin: 0 0 0.5rem 0; font-size: 0.9rem; color: var(--muted-foreground); font-weight: 500;">Orders in Progress</h3>
                        <div style="font-size: 1.5rem; font-weight: 700; color: var(--foreground);">
                            <?php echo $orders_in_progress ?? 7; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Orders Section -->
            <div style="margin-bottom: 2rem;">
                <h2 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 1rem; color: var(--foreground);">
                    Recent Orders
                </h2>
                
                <div class="card">
                    <div class="card-content" style="padding: 0;">
                        <table style="width: 100%; border-collapse: collapse;">
                            <thead>
                                <tr style="border-bottom: 1px solid var(--border);">
                                    <th style="padding: 1rem; text-align: left; font-weight: 600; color: var(--foreground); font-size: 0.9rem;">Order ID</th>
                                    <th style="padding: 1rem; text-align: left; font-weight: 600; color: var(--foreground); font-size: 0.9rem;">Customer</th>
                                    <th style="padding: 1rem; text-align: left; font-weight: 600; color: var(--foreground); font-size: 0.9rem;">Amount</th>
                                    <th style="padding: 1rem; text-align: left; font-weight: 600; color: var(--foreground); font-size: 0.9rem;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sample_orders = $recent_orders ?? [
                                    ['order_id' => 'ORD-001', 'customer' => 'John Doe', 'amount' => 450.00, 'status' => 'In Progress'],
                                    ['order_id' => 'ORD-002', 'customer' => 'Jane Smith', 'amount' => 275.00, 'status' => 'Completed'],
                                    ['order_id' => 'ORD-003', 'customer' => 'Mike Johnson', 'amount' => 320.00, 'status' => 'Pending']
                                ];
                                
                                foreach ($sample_orders as $order): 
                                ?>
                                <tr style="border-bottom: 1px solid var(--border);">
                                    <td style="padding: 1rem; font-size: 0.875rem; color: var(--foreground);"><?php echo htmlspecialchars($order['order_id']); ?></td>
                                    <td style="padding: 1rem; font-size: 0.875rem; color: var(--foreground);"><?php echo htmlspecialchars($order['customer']); ?></td>
                                    <td style="padding: 1rem; font-size: 0.875rem; color: var(--foreground);">Rs. <?php echo number_format($order['amount'], 2); ?></td>
                                    <td style="padding: 1rem; font-size: 0.875rem;">
                                        <span class="badge badge-sm" style="
                                            padding: 0.25rem 0.5rem; 
                                            border-radius: var(--radius); 
                                            font-size: 0.75rem;
                                            <?php 
                                            switch($order['status']) {
                                                case 'Completed':
                                                    echo 'background-color: var(--success); color: var(--primary-foreground);';
                                                    break;
                                                case 'In Progress':
                                                    echo 'background-color: var(--chart-4); color: var(--primary-foreground);';
                                                    break;
                                                case 'Pending':
                                                    echo 'background-color: var(--muted); color: var(--foreground);';
                                                    break;
                                                default:
                                                    echo 'background-color: var(--muted); color: var(--foreground);';
                                            }
                                            ?>
                                        ">
                                            <?php echo htmlspecialchars($order['status']); ?>
                                        </span>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        // Add hover effects to cards
        document.querySelectorAll('.card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
                this.style.transition = 'all 0.2s ease';
            });
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Add hover effects to table rows
        document.querySelectorAll('tbody tr').forEach(row => {
            row.addEventListener('mouseenter', function() {
                this.style.backgroundColor = 'var(--muted)';
            });
            row.addEventListener('mouseleave', function() {
                this.style.backgroundColor = 'transparent';
            });
        });
    </script>

</body>
</html>
                        </div>
                    </div>
                </div>

                <!-- Earnings in Escrow Card -->
                <div class="card" style="background-color: #f8f8f8; border: 1px solid #ddd;">
                    <div class="card-content">
                        <h3 style="margin: 0 0 0.5rem 0; font-size: 0.9rem; color: #666; font-weight: 500;">Earnings in Escrow</h3>
                        <div style="font-size: 1.5rem; font-weight: 700; color: #333;">
                            = Rs. <?php echo number_format($earnings_in_escrow ?? 15000, 2); ?>
                        </div>
                    </div>
                </div>

                <!-- Orders in Progress Card -->
                <div class="card">
                    <div class="card-content">
                        <h3 style="margin: 0 0 0.5rem 0; font-size: 0.9rem; color: var(--muted-foreground); font-weight: 500;">Orders in Progress</h3>
                        <div style="font-size: 1.5rem; font-weight: 700; color: var(--foreground);">
                            = <?php echo $orders_in_progress ?? 5; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Orders Section -->
            <div style="margin-bottom: 2rem;">
                <h2 style="font-size: 1.2rem; font-weight: 600; margin-bottom: 1rem; color: var(--foreground);">
                    Recent Orders
                </h2>
                
                <div class="card">
                    <div class="card-content" style="padding: 0;">
                        <table style="width: 100%; border-collapse: collapse;">
                            <thead>
                                <tr style="border-bottom: 1px solid var(--border);">
                                    <th style="padding: 1rem; text-align: left; font-weight: 600; color: var(--foreground); font-size: 0.9rem;">Order ID</th>
                                    <th style="padding: 1rem; text-align: left; font-weight: 600; color: var(--foreground); font-size: 0.9rem;">Customer</th>
                                    <th style="padding: 1rem; text-align: left; font-weight: 600; color: var(--foreground); font-size: 0.9rem;">Amount</th>
                                    <th style="padding: 1rem; text-align: left; font-weight: 600; color: var(--foreground); font-size: 0.9rem;">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sample_orders = $recent_orders ?? [
                                    ['order_id' => 'ORD-001', 'customer' => 'John Doe', 'amount' => 450.00, 'status' => 'In Progress'],
                                    ['order_id' => 'ORD-002', 'customer' => 'Jane Smith', 'amount' => 275.00, 'status' => 'Completed'],
                                    ['order_id' => 'ORD-003', 'customer' => 'Mike Johnson', 'amount' => 320.00, 'status' => 'Pending']
                                ];
                                
                                foreach ($sample_orders as $order): 
                                ?>
                                <tr style="border-bottom: 1px solid var(--border);">
                                    <td style="padding: 1rem; font-size: 0.875rem; color: var(--foreground);"><?php echo htmlspecialchars($order['order_id']); ?></td>
                                    <td style="padding: 1rem; font-size: 0.875rem; color: var(--foreground);"><?php echo htmlspecialchars($order['customer']); ?></td>
                                    <td style="padding: 1rem; font-size: 0.875rem; color: var(--foreground);">Rs. <?php echo number_format($order['amount'], 2); ?></td>
                                    <td style="padding: 1rem; font-size: 0.875rem;">
                                        <span class="badge badge-sm" style="
                                            padding: 0.25rem 0.5rem; 
                                            border-radius: var(--radius); 
                                            font-size: 0.75rem;
                                            <?php 
                                            switch($order['status']) {
                                                case 'Completed':
                                                    echo 'background-color: var(--success); color: var(--primary-foreground);';
                                                    break;
                                                case 'In Progress':
                                                    echo 'background-color: var(--chart-4); color: var(--primary-foreground);';
                                                    break;
                                                case 'Pending':
                                                    echo 'background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb;';
                                                    break;
                                                default:
                                                    echo 'background-color: #e2e3e5; color: #383d41; border: 1px solid #c6c8ca;';
                                            }
                                            ?>
                                        ">
                                            <?php echo htmlspecialchars($order['status']); ?>
                                        </span>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div style="display: flex; gap: 1rem; justify-content: flex-end;">
                <button class="btn btn-outline" style="background-color: #c19a6b; color: white; border: 1px solid #c19a6b;">
                    <i class="fas fa-plus" style="margin-right: 0.5rem;"></i>
                    Add Product
                </button>
                <button class="btn btn-primary" style="background-color: #8b6f47; border: 1px solid #8b6f47;">
                    <i class="fas fa-calendar-plus" style="margin-right: 0.5rem;"></i>
                    Add new Workshop
                </button>
            </div>

        </div>
    </div>

    <script>
        // Add click handlers for buttons
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function() {
                const text = this.textContent.trim();
                if (text.includes('Add Product')) {
                    // Redirect to add product page
                    window.location.href = '/HelaCraft/artisan/products/create';
                } else if (text.includes('Add new Workshop')) {
                    // Redirect to add workshop page
                    window.location.href = '/HelaCraft/artisan/workshops/create';
                }
            });
        });

        // Add hover effects to table rows
        document.querySelectorAll('tbody tr').forEach(row => {
            row.addEventListener('mouseenter', function() {
                this.style.backgroundColor = '#f0f0f0';
            });
            row.addEventListener('mouseleave', function() {
                this.style.backgroundColor = 'transparent';
            });
        });
    </script>

</body>
</html>
