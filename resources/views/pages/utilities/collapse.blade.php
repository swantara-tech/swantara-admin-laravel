@extends('layouts.app')

@section('title', 'Collapse')
@section('breadcrumb', 'Collapse')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Collapse</h1>
        <p>Toggle visibility of content sections with smooth animations and flexible configurations</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-angle-down"></i>
            <span>Try Collapse</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card cl-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What is Collapse?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Collapse is a UI pattern that allows users to show or hide content sections. It helps manage screen space by revealing information on-demand. Collapse components support smooth animations, accordion behavior, nested content, icons, badges, and various styling options. Perfect for FAQs, settings panels, and progressive disclosure.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Collapse -->
<div class="cl-section-title">
    <i class="fa-solid fa-angle-down"></i>
    Basic Collapse <span class="badge badge-primary">Essential</span>
</div>

<div class="cl-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-plus-circle"></i>
                </div>
                <div>
                    <h3>Single Collapse</h3>
                    <p class="card-subtitle">Toggle one section at a time</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="cl-example">
                <span class="cl-example-label">Click to Expand</span>
                <div class="dsgt-cl-animated">
                    <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTCollapse(this)">
                        <span>What is Swantara Admin?</span>
                        <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                    </div>
                    <div class="dsgt-cl-content">
                        <p>Swantara Admin is a modern, professional admin template built with Laravel and Metro UI. It features a clean design, responsive layout, dark mode support, and over 50 UI components.</p>
                        <p>The template is perfect for building dashboards, admin panels, and web applications with a Fluent Design aesthetic inspired by Windows 11.</p>
                    </div>
                </div>
                <div class="cl-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Click the trigger to show/hide content with smooth animation
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-list-check"></i>
                </div>
                <div>
                    <h3>Multiple Collapse</h3>
                    <p class="card-subtitle">Independent sections</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="cl-example">
                <span class="cl-example-label">Multiple Independent Sections</span>
                <div class="dsgt-cl-group">
                    <div class="dsgt-cl-item">
                        <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTCollapse(this)">
                            <span>Getting Started Guide</span>
                            <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                        </div>
                        <div class="dsgt-cl-content">
                            <p>1. Install Laravel and dependencies</p>
                            <p>2. Copy .env.example to .env</p>
                            <p>3. Run composer install</p>
                            <p>4. Start development server</p>
                        </div>
                    </div>
                    
                    <div class="dsgt-cl-item">
                        <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTCollapse(this)">
                            <span>Customization Options</span>
                            <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                        </div>
                        <div class="dsgt-cl-content">
                            <p>Customize colors, fonts, layouts, and components through CSS variables in app.css. The template supports theming and easy configuration.</p>
                        </div>
                    </div>
                    
                    <div class="dsgt-cl-item">
                        <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTCollapse(this)">
                            <span>Browser Support</span>
                            <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                        </div>
                        <div class="dsgt-cl-content">
                            <p>Supports all modern browsers: Chrome, Firefox, Safari, Edge, and Opera. Mobile-responsive design works on all devices.</p>
                        </div>
                    </div>
                </div>
                <div class="cl-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Each section operates independently - multiple can be open
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Accordion Collapse -->
<div class="cl-section-title">
    <i class="fa-solid fa-layer-group"></i>
    Accordion Collapse <span class="badge badge-warning">Exclusive</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-bars-staggered"></i>
            </div>
            <div>
                <h3>Accordion Behavior</h3>
                <p class="card-subtitle">Only one section open at a time</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="cl-example">
            <span class="cl-example-label">FAQ Accordion</span>
            <div class="dsgt-cl-group" id="faqAccordion">
                <div class="dsgt-cl-item">
                    <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTAccordion(this, 'faqAccordion')">
                        <span>Is this template free to use?</span>
                        <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                    </div>
                    <div class="dsgt-cl-content">
                        <p>Yes! Swantara Admin is completely free and open-source. You can use it for both personal and commercial projects without any restrictions or licensing fees.</p>
                    </div>
                </div>
                
                <div class="dsgt-cl-item">
                    <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTAccordion(this, 'faqAccordion')">
                        <span>What technologies are used?</span>
                        <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                    </div>
                    <div class="dsgt-cl-content">
                        <p>The template is built with Laravel 11 (backend), Metro UI v5 (frontend), jQuery, Chart.js, DataTables, and Font Awesome icons. It uses Vite for asset compilation.</p>
                    </div>
                </div>
                
                <div class="dsgt-cl-item">
                    <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTAccordion(this, 'faqAccordion')">
                        <span>Can I customize the colors?</span>
                        <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                    </div>
                    <div class="dsgt-cl-content">
                        <p>Absolutely! All colors are defined as CSS variables in app.css. You can easily change the accent color, success, warning, danger colors, and more to match your brand identity.</p>
                    </div>
                </div>
                
                <div class="dsgt-cl-item">
                    <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTAccordion(this, 'faqAccordion')">
                        <span>Is it mobile responsive?</span>
                        <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                    </div>
                    <div class="dsgt-cl-content">
                        <p>Yes! The template is fully responsive with a mobile-first approach. The sidebar becomes an overlay on mobile, all components adapt to screen size, and touch interactions are optimized.</p>
                    </div>
                </div>
            </div>
            <div class="cl-helper">
                <i class="fa-solid fa-circle-info"></i>
                Opening one section automatically closes others (accordion behavior)
            </div>
        </div>
    </div>
</div>

<!-- Collapse with Colors -->
<div class="cl-section-title">
    <i class="fa-solid fa-palette"></i>
    Colored Collapse <span class="badge badge-info">Styling</span>
</div>

<div class="cl-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-fill-drip"></i>
                </div>
                <div>
                    <h3>Color Variants</h3>
                    <p class="card-subtitle">Different active state colors</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="cl-example">
                <span class="cl-example-label">Success Collapse</span>
                <div class="dsgt-cl-success" style="margin-bottom: 12px;">
                    <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTCollapse(this)">
                        <span>Success State</span>
                        <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                    </div>
                    <div class="dsgt-cl-content">
                        <p>This collapse uses success color (green) when active. Perfect for positive confirmations and successful operations.</p>
                    </div>
                </div>

                <span class="cl-example-label">Warning Collapse</span>
                <div class="dsgt-cl-warning" style="margin-bottom: 12px;">
                    <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTCollapse(this)">
                        <span>Warning State</span>
                        <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                    </div>
                    <div class="dsgt-cl-content">
                        <p>This collapse uses warning color (yellow) when active. Great for cautionary information and important notices.</p>
                    </div>
                </div>

                <span class="cl-example-label">Danger Collapse</span>
                <div class="dsgt-cl-danger">
                    <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTCollapse(this)">
                        <span>Danger State</span>
                        <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                    </div>
                    <div class="dsgt-cl-content">
                        <p>This collapse uses danger color (red) when active. Ideal for error messages, critical warnings, and destructive actions.</p>
                    </div>
                </div>
                <div class="cl-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Color-coded collapses improve visual hierarchy
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-icons"></i>
                </div>
                <div>
                    <h3>With Icons</h3>
                    <p class="card-subtitle">Icon indicators for better UX</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="cl-example">
                <span class="cl-example-label">Icon-Rich Collapse</span>
                <div class="dsgt-cl-group">
                    <div class="dsgt-cl-item">
                        <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTCollapse(this)">
                            <div class="dsgt-cl-trigger-with-icon">
                                <div class="dsgt-cl-trigger-icon-box" style="background: rgba(0, 120, 212, 0.1); color: var(--accent);">
                                    <i class="fa-solid fa-rocket"></i>
                                </div>
                                <span>Quick Start</span>
                            </div>
                            <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                        </div>
                        <div class="dsgt-cl-content">
                            <p>Get started quickly with our comprehensive documentation and tutorials. Follow step-by-step guides to set up your project.</p>
                        </div>
                    </div>
                    
                    <div class="dsgt-cl-item">
                        <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTCollapse(this)">
                            <div class="dsgt-cl-trigger-with-icon">
                                <div class="dsgt-cl-trigger-icon-box" style="background: rgba(22, 198, 12, 0.1); color: var(--success);">
                                    <i class="fa-solid fa-book-open"></i>
                                </div>
                                <span>Documentation</span>
                            </div>
                            <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                        </div>
                        <div class="dsgt-cl-content">
                            <p>Access detailed documentation covering all components, utilities, APIs, and best practices for development.</p>
                        </div>
                    </div>
                    
                    <div class="dsgt-cl-item">
                        <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTCollapse(this)">
                            <div class="dsgt-cl-trigger-with-icon">
                                <div class="dsgt-cl-trigger-icon-box" style="background: rgba(255, 185, 0, 0.1); color: var(--warning);">
                                    <i class="fa-solid fa-headset"></i>
                                </div>
                                <span>Support</span>
                            </div>
                            <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                        </div>
                        <div class="dsgt-cl-content">
                            <p>Get help from our community forum, report issues on GitHub, or contact our support team directly.</p>
                        </div>
                    </div>
                </div>
                <div class="cl-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Icons improve visual recognition and scanning
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Collapse with Badge -->
<div class="cl-section-title">
    <i class="fa-solid fa-certificate"></i>
    Collapse with Badge
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-tag"></i>
            </div>
            <div>
                <h3>Badge Indicators</h3>
                <p class="card-subtitle">Show counts or status</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="cl-example">
            <span class="cl-example-label">Collapse with Badges</span>
            <div class="dsgt-cl-group">
                <div class="dsgt-cl-item">
                    <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTCollapse(this)">
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <span>Notifications</span>
                            <span class="dsgt-cl-badge">12 new</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                    </div>
                    <div class="dsgt-cl-content">
                        <ul class="dsgt-cl-list">
                            <li><i class="fa-solid fa-check-circle"></i> New user registration</li>
                            <li><i class="fa-solid fa-check-circle"></i> Order #1234 confirmed</li>
                            <li><i class="fa-solid fa-check-circle"></i> Payment received</li>
                        </ul>
                    </div>
                </div>
                
                <div class="dsgt-cl-item">
                    <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTCollapse(this)">
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <span>Messages</span>
                            <span class="dsgt-cl-badge">5 unread</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                    </div>
                    <div class="dsgt-cl-content">
                        <ul class="dsgt-cl-list">
                            <li><i class="fa-solid fa-envelope"></i> Message from John</li>
                            <li><i class="fa-solid fa-envelope"></i> Message from Sarah</li>
                            <li><i class="fa-solid fa-envelope"></i> Message from Mike</li>
                        </ul>
                    </div>
                </div>
                
                <div class="dsgt-cl-item">
                    <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTCollapse(this)">
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <span>Tasks</span>
                            <span class="dsgt-cl-badge">8 pending</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                    </div>
                    <div class="dsgt-cl-content">
                        <ul class="dsgt-cl-list">
                            <li><i class="fa-solid fa-clock"></i> Update homepage design</li>
                            <li><i class="fa-solid fa-clock"></i> Fix login bug</li>
                            <li><i class="fa-solid fa-clock"></i> Deploy to production</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cl-helper">
                <i class="fa-solid fa-circle-info"></i>
                Badges show counts and status at a glance
            </div>
        </div>
    </div>
</div>

<!-- Collapse with Stats -->
<div class="cl-section-title">
    <i class="fa-solid fa-chart-bar"></i>
    Collapse with Stats
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-chart-line"></i>
            </div>
            <div>
                <h3>Statistics Display</h3>
                <p class="card-subtitle">Show data in collapsed content</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="cl-example">
            <span class="cl-example-label">Analytics Collapse</span>
            <div class="dsgt-cl-group">
                <div class="dsgt-cl-item">
                    <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTCollapse(this)">
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <span>User Analytics</span>
                            <span class="dsgt-cl-badge">Live</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                    </div>
                    <div class="dsgt-cl-content">
                        <p>Real-time user statistics and engagement metrics:</p>
                        <div class="dsgt-cl-stats">
                            <div class="dsgt-cl-stat-item">
                                <h4 class="dsgt-cl-stat-value">12,458</h4>
                                <p class="dsgt-cl-stat-label">Total Users</p>
                            </div>
                            <div class="dsgt-cl-stat-item">
                                <h4 class="dsgt-cl-stat-value">1,245</h4>
                                <p class="dsgt-cl-stat-label">Online Now</p>
                            </div>
                            <div class="dsgt-cl-stat-item">
                                <h4 class="dsgt-cl-stat-value">842</h4>
                                <p class="dsgt-cl-stat-label">New Today</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="dsgt-cl-item">
                    <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTCollapse(this)">
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <span>Revenue Stats</span>
                            <span class="dsgt-cl-badge">Updated</span>
                        </div>
                        <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                    </div>
                    <div class="dsgt-cl-content">
                        <p>Financial performance overview:</p>
                        <div class="dsgt-cl-stats">
                            <div class="dsgt-cl-stat-item">
                                <h4 class="dsgt-cl-stat-value">$48.2K</h4>
                                <p class="dsgt-cl-stat-label">Revenue</p>
                            </div>
                            <div class="dsgt-cl-stat-item">
                                <h4 class="dsgt-cl-stat-value">1,842</h4>
                                <p class="dsgt-cl-stat-label">Orders</p>
                            </div>
                            <div class="dsgt-cl-stat-item">
                                <h4 class="dsgt-cl-stat-value">$26.1</h4>
                                <p class="dsgt-cl-stat-label">Avg. Order</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cl-helper">
                <i class="fa-solid fa-circle-info"></i>
                Stats grids display data in organized layout
            </div>
        </div>
    </div>
</div>

<!-- Nested Collapse -->
<div class="cl-section-title">
    <i class="fa-solid fa-sitemap"></i>
    Nested Collapse
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-layer-group"></i>
            </div>
            <div>
                <h3>Multi-Level Collapse</h3>
                <p class="card-subtitle">Collapse within collapse</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="cl-example">
            <span class="cl-example-label">Nested Structure</span>
            <div class="dsgt-cl-animated">
                <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTCollapse(this)">
                    <span>Products Category</span>
                    <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                </div>
                <div class="dsgt-cl-content">
                    <p>Main product categories and subcategories:</p>
                    
                    <div class="dsgt-cl-nested">
                        <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTCollapse(this)">
                            <span>Electronics</span>
                            <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                        </div>
                        <div class="dsgt-cl-content">
                            <ul class="dsgt-cl-list">
                                <li><i class="fa-solid fa-laptop"></i> Laptops</li>
                                <li><i class="fa-solid fa-mobile-screen"></i> Smartphones</li>
                                <li><i class="fa-solid fa-headphones"></i> Audio</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="dsgt-cl-nested">
                        <div class="dsgt-cl-trigger" onclick="MetroAdmin.toggleDSGTCollapse(this)">
                            <span>Clothing</span>
                            <i class="fa-solid fa-chevron-down dsgt-cl-trigger-icon"></i>
                        </div>
                        <div class="dsgt-cl-content">
                            <ul class="dsgt-cl-list">
                                <li><i class="fa-solid fa-shirt"></i> Men's Wear</li>
                                <li><i class="fa-solid fa-shirt"></i> Women's Wear</li>
                                <li><i class="fa-solid fa-child"></i> Kids' Wear</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cl-helper">
                <i class="fa-solid fa-circle-info"></i>
                Nested collapses allow hierarchical content organization
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="cl-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="cl-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>JavaScript API</h3>
                    <p class="card-subtitle">Collapse control functions</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <pre style="background: var(--bg-tertiary); padding: 16px; border-radius: 8px; font-size: 12px; overflow-x: auto;"><code>// Toggle single collapse
toggleCollapse(triggerElement);

// Toggle accordion (exclusive)
toggleAccordion(triggerElement, groupId);

// Programmatic control
$('.dsgt-cl-trigger').click();

// Open all
$('.dsgt-cl-trigger').each(function() {
    toggleCollapse(this);
});

// Close all
$('.dsgt-cl-content.open').each(function() {
    toggleCollapse($(this).prev());
});</code></pre>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>
                <div>
                    <h3>Best Practices</h3>
                    <p class="card-subtitle">When to use each collapse type</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" style="width: 100%; font-size: 13px;">
                <thead>
                    <tr>
                        <th>Collapse Type</th>
                        <th>Use Case</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Single</strong></td>
                        <td>Simple toggle, hints</td>
                    </tr>
                    <tr>
                        <td><strong>Multiple</strong></td>
                        <td>Independent sections</td>
                    </tr>
                    <tr>
                        <td><strong>Accordion</strong></td>
                        <td>FAQs, exclusive content</td>
                    </tr>
                    <tr>
                        <td><strong>Nested</strong></td>
                        <td>Hierarchical data</td>
                    </tr>
                    <tr>
                        <td><strong>With Stats</strong></td>
                        <td>Analytics, dashboards</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Collapse page initialization
$(document).ready(function() {
    console.log('📋 DSGT Collapse page loaded successfully');
});
</script>
@endpush