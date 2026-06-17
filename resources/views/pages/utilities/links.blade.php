@extends('layouts.app')

@section('title', 'Links')
@section('breadcrumb', 'Links')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Links</h1>
        <p>Interactive link components with hover effects, animations, badges, and modern styling for navigation and actions</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-link"></i>
            <span>Try Links</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card dsgt-links-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What are Links?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Links are interactive elements that enable navigation between pages, sections, or external resources. Modern link design includes hover effects, animations, icon integration, and clear visual feedback. Links should be accessible, descriptive, and provide contextual information to users.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Links -->
<div class="dsgt-links-section-title">
    <i class="fa-solid fa-link"></i>
    Basic Link Styles <span class="badge badge-primary">Essential</span>
</div>

<div class="dsgt-links-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-text-width"></i>
                </div>
                <div>
                    <h3>Default Links</h3>
                    <p class="card-subtitle">Standard link styles</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-link-example">
                <span class="dsgt-link-example-label">Basic Links</span>
                <div style="display: flex; flex-direction: column; gap: 16px;">
                    <div>
                        <a href="#" class="dsgt-modern-link">Default Link</a>
                        <div style="margin-top: 4px; font-size: 12px; color: var(--text-secondary);">Standard accent color link</div>
                    </div>
                    <div>
                        <a href="#" class="dsgt-modern-link dsgt-link-underline">Underline Animation</a>
                        <div style="margin-top: 4px; font-size: 12px; color: var(--text-secondary);">Hover to see underline slide</div>
                    </div>
                    <div>
                        <a href="#" class="dsgt-modern-link dsgt-link-border-bottom">Border Bottom</a>
                        <div style="margin-top: 4px; font-size: 12px; color: var(--text-secondary);">Border appears on hover</div>
                    </div>
                </div>
                <div class="dsgt-link-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Hover over links to see effects
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-icons"></i>
                </div>
                <div>
                    <h3>Links with Icons</h3>
                    <p class="card-subtitle">Enhanced with icon indicators</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-link-example">
                <span class="lk-example-label">Icon Integration</span>
                <div style="display: flex; flex-direction: column; gap: 16px;">
                    <div>
                        <a href="#" class="modern-link dsgt-link-arrow">
                            View Details
                            <i class="fa-solid fa-arrow-right dsgt-dsgt-link-arrow-icon"></i>
                        </a>
                        <div style="margin-top: 4px; font-size: 12px; color: var(--text-secondary);">Arrow slides on hover</div>
                    </div>
                    <div>
                        <a href="#" class="modern-link dsgt-link-icon dsgt-dsgt-link-icon-left">
                            <i class="fa-solid fa-file-lines"></i>
                            Documentation
                        </a>
                        <div style="margin-top: 4px; font-size: 12px; color: var(--text-secondary);">Icon on left side</div>
                    </div>
                    <div>
                        <a href="#" class="modern-link dsgt-link-icon dsgt-dsgt-link-icon-right">
                            External Link
                            <i class="fa-solid fa-external-link"></i>
                        </a>
                        <div style="margin-top: 4px; font-size: 12px; color: var(--text-secondary);">Icon on right side</div>
                    </div>
                </div>
                <div class="dsgt-link-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Icons improve link recognition
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Colored Links -->
<div class="dsgt-links-section-title">
    <i class="fa-solid fa-palette"></i>
    Colored Links
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-fill"></i>
            </div>
            <div>
                <h3>Contextual Colors</h3>
                <p class="card-subtitle">Success, warning, danger, info variants</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-link-example">
            <span class="lk-example-label">Color Variations</span>
            <div style="display: flex; flex-wrap: wrap; gap: 24px; align-items: center;">
                <a href="#" class="modern-link">Default</a>
                <a href="#" class="modern-link dsgt-link-success">Success</a>
                <a href="#" class="modern-link dsgt-link-warning">Warning</a>
                <a href="#" class="modern-link dsgt-link-danger">Danger</a>
                <a href="#" class="modern-link dsgt-link-info">Info</a>
                <a href="#" class="modern-link dsgt-link-muted">Muted</a>
            </div>
            <div class="dsgt-link-helper">
                <i class="fa-solid fa-circle-info"></i>
                Use colors to indicate link context
            </div>
        </div>
    </div>
</div>

<!-- Link Sizes -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-text-height"></i>
            </div>
            <div>
                <h3>Link Sizes</h3>
                <p class="card-subtitle">XS, SM, MD, LG, XL variants</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-link-example">
            <span class="lk-example-label">Size Variations</span>
            <div style="display: flex; flex-wrap: wrap; gap: 24px; align-items: center;">
                <a href="#" class="modern-link dsgt-link-xs">Extra Small (12px)</a>
                <a href="#" class="modern-link dsgt-link-sm">Small (13px)</a>
                <a href="#" class="modern-link dsgt-link-md">Medium (14px)</a>
                <a href="#" class="modern-link dsgt-link-lg">Large (16px)</a>
                <a href="#" class="modern-link dsgt-link-xl">Extra Large (18px)</a>
            </div>
            <div class="dsgt-link-helper">
                <i class="fa-solid fa-circle-info"></i>
                Sizes range from 12px to 18px
            </div>
        </div>
    </div>
</div>

<!-- Link States -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-danger">
                <i class="fa-solid fa-toggle-on"></i>
            </div>
            <div>
                <h3>Link States</h3>
                <p class="card-subtitle">Active, disabled, visited states</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-link-example">
            <span class="lk-example-label">State Examples</span>
            <div style="display: flex; flex-wrap: wrap; gap: 24px; align-items: center;">
                <a href="#" class="modern-link">Active Link</a>
                <a href="#" class="modern-link dsgt-link-visited">Visited Link</a>
                <span class="modern-link dsgt-link-disabled">Disabled Link</span>
            </div>
            <div class="dsgt-link-helper">
                <i class="fa-solid fa-circle-info"></i>
                Disabled links have reduced opacity and pointer-events: none
            </div>
        </div>
    </div>
</div>

<!-- Button Links -->
<div class="dsgt-links-section-title">
    <i class="fa-solid fa-square"></i>
    Button Links <span class="badge badge-success">Interactive</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-hand-pointer"></i>
            </div>
            <div>
                <h3>Link as Buttons</h3>
                <p class="card-subtitle">Outline, solid, soft, ghost styles</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-link-example">
            <span class="lk-example-label">Button Styles</span>
            <div style="display: flex; flex-wrap: wrap; gap: 12px; align-items: center;">
                <a href="#" class="dsgt-link-btn">
                    <i class="fa-solid fa-download"></i>
                    Outline
                </a>
                <a href="#" class="dsgt-link-btn dsgt-dsgt-link-btn-solid">
                    <i class="fa-solid fa-cloud-arrow-down"></i>
                    Solid
                </a>
                <a href="#" class="dsgt-link-btn dsgt-dsgt-link-btn-soft">
                    <i class="fa-solid fa-file-export"></i>
                    Soft
                </a>
                <a href="#" class="dsgt-link-btn dsgt-dsgt-link-btn-ghost">
                    <i class="fa-solid fa-share-from-square"></i>
                    Ghost
                </a>
            </div>
            <div class="dsgt-link-helper">
                <i class="fa-solid fa-circle-info"></i>
                Button links provide prominent CTAs
            </div>
        </div>
    </div>
</div>

<!-- Links with Badges -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-badge"></i>
            </div>
            <div>
                <h3>Links with Badges</h3>
                <p class="card-subtitle">Notification count indicators</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-link-example">
            <span class="lk-example-label">Badge Integration</span>
            <div style="display: flex; flex-wrap: wrap; gap: 24px; align-items: center;">
                <a href="#" class="modern-link dsgt-link-with-badge">
                    <i class="fa-solid fa-envelope"></i>
                    Messages
                    <span class="dsgt-link-badge">5</span>
                </a>
                <a href="#" class="modern-link dsgt-link-with-badge">
                    <i class="fa-solid fa-bell"></i>
                    Notifications
                    <span class="dsgt-link-badge">12</span>
                </a>
                <a href="#" class="modern-link dsgt-link-with-badge">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Cart
                    <span class="dsgt-link-badge">3</span>
                </a>
            </div>
            <div class="dsgt-link-helper">
                <i class="fa-solid fa-circle-info"></i>
                Badges show count of new items
            </div>
        </div>
    </div>
</div>

<!-- Link List -->
<div class="dsgt-links-section-title">
    <i class="fa-solid fa-list"></i>
    Link Lists
</div>

<div class="dsgt-links-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-list-ul"></i>
                </div>
                <div>
                    <h3>Navigation Links</h3>
                    <p class="card-subtitle">List with icons</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-link-example">
                <span class="lk-example-label">Settings Menu</span>
                <ul class="dsgt-link-list">
                    <li>
                        <a href="#">
                            <div class="dsgt-dsgt-link-list-icon">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div>
                                <div style="font-weight: 600;">Profile</div>
                                <div style="font-size: 12px; color: var(--text-secondary);">Manage your account</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="dsgt-dsgt-link-list-icon">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div>
                                <div style="font-weight: 600;">Security</div>
                                <div style="font-size: 12px; color: var(--text-secondary);">Password & 2FA</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="dsgt-dsgt-link-list-icon">
                                <i class="fa-solid fa-bell"></i>
                            </div>
                            <div>
                                <div style="font-weight: 600;">Notifications</div>
                                <div style="font-size: 12px; color: var(--text-secondary);">Configure alerts</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="dsgt-dsgt-link-list-icon">
                                <i class="fa-solid fa-palette"></i>
                            </div>
                            <div>
                                <div style="font-weight: 600;">Appearance</div>
                                <div style="font-size: 12px; color: var(--text-secondary);">Theme & colors</div>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="dsgt-link-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Hover to see slide effect
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-grip"></i>
                </div>
                <div>
                    <h3>Link Cards</h3>
                    <p class="card-subtitle">Card-style link containers</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-link-example">
                <span class="lk-example-label">Card Links</span>
                <div style="display: flex; flex-direction: column; gap: 12px;">
                    <a href="#" class="dsgt-link-card">
                        <div class="dsgt-dsgt-link-card-header">
                            <div class="dsgt-dsgt-link-card-icon" style="background: var(--accent);">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div>
                                <h4 class="dsgt-dsgt-link-card-title">Tutorials</h4>
                                <p class="dsgt-dsgt-link-card-url">learn.example.com</p>
                            </div>
                        </div>
                        <p class="dsgt-dsgt-link-card-desc">Step-by-step guides and video tutorials</p>
                    </a>
                    <a href="#" class="dsgt-link-card">
                        <div class="dsgt-dsgt-link-card-header">
                            <div class="dsgt-dsgt-link-card-icon" style="background: var(--success);">
                                <i class="fa-solid fa-book"></i>
                            </div>
                            <div>
                                <h4 class="dsgt-dsgt-link-card-title">Documentation</h4>
                                <p class="dsgt-dsgt-link-card-url">docs.example.com</p>
                            </div>
                        </div>
                        <p class="dsgt-dsgt-link-card-desc">Complete API reference and guides</p>
                    </a>
                    <a href="#" class="dsgt-link-card">
                        <div class="dsgt-dsgt-link-card-header">
                            <div class="dsgt-dsgt-link-card-icon" style="background: var(--warning);">
                                <i class="fa-solid fa-comments"></i>
                            </div>
                            <div>
                                <h4 class="dsgt-dsgt-link-card-title">Community</h4>
                                <p class="dsgt-dsgt-link-card-url">community.example.com</p>
                            </div>
                        </div>
                        <p class="dsgt-dsgt-link-card-desc">Join discussions and get help</p>
                    </a>
                </div>
                <div class="dsgt-link-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Cards lift on hover with shadow
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Animated Links -->
<div class="dsgt-links-section-title">
    <i class="fa-solid fa-wand-magic-sparkles"></i>
    Animated Links
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-sparkles"></i>
            </div>
            <div>
                <h3>Special Effects</h3>
                <p class="card-subtitle">Glow, shimmer, bounce animations</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-link-example">
            <span class="lk-example-label">Animation Styles</span>
            <div style="display: flex; flex-wrap: wrap; gap: 24px; align-items: center;">
                <a href="#" class="modern-link dsgt-link-glow">Glow Effect</a>
                <a href="#" class="modern-link dsgt-link-shimmer">Shimmer Text</a>
                <a href="#" class="modern-link dsgt-link-bounce">Bounce Hover</a>
                <a href="#" class="modern-link dsgt-link-tooltip" data-tooltip="Click to view more">Tooltip Link</a>
            </div>
            <div class="dsgt-link-helper">
                <i class="fa-solid fa-circle-info"></i>
                Hover to see different animations
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumb Links -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-location-dot"></i>
            </div>
            <div>
                <h3>Breadcrumb Navigation</h3>
                <p class="card-subtitle">Hierarchical navigation links</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-link-example">
            <span class="lk-example-label">Breadcrumb Example</span>
            <nav class="dsgt-breadcrumb-links">
                <a href="#"><i class="fa-solid fa-house"></i> Home</a>
                <span class="dsgt-breadcrumb-separator">
                    <i class="fa-solid fa-chevron-right"></i>
                </span>
                <a href="#">Products</a>
                <span class="dsgt-breadcrumb-separator">
                    <i class="fa-solid fa-chevron-right"></i>
                </span>
                <a href="#">Electronics</a>
                <span class="dsgt-breadcrumb-separator">
                    <i class="fa-solid fa-chevron-right"></i>
                </span>
                <span class="dsgt-breadcrumb-current">Smartphones</span>
            </nav>
            <div class="dsgt-link-helper">
                <i class="fa-solid fa-circle-info"></i>
                Shows current location in hierarchy
            </div>
        </div>
    </div>
</div>

<!-- Text Links -->
<div class="dsgt-links-section-title">
    <i class="fa-solid fa-paragraph"></i>
    Text Links <span class="badge badge-info">Common</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-file-lines"></i>
            </div>
            <div>
                <h3>Links in Text Content</h3>
                <p class="card-subtitle">Inline links within paragraphs</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-link-example">
            <span class="lk-example-label">Paragraph with Links</span>
            <div style="display: flex; flex-direction: column; gap: 20px; font-size: 14px; line-height: 1.7;">
                <p style="color: var(--text-secondary); margin: 0;">
                    Welcome to our platform! Please read our 
                    <a href="#" class="modern-link link-underline">Terms of Service</a> and 
                    <a href="#" class="modern-link link-underline">Privacy Policy</a> before continuing. 
                    For more information, visit our <a href="#" class="modern-link dsgt-link-arrow">documentation center <i class="fa-solid fa-arrow-right dsgt-dsgt-link-arrow-icon"></i></a>.
                </p>
                <p style="color: var(--text-secondary); margin: 0;">
                    Need help? Contact our <a href="#" class="modern-link dsgt-link-success">support team</a> or check the 
                    <a href="#" class="modern-link dsgt-link-info">FAQ section</a>. You can also join our 
                    <a href="#" class="modern-link dsgt-link-warning">community forum</a> to connect with other users.
                </p>
                <p style="color: var(--text-secondary); margin: 0;">
                    <strong>Important:</strong> Please review the <a href="#" class="modern-link dsgt-link-danger">security guidelines</a> 
                    before uploading files. Report any issues to our <a href="#" class="modern-link dsgt-link-muted">abuse team</a>.
                </p>
            </div>
            <div class="dsgt-link-helper">
                <i class="fa-solid fa-circle-info"></i>
                Inline links blend naturally with text content
            </div>
        </div>
    </div>
</div>

<!-- External Links -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-up-right-from-square"></i>
            </div>
            <div>
                <h3>External Links</h3>
                <p class="card-subtitle">Links that open in new tabs</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-link-example">
            <span class="lk-example-label">External Link Indicators</span>
            <div style="display: flex; flex-direction: column; gap: 16px;">
                <div>
                    <a href="#" class="modern-link" target="_blank" rel="noopener noreferrer">
                        GitHub Repository
                        <i class="fa-solid fa-external-link" style="font-size: 12px; margin-left: 4px;"></i>
                    </a>
                    <div style="margin-top: 4px; font-size: 12px; color: var(--text-secondary);">Opens in new tab with external icon</div>
                </div>
                <div>
                    <a href="#" class="modern-link" target="_blank">
                        Documentation Site
                        <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 12px; margin-left: 4px;"></i>
                    </a>
                    <div style="margin-top: 4px; font-size: 12px; color: var(--text-secondary);">Alternative external link icon</div>
                </div>
                <div>
                    <a href="#" class="modern-link dsgt-link-info">
                        <i class="fa-brands fa-twitter"></i>
                        Follow us on Twitter
                        <i class="fa-solid fa-external-link" style="font-size: 11px; margin-left: 4px;"></i>
                    </a>
                    <div style="margin-top: 4px; font-size: 12px; color: var(--text-secondary);">Social media link with icon</div>
                </div>
            </div>
            <div class="dsgt-link-helper">
                <i class="fa-solid fa-circle-info"></i>
                External links should use target="_blank" and rel="noopener noreferrer"
            </div>
        </div>
    </div>
</div>

<!-- Download & Action Links -->
<div class="dsgt-links-section-title">
    <i class="fa-solid fa-download"></i>
    Download & Action Links
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-file-arrow-down"></i>
            </div>
            <div>
                <h3>Download Links</h3>
                <p class="card-subtitle">File downloads with metadata</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-link-example">
            <span class="lk-example-label">File Downloads</span>
            <div style="display: flex; flex-direction: column; gap: 16px;">
                <a href="#" class="modern-link dsgt-link-arrow">
                    <i class="fa-solid fa-file-pdf" style="color: var(--danger);"></i>
                    Download Report.pdf
                    <span style="font-size: 11px; color: var(--text-secondary); font-weight: 400;">(2.4 MB)</span>
                    <i class="fa-solid fa-download dsgt-dsgt-link-arrow-icon"></i>
                </a>
                
                <a href="#" class="modern-link dsgt-link-arrow dsgt-link-success">
                    <i class="fa-solid fa-file-excel" style="color: var(--success);"></i>
                    Export Data.xlsx
                    <span style="font-size: 11px; color: var(--text-secondary); font-weight: 400;">(1.8 MB)</span>
                    <i class="fa-solid fa-download dsgt-dsgt-link-arrow-icon"></i>
                </a>
                
                <a href="#" class="modern-link dsgt-link-arrow dsgt-link-info">
                    <i class="fa-solid fa-file-image" style="color: var(--info);"></i>
                    Product Photos.zip
                    <span style="font-size: 11px; color: var(--text-secondary); font-weight: 400;">(15.3 MB)</span>
                    <i class="fa-solid fa-download dsgt-dsgt-link-arrow-icon"></i>
                </a>
                
                <a href="#" class="modern-link dsgt-link-arrow dsgt-link-warning">
                    <i class="fa-solid fa-file-code" style="color: var(--warning);"></i>
                    Source Code.tar.gz
                    <span style="font-size: 11px; color: var(--text-secondary); font-weight: 400;">(856 KB)</span>
                    <i class="fa-solid fa-download dsgt-dsgt-link-arrow-icon"></i>
                </a>
            </div>
            <div class="dsgt-link-helper">
                <i class="fa-solid fa-circle-info"></i>
                Include file type icons and file size for better UX
            </div>
        </div>
    </div>
</div>

<!-- Email & Phone Links -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-at"></i>
            </div>
            <div>
                <h3>Email & Phone Links</h3>
                <p class="card-subtitle">Contact action links</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-link-example">
            <span class="lk-example-label">Contact Links</span>
            <div style="display: flex; flex-direction: column; gap: 16px;">
                <div>
                    <a href="mailto:support@example.com" class="modern-link dsgt-link-icon">
                        <i class="fa-solid fa-envelope"></i>
                        support@example.com
                    </a>
                    <div style="margin-top: 4px; font-size: 12px; color: var(--text-secondary);">Click to open email client</div>
                </div>
                <div>
                    <a href="tel:+6281234567890" class="modern-link dsgt-link-success dsgt-link-icon">
                        <i class="fa-solid fa-phone"></i>
                        +62 812-3456-7890
                    </a>
                    <div style="margin-top: 4px; font-size: 12px; color: var(--text-secondary);">Click to call on mobile</div>
                </div>
                <div>
                    <a href="sms:+6281234567890" class="modern-link dsgt-link-info dsgt-link-icon">
                        <i class="fa-solid fa-comment-sms"></i>
                        Send SMS
                    </a>
                    <div style="margin-top: 4px; font-size: 12px; color: var(--text-secondary);">Open SMS app</div>
                </div>
                <div>
                    <a href="https://wa.me/6281234567890" class="modern-link dsgt-link-icon" target="_blank" style="color: #25D366;">
                        <i class="fa-brands fa-whatsapp"></i>
                        Chat on WhatsApp
                    </a>
                    <div style="margin-top: 4px; font-size: 12px; color: var(--text-secondary);">Open WhatsApp chat</div>
                </div>
            </div>
            <div class="dsgt-link-helper">
                <i class="fa-solid fa-circle-info"></i>
                Use mailto:, tel:, and sms: protocols for contact links
            </div>
        </div>
    </div>
</div>

<!-- Anchor & Jump Links -->
<div class="dsgt-links-section-title">
    <i class="fa-solid fa-anchor"></i>
    Anchor & Jump Links
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-danger">
                <i class="fa-solid fa-link"></i>
            </div>
            <div>
                <h3>Page Navigation</h3>
                <p class="card-subtitle">Links to sections on same page</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-link-example">
            <span class="lk-example-label">Table of Contents Style</span>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                <div>
                    <h4 style="font-size: 13px; font-weight: 600; margin-bottom: 12px; color: var(--text-primary);">Quick Navigation</h4>
                    <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                        <li>
                            <a href="#section1" class="modern-link dsgt-link-arrow" style="font-size: 13px;">
                                1. Getting Started
                                <i class="fa-solid fa-chevron-right dsgt-dsgt-link-arrow-icon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#section2" class="modern-link dsgt-link-arrow" style="font-size: 13px;">
                                2. Installation
                                <i class="fa-solid fa-chevron-right dsgt-dsgt-link-arrow-icon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#section3" class="modern-link dsgt-link-arrow" style="font-size: 13px;">
                                3. Configuration
                                <i class="fa-solid fa-chevron-right dsgt-dsgt-link-arrow-icon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#section4" class="modern-link dsgt-link-arrow" style="font-size: 13px;">
                                4. Usage Examples
                                <i class="fa-solid fa-chevron-right dsgt-dsgt-link-arrow-icon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#section5" class="modern-link dsgt-link-arrow" style="font-size: 13px;">
                                5. API Reference
                                <i class="fa-solid fa-chevron-right dsgt-dsgt-link-arrow-icon"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 style="font-size: 13px; font-weight: 600; margin-bottom: 12px; color: var(--text-primary);">Back to Top</h4>
                    <a href="#" class="dsgt-link-btn dsgt-dsgt-link-btn-soft" style="font-size: 13px;">
                        <i class="fa-solid fa-arrow-up"></i>
                        Back to Top
                    </a>
                    <div style="margin-top: 16px; padding: 12px; background: var(--bg-tertiary); border-radius: 6px; font-size: 12px; color: var(--text-secondary);">
                        <i class="fa-solid fa-circle-info" style="color: var(--accent);"></i>
                        Anchor links use href="#section-id" to jump to specific sections
                    </div>
                </div>
            </div>
            <div class="dsgt-link-helper">
                <i class="fa-solid fa-circle-info"></i>
                Perfect for documentation and long-form content
            </div>
        </div>
    </div>
</div>

<!-- Social Media Links -->
<div class="dsgt-links-section-title">
    <i class="fa-solid fa-share-nodes"></i>
    Social Media Links
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-hashtag"></i>
            </div>
            <div>
                <h3>Social Platform Links</h3>
                <p class="card-subtitle">Brand-colored social media links</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-link-example">
            <span class="lk-example-label">Social Icons with Links</span>
            <div style="display: flex; flex-wrap: wrap; gap: 16px; align-items: center;">
                <a href="#" class="modern-link dsgt-link-icon" style="color: #1877F2;">
                    <i class="fa-brands fa-facebook"></i>
                    Facebook
                </a>
                <a href="#" class="modern-link dsgt-link-icon" style="color: #1DA1F2;">
                    <i class="fa-brands fa-twitter"></i>
                    Twitter
                </a>
                <a href="#" class="modern-link dsgt-link-icon" style="color: #E4405F;">
                    <i class="fa-brands fa-instagram"></i>
                    Instagram
                </a>
                <a href="#" class="modern-link dsgt-link-icon" style="color: #0A66C2;">
                    <i class="fa-brands fa-linkedin"></i>
                    LinkedIn
                </a>
                <a href="#" class="modern-link dsgt-link-icon" style="color: #FF0000;">
                    <i class="fa-brands fa-youtube"></i>
                    YouTube
                </a>
                <a href="#" class="modern-link dsgt-link-icon" style="color: #333;">
                    <i class="fa-brands fa-github"></i>
                    GitHub
                </a>
            </div>
            <div class="dsgt-link-helper">
                <i class="fa-solid fa-circle-info"></i>
                Use official brand colors for social media links
            </div>
        </div>
    </div>
</div>

<!-- Link Groups & Footers -->
<div class="dsgt-links-section-title">
    <i class="fa-solid fa-layer-group"></i>
    Link Groups & Footers
</div>

<div class="dsgt-links-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-bars-staggered"></i>
                </div>
                <div>
                    <h3>Footer-Style Link Groups</h3>
                    <p class="card-subtitle">Organized link columns</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-link-example">
                <span class="lk-example-label">Product Links</span>
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;">
                    <div>
                        <h4 style="font-size: 13px; font-weight: 700; margin-bottom: 12px; color: var(--text-primary);">Product</h4>
                        <ul class="dsgt-link-list">
                            <li style="padding: 8px 0;">
                                <a href="#" style="font-size: 13px; padding: 4px 0;">Features</a>
                            </li>
                            <li style="padding: 8px 0;">
                                <a href="#" style="font-size: 13px; padding: 4px 0;">Pricing</a>
                            </li>
                            <li style="padding: 8px 0;">
                                <a href="#" style="font-size: 13px; padding: 4px 0;">Integrations</a>
                            </li>
                            <li style="padding: 8px 0; border-bottom: none;">
                                <a href="#" style="font-size: 13px; padding: 4px 0;">Changelog</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 style="font-size: 13px; font-weight: 700; margin-bottom: 12px; color: var(--text-primary);">Resources</h4>
                        <ul class="dsgt-link-list">
                            <li style="padding: 8px 0;">
                                <a href="#" style="font-size: 13px; padding: 4px 0;">Documentation</a>
                            </li>
                            <li style="padding: 8px 0;">
                                <a href="#" style="font-size: 13px; padding: 4px 0;">API Reference</a>
                            </li>
                            <li style="padding: 8px 0;">
                                <a href="#" style="font-size: 13px; padding: 4px 0;">Guides</a>
                            </li>
                            <li style="padding: 8px 0; border-bottom: none;">
                                <a href="#" style="font-size: 13px; padding: 4px 0;">Community</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dsgt-link-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Common pattern for website footers
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-globe"></i>
                </div>
                <div>
                    <h3>Navigation Menu</h3>
                    <p class="card-subtitle">Header-style navigation</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-link-example">
                <span class="lk-example-label">Horizontal Nav Links</span>
                <nav style="display: flex; flex-wrap: wrap; gap: 24px; align-items: center; padding: 16px 0;">
                    <a href="#" class="modern-link" style="font-weight: 700;">Home</a>
                    <a href="#" class="modern-link">About</a>
                    <a href="#" class="modern-link">Services</a>
                    <a href="#" class="modern-link">Portfolio</a>
                    <a href="#" class="modern-link">Blog</a>
                    <a href="#" class="modern-link dsgt-link-btn dsgt-dsgt-link-btn-solid" style="font-size: 13px; padding: 6px 14px;">
                        Contact Us
                    </a>
                </nav>
                <div class="dsgt-link-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Horizontal navigation with CTA button
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="dsgt-links-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="dsgt-links-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>CSS Classes</h3>
                    <p class="card-subtitle">Available link utilities</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" style="width: 100%; font-size: 13px;">
                <thead>
                    <tr>
                        <th>Class</th>
                        <th>Effect</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>.modern-link</code></td>
                        <td>Base link style</td>
                    </tr>
                    <tr>
                        <td><code>.link-underline</code></td>
                        <td>Animated underline</td>
                    </tr>
                    <tr>
                        <td><code>.dsgt-link-arrow</code></td>
                        <td>Arrow slides on hover</td>
                    </tr>
                    <tr>
                        <td><code>.dsgt-link-btn</code></td>
                        <td>Button-style link</td>
                    </tr>
                    <tr>
                        <td><code>.dsgt-link-with-badge</code></td>
                        <td>Badge indicator</td>
                    </tr>
                </tbody>
            </table>
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
                    <p class="card-subtitle">Link design guidelines</p>
                </div>
            </div>
        </div>
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
                        <td><strong>Descriptive text</strong></td>
                        <td>Clear intent</td>
                    </tr>
                    <tr>
                        <td><strong>Hover effects</strong></td>
                        <td>Visual feedback</td>
                    </tr>
                    <tr>
                        <td><strong>Icon integration</strong></td>
                        <td>Better recognition</td>
                    </tr>
                    <tr>
                        <td><strong>Color contrast</strong></td>
                        <td>Accessibility (a11y)</td>
                    </tr>
                    <tr>
                        <td><strong>Focus states</strong></td>
                        <td>Keyboard navigation</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Links page initialization
$(document).ready(function() {
    console.log('📋 DSGT Links page loaded successfully');
});
</script>
@endpush