<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Order Request - HelaCraft</title>
    <link rel="stylesheet" href="/HelaCraft/public/assets/css/main.css">
    <link rel="stylesheet" href="/HelaCraft/public/assets/components/header.css">
</head>

<body style="background-color: var(--background); color: var(--foreground); min-height: 100vh; margin: 0; padding: 0; font-family: 'Geist', sans-serif;">
    
    <!-- Header -->
    <?php include __DIR__ . '/header.php'; ?>

    <!-- Main Content -->
    <main style="max-width: 800px; margin: 0 auto; padding: 2rem; padding-top: 6rem;">
        
        <!-- Request Form Card -->
        <div class="card" style="padding: 2rem;">
            <!-- Form Header -->
            <header style="margin-bottom: 2rem;">
                <h1 style="font-size: 1.5rem; font-weight: 600; margin: 0; color: var(--foreground);">Custom Order Request</h1>
            </header>

            <!-- Request Form -->
            <form action="/submit-request" method="POST" enctype="multipart/form-data">
                
                <!-- Product Name Field -->
                <div style="margin-bottom: 1.5rem;">
                    <label for="product_name" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--foreground);">Product Name</label>
                    <input type="text" 
                           id="product_name" 
                           name="product_name" 
                           placeholder="Enter product name"
                           style="width: 100%; box-sizing: border-box; padding: 0.75rem; border: 1px solid var(--border); border-radius: var(--radius); background-color: var(--card); color: var(--foreground); font-size: 0.875rem;"
                           required>
                </div>

                <!-- Category Field -->
                <div style="margin-bottom: 1.5rem;">
                    <label for="category" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--foreground);">Category</label>
                    <select id="category" 
                            name="category"
                            style="width: 100%; box-sizing: border-box; padding: 0.75rem; border: 1px solid var(--border); border-radius: var(--radius); background-color: var(--card); color: var(--foreground); font-size: 0.875rem; cursor: pointer;"
                            required>
                        <option value="">Select category</option>
                        <option value="pottery">Pottery</option>
                        <option value="jewelry">Jewelry</option>
                        <option value="textiles">Textiles</option>
                        <option value="woodwork">Woodwork</option>
                        <option value="metalwork">Metalwork</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <!-- Description Field -->
                <div style="margin-bottom: 1.5rem;">
                    <label for="description" style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--foreground);">Description</label>
                    <textarea id="description" 
                              name="description" 
                              placeholder="Describe your custom order request in detail"
                              rows="5"
                              style="width: 100%; box-sizing: border-box; padding: 0.75rem; border: 1px solid var(--border); border-radius: var(--radius); background-color: var(--card); color: var(--foreground); font-size: 0.875rem; resize: vertical;"
                              required></textarea>
                </div>

                <!-- Upload Images Field -->
                <div style="margin-bottom: 2rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 500; color: var(--foreground);">Upload Images</label>
                    
                    <!-- File Upload Area -->
                    <div style="border: 2px dashed var(--border); border-radius: var(--radius); padding: 3rem 2rem; text-align: center; background-color: var(--muted); transition: border-color 0.2s ease;">
                        <div style="margin-bottom: 1rem;">
                            <p style="font-size: 1rem; color: var(--muted-foreground); margin: 0 0 0.5rem 0;">Drag and drop images here</p>
                            <p style="font-size: 0.875rem; color: var(--muted-foreground); margin: 0;">Or browse to upload</p>
                        </div>
                        
                        <!-- Hidden File Input -->
                        <input type="file" 
                               id="images" 
                               name="images[]" 
                               multiple 
                               accept="image/*"
                               style="display: none;">
                        
                        <!-- Browse Button -->
                        <button type="button" 
                                class="btn btn-secondary">
                            Browse
                        </button>
                    </div>
                </div>

                <!-- Submit Button -->
                <div style="text-align: right;">
                    <button type="submit" class="btn btn-primary" style="padding: 0.75rem 2rem;">
                        Submit Request
                    </button>
                </div>

            </form>
        </div>

    </main>

</body>
</html>
