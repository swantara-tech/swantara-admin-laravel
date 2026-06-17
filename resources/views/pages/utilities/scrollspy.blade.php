@extends('layouts.app')

@section('title', 'Scrollspy')
@section('breadcrumb', 'Scrollspy')

@push('styles')
@endpush

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Scrollspy</h1>
        <p>Auto-updating navigation that highlights the current section as users scroll through content</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary" onclick="MetroAdmin.scrollDSGTToTop()">
            <i class="fa-solid fa-arrow-up"></i>
            <span>Scroll to Top</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card dsgt-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What is Scrollspy?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Scrollspy is a navigation component that automatically highlights the current section being viewed as users scroll through a page. It provides contextual awareness and helps users understand their position within long-form content. Common use cases include documentation pages, single-page applications, and long articles with table of contents.</p>
            </div>
        </div>
    </div>
</div>

<!-- Vertical Scrollspy -->
<div class="dsgt-spy-section-title">
    <i class="fa-solid fa-list"></i>
    Vertical Scrollspy <span class="badge badge-primary">Essential</span>
</div>

<div class="dsgt-scrollspy-layout">
    <!-- Navigation -->
    <nav class="dsgt-scrollspy-nav">
        <h3 class="dsgt-scrollspy-nav-title"><i class="fa-solid fa-compass" style="margin-right: 8px;"></i>Contents</h3>
        <ul class="dsgt-scrollspy-nav-list">
            <li class="dsgt-scrollspy-nav-item">
                <a href="#section-introduction" class="dsgt-scrollspy-nav-link active">
                    <i class="fa-solid fa-circle-info"></i> Introduction
                </a>
            </li>
            <li class="dsgt-scrollspy-nav-item">
                <a href="#section-getting-started" class="dsgt-scrollspy-nav-link">
                    <i class="fa-solid fa-rocket"></i> Getting Started
                </a>
            </li>
            <li class="dsgt-scrollspy-nav-item">
                <a href="#section-installation" class="dsgt-scrollspy-nav-link level-2">
                    Installation
                </a>
            </li>
            <li class="dsgt-scrollspy-nav-item">
                <a href="#section-configuration" class="dsgt-scrollspy-nav-link level-2">
                    Configuration
                </a>
            </li>
            <li class="dsgt-scrollspy-nav-item">
                <a href="#section-features" class="dsgt-scrollspy-nav-link">
                    <i class="fa-solid fa-star"></i> Features
                </a>
            </li>
            <li class="dsgt-scrollspy-nav-item">
                <a href="#section-basic-usage" class="dsgt-scrollspy-nav-link level-2">
                    Basic Usage
                </a>
            </li>
            <li class="dsgt-scrollspy-nav-item">
                <a href="#section-advanced" class="dsgt-scrollspy-nav-link level-2">
                    Advanced Features
                </a>
            </li>
            <li class="dsgt-scrollspy-nav-item">
                <a href="#section-api" class="dsgt-scrollspy-nav-link">
                    <i class="fa-solid fa-code"></i> API Reference
                </a>
            </li>
            <li class="dsgt-scrollspy-nav-item">
                <a href="#section-examples" class="dsgt-scrollspy-nav-link">
                    <i class="fa-solid fa-lightbulb"></i> Examples
                </a>
            </li>
        </ul>
        <div class="dsgt-scrollspy-progress">
            <div class="dsgt-scrollspy-progress-bar" id="scrollProgress"></div>
        </div>
    </nav>

    <!-- Content -->
    <div class="dsgt-scrollspy-content" id="scrollspyContent">
        <!-- Introduction Section -->
        <section id="section-introduction" class="dsgt-scrollspy-section">
            <h2 class="dsgt-scrollspy-section-title">Introduction</h2>
            <p class="dsgt-scrollspy-section-subtitle">Learn about the Scrollspy component and its benefits</p>
            
            <div class="dsgt-scrollspy-content-block">
                <h4>What is Scrollspy?</h4>
                <p>Scrollspy is a navigation tracking system that automatically highlights the current section as users scroll through content. It provides visual feedback about the user's current position within a page, making it easier to navigate long-form content.</p>
                <p>Originally popularized by Bootstrap, Scrollspy has become an essential component in modern web applications, particularly for documentation sites, single-page applications, and content-heavy websites.</p>
            </div>

            <div class="dsgt-scrollspy-content-block">
                <h4>Why Use Scrollspy?</h4>
                <p>Scrollspy enhances user experience by providing contextual navigation. Users can quickly understand where they are in the content, jump to specific sections, and maintain orientation while scrolling through lengthy pages.</p>
                <p>It's particularly useful for technical documentation, tutorials, product pages, and any content that requires hierarchical navigation.</p>
            </div>

            <div class="dsgt-scrollspy-content-block">
                <h4>Key Benefits</h4>
                <p>• Improved navigation efficiency<br>
                   • Better content discoverability<br>
                   • Enhanced user experience<br>
                   • Reduced bounce rates<br>
                   • Professional appearance</p>
            </div>
        </section>

        <!-- Getting Started Section -->
        <section id="section-getting-started" class="dsgt-scrollspy-section">
            <h2 class="dsgt-scrollspy-section-title">Getting Started</h2>
            <p class="dsgt-scrollspy-section-subtitle">Quick start guide for implementing Scrollspy</p>
            
            <div class="dsgt-scrollspy-content-block">
                <h4>Prerequisites</h4>
                <p>Before implementing Scrollspy, ensure you have:</p>
                <p>• A structured page with clear sections<br>
                   • Unique IDs for each section<br>
                   • A navigation menu with matching links<br>
                   • Smooth scrolling enabled</p>
            </div>

            <div id="section-installation" class="dsgt-scrollspy-content-block">
                <h4>Installation</h4>
                <p>Setting up Scrollspy is straightforward. You need:</p>
                <div class="code-block">
// HTML Structure<br>
&lt;nav id="dsgt-scrollspy-nav"&gt;<br>
&nbsp;&nbsp;&lt;a href="#section1"&gt;Section 1&lt;/a&gt;<br>
&nbsp;&nbsp;&lt;a href="#section2"&gt;Section 2&lt;/a&gt;<br>
&lt;/nav&gt;<br>
<br>
&lt;div id="dsgt-scrollspy-content"&gt;<br>
&nbsp;&nbsp;&lt;section id="section1"&gt;...&lt;/section&gt;<br>
&nbsp;&nbsp;&lt;section id="section2"&gt;...&lt;/section&gt;<br>
&lt;/div&gt;
                </div>
            </div>

            <div id="section-configuration" class="dsgt-scrollspy-content-block">
                <h4>Configuration</h4>
                <p>Configure Scrollspy with these options:</p>
                <p><strong>Offset:</strong> Adjust the scroll position threshold for triggering section changes (default: 10px)</p>
                <p><strong>Smooth Scroll:</strong> Enable smooth scrolling behavior when clicking navigation links</p>
                <p><strong>Active Class:</strong> Customize the CSS class applied to active navigation items</p>
            </div>
        </section>

        <!-- Features Section -->
        <section id="section-features" class="dsgt-scrollspy-section">
            <h2 class="dsgt-scrollspy-section-title">Features</h2>
            <p class="dsgt-scrollspy-section-subtitle">Explore the powerful features of Scrollspy</p>
            
            <div id="section-basic-usage" class="dsgt-scrollspy-content-block">
                <h4>Basic Usage</h4>
                <p>The basic Scrollspy implementation tracks scroll position and updates navigation links automatically. When a section enters the viewport, the corresponding navigation link is highlighted.</p>
                <p>This provides users with a clear indication of their current position and allows them to quickly navigate to different sections of the page.</p>
            </div>

            <div id="section-advanced" class="dsgt-scrollspy-content-block">
                <h4>Advanced Features</h4>
                <p>• <strong>Hierarchical Navigation:</strong> Support for nested sections and subsections with visual indentation</p>
                <p>• <strong>Progress Tracking:</strong> Visual progress bar showing overall scroll progress through the content</p>
                <p>• <strong>Smooth Animations:</strong> Smooth transitions between active states for a polished user experience</p>
                <p>• <strong>Responsive Design:</strong> Adapts to different screen sizes and devices</p>
                <p>• <strong>Custom Thresholds:</strong> Configurable offset values for precise control over when sections activate</p>
            </div>
        </section>

        <!-- API Reference Section -->
        <section id="section-api" class="dsgt-scrollspy-section">
            <h2 class="dsgt-scrollspy-section-title">API Reference</h2>
            <p class="dsgt-scrollspy-section-subtitle">Technical documentation and methods</p>
            
            <div class="dsgt-scrollspy-content-block">
                <h4>Methods</h4>
                <div class="code-block">
// Initialize Scrollspy<br>
initScrollspy(navSelector, contentSelector);<br>
<br>
// Refresh scroll position tracking<br>
refreshScrollspy();<br>
<br>
// Scroll to specific section<br>
scrollToSection(sectionId);
                </div>
            </div>

            <div class="dsgt-scrollspy-content-block">
                <h4>Options</h4>
                <p><strong>offset:</strong> Number (default: 10) - Scroll offset in pixels</p>
                <p><strong>smoothScroll:</strong> Boolean (default: true) - Enable smooth scrolling</p>
                <p><strong>activeClass:</strong> String (default: 'active') - CSS class for active links</p>
                <p><strong>animationDuration:</strong> Number (default: 300) - Animation duration in ms</p>
            </div>

            <div class="dsgt-scrollspy-content-block">
                <h4>Events</h4>
                <p><strong>activate.bs.scrollspy:</strong> Fired when a new section becomes active</p>
                <p><strong>scroll.bs.scrollspy:</strong> Fired on scroll events</p>
            </div>
        </section>

        <!-- Examples Section -->
        <section id="section-examples" class="dsgt-scrollspy-section">
            <h2 class="dsgt-scrollspy-section-title">Examples</h2>
            <p class="dsgt-scrollspy-section-subtitle">Real-world implementation examples</p>
            
            <div class="dsgt-scrollspy-content-block">
                <h4>Documentation Site</h4>
                <p>A technical documentation site uses Scrollspy to help developers navigate through API references, tutorials, and guides. The sidebar navigation highlights the current section, making it easy to find specific topics.</p>
            </div>

            <div class="dsgt-scrollspy-content-block">
                <h4>Single Page Application</h4>
                <p>In a single-page application, Scrollspy tracks different sections of the landing page, highlighting the current section in the navigation menu as users scroll through features, pricing, testimonials, and contact information.</p>
            </div>

            <div class="dsgt-scrollspy-content-block">
                <h4>Blog Post Navigation</h4>
                <p>Long-form blog articles use Scrollspy to create a table of contents that updates as readers scroll through the article, improving content discoverability and engagement.</p>
            </div>
        </section>
    </div>
</div>

<!-- Horizontal Scrollspy -->
<div class="dsgt-spy-section-title">
    <i class="fa-solid fa-arrows-left-right"></i>
    Horizontal Scrollspy
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-grip-lines"></i>
            </div>
            <div>
                <h3>Horizontal Navigation</h3>
                <p class="card-subtitle">Tab-style scrollspy</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-horizontal-scrollspy">
            <nav class="dsgt-horizontal-scrollspy-nav">
                <a href="#h-section-1" class="dsgt-horizontal-scrollspy-link active">Overview</a>
                <a href="#h-section-2" class="dsgt-horizontal-scrollspy-link">Features</a>
                <a href="#h-section-3" class="dsgt-horizontal-scrollspy-link">Pricing</a>
                <a href="#h-section-4" class="dsgt-horizontal-scrollspy-link">Reviews</a>
                <a href="#h-section-5" class="dsgt-horizontal-scrollspy-link">FAQ</a>
            </nav>
            <div class="dsgt-horizontal-scrollspy-content" id="horizontalScrollspyContent">
                <section id="h-section-1" style="margin-bottom: 32px;">
                    <h3 style="margin-bottom: 12px;">Overview</h3>
                    <p style="color: var(--text-secondary); line-height: 1.7;">Our product provides a comprehensive solution for managing your workflow. With intuitive controls and powerful features, you can streamline your processes and boost productivity.</p>
                    <p style="color: var(--text-secondary); line-height: 1.7;">The platform is designed to scale with your needs, from individual users to enterprise-level deployments.</p>
                </section>
                
                <section id="h-section-2" style="margin-bottom: 32px;">
                    <h3 style="margin-bottom: 12px;">Features</h3>
                    <p style="color: var(--text-secondary); line-height: 1.7;">Key features include real-time collaboration, advanced analytics, customizable dashboards, automated workflows, and seamless integrations with popular tools.</p>
                    <p style="color: var(--text-secondary); line-height: 1.7;">Each feature is designed to work together seamlessly, creating a unified experience.</p>
                </section>
                
                <section id="h-section-3" style="margin-bottom: 32px;">
                    <h3 style="margin-bottom: 12px;">Pricing</h3>
                    <p style="color: var(--text-secondary); line-height: 1.7;">We offer flexible pricing plans to suit different needs. Start with our free tier and upgrade as your requirements grow.</p>
                    <p style="color: var(--text-secondary); line-height: 1.7;">All plans include core features, with advanced features available in premium tiers.</p>
                </section>
                
                <section id="h-section-4" style="margin-bottom: 32px;">
                    <h3 style="margin-bottom: 12px;">Reviews</h3>
                    <p style="color: var(--text-secondary); line-height: 1.7;">Our users love the platform. With an average rating of 4.8/5 stars from over 10,000 reviews, it's trusted by teams worldwide.</p>
                    <p style="color: var(--text-secondary); line-height: 1.7;">"The best tool we've ever used for project management" - Tech Corp</p>
                </section>
                
                <section id="h-section-5" style="margin-bottom: 32px;">
                    <h3 style="margin-bottom: 12px;">FAQ</h3>
                    <p style="color: var(--text-secondary); line-height: 1.7;">Have questions? We have answers. Check out our comprehensive FAQ section or contact our support team for assistance.</p>
                    <p style="color: var(--text-secondary); line-height: 1.7;">Our support team is available 24/7 to help you get the most out of the platform.</p>
                </section>
            </div>
        </div>
        <div class="dsgt-spy-helper">
            <i class="fa-solid fa-circle-info"></i>
            Horizontal scrollspy with tab-style navigation
        </div>
    </div>
</div>

<!-- Scrollspy with Indicators -->
<div class="dsgt-spy-section-title">
    <i class="fa-solid fa-chart-line"></i>
    Scroll Progress Indicator
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-gauge"></i>
            </div>
            <div>
                <h3>Reading Progress</h3>
                <p class="card-subtitle">Visual scroll progress tracker</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-spy-helper" style="margin-bottom: 16px;">
            <i class="fa-solid fa-circle-info"></i>
            The progress bar in the vertical scrollspy shows your current scroll position
        </div>
        
        <div class="dsgt-scrollspy-indicator">
            <div class="dsgt-scrollspy-indicator-icon">
                <i class="fa-solid fa-eye"></i>
            </div>
            <div class="dsgt-scrollspy-indicator-text">
                <h4 class="dsgt-scrollspy-indicator-title">Live Tracking</h4>
                <p class="dsgt-scrollspy-indicator-desc">Navigation updates automatically as you scroll</p>
            </div>
        </div>

        <div class="dsgt-scrollspy-indicator">
            <div class="dsgt-scrollspy-indicator-icon">
                <i class="fa-solid fa-link"></i>
            </div>
            <div class="dsgt-scrollspy-indicator-text">
                <h4 class="dsgt-scrollspy-indicator-title">Smooth Scrolling</h4>
                <p class="dsgt-scrollspy-indicator-desc">Click any navigation link to smooth scroll to that section</p>
            </div>
        </div>

        <div class="dsgt-scrollspy-indicator">
            <div class="dsgt-scrollspy-indicator-icon">
                <i class="fa-solid fa-layer-group"></i>
            </div>
            <div class="dsgt-scrollspy-indicator-text">
                <h4 class="dsgt-scrollspy-indicator-title">Hierarchical Structure</h4>
                <p class="dsgt-scrollspy-indicator-desc">Support for nested sections with visual indentation</p>
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="dsgt-spy-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="dsgt-spy-section-title" style="font-size: 14px;">
    <i class="fa-solid fa-book"></i>
    JavaScript Implementation
</div>

<div class="content-card" style="margin-bottom: 24px;">
    <div class="card-body">
        <div class="code-block">
// Initialize Scrollspy<br>
function initScrollspy(navSelector, contentSelector) {<br>
&nbsp;&nbsp;const navLinks = document.querySelectorAll(navSelector);<br>
&nbsp;&nbsp;const content = document.querySelector(contentSelector);<br>
&nbsp;&nbsp;<br>
&nbsp;&nbsp;content.addEventListener('scroll', () => {<br>
&nbsp;&nbsp;&nbsp;&nbsp;const sections = content.querySelectorAll('section');<br>
&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;sections.forEach(section => {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const rect = section.getBoundingClientRect();<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rect.top <= 100 && rect.bottom > 100) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;navLinks.forEach(link => link.classList.remove('active'));<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const activeLink = document.querySelector(<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`a[href="#${section.id}"]`<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (activeLink) activeLink.classList.add('active');<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
&nbsp;&nbsp;&nbsp;&nbsp;});<br>
&nbsp;&nbsp;});<br>
}
        </div>
    </div>
</div>

<div class="dsgt-spy-section-title" style="font-size: 14px;">
    <i class="fa-solid fa-lightbulb"></i>
    Best Practices
</div>

<div class="content-card">
    <div class="card-body">
        <table class="table" style="width: 100%; font-size: 13px;">
            <thead>
                <tr>
                    <th>Practice</th>
                    <th>Benefit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Unique section IDs</strong></td>
                    <td>Accurate tracking</td>
                </tr>
                <tr>
                    <td><strong>Set proper offset</strong></td>
                    <td>Correct activation</td>
                </tr>
                <tr>
                    <td><strong>Smooth scrolling</strong></td>
                    <td>Better UX</td>
                </tr>
                <tr>
                    <td><strong>Visual hierarchy</strong></td>
                    <td>Clear structure</td>
                </tr>
                <tr>
                    <td><strong>Responsive design</strong></td>
                    <td>Works on all devices</td>
                </tr>
                <tr>
                    <td><strong>Progress indicator</strong></td>
                    <td>Visual feedback</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Scrollspy page initialization
$(document).ready(function() {
    console.log('📍 DSGT Scrollspy page loaded successfully');
    
    // Demo: Show welcome toast
    setTimeout(() => {
        if (typeof MetroAdmin !== 'undefined') {
            MetroAdmin.showDSGTInfoToast('Welcome to the Scrollspy demo page!');
        }
    }, 1000);
});
</script>
@endpush