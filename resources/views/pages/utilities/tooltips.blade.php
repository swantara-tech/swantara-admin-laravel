@extends('layouts.app')

@section('title', 'Tooltips')
@section('breadcrumb', 'Tooltips')



@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Tooltips</h1>
        <p>Contextual information popups that appear when users hover over or focus on elements</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-circle-info"></i>
            <span>Hover Me</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card dsgt-tooltip-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What are Tooltips?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Tooltips are small contextual information overlays that appear when users hover over or focus on an element. They provide helpful hints, descriptions, or additional context without cluttering the interface. Tooltips are commonly used for icon buttons, form fields, abbreviations, and interactive elements that need explanation.</p>
            </div>
        </div>
    </div>
</div>

<!-- Tooltip Positions -->
<div class="dsgt-tooltip-section-title">
    <i class="fa-solid fa-arrows-left-right"></i>
    Tooltip Positions <span class="badge badge-primary">Essential</span>
</div>

<div class="dsgt-tooltip-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-arrow-up"></i>
                </div>
                <div>
                    <h3>Top Tooltip</h3>
                    <p class="card-subtitle">Appears above element</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-tooltip-example">
                <span class="dsgt-tooltip-example-label">Hover to see tooltip</span>
                <div class="dsgt-tooltip-wrapper">
                    <button class="dsgt-tooltip-trigger">Hover Me (Top)</button>
                    <div class="dsgt-tooltip dsgt-tooltip-top">Tooltip on top</div>
                </div>
            </div>
            <div class="dsgt-tooltip-helper">
                <i class="fa-solid fa-circle-info"></i>
                Default position, appears above
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-arrow-down"></i>
                </div>
                <div>
                    <h3>Bottom Tooltip</h3>
                    <p class="card-subtitle">Appears below element</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-tooltip-example">
                <span class="dsgt-tooltip-example-label">Hover to see tooltip</span>
                <div class="dsgt-tooltip-wrapper">
                    <button class="dsgt-tooltip-trigger">Hover Me (Bottom)</button>
                    <div class="dsgt-tooltip dsgt-tooltip-bottom">Tooltip on bottom</div>
                </div>
            </div>
            <div class="dsgt-tooltip-helper">
                <i class="fa-solid fa-circle-info"></i>
                Appears below the element
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <div>
                    <h3>Left Tooltip</h3>
                    <p class="card-subtitle">Appears on left side</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-tooltip-example">
                <span class="dsgt-tooltip-example-label">Hover to see tooltip</span>
                <div class="dsgt-tooltip-wrapper">
                    <button class="dsgt-tooltip-trigger">Hover Me (Left)</button>
                    <div class="dsgt-tooltip dsgt-tooltip-left">Tooltip on left</div>
                </div>
            </div>
            <div class="dsgt-tooltip-helper">
                <i class="fa-solid fa-circle-info"></i>
                Appears on the left side
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
                <div>
                    <h3>Right Tooltip</h3>
                    <p class="card-subtitle">Appears on right side</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-tooltip-example">
                <span class="dsgt-tooltip-example-label">Hover to see tooltip</span>
                <div class="dsgt-tooltip-wrapper">
                    <button class="dsgt-tooltip-trigger">Hover Me (Right)</button>
                    <div class="dsgt-tooltip dsgt-tooltip-right">Tooltip on right</div>
                </div>
            </div>
            <div class="dsgt-tooltip-helper">
                <i class="fa-solid fa-circle-info"></i>
                Appears on the right side
            </div>
        </div>
    </div>
</div>

<!-- Tooltip Colors -->
<div class="dsgt-tooltip-section-title">
    <i class="fa-solid fa-palette"></i>
    Tooltip Colors
</div>

<div class="dsgt-tooltip-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-info-circle"></i>
                </div>
                <div>
                    <h3>Primary Tooltip</h3>
                    <p class="card-subtitle">Blue accent color</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-tooltip-example">
                <span class="dsgt-tooltip-example-label">Primary color</span>
                <div class="dsgt-tooltip-wrapper dsgt-tooltip-primary">
                    <button class="dsgt-tooltip-trigger">Primary</button>
                    <div class="dsgt-tooltip dsgt-tooltip-top">Primary tooltip</div>
                </div>
            </div>
            <div class="dsgt-tooltip-helper">
                <i class="fa-solid fa-circle-info"></i>
                var(--accent) background
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-check-circle"></i>
                </div>
                <div>
                    <h3>Success Tooltip</h3>
                    <p class="card-subtitle">Green success color</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-tooltip-example">
                <span class="dsgt-tooltip-example-label">Success color</span>
                <div class="dsgt-tooltip-wrapper dsgt-tooltip-success">
                    <button class="dsgt-tooltip-trigger" style="border-color: var(--success); color: var(--success);">Success</button>
                    <div class="dsgt-tooltip dsgt-tooltip-top">Success action completed</div>
                </div>
            </div>
            <div class="dsgt-tooltip-helper">
                <i class="fa-solid fa-circle-info"></i>
                var(--success) background
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-exclamation-triangle"></i>
                </div>
                <div>
                    <h3>Warning Tooltip</h3>
                    <p class="card-subtitle">Yellow warning color</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-tooltip-example">
                <span class="dsgt-tooltip-example-label">Warning color</span>
                <div class="dsgt-tooltip-wrapper dsgt-tooltip-warning">
                    <button class="dsgt-tooltip-trigger" style="border-color: var(--warning); color: var(--warning);">Warning</button>
                    <div class="dsgt-tooltip dsgt-tooltip-top">Caution: Review before proceeding</div>
                </div>
            </div>
            <div class="dsgt-tooltip-helper">
                <i class="fa-solid fa-circle-info"></i>
                var(--warning) background
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-danger">
                    <i class="fa-solid fa-times-circle"></i>
                </div>
                <div>
                    <h3>Danger Tooltip</h3>
                    <p class="card-subtitle">Red error color</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-tooltip-example">
                <span class="dsgt-tooltip-example-label">Danger color</span>
                <div class="dsgt-tooltip-wrapper dsgt-tooltip-danger">
                    <button class="dsgt-tooltip-trigger" style="border-color: var(--danger); color: var(--danger);">Danger</button>
                    <div class="dsgt-tooltip dsgt-tooltip-top">Error: Please fix this issue</div>
                </div>
            </div>
            <div class="dsgt-tooltip-helper">
                <i class="fa-solid fa-circle-info"></i>
                var(--danger) background
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-circle-info"></i>
                </div>
                <div>
                    <h3>Info Tooltip</h3>
                    <p class="card-subtitle">Light blue info color</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-tooltip-example">
                <span class="dsgt-tooltip-example-label">Info color</span>
                <div class="dsgt-tooltip-wrapper dsgt-tooltip-info">
                    <button class="dsgt-tooltip-trigger" style="border-color: var(--info); color: var(--info);">Info</button>
                    <div class="dsgt-tooltip dsgt-tooltip-top">Informational message</div>
                </div>
            </div>
            <div class="dsgt-tooltip-helper">
                <i class="fa-solid fa-circle-info"></i>
                var(--info) background
            </div>
        </div>
    </div>
</div>

<!-- Tooltip with Icons -->
<div class="dsgt-tooltip-section-title">
    <i class="fa-solid fa-icons"></i>
    Tooltip with Icons
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-shapes"></i>
            </div>
            <div>
                <h3>Icon Tooltips</h3>
                <p class="card-subtitle">Tooltips with icon indicators</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-tooltip-example" style="min-height: 100px;">
            <span class="dsgt-tooltip-example-label">Hover over icons</span>
            <div style="display: flex; gap: 24px; align-items: center;">
                <div class="dsgt-tooltip-wrapper dsgt-tooltip-primary">
                    <i class="fa-solid fa-house" style="font-size: 24px; cursor: pointer; color: var(--accent);"></i>
                    <div class="dsgt-tooltip dsgt-tooltip-top dsgt-tooltip-with-icon">
                        <i class="fa-solid fa-circle-info"></i>
                        Home Dashboard
                    </div>
                </div>
                
                <div class="dsgt-tooltip-wrapper dsgt-tooltip-success">
                    <i class="fa-solid fa-check-circle" style="font-size: 24px; cursor: pointer; color: var(--success);"></i>
                    <div class="dsgt-tooltip dsgt-tooltip-top dsgt-tooltip-with-icon">
                        <i class="fa-solid fa-check"></i>
                        Verified Account
                    </div>
                </div>
                
                <div class="dsgt-tooltip-wrapper dsgt-tooltip-warning">
                    <i class="fa-solid fa-exclamation-triangle" style="font-size: 24px; cursor: pointer; color: var(--warning);"></i>
                    <div class="dsgt-tooltip dsgt-tooltip-top dsgt-tooltip-with-icon">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        Pending Review
                    </div>
                </div>
                
                <div class="dsgt-tooltip-wrapper dsgt-tooltip-danger">
                    <i class="fa-solid fa-trash" style="font-size: 24px; cursor: pointer; color: var(--danger);"></i>
                    <div class="dsgt-tooltip dsgt-tooltip-top dsgt-tooltip-with-icon">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        Delete Item
                    </div>
                </div>
                
                <div class="dsgt-tooltip-wrapper dsgt-tooltip-info">
                    <i class="fa-solid fa-question-circle" style="font-size: 24px; cursor: pointer; color: var(--info);"></i>
                    <div class="dsgt-tooltip dsgt-tooltip-top dsgt-tooltip-with-icon">
                        <i class="fa-solid fa-circle-question"></i>
                        Need Help?
                    </div>
                </div>
            </div>
        </div>
        <div class="tooltip-helper">
            <i class="fa-solid fa-circle-info"></i>
            Icons with descriptive tooltips
        </div>
    </div>
</div>

<!-- HTML Content Tooltips -->
<div class="dsgt-tooltip-section-title">
    <i class="fa-solid fa-code"></i>
    HTML Content Tooltips
</div>

<div class="dsgt-tooltip-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-file-code"></i>
                </div>
                <div>
                    <h3>Rich Content</h3>
                    <p class="card-subtitle">Multi-line tooltips</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-tooltip-example">
                <span class="dsgt-tooltip-example-label">Complex tooltip content</span>
                <div class="dsgt-tooltip-wrapper dsgt-tooltip-html dsgt-tooltip-primary">
                    <button class="dsgt-tooltip-trigger">Rich Tooltip</button>
                    <div class="dsgt-tooltip dsgt-tooltip-top">
                        <strong>Product Info</strong><br>
                        <span style="font-size: 11px;">Price: $99.99<br>In Stock: Yes<br>Rating: ★★★★☆</span>
                    </div>
                </div>
            </div>
            <div class="dsgt-tooltip-helper">
                <i class="fa-solid fa-circle-info"></i>
                HTML formatting supported
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-list"></i>
                </div>
                <div>
                    <h3>List Content</h3>
                    <p class="card-subtitle">Bullet points in tooltip</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-tooltip-example">
                <span class="dsgt-tooltip-example-label">List in tooltip</span>
                <div class="dsgt-tooltip-wrapper dsgt-tooltip-html dsgt-tooltip-success">
                    <button class="dsgt-tooltip-trigger" style="border-color: var(--success); color: var(--success);">Features</button>
                    <div class="dsgt-tooltip dsgt-tooltip-top">
                        <strong>Key Features:</strong><br>
                        <span style="font-size: 11px;">
                        ✓ Fast Performance<br>
                        ✓ Secure<br>
                        ✓ Mobile Ready
                        </span>
                    </div>
                </div>
            </div>
            <div class="dsgt-tooltip-helper">
                <i class="fa-solid fa-circle-info"></i>
                Structured information display
            </div>
        </div>
    </div>
</div>

<!-- Tooltip Triggers -->
<div class="dsgt-tooltip-section-title">
    <i class="fa-solid fa-hand-pointer"></i>
    Tooltip Triggers
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-mouse-pointer"></i>
            </div>
            <div>
                <h3>Trigger Events</h3>
                <p class="card-subtitle">Hover, focus, click, manual</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-tooltip-example" style="min-height: 100px;">
            <span class="dsgt-tooltip-example-label">Different trigger methods</span>
            <div style="display: flex; gap: 16px; flex-wrap: wrap; justify-content: center;">
                <div class="dsgt-tooltip-wrapper dsgt-tooltip-primary">
                    <button class="dsgt-tooltip-trigger">Hover (Default)</button>
                    <div class="dsgt-tooltip dsgt-tooltip-top">Shows on hover</div>
                </div>
                
                <div class="dsgt-tooltip-wrapper dsgt-tooltip-success dsgt-tooltip-show">
                    <button class="dsgt-tooltip-trigger" style="border-color: var(--success); color: var(--success);">Always Show</button>
                    <div class="dsgt-tooltip dsgt-tooltip-bottom">Always visible</div>
                </div>
                
                <div class="dsgt-tooltip-wrapper dsgt-tooltip-warning" id="click-tooltip">
                    <button class="dsgt-tooltip-trigger" style="border-color: var(--warning); color: var(--warning);" onclick="MetroAdmin.toggleDSGTTooltip('#click-tooltip')">Click Me</button>
                    <div class="dsgt-tooltip dsgt-tooltip-top">Clicked!</div>
                </div>
            </div>
        </div>
        <div class="dsgt-tooltip-helper">
            <i class="fa-solid fa-circle-info"></i>
            Hover, persistent, and click triggers
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="dsgt-tooltip-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="dsgt-tooltip-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>HTML Structure</h3>
                    <p class="card-subtitle">Basic tooltip markup</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-tooltip-code-block">
&lt;!-- Basic Tooltip --&gt;<br>
&lt;div class="dsgt-tooltip-wrapper"&gt;<br>
&nbsp;&nbsp;&lt;button&gt;Hover Me&lt;/button&gt;<br>
&nbsp;&nbsp;&lt;div class="dsgt-tooltip dsgt-tooltip-top"&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;Tooltip text here<br>
&nbsp;&nbsp;&lt;/div&gt;<br>
&lt;/div&gt;<br>
<br>
&lt;!-- With Color --&gt;<br>
&lt;div class="dsgt-tooltip-wrapper dsgt-tooltip-success"&gt;<br>
&nbsp;&nbsp;&lt;button&gt;Success&lt;/button&gt;<br>
&nbsp;&nbsp;&lt;div class="dsgt-tooltip dsgt-tooltip-bottom"&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;Success message<br>
&nbsp;&nbsp;&lt;/div&gt;<br>
&lt;/div&gt;<br>
<br>
&lt;!-- With Icon --&gt;<br>
&lt;div class="dsgt-tooltip-wrapper dsgt-tooltip-primary"&gt;<br>
&nbsp;&nbsp;&lt;i class="fa-solid fa-info"&gt;&lt;/i&gt;<br>
&nbsp;&nbsp;&lt;div class="dsgt-tooltip dsgt-tooltip-top dsgt-tooltip-with-icon"&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;i class="fa-solid fa-circle-info"&gt;&lt;/i&gt;<br>
&nbsp;&nbsp;&nbsp;&nbsp;Helpful info<br>
&nbsp;&nbsp;&lt;/div&gt;<br>
&lt;/div&gt;
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>
                <div>
                    <h3>Best Practices</h3>
                    <p class="card-subtitle">Tooltip guidelines</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" style="width: 100%; font-size: 13px;">
                <thead>
                    <tr>
                        <th>Practice</th>
                        <th>Reason</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Keep it short</strong></td>
                        <td>Quick reading</td>
                    </tr>
                    <tr>
                        <td><strong>Use for icons</strong></td>
                        <td>Clarify meaning</td>
                    </tr>
                    <tr>
                        <td><strong>Avoid on text</strong></td>
                        <td>Redundant info</td>
                    </tr>
                    <tr>
                        <td><strong>Position smart</strong></td>
                        <td>Stay in viewport</td>
                    </tr>
                    <tr>
                        <td><strong>Color context</strong></td>
                        <td>Semantic meaning</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Tooltips page initialization
$(document).ready(function() {
    console.log('✨ DSGT Tooltips page loaded successfully');
    
    // Initialize tooltips via MetroAdmin
    if (typeof MetroAdmin !== 'undefined') {
        MetroAdmin.initTooltips();
        
        // Auto-show first tooltip briefly as demo
        setTimeout(() => {
            const firstTooltip = $('.dsgt-tooltip-wrapper').first();
            if (firstTooltip.length) {
                firstTooltip.addClass('dsgt-tooltip-show');
                console.log('💡 Demo: First tooltip shown briefly');
                
                setTimeout(() => {
                    firstTooltip.removeClass('dsgt-tooltip-show');
                }, 2000);
            }
        }, 1500);
    }
});
</script>
@endpush