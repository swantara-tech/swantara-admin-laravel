@extends('layouts.app')

@section('title', 'Range Slider')

@push('styles')
@endpush

@section('content')
<div class="page-header">
    <div>
        <h1>Range Slider</h1>
        <p>Interactive range input sliders untuk pemilihan nilai dengan visual feedback</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-sliders"></i>
            <span>Try Slider</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card" style="margin-bottom: 24px; border-left: 4px solid var(--accent);">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What is Range Slider?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Range sliders allow users to select a value or range of values from a continuous spectrum. Perfect for volume control, price filters, rating systems, and numeric inputs. Uses native HTML5 <code>&lt;input type="range"&gt;</code> with custom CSS styling.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Range Sliders -->
<div class="rs-section-title">
    <i class="fa-solid fa-sliders"></i>
    Basic Range Sliders <span class="badge badge-primary">Essential</span>
</div>

<div class="range-slider-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-volume-high"></i>
                </div>
                <div>
                    <h3>Volume Control</h3>
                    <p class="card-subtitle">0 to 100 scale</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="rs-example">
                <label class="rs-label">
                    Volume
                    <span class="rs-range">0 - 100</span>
                </label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider" min="0" max="100" value="75">
                </div>
                <div class="range-value">75</div>
                <div class="rs-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Step: 1
                </div>
            </div>

            <div class="rs-example">
                <label class="rs-label">
                    Brightness
                    <span class="rs-range">0 - 100</span>
                </label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider" min="0" max="100" value="50">
                </div>
                <div class="range-value">50</div>
                <div class="rs-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Default: 50%
                </div>
            </div>

            <div class="rs-example">
                <label class="rs-label">
                    Opacity
                    <span class="rs-range">0 - 100</span>
                </label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider" min="0" max="100" value="80">
                </div>
                <div class="range-value">80%</div>
            </div>

            <div class="divider"></div>

            <div class="range-preview">
                <div class="range-preview-label">Current Volume:</div>
                <div class="range-preview-value">75<span class="range-preview-unit">/ 100</span></div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-dollar-sign"></i>
                </div>
                <div>
                    <h3>Price & Currency</h3>
                    <p class="card-subtitle">Monetary value selection</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="rs-example">
                <label class="rs-label">
                    Price Range (USD)
                    <span class="rs-range">$0 - $1000</span>
                </label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider" min="0" max="1000" value="500" step="10">
                </div>
                <div class="range-value">$500</div>
                <div class="rs-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Step: $10
                </div>
            </div>

            <div class="rs-example">
                <label class="rs-label">
                    Budget (EUR)
                    <span class="rs-range">€0 - €5000</span>
                </label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider" min="0" max="5000" value="2500" step="50">
                </div>
                <div class="range-value">€2,500</div>
                <div class="rs-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Step: €50
                </div>
            </div>

            <div class="rs-example">
                <label class="rs-label">
                    Salary (IDR)
                    <span class="rs-range">Rp0 - Rp50M</span>
                </label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider" min="0" max="50" value="15" step="1">
                </div>
                <div class="range-value">Rp15M</div>
                <div class="rs-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Step: Rp1M
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <h4 style="font-size: 14px; margin-bottom: 12px;">Features:</h4>
                <ul class="feature-list">
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Continuous value selection</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Custom step sizes</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Min/max boundaries</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Visual value display</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Size Variants -->
<div class="rs-section-title">
    <i class="fa-solid fa-up-down"></i>
    Size Variants
</div>

<div class="range-slider-grid three-cols">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-compress"></i>
                </div>
                <div>
                    <h3>Small Size</h3>
                    <p class="card-subtitle">Compact slider</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="rs-example">
                <label class="rs-label">Small Slider</label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider range-slider-sm" min="0" max="100" value="60">
                </div>
                <div class="range-value">60</div>
                <div class="rs-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Track: 4px, Thumb: 16px
                </div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Best for: Dense forms, tables, mobile
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-expand"></i>
                </div>
                <div>
                    <h3>Medium Size</h3>
                    <p class="card-subtitle">Default slider (Recommended)</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="rs-example">
                <label class="rs-label">Medium Slider</label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider" min="0" max="100" value="75">
                </div>
                <div class="range-value">75</div>
                <div class="rs-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Track: 8px, Thumb: 24px
                </div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Best for: Standard forms, most use cases
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-maximize"></i>
                </div>
                <div>
                    <h3>Large Size</h3>
                    <p class="card-subtitle">Large slider for visibility</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="rs-example">
                <label class="rs-label">Large Slider</label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider range-slider-lg" min="0" max="100" value="85">
                </div>
                <div class="range-value range-value-lg">85</div>
                <div class="rs-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Track: 12px, Thumb: 32px
                </div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Best for: Touchscreens, accessibility
            </div>
        </div>
    </div>
</div>

<!-- Color Variants -->
<div class="rs-section-title">
    <i class="fa-solid fa-palette"></i>
    Color Variants
</div>

<div class="range-slider-grid three-cols">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-circle"></i>
                </div>
                <div>
                    <h3>Primary</h3>
                    <p class="card-subtitle">Accent blue thumb</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="rs-example">
                <label class="rs-label">Primary Color</label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider" min="0" max="100" value="70">
                </div>
                <div class="range-value">70</div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Default accent color
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
                    <h3>Success</h3>
                    <p class="card-subtitle">Green thumb</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="rs-example">
                <label class="rs-label">Success Color</label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider range-slider-success" min="0" max="100" value="80">
                </div>
                <div class="range-value" style="background: var(--success-bg); color: var(--success);">80</div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Use for positive values
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-danger">
                    <i class="fa-solid fa-circle"></i>
                </div>
                <div>
                    <h3>Danger & Others</h3>
                    <p class="card-subtitle">Red, yellow, cyan</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="rs-example">
                <label class="rs-label">Danger Color</label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider range-slider-danger" min="0" max="100" value="90">
                </div>
                <div class="range-value" style="background: var(--danger-bg); color: var(--danger);">90</div>
            </div>

            <div class="rs-example">
                <label class="rs-label">Warning Color</label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider range-slider-warning" min="0" max="100" value="60">
                </div>
                <div class="range-value" style="background: var(--warning-bg); color: var(--warning);">60</div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Context-specific colors
            </div>
        </div>
    </div>
</div>

<!-- Steps & Discrete Values -->
<div class="rs-section-title">
    <i class="fa-solid fa-stairs"></i>
    Steps & Discrete Values
</div>

<div class="range-slider-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-hashtag"></i>
                </div>
                <div>
                    <h3>Custom Steps</h3>
                    <p class="card-subtitle">Increment by specific values</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="rs-example">
                <label class="rs-label">
                    Step by 5
                    <span class="rs-range">0, 5, 10, 15...</span>
                </label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider" min="0" max="100" value="50" step="5">
                </div>
                <div class="range-value">50</div>
                <div class="rs-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Step: 5
                </div>
            </div>

            <div class="rs-example">
                <label class="rs-label">
                    Step by 10
                    <span class="rs-range">0, 10, 20, 30...</span>
                </label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider" min="0" max="100" value="70" step="10">
                </div>
                <div class="range-value">70</div>
                <div class="rs-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Step: 10
                </div>
            </div>

            <div class="rs-example">
                <label class="rs-label">
                    Step by 25
                    <span class="rs-range">0, 25, 50, 75, 100</span>
                </label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider" min="0" max="100" value="75" step="25">
                </div>
                <div class="range-value">75</div>
                <div class="steps-indicator">
                    <div class="step-dot active"></div>
                    <div class="step-dot active"></div>
                    <div class="step-dot active"></div>
                    <div class="step-dot"></div>
                    <div class="step-dot"></div>
                </div>
                <div class="rs-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Step: 25 (5 values)
                </div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Step size controls value increments
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-star"></i>
                </div>
                <div>
                    <h3>Rating System</h3>
                    <p class="card-subtitle">1 to 5 star rating</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="rs-example">
                <label class="rs-label">
                    Star Rating
                    <span class="rs-range">1 - 5</span>
                </label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider range-slider-warning" min="1" max="5" value="4" step="1">
                </div>
                <div class="range-value" style="font-size: 28px;">⭐⭐⭐⭐</div>
                <div class="rs-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Rating: 4/5 stars
                </div>
            </div>

            <div class="rs-example">
                <label class="rs-label">
                    Satisfaction Score
                    <span class="rs-range">1 - 10</span>
                </label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider" min="1" max="10" value="8" step="1">
                </div>
                <div class="range-value">8/10</div>
                <div class="rs-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Very satisfied
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <h4 style="font-size: 14px; margin-bottom: 12px;">Use Cases:</h4>
                <ul class="feature-list">
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Product ratings</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Customer satisfaction</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Difficulty levels</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Priority levels</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Dual Range & Vertical -->
<div class="rs-section-title">
    <i class="fa-solid fa-arrows-left-right"></i>
    Dual Range & Vertical
</div>

<div class="range-slider-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-right-left"></i>
                </div>
                <div>
                    <h3>Dual Range Slider</h3>
                    <p class="card-subtitle">Min and max selection (Visual)</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="rs-example">
                <label class="rs-label">
                    Price Range Filter
                    <span class="rs-range">$0 - $1000</span>
                </label>
                <div class="dual-range-visual">
                    <div class="dual-range-fill"></div>
                    <div class="dual-range-thumb dual-range-thumb-left"></div>
                    <div class="dual-range-thumb dual-range-thumb-right"></div>
                </div>
                <div style="display: flex; gap: 12px; margin-top: 8px;">
                    <div class="range-value">$200</div>
                    <div class="range-value">$700</div>
                </div>
                <div class="rs-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Range: $200 - $700
                </div>
            </div>

            <div class="rs-example">
                <label class="rs-label">
                    Age Range
                    <span class="rs-range">18 - 65</span>
                </label>
                <div class="dual-range-visual">
                    <div class="dual-range-fill" style="left: 25%; right: 40%;"></div>
                    <div class="dual-range-thumb dual-range-thumb-left" style="left: 25%;"></div>
                    <div class="dual-range-thumb dual-range-thumb-right" style="right: 40%;"></div>
                </div>
                <div style="display: flex; gap: 12px; margin-top: 8px;">
                    <div class="range-value">25 years</div>
                    <div class="range-value">45 years</div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Dual range requires custom implementation or library
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-arrows-up-down"></i>
                </div>
                <div>
                    <h3>Vertical Slider</h3>
                    <p class="card-subtitle">Up/down value selection</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="rs-example">
                <label class="rs-label">Temperature Control</label>
                <div class="vertical-slider-wrapper">
                    <div style="text-align: center;">
                        <div style="font-size: 32px; font-weight: 700; color: var(--accent); margin-bottom: 8px;">25°C</div>
                        <div style="font-size: 12px; color: var(--text-tertiary);">Current</div>
                    </div>
                    <input type="range" class="vertical-slider" min="16" max="30" value="25" step="1">
                    <div style="text-align: center;">
                        <div style="font-size: 14px; margin-bottom: 4px;">30°C</div>
                        <div style="height: 200px; border-left: 2px solid var(--border); position: relative;">
                            <div style="position: absolute; bottom: 0; left: -2px; width: 2px; height: 65%; background: var(--accent);"></div>
                        </div>
                        <div style="font-size: 14px; margin-top: 4px;">16°C</div>
                    </div>
                </div>
                <div class="rs-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Range: 16°C - 30°C
                </div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Vertical sliders use CSS transform rotation
            </div>
        </div>
    </div>
</div>

<!-- Disabled & States -->
<div class="rs-section-title">
    <i class="fa-solid fa-circle-check"></i>
    Disabled & States
</div>

<div class="range-slider-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-ban"></i>
                </div>
                <div>
                    <h3>Disabled Slider</h3>
                    <p class="card-subtitle">Non-interactive slider</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="rs-example">
                <label class="rs-label">Disabled Volume</label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider" min="0" max="100" value="75" disabled>
                </div>
                <div class="range-value" style="opacity: 0.5;">75</div>
                <div class="rs-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Cannot be modified
                </div>
            </div>

            <div class="rs-example">
                <label class="rs-label">Disabled Price</label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider" min="0" max="1000" value="500" step="10" disabled>
                </div>
                <div class="range-value" style="opacity: 0.5;">$500</div>
                <div class="rs-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Read-only value
                </div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Disabled sliders have 50% opacity and no pointer events
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-check"></i>
                </div>
                <div>
                    <h3>Focus State</h3>
                    <p class="card-subtitle">Keyboard navigation</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="rs-example">
                <label class="rs-label">Tab to Focus</label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider" min="0" max="100" value="50" tabindex="0">
                </div>
                <div class="range-value">50</div>
                <div class="rs-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Press Tab to see focus ring
                </div>
            </div>

            <div class="rs-example">
                <label class="rs-label">Arrow Keys</label>
                <div class="range-slider-wrapper">
                    <input type="range" class="range-slider" min="0" max="100" value="75" step="5" tabindex="0">
                </div>
                <div class="range-value">75</div>
                <div class="rs-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Use ← → arrow keys to adjust
                </div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Focus state shows accent-colored ring
            </div>
        </div>
    </div>
</div>

<!-- Volume Control Example -->
<div class="rs-section-title">
    <i class="fa-solid fa-clipboard-list"></i>
    Media Control Example
</div>

<div class="range-slider-grid full-width">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-music"></i>
                </div>
                <div>
                    <h3>Audio Player Controls</h3>
                    <p class="card-subtitle">Media player with multiple sliders</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div style="display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                        <label class="rs-label" style="margin: 0;">🔊 Volume</label>
                        <div class="range-value">75%</div>
                    </div>
                    <div class="range-slider-wrapper">
                        <input type="range" class="range-slider" min="0" max="100" value="75">
                    </div>
                    <div class="progress-bar-visual">
                        <div class="progress-bar-fill" style="width: 75%;"></div>
                    </div>
                </div>

                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                        <label class="rs-label" style="margin: 0;">☀️ Brightness</label>
                        <div class="range-value">60%</div>
                    </div>
                    <div class="range-slider-wrapper">
                        <input type="range" class="range-slider range-slider-warning" min="0" max="100" value="60">
                    </div>
                </div>

                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                        <label class="rs-label" style="margin: 0;">⚡ Speed</label>
                        <div class="range-value">1.5x</div>
                    </div>
                    <div class="range-slider-wrapper">
                        <input type="range" class="range-slider range-slider-info" min="0.5" max="2" value="1.5" step="0.1">
                    </div>
                </div>

                <div class="divider"></div>

                <div style="display: flex; justify-content: center; gap: 16px; font-size: 24px;">
                    <button style="background: none; border: none; cursor: pointer; color: var(--text-secondary); font-size: 24px;" title="Previous">⏮️</button>
                    <button style="background: var(--accent); border: none; cursor: pointer; color: white; font-size: 32px; padding: 12px 20px; border-radius: 50%;" title="Play">▶️</button>
                    <button style="background: none; border: none; cursor: pointer; color: var(--text-secondary); font-size: 24px;" title="Next">⏭️</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Implementation Guide -->
<div class="range-slider-grid full-width">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-code"></i>
                </div>
                <div>
                    <h3>Implementation Guide</h3>
                    <p class="card-subtitle">How to implement range sliders with HTML5 & CSS</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="code-block">
                <div style="color: var(--text-tertiary); margin-bottom: 8px;">1. HTML5 Range Input:</div>
                <code style="color: var(--accent);">
                    &lt;input type="range" <br>
                    &nbsp;&nbsp;class="range-slider"<br>
                    &nbsp;&nbsp;min="0" <br>
                    &nbsp;&nbsp;max="100" <br>
                    &nbsp;&nbsp;value="50"<br>
                    &nbsp;&nbsp;step="1"&gt;
                </code>
            </div>

            <div class="code-block">
                <div style="color: var(--text-tertiary); margin-bottom: 8px; margin-top: 16px;">2. CSS Thumb Styling:</div>
                <code style="color: var(--success);">
                    .range-slider::-webkit-slider-thumb {<br>
                    &nbsp;&nbsp;-webkit-appearance: none;<br>
                    &nbsp;&nbsp;width: 24px;<br>
                    &nbsp;&nbsp;height: 24px;<br>
                    &nbsp;&nbsp;border-radius: 50%;<br>
                    &nbsp;&nbsp;background: var(--accent);<br>
                    &nbsp;&nbsp;cursor: pointer;<br>
                    &nbsp;&nbsp;box-shadow: 0 2px 6px rgba(0,0,0,0.2);<br>
                    }
                </code>
            </div>

            <div class="code-block">
                <div style="color: var(--text-tertiary); margin-bottom: 8px; margin-top: 16px;">3. JavaScript Event Listener:</div>
                <code style="color: var(--warning);">
                    const slider = document.querySelector('.range-slider');<br>
                    const valueDisplay = document.querySelector('.range-value');<br>
                    <br>
                    slider.addEventListener('input', function() {<br>
                    &nbsp;&nbsp;valueDisplay.textContent = this.value;<br>
                    });
                </code>
            </div>

            <div class="code-block">
                <div style="color: var(--text-tertiary); margin-bottom: 8px; margin-top: 16px;">4. Popular Libraries:</div>
                <code style="color: var(--info);">
                    // noUiSlider<br>
                    noUiSlider.create(slider, {<br>
                    &nbsp;&nbsp;start: [20, 80],<br>
                    &nbsp;&nbsp;range: { min: 0, max: 100 }<br>
                    });<br>
                    <br>
                    // jQuery UI Slider<br>
                    $('#slider').slider({<br>
                    &nbsp;&nbsp;min: 0, max: 100, value: 50<br>
                    });
                </code>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <h4 style="font-size: 14px; margin-bottom: 12px;">Features:</h4>
                <ul class="feature-list">
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>HTML5 Native</strong> - No library needed</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>Custom CSS</strong> - Full styling control</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>Accessible</strong> - Keyboard navigation</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>Libraries</strong> - noUiSlider, jQuery UI</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
