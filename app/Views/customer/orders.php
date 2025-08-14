<?php
// TODO: Implement orders.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders - HelaCraft</title>
    <link rel="stylesheet" href="/HelaCraft/public/assets/css/main.css">
    <link rel="stylesheet" href="/HelaCraft/public/assets/components/header.css">
</head>
<body style="background-color: var(--background); color: var(--foreground); min-height: 100vh; margin: 0; padding: 0; font-family: 'Geist', sans-serif;">
    
    <!-- Header -->
    <?php include __DIR__ . '/header.php'; ?>

    <!-- Main Content -->
    <main style="max-width: 1200px; margin: 0 auto; padding: 2rem; padding-top: 6rem;">
        <h1 style="font-size: 2rem; font-weight: 600; margin-bottom: 1.5rem; color: var(--foreground);">My Orders</h1>
        <p style="color: var(--muted-foreground); margin-bottom: 2rem;">Here is a list of all the orders you have placed:</p>
        
        <div class="card" style="padding: 1.5rem;">
            <ul style="list-style: none; padding: 0; margin: 0;">
                <li style="padding: 1rem; border-bottom: 1px solid var(--border); display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <span style="font-weight: 600;">Order #1234</span>
                        <span style="color: var(--muted-foreground); margin-left: 1rem;">Handmade Clay Pot</span>
                    </div>
                    <span style="font-weight: 600; color: var(--primary);">$35.00</span>
                </li>
                <li style="padding: 1rem; display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <span style="font-weight: 600;">Order #5678</span>
                        <span style="color: var(--muted-foreground); margin-left: 1rem;">Woven Wall Macrame</span>
                    </div>
                    <span style="font-weight: 600; color: var(--primary);">$55.00</span>
                </li>
            </ul>
        </div>
    </main>
</body>
</html>
