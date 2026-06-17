@extends('layouts.app')

@section('title', 'Badges')
@section('breadcrumb', 'Badges')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Badges</h1>
        <p>Small count and labeling components for status indicators, notifications, and categorization</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-certificate"></i>
            <span>Try Badges</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What are Badges?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Badges are small visual elements that display status information, counts, or labels. They can be used standalone or in conjunction with other components like buttons, navigation items, or cards. Badges help draw attention to important information and provide quick visual cues.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Badges -->
<div class="dsgt-bd-section-title">
    <i class="fa-solid fa-certificate"></i>
    Basic Badges <span class="badge dsgt-badge-primary">Essential</span>
</div>

<div class="badge-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-palette"></i>
                </div>
                <div>
                    <h3>Solid Badges</h3>
                    <p class="card-subtitle">Gradient background badges</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-bd-example">
                <span class="bd-example-label">Color Variants</span>
                <div class="dsgt-badge-group">
                    <span class="dsgt-badge dsgt-badge-primary">Primary</span>
                    <span class="dsgt-badge dsgt-badge-success">Success</span>
                    <span class="dsgt-badge dsgt-badge-warning">Warning</span>
                    <span class="dsgt-badge dsgt-badge-danger">Danger</span>
                    <span class="dsgt-badge dsgt-badge-info">Info</span>
                    <span class="dsgt-badge dsgt-badge-secondary">Secondary</span>
                    <span class="dsgt-badge dsgt-badge-dark">Dark</span>
                    <span class="dsgt-badge dsgt-badge-light">Light</span>
                </div>
                <div class="dsgt-bd-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Solid badges use gradient backgrounds for modern look
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-border-style"></i>
                </div>
                <div>
                    <h3>Outline Badges</h3>
                    <p class="card-subtitle">Border-only style badges</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-bd-example">
                <span class="bd-example-label">Outline Style</span>
                <div class="dsgt-badge-group">
                    <span class="dsgt-badge dsgt-badge-outline-primary">Primary</span>
                    <span class="dsgt-badge dsgt-badge-outline-success">Success</span>
                    <span class="dsgt-badge dsgt-badge-outline-warning">Warning</span>
                    <span class="dsgt-badge dsgt-badge-outline-danger">Danger</span>
                    <span class="dsgt-badge dsgt-badge-outline-info">Info</span>
                </div>
                <div class="dsgt-bd-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Outline badges provide subtle, non-intrusive indicators
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Soft Badges -->
<div class="dsgt-bd-section-title">
    <i class="fa-solid fa-droplet"></i>
    Soft Badges <span class="badge dsgt-badge-info">Modern</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-fill"></i>
            </div>
            <div>
                <h3>Soft Background Badges</h3>
                <p class="card-subtitle">Light tinted backgrounds with colored text</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-bd-example">
            <span class="bd-example-label">Soft Color Variants</span>
            <div class="dsgt-badge-group">
                <span class="dsgt-badge dsgt-badge-soft-primary">Primary</span>
                <span class="dsgt-badge dsgt-badge-soft-success">Success</span>
                <span class="dsgt-badge dsgt-badge-soft-warning">Warning</span>
                <span class="dsgt-badge dsgt-badge-soft-danger">Danger</span>
                <span class="dsgt-badge dsgt-badge-soft-info">Info</span>
            </div>
            <div class="dsgt-bd-helper">
                <i class="fa-solid fa-circle-info"></i>
                Soft badges use transparent backgrounds (10% opacity) - perfect for modern UI
            </div>
        </div>
    </div>
</div>

<!-- Badge Sizes -->
<div class="dsgt-bd-section-title">
    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
    Badge Sizes <span class="badge dsgt-badge-warning">Sizing</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-expand"></i>
            </div>
            <div>
                <h3>Size Variations</h3>
                <p class="card-subtitle">From extra small to extra large</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-bd-example">
            <span class="bd-example-label">Size Comparison</span>
            <div class="badge-group" style="align-items: center;">
                <span class="dsgt-badge dsgt-badge-primary dsgt-badge-xs">XS Badge</span>
                <span class="dsgt-badge dsgt-badge-success dsgt-badge-sm">SM Badge</span>
                <span class="dsgt-badge dsgt-badge-warning dsgt-badge-md">MD Badge</span>
                <span class="dsgt-badge dsgt-badge-danger dsgt-badge-lg">LG Badge</span>
                <span class="dsgt-badge dsgt-badge-info dsgt-badge-xl">XL Badge</span>
            </div>
            <div class="dsgt-bd-helper">
                <i class="fa-solid fa-circle-info"></i>
                Use XS-SM for compact UI, MD for general use, LG-XL for emphasis
            </div>
        </div>
    </div>
</div>

<!-- Badges with Icons -->
<div class="dsgt-bd-section-title">
    <i class="fa-solid fa-icons"></i>
    Badges with Icons <span class="badge dsgt-badge-success">Enhanced</span>
</div>

<div class="badge-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-star"></i>
                </div>
                <div>
                    <h3>Icon Badges</h3>
                    <p class="card-subtitle">Badges with Font Awesome icons</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-bd-example">
                <span class="bd-example-label">Icon + Text Badges</span>
                <div class="dsgt-badge-group">
                    <span class="dsgt-badge dsgt-badge-primary dsgt-badge-with-icon">
                        <i class="fa-solid fa-star"></i> Featured
                    </span>
                    <span class="dsgt-badge dsgt-badge-success dsgt-badge-with-icon">
                        <i class="fa-solid fa-check"></i> Verified
                    </span>
                    <span class="dsgt-badge dsgt-badge-warning dsgt-badge-with-icon">
                        <i class="fa-solid fa-crown"></i> Premium
                    </span>
                    <span class="dsgt-badge dsgt-badge-danger dsgt-badge-with-icon">
                        <i class="fa-solid fa-fire"></i> Hot
                    </span>
                    <span class="dsgt-badge dsgt-badge-info dsgt-badge-with-icon">
                        <i class="fa-solid fa-bolt"></i> New
                    </span>
                    <span class="dsgt-badge dsgt-badge-secondary dsgt-badge-with-icon">
                        <i class="fa-solid fa-lock"></i> Locked
                    </span>
                </div>
                <div class="dsgt-bd-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Icons improve visual recognition and user comprehension
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-circle"></i>
                </div>
                <div>
                    <h3>Dot & Pill Badges</h3>
                    <p class="card-subtitle">Minimalist indicators</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-bd-example">
                <span class="bd-example-label">Dot Badges</span>
                <div class="dsgt-badge-group">
                    <span class="dsgt-badge dsgt-badge-dot dsgt-badge-success" title="Online"></span>
                    <span class="dsgt-badge dsgt-badge-dot dsgt-badge-warning" title="Away"></span>
                    <span class="dsgt-badge dsgt-badge-dot dsgt-badge-danger" title="Busy"></span>
                    <span class="dsgt-badge dsgt-badge-dot dsgt-badge-secondary" title="Offline"></span>
                    <span style="margin-left: 16px;"></span>
                    <span class="dsgt-badge dsgt-badge-dot dsgt-dsgt-badge-dot-lg dsgt-badge-success"></span>
                    <span class="dsgt-badge dsgt-badge-dot dsgt-dsgt-badge-dot-lg dsgt-badge-warning"></span>
                    <span class="dsgt-badge dsgt-badge-dot dsgt-dsgt-badge-dot-lg dsgt-badge-danger"></span>
                    <span class="dsgt-badge dsgt-badge-dot dsgt-dsgt-badge-dot-lg dsgt-badge-secondary"></span>
                </div>

                <span class="bd-example-label">Pill Badges</span>
                <div class="dsgt-badge-group">
                    <span class="dsgt-badge dsgt-badge-primary dsgt-badge-pill">Fully Rounded</span>
                    <span class="dsgt-badge dsgt-badge-success dsgt-badge-pill">Pill Style</span>
                    <span class="dsgt-badge dsgt-badge-warning dsgt-badge-pill">Elongated</span>
                </div>
                <div class="dsgt-bd-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Dot badges for status indicators, pill badges for labels
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Status Badges -->
<div class="dsgt-bd-section-title">
    <i class="fa-solid fa-signal"></i>
    Status Badges <span class="badge dsgt-badge-danger">Live</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-danger">
                <i class="fa-solid fa-tower-broadcast"></i>
            </div>
            <div>
                <h3>User Status Indicators</h3>
                <p class="card-subtitle">Animated status badges with pulse effect</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-bd-example">
            <span class="bd-example-label">Online Status</span>
            <div class="dsgt-badge-group">
                <span class="dsgt-badge dsgt-badge-status dsgt-badge-soft-success">
                    <span class="dsgt-dsgt-badge-status-dot"></span>
                    Online
                </span>
                <span class="dsgt-badge dsgt-badge-status dsgt-badge-soft-danger">
                    <span class="dsgt-dsgt-badge-status-dot"></span>
                    Busy
                </span>
                <span class="dsgt-badge dsgt-badge-status dsgt-badge-soft-warning">
                    <span class="dsgt-dsgt-badge-status-dot"></span>
                    Away
                </span>
                <span class="dsgt-badge dsgt-badge-status dsgt-badge-soft-secondary">
                    <span class="dsgt-dsgt-badge-status-dot"></span>
                    Offline
                </span>
            </div>
            <div class="dsgt-bd-helper">
                <i class="fa-solid fa-circle-info"></i>
                Status dots have pulse animation (except offline)
            </div>
        </div>
    </div>
</div>

<!-- Badges in Context -->
<div class="dsgt-bd-section-title">
    <i class="fa-solid fa-eye"></i>
    Badges in Context <span class="badge dsgt-badge-info">Real-world</span>
</div>

<div class="badge-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-list-check"></i>
                </div>
                <div>
                    <h3>Task List with Badges</h3>
                    <p class="card-subtitle">Status badges in list items</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-bd-example">
                <span class="bd-example-label">Project Tasks</span>
                <div class="dsgt-badge-context-item">
                    <div class="dsgt-badge-context-left">
                        <div class="dsgt-badge-context-icon" style="background: rgba(0, 120, 212, 0.1); color: var(--accent);">
                            <i class="fa-solid fa-file-code"></i>
                        </div>
                        <div class="dsgt-badge-context-text">
                            <h4>Update Homepage</h4>
                            <p>Frontend Development</p>
                        </div>
                    </div>
                    <span class="dsgt-badge dsgt-badge-soft-warning dsgt-badge-with-icon">
                        <i class="fa-solid fa-clock"></i> In Progress
                    </span>
                </div>

                <div class="dsgt-badge-context-item">
                    <div class="dsgt-badge-context-left">
                        <div class="dsgt-badge-context-icon" style="background: rgba(22, 198, 12, 0.1); color: var(--success);">
                            <i class="fa-solid fa-database"></i>
                        </div>
                        <div class="dsgt-badge-context-text">
                            <h4>Database Migration</h4>
                            <p>Backend Development</p>
                        </div>
                    </div>
                    <span class="dsgt-badge dsgt-badge-soft-success dsgt-badge-with-icon">
                        <i class="fa-solid fa-check-circle"></i> Completed
                    </span>
                </div>

                <div class="dsgt-badge-context-item">
                    <div class="dsgt-badge-context-left">
                        <div class="dsgt-badge-context-icon" style="background: rgba(232, 17, 35, 0.1); color: var(--danger);">
                            <i class="fa-solid fa-bug"></i>
                        </div>
                        <div class="dsgt-badge-context-text">
                            <h4>Fix Login Bug</h4>
                            <p>Bug Fix - Critical</p>
                        </div>
                    </div>
                    <span class="dsgt-badge dsgt-badge-soft-danger dsgt-badge-with-icon">
                        <i class="fa-solid fa-fire"></i> Urgent
                    </span>
                </div>

                <div class="dsgt-badge-context-item">
                    <div class="dsgt-badge-context-left">
                        <div class="dsgt-badge-context-icon" style="background: rgba(128, 128, 128, 0.1); color: var(--text-secondary);">
                            <i class="fa-solid fa-hourglass-start"></i>
                        </div>
                        <div class="dsgt-badge-context-text">
                            <h4>User Testing</h4>
                            <p>QA & Testing</p>
                        </div>
                    </div>
                    <span class="dsgt-badge dsgt-badge-soft-secondary dsgt-badge-with-icon">
                        <i class="fa-solid fa-pause-circle"></i> Pending
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-bell"></i>
                </div>
                <div>
                    <h3>Notification Badges</h3>
                    <p class="card-subtitle">Count badges for notifications</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-bd-example">
                <span class="bd-example-label">Notification Counts</span>
                <div style="display: flex; flex-direction: column; gap: 12px;">
                    <div class="dsgt-badge-context-item">
                        <div class="dsgt-badge-context-left">
                            <div class="dsgt-badge-context-icon" style="background: rgba(0, 120, 212, 0.1); color: var(--accent);">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="dsgt-badge-context-text">
                                <h4>Messages</h4>
                                <p>Unread conversations</p>
                            </div>
                        </div>
                        <span class="dsgt-badge dsgt-badge-danger dsgt-badge-notification">7</span>
                    </div>

                    <div class="dsgt-badge-context-item">
                        <div class="dsgt-badge-context-left">
                            <div class="dsgt-badge-context-icon" style="background: rgba(22, 198, 12, 0.1); color: var(--success);">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </div>
                            <div class="dsgt-badge-context-text">
                                <h4>Orders</h4>
                                <p>New orders today</p>
                            </div>
                        </div>
                        <span class="dsgt-badge dsgt-badge-success dsgt-badge-notification">12</span>
                    </div>

                    <div class="dsgt-badge-context-item">
                        <div class="dsgt-badge-context-left">
                            <div class="dsgt-badge-context-icon" style="background: rgba(255, 185, 0, 0.1); color: var(--warning);">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                            </div>
                            <div class="dsgt-badge-context-text">
                                <h4>Alerts</h4>
                                <p>System warnings</p>
                            </div>
                        </div>
                        <span class="dsgt-badge dsgt-badge-warning dsgt-badge-notification">3</span>
                    </div>

                    <div class="dsgt-badge-context-item">
                        <div class="dsgt-badge-context-left">
                            <div class="dsgt-badge-context-icon" style="background: rgba(232, 17, 35, 0.1); color: var(--danger);">
                                <i class="fa-solid fa-bug"></i>
                            </div>
                            <div class="dsgt-badge-context-text">
                                <h4>Errors</h4>
                                <p>Critical issues</p>
                            </div>
                        </div>
                        <span class="dsgt-badge dsgt-badge-danger dsgt-badge-notification">1</span>
                    </div>
                </div>
                <div class="dsgt-bd-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Notification badges use circular shape with small size
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Interactive Badge Demo -->
<div class="dsgt-bd-section-title">
    <i class="fa-solid fa-wand-magic-sparkles"></i>
    Interactive Demo <span class="badge dsgt-badge-success">Try It</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-play"></i>
            </div>
            <div>
                <h3>Dynamic Badge Generator</h3>
                <p class="card-subtitle">Click buttons to generate badges dynamically</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-bd-example">
            <span class="dsgt-bd-example-label">Generate Badges</span>
            <div class="dsgt-badge-demo-controls">
                <button class="btn btn-primary">
                    <i class="fa-solid fa-plus"></i> Primary
                </button>
                <button class="btn btn-success">
                    <i class="fa-solid fa-plus"></i> Success
                </button>
                <button class="btn btn-warning">
                    <i class="fa-solid fa-plus"></i> Warning
                </button>
                <button class="btn btn-danger">
                    <i class="fa-solid fa-plus"></i> Danger
                </button>
                <button class="btn btn-info">
                    <i class="fa-solid fa-plus"></i> With Icon
                </button>
                <button class="btn btn-secondary">
                    <i class="fa-solid fa-broom"></i> Clear All
                </button>
            </div>

            <div id="dsgtDynamicBadgeDisplay">
                <p style="text-align: center; color: var(--text-secondary); font-size: 13px; margin: 0;">
                    <i class="fa-solid fa-arrow-up" style="margin-right: 8px;"></i>
                    Click buttons above to generate badges here
                </p>
            </div>

            <div class="dsgt-bd-helper">
                <i class="fa-solid fa-circle-info"></i>
                Badges are generated with pop animation and can be cleared individually or all at once
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="dsgt-bd-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="badge-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>HTML Structure</h3>
                    <p class="card-subtitle">Basic badge markup</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <pre style="background: var(--bg-tertiary); padding: 16px; border-radius: 8px; font-size: 12px; overflow-x: auto;"><code>&lt;!-- Basic Badge --&gt;
&lt;span class="dsgt-badge dsgt-badge-primary"&gt;
  Label
&lt;/span&gt;

&lt;!-- Badge with Icon --&gt;
&lt;span class="dsgt-badge dsgt-badge-success dsgt-badge-with-icon"&gt;
  &lt;i class="fa-solid fa-check"&gt;&lt;/i&gt;
  Verified
&lt;/span&gt;

&lt;!-- Notification Badge --&gt;
&lt;span class="dsgt-badge dsgt-badge-danger dsgt-badge-notification"&gt;
  7
&lt;/span&gt;</code></pre>
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
                    <p class="card-subtitle">When to use each badge type</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" style="width: 100%; font-size: 13px;">
                <thead>
                    <tr>
                        <th>Badge Type</th>
                        <th>Use Case</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span class="dsgt-badge dsgt-badge-primary dsgt-badge-xs">Solid</span></td>
                        <td>Primary actions, important labels</td>
                    </tr>
                    <tr>
                        <td><span class="dsgt-badge dsgt-badge-outline-primary dsgt-badge-xs">Outline</span></td>
                        <td>Secondary info, subtle indicators</td>
                    </tr>
                    <tr>
                        <td><span class="dsgt-badge dsgt-badge-soft-primary dsgt-badge-xs">Soft</span></td>
                        <td>Modern UI, status labels</td>
                    </tr>
                    <tr>
                        <td><span class="dsgt-badge dsgt-badge-dot dsgt-badge-success"></span> Dot</td>
                        <td>Online status, minimal indicators</td>
                    </tr>
                    <tr>
                        <td><span class="dsgt-badge dsgt-badge-danger dsgt-badge-notification">3</span></td>
                        <td>Notification counts, alerts</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
/**
 * DSGT Metro Template - Badge Page
 * Uses global MetroAdmin badge functions from app.js
 */

// Initialize on page load
$(document).ready(function() {
    console.log('✨ DSGT Metro Template - Badges page loaded successfully');
    console.log('💡 Dynamic badge generator ready');
    
    // Badge generation buttons
    $('.dsgt-badge-demo-controls .btn').on('click', function() {
        const type = $(this).text().trim().toLowerCase();
        
        if (type.includes('clear')) {
            MetroAdmin.clearAllBadges('dsgtDynamicBadgeDisplay');
        } else {
            const badgeType = type.includes('primary') ? 'primary' :
                            type.includes('success') ? 'success' :
                            type.includes('warning') ? 'warning' :
                            type.includes('danger') ? 'danger' : 'icon';
            MetroAdmin.addDynamicBadge(badgeType, 'dsgtDynamicBadgeDisplay');
        }
    });
});
</script>
@endpush