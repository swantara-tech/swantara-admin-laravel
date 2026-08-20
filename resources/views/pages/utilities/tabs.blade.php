@extends('layouts.app')

@section('title', 'Tabs')
@section('breadcrumb', 'Tabs')

@push('styles')
<!-- SW Tabs styles are now in app.css -->
@endpush

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Tabs</h1>
        <p>Organize content into separate panels with tabbed navigation for better space management and user experience</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary" onclick="MetroAdmin.switchSWTab(0, 'basic-tabs')">
            <i class="fa-solid fa-play"></i>
            <span>Try Tabs</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card sw-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What are Tabs?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Tabs are a navigation component that organizes content into separate panels within the same space. Users can click on different tab headers to switch between content sections without leaving the page. Tabs help reduce cognitive load by presenting information in digestible chunks and are commonly used in settings panels, dashboards, product pages, and documentation.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Tabs -->
<div class="sw-tabs-section-title">
    <i class="fa-solid fa-folder"></i>
    Basic Tabs <span class="badge badge-primary">Essential</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-grip"></i>
            </div>
            <div>
                <h3>Default Tabs</h3>
                <p class="card-subtitle">Underline style tabs</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-tabs-example">
            <span class="sw-tabs-example-label">Basic Tab Navigation</span>
            <div class="sw-modern-tabs" data-tab-group="basic-tabs">
                <button class="sw-tab-item active" onclick="MetroAdmin.switchSWTab(0, 'basic-tabs')">
                    <i class="fa-solid fa-house"></i> Dashboard
                </button>
                <button class="sw-tab-item" onclick="MetroAdmin.switchSWTab(1, 'basic-tabs')">
                    <i class="fa-solid fa-chart-line"></i> Analytics
                </button>
                <button class="sw-tab-item" onclick="MetroAdmin.switchSWTab(2, 'basic-tabs')">
                    <i class="fa-solid fa-users"></i> Users
                </button>
                <button class="sw-tab-item" onclick="MetroAdmin.switchSWTab(3, 'basic-tabs')">
                    <i class="fa-solid fa-gear"></i> Settings
                </button>
            </div>
            
            <div id="basic-tabs-content-0" class="sw-tab-content active">
                <div class="sw-tab-content-card">
                    <h4>Dashboard Overview</h4>
                    <p>Welcome to your dashboard. Here you can see an overview of your recent activity, key metrics, and quick access to important features. The dashboard provides a centralized location for monitoring your application's performance.</p>
                </div>
            </div>
            
            <div id="basic-tabs-content-1" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <h4>Analytics & Reports</h4>
                    <p>View detailed analytics and generate comprehensive reports. Track user engagement, conversion rates, and other key performance indicators. Data is updated in real-time to help you make informed decisions.</p>
                </div>
            </div>
            
            <div id="basic-tabs-content-2" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <h4>User Management</h4>
                    <p>Manage user accounts, roles, and permissions. View user activity logs, send notifications, and configure access levels. Keep your team organized and ensure proper access controls are in place.</p>
                </div>
            </div>
            
            <div id="basic-tabs-content-3" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <h4>System Settings</h4>
                    <p>Configure application settings, integrations, and preferences. Customize the appearance, manage API keys, and set up automated workflows. Keep your system optimized for your team's needs.</p>
                </div>
            </div>
            
            <div class="sw-tabs-helper">
                <i class="fa-solid fa-circle-info"></i>
                Click tabs to switch between content panels
            </div>
        </div>
    </div>
</div>

<!-- Pill Tabs -->
<div class="sw-tabs-section-title">
    <i class="fa-solid fa-capsules"></i>
    Pill Tabs
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-toggle-on"></i>
            </div>
            <div>
                <h3>Rounded Tabs</h3>
                <p class="card-subtitle">Pill-style tabs with background</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-tabs-example">
            <span class="sw-tabs-example-label">Pill Tab Style</span>
            <div class="sw-modern-tabs sw-pill-tabs" data-tab-group="pill-tabs">
                <button class="sw-tab-item active" onclick="MetroAdmin.switchSWTab(0, 'pill-tabs')">
                    <i class="fa-solid fa-image"></i> Images
                </button>
                <button class="sw-tab-item" onclick="MetroAdmin.switchSWTab(1, 'pill-tabs')">
                    <i class="fa-solid fa-file"></i> Documents
                </button>
                <button class="sw-tab-item" onclick="MetroAdmin.switchSWTab(2, 'pill-tabs')">
                    <i class="fa-solid fa-video"></i> Videos
                </button>
            </div>
            
            <div id="pill-tabs-content-0" class="sw-tab-content active">
                <div class="sw-tab-content-card">
                    <div class="sw-tab-stats">
                        <div class="sw-tab-stat-item">
                            <div class="sw-tab-stat-value">1,234</div>
                            <div class="sw-tab-stat-label">Total Images</div>
                        </div>
                        <div class="sw-tab-stat-item">
                            <div class="sw-tab-stat-value">2.4 GB</div>
                            <div class="sw-tab-stat-label">Storage Used</div>
                        </div>
                        <div class="sw-tab-stat-item">
                            <div class="sw-tab-stat-value">156</div>
                            <div class="sw-tab-stat-label">This Week</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="pill-tabs-content-1" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <div class="sw-tab-stats">
                        <div class="sw-tab-stat-item">
                            <div class="sw-tab-stat-value">567</div>
                            <div class="sw-tab-stat-label">Total Files</div>
                        </div>
                        <div class="sw-tab-stat-item">
                            <div class="sw-tab-stat-value">1.8 GB</div>
                            <div class="sw-tab-stat-label">Storage Used</div>
                        </div>
                        <div class="sw-tab-stat-item">
                            <div class="sw-tab-stat-value">45</div>
                            <div class="sw-tab-stat-label">This Week</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="pill-tabs-content-2" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <div class="sw-tab-stats">
                        <div class="sw-tab-stat-item">
                            <div class="sw-tab-stat-value">89</div>
                            <div class="sw-tab-stat-label">Total Videos</div>
                        </div>
                        <div class="sw-tab-stat-item">
                            <div class="sw-tab-stat-value">5.2 GB</div>
                            <div class="sw-tab-stat-label">Storage Used</div>
                        </div>
                        <div class="sw-tab-stat-item">
                            <div class="sw-tab-stat-value">12</div>
                            <div class="sw-tab-stat-label">This Week</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="sw-tabs-helper">
                <i class="fa-solid fa-circle-info"></i>
                Pill tabs with highlighted active state
            </div>
        </div>
    </div>
</div>

<!-- Border Tabs -->
<div class="tabs-section-title">
    <i class="fa-solid fa-border-all"></i>
    Border Tabs
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-square"></i>
            </div>
            <div>
                <h3>Filled Tabs</h3>
                <p class="card-subtitle">Tabs with border container</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="tabs-example">
            <span class="tabs-example-label">Border Tab Style</span>
            <div class="modern-tabs border-tabs" data-tab-group="border-tabs">
                <button class="tab-item active" onclick="switchTab(0, 'border-tabs')">
                    Profile
                </button>
                <button class="tab-item" onclick="switchTab(1, 'border-tabs')">
                    Security
                </button>
                <button class="tab-item" onclick="switchTab(2, 'border-tabs')">
                    Notifications
                </button>
            </div>
            
            <div id="border-tabs-content-0" class="sw-tab-content active">
                <div class="sw-tab-content-card">
                    <h4>Profile Information</h4>
                    <p>Update your personal information, profile picture, and bio. Keep your profile up to date so others can easily recognize and connect with you.</p>
                </div>
            </div>
            
            <div id="border-tabs-content-1" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <h4>Security Settings</h4>
                    <p>Manage your password, two-factor authentication, and login history. Ensure your account is protected with strong security measures.</p>
                </div>
            </div>
            
            <div id="border-tabs-content-2" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <h4>Notification Preferences</h4>
                    <p>Configure email notifications, push notifications, and SMS alerts. Choose which updates you want to receive and how you want to be notified.</p>
                </div>
            </div>
            
            <div class="sw-tabs-helper">
                <i class="fa-solid fa-circle-info"></i>
                Filled tabs with border container
            </div>
        </div>
    </div>
</div>

<!-- Vertical Tabs -->
<div class="tabs-section-title">
    <i class="fa-solid fa-arrows-up-down"></i>
    Vertical Tabs
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-bars-staggered"></i>
            </div>
            <div>
                <h3>Side Navigation</h3>
                <p class="card-subtitle">Vertical tab layout</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="tabs-example">
            <span class="tabs-example-label">Vertical Tab Layout</span>
            <div class="vertical-tabs-layout">
                <div class="vertical-tabs-nav">
                    <button class="tab-item active" onclick="switchVerticalTab(0)">
                        <i class="fa-solid fa-house" style="margin-right: 8px;"></i> General
                    </button>
                    <button class="tab-item" onclick="switchVerticalTab(1)">
                        <i class="fa-solid fa-paintbrush" style="margin-right: 8px;"></i> Appearance
                    </button>
                    <button class="tab-item" onclick="switchVerticalTab(2)">
                        <i class="fa-solid fa-bell" style="margin-right: 8px;"></i> Notifications
                    </button>
                    <button class="tab-item" onclick="switchVerticalTab(3)">
                        <i class="fa-solid fa-shield-halved" style="margin-right: 8px;"></i> Privacy
                    </button>
                </div>
                <div class="vertical-tabs-content">
                    <div id="vertical-tabs-content-0" class="sw-tab-content active">
                        <h4>General Settings</h4>
                        <p>Configure general application settings including language, timezone, and default preferences. These settings apply globally across your account.</p>
                    </div>
                    <div id="vertical-tabs-content-1" class="sw-tab-content">
                        <h4>Appearance Settings</h4>
                        <p>Customize the look and feel of your application. Choose themes, adjust font sizes, and configure dark mode preferences.</p>
                    </div>
                    <div id="vertical-tabs-content-2" class="sw-tab-content">
                        <h4>Notification Settings</h4>
                        <p>Manage how and when you receive notifications. Configure email alerts, push notifications, and in-app notification preferences.</p>
                    </div>
                    <div id="vertical-tabs-content-3" class="sw-tab-content">
                        <h4>Privacy Settings</h4>
                        <p>Control who can see your information and activity. Manage visibility settings, blocked users, and data sharing preferences.</p>
                    </div>
                </div>
            </div>
            <div class="tabs-helper">
                <i class="fa-solid fa-circle-info"></i>
                Vertical tabs for side navigation
            </div>
        </div>
    </div>
</div>

<!-- Icon Tabs -->
<div class="tabs-section-title">
    <i class="fa-solid fa-icons"></i>
    Icon Tabs
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-shapes"></i>
            </div>
            <div>
                <h3>Icon-Only Tabs</h3>
                <p class="card-subtitle">Tabs with centered icons</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="tabs-example">
            <span class="tabs-example-label">Icon Tab Style</span>
            <div class="modern-tabs icon-tabs" data-tab-group="icon-tabs">
                <button class="tab-item active" onclick="switchTab(0, 'icon-tabs')">
                    <i class="fa-solid fa-house"></i>
                    <span>Home</span>
                </button>
                <button class="tab-item" onclick="switchTab(1, 'icon-tabs')">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <span>Search</span>
                </button>
                <button class="tab-item" onclick="switchTab(2, 'icon-tabs')">
                    <i class="fa-solid fa-heart"></i>
                    <span>Favorites</span>
                </button>
                <button class="tab-item" onclick="switchTab(3, 'icon-tabs')">
                    <i class="fa-solid fa-user"></i>
                    <span>Profile</span>
                </button>
            </div>
            
            <div id="icon-tabs-content-0" class="sw-tab-content active">
                <div class="sw-tab-content-card">
                    <h4>Home Feed</h4>
                    <p>Welcome to your home feed. Stay updated with the latest posts, announcements, and activities from your network and followed topics.</p>
                </div>
            </div>
            
            <div id="icon-tabs-content-1" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <h4>Search & Discovery</h4>
                    <p>Find content, users, and resources. Use advanced filters to narrow down your search results and discover new content.</p>
                </div>
            </div>
            
            <div id="icon-tabs-content-2" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <h4>Favorite Items</h4>
                    <p>Access your saved and favorited content. Organize your favorites into collections for easy access later.</p>
                </div>
            </div>
            
            <div id="icon-tabs-content-3" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <h4>Your Profile</h4>
                    <p>View and edit your profile information. Manage your public presence and showcase your work and achievements.</p>
                </div>
            </div>
            
            <div class="sw-tabs-helper">
                <i class="fa-solid fa-circle-info"></i>
                Icon tabs with labels below
            </div>
        </div>
    </div>
</div>

<!-- Tabs with Badge -->
<div class="tabs-section-title">
    <i class="fa-solid fa-circle-dot"></i>
    Tabs with Badge
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div>
                <h3>Notification Badges</h3>
                <p class="card-subtitle">Tabs with count indicators</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="tabs-example">
            <span class="tabs-example-label">Tabs with Badges</span>
            <div class="modern-tabs tabs-with-badge" data-tab-group="badge-tabs">
                <button class="tab-item active" onclick="switchTab(0, 'badge-tabs')">
                    Inbox <span class="sw-tab-badge">12</span>
                </button>
                <button class="tab-item" onclick="switchTab(1, 'badge-tabs')">
                    Sent <span class="tab-badge tab-badge-success">5</span>
                </button>
                <button class="tab-item" onclick="switchTab(2, 'badge-tabs')">
                    Drafts <span class="tab-badge tab-badge-warning">3</span>
                </button>
                <button class="tab-item" onclick="switchTab(3, 'badge-tabs')">
                    Trash
                </button>
            </div>
            
            <div id="badge-tabs-content-0" class="sw-tab-content active">
                <div class="sw-tab-content-card">
                    <h4>Inbox Messages</h4>
                    <p>You have 12 unread messages. Review your inbox to stay updated with important communications and respond to pending requests.</p>
                </div>
            </div>
            
            <div id="badge-tabs-content-1" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <h4>Sent Messages</h4>
                    <p>View messages you've sent. Track delivery status and see when recipients have read your messages.</p>
                </div>
            </div>
            
            <div id="badge-tabs-content-2" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <h4>Draft Messages</h4>
                    <p>You have 3 draft messages. Continue editing and send them when ready.</p>
                </div>
            </div>
            
            <div id="badge-tabs-content-3" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <h4>Trash</h4>
                    <p>Deleted messages are kept here for 30 days before permanent removal. Restore or permanently delete items.</p>
                </div>
            </div>
            
            <div class="sw-tabs-helper">
                <i class="fa-solid fa-circle-info"></i>
                Badges show unread counts
            </div>
        </div>
    </div>
</div>

<!-- Advanced Tabs Demos -->
<div class="tabs-section-title">
    <i class="fa-solid fa-layer-group"></i>
    Advanced Demos <span class="badge badge-success">New</span>
</div>

<!-- Dashboard Tabs -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-chart-pie"></i>
            </div>
            <div>
                <h3>Dashboard Tabs</h3>
                <p class="card-subtitle">Analytics dashboard with tabbed interface</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="tabs-example">
            <span class="tabs-example-label">Analytics Dashboard</span>
            <div class="modern-tabs" data-tab-group="dashboard-tabs">
                <button class="tab-item active" onclick="switchTab(0, 'dashboard-tabs')">
                    <i class="fa-solid fa-chart-line"></i> Overview
                </button>
                <button class="tab-item" onclick="switchTab(1, 'dashboard-tabs')">
                    <i class="fa-solid fa-users"></i> Users
                </button>
                <button class="tab-item" onclick="switchTab(2, 'dashboard-tabs')">
                    <i class="fa-solid fa-dollar-sign"></i> Revenue
                </button>
                <button class="tab-item" onclick="switchTab(3, 'dashboard-tabs')">
                    <i class="fa-solid fa-bullseye"></i> Goals
                </button>
            </div>
            
            <div id="dashboard-tabs-content-0" class="sw-tab-content active">
                <div class="sw-tab-content-card">
                    <div class="sw-tab-stats">
                        <div class="sw-tab-stat-item">
                            <div class="sw-tab-stat-value" style="color: var(--success);">$48,295</div>
                            <div class="sw-tab-stat-label">Total Revenue</div>
                        </div>
                        <div class="sw-tab-stat-item">
                            <div class="sw-tab-stat-value" style="color: var(--accent);">2,456</div>
                            <div class="sw-tab-stat-label">Active Users</div>
                        </div>
                        <div class="sw-tab-stat-item">
                            <div class="sw-tab-stat-value" style="color: var(--warning);">89.3%</div>
                            <div class="sw-tab-stat-label">Conversion Rate</div>
                        </div>
                    </div>
                    <div style="background: rgba(99, 102, 241, 0.05); border-radius: 8px; padding: 20px; margin-top: 16px; border-left: 4px solid var(--accent);">
                        <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px;">
                            <i class="fa-solid fa-trending-up" style="color: var(--success); font-size: 20px;"></i>
                            <h4 style="margin: 0; color: var(--success);">+23.5% Growth</h4>
                        </div>
                        <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Your metrics show significant improvement compared to last month. Revenue increased by 23.5%, user engagement up by 18.2%, and conversion rate improved by 5.7%.</p>
                    </div>
                </div>
            </div>
            
            <div id="dashboard-tabs-content-1" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <div class="sw-tab-stats">
                        <div class="sw-tab-stat-item">
                            <div class="sw-tab-stat-value">1,845</div>
                            <div class="sw-tab-stat-label">New Users</div>
                        </div>
                        <div class="sw-tab-stat-item">
                            <div class="sw-tab-stat-value">611</div>
                            <div class="sw-tab-stat-label">Churned</div>
                        </div>
                        <div class="sw-tab-stat-item">
                            <div class="sw-tab-stat-value" style="color: var(--success);">75%</div>
                            <div class="sw-tab-stat-label">Retention</div>
                        </div>
                    </div>
                    <div style="margin-top: 16px;">
                        <div style="margin-bottom: 12px;">
                            <div style="display: flex; justify-content: space-between; font-size: 13px; margin-bottom: 6px;">
                                <span style="color: var(--text-secondary);">Active Users</span>
                                <span style="font-weight: 600; color: var(--accent);">2,456 / 3,200</span>
                            </div>
                            <div style="height: 8px; background: rgba(0,0,0,0.05); border-radius: 4px; overflow: hidden;">
                                <div style="height: 100%; width: 77%; background: var(--accent); border-radius: 4px;"></div>
                            </div>
                        </div>
                        <div style="margin-bottom: 12px;">
                            <div style="display: flex; justify-content: space-between; font-size: 13px; margin-bottom: 6px;">
                                <span style="color: var(--text-secondary);">Premium Users</span>
                                <span style="font-weight: 600; color: var(--success);">892 / 3,200</span>
                            </div>
                            <div style="height: 8px; background: rgba(0,0,0,0.05); border-radius: 4px; overflow: hidden;">
                                <div style="height: 100%; width: 28%; background: var(--success); border-radius: 4px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="dashboard-tabs-content-2" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <div class="sw-tab-stats">
                        <div class="sw-tab-stat-item">
                            <div class="sw-tab-stat-value" style="color: var(--success);">$12,847</div>
                            <div class="sw-tab-stat-label">This Month</div>
                        </div>
                        <div class="sw-tab-stat-item">
                            <div class="sw-tab-stat-value" style="color: var(--accent);">$8,432</div>
                            <div class="sw-tab-stat-label">Last Month</div>
                        </div>
                        <div class="sw-tab-stat-item">
                            <div class="sw-tab-stat-value" style="color: var(--warning);">$52.3</div>
                            <div class="sw-tab-stat-label">Avg. Order</div>
                        </div>
                    </div>
                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; margin-top: 16px;">
                        <div style="background: rgba(16, 185, 129, 0.1); border-radius: 8px; padding: 12px; text-align: center;">
                            <i class="fa-solid fa-credit-card" style="color: var(--success); font-size: 20px; margin-bottom: 6px;"></i>
                            <div style="font-size: 12px; color: var(--text-secondary);">Credit Card</div>
                            <div style="font-size: 18px; font-weight: 700; color: var(--success);">62%</div>
                        </div>
                        <div style="background: rgba(99, 102, 241, 0.1); border-radius: 8px; padding: 12px; text-align: center;">
                            <i class="fa-solid fa-money-bill" style="color: var(--accent); font-size: 20px; margin-bottom: 6px;"></i>
                            <div style="font-size: 12px; color: var(--text-secondary);">PayPal</div>
                            <div style="font-size: 18px; font-weight: 700; color: var(--accent);">28%</div>
                        </div>
                        <div style="background: rgba(255, 152, 0, 0.1); border-radius: 8px; padding: 12px; text-align: center;">
                            <i class="fa-solid fa-wallet" style="color: var(--warning); font-size: 20px; margin-bottom: 6px;"></i>
                            <div style="font-size: 12px; color: var(--text-secondary);">Other</div>
                            <div style="font-size: 18px; font-weight: 700; color: var(--warning);">10%</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="dashboard-tabs-content-3" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <h4 style="margin-bottom: 16px;">Monthly Goals Progress</h4>
                    <div style="margin-bottom: 16px;">
                        <div style="display: flex; justify-content: space-between; font-size: 13px; margin-bottom: 8px;">
                            <span style="color: var(--text-secondary);"><i class="fa-solid fa-users" style="margin-right: 6px;"></i>New Users</span>
                            <span style="font-weight: 600; color: var(--success);">75%</span>
                        </div>
                        <div style="height: 10px; background: rgba(0,0,0,0.05); border-radius: 5px; overflow: hidden;">
                            <div style="height: 100%; width: 75%; background: var(--success); border-radius: 5px; transition: width 0.5s ease;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 16px;">
                        <div style="display: flex; justify-content: space-between; font-size: 13px; margin-bottom: 8px;">
                            <span style="color: var(--text-secondary);"><i class="fa-solid fa-dollar-sign" style="margin-right: 6px;"></i>Revenue Target</span>
                            <span style="font-weight: 600; color: var(--accent);">62%</span>
                        </div>
                        <div style="height: 10px; background: rgba(0,0,0,0.05); border-radius: 5px; overflow: hidden;">
                            <div style="height: 100%; width: 62%; background: var(--accent); border-radius: 5px; transition: width 0.5s ease;"></div>
                        </div>
                    </div>
                    <div>
                        <div style="display: flex; justify-content: space-between; font-size: 13px; margin-bottom: 8px;">
                            <span style="color: var(--text-secondary);"><i class="fa-solid fa-star" style="margin-right: 6px;"></i>Customer Satisfaction</span>
                            <span style="font-weight: 600; color: var(--warning);">91%</span>
                        </div>
                        <div style="height: 10px; background: rgba(0,0,0,0.05); border-radius: 5px; overflow: hidden;">
                            <div style="height: 100%; width: 91%; background: var(--warning); border-radius: 5px; transition: width 0.5s ease;"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="sw-tabs-helper">
                <i class="fa-solid fa-circle-info"></i>
                Real-time analytics dashboard with tabbed navigation
            </div>
        </div>
    </div>
</div>

<!-- Scrollable Tabs -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-arrows-left-right"></i>
            </div>
            <div>
                <h3>Scrollable Tabs</h3>
                <p class="card-subtitle">Horizontally scrollable tabs for many items</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="tabs-example">
            <span class="tabs-example-label">Product Categories</span>
            <div class="modern-tabs" data-tab-group="scrollable-tabs" style="overflow-x: auto; scrollbar-width: thin;">
                <button class="tab-item active" onclick="switchTab(0, 'scrollable-tabs')">
                    <i class="fa-solid fa-laptop"></i> Electronics
                </button>
                <button class="tab-item" onclick="switchTab(1, 'scrollable-tabs')">
                    <i class="fa-solid fa-shirt"></i> Clothing
                </button>
                <button class="tab-item" onclick="switchTab(2, 'scrollable-tabs')">
                    <i class="fa-solid fa-couch"></i> Furniture
                </button>
                <button class="tab-item" onclick="switchTab(3, 'scrollable-tabs')">
                    <i class="fa-solid fa-book"></i> Books
                </button>
                <button class="tab-item" onclick="switchTab(4, 'scrollable-tabs')">
                    <i class="fa-solid fa-futbol"></i> Sports
                </button>
                <button class="tab-item" onclick="switchTab(5, 'scrollable-tabs')">
                    <i class="fa-solid fa-music"></i> Music
                </button>
                <button class="tab-item" onclick="switchTab(6, 'scrollable-tabs')">
                    <i class="fa-solid fa-gamepad"></i> Gaming
                </button>
                <button class="tab-item" onclick="switchTab(7, 'scrollable-tabs')">
                    <i class="fa-solid fa-car"></i> Automotive
                </button>
            </div>
            
            <div id="scrollable-tabs-content-0" class="sw-tab-content active">
                <div class="sw-tab-content-card">
                    <h4>Electronics Category</h4>
                    <p>Browse our wide selection of electronics including smartphones, laptops, tablets, cameras, and accessories. Find the latest tech from top brands.</p>
                    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px; margin-top: 16px;">
                        <div style="background: var(--surface); border-radius: 8px; padding: 12px; text-align: center; border: 1px solid var(--border-color);">
                            <i class="fa-solid fa-mobile-screen" style="font-size: 24px; color: var(--accent); margin-bottom: 8px;"></i>
                            <div style="font-size: 12px; font-weight: 600;">Smartphones</div>
                        </div>
                        <div style="background: var(--surface); border-radius: 8px; padding: 12px; text-align: center; border: 1px solid var(--border-color);">
                            <i class="fa-solid fa-laptop" style="font-size: 24px; color: var(--accent); margin-bottom: 8px;"></i>
                            <div style="font-size: 12px; font-weight: 600;">Laptops</div>
                        </div>
                        <div style="background: var(--surface); border-radius: 8px; padding: 12px; text-align: center; border: 1px solid var(--border-color);">
                            <i class="fa-solid fa-tablet" style="font-size: 24px; color: var(--accent); margin-bottom: 8px;"></i>
                            <div style="font-size: 12px; font-weight: 600;">Tablets</div>
                        </div>
                        <div style="background: var(--surface); border-radius: 8px; padding: 12px; text-align: center; border: 1px solid var(--border-color);">
                            <i class="fa-solid fa-headphones" style="font-size: 24px; color: var(--accent); margin-bottom: 8px;"></i>
                            <div style="font-size: 12px; font-weight: 600;">Accessories</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="scrollable-tabs-content-1" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <h4>Clothing & Fashion</h4>
                    <p>Discover the latest fashion trends for men, women, and children. From casual wear to formal attire, find your perfect style.</p>
                </div>
            </div>
            
            <div id="scrollable-tabs-content-2" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <h4>Home & Furniture</h4>
                    <p>Transform your living space with our curated collection of furniture, decor, and home essentials.</p>
                </div>
            </div>
            
            <div id="scrollable-tabs-content-3" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <h4>Books & Literature</h4>
                    <p>Explore thousands of titles across all genres. From bestsellers to classics, find your next great read.</p>
                </div>
            </div>
            
            <div id="scrollable-tabs-content-4" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <h4>Sports & Outdoors</h4>
                    <p>Gear up for your next adventure with our sports equipment, outdoor gear, and fitness accessories.</p>
                </div>
            </div>
            
            <div id="scrollable-tabs-content-5" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <h4>Music & Instruments</h4>
                    <p>Find musical instruments, recordings, and accessories for musicians of all skill levels.</p>
                </div>
            </div>
            
            <div id="scrollable-tabs-content-6" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <h4>Gaming & Entertainment</h4>
                    <p>Level up your gaming experience with the latest consoles, games, and gaming accessories.</p>
                </div>
            </div>
            
            <div id="scrollable-tabs-content-7" class="sw-tab-content">
                <div class="sw-tab-content-card">
                    <h4>Automotive Parts</h4>
                    <p>Quality automotive parts, accessories, and tools for car enthusiasts and professionals.</p>
                </div>
            </div>
            
            <div class="sw-tabs-helper">
                <i class="fa-solid fa-circle-info"></i>
                Scroll horizontally to view all categories
            </div>
        </div>
    </div>
</div>

<!-- Interactive Tabs Builder -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-danger">
                <i class="fa-solid fa-wand-magic-sparkles"></i>
            </div>
            <div>
                <h3>Interactive Tabs Builder</h3>
                <p class="card-subtitle">Customize and preview tabs in real-time</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-tabs-example">
            <span class="sw-tabs-example-label">Tab Configuration</span>
            
            <!-- Controls -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px; margin-bottom: 24px; padding: 20px; background: rgba(0,0,0,0.02); border-radius: 8px; border: 1px solid var(--border-color);">
                <div>
                    <label style="display: block; font-size: 12px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px;">Tab Style</label>
                    <select id="tabStyle" onchange="MetroAdmin.updateSWTabsBuilder({
                        style: this.value,
                        count: parseInt(document.getElementById('tabCount').value),
                        showIcons: document.getElementById('showIcons').value === 'yes',
                        showBadges: document.getElementById('showBadges').value === 'yes'
                    })" style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 6px; font-size: 14px; background: var(--surface);">
                        <option value="default">Default (Underline)</option>
                        <option value="pill">Pill Style</option>
                        <option value="border">Border Style</option>
                        <option value="icon">Icon Style</option>
                    </select>
                </div>
                
                <div>
                    <label style="display: block; font-size: 12px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px;">Tab Count</label>
                    <input type="range" id="tabCount" min="2" max="6" value="4" oninput="document.getElementById('tabCountDisplay').textContent = this.value + ' tabs'; MetroAdmin.updateSWTabsBuilder({
                        style: document.getElementById('tabStyle').value,
                        count: parseInt(this.value),
                        showIcons: document.getElementById('showIcons').value === 'yes',
                        showBadges: document.getElementById('showBadges').value === 'yes'
                    })" style="width: 100%;">
                    <div style="font-size: 13px; color: var(--text-secondary); margin-top: 4px; font-weight: 600;" id="tabCountDisplay">4 tabs</div>
                </div>
                
                <div>
                    <label style="display: block; font-size: 12px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px;">Show Icons</label>
                    <select id="showIcons" onchange="MetroAdmin.updateSWTabsBuilder({
                        style: document.getElementById('tabStyle').value,
                        count: parseInt(document.getElementById('tabCount').value),
                        showIcons: this.value === 'yes',
                        showBadges: document.getElementById('showBadges').value === 'yes'
                    })" style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 6px; font-size: 14px; background: var(--surface);">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                
                <div>
                    <label style="display: block; font-size: 12px; font-weight: 600; color: var(--text-secondary); margin-bottom: 6px; text-transform: uppercase; letter-spacing: 0.5px;">Show Badges</label>
                    <select id="showBadges" onchange="MetroAdmin.updateSWTabsBuilder({
                        style: document.getElementById('tabStyle').value,
                        count: parseInt(document.getElementById('tabCount').value),
                        showIcons: document.getElementById('showIcons').value === 'yes',
                        showBadges: this.value === 'yes'
                    })" style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 6px; font-size: 14px; background: var(--surface);">
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>
                </div>
            </div>
            
            <!-- Live Preview -->
            <div id="tabsBuilderPreview">
                <div class="sw-modern-tabs" data-tab-group="builder-tabs">
                    <button class="sw-tab-item active" onclick="MetroAdmin.switchSWTab(0, 'builder-tabs')">
                        <i class="fa-solid fa-house"></i> Dashboard
                    </button>
                    <button class="sw-tab-item" onclick="MetroAdmin.switchSWTab(1, 'builder-tabs')">
                        <i class="fa-solid fa-chart-line"></i> Analytics
                    </button>
                    <button class="sw-tab-item" onclick="MetroAdmin.switchSWTab(2, 'builder-tabs')">
                        <i class="fa-solid fa-users"></i> Users
                    </button>
                    <button class="sw-tab-item" onclick="MetroAdmin.switchSWTab(3, 'builder-tabs')">
                        <i class="fa-solid fa-gear"></i> Settings
                    </button>
                </div>
                
                <div id="builder-tabs-content-0" class="sw-tab-content active">
                    <div class="sw-tab-content-card">
                        <h4>Dashboard Content</h4>
                        <p>This is the dashboard tab content. Configure the tabs above to see different styles and configurations.</p>
                    </div>
                </div>
                
                <div id="builder-tabs-content-1" class="sw-tab-content">
                    <div class="sw-tab-content-card">
                        <h4>Analytics Content</h4>
                        <p>View detailed analytics and performance metrics here.</p>
                    </div>
                </div>
                
                <div id="builder-tabs-content-2" class="sw-tab-content">
                    <div class="sw-tab-content-card">
                        <h4>Users Content</h4>
                        <p>Manage user accounts and permissions.</p>
                    </div>
                </div>
                
                <div id="builder-tabs-content-3" class="sw-tab-content">
                    <div class="sw-tab-content-card">
                        <h4>Settings Content</h4>
                        <p>Configure application settings and preferences.</p>
                    </div>
                </div>
            </div>
            
            <div class="sw-tabs-helper">
                <i class="fa-solid fa-circle-info"></i>
                Adjust the controls above to customize tab appearance
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="tabs-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="tabs-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>JavaScript API</h3>
                    <p class="card-subtitle">Tab control methods</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <pre style="background: rgba(0, 0, 0, 0.04); padding: 16px; border-radius: 8px; font-size: 11px; overflow-x: auto; line-height: 1.6;"><code>// Switch tab with SW Metro Template
MetroAdmin.switchSWTab(index, group);

// Switch vertical tab
MetroAdmin.switchSWVerticalTab(index);

// Generate tabs dynamically
MetroAdmin.generateSWTabs({
  group: 'my-tabs',
  tabs: [
    { icon: 'fa-solid fa-house', label: 'Home' },
    { icon: 'fa-solid fa-gear', label: 'Settings' }
  ],
  style: 'default' // default, pill, border, icon
});

// Update tabs builder
MetroAdmin.updateSWTabsBuilder({
  style: 'pill',
  count: 4,
  showIcons: true,
  showBadges: false
});

// Keyboard navigation (auto-enabled)
// ArrowLeft, ArrowRight, Home, End keys</code></pre>
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
                    <p class="card-subtitle">Tab design guidelines</p>
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
                        <td><strong>Clear labels</strong></td>
                        <td>Easy navigation</td>
                    </tr>
                    <tr>
                        <td><strong>Limit tabs</strong></td>
                        <td>Prevent clutter (max 7)</td>
                    </tr>
                    <tr>
                        <td><strong>Active indicator</strong></td>
                        <td>Clear position</td>
                    </tr>
                    <tr>
                        <td><strong>Keyboard support</strong></td>
                        <td>Accessibility</td>
                    </tr>
                    <tr>
                        <td><strong>Persist state</strong></td>
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
// Tabs page initialization
$(document).ready(function() {
    console.log('🏷️ SW Tabs page loaded successfully');
    
    // Update tab builder count display
    $('#tabCount').on('input', function() {
        $('#tabCountDisplay').textContent = `${$(this).val()} tabs`;
    });
    
    // Try Tabs button functionality
    setTimeout(() => {
        if (typeof MetroAdmin !== 'undefined') {
            MetroAdmin.switchSWTab(0, 'basic-tabs');
            MetroAdmin.showSWInfoToast('Welcome to the Tabs demo page!');
        }
    }, 1000);
});
</script>
@endpush