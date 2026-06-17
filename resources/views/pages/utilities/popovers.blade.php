@extends('layouts.app')

@section('title', 'Popovers')
@section('breadcrumb', 'Popovers')



@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Popovers</h1>
        <p>Interactive overlay panels that display additional information when users interact with elements</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary" onclick="MetroAdmin.openDSGTPopover('demo-popover', this)">
            <i class="fa-solid fa-eye"></i>
            <span>Try Popover</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card dsgt-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What are Popovers?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Popovers are interactive overlay panels that appear when users click or hover over trigger elements. Unlike tooltips (which show simple text), popovers can contain rich content including titles, descriptions, images, forms, and action buttons. They are perfect for displaying detailed information without navigating away from the current context.</p>
            </div>
        </div>
    </div>
</div>

<!-- Smart Auto-Positioning Demo -->
<div class="dsgt-popovers-section-title">
    <i class="fa-solid fa-wand-magic-sparkles"></i>
    Smart Auto-Positioning <span class="badge badge-primary">NEW</span>
</div>

<div class="row">
    <div class="col-12">
        <div class="alert alert-info info-card">
            <i class="fa-solid fa-circle-info"></i>
            <strong>Auto-Positioning:</strong> Popover secara otomatis menyesuaikan posisi berdasarkan ruang yang tersedia di viewport. Jika posisi default tidak muat, akan otomatis pindah ke posisi alternatif.
        </div>
    </div>
</div>

<div class="dsgt-popovers-grid">
    <!-- Top Edge Demo -->
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-arrows-up-to-line"></i>
                </div>
                <div>
                    <h3>Near Top Edge</h3>
                    <p class="card-subtitle">Auto fallback to bottom</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-popovers-example">
                <button class="dsgt-popovers-trigger" onclick="MetroAdmin.openDSGTPopover('auto-top-demo', this)">
                    I'm Near Top
                </button>
                <div id="auto-top-demo" class="dsgt-custom-popover dsgt-popover-top">
                    <p class="dsgt-popover-title">Smart Position</p>
                    <p class="dsgt-popover-content">Popover ini akan otomatis pindah ke bottom jika tidak cukup ruang di atas!</p>
                </div>
            </div>
            <div class="dsgt-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                Will auto-switch to bottom if needed
            </div>
        </div>
    </div>
    
    <!-- Bottom Edge Demo -->
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-arrows-down-to-line"></i>
                </div>
                <div>
                    <h3>Near Bottom Edge</h3>
                    <p class="card-subtitle">Auto fallback to top</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-popovers-example">
                <button class="dsgt-popovers-trigger" onclick="MetroAdmin.openDSGTPopover('auto-bottom-demo', this)">
                    I'm Near Bottom
                </button>
                <div id="auto-bottom-demo" class="dsgt-custom-popover dsgt-popover-bottom">
                    <p class="dsgt-popover-title">Smart Position</p>
                    <p class="dsgt-popover-content">Popover ini akan otomatis pindah ke top jika tidak cukup ruang di bawah!</p>
                </div>
            </div>
            <div class="dsgt-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                Will auto-switch to top if needed
            </div>
        </div>
    </div>
    
    <!-- Left Edge Demo -->
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-arrows-left-to-line"></i>
                </div>
                <div>
                    <h3>Near Left Edge</h3>
                    <p class="card-subtitle">Auto fallback to right</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-popovers-example">
                <button class="dsgt-popovers-trigger" onclick="MetroAdmin.openDSGTPopover('auto-left-demo', this)">
                    I'm Near Left
                </button>
                <div id="auto-left-demo" class="dsgt-custom-popover dsgt-popover-left">
                    <p class="dsgt-popover-title">Smart Position</p>
                    <p class="dsgt-popover-content">Popover ini akan otomatis pindah ke right jika tidak cukup ruang di kiri!</p>
                </div>
            </div>
            <div class="dsgt-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                Will auto-switch to right if needed
            </div>
        </div>
    </div>
    
    <!-- Right Edge Demo -->
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-danger">
                    <i class="fa-solid fa-arrows-right-to-line"></i>
                </div>
                <div>
                    <h3>Near Right Edge</h3>
                    <p class="card-subtitle">Auto fallback to left</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-popovers-example">
                <button class="dsgt-popovers-trigger" onclick="MetroAdmin.openDSGTPopover('auto-right-demo', this)">
                    I'm Near Right
                </button>
                <div id="auto-right-demo" class="dsgt-custom-popover dsgt-popover-right">
                    <p class="dsgt-popover-title">Smart Position</p>
                    <p class="dsgt-popover-content">Popover ini akan otomatis pindah ke left jika tidak cukup ruang di kanan!</p>
                </div>
            </div>
            <div class="dsgt-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                Will auto-switch to left if needed
            </div>
        </div>
    </div>
</div>

<!-- Popover Positions -->
<div class="dsgt-popovers-section-title">
    <i class="fa-solid fa-arrows-left-right"></i>
    Popover Positions <span class="badge badge-primary">Essential</span>
</div>

<div class="dsgt-popovers-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-arrow-up"></i>
                </div>
                <div>
                    <h3>Top Position</h3>
                    <p class="card-subtitle">Popover appears above</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-popovers-example">
                <button class="dsgt-popovers-trigger" onclick="MetroAdmin.openDSGTPopover('dsgt-popover-top-demo', this)">
                    Click for Top Popover
                </button>
                <div id="dsgt-popover-top-demo" class="dsgt-custom-popover dsgt-popover-top">
                    <h4 class="dsgt-popover-title">Top Popover</h4>
                    <p class="dsgt-popover-content">This popover appears above the trigger element.</p>
                </div>
            </div>
            <div class="dsgt-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                Arrow points downward
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
                    <h3>Bottom Position</h3>
                    <p class="card-subtitle">Popover appears below</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-popovers-example">
                <button class="dsgt-popovers-trigger" onclick="MetroAdmin.openDSGTPopover('dsgt-popover-bottom-demo', this)">
                    Click for Bottom Popover
                </button>
                <div id="dsgt-popover-bottom-demo" class="dsgt-custom-popover dsgt-popover-bottom">
                    <h4 class="dsgt-popover-title">Bottom Popover</h4>
                    <p class="dsgt-popover-content">This popover appears below the trigger element.</p>
                </div>
            </div>
            <div class="dsgt-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                Arrow points upward
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
                    <h3>Left Position</h3>
                    <p class="card-subtitle">Popover appears on left</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-popovers-example">
                <button class="dsgt-popovers-trigger" onclick="MetroAdmin.openDSGTPopover('dsgt-popover-left-demo', this)">
                    Click for Left Popover
                </button>
                <div id="dsgt-popover-left-demo" class="dsgt-custom-popover dsgt-popover-left">
                    <h4 class="dsgt-popover-title">Left Popover</h4>
                    <p class="dsgt-popover-content">This popover appears to the left of the trigger.</p>
                </div>
            </div>
            <div class="dsgt-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                Arrow points rightward
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
                    <h3>Right Position</h3>
                    <p class="card-subtitle">Popover appears on right</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-popovers-example">
                <button class="dsgt-popovers-trigger" onclick="MetroAdmin.openDSGTPopover('dsgt-popover-right-demo', this)">
                    Click for Right Popover
                </button>
                <div id="dsgt-popover-right-demo" class="dsgt-custom-popover dsgt-popover-right">
                    <h4 class="dsgt-popover-title">Right Popover</h4>
                    <p class="dsgt-popover-content">This popover appears to the right of the trigger.</p>
                </div>
            </div>
            <div class="dsgt-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                Arrow points leftward
            </div>
        </div>
    </div>
</div>

<!-- Popover Types -->
<div class="dsgt-popovers-section-title">
    <i class="fa-solid fa-palette"></i>
    Popover Types
</div>

<div class="dsgt-popovers-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-info-circle"></i>
                </div>
                <div>
                    <h3>Info Popover</h3>
                    <p class="card-subtitle">Informational content</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-popovers-example">
                <button class="dsgt-popovers-trigger" onclick="MetroAdmin.openDSGTPopover('dsgt-popover-info-type', this)">
                    Show Info
                </button>
                <div id="dsgt-popover-info-type" class="dsgt-custom-popover dsgt-popover-bottom dsgt-popover-info">
                    <div class="dsgt-popover-with-icon">
                        <div class="dsgt-popover-icon dsgt-popover-icon-info">
                            <i class="fa-solid fa-info-circle"></i>
                        </div>
                        <div>
                            <h4 class="dsgt-popover-title">Information</h4>
                            <p class="dsgt-popover-content">Here is some useful information for you to know.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dsgt-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                Blue accent color
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
                    <h3>Success Popover</h3>
                    <p class="card-subtitle">Success messages</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-popovers-example">
                <button class="dsgt-popovers-trigger" onclick="MetroAdmin.openDSGTPopover('dsgt-popover-success-type', this)">
                    Show Success
                </button>
                <div id="dsgt-popover-success-type" class="dsgt-custom-popover dsgt-popover-bottom dsgt-popover-success">
                    <div class="dsgt-popover-with-icon">
                        <div class="dsgt-popover-icon dsgt-popover-icon-success">
                            <i class="fa-solid fa-check-circle"></i>
                        </div>
                        <div>
                            <h4 class="dsgt-popover-title">Success!</h4>
                            <p class="dsgt-popover-content">Your action was completed successfully.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dsgt-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                Green accent color
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
                    <h3>Warning Popover</h3>
                    <p class="card-subtitle">Warning messages</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-popovers-example">
                <button class="dsgt-popovers-trigger" onclick="MetroAdmin.openDSGTPopover('dsgt-popover-warning-type', this)">
                    Show Warning
                </button>
                <div id="dsgt-popover-warning-type" class="dsgt-custom-popover dsgt-popover-bottom dsgt-popover-warning">
                    <div class="dsgt-popover-with-icon">
                        <div class="dsgt-popover-icon dsgt-popover-icon-warning">
                            <i class="fa-solid fa-exclamation-triangle"></i>
                        </div>
                        <div>
                            <h4 class="dsgt-popover-title">Warning!</h4>
                            <p class="dsgt-popover-content">Please review carefully before proceeding.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dsgt-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                Yellow accent color
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
                    <h3>Error Popover</h3>
                    <p class="card-subtitle">Error messages</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-popovers-example">
                <button class="dsgt-popovers-trigger" onclick="MetroAdmin.openDSGTPopover('popover-error-type', this)">
                    Show Error
                </button>
                <div id="popover-error-type" class="dsgt-custom-popover dsgt-popover-bottom dsgt-popover-danger">
                    <div class="dsgt-popover-with-icon">
                        <div class="dsgt-popover-icon dsgt-popover-icon-danger">
                            <i class="fa-solid fa-times-circle"></i>
                        </div>
                        <div>
                            <h4 class="dsgt-popover-title">Error!</h4>
                            <p class="dsgt-popover-content">Something went wrong. Please try again.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dsgt-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                Red accent color
            </div>
        </div>
    </div>
</div>

<!-- Advanced Popovers -->
<div class="dsgt-popovers-section-title">
    <i class="fa-solid fa-gear"></i>
    Advanced Popovers
</div>

<div class="dsgt-popovers-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-hand-pointer"></i>
                </div>
                <div>
                    <h3>With Actions</h3>
                    <p class="card-subtitle">Interactive buttons</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-popovers-example">
                <button class="dsgt-popovers-trigger" onclick="MetroAdmin.openDSGTPopover('dsgt-popover-actions-demo')">
                    Show Actions
                </button>
                <div id="dsgt-popover-actions-demo" class="dsgt-custom-popover dsgt-popover-bottom">
                    <h4 class="dsgt-popover-title">Confirm Action</h4>
                    <p class="dsgt-popover-content">Are you sure you want to proceed with this action?</p>
                    <div class="dsgt-popover-actions">
                        <button class="dsgt-popover-btn dsgt-popover-btn-primary">Confirm</button>
                        <button class="dsgt-popover-btn dsgt-popover-btn-secondary" onclick="MetroAdmin.openDSGTPopover('dsgt-popover-actions-demo')">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="dsgt-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                Click actions to interact
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-image"></i>
                </div>
                <div>
                    <h3>With Image</h3>
                    <p class="card-subtitle">Visual content</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-popovers-example">
                <button class="dsgt-popovers-trigger" onclick="MetroAdmin.openDSGTPopover('dsgt-popover-image-demo')">
                    Show Image
                </button>
                <div id="dsgt-popover-image-demo" class="dsgt-custom-popover dsgt-popover-bottom" style="max-width: 280px;">
                    <img src="https://picsum.photos/seed/popover/280/120" class="dsgt-popover-image" alt="Preview">
                    <h4 class="dsgt-popover-title">Image Preview</h4>
                    <p class="dsgt-popover-content">This popover contains an image with description.</p>
                </div>
            </div>
            <div class="dsgt-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                Embed images in popovers
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
                    <h3>With List</h3>
                    <p class="card-subtitle">List items</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-popovers-example">
                <button class="dsgt-popovers-trigger" onclick="MetroAdmin.openDSGTPopover('dsgt-popover-list-demo')">
                    Show List
                </button>
                <div id="dsgt-popover-list-demo" class="dsgt-custom-popover dsgt-popover-bottom">
                    <h4 class="dsgt-popover-title">Quick Links</h4>
                    <ul class="dsgt-popover-list">
                        <li class="dsgt-popover-list-item"><i class="fa-solid fa-house"></i> Dashboard</li>
                        <li class="dsgt-popover-list-item"><i class="fa-solid fa-user"></i> Profile</li>
                        <li class="dsgt-popover-list-item"><i class="fa-solid fa-gear"></i> Settings</li>
                        <li class="dsgt-popover-list-item"><i class="fa-solid fa-question-circle"></i> Help</li>
                    </ul>
                </div>
            </div>
            <div class="dsgt-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                List with icons
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-keyboard"></i>
                </div>
                <div>
                    <h3>With Form</h3>
                    <p class="card-subtitle">Input fields</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-popovers-example">
                <button class="dsgt-popovers-trigger" onclick="MetroAdmin.openDSGTPopover('dsgt-popover-form-demo')">
                    Show Form
                </button>
                <div id="dsgt-popover-form-demo" class="dsgt-custom-popover dsgt-popover-bottom" style="max-width: 280px;">
                    <h4 class="dsgt-popover-title">Quick Feedback</h4>
                    <p class="dsgt-popover-content">Share your thoughts with us:</p>
                    <div class="dsgt-popover-form">
                        <input type="text" placeholder="Your name">
                        <textarea placeholder="Your message..."></textarea>
                        <button class="dsgt-popover-btn dsgt-popover-btn-primary" style="width: 100%;">Submit</button>
                    </div>
                </div>
            </div>
            <div class="dsgt-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                Interactive form elements
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="dsgt-popovers-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="dsgt-popovers-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>JavaScript API</h3>
                    <p class="card-subtitle">Popover control methods</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <pre style="background: rgba(0, 0, 0, 0.02); padding: 16px; border-radius: 8px; font-size: 11px; overflow-x: auto; line-height: 1.6;"><code>// Toggle custom popover
function showCustomPopover(id) {
  const popover = document.getElementById(id);
  popover.classList.toggle('show');
}

// Show popover
function showPopover(id) {
  document.getElementById(id)
    .classList.add('show');
}

// Hide popover
function hidePopover(id) {
  document.getElementById(id)
    .classList.remove('show');
}

// Hide all popovers
document.addEventListener('click', 
  (e) => {
    if (!e.target.closest('.dsgt-popovers-trigger')) {
      hideCustomPopovers();
    }
  }
);</code></pre>
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
                    <p class="card-subtitle">Popover guidelines</p>
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
                        <td><strong>Keep it concise</strong></td>
                        <td>Quick reading</td>
                    </tr>
                    <tr>
                        <td><strong>Use positioning</strong></td>
                        <td>Avoid overflow</td>
                    </tr>
                    <tr>
                        <td><strong>Add close button</strong></td>
                        <td>User control</td>
                    </tr>
                    <tr>
                        <td><strong>Click outside</strong></td>
                        <td>Easy dismiss</td>
                    </tr>
                    <tr>
                        <td><strong>Rich content</strong></td>
                        <td>Better context</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Popovers page initialization
$(document).ready(function() {
    console.log('💬 DSGT Popovers page loaded successfully');
    
    // Demo: Show welcome toast
    setTimeout(() => {
        if (typeof MetroAdmin !== 'undefined') {
            MetroAdmin.showDSGTInfoToast('Welcome to the Popovers demo page!');
        }
    }, 1000);
});
</script>
@endpush