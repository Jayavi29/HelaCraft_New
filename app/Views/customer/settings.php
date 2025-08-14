<?php
// TODO: Implement settings.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings - HelaCraft</title>
    <link rel="stylesheet" href="/HelaCraft/public/assets/css/main.css">
    <link rel="stylesheet" href="/HelaCraft/public/assets/components/header.css">
</head>
<body style="background-color: var(--background); color: var(--foreground); min-height: 100vh; margin: 0; padding: 0; font-family: 'Geist', sans-serif;">
    
    <!-- Header -->
    <?php include __DIR__ . '/header.php'; ?>

    <!-- Main Content -->
    <main style="max-width: 800px; margin: 0 auto; padding: 2rem; padding-top: 6rem;">
        <h1 style="font-size: 2rem; font-weight: 600; margin-bottom: 1.5rem; color: var(--foreground);">Account Settings</h1>
        <p style="color: var(--muted-foreground); margin-bottom: 2rem;">Update your account information below.</p>
        
        <div class="card" style="padding: 2rem;">
            <form action="/update-settings" method="POST">
                <div style="margin-bottom: 1.5rem;">
                    <label for="name" style="display: block; font-weight: 500; margin-bottom: 0.5rem; color: var(--foreground);">Name:</label>
                    <input type="text" id="name" name="name" value="M.S. Thalagala" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--border); border-radius: var(--radius); background: var(--background); color: var(--foreground); box-sizing: border-box;">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label for="email" style="display: block; font-weight: 500; margin-bottom: 0.5rem; color: var(--foreground);">Email:</label>
                    <input type="email" id="email" name="email" value="ms.thalagala@example.com" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--border); border-radius: var(--radius); background: var(--background); color: var(--foreground); box-sizing: border-box;">
                </div>

                <div style="margin-bottom: 2rem;">
                    <label for="password" style="display: block; font-weight: 500; margin-bottom: 0.5rem; color: var(--foreground);">New Password (leave blank to keep current):</label>
                    <input type="password" id="password" name="password" style="width: 100%; padding: 0.75rem; border: 1px solid var(--border); border-radius: var(--radius); background: var(--background); color: var(--foreground); box-sizing: border-box;">
                </div>

                <button type="submit" class="btn btn-primary" style="padding: 0.75rem 1.5rem;">Update Settings</button>
            </form>
        </div>
    </main>
</body>
</html>
