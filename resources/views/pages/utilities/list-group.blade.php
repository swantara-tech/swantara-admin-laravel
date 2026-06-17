@extends('layouts.app')

@section('title', 'List Group')
@section('breadcrumb', 'List Group')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>List Group</h1>
        <p>Flexible list components for displaying content, navigation, notifications, and interactive items with modern styling</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-list"></i>
            <span>Try List Groups</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card dsgt-list-group-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What are List Groups?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">List groups are flexible components for displaying lists of elements with consistent styling. They support icons, avatars, badges, checkboxes, switches, and custom content. List groups are perfect for navigation menus, settings panels, notifications, and data displays.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic List Group -->
<div class="dsgt-list-group-section-title">
    <i class="fa-solid fa-list"></i>
    Basic List Group <span class="badge badge-primary">Essential</span>
</div>

<div class="dsgt-list-group-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-align-left"></i>
                </div>
                <div>
                    <h3>Simple List</h3>
                    <p class="card-subtitle">Basic list with items</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-list-group-example">
                <span class="lg-example-label">Default List Group</span>
                <ul class="dsgt-modern-list-group">
                    <li class="dsgt-list-group-item">Dashboard</li>
                    <li class="dsgt-list-group-item">Analytics</li>
                    <li class="dsgt-list-group-item">Reports</li>
                    <li class="dsgt-list-group-item">Settings</li>
                    <li class="dsgt-list-group-item">Help Center</li>
                </ul>
                <div class="dsgt-list-group-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Hover over items to see highlight effect
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
                    <h3>Active State</h3>
                    <p class="card-subtitle">With active item indicator</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-list-group-example">
                <span class="lg-example-label">Active Item</span>
                <ul class="dsgt-modern-list-group">
                    <li class="dsgt-list-group-item">Profile</li>
                    <li class="dsgt-list-group-item active">Account Settings</li>
                    <li class="dsgt-list-group-item">Security</li>
                    <li class="dsgt-list-group-item">Notifications</li>
                    <li class="dsgt-list-group-item">Billing</li>
                </ul>
                <div class="dsgt-list-group-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Active item has accent background and left border
                </div>
            </div>
        </div>
    </div>
</div>

<!-- List Group with Header & Footer -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-layer-group"></i>
            </div>
            <div>
                <h3>With Header & Footer</h3>
                <p class="card-subtitle">Structured list with header and footer</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-list-group-example">
            <span class="lg-example-label">Complete Structure</span>
            <ul class="dsgt-modern-list-group">
                <li class="dsgt-list-group-header">Team Members (5)</li>
                <li class="dsgt-list-group-item">John Doe - Project Manager</li>
                <li class="dsgt-list-group-item">Jane Smith - Developer</li>
                <li class="dsgt-list-group-item">Bob Johnson - Designer</li>
                <li class="dsgt-list-group-item">Alice Williams - QA Engineer</li>
                <li class="dsgt-list-group-item">Charlie Brown - DevOps</li>
                <li class="dsgt-list-group-footer">
                    <button>+ Add New Member</button>
                </li>
            </ul>
            <div class="dsgt-list-group-helper">
                <i class="fa-solid fa-circle-info"></i>
                Header shows count, footer has action button
            </div>
        </div>
    </div>
</div>

<!-- List Group with Icons -->
<div class="dsgt-list-group-section-title">
    <i class="fa-solid fa-icons"></i>
    List Group with Icons
</div>

<div class="dsgt-list-group-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-gear"></i>
                </div>
                <div>
                    <h3>Settings Menu</h3>
                    <p class="card-subtitle">Icon-rich navigation list</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-list-group-example">
                <span class="lg-example-label">Settings Navigation</span>
                <ul class="dsgt-modern-list-group">
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-icon">
                        <div class="dsgt-list-group-icon dsgt-dsgt-list-group-icon-primary">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div>
                            <div class="dsgt-list-group-title">Profile</div>
                            <p class="dsgt-list-group-desc">Manage your account</p>
                        </div>
                    </li>
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-icon">
                        <div class="dsgt-list-group-icon dsgt-dsgt-list-group-icon-success">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div>
                            <div class="dsgt-list-group-title">Security</div>
                            <p class="dsgt-list-group-desc">Password & 2FA</p>
                        </div>
                    </li>
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-icon">
                        <div class="dsgt-list-group-icon dsgt-dsgt-list-group-icon-warning">
                            <i class="fa-solid fa-bell"></i>
                        </div>
                        <div>
                            <div class="dsgt-list-group-title">Notifications</div>
                            <p class="dsgt-list-group-desc">Configure alerts</p>
                        </div>
                    </li>
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-icon">
                        <div class="dsgt-list-group-icon dsgt-dsgt-list-group-icon-info">
                            <i class="fa-solid fa-palette"></i>
                        </div>
                        <div>
                            <div class="dsgt-list-group-title">Appearance</div>
                            <p class="dsgt-list-group-desc">Theme & colors</p>
                        </div>
                    </li>
                </ul>
                <div class="dsgt-list-group-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    36x36px icon containers with soft backgrounds
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-list-check"></i>
                </div>
                <div>
                    <h3>Task List</h3>
                    <p class="card-subtitle">Tasks with status icons</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-list-group-example">
                <span class="lg-example-label">Task Management</span>
                <ul class="dsgt-modern-list-group">
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-icon">
                        <div class="dsgt-list-group-icon dsgt-dsgt-list-group-icon-success">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <div>
                            <div class="dsgt-list-group-title">Design System</div>
                            <p class="dsgt-list-group-desc">Completed</p>
                        </div>
                    </li>
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-icon">
                        <div class="dsgt-list-group-icon dsgt-dsgt-list-group-icon-warning">
                            <i class="fa-solid fa-spinner"></i>
                        </div>
                        <div>
                            <div class="dsgt-list-group-title">API Integration</div>
                            <p class="dsgt-list-group-desc">In Progress</p>
                        </div>
                    </li>
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-icon">
                        <div class="dsgt-list-group-icon dsgt-dsgt-list-group-icon-danger">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                        <div>
                            <div class="dsgt-list-group-title">Testing</div>
                            <p class="dsgt-list-group-desc">Not Started</p>
                        </div>
                    </li>
                </ul>
                <div class="dsgt-list-group-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Icons indicate task status
                </div>
            </div>
        </div>
    </div>
</div>

<!-- List Group with Badges -->
<div class="dsgt-list-group-section-title">
    <i class="fa-solid fa-badge"></i>
    List Group with Badges
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-tag"></i>
            </div>
            <div>
                <h3>Badge Indicators</h3>
                <p class="card-subtitle">Items with count and status badges</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-list-group-example">
            <span class="lg-example-label">Email Inbox</span>
            <ul class="dsgt-modern-list-group">
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-badge">
                    <div>
                        <div class="dsgt-list-group-title">Inbox</div>
                        <p class="dsgt-list-group-desc">All received emails</p>
                    </div>
                    <span class="dsgt-list-group-badge" style="background: var(--accent); color: white;">24</span>
                </li>
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-badge">
                    <div>
                        <div class="dsgt-list-group-title">Starred</div>
                        <p class="dsgt-list-group-desc">Important messages</p>
                    </div>
                    <span class="dsgt-list-group-badge" style="background: var(--warning); color: white;">8</span>
                </li>
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-badge">
                    <div>
                        <div class="dsgt-list-group-title">Sent</div>
                        <p class="dsgt-list-group-desc">Sent emails</p>
                    </div>
                    <span class="dsgt-list-group-badge" style="background: var(--success); color: white;">156</span>
                </li>
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-badge">
                    <div>
                        <div class="dsgt-list-group-title">Spam</div>
                        <p class="dsgt-list-group-desc">Filtered messages</p>
                    </div>
                    <span class="dsgt-list-group-badge" style="background: var(--danger); color: white;">42</span>
                </li>
            </ul>
            <div class="dsgt-list-group-helper">
                <i class="fa-solid fa-circle-info"></i>
                Badges show item counts
            </div>
        </div>
    </div>
</div>

<!-- List Group with Avatars -->
<div class="dsgt-list-group-section-title">
    <i class="fa-solid fa-users"></i>
    List Group with Avatars
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-user-group"></i>
            </div>
            <div>
                <h3>Team Members</h3>
                <p class="card-subtitle">User list with profile pictures</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-list-group-example">
            <span class="lg-example-label">User Directory</span>
            <ul class="dsgt-modern-list-group">
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-avatar">
                    <img src="https://ui-avatars.com/api/?name=John+Doe&background=0078D4&color=fff&size=96" class="dsgt-list-group-avatar" alt="John Doe">
                    <div class="dsgt-list-group-content">
                        <div class="dsgt-list-group-title">John Doe</div>
                        <p class="dsgt-list-group-desc">john.doe@example.com</p>
                        <p class="dsgt-list-group-meta">Project Manager • Online</p>
                    </div>
                </li>
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-avatar">
                    <img src="https://ui-avatars.com/api/?name=Jane+Smith&background=16C60C&color=fff&size=96" class="dsgt-list-group-avatar" alt="Jane Smith">
                    <div class="dsgt-list-group-content">
                        <div class="dsgt-list-group-title">Jane Smith</div>
                        <p class="dsgt-list-group-desc">jane.smith@example.com</p>
                        <p class="dsgt-list-group-meta">Developer • Online</p>
                    </div>
                </li>
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-avatar">
                    <img src="https://ui-avatars.com/api/?name=Bob+Johnson&background=FFB900&color=fff&size=96" class="dsgt-list-group-avatar" alt="Bob Johnson">
                    <div class="dsgt-list-group-content">
                        <div class="dsgt-list-group-title">Bob Johnson</div>
                        <p class="dsgt-list-group-desc">bob.johnson@example.com</p>
                        <p class="dsgt-list-group-meta">Designer • Away</p>
                    </div>
                </li>
            </ul>
            <div class="dsgt-list-group-helper">
                <i class="fa-solid fa-circle-info"></i>
                48x48px circular avatars with user info
            </div>
        </div>
    </div>
</div>

<!-- Colored List Items -->
<div class="dsgt-list-group-section-title">
    <i class="fa-solid fa-palette"></i>
    Colored List Items
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
        <div class="dsgt-list-group-example">
            <span class="lg-example-label">Status Indicators</span>
            <ul class="dsgt-modern-list-group">
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-success">
                    <div class="dsgt-list-group-title">System Update</div>
                    <p class="dsgt-list-group-desc">Successfully completed</p>
                </li>
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-warning">
                    <div class="dsgt-list-group-title">Disk Space</div>
                    <p class="dsgt-list-group-desc">Running low (15% remaining)</p>
                </li>
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-danger">
                    <div class="dsgt-list-group-title">Server Down</div>
                    <p class="dsgt-list-group-desc">Critical issue detected</p>
                </li>
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-info">
                    <div class="dsgt-list-group-title">Backup</div>
                    <p class="dsgt-list-group-desc">Scheduled for tonight</p>
                </li>
            </ul>
            <div class="dsgt-list-group-helper">
                <i class="fa-solid fa-circle-info"></i>
                Colors indicate status severity
            </div>
        </div>
    </div>
</div>

<!-- Interactive List Group -->
<div class="dsgt-list-group-section-title">
    <i class="fa-solid fa-hand-pointer"></i>
    Interactive List Group
</div>

<div class="dsgt-list-group-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-square-check"></i>
                </div>
                <div>
                    <h3>With Checkboxes</h3>
                    <p class="card-subtitle">Selectable list items</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-list-group-example">
                <span class="lg-example-label">Task Selection</span>
                <ul class="dsgt-modern-list-group">
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-checkbox">
                        <input type="checkbox" class="dsgt-list-group-checkbox">
                        <span>Complete documentation</span>
                    </li>
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-checkbox">
                        <input type="checkbox" class="dsgt-list-group-checkbox" checked>
                        <span>Review pull requests</span>
                    </li>
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-checkbox">
                        <input type="checkbox" class="dsgt-list-group-checkbox">
                        <span>Update dependencies</span>
                    </li>
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-checkbox">
                        <input type="checkbox" class="dsgt-list-group-checkbox">
                        <span>Deploy to production</span>
                    </li>
                </ul>
                <div class="dsgt-list-group-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Click checkboxes to select/deselect
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-toggle-on"></i>
                </div>
                <div>
                    <h3>With Switches</h3>
                    <p class="card-subtitle">Toggle controls in list</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-list-group-example">
                <span class="lg-example-label">Settings Toggles</span>
                <ul class="dsgt-modern-list-group">
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-switch">
                        <div>
                            <div class="dsgt-list-group-title">Dark Mode</div>
                            <p class="dsgt-list-group-desc">Enable dark theme</p>
                        </div>
                        <label class="dsgt-metro-switch">
                            <input type="checkbox">
                            <span class="dsgt-dsgt-metro-switch-slider"></span>
                        </label>
                    </li>
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-switch">
                        <div>
                            <div class="dsgt-list-group-title">Notifications</div>
                            <p class="dsgt-list-group-desc">Push notifications</p>
                        </div>
                        <label class="dsgt-metro-switch">
                            <input type="checkbox" checked>
                            <span class="dsgt-dsgt-metro-switch-slider"></span>
                        </label>
                    </li>
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-switch">
                        <div>
                            <div class="dsgt-list-group-title">Auto-Save</div>
                            <p class="dsgt-list-group-desc">Save every 5 minutes</p>
                        </div>
                        <label class="dsgt-metro-switch">
                            <input type="checkbox" checked>
                            <span class="dsgt-dsgt-metro-switch-slider"></span>
                        </label>
                    </li>
                </ul>
                <div class="dsgt-list-group-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Toggle switches for quick settings
                </div>
            </div>
        </div>
    </div>
</div>

<!-- List Group with Actions -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-danger">
                <i class="fa-solid fa-grip"></i>
            </div>
            <div>
                <h3>With Actions</h3>
                <p class="card-subtitle">Items with edit and delete buttons</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-list-group-example">
            <span class="lg-example-label">File Manager</span>
            <ul class="dsgt-modern-list-group">
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-actions">
                    <div>
                        <div class="dsgt-list-group-title"><i class="fa-solid fa-file-pdf" style="color: var(--danger);"></i> Report.pdf</div>
                        <p class="dsgt-list-group-desc">2.4 MB • Modified 2 hours ago</p>
                    </div>
                    <div class="dsgt-list-group-actions">
                        <button class="dsgt-list-group-action-btn" title="Edit">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <button class="dsgt-list-group-action-btn danger" title="Delete">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-actions">
                    <div>
                        <div class="dsgt-list-group-title"><i class="fa-solid fa-file-word" style="color: var(--info);"></i> Document.docx</div>
                        <p class="dsgt-list-group-desc">1.8 MB • Modified yesterday</p>
                    </div>
                    <div class="dsgt-list-group-actions">
                        <button class="dsgt-list-group-action-btn" title="Edit">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <button class="dsgt-list-group-action-btn danger" title="Delete">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-actions">
                    <div>
                        <div class="dsgt-list-group-title"><i class="fa-solid fa-file-image" style="color: var(--success);"></i> Image.png</div>
                        <p class="dsgt-list-group-desc">3.2 MB • Modified 3 days ago</p>
                    </div>
                    <div class="dsgt-list-group-actions">
                        <button class="dsgt-list-group-action-btn" title="Edit">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <button class="dsgt-list-group-action-btn danger" title="Delete">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>
            </ul>
            <div class="dsgt-list-group-helper">
                <i class="fa-solid fa-circle-info"></i>
                Hover action buttons for quick operations
            </div>
        </div>
    </div>
</div>

<!-- Notification List -->
<div class="dsgt-list-group-section-title">
    <i class="fa-solid fa-bell"></i>
    Notification & Timeline Lists
</div>

<div class="dsgt-list-group-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-bell"></i>
                </div>
                <div>
                    <h3>Notifications</h3>
                    <p class="card-subtitle">Activity feed style</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-list-group-example">
                <span class="lg-example-label">Activity Feed</span>
                <ul class="dsgt-modern-list-group">
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-notification">
                        <div class="dsgt-notification-dot"></div>
                        <div class="dsgt-list-group-title">New user registered</div>
                        <p class="dsgt-list-group-meta">2 minutes ago</p>
                    </li>
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-notification">
                        <div class="dsgt-notification-dot" style="background: var(--success);"></div>
                        <div class="dsgt-list-group-title">Payment confirmed</div>
                        <p class="dsgt-list-group-meta">15 minutes ago</p>
                    </li>
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-notification">
                        <div class="dsgt-notification-dot" style="background: var(--warning);"></div>
                        <div class="dsgt-list-group-title">Low stock alert</div>
                        <p class="dsgt-list-group-meta">1 hour ago</p>
                    </li>
                </ul>
                <div class="dsgt-list-group-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Timeline with colored notification dots
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                </div>
                <div>
                    <h3>Timeline</h3>
                    <p class="card-subtitle">Historical events timeline</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-list-group-example">
                <span class="lg-example-label">Project Timeline</span>
                <div class="dsgt-list-group-timeline">
                    <div class="dsgt-dsgt-list-group-timeline-item">
                        <div class="dsgt-list-group-title">Project Started</div>
                        <p class="dsgt-list-group-desc">Initial setup and planning</p>
                        <p class="dsgt-list-group-meta">Jan 15, 2024</p>
                    </div>
                    <div class="dsgt-dsgt-list-group-timeline-item">
                        <div class="dsgt-list-group-title">Design Phase</div>
                        <p class="dsgt-list-group-desc">UI/UX design completed</p>
                        <p class="dsgt-list-group-meta">Feb 20, 2024</p>
                    </div>
                    <div class="dsgt-dsgt-list-group-timeline-item">
                        <div class="dsgt-list-group-title">Development</div>
                        <p class="dsgt-list-group-desc">Core features implemented</p>
                        <p class="dsgt-list-group-meta">Apr 10, 2024</p>
                    </div>
                </div>
                <div class="dsgt-list-group-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Timeline with connecting line
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Clickable & Disabled Items -->
<div class="dsgt-list-group-section-title">
    <i class="fa-solid fa-hand-pointer"></i>
    Clickable & Disabled Items
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-arrow-pointer"></i>
            </div>
            <div>
                <h3>Interactive States</h3>
                <p class="card-subtitle">Clickable, disabled, and hover effects</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-list-group-example">
            <span class="lg-example-label">Navigation Menu</span>
            <ul class="dsgt-modern-list-group">
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-clickable active">
                    <div class="dsgt-list-group-title">Dashboard</div>
                    <p class="dsgt-list-group-desc">Overview and analytics</p>
                </li>
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-clickable">
                    <div class="dsgt-list-group-title">Products</div>
                    <p class="dsgt-list-group-desc">Manage your inventory</p>
                </li>
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-clickable">
                    <div class="dsgt-list-group-title">Orders</div>
                    <p class="dsgt-list-group-desc">View and process orders</p>
                </li>
                <li class="dsgt-list-group-item" style="opacity: 0.5; pointer-events: none; cursor: not-allowed;">
                    <div class="dsgt-list-group-title">Reports (Disabled)</div>
                    <p class="dsgt-list-group-desc">Coming soon feature</p>
                </li>
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-clickable">
                    <div class="dsgt-list-group-title">Settings</div>
                    <p class="dsgt-list-group-desc">Configure your account</p>
                </li>
            </ul>
            <div class="dsgt-list-group-helper">
                <i class="fa-solid fa-circle-info"></i>
                Click items to see active state, disabled items are not clickable
            </div>
        </div>
    </div>
</div>

<!-- Media & Content List -->
<div class="dsgt-list-group-section-title">
    <i class="fa-solid fa-photo-film"></i>
    Media & Content Lists
</div>

<div class="dsgt-list-group-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-image"></i>
                </div>
                <div>
                    <h3>Image Gallery List</h3>
                    <p class="card-subtitle">Thumbnail with image previews</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-list-group-example">
                <span class="lg-example-label">Photo Albums</span>
                <ul class="dsgt-modern-list-group">
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-avatar">
                        <div style="width: 48px; height: 48px; border-radius: 8px; background: linear-gradient(135deg, var(--accent), #1A86D9); display: flex; align-items: center; justify-content: center; color: white; flex-shrink: 0;">
                            <i class="fa-solid fa-image"></i>
                        </div>
                        <div class="dsgt-list-group-content">
                            <div class="dsgt-list-group-title">Vacation Photos</div>
                            <p class="dsgt-list-group-desc">24 images • 156 MB</p>
                            <p class="dsgt-list-group-meta">Created 2 days ago</p>
                        </div>
                    </li>
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-avatar">
                        <div style="width: 48px; height: 48px; border-radius: 8px; background: linear-gradient(135deg, var(--success), #2DD41A); display: flex; align-items: center; justify-content: center; color: white; flex-shrink: 0;">
                            <i class="fa-solid fa-images"></i>
                        </div>
                        <div class="dsgt-list-group-content">
                            <div class="dsgt-list-group-title">Product Shots</div>
                            <p class="dsgt-list-group-desc">48 images • 320 MB</p>
                            <p class="dsgt-list-group-meta">Created 1 week ago</p>
                        </div>
                    </li>
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-avatar">
                        <div style="width: 48px; height: 48px; border-radius: 8px; background: linear-gradient(135deg, var(--warning), #FFD740); display: flex; align-items: center; justify-content: center; color: white; flex-shrink: 0;">
                            <i class="fa-solid fa-video"></i>
                        </div>
                        <div class="dsgt-list-group-content">
                            <div class="dsgt-list-group-title">Marketing Videos</div>
                            <p class="dsgt-list-group-desc">12 videos • 1.2 GB</p>
                            <p class="dsgt-list-group-meta">Created 3 weeks ago</p>
                        </div>
                    </li>
                </ul>
                <div class="dsgt-list-group-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Image thumbnails with metadata and file info
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-newspaper"></i>
                </div>
                <div>
                    <h3>Blog Posts List</h3>
                    <p class="card-subtitle">Article preview cards</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-list-group-example">
                <span class="lg-example-label">Recent Articles</span>
                <ul class="dsgt-modern-list-group">
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-icon">
                        <div class="dsgt-list-group-icon dsgt-dsgt-list-group-icon-primary">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="dsgt-list-group-content">
                            <div class="dsgt-list-group-title">Getting Started with Laravel 11</div>
                            <p class="dsgt-list-group-desc">Learn the basics of the latest Laravel version</p>
                            <p class="dsgt-list-group-meta">5 min read • Published 2 days ago</p>
                        </div>
                    </li>
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-icon">
                        <div class="dsgt-list-group-icon dsgt-dsgt-list-group-icon-success">
                            <i class="fa-solid fa-fire"></i>
                        </div>
                        <div class="dsgt-list-group-content">
                            <div class="dsgt-list-group-title">10 CSS Tips for Modern UI</div>
                            <p class="dsgt-list-group-desc">Improve your frontend skills with these tricks</p>
                            <p class="dsgt-list-group-meta">8 min read • Published 1 week ago</p>
                        </div>
                    </li>
                    <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-icon">
                        <div class="dsgt-list-group-icon dsgt-dsgt-list-group-icon-warning">
                            <i class="fa-solid fa-bookmark"></i>
                        </div>
                        <div class="dsgt-list-group-content">
                            <div class="dsgt-list-group-title">Database Optimization Guide</div>
                            <p class="dsgt-list-group-desc">Speed up your queries with indexing</p>
                            <p class="dsgt-list-group-meta">12 min read • Published 2 weeks ago</p>
                        </div>
                    </li>
                </ul>
                <div class="dsgt-list-group-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Blog posts with reading time and publish date
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Drag & Drop List -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-grip-vertical"></i>
            </div>
            <div>
                <h3>Sortable & Draggable</h3>
                <p class="card-subtitle">Reorderable list items</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-list-group-example">
            <span class="lg-example-label">Priority Tasks (Drag to Reorder)</span>
            <ul class="dsgt-modern-list-group" id="sortableList">
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-actions" style="cursor: grab;">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <i class="fa-solid fa-grip-vertical" style="color: var(--text-secondary); cursor: grab;"></i>
                        <div>
                            <div class="dsgt-list-group-title">Fix critical bug #1234</div>
                            <p class="dsgt-list-group-desc">High Priority</p>
                        </div>
                    </div>
                    <div class="dsgt-list-group-actions">
                        <button class="dsgt-list-group-action-btn" title="Edit">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <button class="dsgt-list-group-action-btn danger" title="Delete">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-actions" style="cursor: grab;">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <i class="fa-solid fa-grip-vertical" style="color: var(--text-secondary); cursor: grab;"></i>
                        <div>
                            <div class="dsgt-list-group-title">Update documentation</div>
                            <p class="dsgt-list-group-desc">Medium Priority</p>
                        </div>
                    </div>
                    <div class="dsgt-list-group-actions">
                        <button class="dsgt-list-group-action-btn" title="Edit">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <button class="dsgt-list-group-action-btn danger" title="Delete">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-actions" style="cursor: grab;">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <i class="fa-solid fa-grip-vertical" style="color: var(--text-secondary); cursor: grab;"></i>
                        <div>
                            <div class="dsgt-list-group-title">Add new feature request</div>
                            <p class="dsgt-list-group-desc">Low Priority</p>
                        </div>
                    </div>
                    <div class="dsgt-list-group-actions">
                        <button class="dsgt-list-group-action-btn" title="Edit">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                        <button class="dsgt-list-group-action-btn danger" title="Delete">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </li>
            </ul>
            <div class="dsgt-list-group-helper">
                <i class="fa-solid fa-circle-info"></i>
                Visual grip icons indicate draggable items
            </div>
        </div>
    </div>
</div>

<!-- Searchable & Filterable List -->
<div class="dsgt-list-group-section-title">
    <i class="fa-solid fa-magnifying-glass"></i>
    Searchable & Filterable Lists
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-filter"></i>
            </div>
            <div>
                <h3>With Search Input</h3>
                <p class="card-subtitle">Filter list items dynamically</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-list-group-example">
            <span class="lg-example-label">Contact Directory</span>
            <div style="margin-bottom: 16px;">
                <div style="position: relative;">
                    <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 12px; top: 50%; transform: translateY(-50%); color: var(--text-secondary);"></i>
                    <input type="text" id="searchInput" placeholder="Search contacts..." style="width: 100%; padding: 10px 12px 10px 36px; border: 1px solid var(--border-color); border-radius: 6px; background: var(--surface); font-size: 13px;">
                </div>
            </div>
            <ul class="dsgt-modern-list-group" id="contactList">
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-avatar" data-search="alice johnson alice.johnson@example.com">
                    <img src="https://ui-avatars.com/api/?name=Alice+Johnson&background=0078D4&color=fff&size=80" class="dsgt-list-group-avatar dsgt-dsgt-list-group-avatar-sm" alt="Alice">
                    <div class="dsgt-list-group-content">
                        <div class="dsgt-list-group-title">Alice Johnson</div>
                        <p class="dsgt-list-group-desc">alice.johnson@example.com</p>
                    </div>
                </li>
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-avatar" data-search="bob smith bob.smith@example.com">
                    <img src="https://ui-avatars.com/api/?name=Bob+Smith&background=16C60C&color=fff&size=80" class="dsgt-list-group-avatar dsgt-dsgt-list-group-avatar-sm" alt="Bob">
                    <div class="dsgt-list-group-content">
                        <div class="dsgt-list-group-title">Bob Smith</div>
                        <p class="dsgt-list-group-desc">bob.smith@example.com</p>
                    </div>
                </li>
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-avatar" data-search="charlie brown charlie.brown@example.com">
                    <img src="https://ui-avatars.com/api/?name=Charlie+Brown&background=FFB900&color=fff&size=80" class="dsgt-list-group-avatar dsgt-dsgt-list-group-avatar-sm" alt="Charlie">
                    <div class="dsgt-list-group-content">
                        <div class="dsgt-list-group-title">Charlie Brown</div>
                        <p class="dsgt-list-group-desc">charlie.brown@example.com</p>
                    </div>
                </li>
                <li class="dsgt-list-group-item dsgt-dsgt-list-group-item-with-avatar" data-search="diana prince diana.prince@example.com">
                    <img src="https://ui-avatars.com/api/?name=Diana+Prince&background=EF4444&color=fff&size=80" class="dsgt-list-group-avatar dsgt-dsgt-list-group-avatar-sm" alt="Diana">
                    <div class="dsgt-list-group-content">
                        <div class="dsgt-list-group-title">Diana Prince</div>
                        <p class="dsgt-list-group-desc">diana.prince@example.com</p>
                    </div>
                </li>
            </ul>
            <div class="dsgt-list-group-helper">
                <i class="fa-solid fa-circle-info"></i>
                Type in search box to filter contacts by name or email
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="dsgt-list-group-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="dsgt-list-group-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>CSS Classes</h3>
                    <p class="card-subtitle">Available list utilities</p>
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
                        <td><code>.modern-list-group</code></td>
                        <td>Base list container</td>
                    </tr>
                    <tr>
                        <td><code>.dsgt-list-group-item</code></td>
                        <td>Individual item</td>
                    </tr>
                    <tr>
                        <td><code>.dsgt-dsgt-list-group-item-with-icon</code></td>
                        <td>Item with icon</td>
                    </tr>
                    <tr>
                        <td><code>.dsgt-dsgt-list-group-item-with-badge</code></td>
                        <td>Item with badge</td>
                    </tr>
                    <tr>
                        <td><code>.dsgt-dsgt-list-group-item-with-avatar</code></td>
                        <td>Item with avatar</td>
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
                    <p class="card-subtitle">List group guidelines</p>
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
                        <td><strong>Use icons</strong></td>
                        <td>Better recognition</td>
                    </tr>
                    <tr>
                        <td><strong>Add badges</strong></td>
                        <td>Show counts/status</td>
                    </tr>
                    <tr>
                        <td><strong>Include metadata</strong></td>
                        <td>Context information</td>
                    </tr>
                    <tr>
                        <td><strong>Active states</strong></td>
                        <td>Clear selection</td>
                    </tr>
                    <tr>
                        <td><strong>Hierarchy</strong></td>
                        <td>Header/footer structure</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// List Group page initialization
$(document).ready(function() {
    console.log('📋 DSGT List Group page loaded successfully');
    
    // Initialize search functionality
    if ($('#searchInput').length && $('#contactList').length) {
        MetroAdmin.initDSGTListGroupSearch('searchInput', 'contactList');
    }
});
</script>
@endpush