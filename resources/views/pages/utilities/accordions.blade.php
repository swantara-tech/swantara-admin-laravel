@extends('layouts.app')

@section('title', 'Accordions')
@section('breadcrumb', 'Accordions')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Accordions</h1>
        <p>Collapsible content panels for organizing information in limited space</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary" onclick="openFirstAccordion()">
            <i class="fa-solid fa-layer-group"></i>
            <span>Try Accordions</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card dsgt-ac-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What are Accordions?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Accordions are vertically stacked lists of items that can be expanded to show more content. They help organize content into sections, reduce page scrolling, and improve user experience by revealing information progressively. Perfect for FAQs, settings panels, and content categorization.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Accordion -->
<div class="dsgt-ac-section-title">
    <i class="fa-solid fa-layer-group"></i>
    Basic Accordions <span class="badge badge-primary">Essential</span>
</div>

<div class="dsgt-accordion-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-list-ul"></i>
                </div>
                <div>
                    <h3>Default Accordion</h3>
                    <p class="card-subtitle">Basic collapsible panels</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-ac-example">
                <span class="dsgt-ac-example-label">Standard Accordion</span>
                <div class="dsgt-accordion" data-one-open="true" data-open="0">
                    <div class="dsgt-ac-frame active">
                        <div class="dsgt-ac-heading">
                            <span class="dsgt-ac-title">What is Metro UI?</span>
                            <span class="dsgt-ac-toggle-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="dsgt-ac-content">
                            <p>Metro UI is a modern design language based on Microsoft's Fluent Design System. It emphasizes clean typography, flat colors, and content-over-chrome philosophy.</p>
                            <p>Our template implements Metro UI v5 with full customization capabilities.</p>
                        </div>
                    </div>
                    <div class="dsgt-ac-frame">
                        <div class="dsgt-ac-heading">
                            <span class="dsgt-ac-title">What features are included?</span>
                            <span class="dsgt-ac-toggle-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="dsgt-ac-content">
                            <p>Swantara Admin includes:</p>
                            <ul>
                                <li>Responsive sidebar with collapsible menu</li>
                                <li>Dark/Light theme support</li>
                                <li>50+ UI components</li>
                                <li>Form elements with validation</li>
                                <li>DataTables with export features</li>
                                <li>Chart.js integration</li>
                            </ul>
                        </div>
                    </div>
                    <div class="dsgt-ac-frame">
                        <div class="dsgt-ac-heading">
                            <span class="dsgt-ac-title">Is it free to use?</span>
                            <span class="dsgt-ac-toggle-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="dsgt-ac-content">
                            <p>Yes! Swantara Admin is completely free and open-source. You can use it for personal and commercial projects without any restrictions.</p>
                        </div>
                    </div>
                </div>
                <div class="dsgt-ac-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Only one panel can be open at a time (data-one-open="true")
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <div>
                    <h3>Multiple Open Panels</h3>
                    <p class="card-subtitle">Allow multiple sections open</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-ac-example">
                <span class="dsgt-ac-example-label">Multi-Open Accordion</span>
                <div class="dsgt-accordion" data-one-open="false">
                    <div class="dsgt-ac-frame">
                        <div class="dsgt-ac-heading">
                            <span class="dsgt-ac-title">Getting Started Guide</span>
                            <span class="dsgt-ac-toggle-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="dsgt-ac-content">
                            <p>1. Install Laragon or XAMPP for local development</p>
                            <p>2. Clone the repository to your www folder</p>
                            <p>3. Run <code>composer install</code> and <code>npm install</code></p>
                            <p>4. Copy .env.example to .env</p>
                            <p>5. Run <code>php artisan key:generate</code></p>
                        </div>
                    </div>
                    <div class="dsgt-ac-frame">
                        <div class="dsgt-ac-heading">
                            <span class="dsgt-ac-title">Customization Options</span>
                            <span class="dsgt-ac-toggle-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="dsgt-ac-content">
                            <p>You can customize colors, fonts, layouts, and components through CSS variables in app.css. Check the documentation for detailed customization guides.</p>
                        </div>
                    </div>
                    <div class="dsgt-ac-frame">
                        <div class="dsgt-ac-heading">
                            <span class="dsgt-ac-title">Browser Support</span>
                            <span class="dsgt-ac-toggle-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="dsgt-ac-content">
                            <p>Supports all modern browsers: Chrome, Firefox, Safari, Edge (Chromium-based), and Opera.</p>
                        </div>
                    </div>
                </div>
                <div class="dsgt-ac-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Multiple panels can be open simultaneously (data-one-open="false")
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Accordion with Icons -->
<div class="dsgt-ac-section-title">
    <i class="fa-solid fa-icons"></i>
    Accordions with Icons <span class="badge badge-info">Enhanced</span>
</div>

<div class="dsgt-accordion-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-star"></i>
                </div>
                <div>
                    <h3>Icon-Enhanced Accordions</h3>
                    <p class="card-subtitle">Visual indicators for better UX</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-ac-example">
                <span class="dsgt-ac-example-label">Accordion with Icons</span>
                <div class="dsgt-accordion" data-one-open="true">
                    <div class="dsgt-ac-frame">
                        <div class="dsgt-ac-heading">
                            <span class="dsgt-ac-title dsgt-ac-heading-icon">
                                <i class="fa-solid fa-rocket"></i>
                                Quick Start
                            </span>
                            <span class="dsgt-ac-toggle-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="dsgt-ac-content">
                            <p>Get up and running in minutes. Follow our quick start guide to set up your development environment and create your first project.</p>
                            <button class="btn btn-primary btn-sm" style="margin-top: 12px;">
                                <i class="fa-solid fa-play"></i> Start Tutorial
                            </button>
                        </div>
                    </div>
                    <div class="dsgt-ac-frame">
                        <div class="dsgt-ac-heading">
                            <span class="dsgt-ac-title dsgt-ac-heading-icon">
                                <i class="fa-solid fa-book-open"></i>
                                Documentation
                            </span>
                            <span class="dsgt-ac-toggle-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="dsgt-ac-content">
                            <p>Comprehensive documentation covering all components, utilities, and APIs. Includes code examples, best practices, and troubleshooting guides.</p>
                            <button class="btn btn-info btn-sm" style="margin-top: 12px;">
                                <i class="fa-solid fa-arrow-right"></i> Read Docs
                            </button>
                        </div>
                    </div>
                    <div class="dsgt-ac-frame">
                        <div class="dsgt-ac-heading">
                            <span class="dsgt-ac-title dsgt-ac-heading-icon">
                                <i class="fa-solid fa-headset"></i>
                                Support & Community
                            </span>
                            <span class="dsgt-ac-toggle-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="dsgt-ac-content">
                            <p>Join our community forum, report issues on GitHub, or contact our support team directly. We're here to help!</p>
                            <button class="btn btn-success btn-sm" style="margin-top: 12px;">
                                <i class="fa-solid fa-comments"></i> Get Help
                            </button>
                        </div>
                    </div>
                </div>
                <div class="dsgt-ac-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Icons improve visual scanning and user comprehension
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-danger">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <div>
                    <h3>FAQ Accordion</h3>
                    <p class="card-subtitle">Common questions & answers</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-ac-example">
                <span class="dsgt-ac-example-label">Frequently Asked Questions</span>
                <div class="dsgt-accordion" data-one-open="true">
                    <div class="dsgt-ac-frame">
                        <div class="dsgt-ac-heading">
                            <span class="dsgt-ac-title dsgt-ac-heading-icon">
                                <i class="fa-solid fa-circle-question"></i>
                                How do I customize the theme colors?
                            </span>
                            <span class="dsgt-ac-toggle-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="dsgt-ac-content">
                            <p>Theme colors are defined as CSS variables in <code>app.css</code>. Simply modify the <code>--accent</code>, <code>--success</code>, <code>--warning</code>, and other variables to match your brand colors.</p>
                        </div>
                    </div>
                    <div class="dsgt-ac-frame">
                        <div class="dsgt-ac-heading">
                            <span class="dsgt-ac-title dsgt-ac-heading-icon">
                                <i class="fa-solid fa-circle-question"></i>
                                Can I use this with Laravel 11?
                            </span>
                            <span class="dsgt-ac-toggle-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="dsgt-ac-content">
                            <p>Yes! This template is built with Laravel 11 and fully compatible with all Laravel 11 features including Vite, Pest testing, and the new directory structure.</p>
                        </div>
                    </div>
                    <div class="dsgt-ac-frame">
                        <div class="dsgt-ac-heading">
                            <span class="dsgt-ac-title dsgt-ac-heading-icon">
                                <i class="fa-solid fa-circle-question"></i>
                                Is responsive design included?
                            </span>
                            <span class="dsgt-ac-toggle-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="dsgt-ac-content">
                            <p>Absolutely! The template is fully responsive with mobile-first approach. Sidebar becomes overlay on mobile, tables are responsive, and all components adapt to screen size.</p>
                        </div>
                    </div>
                </div>
                <div class="dsgt-ac-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Perfect for FAQ sections and help documentation
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Accordion Variants -->
<div class="dsgt-ac-section-title">
    <i class="fa-solid fa-palette"></i>
    Accordion Variants <span class="badge badge-warning">Advanced</span>
</div>

<div class="dsgt-accordion-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-droplet"></i>
                </div>
                <div>
                    <h3>Borderless Accordion</h3>
                    <p class="card-subtitle">Clean, minimal design</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-ac-example">
                <span class="dsgt-ac-example-label">No Border Style</span>
                <div class="dsgt-accordion borderless" data-one-open="true">
                    <div class="dsgt-ac-frame">
                        <div class="dsgt-ac-heading">
                            <span class="dsgt-ac-title">Section One</span>
                            <span class="dsgt-ac-toggle-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="dsgt-ac-content">
                            <p>Borderless accordions provide a cleaner look, perfect for modern minimal designs. Content flows seamlessly without visual barriers.</p>
                        </div>
                    </div>
                    <div class="dsgt-ac-frame">
                        <div class="dsgt-ac-heading">
                            <span class="dsgt-ac-title">Section Two</span>
                            <span class="dsgt-ac-toggle-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="dsgt-ac-content">
                            <p>Only divider lines separate sections, creating a more open and breathable layout.</p>
                        </div>
                    </div>
                    <div class="dsgt-ac-frame">
                        <div class="dsgt-ac-heading">
                            <span class="dsgt-ac-title">Section Three</span>
                            <span class="dsgt-ac-toggle-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="dsgt-ac-content">
                            <p>Great for settings panels, user profiles, and content-heavy applications.</p>
                        </div>
                    </div>
                </div>
                <div class="dsgt-ac-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Minimalist approach with subtle dividers
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-secondary">
                    <i class="fa-solid fa-toggle-on"></i>
                </div>
                <div>
                    <h3>Pre-Opened Accordion</h3>
                    <p class="card-subtitle">Default expanded panel</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-ac-example">
                <span class="dsgt-ac-example-label">First Panel Open by Default</span>
                <div class="dsgt-accordion" data-one-open="true" data-open="0">
                    <div class="dsgt-ac-frame active">
                        <div class="dsgt-ac-heading">
                            <span class="dsgt-ac-title">Welcome Message (Open)</span>
                            <span class="dsgt-ac-toggle-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="dsgt-ac-content">
                            <p><strong>Welcome to Swantara Admin!</strong> This panel is open by default using <code>data-open="0"</code> attribute.</p>
                            <p>Pre-opening panels is useful when you want to highlight important information immediately without requiring user interaction.</p>
                        </div>
                    </div>
                    <div class="dsgt-ac-frame">
                        <div class="dsgt-ac-heading">
                            <span class="dsgt-ac-title">Additional Information</span>
                            <span class="dsgt-ac-toggle-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="dsgt-ac-content">
                            <p>This panel starts collapsed but can be opened by clicking the heading.</p>
                        </div>
                    </div>
                    <div class="dsgt-ac-frame">
                        <div class="dsgt-ac-heading">
                            <span class="dsgt-ac-title">More Details</span>
                            <span class="dsgt-ac-toggle-icon"><i class="fa-solid fa-chevron-down"></i></span>
                        </div>
                        <div class="dsgt-ac-content">
                            <p>You can pre-open any panel by setting the data-open attribute to its index (0-based).</p>
                        </div>
                    </div>
                </div>
                <div class="dsgt-ac-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Use data-open="0" to pre-open first panel
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="dsgt-ac-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Configuration
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-book"></i>
            </div>
            <div>
                <h3>Implementation Guide</h3>
                <p class="card-subtitle">How to use accordions in your project</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
            <div>
                <h4 style="margin-bottom: 12px; font-size: 14px;">Basic Structure</h4>
                <pre style="background: var(--bg-tertiary); padding: 16px; border-radius: 8px; font-size: 12px; overflow-x: auto;"><code>&lt;div class="dsgt-accordion" data-one-open="true" data-open="0"&gt;
  &lt;div class="dsgt-ac-frame"&gt;
    &lt;div class="dsgt-ac-heading"&gt;
      &lt;span class="dsgt-ac-title"&gt;Title&lt;/span&gt;
      &lt;span class="dsgt-ac-toggle-icon"&gt;&lt;i class="fa-solid fa-chevron-down"&gt;&lt;/i&gt;&lt;/span&gt;
    &lt;/div&gt;
    &lt;div class="dsgt-ac-content"&gt;
      Content here
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
            </div>
            <div>
                <h4 style="margin-bottom: 12px; font-size: 14px;">Configuration Options</h4>
                <table class="table" style="width: 100%; font-size: 13px;">
                    <thead>
                        <tr>
                            <th>Attribute</th>
                            <th>Type</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><code>data-one-open</code></td>
                            <td>Boolean</td>
                            <td>Allow only one panel open</td>
                        </tr>
                        <tr>
                            <td><code>data-open</code></td>
                            <td>Number</td>
                            <td>Pre-open panel index</td>
                        </tr>
                        <tr>
                            <td><code>data-role</code></td>
                            <td>String</td>
                            <td>Must be "accordion"</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
/**
 * DSGT Metro Template - Accordion Page Demo
 * Uses global DSGT accordion functions from app.js
 */
$(document).ready(function() {
    console.log('✨ DSGT Accordions page loaded successfully');
    
    // Handle "Try Accordions" button using DSGT global function
    window.openFirstAccordion = function() {
        MetroAdmin.openAccordionPanel('.dsgt-accordion', 0, true);
    };
});
</script>
@endpush