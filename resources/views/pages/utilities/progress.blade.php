@extends('layouts.app')

@section('title', 'Progress')
@section('breadcrumb', 'Progress')



@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Progress</h1>
        <p>Visual indicators for tracking task completion, loading states, and step-by-step processes</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary" onclick="MetroAdmin.animateAllSWProgress()">
            <i class="fa-solid fa-play"></i>
            <span>Animate All</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card sw-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">Progress Indicators</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Progress indicators show users the completion status of tasks, file uploads, form submissions, and multi-step processes. They include linear progress bars, circular progress rings, step indicators, and loading animations. Well-designed progress indicators reduce user anxiety and provide clear feedback about ongoing operations.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Progress Bars -->
<div class="sw-progress-section-title">
    <i class="fa-solid fa-bars-progress"></i>
    Basic Progress Bars <span class="badge badge-primary">Essential</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-chart-line"></i>
            </div>
            <div>
                <h3>Default Progress</h3>
                <p class="card-subtitle">Linear progress bars</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-progress-example">
            <span class="sw-progress-example-label">Progress Bars with Labels</span>
            
            <div class="sw-progress-with-label">
                <div class="sw-progress-label">
                    <span class="sw-progress-label-text">Project Alpha</span>
                    <span class="sw-progress-label-value">75%</span>
                </div>
                <div class="sw-progress-bar-container sw-progress-md">
                    <div class="sw-progress-bar-fill" style="width: 75%;"></div>
                </div>
            </div>

            <div class="sw-progress-with-label">
                <div class="sw-progress-label">
                    <span class="sw-progress-label-text">File Upload</span>
                    <span class="sw-progress-label-value">45%</span>
                </div>
                <div class="sw-progress-bar-container sw-progress-md">
                    <div class="sw-progress-bar-fill" style="width: 45%;"></div>
                </div>
            </div>

            <div class="sw-progress-with-label">
                <div class="sw-progress-label">
                    <span class="sw-progress-label-text">Storage Used</span>
                    <span class="sw-progress-label-value">90%</span>
                </div>
                <div class="sw-progress-bar-container sw-progress-md">
                    <div class="sw-progress-bar-fill" style="width: 90%;"></div>
                </div>
            </div>

            <div class="sw-progress-helper">
                <i class="fa-solid fa-circle-info"></i>
                Progress ranges from 0% to 100%
            </div>
        </div>
    </div>
</div>

<!-- Progress Bar Sizes -->
<div class="sw-progress-section-title">
    <i class="fa-solid fa-expand"></i>
    Progress Bar Sizes
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-text-height"></i>
            </div>
            <div>
                <h3>Height Variations</h3>
                <p class="card-subtitle">XS, SM, MD, LG, XL sizes</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-progress-example">
            <span class="sw-progress-example-label">Size Options</span>
            
            <div style="margin-bottom: 16px;">
                <div style="font-size: 12px; color: var(--text-secondary); margin-bottom: 4px;">Extra Small (4px)</div>
                <div class="sw-progress-bar-container sw-progress-xs">
                    <div class="sw-progress-bar-fill" style="width: 60%;"></div>
                </div>
            </div>

            <div style="margin-bottom: 16px;">
                <div style="font-size: 12px; color: var(--text-secondary); margin-bottom: 4px;">Small (6px)</div>
                <div class="sw-progress-bar-container sw-progress-sm">
                    <div class="sw-progress-bar-fill" style="width: 60%;"></div>
                </div>
            </div>

            <div style="margin-bottom: 16px;">
                <div style="font-size: 12px; color: var(--text-secondary); margin-bottom: 4px;">Medium (8px) - Default</div>
                <div class="sw-progress-bar-container sw-progress-md">
                    <div class="sw-progress-bar-fill" style="width: 60%;"></div>
                </div>
            </div>

            <div style="margin-bottom: 16px;">
                <div style="font-size: 12px; color: var(--text-secondary); margin-bottom: 4px;">Large (12px)</div>
                <div class="sw-progress-bar-container sw-progress-lg">
                    <div class="sw-progress-bar-fill" style="width: 60%;"></div>
                </div>
            </div>

            <div>
                <div style="font-size: 12px; color: var(--text-secondary); margin-bottom: 4px;">Extra Large (16px)</div>
                <div class="sw-progress-bar-container sw-progress-xl">
                    <div class="sw-progress-bar-fill" style="width: 60%;"></div>
                </div>
            </div>

            <div class="sw-progress-helper">
                <i class="fa-solid fa-circle-info"></i>
                Heights: 4px, 6px, 8px, 12px, 16px
            </div>
        </div>
    </div>
</div>

<!-- Progress Bar Colors -->
<div class="sw-progress-section-title">
    <i class="fa-solid fa-palette"></i>
    Progress Bar Colors
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-fill-drip"></i>
            </div>
            <div>
                <h3>Color Variants</h3>
                <p class="card-subtitle">5 semantic colors</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-progress-example">
            <span class="sw-progress-example-label">Color Options</span>
            
            <div class="sw-progress-with-label sw-progress-primary">
                <div class="sw-progress-label">
                    <span class="sw-progress-label-text">Primary</span>
                    <span class="sw-progress-label-value">75%</span>
                </div>
                <div class="sw-progress-bar-container sw-progress-md">
                    <div class="sw-progress-bar-fill" style="width: 75%;"></div>
                </div>
            </div>

            <div class="sw-progress-with-label sw-progress-success">
                <div class="sw-progress-label">
                    <span class="sw-progress-label-text">Success</span>
                    <span class="sw-progress-label-value">60%</span>
                </div>
                <div class="sw-progress-bar-container sw-progress-md">
                    <div class="sw-progress-bar-fill" style="width: 60%;"></div>
                </div>
            </div>

            <div class="sw-progress-with-label sw-progress-warning">
                <div class="sw-progress-label">
                    <span class="sw-progress-label-text">Warning</span>
                    <span class="sw-progress-label-value">45%</span>
                </div>
                <div class="sw-progress-bar-container sw-progress-md">
                    <div class="sw-progress-bar-fill" style="width: 45%;"></div>
                </div>
            </div>

            <div class="sw-progress-with-label sw-progress-danger">
                <div class="sw-progress-label">
                    <span class="sw-progress-label-text">Danger</span>
                    <span class="sw-progress-label-value">90%</span>
                </div>
                <div class="sw-progress-bar-container sw-progress-md">
                    <div class="sw-progress-bar-fill" style="width: 90%;"></div>
                </div>
            </div>

            <div class="sw-progress-with-label sw-progress-info">
                <div class="sw-progress-label">
                    <span class="sw-progress-label-text">Info</span>
                    <span class="sw-progress-label-value">55%</span>
                </div>
                <div class="sw-progress-bar-container sw-progress-md">
                    <div class="sw-progress-bar-fill" style="width: 55%;"></div>
                </div>
            </div>

            <div class="sw-progress-helper">
                <i class="fa-solid fa-circle-info"></i>
                Use semantic colors for context
            </div>
        </div>
    </div>
</div>

<!-- Striped & Animated -->
<div class="sw-progress-section-title">
    <i class="fa-solid fa-wand-magic-sparkles"></i>
    Striped & Animated
</div>

<div class="sw-progress-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-grip-lines"></i>
                </div>
                <div>
                    <h3>Striped Progress</h3>
                    <p class="card-subtitle">Diagonal stripe pattern</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-progress-example">
                <span class="sw-progress-example-label">Static Stripes</span>
                <div class="sw-progress-bar-container sw-progress-md sw-progress-striped">
                    <div class="sw-progress-bar-fill" style="width: 65%;"></div>
                </div>
                <div class="sw-progress-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Background pattern effect
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-spinner"></i>
                </div>
                <div>
                    <h3>Animated Stripes</h3>
                    <p class="card-subtitle">Moving stripe animation</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-progress-example">
                <span class="sw-progress-example-label">Animated Stripes</span>
                <div class="sw-progress-bar-container sw-progress-md sw-progress-striped sw-progress-animated">
                    <div class="sw-progress-bar-fill" style="width: 65%;"></div>
                </div>
                <div class="sw-progress-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Continuous animation
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-rainbow"></i>
                </div>
                <div>
                    <h3>Gradient Progress</h3>
                    <p class="card-subtitle">Color gradient fill</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-progress-example">
                <span class="sw-progress-example-label">Gradient Fill</span>
                <div class="sw-progress-bar-container sw-progress-md sw-progress-gradient">
                    <div class="sw-progress-bar-fill" style="width: 70%;"></div>
                </div>
                <div class="sw-progress-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Animated gradient colors
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Circular Progress -->
<div class="sw-progress-section-title">
    <i class="fa-solid fa-circle-notch"></i>
    Circular Progress
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-bullseye"></i>
            </div>
            <div>
                <h3>Ring Progress</h3>
                <p class="card-subtitle">Circular progress indicators</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-progress-example">
            <span class="sw-progress-example-label">Size Variations</span>
            <div style="display: flex; align-items: center; justify-content: center; flex-wrap: wrap; gap: 16px;">
                <div class="sw-circular-progress circular-sw-progress-xs" data-progress="40">
                    <svg width="100%" height="100%" viewBox="0 0 60 60">
                        <circle class="sw-circular-progress-bg" cx="30" cy="30" r="26"></circle>
                        <circle class="sw-circular-progress-fill" cx="30" cy="30" r="26" 
                                stroke-dasharray="163.36" 
                                stroke-dashoffset="98.02"></circle>
                    </svg>
                    <span class="sw-circular-progress-text">40%</span>
                </div>

                <div class="sw-circular-progress circular-sw-progress-sm" data-progress="60">
                    <svg width="100%" height="100%" viewBox="0 0 90 90">
                        <circle class="sw-circular-progress-bg" cx="45" cy="45" r="41"></circle>
                        <circle class="sw-circular-progress-fill" cx="45" cy="45" r="41" 
                                stroke-dasharray="257.61" 
                                stroke-dashoffset="103.04"></circle>
                    </svg>
                    <span class="sw-circular-progress-text">60%</span>
                </div>

                <div class="sw-circular-progress circular-sw-progress-md" data-progress="75">
                    <svg width="100%" height="100%" viewBox="0 0 120 120">
                        <circle class="sw-circular-progress-bg" cx="60" cy="60" r="56"></circle>
                        <circle class="sw-circular-progress-fill" cx="60" cy="60" r="56" 
                                stroke-dasharray="351.86" 
                                stroke-dashoffset="87.96"></circle>
                    </svg>
                    <span class="sw-circular-progress-text">75%</span>
                </div>

                <div class="sw-circular-progress circular-sw-progress-lg" data-progress="85">
                    <svg width="100%" height="100%" viewBox="0 0 150 150">
                        <circle class="sw-circular-progress-bg" cx="75" cy="75" r="71"></circle>
                        <circle class="sw-circular-progress-fill" cx="75" cy="75" r="71" 
                                stroke-dasharray="446.11" 
                                stroke-dashoffset="66.92"></circle>
                    </svg>
                    <span class="sw-circular-progress-text">85%</span>
                </div>

                <div class="sw-circular-progress circular-sw-progress-xl" data-progress="95">
                    <svg width="100%" height="100%" viewBox="0 0 180 180">
                        <circle class="sw-circular-progress-bg" cx="90" cy="90" r="86"></circle>
                        <circle class="sw-circular-progress-fill" cx="90" cy="90" r="86" 
                                stroke-dasharray="540.35" 
                                stroke-dashoffset="27.02"></circle>
                    </svg>
                    <span class="sw-circular-progress-text">95%</span>
                </div>
            </div>
            <div class="sw-progress-helper">
                <i class="fa-solid fa-circle-info"></i>
                SVG-based circular progress
            </div>
        </div>
    </div>
</div>

<!-- Step Progress -->
<div class="sw-progress-section-title">
    <i class="fa-solid fa-list-ol"></i>
    Step Progress
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-shoe-prints"></i>
            </div>
            <div>
                <h3>Multi-Step Process</h3>
                <p class="card-subtitle">Step-by-step completion</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-progress-example">
            <span class="sw-progress-example-label">Checkout Process</span>
            <div class="sw-step-progress">
                <div class="sw-sw-step-progress-line" style="width: 66%;"></div>
                
                <div class="sw-step-item completed">
                    <div class="sw-step-circle"><i class="fa-solid fa-check"></i></div>
                    <div class="sw-step-label">Cart</div>
                </div>
                
                <div class="sw-step-item completed">
                    <div class="sw-step-circle"><i class="fa-solid fa-check"></i></div>
                    <div class="sw-step-label">Shipping</div>
                </div>
                
                <div class="sw-step-item active">
                    <div class="sw-step-circle">3</div>
                    <div class="sw-step-label">Payment</div>
                </div>
                
                <div class="sw-step-item">
                    <div class="sw-step-circle">4</div>
                    <div class="sw-step-label">Review</div>
                </div>
                
                <div class="sw-step-item">
                    <div class="sw-step-circle">5</div>
                    <div class="sw-step-label">Complete</div>
                </div>
            </div>
            <div class="sw-progress-helper">
                <i class="fa-solid fa-circle-info"></i>
                Shows current step in process
            </div>
        </div>
    </div>
</div>

<!-- Progress Cards -->
<div class="sw-progress-section-title">
    <i class="fa-solid fa-id-card"></i>
    Progress Cards
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-chart-pie"></i>
            </div>
            <div>
                <h3>Dashboard Metrics</h3>
                <p class="card-subtitle">Project progress tracking</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-progress-example">
            <span class="sw-progress-example-label">Project Dashboard</span>
            
            <div class="sw-progress-card">
                <div class="sw-sw-progress-card-header">
                    <h4 class="sw-sw-progress-card-title">Website Redesign</h4>
                    <span class="sw-sw-progress-card-value">75%</span>
                </div>
                <div class="sw-progress-bar-container sw-progress-lg sw-progress-primary">
                    <div class="sw-progress-bar-fill" style="width: 75%;"></div>
                </div>
            </div>

            <div class="sw-progress-card">
                <div class="sw-sw-progress-card-header">
                    <h4 class="sw-sw-progress-card-title">Mobile App Development</h4>
                    <span class="sw-sw-progress-card-value">60%</span>
                </div>
                <div class="sw-progress-bar-container sw-progress-lg sw-progress-success">
                    <div class="sw-progress-bar-fill" style="width: 60%;"></div>
                </div>
            </div>

            <div class="sw-progress-card">
                <div class="sw-sw-progress-card-header">
                    <h4 class="sw-sw-progress-card-title">Database Migration</h4>
                    <span class="sw-sw-progress-card-value">90%</span>
                </div>
                <div class="sw-progress-bar-container sw-progress-lg sw-progress-warning">
                    <div class="sw-progress-bar-fill" style="width: 90%;"></div>
                </div>
            </div>

            <div class="sw-progress-helper">
                <i class="fa-solid fa-circle-info"></i>
                Card-style progress containers
            </div>
        </div>
    </div>
</div>

<!-- Loading Animations -->
<div class="sw-progress-section-title">
    <i class="fa-solid fa-spinner"></i>
    Loading Animations
</div>

<div class="sw-progress-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-circle-notch"></i>
                </div>
                <div>
                    <h3>Spinner</h3>
                    <p class="card-subtitle">Circular loading spinner</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-progress-example">
                <span class="sw-progress-example-label">Loading Spinner</span>
                <div class="sw-loading-spinner"></div>
                <div class="sw-progress-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Rotating border spinner
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-ellipsis"></i>
                </div>
                <div>
                    <h3>Bouncing Dots</h3>
                    <p class="card-subtitle">Animated dot indicators</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-progress-example">
                <span class="sw-progress-example-label">Loading Dots</span>
                <div class="sw-sw-loading-dots">
                    <div class="sw-loading-dot"></div>
                    <div class="sw-loading-dot"></div>
                    <div class="sw-loading-dot"></div>
                </div>
                <div class="sw-progress-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Sequential bounce animation
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div>
                    <h3>Skeleton Loading</h3>
                    <p class="card-subtitle">Content placeholder</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-progress-example">
                <span class="sw-progress-example-label">Skeleton Blocks</span>
                <div style="text-align: left;">
                    <div class="sw-skeleton" style="height: 20px; width: 75%; margin-bottom: 12px;"></div>
                    <div class="sw-skeleton" style="height: 12px; width: 100%; margin-bottom: 8px;"></div>
                    <div class="sw-skeleton" style="height: 12px; width: 85%; margin-bottom: 8px;"></div>
                    <div class="sw-skeleton" style="height: 12px; width: 60%;"></div>
                </div>
                <div class="sw-progress-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Shimmer loading effect
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="sw-progress-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="sw-progress-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>CSS Classes</h3>
                    <p class="card-subtitle">Available progress utilities</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" style="width: 100%; font-size: 13px;">
                <thead>
                    <tr>
                        <th>Class</th>
                        <th>Purpose</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>.sw-progress-bar-container</code></td>
                        <td>Base container</td>
                    </tr>
                    <tr>
                        <td><code>.sw-progress-bar-fill</code></td>
                        <td>Filled portion</td>
                    </tr>
                    <tr>
                        <td><code>.sw-progress-xs/sm/md/lg/xl</code></td>
                        <td>Height variants</td>
                    </tr>
                    <tr>
                        <td><code>.sw-progress-primary/success/warning/danger/info</code></td>
                        <td>Color variants</td>
                    </tr>
                    <tr>
                        <td><code>.sw-progress-striped</code></td>
                        <td>Stripe pattern</td>
                    </tr>
                    <tr>
                        <td><code>.sw-progress-animated</code></td>
                        <td>Animate stripes</td>
                    </tr>
                    <tr>
                        <td><code>.sw-progress-gradient</code></td>
                        <td>Gradient fill</td>
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
                    <p class="card-subtitle">Progress guidelines</p>
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
                        <td><strong>Show percentage</strong></td>
                        <td>Clear status</td>
                    </tr>
                    <tr>
                        <td><strong>Use animations</strong></td>
                        <td>Visual feedback</td>
                    </tr>
                    <tr>
                        <td><strong>Update frequently</strong></td>
                        <td>Accurate tracking</td>
                    </tr>
                    <tr>
                        <td><strong>Color context</strong></td>
                        <td>Semantic meaning</td>
                    </tr>
                    <tr>
                        <td><strong>Responsive size</strong></td>
                        <td>Better UX</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Progress page initialization
$(document).ready(function() {
    console.log('📊 SW Progress page loaded successfully');
    
    // Demo: Show welcome toast
    setTimeout(() => {
        if (typeof MetroAdmin !== 'undefined') {
            MetroAdmin.showSWInfoToast('Welcome to the Progress demo page!');
        }
    }, 1000);
});
</script>
@endpush