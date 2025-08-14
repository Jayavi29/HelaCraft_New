# Hela-Craft

Explanation of Key Directories:
app/:
This is the heart of your application. All your PHP classes (Controllers, Models, Core logic) reside here. It is kept separate from the public directory for security.

app/Core/:
Contains the small, reusable framework classes that will power your application, like the router that reads the URL snd decides which controller to run.

app/Middleware/:
Middleware are classes that run before a controller method is executed. They are perfect for protecting routes, for example, checking if a user is logged in before they can access the "Customer Dashboard".

public/:
This is the only folder that should be accessible directly from a web browser. It contains your main index.php, which will initialize the application, and all your assets (CSS, JavaScript, images).

config/:
Holds configuration files. Storing settings like database credentials here makes it easy to change them without digging through your code.

routes/:Defining all your application's URLs in one place (web.php) makes them easy to manage and provides a quick overview of all available endpoints.

/HelaCrafts/
|
|-- app/
|   |-- Controllers/
|   |   |-- AuthController.php          # Handles Login, Registration, Logout
|   |   |-- PublicController.php        # Handles public pages like Homepage, About
|   |   |-- ProductController.php       # Handles Shop and Product details (public)
|   |   |-- AuctionController.php       # Handles Auction listings (public)
|   |   |-- WorkshopController.php      # Handles Workshop listings (public)
|   |   |
|   |   |-- Customer/
|   |   |   |-- DashboardController.php
|   |   |   |-- OrderController.php
|   |   |   |-- BidController.php
|   |   |   |-- RegisteredWorkshopController.php
|   |   |   |-- CustomRequestController.php
|   |   |
|   |   |-- Artisan/
|   |   |   |-- DashboardController.php
|   |   |   |-- ProductController.php       # Artisan's own product management
|   |   |   |-- OrderController.php
|   |   |   |-- WorkshopController.php
|   |   |   |-- AuctionProposalController.php
|   |   |   |-- CustomRequestController.php
|   |   |   |-- EarningsController.php
|   |   |
|   |   |-- Verification/
|   |   |   |-- DashboardController.php
|   |   |   |-- ArtisanApprovalController.php
|   |   |   |-- WorkshopApprovalController.php
|   |   |   |-- AuctionManagementController.php
|   |   |   |-- DisputeController.php
|   |   |   |-- DeliveryController.php
|   |   |
|   |   |-- Admin/
|   |       |-- DashboardController.php
|   |       |-- UserManagementController.php
|   |       |-- SettingsController.php
|   |       |-- ReportingController.php
|   |
|   |-- Core/
|   |   |-- App.php                   # Core application class
|   |   |-- Controller.php            # Base Controller (all controllers extend this)
|   |   |-- Database.php              # Handles database connection (PDO)
|   |   |-- Model.php                 # Base Model (all models extend this)
|   |   |-- Router.php                # Parses URLs and calls controllers
|   |   |-- Request.php               # Handles HTTP requests ($_GET, $_POST)
|   |   |-- Session.php               # Manages user sessions
|   |
|   |-- Middleware/
|   |   |-- AuthMiddleware.php        # Checks if user is logged in
|   |   |-- GuestMiddleware.php       # Checks if user is a guest (not logged in)
|   |   |-- RoleMiddleware.php        # Checks user role (e.g., 'artisan', 'admin')
|   |
|   |-- Models/
|   |   |-- User.php
|   |   |-- Product.php
|   |   |-- Auction.php
|   |   |-- AuctionBid.php
|   |   |-- AuctionItem.php
|   |   |-- Workshop.php
|   |   |-- WorkshopRegistration.php
|   |   |-- Order.php
|   |   |-- OrderItem.php
|   |   |-- Cart.php
|   |   |-- CustomRequest.php
|   |   |-- Proposal.php
|   |   |-- Dispute.php
|   |   |-- Payout.php
|   |
|   |-- Views/
|   |   |-- partials/                 # Reusable view components
|   |   |   |-- header.php
|   |   |   |-- footer.php
|   |   |   |-- customer_sidebar.php
|   |   |   |-- artisan_sidebar.php
|   |   |   |-- admin_sidebar.php
|   |   |
|   |   |-- public/
|   |   |   |-- home.php
|   |   |   |-- login.php
|   |   |   |-- register.php
|   |   |   |-- product_listing.php
|   |   |   |-- product_detail.php
|   |   |   |-- auction_listing.php
|   |   |   |-- auction_detail.php
|   |   |   |-- workshop_listing.php
|   |   |   |-- workshop_detail.php
|   |   |
|   |   |-- customer/
|   |   |   |-- dashboard.php
|   |   |   |-- orders.php
|   |   |   |-- bids.php
|   |   |   |-- workshops.php
|   |   |   |-- settings.php
|   |   |   |-- request_form.php
|   |   |   |-- view_proposals.php
|   |   |
|   |   |-- artisan/
|   |   |   |-- dashboard.php
|   |   |   |-- registration_form.php
|   |   |   |-- products.php
|   |   |   |-- product_form.php      # For add/edit product
|   |   |   |-- orders.php
|   |   |   |-- workshops.php
|   |   |   |-- workshop_form.php
|   |   |   |-- custom_requests.php
|   |   |   |-- earnings.php
|   |   |
|   |   |-- verification/
|   |   |   |-- dashboard.php
|   |   |   |-- pending_artisans.php
|   |   |   |-- workshop_management.php
|   |   |   |-- auction_management.php
|   |   |   |-- dispute_center.php
|   |   |
|   |   |-- admin/
|   |       |-- dashboard.php
|   |       |-- user_management.php
|   |       |-- user_form.php
|   |       |-- settings.php
|   |       |-- reports.php
|
|-- public/                             # Web server's public root folder
|   |-- css/
|   |   |-- main.style.css
|   |-- js/
|   |   |-- app.js
|   |-- images/
|   |   |-- (site logos, banners, etc.)
|   |-- uploads/                        # User-uploaded files (product images, documents)
|   |
|   |-- .htaccess                       # Redirects all requests to index.php
|   |-- index.php                       # SINGLE ENTRY POINT for the application
|
|-- config/
|   |-- app.php                         # Main application configuration
|   |-- database.php                    # Database connection credentials
|
|-- routes/
|   |-- web.php                         # All URL routes will be defined here
|
|-- .env.example                        # Example environment file
|-- composer.json                       # For PHP dependency management (e.g., autoloading)

