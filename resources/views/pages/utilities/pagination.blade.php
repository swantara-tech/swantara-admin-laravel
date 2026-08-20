@extends('layouts.app')

@section('title', 'Pagination')
@section('breadcrumb', 'Pagination')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Pagination</h1>
        <p>Navigation components for splitting content into pages with various styles, sizes, and alignment options</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-forward"></i>
            <span>Next Page</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What is Pagination?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Pagination is a navigation system that splits large content sets into manageable pages. It helps users navigate through data without overwhelming them. Pagination supports various styles, sizes, alignments, and can include information displays, page size selectors, and pager navigation for optimal user experience.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Pagination -->
<div class="sw-pagination-section-title">
    <i class="fa-solid fa-forward"></i>
    Basic Pagination <span class="badge badge-primary">Essential</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-list-ol"></i>
            </div>
            <div>
                <h3>Default Pagination</h3>
                <p class="card-subtitle">Standard numbered pages</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-pagination-example">
            <span class="sw-pagination-example-label">Basic Pagination</span>
            <ul class="sw-pagination">
                <li class="sw-pagination-item disabled">
                    <i class="fa-solid fa-chevron-left"></i>
                </li>
                <li class="sw-pagination-item active">1</li>
                <li class="sw-pagination-item">2</li>
                <li class="sw-pagination-item">3</li>
                <li class="sw-pagination-item">4</li>
                <li class="sw-pagination-item">5</li>
                <li class="sw-pagination-ellipsis">...</li>
                <li class="sw-pagination-item">20</li>
                <li class="sw-pagination-item">
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
            </ul>
            <div class="sw-pagination-helper">
                <i class="fa-solid fa-circle-info"></i>
                Click page numbers to navigate
            </div>
        </div>
    </div>
</div>

<!-- Pagination Sizes -->
<div class="sw-pagination-section-title">
    <i class="fa-solid fa-expand"></i>
    Pagination Sizes
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-text-height"></i>
            </div>
            <div>
                <h3>Size Variations</h3>
                <p class="card-subtitle">XS, SM, MD, LG, XL sizes</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-pagination-example">
            <span class="sw-pagination-example-label">Extra Small (28px)</span>
            <ul class="sw-pagination sw-pagination-xs" style="margin-bottom: 20px;">
                <li class="sw-pagination-item"><i class="fa-solid fa-chevron-left"></i></li>
                <li class="sw-pagination-item">1</li>
                <li class="sw-pagination-item active">2</li>
                <li class="sw-pagination-item">3</li>
                <li class="sw-pagination-item"><i class="fa-solid fa-chevron-right"></i></li>
            </ul>

            <span class="sw-pagination-example-label">Small (32px)</span>
            <ul class="sw-pagination sw-pagination-sm" style="margin-bottom: 20px;">
                <li class="sw-pagination-item"><i class="fa-solid fa-chevron-left"></i></li>
                <li class="sw-pagination-item">1</li>
                <li class="sw-pagination-item active">2</li>
                <li class="sw-pagination-item">3</li>
                <li class="sw-pagination-item"><i class="fa-solid fa-chevron-right"></i></li>
            </ul>

            <span class="sw-pagination-example-label">Medium (36px) - Default</span>
            <ul class="sw-pagination sw-pagination-md" style="margin-bottom: 20px;">
                <li class="sw-pagination-item"><i class="fa-solid fa-chevron-left"></i></li>
                <li class="sw-pagination-item">1</li>
                <li class="sw-pagination-item active">2</li>
                <li class="sw-pagination-item">3</li>
                <li class="sw-pagination-item"><i class="fa-solid fa-chevron-right"></i></li>
            </ul>

            <span class="sw-pagination-example-label">Large (42px)</span>
            <ul class="sw-pagination sw-pagination-lg" style="margin-bottom: 20px;">
                <li class="sw-pagination-item"><i class="fa-solid fa-chevron-left"></i></li>
                <li class="sw-pagination-item">1</li>
                <li class="sw-pagination-item active">2</li>
                <li class="sw-pagination-item">3</li>
                <li class="sw-pagination-item"><i class="fa-solid fa-chevron-right"></i></li>
            </ul>

            <span class="sw-pagination-example-label">Extra Large (48px)</span>
            <ul class="sw-pagination sw-pagination-xl">
                <li class="sw-pagination-item"><i class="fa-solid fa-chevron-left"></i></li>
                <li class="sw-pagination-item">1</li>
                <li class="sw-pagination-item active">2</li>
                <li class="sw-pagination-item">3</li>
                <li class="sw-pagination-item"><i class="fa-solid fa-chevron-right"></i></li>
            </ul>

            <div class="sw-pagination-helper">
                <i class="fa-solid fa-circle-info"></i>
                Sizes range from 28px to 48px
            </div>
        </div>
    </div>
</div>

<!-- Pagination Styles -->
<div class="sw-pagination-section-title">
    <i class="fa-solid fa-palette"></i>
    Pagination Styles
</div>

<div class="sw-pagination-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-circle"></i>
                </div>
                <div>
                    <h3>Rounded Style</h3>
                    <p class="card-subtitle">Circular page buttons</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-pagination-example">
                <span class="sw-pagination-example-label">Rounded Buttons</span>
                <ul class="sw-pagination sw-pagination-rounded">
                    <li class="sw-pagination-item"><i class="fa-solid fa-chevron-left"></i></li>
                    <li class="sw-pagination-item">1</li>
                    <li class="sw-pagination-item active">2</li>
                    <li class="sw-pagination-item">3</li>
                    <li class="sw-pagination-item">4</li>
                    <li class="sw-pagination-item"><i class="fa-solid fa-chevron-right"></i></li>
                </ul>
                <div class="sw-pagination-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    border-radius: 50% for circular buttons
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-border-all"></i>
                </div>
                <div>
                    <h3>Bordered Style</h3>
                    <p class="card-subtitle">Thick border emphasis</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-pagination-example">
                <span class="sw-pagination-example-label">Thick Borders</span>
                <ul class="sw-pagination sw-pagination-bordered">
                    <li class="sw-pagination-item"><i class="fa-solid fa-chevron-left"></i></li>
                    <li class="sw-pagination-item">1</li>
                    <li class="sw-pagination-item active">2</li>
                    <li class="sw-pagination-item">3</li>
                    <li class="sw-pagination-item">4</li>
                    <li class="sw-pagination-item"><i class="fa-solid fa-chevron-right"></i></li>
                </ul>
                <div class="sw-pagination-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    border-width: 2px for emphasis
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-shadow"></i>
                </div>
                <div>
                    <h3>Shadow Style</h3>
                    <p class="card-subtitle">Elevated buttons</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-pagination-example">
                <span class="sw-pagination-example-label">With Shadows</span>
                <ul class="sw-pagination sw-pagination-shadow">
                    <li class="sw-pagination-item"><i class="fa-solid fa-chevron-left"></i></li>
                    <li class="sw-pagination-item">1</li>
                    <li class="sw-pagination-item active">2</li>
                    <li class="sw-pagination-item">3</li>
                    <li class="sw-pagination-item">4</li>
                    <li class="sw-pagination-item"><i class="fa-solid fa-chevron-right"></i></li>
                </ul>
                <div class="sw-pagination-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    box-shadow for depth effect
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pagination Alignment -->
<div class="sw-pagination-section-title">
    <i class="fa-solid fa-align-center"></i>
    Pagination Alignment
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-position"></i>
            </div>
            <div>
                <h3>Position Options</h3>
                <p class="card-subtitle">Left, center, right alignment</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-pagination-example">
            <span class="sw-pagination-example-label">Left Aligned</span>
            <ul class="sw-pagination sw-pagination-left" style="margin-bottom: 20px;">
                <li class="sw-pagination-item"><i class="fa-solid fa-chevron-left"></i></li>
                <li class="sw-pagination-item">1</li>
                <li class="sw-pagination-item active">2</li>
                <li class="sw-pagination-item">3</li>
                <li class="sw-pagination-item"><i class="fa-solid fa-chevron-right"></i></li>
            </ul>

            <span class="sw-pagination-example-label">Center Aligned</span>
            <ul class="sw-pagination sw-pagination-center" style="margin-bottom: 20px;">
                <li class="sw-pagination-item"><i class="fa-solid fa-chevron-left"></i></li>
                <li class="sw-pagination-item">1</li>
                <li class="sw-pagination-item active">2</li>
                <li class="sw-pagination-item">3</li>
                <li class="sw-pagination-item"><i class="fa-solid fa-chevron-right"></i></li>
            </ul>

            <span class="sw-pagination-example-label">Right Aligned</span>
            <ul class="sw-pagination sw-pagination-right">
                <li class="sw-pagination-item"><i class="fa-solid fa-chevron-left"></i></li>
                <li class="sw-pagination-item">1</li>
                <li class="sw-pagination-item active">2</li>
                <li class="sw-pagination-item">3</li>
                <li class="sw-pagination-item"><i class="fa-solid fa-chevron-right"></i></li>
            </ul>

            <div class="sw-pagination-helper">
                <i class="fa-solid fa-circle-info"></i>
                Use flexbox justify-content for alignment
            </div>
        </div>
    </div>
</div>

<!-- Pagination with Info -->
<div class="sw-pagination-section-title">
    <i class="fa-solid fa-circle-info"></i>
    Pagination with Info
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-chart-bar"></i>
            </div>
            <div>
                <h3>Info Display</h3>
                <p class="card-subtitle">Show total items and page size</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-pagination-example">
            <span class="sw-pagination-example-label">With Information</span>
            <div class="sw-pagination-with-info" style="margin-bottom: 20px;">
                <div class="sw-pagination-info">
                    Showing <strong>1-10</strong> of <strong>200</strong> results
                </div>
                <ul class="sw-pagination">
                    <li class="sw-pagination-item disabled"><i class="fa-solid fa-chevron-left"></i></li>
                    <li class="sw-pagination-item active">1</li>
                    <li class="sw-pagination-item">2</li>
                    <li class="sw-pagination-item">3</li>
                    <li class="sw-pagination-item"><i class="fa-solid fa-chevron-right"></i></li>
                </ul>
            </div>

            <span class="sw-pagination-example-label">With Page Size Selector</span>
            <div class="sw-pagination-with-info">
                <div class="sw-pagination-info">
                    Show
                    <select class="sw-pagination-select">
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                        <option>100</option>
                    </select>
                    per page
                </div>
                <ul class="sw-pagination">
                    <li class="sw-pagination-item"><i class="fa-solid fa-chevron-left"></i></li>
                    <li class="sw-pagination-item">1</li>
                    <li class="sw-pagination-item active">2</li>
                    <li class="sw-pagination-item">3</li>
                    <li class="sw-pagination-item"><i class="fa-solid fa-chevron-right"></i></li>
                </ul>
            </div>

            <div class="sw-pagination-helper">
                <i class="fa-solid fa-circle-info"></i>
                Info helps users understand context
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumb Pagination -->
<div class="sw-pagination-section-title">
    <i class="fa-solid fa-location-dot"></i>
    Breadcrumb Navigation
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
            <div>
                <h3>Breadcrumb Style</h3>
                <p class="card-subtitle">Hierarchical navigation</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-pagination-example">
            <span class="sw-pagination-example-label">Breadcrumb Pagination</span>
            <ul class="sw-breadcrumb-pagination">
                <li class="sw-breadcrumb-item">
                    <a href="#" class="sw-breadcrumb-link"><i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li class="sw-breadcrumb-item">
                    <span class="sw-breadcrumb-separator"><i class="fa-solid fa-chevron-right"></i></span>
                    <a href="#" class="sw-breadcrumb-link">Products</a>
                </li>
                <li class="sw-breadcrumb-item">
                    <span class="sw-breadcrumb-separator"><i class="fa-solid fa-chevron-right"></i></span>
                    <a href="#" class="sw-breadcrumb-link">Electronics</a>
                </li>
                <li class="sw-breadcrumb-item">
                    <span class="sw-breadcrumb-separator"><i class="fa-solid fa-chevron-right"></i></span>
                    <span class="sw-breadcrumb-current">Smartphones</span>
                </li>
            </ul>
            <div class="sw-pagination-helper">
                <i class="fa-solid fa-circle-info"></i>
                Shows current location in hierarchy
            </div>
        </div>
    </div>
</div>

<!-- Pager Navigation -->
<div class="sw-pagination-section-title">
    <i class="fa-solid fa-arrows-left-right"></i>
    Pager Navigation
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-backward-forward"></i>
            </div>
            <div>
                <h3>Previous / Next</h3>
                <p class="card-subtitle">Simple pager controls</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-pagination-example">
            <span class="sw-pagination-example-label">Basic Pager</span>
            <div class="sw-pager-nav" style="margin-bottom: 20px;">
                <button class="pager-btn disabled">
                    <i class="fa-solid fa-arrow-left"></i>
                    Previous
                </button>
                <button class="sw-pager-btn">
                    Next
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>

            <span class="sw-pagination-example-label">With Page Info</span>
            <div class="sw-pager-nav">
                <button class="sw-pager-btn">
                    <i class="fa-solid fa-arrow-left"></i>
                    <div>
                        <div style="font-size: 12px; font-weight: 400;">Previous</div>
                        <div>Page 1</div>
                    </div>
                </button>
                <button class="sw-pager-btn">
                    <div style="text-align: right;">
                        <div style="font-size: 12px; font-weight: 400;">Next</div>
                        <div>Page 3</div>
                    </div>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>

            <div class="sw-pagination-helper">
                <i class="fa-solid fa-circle-info"></i>
                Simple navigation for sequential content
            </div>
        </div>
    </div>
</div>

<!-- Load More -->
<div class="sw-pagination-section-title">
    <i class="fa-solid fa-plus"></i>
    Load More / Infinite Scroll
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-arrow-down"></i>
            </div>
            <div>
                <h3>Alternative Pagination</h3>
                <p class="card-subtitle">Load more button or infinite scroll</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-pagination-example">
            <span class="sw-pagination-example-label">Load More Button</span>
            <div class="sw-infinite-scroll-indicator">
                <button class="sw-load-more-btn">
                    <i class="fa-solid fa-plus"></i>
                    Load More Items
                </button>
                <p style="font-size: 12px; color: var(--text-secondary); margin-top: 12px;">Showing 12 of 48 items</p>
            </div>
            <div class="sw-pagination-helper">
                <i class="fa-solid fa-circle-info"></i>
                Alternative to traditional pagination
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="sw-pagination-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="sw-pagination-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>CSS Classes</h3>
                    <p class="card-subtitle">Available pagination utilities</p>
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
                        <td><code>.modern-pagination</code></td>
                        <td>Base pagination container</td>
                    </tr>
                    <tr>
                        <td><code>.pagination-item</code></td>
                        <td>Individual page button</td>
                    </tr>
                    <tr>
                        <td><code>.pagination-xs/sm/md/lg/xl</code></td>
                        <td>Size variants</td>
                    </tr>
                    <tr>
                        <td><code>.pagination-rounded</code></td>
                        <td>Circular buttons</td>
                    </tr>
                    <tr>
                        <td><code>.pagination-left/center/right</code></td>
                        <td>Alignment options</td>
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
                    <p class="card-subtitle">Pagination guidelines</p>
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
                        <td><strong>Show info</strong></td>
                        <td>Context awareness</td>
                    </tr>
                    <tr>
                        <td><strong>Highlight active</strong></td>
                        <td>Clear position</td>
                    </tr>
                    <tr>
                        <td><strong>Disable edges</strong></td>
                        <td>Prevent errors</td>
                    </tr>
                    <tr>
                        <td><strong>Use ellipsis</strong></td>
                        <td>Save space</td>
                    </tr>
                    <tr>
                        <td><strong>Mobile friendly</strong></td>
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
// Pagination page initialization
$(document).ready(function() {
    console.log('📄 SW Pagination page loaded successfully');
    
    // Demo: Show welcome toast
    setTimeout(() => {
        if (typeof MetroAdmin !== 'undefined') {
            MetroAdmin.showSWInfoToast('Welcome to the Pagination demo page!');
        }
    }, 1000);
});
</script>
@endpush