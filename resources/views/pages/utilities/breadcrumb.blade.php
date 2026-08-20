@extends('layouts.app')

@section('title', 'Breadcrumb')
@section('breadcrumb', 'Breadcrumb')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Breadcrumb</h1>
        <p>Navigation aids showing the current page's location within a hierarchical structure</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-ellipsis"></i>
            <span>Try Breadcrumb</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card sw-br-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What are Breadcrumbs?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Breadcrumbs are secondary navigation schemes that reveal the user's location in a website or web application. They provide a trail of links showing the path from the home page to the current page, helping users understand the site hierarchy and navigate back to previous levels.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Breadcrumbs -->
<div class="sw-br-section-title">
    <i class="fa-solid fa-ellipsis"></i>
    Basic Breadcrumbs <span class="sw-badge sw-badge-primary">Essential</span>
</div>

<div class="sw-breadcrumb-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-link"></i>
                </div>
                <div>
                    <h3>Default Breadcrumb</h3>
                    <p class="card-subtitle">Standard breadcrumb navigation</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-br-example">
                <span class="sw-br-example-label">Basic Structure</span>
                <nav aria-label="breadcrumb">
                    <ol class="sw-breadcrumb sw-breadcrumb-chevron">
                        <li>
                            <a href="#" class="sw-breadcrumb-item">
                                <i class="fa-solid fa-house"></i> Home
                            </a>
                        </li>
                        <li><span class="sw-br-separator"></span></li>
                        <li>
                            <a href="#" class="sw-breadcrumb-item">Library</a>
                        </li>
                        <li><span class="sw-br-separator"></span></li>
                        <li>
                            <span class="sw-breadcrumb-item sw-br-active">Data</span>
                        </li>
                    </ol>
                </nav>
                <div class="sw-br-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Chevron separator with home icon
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-angle-right"></i>
                </div>
                <div>
                    <h3>Angle Separator</h3>
                    <p class="card-subtitle">Double angle bracket separator</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-br-example">
                <span class="sw-br-example-label">Angle Double Right</span>
                <nav aria-label="breadcrumb">
                    <ol class="sw-breadcrumb sw-breadcrumb-angle">
                        <li>
                            <a href="#" class="sw-breadcrumb-item">
                                <i class="fa-solid fa-house"></i> Home
                            </a>
                        </li>
                        <li><span class="sw-br-separator"></span></li>
                        <li>
                            <a href="#" class="sw-breadcrumb-item">Products</a>
                        </li>
                        <li><span class="sw-br-separator"></span></li>
                        <li>
                            <a href="#" class="sw-breadcrumb-item">Electronics</a>
                        </li>
                        <li><span class="sw-br-separator"></span></li>
                        <li>
                            <span class="sw-breadcrumb-item sw-br-active">Laptops</span>
                        </li>
                    </ol>
                </nav>
                <div class="sw-br-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Uses Font Awesome angle-double-right icon
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumb with Different Separators -->
<div class="sw-br-section-title">
    <i class="fa-solid fa-icons"></i>
    Separator Styles <span class="sw-badge sw-badge-info">Variants</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-sliders"></i>
            </div>
            <div>
                <h3>Multiple Separator Options</h3>
                <p class="card-subtitle">Slash, dot, chevron, and angle separators</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-br-example">
            <span class="sw-br-example-label">Slash Separator</span>
            <nav aria-label="breadcrumb" style="margin-bottom: 20px;">
                <ol class="sw-breadcrumb sw-breadcrumb-slash">
                    <li><a href="#" class="sw-breadcrumb-item"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><span class="sw-br-separator"></span></li>
                    <li><a href="#" class="sw-breadcrumb-item">Users</a></li>
                    <li><span class="sw-br-separator"></span></li>
                    <li><span class="sw-breadcrumb-item sw-br-active">Profile</span></li>
                </ol>
            </nav>

            <span class="sw-br-example-label">Dot Separator</span>
            <nav aria-label="breadcrumb" style="margin-bottom: 20px;">
                <ol class="sw-breadcrumb sw-breadcrumb-dot">
                    <li><a href="#" class="sw-breadcrumb-item"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><span class="sw-br-separator"></span></li>
                    <li><a href="#" class="sw-breadcrumb-item">Settings</a></li>
                    <li><span class="sw-br-separator"></span></li>
                    <li><span class="sw-breadcrumb-item sw-br-active">Account</span></li>
                </ol>
            </nav>

            <span class="sw-br-example-label">Chevron Separator</span>
            <nav aria-label="breadcrumb">
                <ol class="sw-breadcrumb sw-breadcrumb-chevron">
                    <li><a href="#" class="sw-breadcrumb-item"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><span class="sw-br-separator"></span></li>
                    <li><a href="#" class="sw-breadcrumb-item">Dashboard</a></li>
                    <li><span class="sw-br-separator"></span></li>
                    <li><span class="sw-breadcrumb-item sw-br-active">Analytics</span></li>
                </ol>
            </nav>
            <div class="sw-br-helper">
                <i class="fa-solid fa-circle-info"></i>
                Choose separator style that matches your design language
            </div>
        </div>
    </div>
</div>

<!-- Arrow Breadcrumb -->
<div class="sw-br-section-title">
    <i class="fa-solid fa-chevron-right"></i>
    Arrow Breadcrumb <span class="sw-badge sw-badge-warning">Modern</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div>
                <h3>Arrow-Style Breadcrumb</h3>
                <p class="card-subtitle">Clip-path based arrow design</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-br-example">
            <span class="sw-br-example-label">Arrow Navigation</span>
            <nav aria-label="breadcrumb">
                <ol class="sw-breadcrumb sw-breadcrumb-arrow">
                    <li>
                        <a href="#" class="sw-breadcrumb-item">
                            <i class="fa-solid fa-house"></i> Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sw-breadcrumb-item">Projects</a>
                    </li>
                    <li>
                        <a href="#" class="sw-breadcrumb-item">Active</a>
                    </li>
                    <li>
                        <span class="sw-breadcrumb-item sw-br-active">Current</span>
                    </li>
                </ol>
            </nav>
            <div class="sw-br-helper">
                <i class="fa-solid fa-circle-info"></i>
                Uses CSS clip-path for arrow shapes - last item highlighted
            </div>
        </div>
    </div>
</div>

<!-- Card Breadcrumb -->
<div class="sw-br-section-title">
    <i class="fa-solid fa-id-card"></i>
    Card Breadcrumb <span class="sw-badge sw-badge-success">Styled</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-border-all"></i>
            </div>
            <div>
                <h3>Card-Style Breadcrumb</h3>
                <p class="card-subtitle">Individual card for each item</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-br-example">
            <span class="sw-br-example-label">Card Style with Hover Effect</span>
            <nav aria-label="breadcrumb">
                <ol class="sw-breadcrumb sw-breadcrumb-card">
                    <li>
                        <a href="#" class="sw-breadcrumb-item">
                            <i class="fa-solid fa-house"></i> Home
                        </a>
                    </li>
                    <li><span class="sw-br-separator">›</span></li>
                    <li>
                        <a href="#" class="sw-breadcrumb-item">
                            <i class="fa-solid fa-folder"></i> Categories
                        </a>
                    </li>
                    <li><span class="sw-br-separator">›</span></li>
                    <li>
                        <a href="#" class="sw-breadcrumb-item">
                            <i class="fa-solid fa-tag"></i> Products
                        </a>
                    </li>
                    <li><span class="sw-br-separator">›</span></li>
                    <li>
                        <span class="sw-breadcrumb-item sw-br-active">
                            <i class="fa-solid fa-box"></i> Details
                        </span>
                    </li>
                </ol>
            </nav>
            <div class="sw-br-helper">
                <i class="fa-solid fa-circle-info"></i>
                Each item has border and hover effect - active state uses accent color
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumb Sizes -->
<div class="sw-br-section-title">
    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
    Breadcrumb Sizes <span class="sw-badge sw-badge-secondary">Sizing</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-secondary">
                <i class="fa-solid fa-expand"></i>
            </div>
            <div>
                <h3>Size Variations</h3>
                <p class="card-subtitle">Small, medium, and large breadcrumbs</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-br-example">
            <span class="sw-br-example-label">Small Size</span>
            <nav aria-label="breadcrumb" style="margin-bottom: 20px;">
                <ol class="sw-breadcrumb sw-breadcrumb-chevron sw-breadcrumb-sm">
                    <li><a href="#" class="sw-breadcrumb-item"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><span class="sw-br-separator"></span></li>
                    <li><a href="#" class="sw-breadcrumb-item">Library</a></li>
                    <li><span class="sw-br-separator"></span></li>
                    <li><span class="sw-breadcrumb-item sw-br-active">Data</span></li>
                </ol>
            </nav>

            <span class="sw-br-example-label">Medium Size (Default)</span>
            <nav aria-label="breadcrumb" style="margin-bottom: 20px;">
                <ol class="sw-breadcrumb sw-breadcrumb-chevron sw-breadcrumb-md">
                    <li><a href="#" class="sw-breadcrumb-item"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><span class="sw-br-separator"></span></li>
                    <li><a href="#" class="sw-breadcrumb-item">Library</a></li>
                    <li><span class="sw-br-separator"></span></li>
                    <li><span class="sw-breadcrumb-item sw-br-active">Data</span></li>
                </ol>
            </nav>

            <span class="sw-br-example-label">Large Size</span>
            <nav aria-label="breadcrumb">
                <ol class="sw-breadcrumb sw-breadcrumb-chevron sw-breadcrumb-lg">
                    <li><a href="#" class="sw-breadcrumb-item"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><span class="sw-br-separator"></span></li>
                    <li><a href="#" class="sw-breadcrumb-item">Library</a></li>
                    <li><span class="sw-br-separator"></span></li>
                    <li><span class="sw-breadcrumb-item sw-br-active">Data</span></li>
                </ol>
            </nav>
            <div class="sw-br-helper">
                <i class="fa-solid fa-circle-info"></i>
                Use SM for compact UI, MD for general use, LG for emphasis
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumb with Icons -->
<div class="sw-br-section-title">
    <i class="fa-solid fa-icons"></i>
    Breadcrumb with Icons <span class="sw-badge sw-badge-primary">Enhanced</span>
</div>

<div class="sw-breadcrumb-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-star"></i>
                </div>
                <div>
                    <h3>Contextual Icons</h3>
                    <p class="card-subtitle">Icons representing each section</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-br-example">
                <span class="sw-br-example-label">Icon-Rich Breadcrumb</span>
                <nav aria-label="breadcrumb">
                    <ol class="sw-breadcrumb sw-breadcrumb-chevron sw-breadcrumb-with-icons">
                        <li>
                            <a href="#" class="sw-breadcrumb-item">
                                <i class="fa-solid fa-house"></i> Home
                            </a>
                        </li>
                        <li><span class="sw-br-separator"></span></li>
                        <li>
                            <a href="#" class="sw-breadcrumb-item">
                                <i class="fa-solid fa-users"></i> Users
                            </a>
                        </li>
                        <li><span class="sw-br-separator"></span></li>
                        <li>
                            <a href="#" class="sw-breadcrumb-item">
                                <i class="fa-solid fa-user-circle"></i> Profile
                            </a>
                        </li>
                        <li><span class="sw-br-separator"></span></li>
                        <li>
                            <span class="sw-breadcrumb-item sw-br-active">
                                <i class="fa-solid fa-gear"></i> Settings
                            </span>
                        </li>
                    </ol>
                </nav>
                <div class="sw-br-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Icons improve visual recognition of each section
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-palette"></i>
                </div>
                <div>
                    <h3>Colored Breadcrumb</h3>
                    <p class="card-subtitle">Different colors for each level</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-br-example">
                <span class="sw-br-example-label">Color-Coded Levels</span>
                <nav aria-label="breadcrumb">
                    <ol class="sw-breadcrumb sw-breadcrumb-chevron sw-breadcrumb-colored">
                        <li><a href="#" class="sw-breadcrumb-item"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><span class="sw-br-separator"></span></li>
                        <li><a href="#" class="sw-breadcrumb-item"><i class="fa-solid fa-box"></i> Products</a></li>
                        <li><span class="sw-br-separator"></span></li>
                        <li><a href="#" class="sw-breadcrumb-item"><i class="fa-solid fa-laptop"></i> Electronics</a></li>
                        <li><span class="sw-br-separator"></span></li>
                        <li><span class="sw-breadcrumb-item sw-br-active"><i class="fa-solid fa-mobile"></i> Mobile</span></li>
                    </ol>
                </nav>
                <div class="sw-br-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Each level has distinct color for better hierarchy visualization
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumb in Context -->
<div class="sw-br-section-title">
    <i class="fa-solid fa-eye"></i>
    Breadcrumb in Context <span class="sw-badge sw-badge-info">Real-world</span>
</div>

<div class="sw-breadcrumb-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-image"></i>
                </div>
                <div>
                    <h3>Page Header with Breadcrumb</h3>
                    <p class="card-subtitle">Breadcrumb in page context</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-br-example">
                <span class="sw-br-example-label">E-commerce Product Page</span>
                <div class="sw-br-context-card">
                    <div class="sw-br-context-header">
                        <nav aria-label="breadcrumb">
                            <ol class="sw-breadcrumb sw-breadcrumb-chevron">
                                <li><a href="#" class="sw-breadcrumb-item"><i class="fa-solid fa-house"></i> Home</a></li>
                                <li><span class="sw-br-separator"></span></li>
                                <li><a href="#" class="sw-breadcrumb-item">Shop</a></li>
                                <li><span class="sw-br-separator"></span></li>
                                <li><a href="#" class="sw-breadcrumb-item">Electronics</a></li>
                                <li><span class="sw-br-separator"></span></li>
                                <li><span class="sw-breadcrumb-item sw-br-active">Product Details</span></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="sw-br-context-body">
                        <h3 style="margin: 0 0 8px 0;">Product Name Here</h3>
                        <p style="color: var(--text-secondary); margin: 0;">Page content goes here with breadcrumb navigation above</p>
                    </div>
                </div>
                <div class="sw-br-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Breadcrumb in header section with content below
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-folder-open"></i>
                </div>
                <div>
                    <h3>File Manager Breadcrumb</h3>
                    <p class="card-subtitle">Folder navigation trail</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-br-example">
                <span class="sw-br-example-label">File System Navigation</span>
                <nav aria-label="breadcrumb">
                    <ol class="sw-breadcrumb sw-breadcrumb-card">
                        <li>
                            <a href="#" class="sw-breadcrumb-item">
                                <i class="fa-solid fa-hard-drive"></i> My Drive
                            </a>
                        </li>
                        <li><span class="sw-br-separator">›</span></li>
                        <li>
                            <a href="#" class="sw-breadcrumb-item">
                                <i class="fa-solid fa-folder"></i> Documents
                            </a>
                        </li>
                        <li><span class="sw-br-separator">›</span></li>
                        <li>
                            <a href="#" class="sw-breadcrumb-item">
                                <i class="fa-solid fa-folder"></i> Projects
                            </a>
                        </li>
                        <li><span class="sw-br-separator">›</span></li>
                        <li>
                            <span class="sw-breadcrumb-item sw-br-active">
                                <i class="fa-solid fa-folder-open"></i> Current Project
                            </span>
                        </li>
                    </ol>
                </nav>
                <div class="sw-br-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Perfect for file managers and document management systems
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Alignment Options -->
<div class="sw-br-section-title">
    <i class="fa-solid fa-align-center"></i>
    Alignment Options
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-arrows-left-right"></i>
            </div>
            <div>
                <h3>Left, Center, and Right Alignment</h3>
                <p class="card-subtitle">Flexible positioning options</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-br-example">
            <span class="sw-br-example-label">Left Aligned (Default)</span>
            <nav aria-label="breadcrumb" style="margin-bottom: 20px;">
                <ol class="sw-breadcrumb sw-breadcrumb-chevron">
                    <li><a href="#" class="sw-breadcrumb-item"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><span class="sw-br-separator"></span></li>
                    <li><a href="#" class="sw-breadcrumb-item">Products</a></li>
                    <li><span class="sw-br-separator"></span></li>
                    <li><span class="sw-breadcrumb-item sw-br-active">Current</span></li>
                </ol>
            </nav>

            <span class="sw-br-example-label">Center Aligned</span>
            <nav aria-label="breadcrumb" style="margin-bottom: 20px;">
                <ol class="sw-breadcrumb sw-breadcrumb-chevron sw-breadcrumb-centered">
                    <li><a href="#" class="sw-breadcrumb-item"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><span class="sw-br-separator"></span></li>
                    <li><a href="#" class="sw-breadcrumb-item">Products</a></li>
                    <li><span class="sw-br-separator"></span></li>
                    <li><span class="sw-breadcrumb-item sw-br-active">Current</span></li>
                </ol>
            </nav>

            <span class="sw-br-example-label">Right Aligned</span>
            <nav aria-label="breadcrumb">
                <ol class="sw-breadcrumb sw-breadcrumb-chevron sw-breadcrumb-right">
                    <li><a href="#" class="sw-breadcrumb-item"><i class="fa-solid fa-house"></i> Home</a></li>
                    <li><span class="sw-br-separator"></span></li>
                    <li><a href="#" class="sw-breadcrumb-item">Products</a></li>
                    <li><span class="sw-br-separator"></span></li>
                    <li><span class="sw-breadcrumb-item sw-br-active">Current</span></li>
                </ol>
            </nav>
            <div class="sw-br-helper">
                <i class="fa-solid fa-circle-info"></i>
                Use flexbox utilities for alignment control
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="sw-br-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="sw-breadcrumb-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>HTML Structure</h3>
                    <p class="card-subtitle">Basic breadcrumb markup</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <pre style="background: var(--bg-tertiary); padding: 16px; border-radius: 8px; font-size: 12px; overflow-x: auto;"><code>&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="custom-breadcrumb breadcrumb-chevron"&gt;
    &lt;li&gt;
      &lt;a href="/" class="breadcrumb-item"&gt;
        &lt;i class="fa-solid fa-house"&gt;&lt;/i&gt; Home
      &lt;/a&gt;
    &lt;/li&gt;
    &lt;li&gt;&lt;span class="breadcrumb-separator"&gt;&lt;/span&gt;&lt;/li&gt;
    &lt;li&gt;
      &lt;span class="breadcrumb-item active"&gt;
        Current Page
      &lt;/span&gt;
    &lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;</code></pre>
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
                    <p class="card-subtitle">Accessibility and UX tips</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" style="width: 100%; font-size: 13px;">
                <thead>
                    <tr>
                        <th>Practice</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>ARIA Label</strong></td>
                        <td>Use <code>aria-label="breadcrumb"</code></td>
                    </tr>
                    <tr>
                        <td><strong>Semantic HTML</strong></td>
                        <td>Use <code>&lt;nav&gt;</code> and <code>&lt;ol&gt;</code></td>
                    </tr>
                    <tr>
                        <td><strong>Last Item</strong></td>
                        <td>Mark as <code>.active</code> (no link)</td>
                    </tr>
                    <tr>
                        <td><strong>Depth</strong></td>
                        <td>Maximum 4-5 levels recommended</td>
                    </tr>
                    <tr>
                        <td><strong>Icons</strong></td>
                        <td>Home icon for first item</td>
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
 * SW Metro Template - Breadcrumb Page
 * Uses global MetroAdmin breadcrumb functions from app.js
 */

// Initialize on page load
$(document).ready(function() {
    console.log('✨ SW Metro Template - Breadcrumb page loaded successfully');
    console.log('💡 Dynamic breadcrumb generator ready');
    
    // Breadcrumb generation buttons
    $('.sw-breadcrumb-demo-controls .btn').on('click', function() {
        const type = $(this).data('type') || 'default';
        
        if (type === 'clear') {
            MetroAdmin.clearAllBreadcrumbs('swDynamicBreadcrumbContainer');
        } else {
            MetroAdmin.addDynamicBreadcrumb(type, 'swDynamicBreadcrumbContainer');
        }
    });
});
</script>
@endpush