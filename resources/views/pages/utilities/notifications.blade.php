@extends('layouts.app')

@section('title', 'Notifications')
@section('breadcrumb', 'Notifications')

@push('styles')
@endpush

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Notifications</h1>
        <p>Toast notifications and alerts for user feedback, system messages, and real-time updates with Metro UI framework</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary" onclick="MetroAdmin.showSWBasicToast()">
            <i class="fa-solid fa-bell"></i>
            <span>Try Notification</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card sw-notif-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">Custom Toast Notification System</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">This template uses a custom toast notification system with smooth slide-in animations and Fluent Design styling. Toasts are lightweight, auto-dismissing messages (4 seconds) that appear at configurable screen positions. The system also integrates SweetAlert2 for dialog-based notifications with actions, HTML content, and confirmations. Notifications provide immediate feedback without interrupting user workflow.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Notifications -->
<div class="sw-notifications-section-title">
    <i class="fa-solid fa-bell"></i>
    Basic Notifications <span class="badge badge-primary">Essential</span>
</div>

<div class="sw-notif-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-info-circle"></i>
                </div>
                <div>
                    <h3>Info Notification</h3>
                    <p class="card-subtitle">Informational messages</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-notif-example">
                <span class="sw-notif-example-label">Preview</span>
                <div class="sw-notif-preview">
                    <div class="sw-notif-preview-icon" style="background: rgba(0, 188, 242, 0.1); color: var(--info);">
                        <i class="fa-solid fa-info-circle"></i>
                    </div>
                    <div class="sw-notif-preview-content">
                        <h4 class="sw-notif-preview-title">Information</h4>
                        <p class="sw-notif-preview-message">Here's some useful information for you.</p>
                    </div>
                    <button class="sw-notif-preview-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>
                <button class="btn btn-info" onclick="MetroAdmin.showSWInfoToast()">
                    <i class="fa-solid fa-info-circle"></i>
                    Show Info Toast
                </button>
                <div class="sw-notif-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Blue color with info icon
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
                    <h3>Success Notification</h3>
                    <p class="card-subtitle">Operation completed</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-notif-example">
                <span class="sw-notif-example-label">Preview</span>
                <div class="sw-notif-preview">
                    <div class="sw-notif-preview-icon" style="background: rgba(22, 198, 12, 0.1); color: var(--success);">
                        <i class="fa-solid fa-check-circle"></i>
                    </div>
                    <div class="sw-notif-preview-content">
                        <h4 class="sw-notif-preview-title">Success!</h4>
                        <p class="sw-notif-preview-message">Your action was completed successfully.</p>
                    </div>
                    <button class="sw-notif-preview-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>
                <button class="btn btn-success" onclick="MetroAdmin.showSWSuccessToast()">
                    <i class="fa-solid fa-check"></i>
                    Show Success Toast
                </button>
                <div class="sw-notif-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Green color with check icon
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
                    <h3>Warning Notification</h3>
                    <p class="card-subtitle">Caution messages</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-notif-example">
                <span class="sw-notif-example-label">Preview</span>
                <div class="sw-notif-preview">
                    <div class="sw-notif-preview-icon" style="background: rgba(255, 185, 0, 0.1); color: var(--warning);">
                        <i class="fa-solid fa-exclamation-triangle"></i>
                    </div>
                    <div class="sw-notif-preview-content">
                        <h4 class="sw-notif-preview-title">Warning!</h4>
                        <p class="sw-notif-preview-message">Please review before proceeding.</p>
                    </div>
                    <button class="sw-notif-preview-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>
                <button class="btn btn-warning" onclick="MetroAdmin.showSWWarningToast()">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    Show Warning Toast
                </button>
                <div class="sw-notif-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Yellow color with warning icon
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
                    <h3>Error Notification</h3>
                    <p class="card-subtitle">Error messages</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-notif-example">
                <span class="sw-notif-example-label">Preview</span>
                <div class="sw-notif-preview">
                    <div class="sw-notif-preview-icon" style="background: rgba(232, 17, 35, 0.1); color: var(--danger);">
                        <i class="fa-solid fa-times-circle"></i>
                    </div>
                    <div class="sw-notif-preview-content">
                        <h4 class="sw-notif-preview-title">Error!</h4>
                        <p class="sw-notif-preview-message">Something went wrong. Please try again.</p>
                    </div>
                    <button class="sw-notif-preview-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>
                <button class="btn btn-danger" onclick="MetroAdmin.showSWErrorToast()">
                    <i class="fa-solid fa-times"></i>
                    Show Error Toast
                </button>
                <div class="sw-notif-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Red color with error icon
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Notification Positions -->
<div class="sw-notifications-section-title">
    <i class="fa-solid fa-arrows-left-right"></i>
    Notification Positions
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-position"></i>
            </div>
            <div>
                <h3>Position Options</h3>
                <p class="card-subtitle">Where notifications appear</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-notif-example">
            <span class="sw-notif-example-label">Available Positions</span>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 12px;">
                <button class="btn btn-secondary" onclick="MetroAdmin.showSWToastAt('top-left')">
                    <i class="fa-solid fa-arrow-up-left"></i>
                    Top Left
                </button>
                <button class="btn btn-secondary" onclick="MetroAdmin.showSWToastAt('top-center')">
                    <i class="fa-solid fa-arrow-up"></i>
                    Top Center
                </button>
                <button class="btn btn-secondary" onclick="MetroAdmin.showSWToastAt('top-right')">
                    <i class="fa-solid fa-arrow-up-right"></i>
                    Top Right
                </button>
                <button class="btn btn-secondary" onclick="MetroAdmin.showSWToastAt('bottom-left')">
                    <i class="fa-solid fa-arrow-down-left"></i>
                    Bottom Left
                </button>
                <button class="btn btn-secondary" onclick="MetroAdmin.showSWToastAt('bottom-center')">
                    <i class="fa-solid fa-arrow-down"></i>
                    Bottom Center
                </button>
                <button class="btn btn-secondary" onclick="MetroAdmin.showSWToastAt('bottom-right')">
                    <i class="fa-solid fa-arrow-down-right"></i>
                    Bottom Right
                </button>
            </div>
            <div class="sw-notif-helper">
                <i class="fa-solid fa-circle-info"></i>
                6 position options for toast placement
            </div>
        </div>
    </div>
</div>

<!-- Advanced Notifications -->
<div class="sw-notifications-section-title">
    <i class="fa-solid fa-gear"></i>
    Advanced Notifications
</div>

<div class="sw-notif-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div>
                    <h3>Custom Duration</h3>
                    <p class="card-subtitle">Control auto-dismiss time</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-notif-example">
                <span class="sw-notif-example-label">Duration Options</span>
                <div class="sw-notif-code-display">showToast(message, type, position) - Auto: 4s</div>
                <div style="display: flex; gap: 12px; flex-wrap: wrap; justify-content: center;">
                    <button class="btn btn-info" onclick="MetroAdmin.showSWShortToast()">
                        Short (2s)
                    </button>
                    <button class="btn btn-primary" onclick="MetroAdmin.showSWMediumToast()">
                        Medium (5s)
                    </button>
                    <button class="btn btn-warning" onclick="MetroAdmin.showSWLongToast()">
                        Long (10s)
                    </button>
                    <button class="btn btn-danger" onclick="MetroAdmin.showSWPersistentToast()">
                        Persistent
                    </button>
                </div>
                <div class="sw-notif-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Duration in milliseconds (0 = persistent)
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-hand-pointer"></i>
                </div>
                <div>
                    <h3>With Actions</h3>
                    <p class="card-subtitle">Interactive notification buttons</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-notif-example">
                <span class="sw-notif-example-label">Action Buttons</span>
                <div class="sw-notif-code-display">Swal.fire({ title, text, icon, buttons })</div>
                <button class="btn btn-primary" onclick="MetroAdmin.showSWActionToast()">
                    <i class="fa-solid fa-bolt"></i>
                    Show Action Toast
                </button>
                <div class="sw-notif-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Notifications with clickable actions
                </div>
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
                    <h3>HTML Content</h3>
                    <p class="card-subtitle">Rich content in notifications</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-notif-example">
                <span class="sw-notif-example-label">HTML Support</span>
                <div class="sw-notif-code-display">Swal.fire({ title, html, icon })</div>
                <button class="btn btn-info" onclick="MetroAdmin.showSWHTMLToast()">
                    <i class="fa-solid fa-file-code"></i>
                    Show HTML Toast
                </button>
                <div class="sw-notif-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Embed HTML in notification messages
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-danger">
                    <i class="fa-solid fa-list"></i>
                </div>
                <div>
                    <h3>Multiple Notifications</h3>
                    <p class="card-subtitle">Stack multiple toasts</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-notif-example">
                <span class="sw-notif-example-label">Toast Queue</span>
                <div class="sw-notif-code-display">showToast(...) × 3 with setTimeout</div>
                <button class="btn btn-danger" onclick="MetroAdmin.showSWMultipleToasts()">
                    <i class="fa-solid fa-layer-group"></i>
                    Show 3 Toasts
                </button>
                <div class="sw-notif-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Multiple toasts stack automatically
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="notif-section-title">
    <i class="fa-solid fa-book"></i>
    Usage & API Reference
</div>

<div class="sw-notif-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-code"></i>
                </div>
                <div>
                    <h3>JavaScript API</h3>
                    <p class="card-subtitle">Metro.notify() method</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <pre style="background: rgba(0, 0, 0, 0.03); padding: 16px; border-radius: 8px; font-size: 11px; overflow-x: auto; line-height: 1.6;"><code>// Basic usage
showToast('Message here', 'success');

// With position
showToast('Message', 'info', 'top-right');

// Types: success, error, warning, info
// Positions: top-right, top-left, top-center,
//            bottom-right, bottom-left, bottom-center

// SweetAlert2 Dialogs
showConfirm('Title', 'Text?', 'Yes', 'No');
showSuccess('Success!', 'Operation completed');
showError('Error!', 'Something went wrong');
showWarning('Warning!', 'Please review');
showInfo('Info', 'Here is information');
showLoading('Loading...');
closeLoading();</code></pre>
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
                    <p class="card-subtitle">Notification guidelines</p>
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
                        <td><strong>Keep it brief</strong></td>
                        <td>Quick comprehension</td>
                    </tr>
                    <tr>
                        <td><strong>Use icons</strong></td>
                        <td>Visual recognition</td>
                    </tr>
                    <tr>
                        <td><strong>Set duration</strong></td>
                        <td>Auto-dismiss</td>
                    </tr>
                    <tr>
                        <td><strong>Add actions</strong></td>
                        <td>User interaction</td>
                    </tr>
                    <tr>
                        <td><strong>Limit stacking</strong></td>
                        <td>Prevent clutter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Notifications page initialization
$(document).ready(function() {
    console.log('📋 SW Notifications page loaded successfully');
    
    // Demo: Show welcome toast
    setTimeout(() => {
        if (typeof MetroAdmin !== 'undefined') {
            MetroAdmin.showSWInfoToast('Welcome to the Notifications demo page!');
        }
    }, 1000);
});
</script>
@endpush