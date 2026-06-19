@extends('layouts.app')

@section('title', 'Modals')
@section('breadcrumb', 'Modals')

@push('styles')
@endpush

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Modals</h1>
        <p>Interactive dialog components for confirmations, forms, alerts, and content display with smooth animations</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary" onclick="MetroAdmin.openDSGTModal('basic-modal')">
            <i class="fa-solid fa-window-maximize"></i>
            <span>Try Modal</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card dsgt-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What are Modals?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Modals are dialog boxes that appear on top of the main content to focus user attention on important information, forms, or confirmations. They support various sizes, animations, positions, and can include forms, images, or custom content. Modals should be used sparingly to avoid interrupting user workflow.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Modals -->
<div class="dsgt-modals-section-title">
    <i class="fa-solid fa-window-maximize"></i>
    Basic Modals <span class="badge badge-primary">Essential</span>
</div>

<div class="dsgt-modal-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-square"></i>
                </div>
                <div>
                    <h3>Default Modal</h3>
                    <p class="card-subtitle">Standard dialog box</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-md-example">
                <span class="dsgt-md-example-label">Basic Dialog</span>
                <button class="btn btn-primary" onclick="MetroAdmin.openDSGTModal('basic-modal')">
                    <i class="fa-solid fa-window-maximize"></i>
                    Open Basic Modal
                </button>
                <div class="dsgt-md-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Standard modal with header, body, and footer
                </div>
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
                    <h3>Success Modal</h3>
                    <p class="card-subtitle">Confirmation with success icon</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-md-example">
                <span class="dsgt-md-example-label">Success State</span>
                <button class="btn btn-success" onclick="MetroAdmin.openDSGTModal('success-modal')">
                    <i class="fa-solid fa-check"></i>
                    Open Success Modal
                </button>
                <div class="dsgt-md-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Green icon with success message
                </div>
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
                    <h3>Warning Modal</h3>
                    <p class="card-subtitle">Caution with warning icon</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-md-example">
                <span class="dsgt-md-example-label">Warning State</span>
                <button class="btn btn-warning" onclick="MetroAdmin.openDSGTModal('warning-modal')">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    Open Warning Modal
                </button>
                <div class="dsgt-md-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Yellow icon with warning message
                </div>
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
                    <h3>Danger Modal</h3>
                    <p class="card-subtitle">Delete confirmation</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-md-example">
                <span class="dsgt-md-example-label">Danger State</span>
                <button class="btn btn-danger" onclick="MetroAdmin.openDSGTModal('danger-modal')">
                    <i class="fa-solid fa-trash"></i>
                    Open Danger Modal
                </button>
                <div class="dsgt-md-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Red icon with delete confirmation
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Sizes -->
<div class="dsgt-modals-section-title">
    <i class="fa-solid fa-expand"></i>
    Modal Sizes
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-text-width"></i>
            </div>
            <div>
                <h3>Size Variations</h3>
                <p class="card-subtitle">Small, medium, large, extra-large, fullscreen</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-md-example">
            <span class="dsgt-md-example-label">Size Options</span>
            <div style="display: flex; gap: 12px; flex-wrap: wrap; justify-content: center;">
                <button class="btn btn-secondary" onclick="MetroAdmin.openDSGTModal('size-sm-modal')">
                    Small
                </button>
                <button class="btn btn-primary" onclick="MetroAdmin.openDSGTModal('size-md-modal')">
                    Medium
                </button>
                <button class="btn btn-success" onclick="MetroAdmin.openDSGTModal('size-lg-modal')">
                    Large
                </button>
                <button class="btn btn-warning" onclick="MetroAdmin.openDSGTModal('size-xl-modal')">
                    Extra Large
                </button>
                <button class="btn btn-danger" onclick="MetroAdmin.openDSGTModal('size-full-modal')">
                    Fullscreen
                </button>
            </div>
            <div class="dsgt-md-helper">
                <i class="fa-solid fa-circle-info"></i>
                Widths: 400px, 500px, 700px, 900px, 95vw
            </div>
        </div>
    </div>
</div>

<!-- Modal Animations -->
<div class="dsgt-modals-section-title">
    <i class="fa-solid fa-wand-magic-sparkles"></i>
    Modal Animations
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-sparkles"></i>
            </div>
            <div>
                <h3>Animation Effects</h3>
                <p class="card-subtitle">Slide, zoom, flip, and fade animations</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-md-example">
            <span class="dsgt-md-example-label">Animation Styles</span>
            <div style="display: flex; gap: 12px; flex-wrap: wrap; justify-content: center;">
                <button class="btn btn-primary" onclick="MetroAdmin.openDSGTModal('anim-slideup-modal')">
                    Slide Up
                </button>
                <button class="btn btn-success" onclick="MetroAdmin.openDSGTModal('anim-zoom-modal')">
                    Zoom In
                </button>
                <button class="btn btn-info" onclick="MetroAdmin.openDSGTModal('anim-slideleft-modal')">
                    Slide Left
                </button>
                <button class="btn btn-warning" onclick="MetroAdmin.openDSGTModal('anim-slideright-modal')">
                    Slide Right
                </button>
                <button class="btn btn-danger" onclick="MetroAdmin.openDSGTModal('anim-flip-modal')">
                    Flip
                </button>
            </div>
            <div class="dsgt-md-helper">
                <i class="fa-solid fa-circle-info"></i>
                Each animation creates unique entrance effect
            </div>
        </div>
    </div>
</div>

<!-- Modal with Form -->
<div class="dsgt-modals-section-title">
    <i class="fa-solid fa-form"></i>
    Modal with Form
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-keyboard"></i>
            </div>
            <div>
                <h3>Form Modal</h3>
                <p class="card-subtitle">Modal with input fields</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-md-example">
            <span class="dsgt-md-example-label">User Registration</span>
            <button class="btn btn-primary" onclick="MetroAdmin.openDSGTModal('form-modal')">
                <i class="fa-solid fa-user-plus"></i>
                Open Form Modal
            </button>
            <div class="dsgt-md-helper">
                <i class="fa-solid fa-circle-info"></i>
                Modal with form inputs and validation
            </div>
        </div>
    </div>
</div>

<!-- Scrollable Modal -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-scroll"></i>
            </div>
            <div>
                <h3>Scrollable Modal</h3>
                <p class="card-subtitle">Long content with scroll</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-md-example">
            <span class="dsgt-md-example-label">Terms & Conditions</span>
            <button class="btn btn-success" onclick="MetroAdmin.openDSGTModal('scrollable-modal')">
                <i class="fa-solid fa-file-lines"></i>
                Open Scrollable Modal
            </button>
            <div class="dsgt-md-helper">
                <i class="fa-solid fa-circle-info"></i>
                Body scrolls while header/footer stay fixed
            </div>
        </div>
    </div>
</div>

<!-- Image Modal -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-image"></i>
            </div>
            <div>
                <h3>Image Modal</h3>
                <p class="card-subtitle">Lightbox-style image viewer</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-md-example">
            <span class="dsgt-md-example-label">Photo Viewer</span>
            <button class="btn btn-info" onclick="MetroAdmin.openDSGTModal('image-modal')">
                <i class="fa-solid fa-image"></i>
                Open Image Modal
            </button>
            <div class="dsgt-md-helper">
                <i class="fa-solid fa-circle-info"></i>
                Large image with caption
            </div>
        </div>
    </div>
</div>

<!-- Stacked Modals -->
<div class="dsgt-modals-section-title">
    <i class="fa-solid fa-layer-group"></i>
    Stacked Modals
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-danger">
                <i class="fa-solid fa-clone"></i>
            </div>
            <div>
                <h3>Multiple Modals</h3>
                <p class="card-subtitle">Modals on top of modals</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-md-example">
            <span class="dsgt-md-example-label">Nested Dialogs</span>
            <button class="btn btn-danger" onclick="MetroAdmin.openDSGTModal('stacked-1')">
                <i class="fa-solid fa-window-restore"></i>
                Open Stacked Modals
            </button>
            <div class="dsgt-md-helper">
                <i class="fa-solid fa-circle-info"></i>
                Up to 3 modals can be stacked
            </div>
        </div>
    </div>
</div>

<!-- Modal Backdrop Behavior -->
<div class="dsgt-modals-section-title">
    <i class="fa-solid fa-mouse-pointer"></i>
    Modal Backdrop Behavior <span class="badge badge-warning">Important</span>
</div>

<div class="dsgt-modal-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-hand-pointer"></i>
                </div>
                <div>
                    <h3>Dismissible Modal</h3>
                    <p class="card-subtitle">Click backdrop to close</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-md-example">
                <span class="dsgt-md-example-label">Default Behavior</span>
                <button class="btn btn-primary" onclick="MetroAdmin.openDSGTModal('dismissible-modal')">
                    <i class="fa-solid fa-window-maximize"></i>
                    Open Dismissible Modal
                </button>
                <div class="dsgt-md-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Can close by clicking backdrop, pressing Escape, or close button
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-secondary">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div>
                    <h3>Close Button Only</h3>
                    <p class="card-subtitle">Simple locked modal</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-md-example">
                <span class="dsgt-md-example-label">X Button Only</span>
                <button class="btn btn-secondary" onclick="MetroAdmin.openDSGTModal('x-button-only-modal')">
                    <i class="fa-solid fa-xmark"></i>
                    Open X-Only Modal
                </button>
                <div class="dsgt-md-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Can ONLY close with X button - backdrop & Escape disabled
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-danger">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div>
                    <h3>Non-Dismissible Modal</h3>
                    <p class="card-subtitle">Must click close button</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-md-example">
                <span class="dsgt-md-example-label">Locked Modal</span>
                <button class="btn btn-danger" onclick="MetroAdmin.openDSGTModal('locked-modal')">
                    <i class="fa-solid fa-lock"></i>
                    Open Locked Modal
                </button>
                <div class="dsgt-md-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Can ONLY close with close button - backdrop & Escape disabled
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal with Form Validation -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-file-signature"></i>
            </div>
            <div>
                <h3>Required Form Modal</h3>
                <p class="card-subtitle">Must complete form before closing</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-md-example">
            <span class="dsgt-md-example-label">Agreement Form</span>
            <button class="btn btn-success" onclick="MetroAdmin.openDSGTModal('required-form-modal')">
                <i class="fa-solid fa-file-contract"></i>
                Open Required Form Modal
            </button>
            <div class="dsgt-md-helper">
                <i class="fa-solid fa-circle-info"></i>
                Must check agreement checkbox before modal can be closed
            </div>
        </div>
    </div>
</div>

<!-- MODAL DEFINITIONS -->

<!-- Basic Modal -->
<div id="basic-modal" class="dsgt-custom-modal">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-md">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">Basic Modal</h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('basic-modal')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <p style="font-size: 14px; color: var(--text-secondary);">This is a basic modal dialog. It contains a header with title, a body with content, and a footer with action buttons.</p>
            <p style="font-size: 14px; color: var(--text-secondary); margin-top: 12px;">Modals are useful for:</p>
            <ul style="font-size: 14px; color: var(--text-primary); padding-left: 20px;">
                <li>Confirmations</li>
                <li>Forms</li>
                <li>Alerts</li>
                <li>Content display</li>
            </ul>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-secondary" onclick="MetroAdmin.closeDSGTModal('basic-modal')">Cancel</button>
            <button class="btn btn-primary" onclick="MetroAdmin.closeDSGTModal('basic-modal')">OK</button>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div id="success-modal" class="dsgt-custom-modal">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-md">
        <div class="dsgt-modal-icon-header">
            <div class="dsgt-modal-icon dsgt-modal-icon-success">
                <i class="fa-solid fa-check"></i>
            </div>
            <h3 class="dsgt-modal-title">Success!</h3>
        </div>
        <div class="dsgt-modal-body " style="text-align: center; ">
            <p style="font-size: 14px; color: var(--text-secondary);">Your action has been completed successfully. The operation was processed without any errors.</p>
        </div>
        <div class="dsgt-modal-footer dsgt-modal-footer-icon" style="justify-content: center;">
            <button class="btn btn-success" onclick="MetroAdmin.closeDSGTModal('success-modal')">Great!</button>
        </div>
    </div>
</div>

<!-- Warning Modal -->
<div id="warning-modal" class="dsgt-custom-modal">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-md">
        <div class="dsgt-modal-icon-header">
            <div class="dsgt-modal-icon dsgt-modal-icon-warning">
                <i class="fa-solid fa-exclamation-triangle"></i>
            </div>
            <h3 class="dsgt-modal-title">Warning!</h3>
        </div>
        <div class="dsgt-modal-body" style="text-align: center;">
            <p style="font-size: 14px; color: var(--text-secondary);">Please be careful! This action may have unintended consequences. Review carefully before proceeding.</p>
        </div>
        <div class="dsgt-modal-footer dsgt-modal-footer-icon" style="justify-content: center;">
            <button class="btn btn-secondary" onclick="MetroAdmin.closeDSGTModal('warning-modal')">Cancel</button>
            <button class="btn btn-warning" onclick="MetroAdmin.closeDSGTModal('warning-modal')">Proceed</button>
        </div>
    </div>
</div>

<!-- Danger Modal -->
<div id="danger-modal" class="dsgt-custom-modal">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-md">
        <div class="dsgt-modal-icon-header">
            <div class="dsgt-modal-icon dsgt-modal-icon-danger">
                <i class="fa-solid fa-trash"></i>
            </div>
            <h3 class="dsgt-modal-title">Delete Item?</h3>
        </div>
        <div class="dsgt-modal-body" style="text-align: center;">
            <p style="font-size: 14px; color: var(--text-secondary);">Are you sure you want to delete this item? This action cannot be undone and all data will be permanently removed.</p>
        </div>
        <div class="dsgt-modal-footer dsgt-modal-footer-icon" style="justify-content: center;">
            <button class="btn btn-secondary" onclick="MetroAdmin.closeDSGTModal('danger-modal')">Cancel</button>
            <button class="btn btn-danger" onclick="MetroAdmin.closeDSGTModal('danger-modal')">Delete</button>
        </div>
    </div>
</div>

<!-- Size Modals -->
<div id="size-sm-modal" class="dsgt-custom-modal">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-sm">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">Small Modal (400px)</h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('size-sm-modal')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <p style="font-size: 14px; color: var(--text-secondary);">This is a small modal, perfect for simple confirmations.</p>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-secondary" onclick="MetroAdmin.closeDSGTModal('size-sm-modal')">Close</button>
        </div>
    </div>
</div>

<div id="size-md-modal" class="dsgt-custom-modal">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-md">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">Medium Modal (500px)</h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('size-md-modal')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <p style="font-size: 14px; color: var(--text-secondary);">This is a medium modal, the default size for most dialogs.</p>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-secondary" onclick="MetroAdmin.closeDSGTModal('size-md-modal')">Close</button>
        </div>
    </div>
</div>

<div id="size-lg-modal" class="dsgt-custom-modal">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-lg">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">Large Modal (700px)</h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('size-lg-modal')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <p style="font-size: 14px; color: var(--text-secondary);">This is a large modal, suitable for forms and detailed content.</p>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-secondary" onclick="MetroAdmin.closeDSGTModal('size-lg-modal')">Close</button>
        </div>
    </div>
</div>

<div id="size-xl-modal" class="dsgt-custom-modal">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-xl">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">Extra Large Modal (900px)</h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('size-xl-modal')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <p style="font-size: 14px; color: var(--text-secondary);">This is an extra large modal, ideal for tables and complex layouts.</p>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-secondary" onclick="MetroAdmin.closeDSGTModal('size-xl-modal')">Close</button>
        </div>
    </div>
</div>

<div id="size-full-modal" class="dsgt-custom-modal">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-full">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">Fullscreen Modal (95vw)</h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('size-full-modal')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <p style="font-size: 14px; color: var(--text-secondary);">This is a fullscreen modal, perfect for immersive experiences.</p>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-secondary" onclick="MetroAdmin.closeDSGTModal('size-full-modal')">Close</button>
        </div>
    </div>
</div>

<!-- Animation Modals -->
<div id="anim-slideup-modal" class="dsgt-custom-modal">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-md">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">Slide Up Animation</h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('anim-slideup-modal')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <p style="font-size: 14px; color: var(--text-secondary);">This modal slides up from the bottom with a smooth animation.</p>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-primary" onclick="MetroAdmin.closeDSGTModal('anim-slideup-modal')">Close</button>
        </div>
    </div>
</div>

<div id="anim-zoom-modal" class="dsgt-custom-modal">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-md dsgt-modal-dialog-zoom">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">Zoom In Animation</h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('anim-zoom-modal')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <p style="font-size: 14px; color: var(--text-secondary);">This modal zooms in from the center with a scale animation.</p>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-success" onclick="MetroAdmin.closeDSGTModal('anim-zoom-modal')">Close</button>
        </div>
    </div>
</div>

<div id="anim-slideleft-modal" class="dsgt-custom-modal">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-md dsgt-modal-dialog-slide-left">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">Slide Left Animation</h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('anim-slideleft-modal')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <p style="font-size: 14px; color: var(--text-secondary);">This modal slides in from the right side.</p>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-info" onclick="MetroAdmin.closeDSGTModal('anim-slideleft-modal')">Close</button>
        </div>
    </div>
</div>

<div id="anim-slideright-modal" class="dsgt-custom-modal">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-md dsgt-modal-dialog-slide-right">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">Slide Right Animation</h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('anim-slideright-modal')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <p style="font-size: 14px; color: var(--text-secondary);">This modal slides in from the left side.</p>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-warning" onclick="MetroAdmin.closeDSGTModal('anim-slideright-modal')">Close</button>
        </div>
    </div>
</div>

<div id="anim-flip-modal" class="dsgt-custom-modal">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-md dsgt-modal-dialog-flip">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">Flip Animation</h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('anim-flip-modal')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <p style="font-size: 14px; color: var(--text-secondary);">This modal flips in with a 3D rotation effect.</p>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-danger" onclick="MetroAdmin.closeDSGTModal('anim-flip-modal')">Close</button>
        </div>
    </div>
</div>

<!-- Form Modal -->
<div id="form-modal" class="dsgt-custom-modal">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-lg">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">User Registration</h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('form-modal')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <div class="dsgt-modal-form-group">
                <label class="dsgt-modal-form-label">Full Name</label>
                <input type="text" class="dsgt-modal-form-input" placeholder="Enter your name">
            </div>
            <div class="dsgt-modal-form-group">
                <label class="dsgt-modal-form-label">Email Address</label>
                <input type="email" class="dsgt-modal-form-input" placeholder="Enter your email">
            </div>
            <div class="dsgt-modal-form-group">
                <label class="dsgt-modal-form-label">Password</label>
                <input type="password" class="dsgt-modal-form-input" placeholder="Create password">
            </div>
            <div class="dsgt-modal-form-group">
                <label class="dsgt-modal-form-label">Role</label>
                <select class="dsgt-modal-form-input">
                    <option>Select role...</option>
                    <option>Administrator</option>
                    <option>Editor</option>
                    <option>Viewer</option>
                </select>
            </div>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-secondary" onclick="MetroAdmin.closeDSGTModal('form-modal')">Cancel</button>
            <button class="btn btn-primary" onclick="MetroAdmin.closeDSGTModal('form-modal')">Register</button>
        </div>
    </div>
</div>

<!-- Scrollable Modal -->
<div id="scrollable-modal" class="dsgt-custom-modal">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-lg">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">Terms & Conditions</h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('scrollable-modal')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body dsgt-modal-body-scrollable">
            <h4 style="margin: 0 0 12px 0;">1. Introduction</h4>
            <p style="font-size: 14px; color: var(--text-secondary); margin-bottom: 16px;">Welcome to our service. By accessing or using our platform, you agree to be bound by these terms and conditions. Please read them carefully.</p>
            
            <h4 style="margin: 0 0 12px 0;">2. User Responsibilities</h4>
            <p style="font-size: 14px; color: var(--text-secondary); margin-bottom: 16px;">You are responsible for maintaining the confidentiality of your account and password. You agree to accept responsibility for all activities that occur under your account.</p>
            
            <h4 style="margin: 0 0 12px 0;">3. Privacy Policy</h4>
            <p style="font-size: 14px; color: var(--text-secondary); margin-bottom: 16px;">Your privacy is important to us. We collect, use, and store your personal data in accordance with applicable data protection laws.</p>
            
            <h4 style="margin: 0 0 12px 0;">4. Intellectual Property</h4>
            <p style="font-size: 14px; color: var(--text-secondary); margin-bottom: 16px;">All content, trademarks, and data on this platform are the property of the company. Unauthorized use is prohibited.</p>
            
            <h4 style="margin: 0 0 12px 0;">5. Limitation of Liability</h4>
            <p style="font-size: 14px; color: var(--text-secondary); margin-bottom: 16px;">We shall not be liable for any indirect, incidental, special, or consequential damages arising from the use of our service.</p>
            
            <h4 style="margin: 0 0 12px 0;">6. Termination</h4>
            <p style="font-size: 14px; color: var(--text-secondary); margin-bottom: 16px;">We reserve the right to terminate or suspend your account at any time for violation of these terms.</p>
            
            <h4 style="margin: 0 0 12px 0;">7. Changes to Terms</h4>
            <p style="font-size: 14px; color: var(--text-secondary); margin-bottom: 16px;">We may update these terms from time to time. Your continued use after changes constitutes acceptance of the new terms.</p>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-secondary" onclick="MetroAdmin.closeDSGTModal('scrollable-modal')">Decline</button>
            <button class="btn btn-success" onclick="MetroAdmin.closeDSGTModal('scrollable-modal')">Accept</button>
        </div>
    </div>
</div>

<!-- Image Modal -->
<div id="image-modal" class="dsgt-custom-modal">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-lg">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">Photo Viewer</h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('image-modal')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <div class="dsgt-image-modal-content">
                <img src="https://picsum.photos/seed/modalimg/800/400" alt="Photo">
                <p style="font-size: 14px; color: var(--text-secondary); margin: 0;">Beautiful landscape photography - Click to view full resolution</p>
            </div>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-secondary" onclick="MetroAdmin.closeDSGTModal('image-modal')">Close</button>
            <button class="btn btn-primary" onclick="MetroAdmin.closeDSGTModal('image-modal')">
                <i class="fa-solid fa-download"></i>
                Download
            </button>
        </div>
    </div>
</div>

<!-- Stacked Modals -->
<div id="stacked-1" class="dsgt-custom-modal dsgt-modal-stacked-1">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-md">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">First Modal</h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('stacked-1')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <p style="font-size: 14px; color: var(--text-secondary);">This is the first modal. Click the button below to open another modal on top of this one.</p>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-secondary" onclick="MetroAdmin.closeDSGTModal('stacked-1')">Close</button>
            <button class="btn btn-primary" onclick="MetroAdmin.openDSGTModal('stacked-2')">Open Second Modal</button>
        </div>
    </div>
</div>

<div id="stacked-2" class="dsgt-custom-modal dsgt-modal-stacked-2">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-md">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">Second Modal</h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('stacked-2')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <p style="font-size: 14px; color: var(--text-secondary);">This is the second modal stacked on top of the first one. You can open one more modal.</p>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-secondary" onclick="MetroAdmin.closeDSGTModal('stacked-2')">Close</button>
            <button class="btn btn-success" onclick="MetroAdmin.openDSGTModal('stacked-3')">Open Third Modal</button>
        </div>
    </div>
</div>

<div id="stacked-3" class="dsgt-custom-modal dsgt-modal-stacked-3">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-md">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">Third Modal</h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('stacked-3')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <p style="font-size: 14px; color: var(--text-secondary);">This is the third and final stacked modal. Maximum depth reached!</p>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-danger" onclick="MetroAdmin.closeDSGTModal('stacked-3'); MetroAdmin.closeDSGTModal('stacked-2'); MetroAdmin.closeDSGTModal('stacked-1');">Close All</button>
        </div>
    </div>
</div>

<!-- Dismissible Modal (Default Behavior) -->
<div id="dismissible-modal" class="dsgt-custom-modal" data-dismissible="true">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-md">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">Dismissible Modal</h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('dismissible-modal')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <div style="text-align: center; padding: 20px 0;">
                <i class="fa-solid fa-hand-pointer" style="font-size: 48px; color: var(--accent); margin-bottom: 16px;"></i>
                <p style="font-size: 14px; color: var(--text-primary); font-weight: 600; margin-bottom: 8px;">Click Anywhere Outside</p>
                <p style="font-size: 14px; color: var(--text-secondary);">You can close this modal by:</p>
                <ul style="font-size: 13px; color: var(--text-secondary); text-align: left; max-width: 300px; margin: 16px auto 0; padding-left: 20px;">
                    <li>Clicking the X button</li>
                    <li>Clicking on the dark backdrop</li>
                    <li>Pressing Escape key</li>
                </ul>
            </div>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-primary" onclick="MetroAdmin.closeDSGTModal('dismissible-modal')">Got it!</button>
        </div>
    </div>
</div>

<!-- X-Button Only Modal (Simple - No Warning, Just Locked) -->
<div id="x-button-only-modal" class="dsgt-custom-modal" data-dismissible="false">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-md">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">Simple Information Modal</h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('x-button-only-modal')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <p style="font-size: 14px; color: var(--text-secondary); line-height: 1.6;">
                This is a simple modal that can only be closed by clicking the X button in the top right corner.
            </p>
            <p style="font-size: 14px; color: var(--text-secondary); line-height: 1.6; margin-top: 12px;">
                Clicking outside or pressing Escape will not close this modal.
            </p>
        </div>
    </div>
</div>

<!-- Non-Dismissible Modal (Locked - Must Click Close Button) -->
<div id="locked-modal" class="dsgt-custom-modal" data-dismissible="false">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-md">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">
                <i class="fa-solid fa-lock" style="color: var(--danger); margin-right: 8px;"></i>
                Locked Modal
            </h3>
            <button class="dsgt-modal-close" onclick="MetroAdmin.closeDSGTModal('locked-modal')">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <div style="background: rgba(232, 17, 35, 0.1); border: 1px solid var(--danger); border-radius: 8px; padding: 16px; margin-bottom: 16px;">
                <div style="display: flex; gap: 12px; align-items: start;">
                    <i class="fa-solid fa-circle-exclamation" style="color: var(--danger); font-size: 20px; margin-top: 2px;"></i>
                    <div>
                        <p style="font-size: 13px; color: var(--danger); font-weight: 600; margin: 0 0 4px 0;">Important Notice</p>
                        <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">This modal cannot be closed by clicking outside or pressing Escape.</p>
                    </div>
                </div>
            </div>
            <p style="font-size: 14px; color: var(--text-secondary); margin-bottom: 12px;">You MUST click the close button (X) or use the action button below to close this modal.</p>
            <p style="font-size: 13px; color: var(--text-secondary);">This is useful for:</p>
            <ul style="font-size: 13px; color: var(--text-primary); padding-left: 20px; margin-top: 8px;">
                <li>Important confirmations</li>
                <li>Critical warnings that must be read</li>
                <li>Required agreements</li>
                <li>Essential information display</li>
            </ul>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-secondary" onclick="MetroAdmin.closeDSGTModal('locked-modal')">Cancel</button>
            <button class="btn btn-danger" onclick="MetroAdmin.closeDSGTModal('locked-modal')">
                <i class="fa-solid fa-check"></i>
                I Understand
            </button>
        </div>
    </div>
</div>

<!-- Required Form Modal (Must Complete Before Closing) -->
<div id="required-form-modal" class="dsgt-custom-modal" data-dismissible="false">
    <div class="dsgt-modal-dialog dsgt-modal-dialog-lg">
        <div class="dsgt-modal-header">
            <h3 class="dsgt-modal-title">
                <i class="fa-solid fa-file-contract" style="color: var(--success); margin-right: 8px;"></i>
                Terms Agreement
            </h3>
            <button class="dsgt-modal-close" id="required-form-close" onclick="MetroAdmin.handleDSGTModalRequiredFormClose()" disabled style="opacity: 0.5; cursor: not-allowed;">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="dsgt-modal-body">
            <div style="background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 8px; padding: 20px; margin-bottom: 20px; max-height: 300px; overflow-y: auto;">
                <h4 style="margin: 0 0 12px 0; font-size: 16px;">Terms and Conditions</h4>
                <p style="font-size: 13px; color: var(--text-secondary); line-height: 1.6; margin-bottom: 12px;">By using this service, you agree to the following terms:</p>
                <ol style="font-size: 13px; color: var(--text-primary); padding-left: 20px; line-height: 1.8;">
                    <li>You will use the platform responsibly and in accordance with all applicable laws.</li>
                    <li>You will not share your account credentials with unauthorized users.</li>
                    <li>You understand that your data will be processed according to our privacy policy.</li>
                    <li>You agree to receive important notifications related to your account.</li>
                    <li>You acknowledge that violation of these terms may result in account suspension.</li>
                </ol>
            </div>
            
            <div style="background: rgba(0, 120, 212, 0.1); border-left: 4px solid var(--accent); padding: 16px; border-radius: 0 8px 8px 0; margin-bottom: 16px;">
                <p style="font-size: 13px; color: var(--text-primary); font-weight: 600; margin: 0 0 8px 0;">
                    <i class="fa-solid fa-circle-info" style="color: var(--accent); margin-right: 6px;"></i>
                    Action Required
                </p>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">You must read and agree to the terms above before you can close this modal.</p>
            </div>
            
            <label style="display: flex; align-items: start; gap: 12px; padding: 16px; background: var(--bg-secondary); border: 2px solid var(--border-color); border-radius: 8px; cursor: pointer; transition: all 0.2s ease;" id="agreement-label">
                <input type="checkbox" id="agreement-checkbox" onchange="MetroAdmin.handleDSGTModalAgreementChange()" style="width: 20px; height: 20px; margin-top: 2px; cursor: pointer; flex-shrink: 0;">
                <div>
                    <p style="font-size: 14px; color: var(--text-primary); font-weight: 600; margin: 0 0 4px 0;">I Agree to the Terms and Conditions</p>
                    <p style="font-size: 12px; color: var(--text-secondary); margin: 0;">By checking this box, you confirm that you have read and understood all the terms listed above.</p>
                </div>
            </label>
        </div>
        <div class="dsgt-modal-footer">
            <button class="btn btn-secondary" onclick="MetroAdmin.handleDSGTModalRequiredFormClose()" id="required-form-cancel" disabled style="opacity: 0.5; cursor: not-allowed;">Cancel</button>
            <button class="btn btn-success" onclick="MetroAdmin.handleDSGTModalAgreementAccept()" id="required-form-accept" disabled style="opacity: 0.5; cursor: not-allowed;">
                <i class="fa-solid fa-check"></i>
                Accept & Continue
            </button>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="dsgt-modals-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="dsgt-modal-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>JavaScript API</h3>
                    <p class="card-subtitle">Modal control functions</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <pre style="background: var(--bg-tertiary); padding: 16px; border-radius: 8px; font-size: 12px; overflow-x: auto;"><code>// Open modal
openModal('modal-id');

// Close modal
closeModal('modal-id');

// Close on backdrop click
$('.custom-modal').on('click', function(e) {
    if (e.target === this) {
        closeModal(this.id);
    }
});

// Close on Escape key
$(document).on('keydown', function(e) {
    if (e.key === 'Escape') {
        closeAllModals();
    }
});</code></pre>
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
                    <p class="card-subtitle">Modal design guidelines</p>
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
                        <td><strong>Clear actions</strong></td>
                        <td>Obvious next steps</td>
                    </tr>
                    <tr>
                        <td><strong>Close button</strong></td>
                        <td>Easy dismissal</td>
                    </tr>
                    <tr>
                        <td><strong>Backdrop click</strong></td>
                        <td>Quick close</td>
                    </tr>
                    <tr>
                        <td><strong>Keyboard support</strong></td>
                        <td>Accessibility (a11y)</td>
                    </tr>
                    <tr>
                        <td><strong>Limit stacking</strong></td>
                        <td>Prevent confusion</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Modals page initialization
$(document).ready(function() {
    console.log('📋 DSGT Modals page loaded successfully');
});
</script>
@endpush