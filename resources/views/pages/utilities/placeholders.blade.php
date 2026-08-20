@extends('layouts.app')

@section('title', 'Placeholders')
@section('breadcrumb', 'Placeholders')



@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Placeholders</h1>
        <p>Skeleton loading states that provide visual feedback while content is being fetched or rendered</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary" onclick="MetroAdmin.toggleSWAllPlaceholders()">
            <i class="fa-solid fa-eye"></i>
            <span>Toggle Loading</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card sw-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What are Placeholders?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Placeholders (also known as skeleton screens or loading states) are visual indicators that show users content is loading. They mimic the layout of actual content with animated gray blocks, providing a better user experience than traditional spinners by giving users a preview of the content structure before it appears.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Placeholders -->
<div class="sw-placeholders-section-title">
    <i class="fa-solid fa-square"></i>
    Basic Placeholders <span class="badge badge-primary">Essential</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-text-width"></i>
            </div>
            <div>
                <h3>Text Placeholders</h3>
                <p class="card-subtitle">Loading states for text content</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-placeholders-example">
            <span class="sw-placeholders-example-label">Placeholder Sizes</span>
            <div style="margin-bottom: 20px;">
                <div class="sw-placeholder sw-placeholder-xs sw-placeholder-w100" style="margin-bottom: 8px;"></div>
                <div class="sw-placeholder sw-placeholder-sm sw-placeholder-w75" style="margin-bottom: 8px;"></div>
                <div class="sw-placeholder sw-placeholder-md sw-placeholder-w50" style="margin-bottom: 8px;"></div>
                <div class="sw-placeholder sw-placeholder-lg sw-placeholder-w75" style="margin-bottom: 8px;"></div>
                <div class="sw-placeholder sw-placeholder-xl sw-placeholder-w100"></div>
            </div>
            <div class="sw-placeholders-helper">
                <i class="fa-solid fa-circle-info"></i>
                Heights: 8px, 12px, 16px, 20px, 24px
            </div>
        </div>
    </div>
</div>

<!-- Placeholder Widths -->
<div class="sw-placeholders-section-title">
    <i class="fa-solid fa-expand"></i>
    Placeholder Widths
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-arrows-left-right"></i>
            </div>
            <div>
                <h3>Width Variations</h3>
                <p class="card-subtitle">25%, 50%, 75%, 100%, Auto</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-placeholders-example">
            <span class="sw-placeholders-example-label">Width Options</span>
            <div style="margin-bottom: 16px;">
                <div style="font-size: 12px; color: var(--text-secondary); margin-bottom: 4px;">25% Width</div>
                <div class="sw-placeholder sw-placeholder-md sw-placeholder-w25"></div>
            </div>
            <div style="margin-bottom: 16px;">
                <div style="font-size: 12px; color: var(--text-secondary); margin-bottom: 4px;">50% Width</div>
                <div class="sw-placeholder sw-placeholder-md sw-placeholder-w50"></div>
            </div>
            <div style="margin-bottom: 16px;">
                <div style="font-size: 12px; color: var(--text-secondary); margin-bottom: 4px;">75% Width</div>
                <div class="sw-placeholder sw-placeholder-md sw-placeholder-w75"></div>
            </div>
            <div style="margin-bottom: 16px;">
                <div style="font-size: 12px; color: var(--text-secondary); margin-bottom: 4px;">100% Width</div>
                <div class="sw-placeholder sw-placeholder-md sw-placeholder-w100"></div>
            </div>
            <div>
                <div style="font-size: 12px; color: var(--text-secondary); margin-bottom: 4px;">Auto Width</div>
                <div class="sw-placeholder sw-placeholder-md sw-placeholder-w-auto">Auto-sized content</div>
            </div>
            <div class="sw-placeholders-helper">
                <i class="fa-solid fa-circle-info"></i>
                Use percentage or auto width classes
            </div>
        </div>
    </div>
</div>

<!-- Placeholder Shapes -->
<div class="sw-placeholders-section-title">
    <i class="fa-solid fa-shapes"></i>
    Placeholder Shapes
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-circle"></i>
            </div>
            <div>
                <h3>Shape Variations</h3>
                <p class="card-subtitle">Square, rounded, circle</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-placeholders-example">
            <span class="sw-placeholders-example-label">Different Shapes</span>
            <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 20px;">
                <div style="text-align: center;">
                    <div class="sw-placeholder" style="width: 48px; height: 48px; border-radius: 4px; margin-bottom: 8px;"></div>
                    <div style="font-size: 11px; color: var(--text-secondary);">Square</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-placeholder sw-placeholder-rounded" style="width: 48px; height: 48px; margin-bottom: 8px;"></div>
                    <div style="font-size: 11px; color: var(--text-secondary);">Rounded</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-placeholder sw-placeholder-circle" style="width: 48px; height: 48px; margin-bottom: 8px;"></div>
                    <div style="font-size: 11px; color: var(--text-secondary);">Circle</div>
                </div>
            </div>
            <div class="sw-placeholders-helper">
                <i class="fa-solid fa-circle-info"></i>
                border-radius controls the shape
            </div>
        </div>
    </div>
</div>

<!-- Card Placeholder -->
<div class="sw-placeholders-section-title">
    <i class="fa-solid fa-id-card"></i>
    Card Placeholder
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-image"></i>
            </div>
            <div>
                <h3>Content Card Loading</h3>
                <p class="card-subtitle">Image, title, text structure</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-placeholders-example">
            <span class="sw-placeholders-example-label">Card Skeleton</span>
            <div class="sw-placeholder-card">
                <div class="sw-placeholder-card-image"></div>
                <div class="sw-placeholder-card-title"></div>
                <div class="sw-placeholder-card-text"></div>
                <div class="sw-placeholder-card-text"></div>
                <div class="sw-placeholder-card-text"></div>
            </div>
            <div class="sw-placeholders-helper">
                <i class="fa-solid fa-circle-info"></i>
                Mimics card with image and text
            </div>
        </div>
    </div>
</div>

<!-- Table Placeholder -->
<div class="sw-placeholders-section-title">
    <i class="fa-solid fa-table"></i>
    Table Placeholder
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-list"></i>
            </div>
            <div>
                <h3>Data Table Loading</h3>
                <p class="card-subtitle">Headers and rows skeleton</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-placeholders-example">
            <span class="sw-placeholders-example-label">Table Skeleton</span>
            <table class="sw-placeholder-table">
                <thead>
                    <tr>
                        <th><div class="sw-placeholder sw-placeholder-table-header"></div></th>
                        <th><div class="sw-placeholder sw-placeholder-table-header"></div></th>
                        <th><div class="sw-placeholder sw-placeholder-table-header"></div></th>
                        <th><div class="sw-placeholder sw-placeholder-table-header"></div></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><div class="sw-placeholder sw-placeholder-table-row"></div></td>
                        <td><div class="sw-placeholder sw-placeholder-table-row"></div></td>
                        <td><div class="sw-placeholder sw-placeholder-table-row"></div></td>
                        <td><div class="sw-placeholder sw-placeholder-table-row"></div></td>
                    </tr>
                    <tr>
                        <td><div class="sw-placeholder sw-placeholder-table-row"></div></td>
                        <td><div class="sw-placeholder sw-placeholder-table-row"></div></td>
                        <td><div class="sw-placeholder sw-placeholder-table-row"></div></td>
                        <td><div class="sw-placeholder sw-placeholder-table-row"></div></td>
                    </tr>
                    <tr>
                        <td><div class="sw-placeholder sw-placeholder-table-row"></div></td>
                        <td><div class="sw-placeholder sw-placeholder-table-row"></div></td>
                        <td><div class="sw-placeholder sw-placeholder-table-row"></div></td>
                        <td><div class="sw-placeholder sw-placeholder-table-row"></div></td>
                    </tr>
                </tbody>
            </table>
            <div class="sw-placeholders-helper">
                <i class="fa-solid fa-circle-info"></i>
                Table structure with loading blocks
            </div>
        </div>
    </div>
</div>

<!-- List Placeholder -->
<div class="sw-placeholders-section-title">
    <i class="fa-solid fa-list-ul"></i>
    List Placeholder
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-user-friends"></i>
            </div>
            <div>
                <h3>List Items Loading</h3>
                <p class="card-subtitle">Avatar and text structure</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-placeholders-example">
            <span class="sw-placeholders-example-label">List Skeleton</span>
            <div class="sw-placeholder-list-item">
                <div class="sw-placeholder-list-avatar"></div>
                <div class="sw-placeholder-list-content">
                    <div class="sw-placeholder-list-title"></div>
                    <div class="sw-placeholder-list-desc"></div>
                </div>
            </div>
            <div class="sw-placeholder-list-item">
                <div class="sw-placeholder-list-avatar"></div>
                <div class="sw-placeholder-list-content">
                    <div class="sw-placeholder-list-title"></div>
                    <div class="sw-placeholder-list-desc"></div>
                </div>
            </div>
            <div class="sw-placeholder-list-item">
                <div class="sw-placeholder-list-avatar"></div>
                <div class="sw-placeholder-list-content">
                    <div class="sw-placeholder-list-title"></div>
                    <div class="sw-placeholder-list-desc"></div>
                </div>
            </div>
            <div class="sw-placeholders-helper">
                <i class="fa-solid fa-circle-info"></i>
                Avatar with title and description
            </div>
        </div>
    </div>
</div>

<!-- Profile Placeholder -->
<div class="sw-placeholders-section-title">
    <i class="fa-solid fa-user-circle"></i>
    Profile Placeholder
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-user"></i>
            </div>
            <div>
                <h3>User Profile Loading</h3>
                <p class="card-subtitle">Avatar, name, email structure</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-placeholders-example">
            <span class="sw-placeholders-example-label">Profile Skeleton</span>
            <div class="sw-placeholder-profile">
                <div class="sw-placeholder-profile-avatar"></div>
                <div class="sw-placeholder-profile-name"></div>
                <div class="sw-placeholder-profile-email"></div>
            </div>
            <div class="sw-placeholders-helper">
                <i class="fa-solid fa-circle-info"></i>
                Centered profile information
            </div>
        </div>
    </div>
</div>

<!-- Stats Placeholder -->
<div class="sw-placeholders-section-title">
    <i class="fa-solid fa-chart-bar"></i>
    Stats Placeholder
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-analytics"></i>
            </div>
            <div>
                <h3>Statistics Loading</h3>
                <p class="card-subtitle">Dashboard metrics skeleton</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-placeholders-example">
            <span class="sw-placeholders-example-label">Stats Skeleton</span>
            <div class="sw-placeholder-stats">
                <div class="sw-placeholder-stat-item">
                    <div class="sw-placeholder-stat-value"></div>
                    <div class="sw-placeholder-stat-label"></div>
                </div>
                <div class="sw-placeholder-stat-item">
                    <div class="sw-placeholder-stat-value"></div>
                    <div class="sw-placeholder-stat-label"></div>
                </div>
                <div class="sw-placeholder-stat-item">
                    <div class="sw-placeholder-stat-value"></div>
                    <div class="sw-placeholder-stat-label"></div>
                </div>
            </div>
            <div class="sw-placeholders-helper">
                <i class="fa-solid fa-circle-info"></i>
                Dashboard metrics loading state
            </div>
        </div>
    </div>
</div>

<!-- Chat Placeholder -->
<div class="sw-placeholders-section-title">
    <i class="fa-solid fa-comments"></i>
    Chat Placeholder
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-message"></i>
            </div>
            <div>
                <h3>Chat Messages Loading</h3>
                <p class="card-subtitle">Conversation skeleton</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-placeholders-example">
            <span class="sw-placeholders-example-label">Chat Skeleton</span>
            <div class="sw-placeholder-chat">
                <div class="sw-placeholder-chat-message">
                    <div class="sw-placeholder-chat-avatar"></div>
                    <div class="sw-placeholder-chat-bubble">
                        <div class="sw-placeholder-chat-text"></div>
                        <div class="sw-placeholder-chat-text"></div>
                    </div>
                </div>
                <div class="sw-placeholder-chat-message sent">
                    <div class="sw-placeholder-chat-avatar"></div>
                    <div class="sw-placeholder-chat-bubble sent">
                        <div class="sw-placeholder-chat-text"></div>
                        <div class="sw-placeholder-chat-text"></div>
                        <div class="sw-placeholder-chat-text"></div>
                    </div>
                </div>
                <div class="sw-placeholder-chat-message">
                    <div class="sw-placeholder-chat-avatar"></div>
                    <div class="sw-placeholder-chat-bubble">
                        <div class="sw-placeholder-chat-text"></div>
                        <div class="sw-placeholder-chat-text"></div>
                    </div>
                </div>
            </div>
            <div class="sw-placeholders-helper">
                <i class="fa-solid fa-circle-info"></i>
                Received and sent messages
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="sw-placeholders-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="sw-placeholders-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>CSS Classes</h3>
                    <p class="card-subtitle">Available sw-placeholder utilities</p>
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
                        <td><code>.sw-placeholder</code></td>
                        <td>Base sw-placeholder with animation</td>
                    </tr>
                    <tr>
                        <td><code>.sw-placeholder-xs/sm/md/lg/xl</code></td>
                        <td>Size variants (height)</td>
                    </tr>
                    <tr>
                        <td><code>.sw-placeholder-w25/50/75/100</code></td>
                        <td>Width percentages</td>
                    </tr>
                    <tr>
                        <td><code>.sw-placeholder-circle</code></td>
                        <td>Circular shape</td>
                    </tr>
                    <tr>
                        <td><code>.sw-placeholder-rounded</code></td>
                        <td>Rounded corners (8px)</td>
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
                    <p class="card-subtitle">Placeholder guidelines</p>
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
                        <td><strong>Match layout</strong></td>
                        <td>Accurate preview</td>
                    </tr>
                    <tr>
                        <td><strong>Use shimmer</strong></td>
                        <td>Visual feedback</td>
                    </tr>
                    <tr>
                        <td><strong>Keep it simple</strong></td>
                        <td>Less distraction</td>
                    </tr>
                    <tr>
                        <td><strong>Show structure</strong></td>
                        <td>Content preview</td>
                    </tr>
                    <tr>
                        <td><strong>Fast transitions</strong></td>
                        <td>Smooth loading</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Placeholders page initialization
$(document).ready(function() {
    console.log('📝 SW Placeholders page loaded successfully');
    
    // Demo: Show welcome toast
    setTimeout(() => {
        if (typeof MetroAdmin !== 'undefined') {
            MetroAdmin.showSWInfoToast('Welcome to the Placeholders demo page!');
        }
    }, 1000);
});
</script>
@endpush