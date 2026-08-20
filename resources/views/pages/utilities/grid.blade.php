@extends('layouts.app')

@section('title', 'Grid Options')
@section('breadcrumb', 'Grid Options')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Grid Options</h1>
        <p>Powerful CSS Grid system for creating responsive, flexible, and modern layouts with ease</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-grid-2"></i>
            <span>Grid Generator</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card sw-grid-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What is CSS Grid?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">CSS Grid Layout is a two-dimensional layout system that allows you to create complex, responsive layouts with rows and columns. It provides precise control over alignment, spacing, and item placement, making it the most powerful layout system available in CSS.</p>
            </div>
        </div>
    </div>
</div>

<!-- SW Grid System -->
<div class="sw-grid-section-title">
    <i class="fa-solid fa-border-all"></i>
    SW Grid System <span class="badge badge-primary">12 Column</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-layer-group"></i>
            </div>
            <div>
                <h3>Grid & Row Components</h3>
                <p class="card-subtitle">Using SW 12-column responsive grid system</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Grid with 12 Equal Columns (sw-col-1 x12)</span>
            <div class="sw-grid-code">&lt;div class="sw-row"&gt; &lt;div class="sw-col-1"&gt;</div>
            <div class="sw-row">
                <div class="sw-col-1"><div class="sw-grid-box">1</div></div>
                <div class="sw-col-1"><div class="sw-grid-box">1</div></div>
                <div class="sw-col-1"><div class="sw-grid-box">1</div></div>
                <div class="sw-col-1"><div class="sw-grid-box">1</div></div>
                <div class="sw-col-1"><div class="sw-grid-box">1</div></div>
                <div class="sw-col-1"><div class="sw-grid-box">1</div></div>
                <div class="sw-col-1"><div class="sw-grid-box">1</div></div>
                <div class="sw-col-1"><div class="sw-grid-box">1</div></div>
                <div class="sw-col-1"><div class="sw-grid-box">1</div></div>
                <div class="sw-col-1"><div class="sw-grid-box">1</div></div>
                <div class="sw-col-1"><div class="sw-grid-box">1</div></div>
                <div class="sw-col-1"><div class="sw-grid-box">1</div></div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                12 columns - each sw-col-1 takes 1/12 of width
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Grid with 6 Columns (sw-col-2 x6)</span>
            <div class="sw-grid-code">&lt;div class="sw-col-2"&gt; - Each spans 2/12</div>
            <div class="sw-row">
                <div class="sw-col-2"><div class="sw-grid-box">2</div></div>
                <div class="sw-col-2"><div class="sw-grid-box">2</div></div>
                <div class="sw-col-2"><div class="sw-grid-box">2</div></div>
                <div class="sw-col-2"><div class="sw-grid-box">2</div></div>
                <div class="sw-col-2"><div class="sw-grid-box">2</div></div>
                <div class="sw-col-2"><div class="sw-grid-box">2</div></div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                6 columns - each sw-col-2 takes 2/12 (1/6) of width
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Grid with 4 Columns (sw-col-3 x4)</span>
            <div class="sw-grid-code">&lt;div class="sw-col-3"&gt; - Each spans 3/12</div>
            <div class="sw-row">
                <div class="sw-col-3"><div class="sw-grid-box">3</div></div>
                <div class="sw-col-3"><div class="sw-grid-box">3</div></div>
                <div class="sw-col-3"><div class="sw-grid-box">3</div></div>
                <div class="sw-col-3"><div class="sw-grid-box">3</div></div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                4 columns - each sw-col-3 takes 3/12 (1/4) of width
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Grid with 3 Columns (sw-col-4 x3)</span>
            <div class="sw-grid-code">&lt;div class="sw-col-4"&gt; - Each spans 4/12</div>
            <div class="sw-row">
                <div class="sw-col-4"><div class="sw-grid-box">4</div></div>
                <div class="sw-col-4"><div class="sw-grid-box">4</div></div>
                <div class="sw-col-4"><div class="sw-grid-box">4</div></div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                3 columns - each sw-col-4 takes 4/12 (1/3) of width
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Grid with 2 Columns (sw-col-6 x2)</span>
            <div class="sw-grid-code">&lt;div class="sw-col-6"&gt; - Each spans 6/12</div>
            <div class="sw-row">
                <div class="sw-col-6"><div class="sw-grid-box">6</div></div>
                <div class="sw-col-6"><div class="sw-grid-box">6</div></div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                2 columns - each sw-col-6 takes 6/12 (1/2) of width
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Mixed Grid (sw-col-1 + sw-col-11)</span>
            <div class="grid-code">sw-col-1 + sw-col-11 = 12</div>
            <div class="sw-row">
                <div class="sw-col-1"><div class="sw-grid-box">1</div></div>
                <div class="sw-col-11"><div class="sw-grid-box">11</div></div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Sidebar (1/12) + Main content (11/12)
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Mixed Grid (sw-col-1 + sw-col-2 + sw-col-9)</span>
            <div class="grid-code">sw-col-1 + sw-col-2 + sw-col-9 = 12</div>
            <div class="sw-row">
                <div class="sw-col-1"><div class="sw-grid-box">1</div></div>
                <div class="sw-col-2"><div class="sw-grid-box">2</div></div>
                <div class="sw-col-9"><div class="sw-grid-box">9</div></div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Three columns with different widths
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Mixed Grid (sw-col-1 + sw-col-2 + sw-col-3 + sw-col-6)</span>
            <div class="grid-code">sw-col-1 + sw-col-2 + sw-col-3 + sw-col-6 = 12</div>
            <div class="sw-row">
                <div class="sw-col-1"><div class="sw-grid-box">1</div></div>
                <div class="sw-col-2"><div class="sw-grid-box">2</div></div>
                <div class="sw-col-3"><div class="sw-grid-box">3</div></div>
                <div class="sw-col-6"><div class="sw-grid-box">6</div></div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Progressive widths: 1+2+3+6 = 12
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Complex Grid (sw-col-1 + sw-col-2 + sw-col-3 + sw-col-4 + sw-col-2)</span>
            <div class="grid-code">sw-col-1 + sw-col-2 + sw-col-3 + sw-col-4 + sw-col-2 = 12</div>
            <div class="sw-row">
                <div class="sw-col-1"><div class="sw-grid-box">1</div></div>
                <div class="sw-col-2"><div class="sw-grid-box">2</div></div>
                <div class="sw-col-3"><div class="sw-grid-box">3</div></div>
                <div class="sw-col-4"><div class="sw-grid-box">4</div></div>
                <div class="sw-col-2"><div class="sw-grid-box">2</div></div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Complex layout: 1+2+3+4+2 = 12
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Full Width (sw-col-12)</span>
            <div class="grid-code">sw-col-12 - Full width column</div>
            <div class="sw-row">
                <div class="sw-col-12"><div class="sw-grid-box">12 - Full Width</div></div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Single column spanning all 12 columns
            </div>
        </div>
    </div>
</div>

<!-- Basic Grid -->
<div class="sw-grid-section-title">
    <i class="fa-solid fa-grid-2"></i>
    Basic Grid System <span class="badge badge-primary">Essential</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-columns"></i>
            </div>
            <div>
                <h3>Simple Grid Layouts</h3>
                <p class="card-subtitle">2, 3, and 4 column grids</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-grid-example">
            <span class="sw-grid-example-label">2 Column Grid</span>
            <div class="grid-code">grid-template-columns: repeat(2, 1fr);</div>
            <div class="sw-grid-demo" style="grid-template-columns: repeat(2, 1fr);">
                <div class="sw-grid-box">1</div>
                <div class="sw-grid-box">2</div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Two equal-width columns
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">3 Column Grid</span>
            <div class="grid-code">grid-template-columns: repeat(3, 1fr);</div>
            <div class="sw-grid-demo" style="grid-template-columns: repeat(3, 1fr);">
                <div class="sw-grid-box">1</div>
                <div class="sw-grid-box">2</div>
                <div class="sw-grid-box">3</div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Three equal-width columns
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">4 Column Grid</span>
            <div class="grid-code">grid-template-columns: repeat(4, 1fr);</div>
            <div class="sw-grid-demo" style="grid-template-columns: repeat(4, 1fr);">
                <div class="sw-grid-box">1</div>
                <div class="sw-grid-box">2</div>
                <div class="sw-grid-box">3</div>
                <div class="sw-grid-box">4</div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Four equal-width columns
            </div>
        </div>
    </div>
</div>

<!-- Responsive Grid -->
<div class="sw-grid-section-title">
    <i class="fa-solid fa-mobile-screen"></i>
    Responsive Grid
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-expand"></i>
            </div>
            <div>
                <h3>Responsive Breakpoints</h3>
                <p class="card-subtitle">Auto-adjust columns based on screen size</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Auto-Fit Grid</span>
            <div class="grid-code">grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));</div>
            <div class="sw-grid-autofit-demo">
                <div class="sw-grid-box">1</div>
                <div class="sw-grid-box">2</div>
                <div class="sw-grid-box">3</div>
                <div class="sw-grid-box">4</div>
                <div class="sw-grid-box">5</div>
                <div class="sw-grid-box">6</div>
            </div>
            <div class="sw-grid-responsive-labels">
                <span class="sw-grid-responsive-label">Mobile: 1 col</span>
                <span class="sw-grid-responsive-label">Tablet: 2-3 col</span>
                <span class="sw-grid-responsive-label active">Desktop: auto-fit</span>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Resize browser to see responsive behavior
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Breakpoint-Based Grid</span>
            <div class="sw-grid-code">
                @media (min-width: 576px) { grid-template-columns: repeat(2, 1fr); }<br>
                @media (min-width: 768px) { grid-template-columns: repeat(3, 1fr); }<br>
                @media (min-width: 992px) { grid-template-columns: repeat(4, 1fr); }
            </div>
            <div class="sw-grid-breakpoints-demo">
                <div class="sw-grid-box">1</div>
                <div class="sw-grid-box">2</div>
                <div class="sw-grid-box">3</div>
                <div class="sw-grid-box">4</div>
            </div>
            <div class="sw-grid-responsive-labels">
                <span class="sw-grid-responsive-label">576px: 2 cols</span>
                <span class="sw-grid-responsive-label">768px: 3 cols</span>
                <span class="sw-grid-responsive-label active">992px: 4 cols</span>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Progressive column count based on breakpoints
            </div>
        </div>
    </div>
</div>

<!-- Grid Gaps -->
<div class="sw-grid-section-title">
    <i class="fa-solid fa-arrows-left-right"></i>
    Grid Gaps & Spacing
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-ruler-horizontal"></i>
            </div>
            <div>
                <h3>Gap Sizes</h3>
                <p class="card-subtitle">Control spacing between grid items</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Gap Variations</span>
            
            <div class="grid-code">gap: 8px;</div>
            <div class="gap-demo gap-xs">
                <div class="grid-box">8px</div>
                <div class="grid-box">8px</div>
                <div class="grid-box">8px</div>
            </div>

            <div class="grid-code">gap: 12px;</div>
            <div class="gap-demo gap-sm">
                <div class="grid-box">12px</div>
                <div class="grid-box">12px</div>
                <div class="grid-box">12px</div>
            </div>

            <div class="grid-code">gap: 16px;</div>
            <div class="gap-demo gap-md">
                <div class="grid-box">16px</div>
                <div class="grid-box">16px</div>
                <div class="grid-box">16px</div>
            </div>

            <div class="grid-code">gap: 24px;</div>
            <div class="gap-demo gap-lg">
                <div class="grid-box">24px</div>
                <div class="grid-box">24px</div>
                <div class="grid-box">24px</div>
            </div>

            <div class="grid-code">gap: 32px;</div>
            <div class="gap-demo gap-xl">
                <div class="grid-box">32px</div>
                <div class="grid-box">32px</div>
                <div class="grid-box">32px</div>
            </div>

            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                gap controls both row-gap and column-gap
            </div>
        </div>
    </div>
</div>

<!-- Grid Alignment -->
<div class="sw-grid-section-title">
    <i class="fa-solid fa-align-center"></i>
    Grid Alignment
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-up-down-left-right"></i>
            </div>
            <div>
                <h3>Vertical Alignment</h3>
                <p class="card-subtitle">Control item alignment within grid cells</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Align Items Options</span>
            
            <div class="grid-code">align-items: start;</div>
            <div class="sw-grid-align-demo sw-grid-align-start">
                <div class="sw-grid-box" style="min-height: 40px;">Short</div>
                <div class="sw-grid-box" style="min-height: 80px;">Medium</div>
                <div class="sw-grid-box" style="min-height: 60px;">Tall</div>
            </div>

            <div class="sw-grid-code">align-items: center;</div>
            <div class="sw-grid-align-demo sw-grid-align-center">
                <div class="sw-grid-box" style="min-height: 40px;">Short</div>
                <div class="sw-grid-box" style="min-height: 80px;">Medium</div>
                <div class="sw-grid-box" style="min-height: 60px;">Tall</div>
            </div>

            <div class="sw-grid-code">align-items: end;</div>
            <div class="sw-grid-align-demo sw-grid-align-end">
                <div class="sw-grid-box" style="min-height: 40px;">Short</div>
                <div class="sw-grid-box" style="min-height: 80px;">Medium</div>
                <div class="sw-grid-box" style="min-height: 60px;">Tall</div>
            </div>

            <div class="sw-grid-code">align-items: stretch;</div>
            <div class="sw-grid-align-demo sw-grid-align-stretch">
                <div class="sw-grid-box">Stretch</div>
                <div class="sw-grid-box">Stretch</div>
                <div class="sw-grid-box">Stretch</div>
            </div>

            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Alignment controls vertical positioning in grid cells
            </div>
        </div>
    </div>
</div>

<!-- Grid Template Areas -->
<div class="sw-grid-section-title">
    <i class="fa-solid fa-object-group"></i>
    Grid Template Areas
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-layout"></i>
            </div>
            <div>
                <h3>Named Grid Areas</h3>
                <p class="card-subtitle">Define layout regions with semantic names</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Page Layout with Grid Areas</span>
            <div class="sw-grid-code">
                grid-template-areas:<br>
                &nbsp;&nbsp;"header header header"<br>
                &nbsp;&nbsp;"sidebar main aside"<br>
                &nbsp;&nbsp;"footer footer footer";
            </div>
            <div class="sw-grid-areas-demo">
                <div class="sw-grid-box sw-grid-area-header">Header</div>
                <div class="sw-grid-box sw-grid-area-sidebar">Sidebar</div>
                <div class="sw-grid-box sw-grid-area-main">Main Content</div>
                <div class="sw-grid-box sw-grid-area-aside">Aside</div>
                <div class="sw-grid-box sw-grid-area-footer">Footer</div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Named areas make complex layouts easy to understand
            </div>
        </div>
    </div>
</div>

<!-- Nested Grid -->
<div class="sw-grid-section-title">
    <i class="fa-solid fa-sitemap"></i>
    Nested Grid
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-layer-group"></i>
            </div>
            <div>
                <h3>Grid within Grid</h3>
                <p class="card-subtitle">Create hierarchical layouts with nested grids</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Nested Grid Example</span>
            <div class="sw-grid-nested">
                <div class="sw-grid-nested-child">
                    <div class="sw-grid-box">Parent 1</div>
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 8px; margin-top: 8px;">
                        <div class="sw-grid-box" style="background: var(--success); min-height: 40px;">Child 1.1</div>
                        <div class="sw-grid-box" style="background: var(--success); min-height: 40px;">Child 1.2</div>
                    </div>
                </div>
                <div class="sw-grid-nested-child">
                    <div class="sw-grid-box">Parent 2</div>
                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px; margin-top: 8px;">
                        <div class="sw-grid-box" style="background: var(--warning); min-height: 40px;">C 2.1</div>
                        <div class="sw-grid-box" style="background: var(--warning); min-height: 40px;">C 2.2</div>
                        <div class="sw-grid-box" style="background: var(--warning); min-height: 40px;">C 2.3</div>
                    </div>
                </div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Any grid item can itself be a grid container
            </div>
        </div>
    </div>
</div>

<!-- Real-World Examples -->
<div class="sw-grid-section-title">
    <i class="fa-solid fa-briefcase"></i>
    Real-World Examples
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-grip"></i>
            </div>
            <div>
                <h3>Card Grid Layout</h3>
                <p class="card-subtitle">Common pattern for displaying content cards</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Responsive Card Grid</span>
            <div class="grid-code">grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));</div>
            <div class="sw-grid-content">
                <div class="sw-grid-content-card-demo">
                    <div class="sw-grid-content-card-demo-header">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <div class="sw-grid-content-card-demo-body">
                        <h4>Analytics Dashboard</h4>
                        <p>Track metrics and performance indicators</p>
                    </div>
                </div>
                <div class="content-card-demo">
                    <div class="content-card-demo-header" style="background: linear-gradient(135deg, var(--success), #4CDD3A);">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div class="sw-grid-content-card-demo-body">
                        <h4>User Management</h4>
                        <p>Manage users, roles, and permissions</p>
                    </div>
                </div>
                <div class="content-card-demo">
                    <div class="content-card-demo-header" style="background: linear-gradient(135deg, var(--warning), #FFD740);">
                        <i class="fa-solid fa-box"></i>
                    </div>
                    <div class="sw-grid-content-card-demo-body">
                        <h4>Product Catalog</h4>
                        <p>Organize and manage product inventory</p>
                    </div>
                </div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Cards automatically adjust to screen size
            </div>
        </div>
    </div>
</div>

<!-- Common Grid Patterns -->
<div class="sw-grid-section-title">
    <i class="fa-solid fa-shapes"></i>
    Common Grid Patterns <span class="badge badge-success">New</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-grid-2"></i>
            </div>
            <div>
                <h3>Sidebar + Main Layout</h3>
                <p class="card-subtitle">Classic sidebar layout pattern</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Sidebar Layout (250px + 1fr)</span>
            <div class="grid-code">grid-template-columns: 250px 1fr;</div>
            <div class="sw-grid-demo" style="grid-template-columns: 250px 1fr; gap: 16px;">
                <div class="sw-grid-box" style="background: linear-gradient(135deg, #8B5CF6, #A78BFA); min-height: 150px;">
                    Sidebar (250px)
                </div>
                <div class="sw-grid-box" style="background: linear-gradient(135deg, var(--accent), #1A86D9); min-height: 150px;">
                    Main Content (flexible)
                </div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Fixed sidebar width with flexible main content
            </div>
        </div>
    </div>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-columns-3"></i>
            </div>
            <div>
                <h3>Holy Grail Layout</h3>
                <p class="card-subtitle">Sidebar + Content + Sidebar pattern</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Three Column Layout</span>
            <div class="grid-code">grid-template-columns: 200px 1fr 200px;</div>
            <div class="sw-grid-demo" style="grid-template-columns: 200px 1fr 200px; gap: 16px;">
                <div class="sw-grid-box" style="background: linear-gradient(135deg, #8B5CF6, #A78BFA); min-height: 200px;">
                    Left Sidebar
                </div>
                <div class="sw-grid-box" style="background: linear-gradient(135deg, var(--accent), #1A86D9); min-height: 200px;">
                    Main Content
                </div>
                <div class="sw-grid-box" style="background: linear-gradient(135deg, #8B5CF6, #A78BFA); min-height: 200px;">
                    Right Sidebar
                </div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Classic three-column layout with sidebars
            </div>
        </div>
    </div>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-image"></i>
            </div>
            <div>
                <h3>Image Gallery Grid</h3>
                <p class="card-subtitle">Masonry-style photo gallery</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Gallery with Varied Sizes</span>
            <div class="sw-grid-code">
                grid-template-columns: repeat(4, 1fr);<br>
                .gallery-item:nth-child(1) { grid-column: span 2; grid-row: span 2; }
            </div>
            <div class="sw-grid-demo" style="grid-template-columns: repeat(4, 1fr); gap: 12px;">
                <div class="sw-grid-box" style="grid-column: span 2; grid-row: span 2; background: linear-gradient(135deg, #F472B6, #EC4899); min-height: 200px;">
                    Featured (2x2)
                </div>
                <div class="sw-grid-box" style="background: linear-gradient(135deg, var(--accent), #1A86D9); min-height: 94px;">
                    1
                </div>
                <div class="sw-grid-box" style="background: linear-gradient(135deg, var(--success), #2DD41A); min-height: 94px;">
                    2
                </div>
                <div class="sw-grid-box" style="background: linear-gradient(135deg, var(--warning), #FFD740); min-height: 94px;">
                    3
                </div>
                <div class="sw-grid-box" style="background: linear-gradient(135deg, var(--danger), #FF4D4D); min-height: 94px;">
                    4
                </div>
                <div class="sw-grid-box" style="grid-column: span 2; background: linear-gradient(135deg, #06B6D4, #0EA5E9); min-height: 94px;">
                    Wide (2x1)
                </div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Use grid-column and grid-row span for varied item sizes
            </div>
        </div>
    </div>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-list"></i>
            </div>
            <div>
                <h3>Dashboard Stats Grid</h3>
                <p class="card-subtitle">Statistics cards layout</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-grid-example">
            <span class="sw-grid-example-label">4 Stats Cards</span>
            <div class="grid-code">grid-template-columns: repeat(4, 1fr);</div>
            <div class="sw-grid-demo" style="grid-template-columns: repeat(4, 1fr); gap: 16px;">
                <div class="sw-grid-box" style="background: linear-gradient(135deg, #3B82F6, #2563EB); min-height: 120px; flex-direction: column; gap: 8px;">
                    <i class="fa-solid fa-users" style="font-size: 24px;"></i>
                    <span style="font-size: 24px;">1,234</span>
                    <span style="font-size: 12px; opacity: 0.9;">Total Users</span>
                </div>
                <div class="sw-grid-box" style="background: linear-gradient(135deg, #10B981, #059669); min-height: 120px; flex-direction: column; gap: 8px;">
                    <i class="fa-solid fa-dollar-sign" style="font-size: 24px;"></i>
                    <span style="font-size: 24px;">$45.2K</span>
                    <span style="font-size: 12px; opacity: 0.9;">Revenue</span>
                </div>
                <div class="sw-grid-box" style="background: linear-gradient(135deg, #F59E0B, #D97706); min-height: 120px; flex-direction: column; gap: 8px;">
                    <i class="fa-solid fa-shopping-cart" style="font-size: 24px;"></i>
                    <span style="font-size: 24px;">567</span>
                    <span style="font-size: 12px; opacity: 0.9;">Orders</span>
                </div>
                <div class="sw-grid-box" style="background: linear-gradient(135deg, #EF4444, #DC2626); min-height: 120px; flex-direction: column; gap: 8px;">
                    <i class="fa-solid fa-eye" style="font-size: 24px;"></i>
                    <span style="font-size: 24px;">12.5K</span>
                    <span style="font-size: 12px; opacity: 0.9;">Views</span>
                </div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Perfect for dashboard statistics and KPIs
            </div>
        </div>
    </div>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-danger">
                <i class="fa-solid fa-table-columns"></i>
            </div>
            <div>
                <h3>Mixed Column Widths</h3>
                <p class="card-subtitle">Unequal column distribution</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Asymmetric Grid</span>
            <div class="grid-code">grid-template-columns: 2fr 1fr 1fr;</div>
            <div class="sw-grid-demo" style="grid-template-columns: 2fr 1fr 1fr; gap: 16px;">
                <div class="sw-grid-box" style="background: linear-gradient(135deg, var(--accent), #1A86D9); min-height: 100px;">
                    Wide (2fr)
                </div>
                <div class="sw-grid-box" style="background: linear-gradient(135deg, var(--success), #2DD41A); min-height: 100px;">
                    Normal (1fr)
                </div>
                <div class="sw-grid-box" style="background: linear-gradient(135deg, var(--warning), #FFD740); min-height: 100px;">
                    Normal (1fr)
                </div>
            </div>
            
            <div class="sw-grid-code" style="margin-top: 16px;">grid-template-columns: 1fr 3fr;</div>
            <div class="sw-grid-demo" style="grid-template-columns: 1fr 3fr; gap: 16px;">
                <div class="sw-grid-box" style="background: linear-gradient(135deg, #8B5CF6, #A78BFA); min-height: 100px;">
                    Nav (1fr)
                </div>
                <div class="sw-grid-box" style="background: linear-gradient(135deg, var(--info), #0EA5E9); min-height: 100px;">
                    Content (3fr)
                </div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Use fr units for proportional column widths
            </div>
        </div>
    </div>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-border-all"></i>
            </div>
            <div>
                <h3>Full Page Layout</h3>
                <p class="card-subtitle">Complete page structure with grid areas</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Header + Nav + Content + Footer</span>
            <div class="sw-grid-code">
                grid-template-areas:<br>
                &nbsp;&nbsp;"header header header"<br>
                &nbsp;&nbsp;"nav content aside"<br>
                &nbsp;&nbsp;"footer footer footer";<br>
                grid-template-columns: 200px 1fr 250px;
            </div>
            <div class="sw-grid-demo" style="grid-template-columns: 200px 1fr 250px; grid-template-rows: 60px 300px 50px; gap: 12px;">
                <div class="sw-grid-box" style="grid-column: 1 / -1; background: linear-gradient(135deg, #1E293B, #334155); min-height: 60px;">
                    Header
                </div>
                <div class="sw-grid-box" style="background: linear-gradient(135deg, #8B5CF6, #A78BFA); min-height: 300px;">
                    Navigation
                </div>
                <div class="sw-grid-box" style="background: linear-gradient(135deg, var(--accent), #1A86D9); min-height: 300px;">
                    Main Content
                </div>
                <div class="sw-grid-box" style="background: linear-gradient(135deg, #F472B6, #EC4899); min-height: 300px;">
                    Aside
                </div>
                <div class="sw-grid-box" style="grid-column: 1 / -1; background: linear-gradient(135deg, #1E293B, #334155); min-height: 50px;">
                    Footer
                </div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Complete page layout with semantic grid areas
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="sw-grid-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="dropdown-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 24px;">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>CSS Grid Properties</h3>
                    <p class="card-subtitle">Essential grid properties</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" style="width: 100%; font-size: 13px;">
                <thead>
                    <tr>
                        <th>Property</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>grid-template-columns</code></td>
                        <td>Define column structure</td>
                    </tr>
                    <tr>
                        <td><code>grid-template-rows</code></td>
                        <td>Define row structure</td>
                    </tr>
                    <tr>
                        <td><code>gap</code></td>
                        <td>Spacing between items</td>
                    </tr>
                    <tr>
                        <td><code>grid-template-areas</code></td>
                        <td>Named layout regions</td>
                    </tr>
                    <tr>
                        <td><code>align-items</code></td>
                        <td>Vertical alignment</td>
                    </tr>
                    <tr>
                        <td><code>justify-items</code></td>
                        <td>Horizontal alignment</td>
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
                    <p class="card-subtitle">Grid layout guidelines</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" style="width: 100%; font-size: 13px;">
                <thead>
                    <tr>
                        <th>Practice</th>
                        <th>When to Use</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>auto-fit</strong></td>
                        <td>Responsive without media queries</td>
                    </tr>
                    <tr>
                        <td><strong>minmax()</strong></td>
                        <td>Flexible column widths</td>
                    </tr>
                    <tr>
                        <td><strong>Named areas</strong></td>
                        <td>Complex page layouts</td>
                    </tr>
                    <tr>
                        <td><strong>Nested grids</strong></td>
                        <td>Hierarchical content</td>
                    </tr>
                    <tr>
                        <td><strong>gap property</strong></td>
                        <td>Consistent spacing</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Flexbox Utilities Section -->
<div class="sw-grid-section-title">
    <i class="fa-solid fa-arrows-left-right"></i>
    Flexbox Utilities <span class="badge badge-success">New</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-display"></i>
            </div>
            <div>
                <h3>Flexbox Display & Direction</h3>
                <p class="card-subtitle">Control layout with flex utilities</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Horizontal Flex (Default)</span>
            <div class="sw-grid-code">&lt;div class="d-flex gap-3"&gt;</div>
            <div class="d-flex gap-3">
                <div class="sw-grid-box" style="min-width: 100px;">Item 1</div>
                <div class="sw-grid-box" style="min-width: 100px;">Item 2</div>
                <div class="sw-grid-box" style="min-width: 100px;">Item 3</div>
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Vertical Flex (Column)</span>
            <div class="sw-grid-code">&lt;div class="d-flex flex-column gap-2"&gt;</div>
            <div class="d-flex flex-column gap-2">
                <div class="sw-grid-box">Item 1</div>
                <div class="sw-grid-box">Item 2</div>
                <div class="sw-grid-box">Item 3</div>
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Wrap Flex (Multi-line)</span>
            <div class="sw-grid-code">&lt;div class="d-flex flex-wrap gap-2"&gt;</div>
            <div class="d-flex flex-wrap gap-2">
                <div class="sw-grid-box" style="min-width: 150px;">Wrap 1</div>
                <div class="sw-grid-box" style="min-width: 150px;">Wrap 2</div>
                <div class="sw-grid-box" style="min-width: 150px;">Wrap 3</div>
                <div class="sw-grid-box" style="min-width: 150px;">Wrap 4</div>
                <div class="sw-grid-box" style="min-width: 150px;">Wrap 5</div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Items wrap to next line when no space
            </div>
        </div>
    </div>
</div>

<!-- Flexbox Alignment Examples -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-align-center"></i>
            </div>
            <div>
                <h3>Flexbox Alignment Patterns</h3>
                <p class="card-subtitle">Common alignment use cases</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Center Both Axes</span>
            <div class="sw-grid-code">&lt;div class="d-flex justify-content-center align-items-center" style="height: 150px"&gt;</div>
            <div class="d-flex justify-content-center align-items-center" style="min-height: 150px; background: var(--light); border-radius: var(--radius-md);">
                <div class="sw-grid-box" style="background: var(--accent); padding: 20px 30px; font-size: 16px;">
                    <i class="fa-solid fa-check"></i> Perfectly Centered!
                </div>
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Space Between (Header Pattern)</span>
            <div class="sw-grid-code">&lt;div class="d-flex justify-content-between align-items-center"&gt;</div>
            <div class="d-flex justify-content-between align-items-center" style="background: var(--light); padding: 15px 20px; border-radius: var(--radius-md);">
                <div class="d-flex align-items-center gap-2">
                    <i class="fa-solid fa-user-circle" style="font-size: 24px; color: var(--accent);"></i>
                    <div>
                        <strong>John Doe</strong>
                        <div style="font-size: 12px; color: var(--text-secondary);">Administrator</div>
                    </div>
                </div>
                <button class="btn btn-primary btn-sm">
                    <i class="fa-solid fa-gear"></i> Settings
                </button>
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">End Alignment</span>
            <div class="sw-grid-code">&lt;div class="d-flex justify-content-end align-items-end" style="height: 150px"&gt;</div>
            <div class="d-flex justify-content-end align-items-end" style="min-height: 150px; background: var(--light); border-radius: var(--radius-md); padding: 15px;">
                <div class="sw-grid-box" style="background: var(--success);">
                    Bottom Right
                </div>
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Stretch Items (Equal Height)</span>
            <div class="sw-grid-code">&lt;div class="d-flex align-items-stretch gap-3"&gt;</div>
            <div class="d-flex align-items-stretch gap-3">
                <div class="sw-grid-box" style="flex: 1; background: var(--accent);">
                    Short content
                </div>
                <div class="sw-grid-box" style="flex: 1; background: var(--success);">
                    Medium content here<br>
                    Second line
                </div>
                <div class="sw-grid-box" style="flex: 1; background: var(--warning);">
                    Long content here<br>
                    Second line<br>
                    Third line
                </div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                All items stretch to same height automatically!
            </div>
        </div>
    </div>
</div>

<!-- Flexbox Real-World Patterns -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-briefcase"></i>
            </div>
            <div>
                <h3>Real-World Flexbox Patterns</h3>
                <p class="card-subtitle">Common UI layouts with flex</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Card with Icon + Text + Button</span>
            <div class="sw-grid-code">&lt;div class="d-flex align-items-center gap-3"&gt;</div>
            <div class="d-flex align-items-center gap-3" style="background: var(--light); padding: 20px; border-radius: var(--radius-md);">
                <div class="sw-grid-box" style="min-width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; background: var(--accent);">
                    <i class="fa-solid fa-chart-line" style="font-size: 24px; color: white;"></i>
                </div>
                <div style="flex: 1;">
                    <h4 style="margin: 0 0 4px 0;">Revenue Growth</h4>
                    <p style="margin: 0; font-size: 13px; color: var(--text-secondary);">+25% from last month</p>
                </div>
                <button class="btn btn-secondary btn-sm">
                    View Details
                </button>
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Tag/Badge List</span>
            <div class="sw-grid-code">&lt;div class="d-flex flex-wrap gap-2"&gt;</div>
            <div class="d-flex flex-wrap gap-2">
                <span class="badge badge-primary">JavaScript</span>
                <span class="badge badge-success">Laravel</span>
                <span class="badge badge-warning">PHP</span>
                <span class="badge badge-danger">MySQL</span>
                <span class="badge badge-info">Vue.js</span>
                <span class="badge badge-secondary">Docker</span>
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Breadcrumb Navigation</span>
            <div class="sw-grid-code">&lt;div class="d-flex align-items-center gap-2"&gt;</div>
            <div class="d-flex align-items-center gap-2" style="font-size: 14px;">
                <a href="#" style="color: var(--accent); text-decoration: none;"><i class="fa-solid fa-house"></i> Home</a>
                <i class="fa-solid fa-chevron-right" style="font-size: 10px; color: var(--text-secondary);"></i>
                <a href="#" style="color: var(--accent); text-decoration: none;">Dashboard</a>
                <i class="fa-solid fa-chevron-right" style="font-size: 10px; color: var(--text-secondary);"></i>
                <span style="color: var(--text-secondary);">Analytics</span>
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Action Buttons Group</span>
            <div class="sw-grid-code">&lt;div class="d-flex gap-2"&gt;</div>
            <div class="d-flex gap-2">
                <button class="btn btn-primary">
                    <i class="fa-solid fa-plus"></i> Add New
                </button>
                <button class="btn btn-success">
                    <i class="fa-solid fa-file-export"></i> Export
                </button>
                <button class="btn btn-info">
                    <i class="fa-solid fa-print"></i> Print
                </button>
                <button class="btn btn-danger">
                    <i class="fa-solid fa-trash"></i> Delete
                </button>
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Form Inline</span>
            <div class="sw-grid-code">&lt;div class="d-flex align-items-center gap-2"&gt;</div>
            <div class="d-flex align-items-center gap-2">
                <label style="white-space: nowrap; font-weight: 500;">Search:</label>
                <input type="text" class="form-control" placeholder="Type to search..." style="flex: 1;">
                <button class="btn btn-primary">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Pagination</span>
            <div class="sw-grid-code">&lt;div class="d-flex align-items-center gap-1"&gt;</div>
            <div class="d-flex align-items-center gap-1">
                <button class="btn btn-secondary btn-sm">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="btn btn-primary btn-sm" style="min-width: 40px;">1</button>
                <button class="btn btn-secondary btn-sm" style="min-width: 40px;">2</button>
                <button class="btn btn-secondary btn-sm" style="min-width: 40px;">3</button>
                <span style="padding: 0 5px;">...</span>
                <button class="btn btn-secondary btn-sm" style="min-width: 40px;">10</button>
                <button class="btn btn-secondary btn-sm">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Spacing Utilities Section -->
<div class="sw-grid-section-title">
    <i class="fa-solid fa-ruler-combined"></i>
    Spacing Utilities <span class="badge badge-info">Margin & Padding</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-expand"></i>
            </div>
            <div>
                <h3>Margin & Padding Examples</h3>
                <p class="card-subtitle">Bootstrap-like spacing scale (0-5)</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Margin Scale</span>
            <div class="sw-grid-code">m-0 (0) → m-1 (0.25rem) → m-2 (0.5rem) → m-3 (1rem) → m-4 (1.5rem) → m-5 (3rem)</div>
            <div class="d-flex flex-column gap-3">
                <div class="d-flex align-items-center gap-2">
                    <code class="sw-grid-box" style="min-width: 80px; padding: 8px; font-size: 12px;">m-3</code>
                    <div style="flex: 1; background: var(--light); padding: 1rem; border-radius: var(--radius-md); border: 2px dashed var(--border);">
                        Margin: 1rem
                    </div>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <code class="sw-grid-box" style="min-width: 80px; padding: 8px; font-size: 12px;">m-4</code>
                    <div style="flex: 1; background: var(--light); padding: 1.5rem; border-radius: var(--radius-md); border: 2px dashed var(--border);">
                        Margin: 1.5rem
                    </div>
                </div>
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Directional Margin (mt, mb, ml, mr)</span>
            <div class="sw-grid-code">&lt;div class="mt-3 mb-4 ml-2 mr-2"&gt;</div>
            <div style="background: var(--light); padding: 20px; border-radius: var(--radius-md);">
                <div class="mt-3 mb-4 ml-2 mr-2" style="background: var(--accent); padding: 15px; border-radius: var(--radius-md); color: white;">
                    Has directional margins!
                </div>
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Padding Scale</span>
            <div class="sw-grid-code">p-1 (0.25rem) → p-2 (0.5rem) → p-3 (1rem) → p-4 (1.5rem) → p-5 (3rem)</div>
            <div class="d-flex gap-3">
                <div class="p-1" style="background: var(--success); color: white; border-radius: var(--radius-md);">
                    p-1
                </div>
                <div class="p-3" style="background: var(--info); color: white; border-radius: var(--radius-md);">
                    p-3
                </div>
                <div class="p-5" style="background: var(--warning); color: white; border-radius: var(--radius-md);">
                    p-5
                </div>
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Auto Center (mx-auto)</span>
            <div class="sw-grid-code">&lt;div class="w-50 mx-auto"&gt;</div>
            <div style="background: var(--light); padding: 20px; border-radius: var(--radius-md);">
                <div class="w-50 mx-auto" style="background: var(--accent); padding: 15px; border-radius: var(--radius-md); color: white; text-align: center;">
                    Centered with mx-auto!
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Responsive Utilities Section -->
<div class="sw-grid-section-title">
    <i class="fa-solid fa-mobile-screen-button"></i>
    Responsive Utilities <span class="badge badge-warning">Breakpoints</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-desktop"></i>
            </div>
            <div>
                <h3>Responsive Display & Grid</h3>
                <p class="card-subtitle">Control visibility per breakpoint</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Responsive Columns</span>
            <div class="sw-grid-code">&lt;div class="sw-col-12 sw-col-md-6 sw-col-lg-4"&gt;</div>
            <div class="sw-row sw-gap-3">
                <div class="sw-col-12 sw-col-md-6 sw-col-lg-4">
                    <div class="sw-grid-box" style="background: var(--accent);">Mobile: Full<br>Tablet: 1/2<br>Desktop: 1/3</div>
                </div>
                <div class="sw-col-12 sw-col-md-6 sw-col-lg-4">
                    <div class="sw-grid-box" style="background: var(--success);">Mobile: Full<br>Tablet: 1/2<br>Desktop: 1/3</div>
                </div>
                <div class="sw-col-12 sw-col-md-6 sw-col-lg-4">
                    <div class="sw-grid-box" style="background: var(--warning);">Mobile: Full<br>Tablet: 1/2<br>Desktop: 1/3</div>
                </div>
            </div>
            <div class="sw-grid-helper">
                <i class="fa-solid fa-circle-info"></i>
                Resize browser to see responsive behavior!
            </div>
        </div>

        <div class="sw-grid-example">
            <span class="sw-grid-example-label">Hide/Show per Breakpoint</span>
            <div class="sw-grid-code">
                &lt;div class="sw-d-none sw-d-md-block"&gt; Hidden on mobile&lt;/div&gt;<br>
                &lt;div class="sw-d-block sw-d-lg-none"&gt; Hidden on desktop&lt;/div&gt;
            </div>
            <div class="sw-d-flex sw-flex-column sw-gap-2">
                <div class="sw-d-none sw-d-md-block sw-grid-box" style="background: var(--danger);">
                    <i class="fa-solid fa-eye-slash"></i> Mobile: HIDDEN | Tablet+: VISIBLE
                </div>
                <div class="sw-d-block sw-d-lg-none sw-grid-box" style="background: var(--info);">
                    <i class="fa-solid fa-eye"></i> Mobile/Tablet: VISIBLE | Desktop: HIDDEN
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Grid page initialization
$(document).ready(function() {
    console.log('📋 SW Grid Options page loaded successfully');
});
</script>
@endpush