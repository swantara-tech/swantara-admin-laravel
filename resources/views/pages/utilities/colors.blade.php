@extends('layouts.app')

@section('title', 'Colors')
@section('breadcrumb', 'Colors')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Colors</h1>
        <p>Comprehensive color system with CSS variables, gradients, and accessibility guidelines</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary" onclick="MetroAdmin.copySWAllColors()">
            <i class="fa-solid fa-copy"></i>
            <span>Copy All CSS</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card cl-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">Color System Overview</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Swantara Admin uses a comprehensive color system based on CSS custom properties (variables). This enables easy theming, dark mode support, and consistent color usage across all components. Click any color to copy its value. All colors meet WCAG 2.1 accessibility standards.</p>
            </div>
        </div>
    </div>
</div>

<!-- Primary Colors -->
<div class="cl-section-title">
    <i class="fa-solid fa-palette"></i>
    Primary Colors <span class="badge badge-primary">Essential</span>
</div>

<div class="cl-colors-grid">
    <div class="sw-color-swatch">
        <div class="sw-color-swatch-preview" style="background: #0078D4;">
            <i class="fa-solid fa-droplet"></i>
        </div>
        <div class="sw-color-swatch-info">
            <h4 class="sw-color-swatch-name">Accent Primary</h4>
            <div class="sw-color-swatch-details">
                <div class="sw-color-swatch-detail">
                    <span>HEX:</span>
                    <code>#0078D4</code>
                </div>
                <div class="sw-color-swatch-detail">
                    <span>RGB:</span>
                    <code>rgb(0, 120, 212)</code>
                </div>
                <div class="sw-color-swatch-detail">
                    <span>CSS:</span>
                    <code>var(--accent)</code>
                    <span class="sw-color-contrast-badge high">AA ✓</span>
                </div>
            </div>
        </div>
    </div>

    <div class="sw-color-swatch">
        <div class="sw-color-swatch-preview" style="background: #16C60C;">
            <i class="fa-solid fa-check-circle"></i>
        </div>
        <div class="sw-color-swatch-info">
            <h4 class="sw-color-swatch-name">Success</h4>
            <div class="sw-color-swatch-details">
                <div class="sw-color-swatch-detail">
                    <span>HEX:</span>
                    <code>#16C60C</code>
                </div>
                <div class="sw-color-swatch-detail">
                    <span>RGB:</span>
                    <code>rgb(22, 198, 12)</code>
                </div>
                <div class="sw-color-swatch-detail">
                    <span>CSS:</span>
                    <code>var(--success)</code>
                    <span class="sw-color-contrast-badge high">AA ✓</span>
                </div>
            </div>
        </div>
    </div>

    <div class="sw-color-swatch">
        <div class="sw-color-swatch-preview" style="background: #FFB900;">
            <i class="fa-solid fa-exclamation-triangle"></i>
        </div>
        <div class="sw-color-swatch-info">
            <h4 class="sw-color-swatch-name">Warning</h4>
            <div class="sw-color-swatch-details">
                <div class="sw-color-swatch-detail">
                    <span>HEX:</span>
                    <code>#FFB900</code>
                </div>
                <div class="sw-color-swatch-detail">
                    <span>RGB:</span>
                    <code>rgb(255, 185, 0)</code>
                </div>
                <div class="sw-color-swatch-detail">
                    <span>CSS:</span>
                    <code>var(--warning)</code>
                    <span class="sw-color-contrast-badge medium">A ~</span>
                </div>
            </div>
        </div>
    </div>

    <div class="sw-color-swatch">
        <div class="sw-color-swatch-preview" style="background: #E81123;">
            <i class="fa-solid fa-times-circle"></i>
        </div>
        <div class="sw-color-swatch-info">
            <h4 class="sw-color-swatch-name">Danger</h4>
            <div class="sw-color-swatch-details">
                <div class="sw-color-swatch-detail">
                    <span>HEX:</span>
                    <code>#E81123</code>
                </div>
                <div class="sw-color-swatch-detail">
                    <span>RGB:</span>
                    <code>rgb(232, 17, 35)</code>
                </div>
                <div class="sw-color-swatch-detail">
                    <span>CSS:</span>
                    <code>var(--danger)</code>
                    <span class="sw-color-contrast-badge high">AA ✓</span>
                </div>
            </div>
        </div>
    </div>

    <div class="sw-color-swatch">
        <div class="sw-color-swatch-preview" style="background: #00BCF2;">
            <i class="fa-solid fa-info-circle"></i>
        </div>
        <div class="sw-color-swatch-info">
            <h4 class="sw-color-swatch-name">Info</h4>
            <div class="sw-color-swatch-details">
                <div class="sw-color-swatch-detail">
                    <span>HEX:</span>
                    <code>#00BCF2</code>
                </div>
                <div class="sw-color-swatch-detail">
                    <span>RGB:</span>
                    <code>rgb(0, 188, 242)</code>
                </div>
                <div class="sw-color-swatch-detail">
                    <span>CSS:</span>
                    <code>var(--info)</code>
                    <span class="sw-color-contrast-badge high">AA ✓</span>
                </div>
            </div>
        </div>
    </div>

    <div class="sw-color-swatch">
        <div class="sw-color-swatch-preview" style="background: #808080;">
            <i class="fa-solid fa-circle"></i>
        </div>
        <div class="sw-color-swatch-info">
            <h4 class="sw-color-swatch-name">Secondary</h4>
            <div class="sw-color-swatch-details">
                <div class="sw-color-swatch-detail">
                    <span>HEX:</span>
                    <code>#808080</code>
                </div>
                <div class="sw-color-swatch-detail">
                    <span>RGB:</span>
                    <code>rgb(128, 128, 128)</code>
                </div>
                <div class="sw-color-swatch-detail">
                    <span>CSS:</span>
                    <code>var(--text-secondary)</code>
                    <span class="sw-color-contrast-badge high">AA ✓</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Color Shades -->
<div class="cl-section-title">
    <i class="fa-solid fa-swatchbook"></i>
    Color Shades <span class="badge badge-info">Palette</span>
</div>

<div class="cl-cl-colors-grid-2">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-droplet"></i>
                </div>
                <div>
                    <h3>Accent Blue Shades</h3>
                    <p class="card-subtitle">Primary color variations</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="cl-example">
                <span class="cl-example-label">Blue Color Palette</span>
                <div class="sw-color-palette-grid">
                    <div class="sw-color-palette-item" style="background: #004578;" data-tooltip="#004578">900</div>
                    <div class="sw-color-palette-item" style="background: #005A9E;" data-tooltip="#005A9E">800</div>
                    <div class="sw-color-palette-item" style="background: #0068B3;" data-tooltip="#0068B3">700</div>
                    <div class="sw-color-palette-item" style="background: #0078D4;" data-tooltip="#0078D4">600</div>
                    <div class="sw-color-palette-item" style="background: #1A86D9;" data-tooltip="#1A86D9">500</div>
                    <div class="sw-color-palette-item" style="background: #3A96E0;" data-tooltip="#3A96E0">400</div>
                    <div class="sw-color-palette-item" style="background: #5AA6E6;" data-tooltip="#5AA6E6">300</div>
                    <div class="sw-color-palette-item" style="background: #7AB6ED;" data-tooltip="#7AB6ED">200</div>
                    <div class="sw-color-palette-item" style="background: #9AC6F3;" data-tooltip="#9AC6F3">100</div>
                    <div class="sw-color-palette-item" style="background: #BAD6FA;" data-tooltip="#BAD6FA">50</div>
                </div>
                <div class="cl-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Click any shade to copy hex code
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-leaf"></i>
                </div>
                <div>
                    <h3>Success Green Shades</h3>
                    <p class="card-subtitle">Success color variations</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="cl-example">
                <span class="cl-example-label">Green Color Palette</span>
                <div class="sw-color-palette-grid">
                    <div class="sw-color-palette-item" style="background: #0B8A08;" data-tooltip="#0B8A08">900</div>
                    <div class="sw-color-palette-item" style="background: #0FA80A;" data-tooltip="#0FA80A">800</div>
                    <div class="sw-color-palette-item" style="background: #12C60C;" data-tooltip="#12C60C">700</div>
                    <div class="sw-color-palette-item" style="background: #16C60C;" data-tooltip="#16C60C">600</div>
                    <div class="sw-color-palette-item" style="background: #2DD41A;" data-tooltip="#2DD41A">500</div>
                    <div class="sw-color-palette-item" style="background: #4CDD3A;" data-tooltip="#4CDD3A">400</div>
                    <div class="sw-color-palette-item" style="background: #6CE65A;" data-tooltip="#6CE65A">300</div>
                    <div class="sw-color-palette-item" style="background: #8CEE7A;" data-tooltip="#8CEE7A">200</div>
                    <div class="sw-color-palette-item" style="background: #ACF59A;" data-tooltip="#ACF59A">100</div>
                    <div class="sw-color-palette-item" style="background: #CCFDBA;" data-tooltip="#CCFDBA">50</div>
                </div>
                <div class="cl-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Hover to see hex code, click to copy
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Gradients -->
<div class="cl-section-title">
    <i class="fa-solid fa-fill-drip"></i>
    Gradient Presets <span class="badge badge-warning">Modern</span>
</div>

<div class="cl-cl-colors-grid-2">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                </div>
                <div>
                    <h3>Preset Gradients</h3>
                    <p class="card-subtitle">Ready-to-use gradient combinations</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="cl-example">
                <span class="cl-example-label">Popular Gradients</span>
                
                <div class="sw-color-gradient-box" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                    Purple Dream
                </div>
                <div class="sw-color-gradient-info">
                    <span class="sw-color-gradient-name">Purple Dream</span>
                    <span class="sw-color-gradient-code">#667eea → #764ba2</span>
                </div>

                <div class="sw-color-gradient-box" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                    Pink Sunset
                </div>
                <div class="sw-color-gradient-info">
                    <span class="sw-color-gradient-name">Pink Sunset</span>
                    <span class="sw-color-gradient-code">#f093fb → #f5576c</span>
                </div>

                <div class="sw-color-gradient-box" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                    Ocean Blue
                </div>
                <div class="sw-color-gradient-info">
                    <span class="sw-color-gradient-name">Ocean Blue</span>
                    <span class="sw-color-gradient-code">#4facfe → #00f2fe</span>
                </div>

                <div class="sw-color-gradient-box" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">
                    Fresh Green
                </div>
                <div class="sw-color-gradient-info">
                    <span class="sw-color-gradient-name">Fresh Green</span>
                    <span class="sw-color-gradient-code">#43e97b → #38f9d7</span>
                </div>

                <div class="sw-color-gradient-box" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                    Warm Flame
                </div>
                <div class="sw-color-gradient-info">
                    <span class="sw-color-gradient-name">Warm Flame</span>
                    <span class="sw-color-gradient-code">#fa709a → #fee140</span>
                </div>

                <div class="sw-color-gradient-box" style="background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);">
                    Peach Cream
                </div>
                <div class="sw-color-gradient-info">
                    <span class="sw-color-gradient-name">Peach Cream</span>
                    <span class="sw-color-gradient-code">#ffecd2 → #fcb69f</span>
                </div>

                <div class="cl-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Click any gradient to copy CSS code
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-code"></i>
                </div>
                <div>
                    <h3>Gradient Usage</h3>
                    <p class="card-subtitle">How to use gradients in your project</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="cl-example">
                <span class="cl-example-label">CSS Implementation</span>
                <pre style="background: var(--bg-tertiary); padding: 16px; border-radius: 8px; font-size: 12px; overflow-x: auto; margin-bottom: 16px;"><code>/* Linear Gradient */
background: linear-gradient(
  135deg, 
  #667eea 0%, 
  #764ba2 100%
);

/* Radial Gradient */
background: radial-gradient(
  circle, 
  #667eea, 
  #764ba2
);

/* Diagonal Gradient */
background: linear-gradient(
  to bottom right, 
  #667eea, 
  #764ba2
);</code></pre>

                <span class="cl-example-label">Common Angles</span>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <div style="width: 60px; height: 40px; background: linear-gradient(0deg, #667eea, #764ba2); border-radius: 4px;"></div>
                        <code style="font-size: 12px;">0deg (bottom to top)</code>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <div style="width: 60px; height: 40px; background: linear-gradient(90deg, #667eea, #764ba2); border-radius: 4px;"></div>
                        <code style="font-size: 12px;">90deg (left to right)</code>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <div style="width: 60px; height: 40px; background: linear-gradient(135deg, #667eea, #764ba2); border-radius: 4px;"></div>
                        <code style="font-size: 12px;">135deg (diagonal)</code>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <div style="width: 60px; height: 40px; background: linear-gradient(180deg, #667eea, #764ba2); border-radius: 4px;"></div>
                        <code style="font-size: 12px;">180deg (top to bottom)</code>
                    </div>
                </div>
                <div class="cl-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    135deg is most commonly used for modern UI
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CSS Variables -->
<div class="cl-section-title">
    <i class="fa-solid fa-code"></i>
    CSS Variables <span class="badge badge-primary">Reference</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-book"></i>
            </div>
            <div>
                <h3>Complete CSS Variables Reference</h3>
                <p class="card-subtitle">All available color variables</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="cl-example">
            <span class="cl-example-label">CSS Custom Properties</span>
            <table class="sw-color-variables-table">
                <thead>
                    <tr>
                        <th>Variable</th>
                        <th>Value</th>
                        <th>Usage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>--accent</code></td>
                        <td><span class="sw-color-preview" style="background: #0078D4;"></span>#0078D4</td>
                        <td>Primary actions, links, focus states</td>
                    </tr>
                    <tr>
                        <td><code>--success</code></td>
                        <td><span class="sw-color-preview" style="background: #16C60C;"></span>#16C60C</td>
                        <td>Success messages, confirmations</td>
                    </tr>
                    <tr>
                        <td><code>--warning</code></td>
                        <td><span class="sw-color-preview" style="background: #FFB900;"></span>#FFB900</td>
                        <td>Warning alerts, caution indicators</td>
                    </tr>
                    <tr>
                        <td><code>--danger</code></td>
                        <td><span class="sw-color-preview" style="background: #E81123;"></span>#E81123</td>
                        <td>Error messages, destructive actions</td>
                    </tr>
                    <tr>
                        <td><code>--info</code></td>
                        <td><span class="sw-color-preview" style="background: #00BCF2;"></span>#00BCF2</td>
                        <td>Informational messages, tips</td>
                    </tr>
                    <tr>
                        <td><code>--text-primary</code></td>
                        <td><span class="sw-color-preview" style="background: #1A1A1A;"></span>#1A1A1A</td>
                        <td>Main text content, headings</td>
                    </tr>
                    <tr>
                        <td><code>--text-secondary</code></td>
                        <td><span class="sw-color-preview" style="background: #808080;"></span>#808080</td>
                        <td>Secondary text, labels, captions</td>
                    </tr>
                    <tr>
                        <td><code>--bg-card</code></td>
                        <td><span class="sw-color-preview" style="background: #FFFFFF;"></span>#FFFFFF</td>
                        <td>Card backgrounds, containers</td>
                    </tr>
                    <tr>
                        <td><code>--bg-secondary</code></td>
                        <td><span class="sw-color-preview" style="background: #F8F9FA;"></span>#F8F9FA</td>
                        <td>Secondary backgrounds</td>
                    </tr>
                    <tr>
                        <td><code>--bg-tertiary</code></td>
                        <td><span class="sw-color-preview" style="background: #E9ECEF;"></span>#E9ECEF</td>
                        <td>Tertiary backgrounds, code blocks</td>
                    </tr>
                    <tr>
                        <td><code>--border-color</code></td>
                        <td><span class="sw-color-preview" style="background: #DEE2E6;"></span>#DEE2E6</td>
                        <td>Borders, dividers, separators</td>
                    </tr>
                </tbody>
            </table>
            <div class="cl-helper">
                <i class="fa-solid fa-circle-info"></i>
                Use CSS variables for consistent theming: <code>var(--accent)</code>
            </div>
        </div>
    </div>
</div>

<!-- Neutrals -->
<div class="cl-section-title">
    <i class="fa-solid fa-circle-half-stroke"></i>
    Neutral Colors <span class="badge badge-secondary">Grayscale</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-secondary">
                <i class="fa-solid fa-grip"></i>
            </div>
            <div>
                <h3>Gray Scale Palette</h3>
                <p class="card-subtitle">Complete neutral color system</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="cl-example">
            <span class="cl-example-label">Full Gray Spectrum</span>
            <div class="sw-color-palette-grid">
                <div class="sw-color-palette-item" style="background: #030712; color: #fff;" data-tooltip="#030712">950</div>
                <div class="sw-color-palette-item" style="background: #111827; color: #fff;" data-tooltip="#111827">900</div>
                <div class="sw-color-palette-item" style="background: #1F2937; color: #fff;" data-tooltip="#1F2937">800</div>
                <div class="sw-color-palette-item" style="background: #374151; color: #fff;" data-tooltip="#374151">700</div>
                <div class="sw-color-palette-item" style="background: #4B5563; color: #fff;" data-tooltip="#4B5563">600</div>
                <div class="sw-color-palette-item" style="background: #6B7280; color: #fff;" data-tooltip="#6B7280">500</div>
                <div class="sw-color-palette-item" style="background: #9CA3AF;" data-tooltip="#9CA3AF">400</div>
                <div class="sw-color-palette-item" style="background: #D1D5DB;" data-tooltip="#D1D5DB">300</div>
                <div class="sw-color-palette-item" style="background: #E5E7EB;" data-tooltip="#E5E7EB">200</div>
                <div class="sw-color-palette-item" style="background: #F3F4F6;" data-tooltip="#F3F4F6">100</div>
                <div class="sw-color-palette-item" style="background: #F9FAFB;" data-tooltip="#F9FAFB">50</div>
            </div>
            <div class="cl-helper">
                <i class="fa-solid fa-circle-info"></i>
                Neutral colors for backgrounds, borders, and text
            </div>
        </div>
    </div>
</div>

<!-- Semantic Colors -->
<div class="cl-section-title">
    <i class="fa-solid fa-tags"></i>
    Semantic Color Variants
</div>

<div class="cl-cl-colors-grid-2">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-droplet"></i>
                </div>
                <div>
                    <h3>Info & Purple Shades</h3>
                    <p class="card-subtitle">Extended color palettes</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="cl-example">
                <span class="cl-example-label">Cyan Info Palette</span>
                <div class="sw-color-palette-grid">
                    <div class="sw-color-palette-item" style="background: #083344; color: #fff;" data-tooltip="#083344">900</div>
                    <div class="sw-color-palette-item" style="background: #0E4B66; color: #fff;" data-tooltip="#0E4B66">800</div>
                    <div class="sw-color-palette-item" style="background: #156388; color: #fff;" data-tooltip="#156388">700</div>
                    <div class="sw-color-palette-item" style="background: #1C7FAA; color: #fff;" data-tooltip="#1C7FAA">600</div>
                    <div class="sw-color-palette-item" style="background: #239CCC; color: #fff;" data-tooltip="#239CCC">500</div>
                    <div class="sw-color-palette-item" style="background: #00BCF2; color: #fff;" data-tooltip="#00BCF2">400</div>
                    <div class="sw-color-palette-item" style="background: #33C8F5;" data-tooltip="#33C8F5">300</div>
                    <div class="sw-color-palette-item" style="background: #66D4F8;" data-tooltip="#66D4F8">200</div>
                    <div class="sw-color-palette-item" style="background: #99E0FA;" data-tooltip="#99E0FA">100</div>
                    <div class="sw-color-palette-item" style="background: #CCECFB;" data-tooltip="#CCECFB">50</div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon" style="background: #8B5CF6; color: white;">
                    <i class="fa-solid fa-gem"></i>
                </div>
                <div>
                    <h3>Purple & Violet Shades</h3>
                    <p class="card-subtitle">Royal color variations</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="cl-example">
                <span class="cl-example-label">Purple Color Palette</span>
                <div class="sw-color-palette-grid">
                    <div class="sw-color-palette-item" style="background: #3B0764; color: #fff;" data-tooltip="#3B0764">900</div>
                    <div class="sw-color-palette-item" style="background: #581C87; color: #fff;" data-tooltip="#581C87">800</div>
                    <div class="sw-color-palette-item" style="background: #6B21A8; color: #fff;" data-tooltip="#6B21A8">700</div>
                    <div class="sw-color-palette-item" style="background: #7C3AED; color: #fff;" data-tooltip="#7C3AED">600</div>
                    <div class="sw-color-palette-item" style="background: #8B5CF6; color: #fff;" data-tooltip="#8B5CF6">500</div>
                    <div class="sw-color-palette-item" style="background: #A78BFA;" data-tooltip="#A78BFA">400</div>
                    <div class="sw-color-palette-item" style="background: #C4B5FD;" data-tooltip="#C4B5FD">300</div>
                    <div class="sw-color-palette-item" style="background: #DDD6FE;" data-tooltip="#DDD6FE">200</div>
                    <div class="sw-color-palette-item" style="background: #EDE9FE;" data-tooltip="#EDE9FE">100</div>
                    <div class="sw-color-palette-item" style="background: #F5F3FF;" data-tooltip="#F5F3FF">50</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Background Colors -->
<div class="cl-section-title">
    <i class="fa-solid fa-fill"></i>
    Background & Surface Colors
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-layer-group"></i>
            </div>
            <div>
                <h3>UI Layer Colors</h3>
                <p class="card-subtitle">Background hierarchy system</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="cl-example">
            <span class="cl-example-label">Background Color Examples</span>
            <div style="display: flex; flex-direction: column; gap: 16px;">
                <div style="padding: 24px; background: var(--surface); border: 1px solid var(--border-color); border-radius: 8px;">
                    <div style="font-weight: 600; margin-bottom: 8px;">Surface (White)</div>
                    <code style="font-size: 12px;">var(--surface) / #FFFFFF</code>
                    <span class="sw-color-contrast-badge high" style="margin-left: 8px;">Primary BG</span>
                </div>
                
                <div style="padding: 24px; background: var(--bg-secondary); border: 1px solid var(--border-color); border-radius: 8px;">
                    <div style="font-weight: 600; margin-bottom: 8px;">Background Secondary</div>
                    <code style="font-size: 12px;">var(--bg-secondary) / #FAFAFA</code>
                    <span class="sw-color-contrast-badge high" style="margin-left: 8px;">Page BG</span>
                </div>
                
                <div style="padding: 24px; background: var(--bg-tertiary); border: 1px solid var(--border-color); border-radius: 8px;">
                    <div style="font-weight: 600; margin-bottom: 8px;">Background Tertiary</div>
                    <code style="font-size: 12px;">var(--bg-tertiary) / #F5F5F5</code>
                    <span class="sw-color-contrast-badge high" style="margin-left: 8px;">Code Blocks</span>
                </div>
                
                <div style="padding: 24px; background: var(--bg-overlay); color: var(--text-primary); border: 1px solid var(--border-color); border-radius: 8px;">
                    <div style="font-weight: 600; margin-bottom: 8px;">Overlay (Dark)</div>
                    <code style="font-size: 12px;">var(--bg-overlay) / rgba(0,0,0,0.4)</code>
                    <span class="sw-color-contrast-badge high" style="margin-left: 8px;">Modal BG</span>
                </div>
            </div>
            <div class="cl-helper">
                <i class="fa-solid fa-circle-info"></i>
                Click any background to copy its color value
            </div>
        </div>
    </div>
</div>

<!-- Text Colors -->
<div class="cl-section-title">
    <i class="fa-solid fa-font"></i>
    Text & Typography Colors
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-text-height"></i>
            </div>
            <div>
                <h3>Text Color Hierarchy</h3>
                <p class="card-subtitle">Readable text color system</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="cl-example">
            <span class="cl-example-label">Text Color Examples</span>
            <div style="display: flex; flex-direction: column; gap: 20px; padding: 20px; background: var(--surface); border-radius: 8px; border: 1px solid var(--border-color);">
                <div style="cursor: pointer;">
                    <div style="font-size: 20px; font-weight: 700; color: var(--text-primary); margin-bottom: 8px;">Primary Text Heading</div>
                    <code style="font-size: 12px;">var(--text-primary) / #1A1A1A</code>
                    <span class="sw-color-contrast-badge high">Highest Contrast</span>
                </div>
                
                <div style="cursor: pointer;">
                    <div style="font-size: 16px; font-weight: 500; color: var(--text-secondary); margin-bottom: 8px;">Secondary Text Body</div>
                    <code style="font-size: 12px;">var(--text-secondary) / #666666</code>
                    <span class="sw-color-contrast-badge high">Medium Contrast</span>
                </div>
                
                <div style="cursor: pointer;">
                    <div style="font-size: 14px; font-weight: 400; color: var(--text-tertiary); margin-bottom: 8px;">Tertiary Text Caption</div>
                    <code style="font-size: 12px;">var(--text-tertiary) / #999999</code>
                    <span class="sw-color-contrast-badge medium">Low Contrast</span>
                </div>
                
                <div style="cursor: pointer;">
                    <div style="font-size: 14px; font-weight: 500; color: var(--accent); margin-bottom: 8px;">Interactive Link Text</div>
                    <code style="font-size: 12px;">var(--accent) / #0078D4</code>
                    <span class="sw-color-contrast-badge high">Action Color</span>
                </div>
                
                <div style="cursor: pointer;">
                    <div style="font-size: 14px; font-weight: 500; color: var(--success); margin-bottom: 8px;"><i class="fa-solid fa-check-circle"></i> Success Status Text</div>
                    <code style="font-size: 12px;">var(--success) / #16C60C</code>
                    <span class="sw-color-contrast-badge high">Positive</span>
                </div>
                
                <div style="cursor: pointer;">
                    <div style="font-size: 14px; font-weight: 500; color: var(--danger); margin-bottom: 8px;"><i class="fa-solid fa-exclamation-triangle"></i> Error Alert Text</div>
                    <code style="font-size: 12px;">var(--danger) / #E81123</code>
                    <span class="sw-color-contrast-badge high">Critical</span>
                </div>
            </div>
            <div class="cl-helper">
                <i class="fa-solid fa-circle-info"></i>
                Maintain proper contrast ratios for accessibility
            </div>
        </div>
    </div>
</div>

<!-- Border Colors -->
<div class="cl-section-title">
    <i class="fa-solid fa-border-style"></i>
    Border & Divider Colors
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-minus"></i>
            </div>
            <div>
                <h3>Border System</h3>
                <p class="card-subtitle">Separation and boundary colors</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="cl-example">
            <span class="cl-example-label">Border Color Variants</span>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px;">
                <div style="padding: 16px; border: 2px solid var(--border-color); border-radius: 8px;">
                    <div style="font-weight: 600; margin-bottom: 8px; font-size: 13px;">Default Border</div>
                    <code style="font-size: 11px;">var(--border-color)</code>
                    <div style="margin-top: 8px; padding-top: 8px; border-top: 1px solid var(--border-color); color: var(--text-secondary); font-size: 11px;">Cards, inputs, panels</div>
                </div>
                
                <div style="padding: 16px; border: 2px solid var(--accent); border-radius: 8px;">
                    <div style="font-weight: 600; margin-bottom: 8px; font-size: 13px; color: var(--accent);">Active Border</div>
                    <code style="font-size: 11px;">var(--accent)</code>
                    <div style="margin-top: 8px; padding-top: 8px; border-top: 1px solid var(--accent); color: var(--text-secondary); font-size: 11px;">Focus, active states</div>
                </div>
                
                <div style="padding: 16px; border: 2px solid var(--success); border-radius: 8px;">
                    <div style="font-weight: 600; margin-bottom: 8px; font-size: 13px; color: var(--success);">Success Border</div>
                    <code style="font-size: 11px;">var(--success)</code>
                    <div style="margin-top: 8px; padding-top: 8px; border-top: 1px solid var(--success); color: var(--text-secondary); font-size: 11px;">Valid inputs, confirm</div>
                </div>
                
                <div style="padding: 16px; border: 2px solid var(--warning); border-radius: 8px;">
                    <div style="font-weight: 600; margin-bottom: 8px; font-size: 13px; color: var(--warning);">Warning Border</div>
                    <code style="font-size: 11px;">var(--warning)</code>
                    <div style="margin-top: 8px; padding-top: 8px; border-top: 1px solid var(--warning); color: var(--text-secondary); font-size: 11px;">Caution, pending</div>
                </div>
                
                <div style="padding: 16px; border: 2px solid var(--danger); border-radius: 8px;">
                    <div style="font-weight: 600; margin-bottom: 8px; font-size: 13px; color: var(--danger);">Danger Border</div>
                    <code style="font-size: 11px;">var(--danger)</code>
                    <div style="margin-top: 8px; padding-top: 8px; border-top: 1px solid var(--danger); color: var(--text-secondary); font-size: 11px;">Errors, validation</div>
                </div>
                
                <div style="padding: 16px; border: 2px dashed var(--border-color); border-radius: 8px;">
                    <div style="font-weight: 600; margin-bottom: 8px; font-size: 13px;">Dashed Border</div>
                    <code style="font-size: 11px;">border-style: dashed</code>
                    <div style="margin-top: 8px; padding-top: 8px; border-top: 1px dashed var(--border-color); color: var(--text-secondary); font-size: 11px;">Drop zones, hints</div>
                </div>
            </div>
            <div class="cl-helper">
                <i class="fa-solid fa-circle-info"></i>
                Use borders to create visual hierarchy and separation
            </div>
        </div>
    </div>
</div>

<!-- Accessibility -->
<div class="cl-section-title">
    <i class="fa-solid fa-universal-access"></i>
    Accessibility Guidelines
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-eye"></i>
            </div>
            <div>
                <h3>WCAG 2.1 Contrast Requirements</h3>
                <p class="card-subtitle">Ensuring readable text on colored backgrounds</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="cl-example">
            <span class="cl-example-label">Contrast Ratio Standards</span>
            <table class="sw-color-variables-table">
                <thead>
                    <tr>
                        <th>Level</th>
                        <th>Ratio</th>
                        <th>Requirement</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>AA (Normal Text)</strong></td>
                        <td>4.5:1</td>
                        <td>Minimum for normal text (< 18px)</td>
                        <td><span class="sw-color-contrast-badge high">✓ Pass</span></td>
                    </tr>
                    <tr>
                        <td><strong>AA (Large Text)</strong></td>
                        <td>3:1</td>
                        <td>Minimum for large text (≥ 18px)</td>
                        <td><span class="sw-color-contrast-badge high">✓ Pass</span></td>
                    </tr>
                    <tr>
                        <td><strong>AAA (Normal)</strong></td>
                        <td>7:1</td>
                        <td>Enhanced for normal text</td>
                        <td><span class="sw-color-contrast-badge high">✓ Pass</span></td>
                    </tr>
                    <tr>
                        <td><strong>AAA (Large)</strong></td>
                        <td>4.5:1</td>
                        <td>Enhanced for large text</td>
                        <td><span class="sw-color-contrast-badge high">✓ Pass</span></td>
                    </tr>
                </tbody>
            </table>
            <div class="cl-helper">
                <i class="fa-solid fa-circle-info"></i>
                All template colors meet WCAG 2.1 AA standards minimum
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Colors page initialization
$(document).ready(function() {
    console.log('📋 SW Colors page loaded successfully');
});
</script>
@endpush