<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshops - HelaCraft</title>
    <link rel="stylesheet" href="/HelaCraft/public/assets/css/main.css">
    <link rel="stylesheet" href="/HelaCraft/public/assets/components/header.css">
</head>

<body style="background-color: var(--background); color: var(--foreground); min-height: 100vh; margin: 0; padding: 0; font-family: 'Geist', sans-serif;">
    
    <!-- Header -->
    <?php include __DIR__ . '/../customer/header.php'; ?>

    <!-- Main Content -->
    <main style="max-width: 1200px; margin: 0 auto; padding: 2rem; padding-top: 6rem;">
        
        <!-- Page Title -->
        <header style="margin-bottom: 3rem;">
            <h1 style="font-size: 2rem; font-weight: 600; margin: 0; color: var(--foreground);">Workshops</h1>
        </header>

        <!-- Workshop List -->
        <div style="display: flex; flex-direction: column; gap: 2rem;">
            
            <!-- Workshop 1: Pottery Basics -->
            <div style="display: flex; align-items: center; gap: 2rem; padding: 1.5rem; background-color: var(--card); border: 1px solid var(--border); border-radius: var(--radius);">
                <!-- Workshop Image -->
                <div style="flex-shrink: 0;">
                    <img src="/HelaCraft/public/assets/images/pottery-workshop.jpg" 
                         alt="Pottery Basics Workshop" 
                         style="width: 200px; height: 150px; object-fit: cover; border-radius: var(--radius);"
                         onerror="this.src='https://via.placeholder.com/200x150/e9ecef/666?text=Pottery+Workshop'">
                </div>
                
                <!-- Workshop Details -->
                <div style="flex: 1;">
                    <h2 style="font-size: 1.25rem; font-weight: 600; margin: 0 0 0.5rem 0; color: var(--foreground);">Pottery Basics for Beginners</h2>
                    <p style="color: var(--muted-foreground); margin: 0 0 1rem 0; line-height: 1.5;">
                        Learn the fundamentals of pottery, including hand-building techniques and wheel throwing. All materials provided.
                    </p>
                    <button class="btn btn-primary" style="margin-top: 1rem;">Register</button>
                </div>
            </div>

            <!-- Workshop 2: Candle Making -->
            <div style="display: flex; align-items: center; gap: 2rem; padding: 1.5rem; background-color: var(--card); border: 1px solid var(--border); border-radius: var(--radius);">
                <!-- Workshop Image -->
                <div style="flex-shrink: 0;">
                    <img src="/HelaCraft/public/assets/images/candle-workshop.jpg" 
                         alt="Candle Making Workshop" 
                         style="width: 200px; height: 150px; object-fit: cover; border-radius: var(--radius);"
                         onerror="this.src='https://via.placeholder.com/200x150/e9ecef/666?text=Candle+Making'">
                </div>
                
                <!-- Workshop Details -->
                <div style="flex: 1;">
                    <h2 style="font-size: 1.25rem; font-weight: 600; margin: 0 0 0.5rem 0; color: var(--foreground);">Candle Making Workshop</h2>
                    <p style="color: var(--muted-foreground); margin: 0 0 1rem 0; line-height: 1.5;">
                        Create your own scented candles using natural waxes and essential oils. Take home your handmade creations!
                    </p>
                    <button class="btn btn-primary" style="margin-top: 1rem;">Register</button>
                </div>
            </div>

            <!-- Workshop 3: Jewelry Design -->
            <div style="display: flex; align-items: center; gap: 2rem; padding: 1.5rem; background-color: var(--card); border: 1px solid var(--border); border-radius: var(--radius);">
                <!-- Workshop Image -->
                <div style="flex-shrink: 0;">
                    <img src="/HelaCraft/public/assets/images/jewelry-workshop.jpg" 
                         alt="Jewelry Design Workshop" 
                         style="width: 200px; height: 150px; object-fit: cover; border-radius: var(--radius);"
                         onerror="this.src='https://via.placeholder.com/200x150/e9ecef/666?text=Jewelry+Design'">
                </div>
                
                <!-- Workshop Details -->
                <div style="flex: 1;">
                    <h2 style="font-size: 1.25rem; font-weight: 600; margin: 0 0 0.5rem 0; color: var(--foreground);">Jewelry Design Workshop</h2>
                    <p style="color: var(--muted-foreground); margin: 0 0 1rem 0; line-height: 1.5;">
                        Design and craft unique jewelry pieces using various materials and techniques. Suitable for all skill levels.
                    </p>
                    <button class="btn btn-primary" style="margin-top: 1rem;">Register</button>
                </div>
            </div>

        </div>

    </main>

</body>
</html>
