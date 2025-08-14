<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Check if a title variable exists, otherwise use a default -->
    <title><?php echo isset($title) ? htmlspecialchars($title) : 'Artisan & Craft Marketplace'; ?></title>
    <!-- We'll create this CSS file next -->
    <link rel="stylesheet" href="/css/main.style.css">
</head>
<body>

    <div class="site-container">
        
        <?php
            // Include the main public header
            require_once __DIR__ . '/../partials/header.php';
        ?>

        <main class="main-content">
            <?php
                // This is where the specific page content will be injected
                // The $viewPath variable is available from our Controller's view() method
                if (isset($viewPath)) {
                    require_once $viewPath;
                }
            ?>
        </main>

        <?php
            // Include the main public footer
            require_once __DIR__ . '/../partials/footer.php';
        ?>

    </div>

    <!-- You can add global JS files here if needed -->
    <script src="/js/app.js"></script>

</body>
</html>