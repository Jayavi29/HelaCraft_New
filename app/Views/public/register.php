<style>
    .form-container { max-width: 550px; margin: 2rem auto; padding: 2rem; background: #fff; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
    .tab-nav { display: flex; border-bottom: 1px solid #ccc; margin-bottom: 1.5rem; }
    .tab-nav button { background: none; border: none; padding: 1rem 1.5rem; cursor: pointer; font-size: 1rem; }
    .tab-nav button.active { border-bottom: 3px solid #3498db; font-weight: bold; }
    .tab-content { display: none; }
    .tab-content.active { display: block; }
    .form-group { margin-bottom: 1.5rem; }
    .form-group label { display: block; margin-bottom: 0.5rem; font-weight: bold; }
    .form-group input { width: 100%; padding: 0.75rem; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
    .form-button { width: 100%; padding: 0.75rem; border: none; border-radius: 4px; background: #3498db; color: white; font-size: 1rem; cursor: pointer; }
</style>

<div class="container">
    <div class="form-container">
        <h2>Create an Account</h2>
        <div class="tab-nav">
            <button class="tab-button active" onclick="showTab('customer')">Register as Customer</button>
            <button class="tab-button" onclick="showTab('artisan')">Register as Artisan</button>
        </div>

        <!-- Customer Registration Form -->
        <div id="customer" class="tab-content active">
            <form action="/register" method="POST">
                <input type="hidden" name="role" value="customer">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="form-button">Register as Customer</button>
            </form>
        </div>

        <!-- Artisan Registration Form -->
        <div id="artisan" class="tab-content">
            <p>To register as an artisan, please fill out the customer form first. You will be prompted to provide more details about your craft after creating your account.</p>
            <!-- A simplified message for now. The full artisan form is a separate UI. -->
            <a href="#" class="form-button" style="text-align:center; display:block; text-decoration: none;">Proceed with Artisan Registration</a>
        </div>
    </div>
</div>

<script>
    function showTab(tabName) {
        // Hide all tab contents
        document.querySelectorAll('.tab-content').forEach(tab => tab.classList.remove('active'));
        // Deactivate all tab buttons
        document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
        
        // Show the selected tab content
        document.getElementById(tabName).classList.add('active');
        // Activate the selected tab button
        event.currentTarget.classList.add('active');
    }
</script>