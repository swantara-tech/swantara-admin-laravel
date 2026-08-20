@extends('layouts.app')

@section('title', 'Spinners')
@section('breadcrumb', 'Spinners')

@push('styles')
@endpush

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Spinners</h1>
        <p>Loading indicators that provide visual feedback during asynchronous operations</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary" onclick="MetroAdmin.showSWFullScreenSpinner()">
            <i class="fa-solid fa-play"></i>
            <span>Demo Spinner</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card sw-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What are Spinners?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Spinners are visual indicators that show loading or processing states. They provide feedback to users that an operation is in progress, preventing confusion and improving perceived performance. Spinners come in various styles including circular spinners, dots, pulses, and bars.</p>
            </div>
        </div>
    </div>
</div>

<!-- Circular Spinners -->
<div class="sw-spinner-section-title">
    <i class="fa-solid fa-circle-notch"></i>
    Circular Spinners <span class="badge badge-primary">Essential</span>
</div>

<div class="sw-spinner-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-text-height"></i>
                </div>
                <div>
                    <h3>Spinner Sizes</h3>
                    <p class="card-subtitle">Small to extra large</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-spinner-example">
                <span class="sw-spinner-example-label">Size Variations</span>
                <div style="display: flex; gap: 24px; align-items: center;">
                    <div style="text-align: center;">
                        <div class="sw-spinner-demo sw-spinner-sm"></div>
                        <div style="font-size: 11px; margin-top: 8px;">20px</div>
                    </div>
                    <div style="text-align: center;">
                        <div class="sw-spinner-demo sw-spinner-md"></div>
                        <div style="font-size: 11px; margin-top: 8px;">40px</div>
                    </div>
                    <div style="text-align: center;">
                        <div class="sw-spinner-demo sw-spinner-lg"></div>
                        <div style="font-size: 11px; margin-top: 8px;">60px</div>
                    </div>
                    <div style="text-align: center;">
                        <div class="sw-spinner-demo sw-spinner-xl"></div>
                        <div style="font-size: 11px; margin-top: 8px;">80px</div>
                    </div>
                </div>
            </div>
            <div class="sw-spinner-helper">
                <i class="fa-solid fa-circle-info"></i>
                Four size options available
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-palette"></i>
                </div>
                <div>
                    <h3>Spinner Colors</h3>
                    <p class="card-subtitle">Contextual color variants</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-spinner-example">
                <span class="sw-spinner-example-label">Color Variations</span>
                <div style="display: flex; gap: 24px; align-items: center;">
                    <div class="sw-spinner-demo sw-spinner-md"></div>
                    <div class="sw-spinner-demo sw-spinner-md sw-spinner-success"></div>
                    <div class="sw-spinner-demo sw-spinner-md sw-spinner-warning"></div>
                    <div class="sw-spinner-demo sw-spinner-md sw-spinner-danger"></div>
                    <div class="sw-spinner-demo sw-spinner-md sw-spinner-info"></div>
                </div>
            </div>
            <div class="sw-spinner-helper">
                <i class="fa-solid fa-circle-info"></i>
                Five color options available
            </div>
        </div>
    </div>
</div>

<!-- Alternative Spinners -->
<div class="sw-spinner-section-title">
    <i class="fa-solid fa-shapes"></i>
    Alternative Spinners
</div>

<div class="sw-spinner-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-ellipsis"></i>
                </div>
                <div>
                    <h3>Dots Spinner</h3>
                    <p class="card-subtitle">Bouncing dots animation</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-spinner-example">
                <span class="sw-spinner-example-label">Dots Animation</span>
                <div class="sw-spinner-dots">
                    <div class="sw-spinner-dot"></div>
                    <div class="sw-spinner-dot"></div>
                    <div class="sw-spinner-dot"></div>
                </div>
            </div>
            <div class="sw-spinner-helper">
                <i class="fa-solid fa-circle-info"></i>
                Three dots with staggered animation
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-circle"></i>
                </div>
                <div>
                    <h3>Pulse Spinner</h3>
                    <p class="card-subtitle">Pulsing circle effect</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-spinner-example">
                <span class="sw-spinner-example-label">Pulse Animation</span>
                <div class="sw-spinner-pulse"></div>
            </div>
            <div class="sw-spinner-helper">
                <i class="fa-solid fa-circle-info"></i>
                Scale and opacity animation
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-danger">
                    <i class="fa-solid fa-bars-staggered"></i>
                </div>
                <div>
                    <h3>Bars Spinner</h3>
                    <p class="card-subtitle">Animated equalizer bars</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-spinner-example">
                <span class="sw-spinner-example-label">Bars Animation</span>
                <div class="sw-spinner-bars">
                    <div class="sw-spinner-bar"></div>
                    <div class="sw-spinner-bar"></div>
                    <div class="sw-spinner-bar"></div>
                    <div class="sw-spinner-bar"></div>
                    <div class="sw-spinner-bar"></div>
                </div>
            </div>
            <div class="sw-spinner-helper">
                <i class="fa-solid fa-circle-info"></i>
                Five bars with staggered timing
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-ring"></i>
                </div>
                <div>
                    <h3>Ring Spinner</h3>
                    <p class="card-subtitle">Dual-ring rotation</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-spinner-example">
                <span class="sw-spinner-example-label">Ring Animation</span>
                <div class="sw-spinner-ring"></div>
            </div>
            <div class="sw-spinner-helper">
                <i class="fa-solid fa-circle-info"></i>
                Two borders spinning together
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-expand"></i>
                </div>
                <div>
                    <h3>Growing Spinner</h3>
                    <p class="card-subtitle">Scale in and out</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-spinner-example">
                <span class="sw-spinner-example-label">Growing Animation</span>
                <div class="sw-spinner-growing"></div>
            </div>
            <div class="sw-spinner-helper">
                <i class="fa-solid fa-circle-info"></i>
                Scale and fade animation
            </div>
        </div>
    </div>
</div>

<!-- Button Integration -->
<div class="sw-spinner-section-title">
    <i class="fa-solid fa-hand-pointer"></i>
    Button Integration
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-circle-notch"></i>
            </div>
            <div>
                <h3>Loading Buttons</h3>
                <p class="card-subtitle">Buttons with spinner state</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-spinner-example" style="min-height: 100px;">
            <span class="sw-spinner-example-label">Button Loading States</span>
            <div style="display: flex; gap: 16px; flex-wrap: wrap; justify-content: center;">
                <button class="btn btn-primary sw-btn-spinner">
                    <div class="sw-spinner-demo"></div>
                    <span>Loading...</span>
                </button>
                
                <button class="btn btn-success sw-btn-spinner">
                    <div class="sw-spinner-demo sw-spinner-success"></div>
                    <span>Processing...</span>
                </button>
                
                <button class="btn btn-warning sw-btn-spinner">
                    <div class="sw-spinner-demo sw-spinner-warning"></div>
                    <span>Saving...</span>
                </button>
            </div>
        </div>
        <div class="sw-spinner-helper">
            <i class="fa-solid fa-circle-info"></i>
            Disabled buttons with loading indicator
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="sw-spinner-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="sw-spinner-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>HTML Structure</h3>
                    <p class="card-subtitle">Basic spinner markup</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="code-block">
&lt;!-- Basic Spinner --&gt;<br>
&lt;div class="sw-spinner-demo sw-spinner-md"&gt;&lt;/div&gt;<br>
<br>
&lt;!-- With Color --&gt;<br>
&lt;div class="sw-spinner-demo sw-spinner-md sw-spinner-success"&gt;&lt;/div&gt;<br>
<br>
&lt;!-- Dots Spinner --&gt;<br>
&lt;div class="sw-spinner-dots"&gt;<br>
&nbsp;&nbsp;&lt;div sw-spinner-dot&gt;&lt;/div&gt;<br>
&nbsp;&nbsp;&lt;div sw-spinner-dot&gt;&lt;/div&gt;<br>
&nbsp;&nbsp;&lt;div sw-spinner-dot&gt;&lt;/div&gt;<br>
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
                    <p class="card-subtitle">Spinner guidelines</p>
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
                        <td><strong>Match context</strong></td>
                        <td>Appropriate style</td>
                    </tr>
                    <tr>
                        <td><strong>Use colors</strong></td>
                        <td>Semantic meaning</td>
                    </tr>
                    <tr>
                        <td><strong>Size properly</strong></td>
                        <td>Visual hierarchy</td>
                    </tr>
                    <tr>
                        <td><strong>Disable buttons</strong></td>
                        <td>Prevent double-submit</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Full Screen Spinner Overlay -->
<div class="sw-spinner-overlay" id="fullScreenSpinner">
    <div class="sw-spinner-overlay-content">
        <div class="sw-spinner-demo"></div>
        <p>Loading, please wait...</p>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Spinners page initialization
$(document).ready(function() {
    console.log('🌀 SW Spinners page loaded successfully');
    
    // Demo: Show welcome toast
    setTimeout(() => {
        if (typeof MetroAdmin !== 'undefined') {
            MetroAdmin.showSWInfoToast('Welcome to the Spinners demo page!');
        }
    }, 1000);
});
</script>
@endpush
