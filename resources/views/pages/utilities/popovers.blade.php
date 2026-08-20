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
        <button class="btn btn-primary" onclick="MetroAdmin.openSWPopover('demo-popover', this)">
            <i class="fa-solid fa-eye"></i>
            <span>Try Popover</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card sw-info-card">
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
<div class="sw-popovers-section-title">
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

<div class="sw-popovers-grid">
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
            <div class="sw-popovers-example">
                <button class="sw-popovers-trigger" onclick="MetroAdmin.openSWPopover('auto-top-demo', this)">
                    I'm Near Top
                </button>
                <div id="auto-top-demo" class="sw-custom-popover sw-popover-top">
                    <p class="sw-popover-title">Smart Position</p>
                    <p class="sw-popover-content">Popover ini akan otomatis pindah ke bottom jika tidak cukup ruang di atas!</p>
                </div>
            </div>
            <div class="sw-popovers-helper">
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
            <div class="sw-popovers-example">
                <button class="sw-popovers-trigger" onclick="MetroAdmin.openSWPopover('auto-bottom-demo', this)">
                    I'm Near Bottom
                </button>
                <div id="auto-bottom-demo" class="sw-custom-popover sw-popover-bottom">
                    <p class="sw-popover-title">Smart Position</p>
                    <p class="sw-popover-content">Popover ini akan otomatis pindah ke top jika tidak cukup ruang di bawah!</p>
                </div>
            </div>
            <div class="sw-popovers-helper">
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
            <div class="sw-popovers-example">
                <button class="sw-popovers-trigger" onclick="MetroAdmin.openSWPopover('auto-left-demo', this)">
                    I'm Near Left
                </button>
                <div id="auto-left-demo" class="sw-custom-popover sw-popover-left">
                    <p class="sw-popover-title">Smart Position</p>
                    <p class="sw-popover-content">Popover ini akan otomatis pindah ke right jika tidak cukup ruang di kiri!</p>
                </div>
            </div>
            <div class="sw-popovers-helper">
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
            <div class="sw-popovers-example">
                <button class="sw-popovers-trigger" onclick="MetroAdmin.openSWPopover('auto-right-demo', this)">
                    I'm Near Right
                </button>
                <div id="auto-right-demo" class="sw-custom-popover sw-popover-right">
                    <p class="sw-popover-title">Smart Position</p>
                    <p class="sw-popover-content">Popover ini akan otomatis pindah ke left jika tidak cukup ruang di kanan!</p>
                </div>
            </div>
            <div class="sw-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                Will auto-switch to left if needed
            </div>
        </div>
    </div>
</div>

<!-- Popover Positions -->
<div class="sw-popovers-section-title">
    <i class="fa-solid fa-arrows-left-right"></i>
    Popover Positions <span class="badge badge-primary">Essential</span>
</div>

<div class="sw-popovers-grid">
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
            <div class="sw-popovers-example">
                <button class="sw-popovers-trigger" onclick="MetroAdmin.openSWPopover('sw-popover-top-demo', this)">
                    Click for Top Popover
                </button>
                <div id="sw-popover-top-demo" class="sw-custom-popover sw-popover-top">
                    <h4 class="sw-popover-title">Top Popover</h4>
                    <p class="sw-popover-content">This popover appears above the trigger element.</p>
                </div>
            </div>
            <div class="sw-popovers-helper">
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
            <div class="sw-popovers-example">
                <button class="sw-popovers-trigger" onclick="MetroAdmin.openSWPopover('sw-popover-bottom-demo', this)">
                    Click for Bottom Popover
                </button>
                <div id="sw-popover-bottom-demo" class="sw-custom-popover sw-popover-bottom">
                    <h4 class="sw-popover-title">Bottom Popover</h4>
                    <p class="sw-popover-content">This popover appears below the trigger element.</p>
                </div>
            </div>
            <div class="sw-popovers-helper">
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
            <div class="sw-popovers-example">
                <button class="sw-popovers-trigger" onclick="MetroAdmin.openSWPopover('sw-popover-left-demo', this)">
                    Click for Left Popover
                </button>
                <div id="sw-popover-left-demo" class="sw-custom-popover sw-popover-left">
                    <h4 class="sw-popover-title">Left Popover</h4>
                    <p class="sw-popover-content">This popover appears to the left of the trigger.</p>
                </div>
            </div>
            <div class="sw-popovers-helper">
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
            <div class="sw-popovers-example">
                <button class="sw-popovers-trigger" onclick="MetroAdmin.openSWPopover('sw-popover-right-demo', this)">
                    Click for Right Popover
                </button>
                <div id="sw-popover-right-demo" class="sw-custom-popover sw-popover-right">
                    <h4 class="sw-popover-title">Right Popover</h4>
                    <p class="sw-popover-content">This popover appears to the right of the trigger.</p>
                </div>
            </div>
            <div class="sw-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                Arrow points leftward
            </div>
        </div>
    </div>
</div>

<!-- Popover Types -->
<div class="sw-popovers-section-title">
    <i class="fa-solid fa-palette"></i>
    Popover Types
</div>

<div class="sw-popovers-grid">
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
            <div class="sw-popovers-example">
                <button class="sw-popovers-trigger" onclick="MetroAdmin.openSWPopover('sw-popover-info-type', this)">
                    Show Info
                </button>
                <div id="sw-popover-info-type" class="sw-custom-popover sw-popover-bottom sw-popover-info">
                    <div class="sw-popover-with-icon">
                        <div class="sw-popover-icon sw-popover-icon-info">
                            <i class="fa-solid fa-info-circle"></i>
                        </div>
                        <div>
                            <h4 class="sw-popover-title">Information</h4>
                            <p class="sw-popover-content">Here is some useful information for you to know.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sw-popovers-helper">
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
            <div class="sw-popovers-example">
                <button class="sw-popovers-trigger" onclick="MetroAdmin.openSWPopover('sw-popover-success-type', this)">
                    Show Success
                </button>
                <div id="sw-popover-success-type" class="sw-custom-popover sw-popover-bottom sw-popover-success">
                    <div class="sw-popover-with-icon">
                        <div class="sw-popover-icon sw-popover-icon-success">
                            <i class="fa-solid fa-check-circle"></i>
                        </div>
                        <div>
                            <h4 class="sw-popover-title">Success!</h4>
                            <p class="sw-popover-content">Your action was completed successfully.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sw-popovers-helper">
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
            <div class="sw-popovers-example">
                <button class="sw-popovers-trigger" onclick="MetroAdmin.openSWPopover('sw-popover-warning-type', this)">
                    Show Warning
                </button>
                <div id="sw-popover-warning-type" class="sw-custom-popover sw-popover-bottom sw-popover-warning">
                    <div class="sw-popover-with-icon">
                        <div class="sw-popover-icon sw-popover-icon-warning">
                            <i class="fa-solid fa-exclamation-triangle"></i>
                        </div>
                        <div>
                            <h4 class="sw-popover-title">Warning!</h4>
                            <p class="sw-popover-content">Please review carefully before proceeding.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sw-popovers-helper">
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
            <div class="sw-popovers-example">
                <button class="sw-popovers-trigger" onclick="MetroAdmin.openSWPopover('popover-error-type', this)">
                    Show Error
                </button>
                <div id="popover-error-type" class="sw-custom-popover sw-popover-bottom sw-popover-danger">
                    <div class="sw-popover-with-icon">
                        <div class="sw-popover-icon sw-popover-icon-danger">
                            <i class="fa-solid fa-times-circle"></i>
                        </div>
                        <div>
                            <h4 class="sw-popover-title">Error!</h4>
                            <p class="sw-popover-content">Something went wrong. Please try again.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sw-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                Red accent color
            </div>
        </div>
    </div>
</div>

<!-- Advanced Popovers -->
<div class="sw-popovers-section-title">
    <i class="fa-solid fa-gear"></i>
    Advanced Popovers
</div>

<div class="sw-popovers-grid">
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
            <div class="sw-popovers-example">
                <button class="sw-popovers-trigger" onclick="MetroAdmin.openSWPopover('sw-popover-actions-demo')">
                    Show Actions
                </button>
                <div id="sw-popover-actions-demo" class="sw-custom-popover sw-popover-bottom">
                    <h4 class="sw-popover-title">Confirm Action</h4>
                    <p class="sw-popover-content">Are you sure you want to proceed with this action?</p>
                    <div class="sw-popover-actions">
                        <button class="sw-popover-btn sw-popover-btn-primary">Confirm</button>
                        <button class="sw-popover-btn sw-popover-btn-secondary" onclick="MetroAdmin.openSWPopover('sw-popover-actions-demo')">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="sw-popovers-helper">
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
            <div class="sw-popovers-example">
                <button class="sw-popovers-trigger" onclick="MetroAdmin.openSWPopover('sw-popover-image-demo')">
                    Show Image
                </button>
                <div id="sw-popover-image-demo" class="sw-custom-popover sw-popover-bottom" style="max-width: 280px;">
                    <img src="https://picsum.photos/seed/popover/280/120" class="sw-popover-image" alt="Preview">
                    <h4 class="sw-popover-title">Image Preview</h4>
                    <p class="sw-popover-content">This popover contains an image with description.</p>
                </div>
            </div>
            <div class="sw-popovers-helper">
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
            <div class="sw-popovers-example">
                <button class="sw-popovers-trigger" onclick="MetroAdmin.openSWPopover('sw-popover-list-demo')">
                    Show List
                </button>
                <div id="sw-popover-list-demo" class="sw-custom-popover sw-popover-bottom">
                    <h4 class="sw-popover-title">Quick Links</h4>
                    <ul class="sw-popover-list">
                        <li class="sw-popover-list-item"><i class="fa-solid fa-house"></i> Dashboard</li>
                        <li class="sw-popover-list-item"><i class="fa-solid fa-user"></i> Profile</li>
                        <li class="sw-popover-list-item"><i class="fa-solid fa-gear"></i> Settings</li>
                        <li class="sw-popover-list-item"><i class="fa-solid fa-question-circle"></i> Help</li>
                    </ul>
                </div>
            </div>
            <div class="sw-popovers-helper">
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
            <div class="sw-popovers-example">
                <button class="sw-popovers-trigger" onclick="MetroAdmin.openSWPopover('sw-popover-form-demo')">
                    Show Form
                </button>
                <div id="sw-popover-form-demo" class="sw-custom-popover sw-popover-bottom" style="max-width: 280px;">
                    <h4 class="sw-popover-title">Quick Feedback</h4>
                    <p class="sw-popover-content">Share your thoughts with us:</p>
                    <div class="sw-popover-form">
                        <input type="text" placeholder="Your name">
                        <textarea placeholder="Your message..."></textarea>
                        <button class="sw-popover-btn sw-popover-btn-primary" style="width: 100%;">Submit</button>
                    </div>
                </div>
            </div>
            <div class="sw-popovers-helper">
                <i class="fa-solid fa-circle-info"></i>
                Interactive form elements
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="sw-popovers-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="sw-popovers-grid">
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
    if (!e.target.closest('.sw-popovers-trigger')) {
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
    console.log('💬 SW Popovers page loaded successfully');
    
    // Demo: Show welcome toast
    setTimeout(() => {
        if (typeof MetroAdmin !== 'undefined') {
            MetroAdmin.showSWInfoToast('Welcome to the Popovers demo page!');
        }
    }, 1000);
});
</script>
@endpush