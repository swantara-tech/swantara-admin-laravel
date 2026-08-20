@extends('layouts.app')

@section('title', 'Skeletons')
@section('breadcrumb', 'Skeletons')

@push('styles')
@endpush

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Skeletons</h1>
        <p>Placeholder loading states that provide visual structure while content is being loaded</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary" onclick="MetroAdmin.simulateSWLoading()">
            <i class="fa-solid fa-play"></i>
            <span>Demo Loading</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card sw-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What are Skeletons?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Skeleton screens are placeholder UI elements that mimic the layout of content while it's loading. They provide a better user experience than traditional spinners by showing the structure of the upcoming content, reducing perceived load time and preventing layout shifts.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Skeletons -->
<div class="sw-skeleton-section-title">
    <i class="fa-solid fa-border-all"></i>
    Basic Skeletons <span class="badge badge-primary">Essential</span>
</div>

<div class="sw-skeleton-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-font"></i>
                </div>
                <div>
                    <h3>Text Skeletons</h3>
                    <p class="card-subtitle">Lines and paragraphs</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-skeleton-example">
                <span class="sw-skeleton-example-label">Text Placeholders</span>
                <div class="sw-skeleton sw-skeleton-title"></div>
                <div class="sw-skeleton sw-skeleton-text"></div>
                <div class="sw-skeleton sw-skeleton-text"></div>
                <div class="sw-skeleton sw-skeleton-text" style="width: 80%;"></div>
            </div>
            <div class="sw-skeleton-helper">
                <i class="fa-solid fa-circle-info"></i>
                Shimmer animation on text blocks
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-circle"></i>
                </div>
                <div>
                    <h3>Circle Skeletons</h3>
                    <p class="card-subtitle">Avatars and icons</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-skeleton-example">
                <span class="sw-skeleton-example-label">Circle Placeholders</span>
                <div style="display: flex; gap: 16px; align-items: center;">
                    <div class="sw-skeleton sw-skeleton-avatar"></div>
                    <div class="sw-skeleton sw-skeleton-avatar-lg"></div>
                    <div>
                        <div class="sw-skeleton sw-skeleton-text" style="width: 120px; height: 20px;"></div>
                        <div class="sw-skeleton sw-skeleton-text" style="width: 80px;"></div>
                    </div>
                </div>
            </div>
            <div class="sw-skeleton-helper">
                <i class="fa-solid fa-circle-info"></i>
                Circular shapes for avatars
            </div>
        </div>
    </div>
</div>

<!-- Card Skeletons -->
<div class="sw-skeleton-section-title">
    <i class="fa-solid fa-id-card"></i>
    Card Skeletons
</div>

<div class="sw-skeleton-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-image"></i>
                </div>
                <div>
                    <h3>Image Card</h3>
                    <p class="card-subtitle">Card with image placeholder</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-skeleton-card" id="demo-card-1">
                <div class="sw-skeleton sw-skeleton-image"></div>
                <div style="padding-top: 16px;">
                    <div class="sw-skeleton sw-skeleton-title"></div>
                    <div class="sw-skeleton sw-skeleton-text"></div>
                    <div class="sw-skeleton sw-skeleton-text"></div>
                    <div class="sw-skeleton sw-skeleton-text" style="width: 60%;"></div>
                </div>
            </div>
            <div class="sw-skeleton-helper">
                <i class="fa-solid fa-circle-info"></i>
                Full card loading state
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div>
                    <h3>Profile Card</h3>
                    <p class="card-subtitle">User profile sw-skeleton</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-skeleton-card">
                <div class="sw-skeleton-card-header">
                    <div class="sw-skeleton sw-skeleton-avatar-lg"></div>
                    <div style="flex: 1;">
                        <div class="sw-skeleton sw-skeleton-text" style="width: 70%; height: 20px;"></div>
                        <div class="sw-skeleton sw-skeleton-text" style="width: 50%;"></div>
                    </div>
                </div>
                <div class="sw-skeleton-card-body">
                    <div class="sw-skeleton sw-skeleton-text"></div>
                    <div class="sw-skeleton sw-skeleton-text"></div>
                    <div class="sw-skeleton sw-skeleton-text" style="width: 80%;"></div>
                </div>
            </div>
            <div class="sw-skeleton-helper">
                <i class="fa-solid fa-circle-info"></i>
                User profile loading state
            </div>
        </div>
    </div>
</div>

<!-- List & Table Skeletons -->
<div class="sw-skeleton-section-title">
    <i class="fa-solid fa-list"></i>
    List & Table Skeletons
</div>

<div class="sw-skeleton-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-list-ul"></i>
                </div>
                <div>
                    <h3>List Skeleton</h3>
                    <p class="card-subtitle">List items loading</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-skeleton-example">
                <span class="sw-skeleton-example-label">List Loading State</span>
                <div class="sw-skeleton-list-item">
                    <div class="sw-skeleton sw-skeleton-circle-md"></div>
                    <div style="flex: 1;">
                        <div class="sw-skeleton sw-skeleton-text" style="width: 80%;"></div>
                        <div class="sw-skeleton sw-skeleton-text" style="width: 60%;"></div>
                    </div>
                </div>
                <div class="sw-skeleton-list-item">
                    <div class="sw-skeleton sw-skeleton-circle-md"></div>
                    <div style="flex: 1;">
                        <div class="sw-skeleton sw-skeleton-text" style="width: 70%;"></div>
                        <div class="sw-skeleton sw-skeleton-text" style="width: 50%;"></div>
                    </div>
                </div>
                <div class="sw-skeleton-list-item">
                    <div class="sw-skeleton sw-skeleton-circle-md"></div>
                    <div style="flex: 1;">
                        <div class="sw-skeleton sw-skeleton-text" style="width: 90%;"></div>
                        <div class="sw-skeleton sw-skeleton-text" style="width: 40%;"></div>
                    </div>
                </div>
            </div>
            <div class="sw-skeleton-helper">
                <i class="fa-solid fa-circle-info"></i>
                Repeated list items
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-table"></i>
                </div>
                <div>
                    <h3>Table Skeleton</h3>
                    <p class="card-subtitle">Table data loading</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-skeleton-example">
                <span class="sw-skeleton-example-label">Table Loading State</span>
                <div class="sw-skeleton-table">
                    <div class="sw-skeleton-table-row">
                        <div class="sw-skeleton sw-skeleton-table-cell"></div>
                        <div class="sw-skeleton sw-skeleton-table-cell"></div>
                        <div class="sw-skeleton sw-skeleton-table-cell"></div>
                    </div>
                    <div class="sw-skeleton-table-row">
                        <div class="sw-skeleton sw-skeleton-table-cell"></div>
                        <div class="sw-skeleton sw-skeleton-table-cell"></div>
                        <div class="sw-skeleton sw-skeleton-table-cell"></div>
                    </div>
                    <div class="sw-skeleton-table-row">
                        <div class="sw-skeleton sw-skeleton-table-cell"></div>
                        <div class="sw-skeleton sw-skeleton-table-cell"></div>
                        <div class="sw-skeleton sw-skeleton-table-cell"></div>
                    </div>
                </div>
            </div>
            <div class="sw-skeleton-helper">
                <i class="fa-solid fa-circle-info"></i>
                Table rows and columns
            </div>
        </div>
    </div>
</div>

<!-- Skeleton Variants -->
<div class="sw-skeleton-section-title">
    <i class="fa-solid fa-layer-group"></i>
    Skeleton Variations
</div>

<div class="sw-skeleton-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-magic"></i>
                </div>
                <div>
                    <h3>Shimmer Effect</h3>
                    <p class="card-subtitle">Default animation</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-skeleton-example">
                <span class="sw-skeleton-example-label">Shimmer Animation</span>
                <div class="sw-skeleton sw-skeleton-title"></div>
                <div class="sw-skeleton sw-skeleton-text"></div>
                <div class="sw-skeleton sw-skeleton-text"></div>
                <div class="sw-skeleton sw-skeleton-text" style="width: 75%;"></div>
            </div>
            <div class="sw-skeleton-helper">
                <i class="fa-solid fa-circle-info"></i>
                Smooth gradient animation
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-heart-pulse"></i>
                </div>
                <div>
                    <h3>Pulse Effect</h3>
                    <p class="card-subtitle">Opacity animation</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-skeleton-example">
                <span class="sw-skeleton-example-label">Pulse Animation</span>
                <div class="sw-skeleton sw-skeleton-pulse sw-skeleton-title"></div>
                <div class="sw-skeleton sw-skeleton-pulse sw-skeleton-text"></div>
                <div class="sw-skeleton sw-skeleton-pulse sw-skeleton-text"></div>
                <div class="sw-skeleton sw-skeleton-pulse sw-skeleton-text" style="width: 75%;"></div>
            </div>
            <div class="sw-skeleton-helper">
                <i class="fa-solid fa-circle-info"></i>
                Fading opacity effect
            </div>
        </div>
    </div>
</div>

<!-- Advanced Skeleton Demos -->
<div class="sw-skeleton-section-title">
    <i class="fa-solid fa-wand-magic-sparkles"></i>
    Advanced Demos
</div>

<div class="sw-skeleton-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-chart-bar"></i>
                </div>
                <div>
                    <h3>Dashboard Skeleton</h3>
                    <p class="card-subtitle">Stats cards loading</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-skeleton-example">
                <span class="sw-skeleton-example-label">Stats Cards Loading</span>
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px;">
                    <div style="padding: 16px; background: var(--surface); border: 1px solid var(--border-color); border-radius: 8px;">
                        <div class="sw-skeleton" style="width: 40px; height: 40px; border-radius: 8px; margin-bottom: 12px;"></div>
                        <div class="sw-skeleton" style="width: 60%; height: 24px; margin-bottom: 8px;"></div>
                        <div class="sw-skeleton" style="width: 80%; height: 14px;"></div>
                    </div>
                    <div style="padding: 16px; background: var(--surface); border: 1px solid var(--border-color); border-radius: 8px;">
                        <div class="sw-skeleton" style="width: 40px; height: 40px; border-radius: 8px; margin-bottom: 12px;"></div>
                        <div class="sw-skeleton" style="width: 60%; height: 24px; margin-bottom: 8px;"></div>
                        <div class="sw-skeleton" style="width: 80%; height: 14px;"></div>
                    </div>
                    <div style="padding: 16px; background: var(--surface); border: 1px solid var(--border-color); border-radius: 8px;">
                        <div class="sw-skeleton" style="width: 40px; height: 40px; border-radius: 8px; margin-bottom: 12px;"></div>
                        <div class="sw-skeleton" style="width: 60%; height: 24px; margin-bottom: 8px;"></div>
                        <div class="sw-skeleton" style="width: 80%; height: 14px;"></div>
                    </div>
                </div>
            </div>
            <div class="sw-skeleton-helper">
                <i class="fa-solid fa-circle-info"></i>
                Dashboard stats cards loading state
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-comments"></i>
                </div>
                <div>
                    <h3>Chat Message Skeleton</h3>
                    <p class="card-subtitle">Messages loading</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-skeleton-example">
                <span class="sw-skeleton-example-label">Chat Messages Loading</span>
                <div style="display: flex; flex-direction: column; gap: 12px;">
                    <div style="display: flex; gap: 10px;">
                        <div class="sw-skeleton sw-skeleton-circle-md" style="flex-shrink: 0;"></div>
                        <div style="flex: 1;">
                            <div class="sw-skeleton" style="width: 100px; height: 14px; margin-bottom: 6px;"></div>
                            <div class="sw-skeleton" style="width: 100%; height: 40px; border-radius: 8px;"></div>
                        </div>
                    </div>
                    <div style="display: flex; gap: 10px; flex-direction: row-reverse;">
                        <div class="sw-skeleton sw-skeleton-circle-md" style="flex-shrink: 0;"></div>
                        <div style="flex: 1; text-align: right;">
                            <div class="sw-skeleton" style="width: 100px; height: 14px; margin-bottom: 6px; margin-left: auto;"></div>
                            <div class="sw-skeleton" style="width: 80%; height: 40px; border-radius: 8px; margin-left: auto;"></div>
                        </div>
                    </div>
                    <div style="display: flex; gap: 10px;">
                        <div class="sw-skeleton sw-skeleton-circle-md" style="flex-shrink: 0;"></div>
                        <div style="flex: 1;">
                            <div class="sw-skeleton" style="width: 100px; height: 14px; margin-bottom: 6px;"></div>
                            <div class="sw-skeleton" style="width: 90%; height: 50px; border-radius: 8px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sw-skeleton-helper">
                <i class="fa-solid fa-circle-info"></i>
                Chat messages loading state
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-danger">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <div>
                    <h3>Product Card Skeleton</h3>
                    <p class="card-subtitle">E-commerce products</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-skeleton-example">
                <span class="sw-skeleton-example-label">Product Cards Loading</span>
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px;">
                    <div style="background: var(--surface); border: 1px solid var(--border-color); border-radius: 8px; overflow: hidden;">
                        <div class="sw-skeleton" style="width: 100%; height: 120px;"></div>
                        <div style="padding: 12px;">
                            <div class="sw-skeleton" style="width: 90%; height: 16px; margin-bottom: 8px;"></div>
                            <div class="sw-skeleton" style="width: 60%; height: 14px; margin-bottom: 12px;"></div>
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <div class="sw-skeleton" style="width: 50px; height: 20px;"></div>
                                <div class="sw-skeleton sw-skeleton-button" style="width: 60px; height: 32px;"></div>
                            </div>
                        </div>
                    </div>
                    <div style="background: var(--surface); border: 1px solid var(--border-color); border-radius: 8px; overflow: hidden;">
                        <div class="sw-skeleton" style="width: 100%; height: 120px;"></div>
                        <div style="padding: 12px;">
                            <div class="sw-skeleton" style="width: 90%; height: 16px; margin-bottom: 8px;"></div>
                            <div class="sw-skeleton" style="width: 60%; height: 14px; margin-bottom: 12px;"></div>
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <div class="sw-skeleton" style="width: 50px; height: 20px;"></div>
                                <div class="sw-skeleton sw-skeleton-button" style="width: 60px; height: 32px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sw-skeleton-helper">
                <i class="fa-solid fa-circle-info"></i>
                Product cards loading state
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-list-check"></i>
                </div>
                <div>
                    <h3>Form Skeleton</h3>
                    <p class="card-subtitle">Form fields loading</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-skeleton-example">
                <span class="sw-skeleton-example-label">Form Loading State</span>
                <div style="display: flex; flex-direction: column; gap: 16px;">
                    <div>
                        <div class="sw-skeleton" style="width: 80px; height: 14px; margin-bottom: 8px;"></div>
                        <div class="sw-skeleton" style="width: 100%; height: 40px; border-radius: 6px;"></div>
                    </div>
                    <div>
                        <div class="sw-skeleton" style="width: 80px; height: 14px; margin-bottom: 8px;"></div>
                        <div class="sw-skeleton" style="width: 100%; height: 40px; border-radius: 6px;"></div>
                    </div>
                    <div style="display: flex; gap: 12px;">
                        <div class="sw-skeleton sw-skeleton-button" style="width: 100px;"></div>
                        <div class="sw-skeleton sw-skeleton-button" style="width: 80px; background: rgba(0,0,0,0.08);"></div>
                    </div>
                </div>
            </div>
            <div class="sw-skeleton-helper">
                <i class="fa-solid fa-circle-info"></i>
                Form fields loading state
            </div>
        </div>
    </div>
</div>

<!-- Interactive Demo -->
<div class="sw-skeleton-section-title">
    <i class="fa-solid fa-hand-pointer"></i>
    Interactive Demo <span class="badge badge-primary">Try It</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-sync-alt"></i>
            </div>
            <div>
                <h3>Loading State Simulation</h3>
                <p class="card-subtitle">See sw-skeleton in action with realistic loading</p>
            </div>
        </div>
        <div>
            <button class="btn btn-primary btn-lg" onclick="MetroAdmin.simulateSWLoading()" id="loadingBtn">
                <i class="fa-solid fa-play"></i>
                <span>Start Demo</span>
            </button>
        </div>
    </div>
    <div class="card-body">
        <!-- Status Indicator -->
        <div id="statusIndicator" style="margin-bottom: 20px; padding: 12px 16px; border-radius: 8px; background: rgba(0, 0, 0, 0.03); display: flex; align-items: center; gap: 10px; transition: all 0.3s;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent);"></i>
            <span style="font-size: 13px; color: var(--text-secondary);">Click "Start Demo" to see sw-skeleton loading animation</span>
        </div>
        
        <!-- Content Area with Smooth Transition -->
        <div id="contentArea" style="transition: opacity 0.3s ease;">
            <div class="sw-skeleton-card">
                <div class="sw-skeleton-card-header">
                    <div class="sw-skeleton sw-skeleton-avatar-lg"></div>
                    <div style="flex: 1;">
                        <div class="sw-skeleton sw-skeleton-text" style="width: 70%; height: 20px; margin-bottom: 8px;"></div>
                        <div class="sw-skeleton sw-skeleton-text" style="width: 50%;"></div>
                    </div>
                </div>
                <div style="margin-top: 16px;">
                    <div class="sw-skeleton sw-skeleton-image" style="height: 150px; margin-bottom: 16px;"></div>
                    <div class="sw-skeleton sw-skeleton-text" style="margin-bottom: 8px;"></div>
                    <div class="sw-skeleton sw-skeleton-text" style="margin-bottom: 8px;"></div>
                    <div class="sw-skeleton sw-skeleton-text" style="width: 80%; margin-bottom: 16px;"></div>
                    <div style="display: flex; gap: 8px;">
                        <div class="sw-skeleton" style="width: 100px; height: 36px; border-radius: 6px;"></div>
                        <div class="sw-skeleton" style="width: 80px; height: 36px; border-radius: 6px; background: rgba(0,0,0,0.08);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="sw-skeleton-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="sw-skeleton-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>HTML Structure</h3>
                    <p class="card-subtitle">Basic sw-skeleton markup</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="code-block">
&lt;!-- Text Skeleton --&gt;<br>
&lt;div class="sw-skeleton sw-skeleton-text"&gt;&lt;/div&gt;<br>
<br>
&lt;!-- Avatar Skeleton --&gt;<br>
&lt;div class="sw-skeleton sw-skeleton-avatar"&gt;&lt;/div&gt;<br>
<br>
&lt;!-- Card Skeleton --&gt;<br>
&lt;div class="sw-skeleton-card"&gt;<br>
&nbsp;&nbsp;&lt;div class="sw-skeleton sw-skeleton-image"&gt;&lt;/div&gt;<br>
&nbsp;&nbsp;&lt;div class="sw-skeleton sw-skeleton-title"&gt;&lt;/div&gt;<br>
&nbsp;&nbsp;&lt;div class="sw-skeleton sw-skeleton-text"&gt;&lt;/div&gt;<br>
&lt;/div&gt;
            </div>
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
                    <p class="card-subtitle">Skeleton guidelines</p>
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
                        <td>Reduces layout shift</td>
                    </tr>
                    <tr>
                        <td><strong>Use shimmer</strong></td>
                        <td>Shows activity</td>
                    </tr>
                    <tr>
                        <td><strong>Keep it simple</strong></td>
                        <td>Less distraction</td>
                    </tr>
                    <tr>
                        <td><strong>Show briefly</strong></td>
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
// Skeletons page initialization
$(document).ready(function() {
    console.log('💀 SW Skeletons page loaded successfully');
    
    // Demo: Show welcome toast
    setTimeout(() => {
        if (typeof MetroAdmin !== 'undefined') {
            MetroAdmin.showSWInfoToast('Welcome to the Skeletons demo page!');
        }
    }, 1000);
});
</script>
@endpush
