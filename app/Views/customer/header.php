<header class="main-header">
    <div class="container">
        <!-- Site Logo -->
        <div style="display: flex; align-items: center;">
            <img src="/HelaCraft/public/assets/images/logo/logo.jpeg" alt="HelaCraft Logo" style="height: 40px; margin-right: 1rem;">
            <a href="/HelaCraft/public/customer/dashboard" class="logo" style="text-decoration: none; color: inherit;">HelaCrafts</a>
        </div>

        <!-- Main Navigation Links -->
        <nav class="main-nav">
            <a href="/HelaCraft/public/customer/dashboard">Dashboard</a>
            <a href="/HelaCraft/public/shop">Shop</a>
            <a href="/HelaCraft/public/auction">Auctions</a>
            <a href="/HelaCraft/public/workshop">Workshops</a>
            <a href="/HelaCraft/public/request">Custom Items</a>
        </nav>

        <!-- User Actions & Profile -->
        <nav class="user-nav" style="display: flex; align-items: center; gap: 1rem;">
            <!-- Cart Icon with Badge -->
            <a href="/HelaCraft/public/cart" style="position: relative; text-decoration: none; color: var(--muted-foreground); display: flex; align-items: center; padding: 0.5rem; border-radius: var(--radius); transition: all 0.2s ease;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="8" cy="21" r="1"></circle>
                    <circle cx="19" cy="21" r="1"></circle>
                    <path d="m2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43h-15.12"></path>
                </svg>
                <!-- Cart Badge -->
                <span style="position: absolute; top: 2px; right: 2px; background: var(--destructive); color: white; border-radius: 50%; width: 16px; height: 16px; display: flex; align-items: center; justify-content: center; font-size: 0.625rem; font-weight: 600; border: 2px solid white;">3</span>
            </a>

            <!-- Notifications Icon -->
            <a href="/HelaCraft/public/notifications" style="position: relative; text-decoration: none; color: var(--muted-foreground); display: flex; align-items: center; padding: 0.5rem; border-radius: var(--radius); transition: all 0.2s ease;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
                    <path d="m13.73 21a2 2 0 0 1-3.46 0"></path>
                </svg>
                <!-- Notification Badge -->
                <span style="position: absolute; top: 2px; right: 2px; background: var(--primary); color: white; border-radius: 50%; width: 16px; height: 16px; display: flex; align-items: center; justify-content: center; font-size: 0.625rem; font-weight: 600; border: 2px solid white;">2</span>
            </a>

            <!-- Profile Section -->
            <div style="display: flex; align-items: center;">
                <!-- Profile Avatar & Info -->
                <a href="/HelaCraft/customer/profile" style="display: flex; align-items: center; gap: 0.75rem; text-decoration: none; padding: 0.5rem; border-radius: var(--radius);">
                    <!-- Profile Avatar -->
                    <div style="width: 32px; height: 32px; border-radius: 50%; background: linear-gradient(135deg, var(--primary), #8b5cf6); display: flex; align-items: center; justify-content: center; color: white; font-weight: 600; font-size: 0.75rem;">
                        MS
                    </div>
                    <!-- User Info -->
                    <div style="display: flex; flex-direction: column; text-align: left;">
                        <span style="font-size: 0.875rem; font-weight: 500; color: var(--foreground); line-height: 1.2;">M.S. Thalagala</span>
                        <span style="font-size: 0.75rem; color: var(--muted-foreground); line-height: 1.2;">Customer</span>
                    </div>
                </a>
            </div>
        </nav>
    </div>
</header>