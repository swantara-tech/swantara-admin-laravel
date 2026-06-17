@extends('layouts.app')

@section('title', 'Buttons')
@section('breadcrumb', 'Buttons')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Buttons</h1>
        <p>Interactive elements for actions and navigation with various styles, sizes, and states</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-square-check"></i>
            <span>Try Buttons</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card dsgt-btn-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What are Buttons?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Buttons are interactive elements that allow users to perform actions, submit forms, navigate, and make choices. They come in various styles (solid, outline, soft, ghost), sizes (XS to XL), and states (normal, hover, active, disabled, loading). Well-designed buttons provide clear visual hierarchy and improve user experience.</p>
            </div>
        </div>
    </div>
</div>

<!-- Solid Buttons -->
<div class="dsgt-btn-section-title">
    <i class="fa-solid fa-square-check"></i>
    Solid Buttons <span class="badge badge-primary">Essential</span>
</div>

<div class="dsgt-btn-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-palette"></i>
                </div>
                <div>
                    <h3>Color Variants</h3>
                    <p class="card-subtitle">Gradient background buttons</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-btn-example">
                <span class="dsgt-btn-example-label">Solid Style Buttons</span>
                <div class="dsgt-btn-group">
                    <button class="dsgt-btn dsgt-btn-primary">Primary</button>
                    <button class="dsgt-btn dsgt-btn-success">Success</button>
                    <button class="dsgt-btn dsgt-btn-warning">Warning</button>
                    <button class="dsgt-btn dsgt-btn-danger">Danger</button>
                    <button class="dsgt-btn dsgt-btn-info">Info</button>
                    <button class="dsgt-btn dsgt-btn-secondary">Secondary</button>
                    <button class="dsgt-btn dsgt-btn-dark">Dark</button>
                </div>
                <div class="dsgt-btn-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Solid buttons use gradient backgrounds for primary actions
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-border-style"></i>
                </div>
                <div>
                    <h3>Outline Buttons</h3>
                    <p class="card-subtitle">Border-only style buttons</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-btn-example">
                <span class="dsgt-btn-example-label">Outline Style Buttons</span>
                <div class="dsgt-btn-group">
                    <button class="dsgt-btn dsgt-btn-outline-primary">Primary</button>
                    <button class="dsgt-btn dsgt-btn-outline-success">Success</button>
                    <button class="dsgt-btn dsgt-btn-outline-warning">Warning</button>
                    <button class="dsgt-btn dsgt-btn-outline-danger">Danger</button>
                    <button class="dsgt-btn dsgt-btn-outline-info">Info</button>
                </div>
                <div class="dsgt-btn-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Outline buttons for secondary actions with subtle emphasis
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Soft & Ghost Buttons -->
<div class="dsgt-btn-section-title">
    <i class="fa-solid fa-droplet"></i>
    Soft & Ghost Buttons <span class="badge badge-info">Modern</span>
</div>

<div class="dsgt-btn-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-fill"></i>
                </div>
                <div>
                    <h3>Soft Buttons</h3>
                    <p class="card-subtitle">Light tinted backgrounds</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-btn-example">
                <span class="dsgt-btn-example-label">Soft Style Buttons</span>
                <div class="dsgt-btn-group">
                    <button class="dsgt-btn dsgt-btn-soft-primary">Primary</button>
                    <button class="dsgt-btn dsgt-btn-soft-success">Success</button>
                    <button class="dsgt-btn dsgt-btn-soft-warning">Warning</button>
                    <button class="dsgt-btn dsgt-btn-soft-danger">Danger</button>
                    <button class="dsgt-btn dsgt-btn-soft-info">Info</button>
                </div>
                <div class="dsgt-btn-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Soft buttons use 10% opacity backgrounds - perfect for modern UI
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-ghost"></i>
                </div>
                <div>
                    <h3>Ghost Buttons</h3>
                    <p class="card-subtitle">Transparent background buttons</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-btn-example">
                <span class="dsgt-btn-example-label">Ghost Style Buttons</span>
                <div class="dsgt-btn-group">
                    <button class="dsgt-btn dsgt-btn-ghost-primary">Primary</button>
                    <button class="dsgt-btn dsgt-btn-ghost-success">Success</button>
                    <button class="dsgt-btn dsgt-btn-ghost-danger">Danger</button>
                </div>
                <div class="dsgt-btn-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Ghost buttons for tertiary actions with minimal visual weight
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Button Sizes -->
<div class="dsgt-btn-section-title">
    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
    Button Sizes <span class="badge badge-warning">Sizing</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-expand"></i>
            </div>
            <div>
                <h3>Size Variations</h3>
                <p class="card-subtitle">From extra small to extra large</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-btn-example">
            <span class="dsgt-btn-example-label">Size Comparison</span>
            <div class="dsgt-btn-group" style="align-items: center;">
                <button class="dsgt-btn dsgt-btn-primary dsgt-btn-xs">Extra Small</button>
                <button class="dsgt-btn dsgt-btn-success dsgt-btn-sm">Small</button>
                <button class="dsgt-btn dsgt-btn-warning dsgt-btn-md">Medium</button>
                <button class="dsgt-btn dsgt-btn-danger dsgt-btn-lg">Large</button>
                <button class="dsgt-btn dsgt-btn-info dsgt-btn-xl">Extra Large</button>
            </div>
            <div class="dsgt-btn-helper">
                <i class="fa-solid fa-circle-info"></i>
                Use XS-SM for compact UI, MD for general use, LG-XL for emphasis
            </div>
        </div>
    </div>
</div>

<!-- Buttons with Icons -->
<div class="dsgt-btn-section-title">
    <i class="fa-solid fa-icons"></i>
    Buttons with Icons <span class="badge badge-success">Enhanced</span>
</div>

<div class="dsgt-btn-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-star"></i>
                </div>
                <div>
                    <h3>Icon Buttons</h3>
                    <p class="card-subtitle">Buttons with Font Awesome icons</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-btn-example">
                <span class="dsgt-btn-example-label">Icon + Text Buttons</span>
                <div class="dsgt-btn-group">
                    <button class="dsgt-btn dsgt-btn-primary">
                        <i class="fa-solid fa-plus"></i> Add New
                    </button>
                    <button class="dsgt-btn dsgt-btn-success">
                        <i class="fa-solid fa-check"></i> Approve
                    </button>
                    <button class="dsgt-btn dsgt-btn-warning">
                        <i class="fa-solid fa-pen"></i> Edit
                    </button>
                    <button class="dsgt-btn dsgt-btn-danger">
                        <i class="fa-solid fa-trash"></i> Delete
                    </button>
                    <button class="dsgt-btn dsgt-btn-info">
                        <i class="fa-solid fa-download"></i> Download
                    </button>
                    <button class="dsgt-btn dsgt-btn-secondary">
                        <i class="fa-solid fa-eye"></i> View
                    </button>
                </div>
                <div class="dsgt-btn-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Icons improve visual recognition and user comprehension
                </div>
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
                    <h3>Icon-Only Buttons</h3>
                    <p class="card-subtitle">Square and circular icon buttons</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-btn-example">
                <span class="dsgt-btn-example-label">Square Icon Buttons</span>
                <div class="dsgt-btn-group" style="margin-bottom: 20px;">
                    <button class="dsgt-btn dsgt-btn-primary dsgt-btn-icon dsgt-btn-sm">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <button class="dsgt-btn dsgt-btn-success dsgt-btn-icon">
                        <i class="fa-solid fa-check"></i>
                    </button>
                    <button class="dsgt-btn dsgt-btn-warning dsgt-btn-icon dsgt-btn-lg">
                        <i class="fa-solid fa-pen"></i>
                    </button>
                    <button class="dsgt-btn dsgt-btn-danger dsgt-btn-icon">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                    <button class="dsgt-btn dsgt-btn-info dsgt-btn-icon">
                        <i class="fa-solid fa-download"></i>
                    </button>
                </div>

                <span class="dsgt-btn-example-label">Circular Icon Buttons</span>
                <div class="dsgt-btn-group">
                    <button class="dsgt-btn dsgt-btn-primary dsgt-btn-icon dsgt-btn-icon-circle dsgt-btn-sm">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                    <button class="dsgt-btn dsgt-btn-success dsgt-btn-icon dsgt-btn-icon-circle">
                        <i class="fa-solid fa-check"></i>
                    </button>
                    <button class="dsgt-btn dsgt-btn-warning dsgt-btn-icon dsgt-btn-icon-circle dsgt-btn-lg">
                        <i class="fa-solid fa-pen"></i>
                    </button>
                    <button class="dsgt-btn dsgt-btn-danger dsgt-btn-icon dsgt-btn-icon-circle">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                    <button class="dsgt-btn dsgt-btn-info dsgt-btn-icon dsgt-btn-icon-circle">
                        <i class="fa-solid fa-download"></i>
                    </button>
                </div>
                <div class="dsgt-btn-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Icon-only buttons for toolbars and compact interfaces
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pill Buttons -->
<div class="dsgt-btn-section-title">
    <i class="fa-solid fa-capsules"></i>
    Pill Buttons <span class="badge badge-info">Rounded</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-circle"></i>
            </div>
            <div>
                <h3>Fully Rounded Buttons</h3>
                <p class="card-subtitle">Pill-shaped button variants</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-btn-example">
            <span class="dsgt-btn-example-label">Pill Style Buttons</span>
            <div class="dsgt-btn-group">
                <button class="dsgt-btn dsgt-btn-primary dsgt-btn-pill">
                    <i class="fa-solid fa-rocket"></i> Get Started
                </button>
                <button class="dsgt-btn dsgt-btn-success dsgt-btn-pill">
                    <i class="fa-solid fa-check-circle"></i> Complete
                </button>
                <button class="dsgt-btn dsgt-btn-outline-warning dsgt-btn-pill">
                    <i class="fa-solid fa-clock"></i> Pending
                </button>
                <button class="dsgt-btn dsgt-btn-soft-danger dsgt-btn-pill">
                    <i class="fa-solid fa-times-circle"></i> Cancel
                </button>
            </div>
            <div class="dsgt-btn-helper">
                <i class="fa-solid fa-circle-info"></i>
                Pill buttons use border-radius: 50px for fully rounded corners
            </div>
        </div>
    </div>
</div>

<!-- Button States -->
<div class="dsgt-btn-section-title">
    <i class="fa-solid fa-toggle-on"></i>
    Button States <span class="badge badge-danger">Interactive</span>
</div>

<div class="dsgt-btn-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-hand-pointer"></i>
                </div>
                <div>
                    <h3>Normal, Hover & Active States</h3>
                    <p class="card-subtitle">Interactive button states</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-btn-example">
                <span class="dsgt-btn-example-label">Hover over these buttons</span>
                <div class="dsgt-btn-group">
                    <button class="dsgt-btn dsgt-btn-primary">
                        <i class="fa-solid fa-arrow-up"></i> Normal
                    </button>
                    <button class="dsgt-btn dsgt-btn-success">
                        Hover me <i class="fa-solid fa-hand-pointer"></i>
                    </button>
                    <button class="dsgt-btn dsgt-btn-warning">
                        Click me <i class="fa-solid fa-hand-point-up"></i>
                    </button>
                </div>
                <div class="dsgt-btn-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Buttons have translateY(-2px) on hover with box shadow
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-ban"></i>
                </div>
                <div>
                    <h3>Disabled & Loading States</h3>
                    <p class="card-subtitle">Inactive and processing states</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-btn-example">
                <span class="dsgt-btn-example-label">Disabled Buttons</span>
                <div class="dsgt-btn-group" style="margin-bottom: 20px;">
                    <button class="dsgt-btn dsgt-btn-primary dsgt-btn-disabled" disabled>
                        <i class="fa-solid fa-ban"></i> Disabled
                    </button>
                    <button class="dsgt-btn dsgt-btn-success dsgt-btn-disabled" disabled>
                        Not Available
                    </button>
                    <button class="dsgt-btn dsgt-btn-outline-danger dsgt-btn-disabled" disabled>
                        Cannot Delete
                    </button>
                </div>

                <span class="dsgt-btn-example-label">Loading Buttons (Click to trigger)</span>
                <div class="dsgt-btn-group">
                    <button class="dsgt-btn dsgt-btn-primary" onclick="MetroAdmin.toggleLoading(this)">
                        <i class="fa-solid fa-spinner"></i> Submit
                    </button>
                    <button class="dsgt-btn dsgt-btn-success" onclick="MetroAdmin.toggleLoading(this)">
                        <i class="fa-solid fa-save"></i> Save
                    </button>
                    <button class="dsgt-btn dsgt-btn-warning" onclick="MetroAdmin.toggleLoading(this)">
                        <i class="fa-solid fa-upload"></i> Upload
                    </button>
                </div>
                <div class="dsgt-btn-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Disabled: 50% opacity, Loading: spinner animation
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Block Buttons -->
<div class="dsgt-btn-section-title">
    <i class="fa-solid fa-arrows-left-right"></i>
    Block Buttons
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-secondary">
                <i class="fa-solid fa-expand"></i>
            </div>
            <div>
                <h3>Full-Width Buttons</h3>
                <p class="card-subtitle">Buttons that span container width</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-btn-example">
            <span class="dsgt-btn-example-label">Block Level Buttons</span>
            <div style="display: flex; flex-direction: column; gap: 12px; max-width: 400px;">
                <button class="dsgt-btn dsgt-btn-primary dsgt-btn-block">
                    <i class="fa-solid fa-right-to-bracket"></i> Sign In
                </button>
                <button class="dsgt-btn dsgt-btn-success dsgt-btn-block">
                    <i class="fa-solid fa-user-plus"></i> Create Account
                </button>
                <button class="dsgt-btn dsgt-btn-outline-secondary dsgt-btn-block">
                    <i class="fa-solid fa-arrow-left"></i> Go Back
                </button>
            </div>
            <div class="dsgt-btn-helper">
                <i class="fa-solid fa-circle-info"></i>
                Block buttons are perfect for forms and mobile interfaces
            </div>
        </div>
    </div>
</div>

<!-- Button Groups -->
<div class="dsgt-btn-section-title">
    <i class="fa-solid fa-object-group"></i>
    Button Groups
</div>

<div class="dsgt-btn-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-grip"></i>
                </div>
                <div>
                    <h3>Horizontal Button Group</h3>
                    <p class="card-subtitle">Buttons in a row</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-btn-example">
                <span class="dsgt-btn-example-label">Action Group</span>
                <div class="dsgt-btn-group">
                    <button class="dsgt-btn dsgt-btn-primary">
                        <i class="fa-solid fa-floppy-disk"></i> Save
                    </button>
                    <button class="dsgt-btn dsgt-btn-outline-secondary">
                        <i class="fa-solid fa-ban"></i> Cancel
                    </button>
                    <button class="dsgt-btn dsgt-btn-outline-danger">
                        <i class="fa-solid fa-trash"></i> Delete
                    </button>
                </div>
                <div class="dsgt-btn-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Group related actions together for better UX
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-bars-staggered"></i>
                </div>
                <div>
                    <h3>Vertical Button Group</h3>
                    <p class="card-subtitle">Buttons in a column</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-btn-example">
                <span class="dsgt-btn-example-label">Settings Menu</span>
                <div class="dsgt-btn-group-vertical">
                    <button class="dsgt-btn dsgt-btn-primary">
                        <i class="fa-solid fa-user"></i> Profile
                    </button>
                    <button class="dsgt-btn dsgt-btn-outline-secondary">
                        <i class="fa-solid fa-gear"></i> Settings
                    </button>
                    <button class="dsgt-btn dsgt-btn-outline-secondary">
                        <i class="fa-solid fa-shield-halved"></i> Security
                    </button>
                    <button class="dsgt-btn dsgt-btn-outline-danger">
                        <i class="fa-solid fa-right-from-bracket"></i> Logout
                    </button>
                </div>
                <div class="dsgt-btn-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Vertical groups work well for menus and settings
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Interactive Demo -->
<div class="dsgt-btn-section-title">
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
                <h3>Dynamic Button Generator</h3>
                <p class="card-subtitle">Click buttons to generate different styles dynamically</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-btn-example">
            <span class="dsgt-btn-example-label">Generate Buttons</span>
            <div class="dsgt-btn-group" style="margin-bottom: 20px;">
                <button class="dsgt-btn dsgt-btn-primary" onclick="MetroAdmin.generateButton('solid')">
                    <i class="fa-solid fa-plus"></i> Solid
                </button>
                <button class="dsgt-btn dsgt-btn-outline-success" onclick="MetroAdmin.generateButton('outline')">
                    <i class="fa-solid fa-plus"></i> Outline
                </button>
                <button class="dsgt-btn dsgt-btn-soft-warning" onclick="MetroAdmin.generateButton('soft')">
                    <i class="fa-solid fa-plus"></i> Soft
                </button>
                <button class="dsgt-btn dsgt-btn-ghost-danger" onclick="MetroAdmin.generateButton('ghost')">
                    <i class="fa-solid fa-plus"></i> Ghost
                </button>
                <button class="dsgt-btn dsgt-btn-info dsgt-btn-pill" onclick="MetroAdmin.generateButton('pill')">
                    <i class="fa-solid fa-plus"></i> Pill
                </button>
                <button class="dsgt-btn dsgt-btn-secondary" onclick="MetroAdmin.clearAllButtons()">
                    <i class="fa-solid fa-broom"></i> Clear All
                </button>
            </div>

            <div id="dynamicButtonContainer" style="min-height: 80px; padding: 20px; border: 2px dashed var(--border-color); border-radius: 8px; background: var(--bg-tertiary); display: flex; flex-wrap: wrap; gap: 12px; align-items: center;">
                <p style="text-align: center; color: var(--text-secondary); font-size: 13px; margin: 0; width: 100%;">
                    <i class="fa-solid fa-arrow-up" style="margin-right: 8px;"></i>
                    Click buttons above to generate different button styles here
                </p>
            </div>

            <div class="dsgt-btn-helper">
                <i class="fa-solid fa-circle-info"></i>
                Buttons are generated with fade-in animation and can be cleared all at once
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="dsgt-btn-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="dsgt-btn-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>HTML Structure</h3>
                    <p class="card-subtitle">Basic button markup</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <pre style="background: var(--bg-tertiary); padding: 16px; border-radius: 8px; font-size: 12px; overflow-x: auto;"><code>&lt;!-- Solid Button --&gt;
&lt;button class="dsgt-btn dsgt-btn-primary"&gt;
  &lt;i class="fa-solid fa-check"&gt;&lt;/i&gt;
  Save
&lt;/button&gt;

&lt;!-- Outline Button --&gt;
&lt;button class="dsgt-btn dsgt-btn-outline-danger"&gt;
  Delete
&lt;/button&gt;

&lt;!-- Icon Button --&gt;
&lt;button class="dsgt-btn dsgt-btn-info dsgt-btn-icon"&gt;
  &lt;i class="fa-solid fa-download"&gt;&lt;/i&gt;
&lt;/button&gt;</code></pre>
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
                    <p class="card-subtitle">When to use each button type</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" style="width: 100%; font-size: 13px;">
                <thead>
                    <tr>
                        <th>Button Type</th>
                        <th>Use Case</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Solid</strong></td>
                        <td>Primary actions, CTAs, forms</td>
                    </tr>
                    <tr>
                        <td><strong>Outline</strong></td>
                        <td>Secondary actions, filters</td>
                    </tr>
                    <tr>
                        <td><strong>Soft</strong></td>
                        <td>Modern UI, tags, status</td>
                    </tr>
                    <tr>
                        <td><strong>Ghost</strong></td>
                        <td>Tertiary actions, links</td>
                    </tr>
                    <tr>
                        <td><strong>Icon</strong></td>
                        <td>Toolbars, compact UI</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Buttons page initialization
$(document).ready(function() {
    console.log('📋 DSGT Buttons page loaded successfully');
});
</script>
@endpush