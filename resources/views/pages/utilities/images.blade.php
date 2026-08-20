@extends('layouts.app')

@section('title', 'Images')
@section('breadcrumb', 'Images')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Images</h1>
        <p>Modern image styling, effects, galleries, and responsive image components with professional presentation</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-image"></i>
            <span>Image Optimizer</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card sw-images-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">Image Components</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">This page demonstrates various image styling techniques including responsive images, thumbnails, avatars, overlays, galleries, shapes, and modern effects. All images are optimized for performance and accessibility with proper alt text and lazy loading support.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Image Styles -->
<div class="sw-images-section-title">
    <i class="fa-solid fa-image"></i>
    Basic Image Styles <span class="badge badge-primary">Essential</span>
</div>

<div class="sw-images-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-square"></i>
                </div>
                <div>
                    <h3>Default Image</h3>
                    <p class="card-subtitle">Standard responsive image</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-images-example">
                <span class="sw-images-example-label">Responsive Image</span>
                <div class="sw-lightbox-trigger">
                    <img src="https://picsum.photos/seed/default/600/400" class="sw-demo-image" alt="Default image">
                    <div class="sw-lightbox-icon">
                        <i class="fa-solid fa-expand"></i>
                    </div>
                </div>
                <div class="sw-img-caption">
                    <h4>Default Style</h4>
                    <p>width: 100%, border-radius: 8px</p>
                </div>
                <div class="sw-images-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Click image to open zoom viewer
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
                    <h3>Rounded Image</h3>
                    <p class="card-subtitle">Image with rounded corners</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-images-example">
                <span class="sw-images-example-label">Rounded Corners</span>
                <div class="sw-lightbox-trigger">
                    <img src="https://picsum.photos/seed/rounded/600/400" class="sw-demo-image sw-img-rounded" alt="Rounded image">
                    <div class="sw-lightbox-icon">
                        <i class="fa-solid fa-expand"></i>
                    </div>
                </div>
                <div class="sw-img-caption">
                    <h4>Rounded Style</h4>
                    <p>border-radius: 12px</p>
                </div>
                <div class="sw-images-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Click image to open zoom viewer
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
                    <h3>Bordered Image</h3>
                    <p class="card-subtitle">Image with accent border</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-images-example">
                <span class="sw-images-example-label">With Border</span>
                <img src="https://picsum.photos/seed/border/600/400" class="sw-demo-image sw-img-bordered" alt="Bordered image">
                <div class="sw-img-caption">
                    <h4>Bordered Style</h4>
                    <p>border: 3px solid var(--accent)</p>
                </div>
                <div class="sw-images-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Border highlights and frames the image
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
                    <h3>Shadow Effect</h3>
                    <p class="card-subtitle">Image with drop shadow</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-images-example">
                <span class="sw-images-example-label">With Shadow</span>
                <div class="sw-lightbox-trigger">
                    <img src="https://picsum.photos/seed/shadow/600/400" class="sw-demo-image sw-img-shadow" alt="Image with shadow">
                    <div class="sw-lightbox-icon">
                        <i class="fa-solid fa-expand"></i>
                    </div>
                </div>
                <div class="sw-img-caption">
                    <h4>Shadow Style</h4>
                    <p>box-shadow: 0 8px 24px rgba(0,0,0,0.15)</p>
                </div>
                <div class="sw-images-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Click image to open zoom viewer
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Thumbnails & Frames -->
<div class="sw-images-section-title">
    <i class="fa-solid fa-images"></i>
    Thumbnails & Frames
</div>

<div class="sw-images-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-thumbtack"></i>
                </div>
                <div>
                    <h3>Image Thumbnail</h3>
                    <p class="card-subtitle">Thumbnail with border and padding</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-images-example">
                <span class="sw-images-example-label">Thumbnail Style</span>
                <img src="https://picsum.photos/seed/thumb/400/300" class="sw-demo-image sw-img-thumbnail" alt="Thumbnail">
                <div class="sw-img-caption">
                    <h4>Thumbnail</h4>
                    <p>padding: 4px, background: white, border: 1px</p>
                </div>
                <div class="sw-images-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Thumbnail creates photo frame effect
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-frame"></i>
                </div>
                <div>
                    <h3>Image Frame</h3>
                    <p class="card-subtitle">Elevated frame with shadow</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-images-example">
                <span class="sw-images-example-label">Frame Style</span>
                <div class="sw-img-frame">
                    <img src="https://picsum.photos/seed/frame/400/300" class="sw-demo-image" alt="Framed image">
                </div>
                <div class="sw-img-caption">
                    <h4>Framed Image</h4>
                    <p>padding: 12px, shadow, rounded corners</p>
                </div>
                <div class="sw-images-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Frame adds professional presentation
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-camera-retro"></i>
                </div>
                <div>
                    <h3>Polaroid Style</h3>
                    <p class="card-subtitle">Vintage polaroid effect</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-images-example">
                <span class="sw-images-example-label">Polaroid Effect</span>
                <div class="sw-img-polaroid">
                    <img src="https://picsum.photos/seed/polaroid/400/350" alt="Polaroid">
                    <div class="sw-img-polaroid-caption">Summer Vacation 2024</div>
                </div>
                <div class="sw-images-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Hover to see rotation effect
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Avatars -->
<div class="sw-images-section-title">
    <i class="fa-solid fa-user-circle"></i>
    Avatar System <span class="badge badge-success">Popular</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-users"></i>
            </div>
            <div>
                <h3>Avatar Sizes</h3>
                <p class="card-subtitle">XS, SM, MD, LG, XL variants</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-images-example">
            <span class="sw-images-example-label">Size Variations</span>
            <div class="sw-avatar-grid">
                <div style="text-align: center;">
                    <img src="https://ui-avatars.com/api/?name=XS&background=0078D4&color=fff&size=64" class="sw-avatar-xs" alt="XS">
                    <div style="margin-top: 8px; font-size: 11px; color: var(--text-secondary);">XS (32px)</div>
                </div>
                <div style="text-align: center;">
                    <img src="https://ui-avatars.com/api/?name=SM&background=16C60C&color=fff&size=96" class="sw-avatar-sm" alt="SM">
                    <div style="margin-top: 8px; font-size: 11px; color: var(--text-secondary);">SM (48px)</div>
                </div>
                <div style="text-align: center;">
                    <img src="https://ui-avatars.com/api/?name=MD&background=FFB900&color=fff&size=128" class="sw-avatar-md" alt="MD">
                    <div style="margin-top: 8px; font-size: 11px; color: var(--text-secondary);">MD (64px)</div>
                </div>
                <div style="text-align: center;">
                    <img src="https://ui-avatars.com/api/?name=LG&background=E81123&color=fff&size=192" class="sw-avatar-lg" alt="LG">
                    <div style="margin-top: 8px; font-size: 11px; color: var(--text-secondary);">LG (96px)</div>
                </div>
                <div style="text-align: center;">
                    <img src="https://ui-avatars.com/api/?name=XL&background=00BCF2&color=fff&size=256" class="sw-avatar-xl" alt="XL">
                    <div style="margin-top: 8px; font-size: 11px; color: var(--text-secondary);">XL (128px)</div>
                </div>
            </div>
            <div class="sw-images-helper">
                <i class="fa-solid fa-circle-info"></i>
                Avatars scale proportionally with object-fit: cover
            </div>
        </div>
    </div>
</div>

<!-- Avatars with Status -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-circle-dot"></i>
            </div>
            <div>
                <h3>Avatars with Status</h3>
                <p class="card-subtitle">Online, offline, busy indicators</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-images-example">
            <span class="sw-images-example-label">Status Indicators</span>
            <div class="sw-avatar-grid">
                <div class="sw-avatar-wrapper">
                    <img src="https://ui-avatars.com/api/?name=John+Doe&background=16C60C&color=fff&size=192" class="sw-avatar-lg" alt="Online">
                    <span class="sw-avatar-status online"></span>
                    <div style="margin-top: 12px; text-align: center; font-size: 12px;">Online</div>
                </div>
                <div class="sw-avatar-wrapper">
                    <img src="https://ui-avatars.com/api/?name=Jane+Smith&background=808080&color=fff&size=192" class="sw-avatar-lg" alt="Offline">
                    <span class="sw-avatar-status offline"></span>
                    <div style="margin-top: 12px; text-align: center; font-size: 12px;">Offline</div>
                </div>
                <div class="sw-avatar-wrapper">
                    <img src="https://ui-avatars.com/api/?name=Bob+Johnson&background=E81123&color=fff&size=192" class="sw-avatar-lg" alt="Busy">
                    <span class="sw-avatar-status busy"></span>
                    <div style="margin-top: 12px; text-align: center; font-size: 12px;">Busy</div>
                </div>
            </div>
            <div class="sw-images-helper">
                <i class="fa-solid fa-circle-info"></i>
                Status badges show user availability
            </div>
        </div>
    </div>
</div>

<!-- Image Overlays -->
<div class="sw-images-section-title">
    <i class="fa-solid fa-layer-group"></i>
    Image Overlays
</div>

<div class="sw-images-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <div>
                    <h3>Hover Overlay</h3>
                    <p class="card-subtitle">Overlay appears on hover</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-images-example">
                <span class="sw-images-example-label">Overlay Effect</span>
                <div class="sw-img-overlay-container">
                    <img src="https://picsum.photos/seed/overlay/600/400" class="sw-demo-image" alt="Overlay">
                    <div class="sw-img-overlay">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </div>
                </div>
                <div class="sw-images-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Hover over image to see overlay
                </div>
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
                    <h3>Lightbox Trigger</h3>
                    <p class="card-subtitle">Click to view full size</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-images-example">
                <span class="sw-images-example-label">Lightbox Effect</span>
                <div class="sw-img-overlay-container sw-lightbox-trigger">
                    <img src="https://picsum.photos/seed/lightbox/600/400" class="sw-demo-image" alt="Lightbox">
                    <div class="sw-lightbox-icon">
                        <i class="fa-solid fa-expand"></i>
                    </div>
                </div>
                <div class="sw-images-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Hover to see expand icon
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Image Gallery -->
<div class="sw-images-section-title">
    <i class="fa-solid fa-grip"></i>
    Image Gallery
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-images"></i>
            </div>
            <div>
                <h3>Gallery Grid</h3>
                <p class="card-subtitle">Responsive masonry-style gallery</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-images-example">
            <span class="sw-images-example-label">Photo Gallery</span>
            <div class="sw-gallery-grid">
                <div class="sw-gallery-item">
                    <img src="https://picsum.photos/seed/gallery1/300/300" alt="Gallery 1">
                    <div class="sw-gallery-item-overlay">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
                <div class="sw-gallery-item">
                    <img src="https://picsum.photos/seed/gallery2/300/300" alt="Gallery 2">
                    <div class="sw-gallery-item-overlay">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
                <div class="sw-gallery-item">
                    <img src="https://picsum.photos/seed/gallery3/300/300" alt="Gallery 3">
                    <div class="sw-gallery-item-overlay">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
                <div class="sw-gallery-item">
                    <img src="https://picsum.photos/seed/gallery4/300/300" alt="Gallery 4">
                    <div class="sw-gallery-item-overlay">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
                <div class="sw-gallery-item">
                    <img src="https://picsum.photos/seed/gallery5/300/300" alt="Gallery 5">
                    <div class="sw-gallery-item-overlay">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
                <div class="sw-gallery-item">
                    <img src="https://picsum.photos/seed/gallery6/300/300" alt="Gallery 6">
                    <div class="sw-gallery-item-overlay">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
            <div class="sw-images-helper">
                <i class="fa-solid fa-circle-info"></i>
                Click any image to open zoom viewer with drag support
            </div>
        </div>
    </div>
</div>

<!-- Image Shapes -->
<div class="sw-images-section-title">
    <i class="fa-solid fa-shapes"></i>
    Image Shapes
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-object-ungroup"></i>
            </div>
            <div>
                <h3>Custom Shapes</h3>
                <p class="card-subtitle">Circle, rounded, pill, diamond, hexagon</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-images-example">
            <span class="sw-images-example-label">Shape Variations</span>
            <div style="display: flex; gap: 24px; justify-content: center; flex-wrap: wrap; align-items: center;">
                <div style="text-align: center;">
                    <img src="https://picsum.photos/seed/circle/200/200" class="sw-shape-circle" style="width: 120px; height: 120px; object-fit: cover;" alt="Circle">
                    <div style="margin-top: 12px; font-size: 12px;">Circle</div>
                </div>
                <div style="text-align: center;">
                    <img src="https://picsum.photos/seed/rounded2/200/200" class="sw-shape-rounded" style="width: 120px; height: 120px; object-fit: cover;" alt="Rounded">
                    <div style="margin-top: 12px; font-size: 12px;">Rounded</div>
                </div>
                <div style="text-align: center;">
                    <img src="https://picsum.photos/seed/pill/200/150" class="sw-shape-pill" style="width: 160px; height: 120px; object-fit: cover;" alt="Pill">
                    <div style="margin-top: 12px; font-size: 12px;">Pill</div>
                </div>
                <div style="text-align: center;">
                    <div style="width: 120px; height: 120px; overflow: hidden;">
                        <img src="https://picsum.photos/seed/diamond/200/200" class="sw-shape-diamond" style="width: 140px; height: 140px; object-fit: cover; margin: -10px;" alt="Diamond">
                    </div>
                    <div style="margin-top: 12px; font-size: 12px;">Diamond</div>
                </div>
                <div style="text-align: center;">
                    <img src="https://picsum.photos/seed/hexagon/200/200" class="sw-shape-hexagon" style="width: 120px; height: 120px; object-fit: cover;" alt="Hexagon">
                    <div style="margin-top: 12px; font-size: 12px;">Hexagon</div>
                </div>
            </div>
            <div class="sw-images-helper">
                <i class="fa-solid fa-circle-info"></i>
                Shapes use border-radius and clip-path
            </div>
        </div>
    </div>
</div>

<!-- Image with Badge -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-danger">
                <i class="fa-solid fa-badge"></i>
            </div>
            <div>
                <h3>Image with Badge</h3>
                <p class="card-subtitle">Notification badge overlay</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-images-example">
            <span class="sw-images-example-label">Badge Indicator</span>
            <div style="display: flex; gap: 24px; flex-wrap: wrap; align-items: center;">
                <div class="sw-img-badge-container">
                    <img src="https://ui-avatars.com/api/?name=Messages&background=0078D4&color=fff&size=192" class="sw-avatar-xl" alt="Messages">
                    <span class="sw-img-badge">5</span>
                </div>
                <div class="sw-img-badge-container">
                    <img src="https://ui-avatars.com/api/?name=Notifications&background=16C60C&color=fff&size=192" class="sw-avatar-xl" alt="Notifications">
                    <span class="sw-img-badge">12</span>
                </div>
                <div class="sw-img-badge-container">
                    <img src="https://ui-avatars.com/api/?name=Alerts&background=E81123&color=fff&size=192" class="sw-avatar-xl" alt="Alerts">
                    <span class="sw-img-badge">3</span>
                </div>
            </div>
            <div class="sw-images-helper">
                <i class="fa-solid fa-circle-info"></i>
                Badges show count indicators
            </div>
        </div>
    </div>
</div>

<!-- Responsive Images -->
<div class="sw-images-section-title">
    <i class="fa-solid fa-mobile-screen"></i>
    Responsive Images
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-expand"></i>
            </div>
            <div>
                <h3>Responsive Behavior</h3>
                <p class="card-subtitle">Images adapt to screen size</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-images-example">
            <span class="sw-images-example-label">Before & After (Responsive)</span>
            <div class="sw-comparison-grid">
                <div class="sw-comparison-item">
                    <img src="https://picsum.photos/seed/desktop/800/400" alt="Desktop">
                    <div class="sw-comparison-label">Desktop View</div>
                </div>
                <div class="sw-comparison-item">
                    <img src="https://picsum.photos/seed/mobile/400/400" alt="Mobile">
                    <div class="sw-comparison-label">Mobile View</div>
                </div>
            </div>
            <div class="sw-images-helper">
                <i class="fa-solid fa-circle-info"></i>
                Images automatically scale to container width
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="sw-images-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="sw-images-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>CSS Classes</h3>
                    <p class="card-subtitle">Available image utilities</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" style="width: 100%; font-size: 13px;">
                <thead>
                    <tr>
                        <th>Class</th>
                        <th>Effect</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>.demo-image</code></td>
                        <td>Base responsive image</td>
                    </tr>
                    <tr>
                        <td><code>.img-rounded</code></td>
                        <td>Rounded corners (12px)</td>
                    </tr>
                    <tr>
                        <td><code>.img-circular</code></td>
                        <td>Circular shape (50%)</td>
                    </tr>
                    <tr>
                        <td><code>.img-bordered</code></td>
                        <td>Accent border (3px)</td>
                    </tr>
                    <tr>
                        <td><code>.img-shadow</code></td>
                        <td>Drop shadow effect</td>
                    </tr>
                    <tr>
                        <td><code>.img-thumbnail</code></td>
                        <td>Thumbnail with padding</td>
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
                    <p class="card-subtitle">Image optimization tips</p>
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
                        <td><strong>Lazy loading</strong></td>
                        <td>Faster page load</td>
                    </tr>
                    <tr>
                        <td><strong>Alt text</strong></td>
                        <td>Accessibility (a11y)</td>
                    </tr>
                    <tr>
                        <td><strong>WebP format</strong></td>
                        <td>Smaller file size</td>
                    </tr>
                    <tr>
                        <td><strong>object-fit</strong></td>
                        <td>Proper scaling</td>
                    </tr>
                    <tr>
                        <td><strong>Responsive srcset</strong></td>
                        <td>Optimal resolution</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Images page initialization
$(document).ready(function() {
    console.log('📋 SW Images page loaded successfully');
});
</script>
@endpush