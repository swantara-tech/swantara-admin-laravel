@extends('layouts.app')

@section('title', 'Alerts')
@section('breadcrumb', 'Alerts')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Alerts</h1>
        <p>Contextual feedback messages for typical user actions with various styles and configurations</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-triangle-exclamation"></i>
            <span>Try Alerts</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card sw-al-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What are Alerts?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Alerts provide contextual feedback messages for typical user actions with a set of available styles. They support dismissible functionality, action buttons, icons, and can be triggered dynamically. Use alerts to communicate success, warnings, errors, and informational messages.</p>
            </div>
        </div>
    </div>
</div>

<!-- Standard Alerts -->
<div class="sw-al-section-title">
    <i class="fa-solid fa-triangle-exclamation"></i>
    Standard Alerts <span class="badge badge-primary">Essential</span>
</div>

<div class="sw-alert-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <div>
                    <h3>Success & Info Alerts</h3>
                    <p class="card-subtitle">Positive feedback & information</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-al-example">
                <span class="sw-al-example-label">Success Alert</span>
                <div class="sw-alert sw-alert-success">
                    <div class="sw-alert-icon">
                        <i class="fa-solid fa-check-circle"></i>
                    </div>
                    <div class="sw-alert-content">
                        <div class="sw-alert-title">Success!</div>
                        <p class="sw-alert-message">Your changes have been saved successfully.</p>
                    </div>
                    <button class="sw-alert-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>

                <span class="sw-al-example-label">Info Alert</span>
                <div class="sw-alert sw-alert-info">
                    <div class="sw-alert-icon">
                        <i class="fa-solid fa-info-circle"></i>
                    </div>
                    <div class="sw-alert-content">
                        <div class="sw-alert-title">Information</div>
                        <p class="sw-alert-message">A new software update is available. Please review the changelog.</p>
                    </div>
                    <button class="sw-alert-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>

                <div class="sw-al-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Click the X button to dismiss alerts with animation
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
                    <h3>Warning & Danger Alerts</h3>
                    <p class="card-subtitle">Caution & error messages</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-al-example">
                <span class="sw-al-example-label">Warning Alert</span>
                <div class="sw-alert sw-alert-warning">
                    <div class="sw-alert-icon">
                        <i class="fa-solid fa-exclamation-triangle"></i>
                    </div>
                    <div class="sw-alert-content">
                        <div class="sw-alert-title">Warning!</div>
                        <p class="sw-alert-message">Your account will expire in 3 days. Please renew your subscription.</p>
                    </div>
                    <button class="sw-alert-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>

                <span class="al-example-label" style="margin-top: 20px;">Danger Alert</span>
                <div class="sw-alert sw-alert-danger">
                    <div class="sw-alert-icon">
                        <i class="fa-solid fa-times-circle"></i>
                    </div>
                    <div class="sw-alert-content">
                        <div class="sw-alert-title">Error!</div>
                        <p class="sw-alert-message">Failed to process your request. Please try again later.</p>
                    </div>
                    <button class="sw-alert-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>

                <div class="sw-al-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Use warning for caution, danger for critical errors
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Alerts with Actions -->
<div class="sw-al-section-title">
    <i class="fa-solid fa-hand-pointer"></i>
    Alerts with Actions <span class="badge badge-warning">Interactive</span>
</div>

<div class="sw-alert-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-bolt"></i>
                </div>
                <div>
                    <h3>Actionable Alerts</h3>
                    <p class="card-subtitle">Alerts with buttons for user interaction</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-al-example">
                <span class="sw-al-example-label">Success with Actions</span>
                <div class="sw-alert sw-alert-success">
                    <div class="sw-alert-icon">
                        <i class="fa-solid fa-check-circle"></i>
                    </div>
                    <div class="sw-alert-content">
                        <div class="sw-alert-title">File Uploaded!</div>
                        <p class="sw-alert-message">Your document has been uploaded successfully.</p>
                        <div class="sw-alert-actions">
                            <button class="btn btn-success btn-sm">
                                <i class="fa-solid fa-eye"></i> View
                            </button>
                            <button class="btn btn-secondary btn-sm">
                                <i class="fa-solid fa-download"></i> Download
                            </button>
                        </div>
                    </div>
                    <button class="sw-alert-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>

                <span class="al-example-label" style="margin-top: 20px;">Warning with Actions</span>
                <div class="sw-alert sw-alert-warning">
                    <div class="sw-alert-icon">
                        <i class="fa-solid fa-exclamation-triangle"></i>
                    </div>
                    <div class="sw-alert-content">
                        <div class="sw-alert-title">Unsaved Changes</div>
                        <p class="sw-alert-message">You have unsaved changes. What would you like to do?</p>
                        <div class="sw-alert-actions">
                            <button class="btn btn-warning btn-sm">
                                <i class="fa-solid fa-save"></i> Save
                            </button>
                            <button class="btn btn-danger btn-sm">
                                <i class="fa-solid fa-trash"></i> Discard
                            </button>
                        </div>
                    </div>
                    <button class="sw-alert-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>

                <div class="sw-al-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Action buttons enable immediate user response
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-list-ul"></i>
                </div>
                <div>
                    <h3>Alerts with Lists</h3>
                    <p class="card-subtitle">Multiple items in alert messages</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-al-example">
                <span class="sw-al-example-label">Error with Details</span>
                <div class="sw-alert sw-alert-danger">
                    <div class="sw-alert-icon">
                        <i class="fa-solid fa-times-circle"></i>
                    </div>
                    <div class="sw-alert-content">
                        <div class="sw-alert-title">Validation Failed</div>
                        <p class="sw-alert-message">Please fix the following errors:</p>
                        <ul class="sw-alert-list">
                            <li>Email address is already taken</li>
                            <li>Password must be at least 8 characters</li>
                            <li>Phone number format is invalid</li>
                        </ul>
                    </div>
                    <button class="sw-alert-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>

                <span class="al-example-label" style="margin-top: 20px;">Info with Checklist</span>
                <div class="sw-alert sw-alert-info">
                    <div class="sw-alert-icon">
                        <i class="fa-solid fa-clipboard-check"></i>
                    </div>
                    <div class="sw-alert-content">
                        <div class="sw-alert-title">Setup Checklist</div>
                        <p class="sw-alert-message">Complete these steps to get started:</p>
                        <ul class="sw-alert-list">
                            <li>✓ Create your account</li>
                            <li>✓ Verify email address</li>
                            <li>○ Complete profile setup</li>
                            <li>○ Add payment method</li>
                        </ul>
                    </div>
                    <button class="sw-alert-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>

                <div class="sw-al-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Lists help organize multiple items within alerts
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Outline & Solid Variants -->
<div class="sw-al-section-title">
    <i class="fa-solid fa-palette"></i>
    Alert Variants <span class="badge badge-info">Styling</span>
</div>

<div class="sw-alert-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-secondary">
                    <i class="fa-solid fa-border-style"></i>
                </div>
                <div>
                    <h3>Outline Alerts</h3>
                    <p class="card-subtitle">Border-only style for subtle messages</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-al-example">
                <span class="sw-al-example-label">Outline Style Alerts</span>
                <div class="sw-alert sw-alert-outline-success">
                    <div class="sw-alert-icon">
                        <i class="fa-solid fa-check-circle"></i>
                    </div>
                    <div class="sw-alert-content">
                        <div class="sw-alert-title">Success</div>
                        <p class="sw-alert-message">Operation completed successfully.</p>
                    </div>
                    <button class="sw-alert-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>

                <div class="sw-alert sw-alert-outline-info">
                    <div class="sw-alert-icon">
                        <i class="fa-solid fa-info-circle"></i>
                    </div>
                    <div class="sw-alert-content">
                        <div class="sw-alert-title">Info</div>
                        <p class="sw-alert-message">New features are available.</p>
                    </div>
                    <button class="sw-alert-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>

                <div class="sw-alert sw-alert-outline-warning">
                    <div class="sw-alert-icon">
                        <i class="fa-solid fa-exclamation-triangle"></i>
                    </div>
                    <div class="sw-alert-content">
                        <div class="sw-alert-title">Warning</div>
                        <p class="sw-alert-message">Storage space running low.</p>
                    </div>
                    <button class="sw-alert-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>

                <div class="sw-alert sw-alert-outline-danger">
                    <div class="sw-alert-icon">
                        <i class="fa-solid fa-times-circle"></i>
                    </div>
                    <div class="sw-alert-content">
                        <div class="sw-alert-title">Error</div>
                        <p class="sw-alert-message">Connection timeout occurred.</p>
                    </div>
                    <button class="sw-alert-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>

                <div class="sw-al-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Outline style provides subtle, non-intrusive feedback
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-danger">
                    <i class="fa-solid fa-fill-drip"></i>
                </div>
                <div>
                    <h3>Solid Alerts</h3>
                    <p class="card-subtitle">Full background color for strong emphasis</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-al-example">
                <span class="sw-al-example-label">Solid Style Alerts</span>
                <div class="sw-alert sw-alert-solid sw-alert-solid-success">
                    <div class="alert-icon" style="background: white; color: var(--success);">
                        <i class="fa-solid fa-check-circle"></i>
                    </div>
                    <div class="sw-alert-content">
                        <div class="sw-alert-title">Success</div>
                        <p class="sw-alert-message">Your order has been confirmed!</p>
                    </div>
                    <button class="sw-alert-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>

                <div class="sw-alert sw-alert-solid sw-alert-solid-info">
                    <div class="alert-icon" style="background: white; color: var(--accent);">
                        <i class="fa-solid fa-info-circle"></i>
                    </div>
                    <div class="sw-alert-content">
                        <div class="sw-alert-title">Info</div>
                        <p class="sw-alert-message">System maintenance scheduled for tonight.</p>
                    </div>
                    <button class="sw-alert-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>

                <div class="sw-alert sw-alert-solid sw-alert-solid-warning">
                    <div class="alert-icon" style="background: white; color: var(--warning);">
                        <i class="fa-solid fa-exclamation-triangle"></i>
                    </div>
                    <div class="sw-alert-content">
                        <div class="sw-alert-title">Warning</div>
                        <p class="sw-alert-message">Session will expire in 5 minutes.</p>
                    </div>
                    <button class="sw-alert-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>

                <div class="sw-alert sw-alert-solid sw-alert-solid-danger">
                    <div class="alert-icon" style="background: white; color: var(--danger);">
                        <i class="fa-solid fa-times-circle"></i>
                    </div>
                    <div class="sw-alert-content">
                        <div class="sw-alert-title">Error</div>
                        <p class="sw-alert-message">Payment processing failed.</p>
                    </div>
                    <button class="sw-alert-close">
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>

                <div class="sw-al-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Solid style commands immediate attention
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Dynamic Alerts Demo -->
<div class="sw-al-section-title">
    <i class="fa-solid fa-wand-magic-sparkles"></i>
    Interactive Demo <span class="badge badge-success">Try It</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-play"></i>
            </div>
            <div>
                <h3>Dynamic Alert Generator</h3>
                <p class="card-subtitle">Click buttons to generate alerts dynamically</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="al-example">
            <span class="al-example-label">Generate Alerts</span>
            <div class="alert-demo-buttons">
                <button class="btn btn-success" onclick="generateAlert('success')">
                    <i class="fa-solid fa-check-circle"></i> Success Alert
                </button>
                <button class="btn btn-info" onclick="generateAlert('info')">
                    <i class="fa-solid fa-info-circle"></i> Info Alert
                </button>
                <button class="btn btn-warning" onclick="generateAlert('warning')">
                    <i class="fa-solid fa-exclamation-triangle"></i> Warning Alert
                </button>
                <button class="btn btn-danger" onclick="generateAlert('danger')">
                    <i class="fa-solid fa-times-circle"></i> Danger Alert
                </button>
                <button class="btn btn-secondary" onclick="clearAllAlerts()">
                    <i class="fa-solid fa-broom"></i> Clear All
                </button>
            </div>

            <div id="dynamicAlertContainer" class="sw-al-dynamic-container">
                <p style="text-align: center; color: var(--text-secondary); font-size: 13px; margin: 20px 0;">
                    <i class="fa-solid fa-arrow-up" style="margin-right: 8px;"></i>
                    Click buttons above to generate alerts here
                </p>
            </div>

            <div class="al-helper">
                <i class="fa-solid fa-circle-info"></i>
                Alerts are generated dynamically with JavaScript and include dismiss functionality
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="sw-al-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="sw-alert-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>HTML Structure</h3>
                    <p class="card-subtitle">Basic alert markup</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <pre style="background: var(--bg-tertiary); padding: 16px; border-radius: 8px; font-size: 12px; overflow-x: auto;"><code>&lt;div class="sw-alert sw-alert-success"&gt;
  &lt;div class="sw-alert-icon"&gt;
    &lt;i class="fa-solid fa-check-circle"&gt;&lt;/i&gt;
  &lt;/div&gt;
  &lt;div class="sw-alert-content"&gt;
    &lt;div class="sw-alert-title"&gt;Title&lt;/div&gt;
    &lt;p class="sw-alert-message"&gt;Message&lt;/p&gt;
  &lt;/div&gt;
  &lt;button class="sw-alert-close"&gt;
    &lt;i class="fa-solid fa-times"&gt;&lt;/i&gt;
  &lt;/button&gt;
&lt;/div&gt;</code></pre>
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
                    <p class="card-subtitle">When to use each alert type</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" style="width: 100%; font-size: 13px;">
                <thead>
                    <tr>
                        <th>Alert Type</th>
                        <th>Use Case</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span style="color: var(--success); font-weight: 600;">✓ Success</span></td>
                        <td>Successful operations, confirmations</td>
                    </tr>
                    <tr>
                        <td><span style="color: var(--accent); font-weight: 600;">ℹ Info</span></td>
                        <td>General information, neutral messages</td>
                    </tr>
                    <tr>
                        <td><span style="color: var(--warning); font-weight: 600;">⚠ Warning</span></td>
                        <td>Potential issues, cautionary notices</td>
                    </tr>
                    <tr>
                        <td><span style="color: var(--danger); font-weight: 600;">✕ Danger</span></td>
                        <td>Errors, critical failures, deletions</td>
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
 * SW Metro Template - Alerts Page Demo
 * Uses global SW alert functions from app.js
 */

// Dynamic Alert Generator
function generateAlert(type) {
    const container = '#dynamicAlertContainer';
    
    const alertConfig = {
        success: {
            title: 'Success!',
            message: 'Dynamic alert generated successfully.'
        },
        info: {
            title: 'Information',
            message: 'This is a dynamically created info alert.'
        },
        warning: {
            title: 'Warning!',
            message: 'Please review this important warning.'
        },
        danger: {
            title: 'Error!',
            message: 'An error occurred. Please try again.'
        }
    };
    
    const config = alertConfig[type];
    MetroAdmin.generateAlert(type, config.title, config.message, container, true, 10000);
}

// Clear All Alerts
function clearAllAlerts() {
    MetroAdmin.clearAllAlerts('#dynamicAlertContainer', true);
}

// Initialize on page load
$(document).ready(function() {
    console.log('✨ SW Alerts page loaded successfully');
});
</script>
@endpush