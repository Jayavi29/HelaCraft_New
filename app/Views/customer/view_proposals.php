<?php
// TODO: Implement view_proposals.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Proposals - HelaCraft</title>
    <link rel="stylesheet" href="/HelaCraft/public/assets/css/main.css">
    <link rel="stylesheet" href="/HelaCraft/public/assets/components/header.css">
</head>
<body style="background-color: var(--background); color: var(--foreground); min-height: 100vh; margin: 0; padding: 0; font-family: 'Geist', sans-serif;">
    
    <!-- Header -->
    <?php include __DIR__ . '/header.php'; ?>

    <!-- Main Content -->
    <main style="max-width: 1200px; margin: 0 auto; padding: 2rem; padding-top: 6rem;">
        <h1 style="font-size: 2rem; font-weight: 600; margin-bottom: 1.5rem; color: var(--foreground);">Artisan Proposals</h1>
        <p style="color: var(--muted-foreground); margin-bottom: 2rem;">Here are the proposals submitted for your custom requests:</p>
        
        <div class="card" style="padding: 1.5rem;">
            <ul style="list-style: none; padding: 0; margin: 0;">
                <li style="padding: 1rem; border-bottom: 1px solid var(--border); display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <span style="font-weight: 600;">Proposal #1</span>
                        <span style="color: var(--muted-foreground); margin-left: 1rem;">"Handmade Clay Pot"</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <span style="font-weight: 600; color: var(--primary);">$30.00</span>
                        <button class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.875rem;">View Details</button>
                    </div>
                </li>
                <li style="padding: 1rem; display: flex; justify-content: space-between; align-items: center;">
                    <div>
                        <span style="font-weight: 600;">Proposal #2</span>
                        <span style="color: var(--muted-foreground); margin-left: 1rem;">"Woven Wall Macrame"</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <span style="font-weight: 600; color: var(--primary);">$50.00</span>
                        <button class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.875rem;">View Details</button>
                    </div>
                </li>
            </ul>
        </div>
    </main>
</body>
</html>
