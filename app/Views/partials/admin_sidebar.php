<nav class="sidebar" style="background-color: var(--sidebar); color: var(--sidebar-foreground); border-right: 1px solid var(--sidebar-border);">
    <!-- Logo Section -->
    <div style="padding: 0 1.5rem 2rem 1.5rem; border-bottom: 1px solid var(--sidebar-border);">
        <div style="display: flex; align-items: center; gap: 0.5rem;">
            <div style="width: 24px; height: 24px; background-color: var(--primary); border-radius: 50%;"></div>
            <span style="font-weight: 600; color: var(--sidebar-foreground); font-size: 1.1rem;">Hela Craft</span>
        </div>
    </div>

    <!-- Navigation Section -->
    <div style="padding: 2rem 0;">
        <div style="padding: 0 1.5rem 1rem 1.5rem;">
            <span style="font-size: 0.75rem; font-weight: 600; color: var(--muted-foreground); text-transform: uppercase; letter-spacing: 0.05em;">Navigation</span>
        </div>
        
        <ul class="sidebar-nav">
            <li>
                <a href="/HelaCraft/public/admin/dashboard" class="sidebar-link">
                    <i class="fas fa-chart-line" style="width: 16px; font-size: 14px;"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li>
                <a href="/HelaCraft/public/admin/user-management" class="sidebar-link">
                    <i class="fas fa-users" style="width: 16px; font-size: 14px;"></i>
                    <span>User Management</span>
                </a>
            </li>
            
            <li>
                <a href="/HelaCraft/public/admin/platform-settings" class="sidebar-link">
                    <i class="fas fa-cog" style="width: 16px; font-size: 14px;"></i>
                    <span>Platform Settings</span>
                </a>
            </li>
            
            <li>
                <a href="/HelaCraft/public/admin/reports" class="sidebar-link">
                    <i class="fas fa-chart-bar" style="width: 16px; font-size: 14px;"></i>
                    <span>Reporting</span>
                </a>
            </li>
        </ul>
    </div>
    
    <!-- Quick Actions Section -->
    <div style="padding: 1rem 1.5rem; margin-top: 2rem; border-top: 1px solid var(--sidebar-border);">
        <span style="font-size: 0.75rem; font-weight: 600; color: var(--muted-foreground); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 1rem; display: block;">Quick Actions</span>
        
        <button class="btn btn-primary btn-sm btn-block" style="margin-bottom: 0.5rem;"
                onclick="window.location.href='/HelaCraft/public/admin/user-management'">
            Add New User
        </button>
        
        <button class="btn btn-secondary btn-sm btn-block"
                onclick="window.location.href='/HelaCraft/public/admin/reports'">
            Generate Report
        </button>
    </div>
</nav>
