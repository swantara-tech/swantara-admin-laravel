@extends('layouts.app')

@section('title', 'Toasts')
@section('breadcrumb', 'Toasts')



@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Toasts</h1>
        <p>Lightweight notification messages that appear at the edge of the screen to provide feedback</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary" onclick="MetroAdmin.showDSGTDemoToast('success')">
            <i class="fa-solid fa-play"></i>
            <span>Show Toast</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card dsgt-toast-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What are Toasts?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Toasts are lightweight notification messages that appear briefly at the edge of the screen. They provide contextual feedback about operations without interrupting the user's workflow. Toasts are commonly used for success confirmations, error messages, warnings, and informational updates.</p>
            </div>
        </div>
    </div>
</div>

<!-- Toast Positions -->
<div class="dsgt-toast-section-title">
    <i class="fa-solid fa-arrows-left-right"></i>
    Toast Positions <span class="badge badge-primary">Essential</span>
</div>

<div class="dsgt-toast-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-arrow-up"></i>
                </div>
                <div>
                    <h3>Top Right</h3>
                    <p class="card-subtitle">Default position</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-toast-example">
                <span class="dsgt-toast-example-label">Top Right Position</span>
                <button class="btn btn-primary" onclick="MetroAdmin.showDSGTDemoToast('success', 'top-right')">
                    <i class="fa-solid fa-bell"></i> Show Success Toast
                </button>
            </div>
            <div class="dsgt-toast-helper">
                <i class="fa-solid fa-circle-info"></i>
                Most common position for notifications
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
                    <h3>Bottom Right</h3>
                    <p class="card-subtitle">Alternative position</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-toast-example">
                <span class="dsgt-toast-example-label">Bottom Right Position</span>
                <button class="btn btn-success" onclick="MetroAdmin.showDSGTDemoToast('info', 'bottom-right')">
                    <i class="fa-solid fa-bell"></i> Show Info Toast
                </button>
            </div>
            <div class="dsgt-toast-helper">
                <i class="fa-solid fa-circle-info"></i>
                Less intrusive position
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <div>
                    <h3>Top Left</h3>
                    <p class="card-subtitle">Left-aligned top</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-toast-example">
                <span class="dsgt-toast-example-label">Top Left Position</span>
                <button class="btn btn-info" onclick="MetroAdmin.showDSGTDemoToast('warning', 'top-left')">
                    <i class="fa-solid fa-bell"></i> Show Warning Toast
                </button>
            </div>
            <div class="dsgt-toast-helper">
                <i class="fa-solid fa-circle-info"></i>
                Good for RTL languages
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-corner-down-left"></i>
                </div>
                <div>
                    <h3>Bottom Left</h3>
                    <p class="card-subtitle">Left-aligned bottom</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-toast-example">
                <span class="dsgt-toast-example-label">Bottom Left Position</span>
                <button class="btn btn-warning" onclick="MetroAdmin.showDSGTDemoToast('danger', 'bottom-left')">
                    <i class="fa-solid fa-bell"></i> Show Error Toast
                </button>
            </div>
            <div class="dsgt-toast-helper">
                <i class="fa-solid fa-circle-info"></i>
                Bottom-left alternative
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-align-center"></i>
                </div>
                <div>
                    <h3>Top Center</h3>
                    <p class="card-subtitle">Centered at top</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-toast-example">
                <span class="dsgt-toast-example-label">Top Center Position</span>
                <button class="btn btn-primary" onclick="MetroAdmin.showDSGTDemoToast('success', 'top-center')">
                    <i class="fa-solid fa-bell"></i> Show Success Toast
                </button>
            </div>
            <div class="dsgt-toast-helper">
                <i class="fa-solid fa-circle-info"></i>
                Highly visible, centered
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-align-center"></i>
                </div>
                <div>
                    <h3>Bottom Center</h3>
                    <p class="card-subtitle">Centered at bottom</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-toast-example">
                <span class="dsgt-toast-example-label">Bottom Center Position</span>
                <button class="btn btn-success" onclick="MetroAdmin.showDSGTDemoToast('info', 'bottom-center')">
                    <i class="fa-solid fa-bell"></i> Show Info Toast
                </button>
            </div>
            <div class="dsgt-toast-helper">
                <i class="fa-solid fa-circle-info"></i>
                Subtle bottom-center position
            </div>
        </div>
    </div>
</div>

<!-- Toast Sizes -->
<div class="dsgt-toast-section-title">
    <i class="fa-solid fa-expand"></i>
    Toast Sizes
</div>

<div class="dsgt-toast-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-compress"></i>
                </div>
                <div>
                    <h3>Small Toast</h3>
                    <p class="card-subtitle">Compact notification</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-toast-example">
                <span class="dsgt-toast-example-label">Small Size</span>
                <button class="btn btn-secondary" onclick="MetroAdmin.showDSGTDemoToast('success', 'top-right', 'sm')">
                    <i class="fa-solid fa-minus"></i> Show Small Toast
                </button>
            </div>
            <div class="dsgt-toast-helper">
                <i class="fa-solid fa-circle-info"></i>
                Minimal space, quick reading
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-circle"></i>
                </div>
                <div>
                    <h3>Default Toast</h3>
                    <p class="card-subtitle">Standard size</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-toast-example">
                <span class="dsgt-toast-example-label">Default Size</span>
                <button class="btn btn-primary" onclick="MetroAdmin.showDSGTDemoToast('info', 'top-right', 'md')">
                    <i class="fa-solid fa-circle"></i> Show Default Toast
                </button>
            </div>
            <div class="dsgt-toast-helper">
                <i class="fa-solid fa-circle-info"></i>
                Balanced readability
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-expand"></i>
                </div>
                <div>
                    <h3>Large Toast</h3>
                    <p class="card-subtitle">Detailed information</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-toast-example">
                <span class="dsgt-toast-example-label">Large Size</span>
                <button class="btn btn-lg btn-primary" onclick="MetroAdmin.showDSGTDemoToast('warning', 'top-right', 'lg')">
                    <i class="fa-solid fa-plus"></i> Show Large Toast
                </button>
            </div>
            <div class="dsgt-toast-helper">
                <i class="fa-solid fa-circle-info"></i>
                More content, detailed info
            </div>
        </div>
    </div>
</div>

<!-- Advanced Features -->
<div class="dsgt-toast-section-title">
    <i class="fa-solid fa-wand-magic-sparkles"></i>
    Advanced Features
</div>

<div class="dsgt-toast-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <div>
                    <h3>Stack Multiple Toasts</h3>
                    <p class="card-subtitle">Show multiple at once</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-toast-example">
                <span class="dsgt-toast-example-label">Stack Demo</span>
                <button class="btn btn-success" onclick="MetroAdmin.showDSGTMultipleToasts()">
                    <i class="fa-solid fa-layer-group"></i> Show 3 Toasts
                </button>
            </div>
            <div class="dsgt-toast-helper">
                <i class="fa-solid fa-circle-info"></i>
                Toasts stack automatically with spacing
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div>
                    <h3>Custom Duration</h3>
                    <p class="card-subtitle">5 seconds display</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-toast-example">
                <span class="dsgt-toast-example-label">Longer Display</span>
                <button class="btn btn-warning" onclick="MetroAdmin.showDSGTDemoToast('info', 'top-right', 'md', 5000)">
                    <i class="fa-solid fa-clock"></i> Show 5s Toast
                </button>
            </div>
            <div class="dsgt-toast-helper">
                <i class="fa-solid fa-circle-info"></i>
                Extended time for reading
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-code"></i>
                </div>
                <div>
                    <h3>Custom HTML Content</h3>
                    <p class="card-subtitle">Rich content toast</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-toast-example">
                <span class="dsgt-toast-example-label">HTML Content</span>
                <button class="btn btn-info" onclick="MetroAdmin.showDSGTCustomHtmlToast()">
                    <i class="fa-solid fa-code"></i> Show HTML Toast
                </button>
            </div>
            <div class="dsgt-toast-helper">
                <i class="fa-solid fa-circle-info"></i>
                Support links, buttons, and formatting
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-danger">
                    <i class="fa-solid fa-hand-pointer"></i>
                </div>
                <div>
                    <h3>Action Button</h3>
                    <p class="card-subtitle">Interactive toast</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-toast-example">
                <span class="dsgt-toast-example-label">With Action</span>
                <button class="btn btn-danger" onclick="MetroAdmin.showDSGTActionToast()">
                    <i class="fa-solid fa-hand-pointer"></i> Show Action Toast
                </button>
            </div>
            <div class="dsgt-toast-helper">
                <i class="fa-solid fa-circle-info"></i>
                Undo, view details, or other actions
            </div>
        </div>
    </div>
</div>

<!-- Toast Types -->
<div class="dsgt-toast-section-title">
    <i class="fa-solid fa-circle-info"></i>
    Toast Types
</div>

<div class="dsgt-toast-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-check-circle"></i>
                </div>
                <div>
                    <h3>Success Toast</h3>
                    <p class="card-subtitle">Operation completed</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-toast-example">
                <span class="dsgt-toast-example-label">Success Notification</span>
                <button class="btn btn-success" onclick="MetroAdmin.showDSGTDemoToast('success')">
                    <i class="fa-solid fa-check"></i> Show Success
                </button>
            </div>
            <div class="dsgt-toast-helper">
                <i class="fa-solid fa-circle-info"></i>
                Green border with check icon
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
                    <h3>Error Toast</h3>
                    <p class="card-subtitle">Operation failed</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-toast-example">
                <span class="dsgt-toast-example-label">Error Notification</span>
                <button class="btn btn-danger" onclick="MetroAdmin.showDSGTDemoToast('danger')">
                    <i class="fa-solid fa-times"></i> Show Error
                </button>
            </div>
            <div class="dsgt-toast-helper">
                <i class="fa-solid fa-circle-info"></i>
                Red border with error icon
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
                    <h3>Warning Toast</h3>
                    <p class="card-subtitle">Attention needed</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-toast-example">
                <span class="dsgt-toast-example-label">Warning Notification</span>
                <button class="btn btn-warning" onclick="MetroAdmin.showDSGTDemoToast('warning')">
                    <i class="fa-solid fa-exclamation"></i> Show Warning
                </button>
            </div>
            <div class="dsgt-toast-helper">
                <i class="fa-solid fa-circle-info"></i>
                Yellow border with warning icon
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-info-circle"></i>
                </div>
                <div>
                    <h3>Info Toast</h3>
                    <p class="card-subtitle">General information</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-toast-example">
                <span class="dsgt-toast-example-label">Info Notification</span>
                <button class="btn btn-info" onclick="MetroAdmin.showDSGTDemoToast('info')">
                    <i class="fa-solid fa-info"></i> Show Info
                </button>
            </div>
            <div class="dsgt-toast-helper">
                <i class="fa-solid fa-circle-info"></i>
                Blue border with info icon
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="dsgt-toast-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="dsgt-toast-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>JavaScript API</h3>
                    <p class="card-subtitle">Toast control methods</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <pre style="background: rgba(0, 0, 0, 0.04); padding: 16px; border-radius: 8px; font-size: 11px; overflow-x: auto; line-height: 1.6;"><code>// Show toast
MetroAdmin.showDSGTDemoToast('success', 'top-right')

// Types: success, danger, warning, info
// Positions: top-right, bottom-right</code></pre>
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
                    <p class="card-subtitle">Toast guidelines</p>
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
                        <td><strong>Keep it short</strong></td>
                        <td>Quick reading</td>
                    </tr>
                    <tr>
                        <td><strong>Auto-dismiss</strong></td>
                        <td>Non-intrusive</td>
                    </tr>
                    <tr>
                        <td><strong>Use icons</strong></td>
                        <td>Visual context</td>
                    </tr>
                    <tr>
                        <td><strong>Stack properly</strong></td>
                        <td>Multiple toasts</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Toasts page initialization
$(document).ready(function() {
    console.log('✨ DSGT Toasts page loaded successfully');
    console.log('💡 Using swal-config.js toast system with MetroAdmin wrapper');
    
    // Auto-show first toast as demo
    setTimeout(() => {
        if (typeof MetroAdmin !== 'undefined') {
            MetroAdmin.showDSGTDemoToast('success', 'top-right');
        }
    }, 1000);
});
</script>
@endpush
