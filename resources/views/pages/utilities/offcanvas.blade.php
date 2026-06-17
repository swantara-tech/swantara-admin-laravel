@extends('layouts.app')

@section('title', 'Offcanvas')
@section('breadcrumb', 'Offcanvas')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Offcanvas</h1>
        <p>Hidden side panels that slide in from any edge for navigation, filters, settings, and shopping carts</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary" onclick="MetroAdmin.openDSGTOffcanvas('dsgt-offcanvas-right-demo')">
            <i class="fa-solid fa-columns"></i>
            <span>Try Offcanvas</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What is Offcanvas?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Offcanvas panels are hidden drawers that slide in from the edges of the screen (left, right, top, or bottom). They are perfect for navigation menus, shopping carts, filters, settings panels, and user profiles. Unlike modals, offcanvas panels maintain context by showing the backdrop while allowing users to interact with the panel content.</p>
            </div>
        </div>
    </div>
</div>

<!-- Offcanvas Positions -->
<div class="dsgt-offcanvas-section-title">
    <i class="fa-solid fa-arrows-left-right"></i>
    Offcanvas Positions <span class="badge badge-primary">Essential</span>
</div>

<div class="dsgt-offcanvas-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <div>
                    <h3>Left Panel</h3>
                    <p class="card-subtitle">Slide from left edge</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-offcanvas-example">
                <span class="dsgt-offcanvas-example-label">Navigation Menu</span>
                <button class="btn btn-primary" onclick="MetroAdmin.openDSGTOffcanvas('dsgt-offcanvas-left-nav')">
                    <i class="fa-solid fa-bars"></i>
                    Open Left Panel
                </button>
                <div class="dsgt-offcanvas-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Perfect for navigation menus
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
                <div>
                    <h3>Right Panel</h3>
                    <p class="card-subtitle">Slide from right edge</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-offcanvas-example">
                <span class="dsgt-offcanvas-example-label">Shopping Cart</span>
                <button class="btn btn-success" onclick="MetroAdmin.openDSGTOffcanvas('dsgt-offcanvas-right-cart')">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Open Right Panel
                </button>
                <div class="dsgt-offcanvas-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Ideal for carts and details
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-arrow-up"></i>
                </div>
                <div>
                    <h3>Top Panel</h3>
                    <p class="card-subtitle">Slide from top edge</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-offcanvas-example">
                <span class="dsgt-offcanvas-example-label">Notifications</span>
                <button class="btn btn-warning" onclick="MetroAdmin.openDSGTOffcanvas('dsgt-offcanvas-top-notif')">
                    <i class="fa-solid fa-bell"></i>
                    Open Top Panel
                </button>
                <div class="dsgt-offcanvas-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Great for notifications
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-arrow-down"></i>
                </div>
                <div>
                    <h3>Bottom Panel</h3>
                    <p class="card-subtitle">Slide from bottom edge</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-offcanvas-example">
                <span class="dsgt-offcanvas-example-label">Media Player</span>
                <button class="btn btn-info" onclick="MetroAdmin.openDSGTOffcanvas('dsgt-offcanvas-bottom-player')">
                    <i class="fa-solid fa-music"></i>
                    Open Bottom Panel
                </button>
                <div class="dsgt-offcanvas-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Perfect for media controls
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Offcanvas Sizes -->
<div class="dsgt-offcanvas-section-title">
    <i class="fa-solid fa-expand"></i>
    Offcanvas Sizes
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-text-width"></i>
            </div>
            <div>
                <h3>Size Variations</h3>
                <p class="card-subtitle">Small, medium, large, fullscreen</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-offcanvas-example">
            <span class="dsgt-offcanvas-example-label">Width Options</span>
            <div style="display: flex; gap: 12px; flex-wrap: wrap; justify-content: center;">
                <button class="btn btn-secondary" onclick="MetroAdmin.openDSGTOffcanvas('dsgt-offcanvas-size-sm')">
                    Small (300px)
                </button>
                <button class="btn btn-primary" onclick="MetroAdmin.openDSGTOffcanvas('dsgt-offcanvas-size-md')">
                    Medium (400px)
                </button>
                <button class="btn btn-success" onclick="MetroAdmin.openDSGTOffcanvas('dsgt-offcanvas-size-lg')">
                    Large (600px)
                </button>
                <button class="btn btn-warning" onclick="MetroAdmin.openDSGTOffcanvas('dsgt-offcanvas-size-full')">
                    Fullscreen
                </button>
            </div>
            <div class="dsgt-offcanvas-helper">
                <i class="fa-solid fa-circle-info"></i>
                Widths: 300px, 400px, 600px, 100%
            </div>
        </div>
    </div>
</div>

<!-- Advanced Offcanvas -->
<div class="dsgt-offcanvas-section-title">
    <i class="fa-solid fa-gear"></i>
    Advanced Offcanvas
</div>

<div class="dsgt-offcanvas-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-filter"></i>
                </div>
                <div>
                    <h3>Filter Panel</h3>
                    <p class="card-subtitle">Product filters</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-offcanvas-example">
                <span class="dsgt-offcanvas-example-label">E-commerce Filters</span>
                <button class="btn btn-success" onclick="MetroAdmin.openDSGTOffcanvas('dsgt-offcanvas-filters')">
                    <i class="fa-solid fa-sliders"></i>
                    Open Filters
                </button>
                <div class="dsgt-offcanvas-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Chip-based filter selection
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <div>
                    <h3>Settings Panel</h3>
                    <p class="card-subtitle">Quick settings</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-offcanvas-example">
                <span class="dsgt-offcanvas-example-label">App Settings</span>
                <button class="btn btn-warning" onclick="MetroAdmin.openDSGTOffcanvas('dsgt-offcanvas-settings')">
                    <i class="fa-solid fa-cog"></i>
                    Open Settings
                </button>
                <div class="dsgt-offcanvas-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Toggle switches and options
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div>
                    <h3>User Profile</h3>
                    <p class="card-subtitle">Profile drawer</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-offcanvas-example">
                <span class="dsgt-offcanvas-example-label">Profile Menu</span>
                <button class="btn btn-info" onclick="MetroAdmin.openDSGTOffcanvas('dsgt-offcanvas-profile')">
                    <i class="fa-solid fa-user-circle"></i>
                    Open Profile
                </button>
                <div class="dsgt-offcanvas-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    User info and actions
                </div>
            </div>
        </div>
    </div>
</div>

<!-- OFFCANVAS DEFINITIONS -->

<!-- Backdrop -->
<div id="dsgt-offcanvas-backdrop" class="dsgt-offcanvas-backdrop" onclick="MetroAdmin.closeAllDSGTOffcanvas()" aria-hidden="true"></div>

<!-- Left Offcanvas - Navigation -->
<div id="dsgt-offcanvas-left-nav" class="dsgt-offcanvas dsgt-offcanvas-left" role="dialog" aria-modal="true" aria-label="Navigation Menu">
    <div class="dsgt-offcanvas-header">
        <h3 class="dsgt-offcanvas-title"><i class="fa-solid fa-bars" style="margin-right: 8px;"></i>Navigation</h3>
        <button class="dsgt-offcanvas-close" onclick="MetroAdmin.closeDSGTOffcanvas('dsgt-offcanvas-left-nav')" aria-label="Close navigation menu">
            <i class="fa-solid fa-times" aria-hidden="true"></i>
        </button>
    </div>
    <div class="dsgt-offcanvas-body">
        <div class="dsgt-offcanvas-menu-item active">
            <div class="dsgt-offcanvas-menu-icon">
                <i class="fa-solid fa-house"></i>
            </div>
            <div class="dsgt-offcanvas-menu-content">
                <h4 class="dsgt-offcanvas-menu-title">Dashboard</h4>
                <p class="dsgt-offcanvas-menu-desc">Home overview</p>
            </div>
        </div>
        <div class="dsgt-offcanvas-menu-item">
            <div class="dsgt-offcanvas-menu-icon">
                <i class="fa-solid fa-chart-line"></i>
            </div>
            <div class="dsgt-offcanvas-menu-content">
                <h4 class="dsgt-offcanvas-menu-title">Analytics</h4>
                <p class="dsgt-offcanvas-menu-desc">View statistics</p>
            </div>
        </div>
        <div class="dsgt-offcanvas-menu-item">
            <div class="dsgt-offcanvas-menu-icon">
                <i class="fa-solid fa-shopping-bag"></i>
            </div>
            <div class="dsgt-offcanvas-menu-content">
                <h4 class="dsgt-offcanvas-menu-title">Orders</h4>
                <p class="dsgt-offcanvas-menu-desc">Manage orders</p>
            </div>
        </div>
        <div class="dsgt-offcanvas-menu-item">
            <div class="dsgt-offcanvas-menu-icon">
                <i class="fa-solid fa-box"></i>
            </div>
            <div class="dsgt-offcanvas-menu-content">
                <h4 class="dsgt-offcanvas-menu-title">Products</h4>
                <p class="dsgt-offcanvas-menu-desc">Product catalog</p>
            </div>
        </div>
        <div class="dsgt-offcanvas-menu-item">
            <div class="dsgt-offcanvas-menu-icon">
                <i class="fa-solid fa-users"></i>
            </div>
            <div class="dsgt-offcanvas-menu-content">
                <h4 class="dsgt-offcanvas-menu-title">Customers</h4>
                <p class="dsgt-offcanvas-menu-desc">User management</p>
            </div>
        </div>
        <div class="dsgt-offcanvas-menu-item">
            <div class="dsgt-offcanvas-menu-icon">
                <i class="fa-solid fa-gear"></i>
            </div>
            <div class="dsgt-offcanvas-menu-content">
                <h4 class="dsgt-offcanvas-menu-title">Settings</h4>
                <p class="dsgt-offcanvas-menu-desc">App configuration</p>
            </div>
        </div>
    </div>
</div>

<!-- Right Offcanvas - Shopping Cart -->
<div id="dsgt-offcanvas-right-cart" class="dsgt-offcanvas dsgt-offcanvas-right">
    <div class="dsgt-offcanvas-header">
        <h3 class="dsgt-offcanvas-title"><i class="fa-solid fa-cart-shopping" style="margin-right: 8px;"></i>Shopping Cart (3)</h3>
        <button class="dsgt-offcanvas-close" onclick="MetroAdmin.closeDSGTOffcanvas('dsgt-offcanvas-right-cart')">
            <i class="fa-solid fa-times"></i>
        </button>
    </div>
    <div class="dsgt-offcanvas-body">
        <div class="dsgt-offcanvas-cart-item">
            <img src="https://picsum.photos/seed/product1/120/120" class="dsgt-offcanvas-cart-item-image" alt="Product">
            <div class="dsgt-offcanvas-cart-item-content">
                <h4 class="dsgt-offcanvas-cart-item-title">Wireless Headphones</h4>
                <p class="dsgt-offcanvas-cart-item-price">$79.99</p>
                <p style="font-size: 12px; color: var(--text-secondary); margin: 4px 0 0 0;">Qty: 1</p>
            </div>
            <button class="dsgt-offcanvas-cart-item-remove">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>
        <div class="dsgt-offcanvas-cart-item">
            <img src="https://picsum.photos/seed/product2/120/120" class="dsgt-offcanvas-cart-item-image" alt="Product">
            <div class="dsgt-offcanvas-cart-item-content">
                <h4 class="dsgt-offcanvas-cart-item-title">Smart Watch</h4>
                <p class="dsgt-offcanvas-cart-item-price">$199.99</p>
                <p style="font-size: 12px; color: var(--text-secondary); margin: 4px 0 0 0;">Qty: 1</p>
            </div>
            <button class="dsgt-offcanvas-cart-item-remove">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>
        <div class="dsgt-offcanvas-cart-item">
            <img src="https://picsum.photos/seed/product3/120/120" class="dsgt-offcanvas-cart-item-image" alt="Product">
            <div class="dsgt-offcanvas-cart-item-content">
                <h4 class="dsgt-offcanvas-cart-item-title">Phone Case</h4>
                <p class="dsgt-offcanvas-cart-item-price">$24.99</p>
                <p style="font-size: 12px; color: var(--text-secondary); margin: 4px 0 0 0;">Qty: 2</p>
            </div>
            <button class="dsgt-offcanvas-cart-item-remove">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>
    </div>
    <div class="dsgt-offcanvas-footer">
        <div style="display: flex; justify-content: space-between; margin-bottom: 12px;">
            <span style="font-weight: 600;">Subtotal:</span>
            <span style="font-weight: 700; color: var(--accent); font-size: 18px;">$304.97</span>
        </div>
        <button class="btn btn-primary" style="width: 100%;">
            <i class="fa-solid fa-credit-card"></i>
            Checkout
        </button>
    </div>
</div>

<!-- Top Offcanvas - Notifications -->
<div id="dsgt-offcanvas-top-notif" class="dsgt-offcanvas dsgt-offcanvas-top">
    <div class="dsgt-offcanvas-header">
        <h3 class="dsgt-offcanvas-title"><i class="fa-solid fa-bell" style="margin-right: 8px;"></i>Notifications</h3>
        <button class="dsgt-offcanvas-close" onclick="MetroAdmin.closeDSGTOffcanvas('dsgt-offcanvas-top-notif')">
            <i class="fa-solid fa-times"></i>
        </button>
    </div>
    <div class="dsgt-offcanvas-body">
        <div class="dsgt-offcanvas-menu-item">
            <div class="dsgt-offcanvas-menu-icon" style="background: var(--success); color: white;">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="dsgt-offcanvas-menu-content">
                <h4 class="dsgt-offcanvas-menu-title">Payment Successful</h4>
                <p class="dsgt-offcanvas-menu-desc">Your order has been confirmed</p>
                <p style="font-size: 11px; color: var(--text-secondary); margin: 4px 0 0 0;">2 minutes ago</p>
            </div>
        </div>
        <div class="dsgt-offcanvas-menu-item">
            <div class="dsgt-offcanvas-menu-icon" style="background: var(--info); color: white;">
                <i class="fa-solid fa-user-plus"></i>
            </div>
            <div class="dsgt-offcanvas-menu-content">
                <h4 class="dsgt-offcanvas-menu-title">New User Registered</h4>
                <p class="dsgt-offcanvas-menu-desc">John Doe joined the platform</p>
                <p style="font-size: 11px; color: var(--text-secondary); margin: 4px 0 0 0;">15 minutes ago</p>
            </div>
        </div>
        <div class="dsgt-offcanvas-menu-item">
            <div class="dsgt-offcanvas-menu-icon" style="background: var(--warning); color: white;">
                <i class="fa-solid fa-exclamation"></i>
            </div>
            <div class="dsgt-offcanvas-menu-content">
                <h4 class="dsgt-offcanvas-menu-title">Low Stock Alert</h4>
                <p class="dsgt-offcanvas-menu-desc">Product XYZ is running low</p>
                <p style="font-size: 11px; color: var(--text-secondary); margin: 4px 0 0 0;">1 hour ago</p>
            </div>
        </div>
    </div>
</div>

<!-- Bottom Offcanvas - Media Player -->
<div id="dsgt-offcanvas-bottom-player" class="dsgt-offcanvas dsgt-offcanvas-bottom">
    <div class="dsgt-offcanvas-header">
        <h3 class="dsgt-offcanvas-title"><i class="fa-solid fa-music" style="margin-right: 8px;"></i>Now Playing</h3>
        <button class="dsgt-offcanvas-close" onclick="MetroAdmin.closeDSGTOffcanvas('dsgt-offcanvas-bottom-player')">
            <i class="fa-solid fa-times"></i>
        </button>
    </div>
    <div class="dsgt-offcanvas-body" style="text-align: center;">
        <img src="https://picsum.photos/seed/music/200/200" style="width: 150px; height: 150px; border-radius: 12px; margin-bottom: 16px;" alt="Album">
        <h4 style="margin: 0 0 4px 0;">Summer Vibes</h4>
        <p style="color: var(--text-secondary); margin: 0 0 20px 0;">Chill Beats Playlist</p>
        
        <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 16px;">
            <span style="font-size: 12px; color: var(--text-secondary);">1:24</span>
            <div style="flex: 1; height: 4px; background: rgba(0, 0, 0, 0.08); border-radius: 2px;">
                <div style="width: 35%; height: 100%; background: var(--accent); border-radius: 2px;"></div>
            </div>
            <span style="font-size: 12px; color: var(--text-secondary);">3:45</span>
        </div>
        
        <div style="display: flex; justify-content: center; gap: 20px;">
            <button class="btn btn-ghost" style="font-size: 20px;"><i class="fa-solid fa-backward-step"></i></button>
            <button class="btn btn-primary" style="font-size: 24px; width: 56px; height: 56px; border-radius: 50%;"><i class="fa-solid fa-pause"></i></button>
            <button class="btn btn-ghost" style="font-size: 20px;"><i class="fa-solid fa-forward-step"></i></button>
        </div>
    </div>
</div>

<!-- Size Offcanvas -->
<div id="dsgt-offcanvas-size-sm" class="dsgt-offcanvas dsgt-offcanvas-left dsgt-offcanvas-sm">
    <div class="dsgt-offcanvas-header">
        <h3 class="dsgt-offcanvas-title">Small (300px)</h3>
        <button class="dsgt-offcanvas-close" onclick="MetroAdmin.closeDSGTOffcanvas('dsgt-offcanvas-size-sm')">
            <i class="fa-solid fa-times"></i>
        </button>
    </div>
    <div class="dsgt-offcanvas-body">
        <p style="color: var(--text-secondary);">This is a small offcanvas panel, perfect for quick menus.</p>
    </div>
</div>

<div id="dsgt-offcanvas-size-md" class="dsgt-offcanvas dsgt-offcanvas-left dsgt-offcanvas-md">
    <div class="dsgt-offcanvas-header">
        <h3 class="dsgt-offcanvas-title">Medium (400px)</h3>
        <button class="dsgt-offcanvas-close" onclick="MetroAdmin.closeDSGTOffcanvas('dsgt-offcanvas-size-md')">
            <i class="fa-solid fa-times"></i>
        </button>
    </div>
    <div class="dsgt-offcanvas-body">
        <p style="color: var(--text-secondary);">This is a medium offcanvas panel, the default size.</p>
    </div>
</div>

<div id="dsgt-offcanvas-size-lg" class="dsgt-offcanvas dsgt-offcanvas-left dsgt-offcanvas-lg">
    <div class="dsgt-offcanvas-header">
        <h3 class="dsgt-offcanvas-title">Large (600px)</h3>
        <button class="dsgt-offcanvas-close" onclick="MetroAdmin.closeDSGTOffcanvas('dsgt-offcanvas-size-lg')">
            <i class="fa-solid fa-times"></i>
        </button>
    </div>
    <div class="dsgt-offcanvas-body">
        <p style="color: var(--text-secondary);">This is a large offcanvas panel, suitable for complex content.</p>
    </div>
</div>

<div id="dsgt-offcanvas-size-full" class="dsgt-offcanvas dsgt-offcanvas-left dsgt-offcanvas-full">
    <div class="dsgt-offcanvas-header">
        <h3 class="dsgt-offcanvas-title">Fullscreen</h3>
        <button class="dsgt-offcanvas-close" onclick="MetroAdmin.closeDSGTOffcanvas('dsgt-offcanvas-size-full')">
            <i class="fa-solid fa-times"></i>
        </button>
    </div>
    <div class="dsgt-offcanvas-body">
        <p style="color: var(--text-secondary);">This is a fullscreen offcanvas panel.</p>
    </div>
</div>

<!-- Filters Offcanvas -->
<div id="dsgt-offcanvas-filters" class="dsgt-offcanvas dsgt-offcanvas-right">
    <div class="dsgt-offcanvas-header">
        <h3 class="dsgt-offcanvas-title"><i class="fa-solid fa-filter" style="margin-right: 8px;"></i>Filters</h3>
        <button class="dsgt-offcanvas-close" onclick="MetroAdmin.closeDSGTOffcanvas('dsgt-offcanvas-filters')">
            <i class="fa-solid fa-times"></i>
        </button>
    </div>
    <div class="dsgt-offcanvas-body">
        <div class="dsgt-offcanvas-filter-section">
            <label class="dsgt-offcanvas-filter-label">Category</label>
            <div class="dsgt-offcanvas-filter-options">
                <span class="dsgt-offcanvas-filter-chip active">All</span>
                <span class="dsgt-offcanvas-filter-chip">Electronics</span>
                <span class="dsgt-offcanvas-filter-chip">Clothing</span>
                <span class="dsgt-offcanvas-filter-chip">Home</span>
                <span class="dsgt-offcanvas-filter-chip">Sports</span>
            </div>
        </div>
        
        <div class="dsgt-offcanvas-filter-section">
            <label class="dsgt-offcanvas-filter-label">Price Range</label>
            <div class="dsgt-offcanvas-filter-options">
                <span class="dsgt-offcanvas-filter-chip">Under $50</span>
                <span class="dsgt-offcanvas-filter-chip active">$50 - $100</span>
                <span class="dsgt-offcanvas-filter-chip">$100 - $200</span>
                <span class="dsgt-offcanvas-filter-chip">Over $200</span>
            </div>
        </div>
        
        <div class="dsgt-offcanvas-filter-section">
            <label class="dsgt-offcanvas-filter-label">Rating</label>
            <div class="dsgt-offcanvas-filter-options">
                <span class="dsgt-offcanvas-filter-chip">4★ & up</span>
                <span class="dsgt-offcanvas-filter-chip active">3★ & up</span>
                <span class="dsgt-offcanvas-filter-chip">2★ & up</span>
            </div>
        </div>
        
        <div class="dsgt-offcanvas-filter-section">
            <label class="dsgt-offcanvas-filter-label">Brand</label>
            <div class="dsgt-offcanvas-filter-options">
                <span class="dsgt-offcanvas-filter-chip">Apple</span>
                <span class="dsgt-offcanvas-filter-chip">Samsung</span>
                <span class="dsgt-offcanvas-filter-chip">Sony</span>
                <span class="dsgt-offcanvas-filter-chip">LG</span>
            </div>
        </div>
    </div>
    <div class="dsgt-offcanvas-footer">
        <div style="display: flex; gap: 8px;">
            <button class="btn btn-secondary" style="flex: 1;">Reset</button>
            <button class="btn btn-primary" style="flex: 1;">Apply Filters</button>
        </div>
    </div>
</div>

<!-- Settings Offcanvas -->
<div id="dsgt-offcanvas-settings" class="dsgt-offcanvas dsgt-offcanvas-right">
    <div class="dsgt-offcanvas-header">
        <h3 class="dsgt-offcanvas-title"><i class="fa-solid fa-gear" style="margin-right: 8px;"></i>Settings</h3>
        <button class="dsgt-offcanvas-close" onclick="MetroAdmin.closeDSGTOffcanvas('dsgt-offcanvas-settings')">
            <i class="fa-solid fa-times"></i>
        </button>
    </div>
    <div class="dsgt-offcanvas-body">
        <div class="dsgt-offcanvas-settings-group">
            <h4 class="dsgt-offcanvas-settings-group-title">Appearance</h4>
            <div class="dsgt-offcanvas-settings-item">
                <div class="dsgt-offcanvas-settings-item-info">
                    <h5 class="dsgt-offcanvas-settings-item-title">Dark Mode</h5>
                    <p class="dsgt-offcanvas-settings-item-desc">Switch to dark theme</p>
                </div>
                <label class="dsgt-offcanvas-switch">
                    <input type="checkbox">
                    <span class="dsgt-offcanvas-switch-slider"></span>
                </label>
            </div>
            <div class="dsgt-offcanvas-settings-item">
                <div class="dsgt-offcanvas-settings-item-info">
                    <h5 class="dsgt-offcanvas-settings-item-title">Compact View</h5>
                    <p class="dsgt-offcanvas-settings-item-desc">Reduce spacing</p>
                </div>
                <label class="dsgt-offcanvas-switch">
                    <input type="checkbox">
                    <span class="dsgt-offcanvas-switch-slider"></span>
                </label>
            </div>
        </div>
        
        <div class="dsgt-offcanvas-settings-group">
            <h4 class="dsgt-offcanvas-settings-group-title">Notifications</h4>
            <div class="dsgt-offcanvas-settings-item">
                <div class="dsgt-offcanvas-settings-item-info">
                    <h5 class="dsgt-offcanvas-settings-item-title">Push Notifications</h5>
                    <p class="dsgt-offcanvas-settings-item-desc">Receive push alerts</p>
                </div>
                <label class="dsgt-offcanvas-switch">
                    <input type="checkbox" checked>
                    <span class="dsgt-offcanvas-switch-slider"></span>
                </label>
            </div>
            <div class="dsgt-offcanvas-settings-item">
                <div class="dsgt-offcanvas-settings-item-info">
                    <h5 class="dsgt-offcanvas-settings-item-title">Email Notifications</h5>
                    <p class="dsgt-offcanvas-settings-item-desc">Receive email updates</p>
                </div>
                <label class="dsgt-offcanvas-switch">
                    <input type="checkbox" checked>
                    <span class="dsgt-offcanvas-switch-slider"></span>
                </label>
            </div>
        </div>
        
        <div class="dsgt-offcanvas-settings-group">
            <h4 class="dsgt-offcanvas-settings-group-title">Privacy</h4>
            <div class="dsgt-offcanvas-settings-item">
                <div class="dsgt-offcanvas-settings-item-info">
                    <h5 class="dsgt-offcanvas-settings-item-title">Profile Visibility</h5>
                    <p class="dsgt-offcanvas-settings-item-desc">Show profile to others</p>
                </div>
                <label class="dsgt-offcanvas-switch">
                    <input type="checkbox" checked>
                    <span class="dsgt-offcanvas-switch-slider"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="dsgt-offcanvas-footer">
        <button class="btn btn-primary" style="width: 100%;" onclick="MetroAdmin.closeDSGTOffcanvas('dsgt-offcanvas-settings')">
            <i class="fa-solid fa-save"></i>
            Save Settings
        </button>
    </div>
</div>

<!-- Profile Offcanvas -->
<div id="dsgt-offcanvas-profile" class="dsgt-offcanvas dsgt-offcanvas-right">
    <div class="dsgt-offcanvas-header">
        <h3 class="dsgt-offcanvas-title"><i class="fa-solid fa-user" style="margin-right: 8px;"></i>Profile</h3>
        <button class="dsgt-offcanvas-close" onclick="MetroAdmin.closeDSGTOffcanvas('dsgt-offcanvas-profile')">
            <i class="fa-solid fa-times"></i>
        </button>
    </div>
    <div class="dsgt-offcanvas-body" style="text-align: center;">
        <img src="https://ui-avatars.com/api/?name=John+Doe&background=0078D4&color=fff&size=192" style="width: 96px; height: 96px; border-radius: 50%; margin-bottom: 12px;" alt="Profile">
        <h4 style="margin: 0 0 4px 0;">John Doe</h4>
        <p style="color: var(--text-secondary); margin: 0 0 20px 0;">john.doe@example.com</p>
        
        <div style="display: flex; justify-content: center; gap: 24px; margin-bottom: 24px;">
            <div>
                <div style="font-size: 20px; font-weight: 700;">124</div>
                <div style="font-size: 12px; color: var(--text-secondary);">Posts</div>
            </div>
            <div>
                <div style="font-size: 20px; font-weight: 700;">1.2K</div>
                <div style="font-size: 12px; color: var(--text-secondary);">Followers</div>
            </div>
            <div>
                <div style="font-size: 20px; font-weight: 700;">456</div>
                <div style="font-size: 12px; color: var(--text-secondary);">Following</div>
            </div>
        </div>
        
        <div class="dsgt-offcanvas-menu-item">
            <div class="dsgt-offcanvas-menu-icon">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="dsgt-offcanvas-menu-content" style="text-align: left;">
                <h4 class="dsgt-offcanvas-menu-title">Edit Profile</h4>
            </div>
        </div>
        <div class="dsgt-offcanvas-menu-item">
            <div class="dsgt-offcanvas-menu-icon">
                <i class="fa-solid fa-gear"></i>
            </div>
            <div class="dsgt-offcanvas-menu-content" style="text-align: left;">
                <h4 class="dsgt-offcanvas-menu-title">Account Settings</h4>
            </div>
        </div>
        <div class="dsgt-offcanvas-menu-item">
            <div class="dsgt-offcanvas-menu-icon">
                <i class="fa-solid fa-question-circle"></i>
            </div>
            <div class="dsgt-offcanvas-menu-content" style="text-align: left;">
                <h4 class="dsgt-offcanvas-menu-title">Help Center</h4>
            </div>
        </div>
    </div>
    <div class="dsgt-offcanvas-footer">
        <button class="btn btn-danger" style="width: 100%;">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </button>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Offcanvas page initialization
$(document).ready(function() {
    console.log('🎯 DSGT Offcanvas page loaded successfully');
    
    // Demo: Show welcome toast
    setTimeout(() => {
        if (typeof MetroAdmin !== 'undefined') {
            MetroAdmin.showDSGTInfoToast('Welcome to the Offcanvas demo page!');
        }
    }, 1000);
});
</script>
@endpush