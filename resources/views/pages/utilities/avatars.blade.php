@extends('layouts.app')

@section('title', 'Avatars')
@section('breadcrumb', 'Avatars')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Avatars</h1>
        <p>User profile images and initials with various styles, sizes, and status indicators</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-user"></i>
            <span>User Guide</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="sw-avatar-info-card content-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What are Avatars?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Avatars are visual representations of users, typically displayed as profile pictures or initials. They help personalize interfaces and make user identification quick and intuitive. Avatars can show images, initials, icons, and include status indicators or notification badges.</p>
            </div>
        </div>
    </div>
</div>

<!-- Avatar with Images -->
<div class="sw-avatar-section-title">
    <i class="fa-solid fa-image"></i>
    Avatar with Images
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-camera"></i>
            </div>
            <div>
                <h3>Image Avatars</h3>
                <p class="card-subtitle">Profile pictures from URLs</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-avatar-example" style="min-height: 120px;">
            <span class="sw-avatar-example-label">Image Avatars</span>
            <div style="display: flex; gap: 20px; align-items: center;">
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-lg" style="background: url('https://i.pravatar.cc/150?img=1') center/cover;"></div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">Small</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl" style="background: url('https://i.pravatar.cc/150?img=2') center/cover;"></div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">Medium</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-2xl" style="background: url('https://i.pravatar.cc/150?img=3') center/cover;"></div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">Large</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl sw-avatar-bordered" style="background: url('https://i.pravatar.cc/150?img=4') center/cover;"></div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">Bordered</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl sw-avatar-status online" style="background: url('https://i.pravatar.cc/150?img=5') center/cover;"></div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">Online</div>
                </div>
            </div>
        </div>
        <div class="sw-avatar-helper">
            <i class="fa-solid fa-circle-info"></i>
            Images from pravatar.cc with fallback to initials
        </div>
    </div>
</div>

<!-- Avatar with Icons -->
<div class="sw-avatar-section-title">
    <i class="fa-solid fa-icons"></i>
    Avatar with Icons
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-star"></i>
            </div>
            <div>
                <h3>Icon Avatars</h3>
                <p class="card-subtitle">FontAwesome icons instead of text</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-avatar-example" style="min-height: 120px;">
            <span class="sw-avatar-example-label">Icon Variations</span>
            <div style="display: flex; gap: 20px;">
                <div class="sw-avatar sw-avatar-lg" title="User">
                    <i class="fa-solid fa-user sw-avatar-icon"></i>
                </div>
                <div class="sw-avatar sw-avatar-lg sw-avatar-success" title="Settings">
                    <i class="fa-solid fa-gear sw-avatar-icon"></i>
                </div>
                <div class="sw-avatar sw-avatar-lg sw-avatar-warning" title="Mail">
                    <i class="fa-solid fa-envelope sw-avatar-icon"></i>
                </div>
                <div class="sw-avatar sw-avatar-lg sw-avatar-danger" title="Heart">
                    <i class="fa-solid fa-heart sw-avatar-icon"></i>
                </div>
                <div class="sw-avatar sw-avatar-lg sw-avatar-info" title="Star">
                    <i class="fa-solid fa-star sw-avatar-icon"></i>
                </div>
                <div class="sw-avatar sw-avatar-lg" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);" title="Rocket">
                    <i class="fa-solid fa-rocket sw-avatar-icon"></i>
                </div>
            </div>
        </div>
        <div class="sw-avatar-helper">
            <i class="fa-solid fa-circle-info"></i>
            Use icons for system avatars or categories
        </div>
    </div>
</div>

<!-- Avatar Sizes Extended -->
<div class="sw-avatar-section-title">
    <i class="fa-solid fa-text-height"></i>
    Avatar Sizes <span class="badge badge-primary">Essential</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-arrows-up-down"></i>
            </div>
            <div>
                <h3>Size Variations</h3>
                <p class="card-subtitle">Extra small to extra large</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-avatar-example" style="min-height: 100px;">
            <span class="sw-avatar-example-label">All Sizes</span>
            <div style="display: flex; gap: 16px; align-items: end;">
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xs">XS</div>
                    <div style="font-size: 10px; margin-top: 4px;">24px</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-sm">SM</div>
                    <div style="font-size: 10px; margin-top: 4px;">32px</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-md">MD</div>
                    <div style="font-size: 10px; margin-top: 4px;">40px</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-lg">LG</div>
                    <div style="font-size: 10px; margin-top: 4px;">48px</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl">XL</div>
                    <div style="font-size: 10px; margin-top: 4px;">64px</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-2xl">2XL</div>
                    <div style="font-size: 10px; margin-top: 4px;">80px</div>
                </div>
            </div>
        </div>
        <div class="sw-avatar-helper">
            <i class="fa-solid fa-circle-info"></i>
            Six size options from 24px to 80px
        </div>
    </div>
</div>

<!-- Avatar Colors -->
<div class="sw-avatar-section-title">
    <i class="fa-solid fa-palette"></i>
    Avatar Colors
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-swatchbook"></i>
            </div>
            <div>
                <h3>Color Variations</h3>
                <p class="card-subtitle">Contextual color options</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-avatar-example" style="min-height: 100px;">
            <span class="sw-avatar-example-label">Color Options</span>
            <div style="display: flex; gap: 16px;">
                <div class="sw-avatar sw-avatar-lg">P</div>
                <div class="sw-avatar sw-avatar-lg sw-avatar-success">S</div>
                <div class="sw-avatar sw-avatar-lg sw-avatar-warning">W</div>
                <div class="sw-avatar sw-avatar-lg sw-avatar-danger">D</div>
                <div class="sw-avatar sw-avatar-lg sw-avatar-info">I</div>
            </div>
        </div>
        <div class="sw-avatar-helper">
            <i class="fa-solid fa-circle-info"></i>
            Five color variants available
        </div>
    </div>
</div>

<!-- Avatar with Status -->
<div class="sw-avatar-section-title">
    <i class="fa-solid fa-circle-dot"></i>
    Avatar with Status
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-signal"></i>
            </div>
            <div>
                <h3>Status Indicators</h3>
                <p class="card-subtitle">Online, offline, busy, away</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-avatar-example" style="min-height: 100px;">
            <span class="sw-avatar-example-label">User Status</span>
            <div style="display: flex; gap: 24px;">
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl sw-avatar-status online">JD</div>
                    <div style="font-size: 11px; margin-top: 8px;">Online</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl sw-avatar-status offline">AS</div>
                    <div style="font-size: 11px; margin-top: 8px;">Offline</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl sw-avatar-status busy">MK</div>
                    <div style="font-size: 11px; margin-top: 8px;">Busy</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl sw-avatar-status away">RW</div>
                    <div style="font-size: 11px; margin-top: 8px;">Away</div>
                </div>
            </div>
        </div>
        <div class="sw-avatar-helper">
            <i class="fa-solid fa-circle-info"></i>
            Real-time user status display
        </div>
    </div>
</div>

<!-- Avatar with Text -->
<div class="sw-avatar-section-title">
    <i class="fa-solid fa-font"></i>
    Avatar with Text
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-text-width"></i>
            </div>
            <div>
                <h3>Initials & Names</h3>
                <p class="card-subtitle">First name, full name, initials</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-avatar-example" style="min-height: 120px;">
            <span class="sw-avatar-example-label">Text Variations</span>
            <div style="display: flex; gap: 24px; align-items: center;">
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl">J</div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">First Initial</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl sw-avatar-success">JD</div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">Initials</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl sw-avatar-warning" style="font-size: 12px;">JD</div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">2 Letters</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl sw-avatar-danger" style="font-size: 11px; width: auto; padding: 0 12px; border-radius: 20px;">John</div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">Full Name</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl sw-avatar-info" style="font-size: 10px; width: auto; padding: 0 12px; border-radius: 20px;">J. Doe</div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">Abbreviated</div>
                </div>
            </div>
        </div>
        <div class="sw-avatar-helper">
            <i class="fa-solid fa-circle-info"></i>
            Different text formats for various use cases
        </div>
    </div>
</div>

<!-- Avatar Bordered & Ring -->
<div class="sw-avatar-section-title">
    <i class="fa-solid fa-circle-notch"></i>
    Bordered & Ring Styles
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-border-style"></i>
            </div>
            <div>
                <h3>Border Variations</h3>
                <p class="card-subtitle">Single, double, colored borders</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-avatar-example" style="min-height: 120px;">
            <span class="sw-avatar-example-label">Border Styles</span>
            <div style="display: flex; gap: 24px;">
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl sw-avatar-bordered">JD</div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">Bordered</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl" style="border: 3px solid var(--success); box-shadow: 0 0 0 2px var(--success);">AS</div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">Green Ring</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl" style="border: 3px solid var(--danger); box-shadow: 0 0 0 2px var(--danger);">MK</div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">Red Ring</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl" style="border: 3px solid var(--warning); box-shadow: 0 0 0 2px var(--warning);">RW</div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">Yellow Ring</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl" style="border: 3px dashed var(--accent);">TN</div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">Dashed</div>
                </div>
            </div>
        </div>
        <div class="sw-avatar-helper">
            <i class="fa-solid fa-circle-info"></i>
            Custom borders with CSS box-shadow technique
        </div>
    </div>
</div>

<!-- Gradient Avatars -->
<div class="sw-avatar-section-title">
    <i class="fa-solid fa-rainbow"></i>
    Gradient Avatars
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-danger">
                <i class="fa-solid fa-palette"></i>
            </div>
            <div>
                <h3>Gradient Backgrounds</h3>
                <p class="card-subtitle">Modern gradient combinations</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="avatar-example" style="min-height: 120px;">
            <span class="avatar-example-label">Gradient Styles</span>
            <div style="display: flex; gap: 20px;">
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">JD</div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">Purple</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">AS</div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">Pink</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">MK</div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">Blue</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);">RW</div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">Green</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">TN</div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">Sunset</div>
                </div>
                <div style="text-align: center;">
                    <div class="sw-avatar sw-avatar-xl" style="background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%); color: #333;">AB</div>
                    <div style="font-size: 11px; margin-top: 8px; color: var(--text-secondary);">Pastel</div>
                </div>
            </div>
        </div>
        <div class="sw-avatar-helper">
            <i class="fa-solid fa-circle-info"></i>
            Modern gradient backgrounds for premium look
        </div>
    </div>
</div>

<!-- Interactive Avatar Demo -->
<div class="sw-avatar-section-title">
    <i class="fa-solid fa-hand-pointer"></i>
    Interactive Demo <span class="badge badge-success">New</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-wand-magic-sparkles"></i>
            </div>
            <div>
                <h3>Custom Avatar Builder</h3>
                <p class="card-subtitle">Configure and preview avatars in real-time</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div style="display: grid; grid-template-columns: 300px 1fr; gap: 32px;">
            <!-- Controls -->
            <div style="border-right: 1px solid var(--border-color); padding-right: 24px;">
                <h4 style="font-size: 14px; margin-bottom: 16px; color: var(--text-primary);">Configuration</h4>
                
                <div style="margin-bottom: 16px;">
                    <label style="font-size: 12px; font-weight: 600; color: var(--text-secondary); display: block; margin-bottom: 8px;">Size</label>
                    <select id="avatarSize" class="form-control" style="width: 100%;">
                        <option value="sw-avatar-xs">XS (24px)</option>
                        <option value="sw-avatar-sm">SM (32px)</option>
                        <option value="sw-avatar-md">MD (40px)</option>
                        <option value="sw-avatar-lg" selected>LG (48px)</option>
                        <option value="sw-avatar-xl">XL (64px)</option>
                        <option value="sw-avatar-2xl">2XL (80px)</option>
                    </select>
                </div>
                
                <div style="margin-bottom: 16px;">
                    <label style="font-size: 12px; font-weight: 600; color: var(--text-secondary); display: block; margin-bottom: 8px;">Style</label>
                    <select id="avatarStyle" class="form-control" style="width: 100%;">
                        <option value="initials">Initials</option>
                        <option value="icon">Icon</option>
                        <option value="image">Image</option>
                        <option value="gradient">Gradient</option>
                    </select>
                </div>
                
                <div style="margin-bottom: 16px;">
                    <label style="font-size: 12px; font-weight: 600; color: var(--text-secondary); display: block; margin-bottom: 8px;">Shape</label>
                    <select id="avatarShape" class="form-control" style="width: 100%;">
                        <option value="sw-avatar-rounded">Circle</option>
                        <option value="sw-avatar-square">Square</option>
                        <option value="sw-avatar-rounded-lg">Rounded</option>
                    </select>
                </div>
                
                <div style="margin-bottom: 16px;">
                    <label style="font-size: 12px; font-weight: 600; color: var(--text-secondary); display: block; margin-bottom: 8px;">Status</label>
                    <select id="avatarStatus" class="form-control" style="width: 100%;">
                        <option value="">None</option>
                        <option value="online">Online</option>
                        <option value="offline">Offline</option>
                        <option value="busy">Busy</option>
                        <option value="away">Away</option>
                    </select>
                </div>
                
                <div style="margin-bottom: 16px;">
                    <label style="font-size: 12px; font-weight: 600; color: var(--text-secondary); display: block; margin-bottom: 8px;">Text / Initials</label>
                    <input type="text" id="avatarText" class="form-control" value="JD" maxlength="3" style="width: 100%;" placeholder="Enter initials">
                </div>
                
                <div style="margin-bottom: 16px;">
                    <label style="font-size: 12px; font-weight: 600; color: var(--text-secondary); display: block; margin-bottom: 8px;">Background Color</label>
                    <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 8px;">
                        <button class="color-btn" data-color="" style="width: 100%; aspect-ratio: 1; border-radius: 6px; border: 2px solid var(--border-color); background: var(--accent); cursor: pointer;" title="Default"></button>
                        <button class="color-btn" data-color="sw-avatar-success" style="width: 100%; aspect-ratio: 1; border-radius: 6px; border: 2px solid transparent; background: var(--success); cursor: pointer;" title="Success"></button>
                        <button class="color-btn" data-color="sw-avatar-warning" style="width: 100%; aspect-ratio: 1; border-radius: 6px; border: 2px solid transparent; background: var(--warning); cursor: pointer;" title="Warning"></button>
                        <button class="color-btn" data-color="sw-avatar-danger" style="width: 100%; aspect-ratio: 1; border-radius: 6px; border: 2px solid transparent; background: var(--danger); cursor: pointer;" title="Danger"></button>
                        <button class="color-btn" data-color="sw-avatar-info" style="width: 100%; aspect-ratio: 1; border-radius: 6px; border: 2px solid transparent; background: var(--info); cursor: pointer;" title="Info"></button>
                    </div>
                </div>
                
                <button class="btn btn-secondary" id="resetAvatarBtn" style="width: 100%;">
                    <i class="fa-solid fa-rotate-left"></i> Reset to Default
                </button>
            </div>
            
            <!-- Preview -->
            <div>
                <h4 style="font-size: 14px; margin-bottom: 16px; color: var(--text-primary);">
                    <i class="fa-solid fa-eye" style="color: var(--accent); margin-right: 8px;"></i>
                    Live Preview
                </h4>
                
                <div style="min-height: 300px; background: linear-gradient(135deg, rgba(0, 0, 0, 0.02) 0%, rgba(0, 0, 0, 0.05) 100%); border: 2px dashed var(--border-color); border-radius: 12px; display: flex; align-items: center; justify-content: center; position: relative;">
                    <div id="avatarPreview" class="sw-avatar sw-avatar-lg sw-avatar-status online">
                        JD
                    </div>
                </div>
                
                <div style="margin-top: 20px; padding: 16px; background: var(--surface-dark); border-radius: 8px; border-left: 4px solid var(--accent);">
                    <div style="font-size: 11px; color: var(--text-secondary); margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px; font-weight: 600;">HTML Code</div>
                    <code id="avatarCode" style="font-size: 12px; color: var(--accent); font-family: 'Fira Code', 'Courier New', monospace;">
                        &lt;div class="sw-avatar sw-avatar-lg sw-avatar-status online"&gt;JD&lt;/div&gt;
                    </code>
                </div>
                
                <div style="margin-top: 12px; padding: 12px 16px; background: rgba(var(--success-rgb), 0.1); border-radius: 6px; border-left: 3px solid var(--success);">
                    <div style="font-size: 11px; color: var(--success); font-weight: 600; margin-bottom: 4px;">
                        <i class="fa-solid fa-circle-check"></i> Ready to Use
                    </div>
                    <p style="font-size: 12px; color: var(--text-secondary); margin: 0;">Copy the code above and paste it into your HTML. Customize classes as needed.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Avatar Group Extended -->
<div class="sw-avatar-section-title">
    <i class="fa-solid fa-users"></i>
    Advanced Avatar Groups
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-people-group"></i>
            </div>
            <div>
                <h3>Team Avatars</h3>
                <p class="card-subtitle">Overlapping group display</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="avatar-example" style="min-height: 120px;">
            <span class="avatar-example-label">Basic Group</span>
            <div class="sw-avatar-group">
                <div class="sw-avatar sw-avatar-lg">JD</div>
                <div class="sw-avatar sw-avatar-lg sw-avatar-success">AS</div>
                <div class="sw-avatar sw-avatar-lg sw-avatar-warning">MK</div>
                <div class="sw-avatar sw-avatar-lg sw-avatar-danger">RW</div>
                <div class="sw-avatar sw-avatar-lg sw-avatar-info">+5</div>
            </div>
        </div>
        
        <div class="avatar-example" style="min-height: 120px; margin-top: 16px;">
            <span class="avatar-example-label">Group with Images</span>
            <div class="sw-avatar-group">
                <div class="sw-avatar sw-avatar-lg" style="background: url('https://i.pravatar.cc/150?img=1') center/cover;"></div>
                <div class="sw-avatar sw-avatar-lg" style="background: url('https://i.pravatar.cc/150?img=2') center/cover;"></div>
                <div class="sw-avatar sw-avatar-lg" style="background: url('https://i.pravatar.cc/150?img=3') center/cover;"></div>
                <div class="sw-avatar sw-avatar-lg" style="background: url('https://i.pravatar.cc/150?img=4') center/cover;"></div>
                <div class="sw-avatar sw-avatar-lg" style="background: url('https://i.pravatar.cc/150?img=5') center/cover;"></div>
                <div class="sw-avatar sw-avatar-lg sw-avatar-info">+10</div>
            </div>
        </div>
        
        <div class="avatar-example" style="min-height: 120px; margin-top: 16px;">
            <span class="avatar-example-label">Large Group</span>
            <div class="sw-avatar-group">
                <div class="sw-avatar sw-avatar-xl sw-avatar-status online">JD</div>
                <div class="sw-avatar sw-avatar-xl sw-avatar-status busy">AS</div>
                <div class="sw-avatar sw-avatar-xl sw-avatar-status away">MK</div>
                <div class="sw-avatar sw-avatar-xl sw-avatar-status offline">RW</div>
                <div class="sw-avatar sw-avatar-xl sw-avatar-status online">TN</div>
                <div class="sw-avatar sw-avatar-xl sw-avatar-danger">+25</div>
            </div>
        </div>
        
        <div class="sw-avatar-helper">
            <i class="fa-solid fa-circle-info"></i>
            Hover over avatars to see them pop out
        </div>
    </div>
</div>

<!-- Avatar with Badge -->
<div class="sw-avatar-section-title">
    <i class="fa-solid fa-bell"></i>
    Avatar with Badge
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-danger">
                <i class="fa-solid fa-circle-exclamation"></i>
            </div>
            <div>
                <h3>Notification Badges</h3>
                <p class="card-subtitle">Unread count indicators</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="avatar-example" style="min-height: 100px;">
            <span class="avatar-example-label">Notifications</span>
            <div style="display: flex; gap: 24px;">
                <div class="sw-avatar-badge-wrapper">
                    <div class="sw-avatar sw-avatar-lg">JD</div>
                    <div class="sw-avatar-badge">3</div>
                </div>
                <div class="sw-avatar-badge-wrapper">
                    <div class="sw-avatar sw-avatar-lg sw-avatar-success">AS</div>
                    <div class="sw-avatar-badge">12</div>
                </div>
                <div class="sw-avatar-badge-wrapper">
                    <div class="sw-avatar sw-avatar-lg sw-avatar-warning">MK</div>
                    <div class="sw-avatar-badge">99+</div>
                </div>
            </div>
        </div>
        <div class="sw-avatar-helper">
            <i class="fa-solid fa-circle-info"></i>
            Notification count display
        </div>
    </div>
</div>

<!-- Avatar Shapes -->
<div class="sw-avatar-section-title">
    <i class="fa-solid fa-shapes"></i>
    Avatar Shapes
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-square"></i>
            </div>
            <div>
                <h3>Shape Variations</h3>
                <p class="card-subtitle">Circle, square, rounded</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="avatar-example" style="min-height: 100px;">
            <span class="avatar-example-label">Shape Options</span>
            <div style="display: flex; gap: 24px;">
                <div class="sw-avatar sw-avatar-xl sw-avatar-rounded">
                    <i class="fa-solid fa-user sw-avatar-icon"></i>
                </div>
                <div class="sw-avatar sw-avatar-xl sw-avatar-square">
                    <i class="fa-solid fa-user sw-avatar-icon"></i>
                </div>
                <div class="sw-avatar sw-avatar-xl sw-avatar-rounded-lg">
                    <i class="fa-solid fa-user sw-avatar-icon"></i>
                </div>
            </div>
        </div>
        <div class="sw-avatar-helper">
            <i class="fa-solid fa-circle-info"></i>
            Three shape variants
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="sw-avatar-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="sw-avatar-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>HTML Structure</h3>
                    <p class="card-subtitle">Basic avatar markup</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-avatar-code-block">
&lt;!-- Basic Avatar --&gt;<br>
&lt;div class="sw-avatar sw-avatar-md"&gt;JD&lt;/div&gt;<br>
<br>
&lt;!-- With Status --&gt;<br>
&lt;div class="sw-avatar sw-avatar-lg sw-avatar-status online"&gt;<br>
&nbsp;&nbsp;AS<br>
&lt;/div&gt;<br>
<br>
&lt;!-- Avatar Group --&gt;<br>
&lt;div class="avatar-group"&gt;<br>
&nbsp;&nbsp;&lt;div class="sw-avatar sw-avatar-md"&gt;JD&lt;/div&gt;<br>
&nbsp;&nbsp;&lt;div class="sw-avatar sw-avatar-md"&gt;AS&lt;/div&gt;<br>
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
                    <p class="card-subtitle">Avatar guidelines</p>
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
                        <td><strong>Use initials</strong></td>
                        <td>Fallback for images</td>
                    </tr>
                    <tr>
                        <td><strong>Show status</strong></td>
                        <td>Availability info</td>
                    </tr>
                    <tr>
                        <td><strong>Group overlap</strong></td>
                        <td>Team display</td>
                    </tr>
                    <tr>
                        <td><strong>Badge count</strong></td>
                        <td>Notifications</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
