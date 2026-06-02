@extends('layouts.app')

@section('title', 'Select2')

@push('styles')
<!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
/* Select2 Grid Layout */
.select2-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-bottom: 24px;
}

.select2-grid.three-cols {
    grid-template-columns: repeat(3, 1fr);
}

.select2-grid.full-width {
    grid-template-columns: 1fr;
}

/* Section Title */
.s2-section-title {
    font-size: 18px;
    font-weight: 600;
    margin: 32px 0 20px 0;
    display: flex;
    align-items: center;
    gap: 10px;
    color: var(--text-primary);
}

.s2-section-title i {
    color: var(--accent);
}

/* Select Example */
.s2-example {
    margin-bottom: 20px;
}

.s2-label {
    display: block;
    font-size: 13px;
    font-weight: 500;
    color: var(--text-secondary);
    margin-bottom: 8px;
}

.s2-hint {
    float: right;
    font-size: 11px;
    color: var(--text-tertiary);
    font-weight: 400;
}

/* Select Wrapper */
.select-wrapper {
    position: relative;
}

.select-wrapper select {
    width: 100%;
    padding: 10px 14px;
    border: 1px solid var(--border);
    border-radius: var(--radius-md);
    background: var(--bg-primary);
    color: var(--text-primary);
    font-size: 14px;
    font-family: inherit;
    transition: all 0.2s;
    cursor: pointer;
}

.select-wrapper select:focus {
    outline: none;
    border-color: var(--accent);
    box-shadow: 0 0 0 3px rgba(var(--accent-rgb), 0.1);
}

.select-wrapper select:disabled {
    opacity: 0.5;
    cursor: not-allowed;
    pointer-events: none;
}

/* Select with Icon */
.select-with-icon {
    position: relative;
}

/* Hide the original icon when Select2 is initialized */
.select-with-icon.select2-initialized > i {
    display: none;
}

/* Add icon as background on Select2 container */
.select-with-icon .select2-container--default .select2-selection--single {
    padding-left: 40px !important;
    background-image: none;
    background-repeat: no-repeat;
    background-position: 14px center;
    background-size: 14px;
}

/* Icon for User Role */
.select-with-icon[data-icon="user-shield"] .select2-container--default .select2-selection--single {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 512'%3E%3Cpath fill='%236b7280' d='M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 225.6 48 256.2 48 288c0 65.3 38.2 120.4 90.5 144c10.7 4.8 22.4 5.5 33.2 1.9l146.3-48.8c6.7-2.2 14-2.2 20.7 0l146.3 48.8c10.8 3.6 22.5 2.9 33.2-1.9c52.3-23.6 90.5-78.7 90.5-144c0-31.8-9.3-62.4-25.9-87.5l57.9-20.9c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1c-7.6-2.7-15.6-4.1-23.7-4.1zm0 224a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm-80 64c-8.8 0-16-7.2-16-16s7.2-16 16-16c5.4 0 10.6 .3 15.8 .8c15.7 23.2 42.1 39.2 72.2 39.2s56.5-16 72.2-39.2c5.2-.6 10.4-.8 15.8-.8c8.8 0 16 7.2 16 16s-7.2 16-16 16c-3.4 0-6.7 .2-10 .5c-20.3 30.1-55.5 50.5-94.2 50.5s-73.8-20.4-94.2-50.5c-3.3-.3-6.6-.5-10-.5z'/%3E%3C/svg%3E");
}

/* Icon for Credit Card */
.select-with-icon[data-icon="credit-card"] .select2-container--default .select2-selection--single {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'%3E%3Cpath fill='%236b7280' d='M64 80C46.3 80 32 94.3 32 112V168c-17.7 0-32 14.3-32 32s14.3 32 32 32V400c0 17.7 14.3 32 32 32H512c17.7 0 32-14.3 32-32V232c17.7 0 32-14.3 32-32s-14.3-32-32-32V112c0-17.7-14.3-32-32-32H64zM512 168v32c-35.3 0-64 28.7-64 64s28.7 64 64 64V448H64V292.9c22.5 15.3 49.6 24.2 78.7 25c.4 0 .8 0 1.3 0l208 0c.4 0 .8 0 1.3 0c29.1-.8 56.2-9.7 78.7-25V264c0-53 43-96 96-96h16c8.8 0 16-7.2 16-16s-7.2-16-16-16H512zM144 128h96c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z'/%3E%3C/svg%3E");
}

/* Icon for Flag */
.select-with-icon[data-icon="flag"] .select2-container--default .select2-selection--single {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'%3E%3Cpath fill='%236b7280' d='M224 0c-17.7 0-32 14.3-32 32V67.1C136.2 79.2 82.9 97.4 41.4 128.6C15.2 148.4 0 179.3 0 211.9c0 32.6 15.2 63.5 41.4 83.3c41.5 31.2 94.8 49.4 150.6 61.6V480c0 17.7 14.3 32 32 32s32-14.3 32-32V356.9c55.8-12.1 109.1-30.4 150.6-61.6c26.2-19.8 41.4-50.7 41.4-83.3c0-32.6-15.2-63.5-41.4-83.3C365.1 97.4 311.8 79.2 256 67.1V32c0-17.7-14.3-32-32-32zM224 272c-44.2 0-80-35.8-80-80s35.8-80 80-80s80 35.8 80 80s-35.8 80-80 80z'/%3E%3C/svg%3E");
}

/* Multi-Select Tags */
.multi-select-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    padding: 10px;
    border: 1px solid var(--border);
    border-radius: var(--radius-md);
    background: var(--bg-primary);
    min-height: 44px;
    align-items: center;
}

.multi-select-tag {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 10px;
    background: var(--accent);
    color: white;
    border-radius: var(--radius-sm);
    font-size: 13px;
    font-weight: 500;
}

.remove-tag {
    cursor: pointer;
    font-size: 16px;
    line-height: 1;
    opacity: 0.8;
    transition: opacity 0.2s;
}

.remove-tag:hover {
    opacity: 1;
}

.multi-select-input {
    flex: 1;
    min-width: 120px;
    border: none;
    outline: none;
    background: transparent;
    color: var(--text-primary);
    font-size: 14px;
    font-family: inherit;
}

.multi-select-input::placeholder {
    color: var(--text-tertiary);
}

/* Helper Text */
.s2-helper {
    font-size: 12px;
    color: var(--text-tertiary);
    margin-top: 6px;
    display: flex;
    align-items: center;
    gap: 6px;
}

/* Preview Box */
.select-preview {
    padding: 12px;
    background: var(--bg-secondary);
    border-radius: var(--radius-md);
    margin-top: 16px;
}

.select-preview-label {
    font-size: 12px;
    color: var(--text-tertiary);
    margin-bottom: 4px;
}

.select-preview-value {
    font-size: 14px;
    font-weight: 600;
    color: var(--accent);
}

/* Validation States */
select.is-valid {
    border-color: var(--success);
}

select.is-valid:focus {
    box-shadow: 0 0 0 3px rgba(var(--success-rgb), 0.1);
}

select.is-invalid {
    border-color: var(--danger);
}

select.is-invalid:focus {
    box-shadow: 0 0 0 3px rgba(var(--danger-rgb), 0.1);
}

/* Select2 Custom Styling */
.select2-container--default .select2-selection--single {
    height: 44px;
    border: 1px solid var(--border);
    border-radius: var(--radius-md);
    background: var(--bg-primary);
    padding: 6px 14px;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 30px;
    color: var(--text-primary);
    padding-left: 0;
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 42px;
    right: 10px;
}

.select2-container--default.select2-container--focus .select2-selection--single,
.select2-container--default.select2-container--open .select2-selection--single {
    border-color: var(--accent);
    box-shadow: 0 0 0 3px rgba(var(--accent-rgb), 0.1);
}

.select2-dropdown {
    border: 1px solid var(--border);
    border-radius: var(--radius-md);
    box-shadow: var(--shadow-lg);
}

.select2-search--dropdown .select2-search__field {
    border: 1px solid var(--border);
    border-radius: var(--radius-sm);
    padding: 8px 12px;
}

.select2-results__option {
    padding: 8px 12px;
}

.select2-results__option--highlighted[aria-selected] {
    background: var(--accent);
}

.select2-container--default .select2-selection--multiple {
    min-height: 44px;
    border: 1px solid var(--border);
    border-radius: var(--radius-md);
    background: var(--bg-primary);
}

.select2-container--default .select2-selection--multiple .select2-selection__choice {
    background: var(--accent);
    color: white;
    border: none;
    border-radius: var(--radius-sm);
    padding: 4px 10px;
    margin: 4px;
}

.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
    color: white;
    margin-right: 6px;
}

/* Responsive */
@media (max-width: 1024px) {
    .select2-grid {
        grid-template-columns: 1fr;
    }
    
    .select2-grid.three-cols {
        grid-template-columns: 1fr;
    }
}
</style>
@endpush

@section('content')
<div class="page-header">
    <div>
        <h1>Select2</h1>
        <p>Enhanced select dropdown dengan search, multi-select, tagging, dan custom styling</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-list"></i>
            <span>Try Select</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card" style="margin-bottom: 24px; border-left: 4px solid var(--accent);">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What is Select2?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Select2 is a jQuery-based replacement for select boxes. It supports searching, remote data sets, and infinite scrolling of results. Examples below show various configurations and use cases.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Single Select -->
<div class="s2-section-title">
    <i class="fa-solid fa-list-check"></i>
    Basic Single Select <span class="badge badge-primary">Essential</span>
</div>

<div class="select2-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-globe"></i>
                </div>
                <div>
                    <h3>Country Selection</h3>
                    <p class="card-subtitle">Single country picker</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="s2-example">
                <label class="s2-label">
                    Select Country
                    <span class="s2-hint">With flags</span>
                </label>
                <div class="select-wrapper">
                    <select>
                        <option value="">-- Select Country --</option>
                        <option value="id" selected>🇮🇩 Indonesia</option>
                        <option value="us">🇺🇸 United States</option>
                        <option value="uk">🇬🇧 United Kingdom</option>
                        <option value="jp">🇯🇵 Japan</option>
                        <option value="kr">🇰🇷 South Korea</option>
                        <option value="sg">🇸🇬 Singapore</option>
                        <option value="my">🇲🇾 Malaysia</option>
                        <option value="au">🇦🇺 Australia</option>
                    </select>
                </div>
                <div class="s2-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Flag emojis included
                </div>
            </div>

            <div class="s2-example">
                <label class="s2-label">
                    Select Language
                    <span class="s2-hint">Single choice</span>
                </label>
                <div class="select-wrapper">
                    <select>
                        <option value="">-- Select Language --</option>
                        <option value="en">🇬🇧 English</option>
                        <option value="id" selected>🇮🇩 Bahasa Indonesia</option>
                        <option value="jp">🇯🇵 日本語</option>
                        <option value="kr">🇰🇷 한국어</option>
                        <option value="cn">🇨🇳 中文</option>
                        <option value="es">🇪🇸 Español</option>
                        <option value="fr">🇫🇷 Français</option>
                    </select>
                </div>
                <div class="s2-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Pre-selected value
                </div>
            </div>

            <div class="s2-example">
                <label class="s2-label">
                    Select Timezone
                    <span class="s2-hint">UTC offset</span>
                </label>
                <div class="select-wrapper">
                    <select>
                        <option value="">-- Select Timezone --</option>
                        <option value="wib" selected>WIB (UTC+7)</option>
                        <option value="wita">WITA (UTC+8)</option>
                        <option value="wit">WIT (UTC+9)</option>
                        <option value="est">EST (UTC-5)</option>
                        <option value="pst">PST (UTC-8)</option>
                        <option value="gmt">GMT (UTC+0)</option>
                        <option value="jst">JST (UTC+9)</option>
                    </select>
                </div>
            </div>

            <div class="divider"></div>

            <div class="select-preview">
                <div class="select-preview-label">Selected Country:</div>
                <div class="select-preview-value">🇮🇩 Indonesia (ID)</div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <div>
                    <h3>Grouped Options</h3>
                    <p class="card-subtitle">Optgroup categories</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="s2-example">
                <label class="s2-label">
                    Select Category
                    <span class="s2-hint">Grouped</span>
                </label>
                <div class="select-wrapper">
                    <select>
                        <option value="">-- Select Category --</option>
                        <optgroup label="Electronics">
                            <option value="phone">📱 Smartphone</option>
                            <option value="laptop">💻 Laptop</option>
                            <option value="tablet">📟 Tablet</option>
                        </optgroup>
                        <optgroup label="Clothing">
                            <option value="shirt">👕 Shirt</option>
                            <option value="pants">👖 Pants</option>
                            <option value="shoes">👟 Shoes</option>
                        </optgroup>
                        <optgroup label="Food">
                            <option value="fruit">🍎 Fruit</option>
                            <option value="vegetable">🥬 Vegetables</option>
                            <option value="meat">🥩 Meat</option>
                        </optgroup>
                    </select>
                </div>
                <div class="s2-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    3 groups with icons
                </div>
            </div>

            <div class="s2-example">
                <label class="s2-label">
                    Select Department
                    <span class="s2-hint">Organizational</span>
                </label>
                <div class="select-wrapper">
                    <select>
                        <option value="">-- Select Department --</option>
                        <optgroup label="Engineering">
                            <option value="frontend">Frontend</option>
                            <option value="backend">Backend</option>
                            <option value="devops">DevOps</option>
                        </optgroup>
                        <optgroup label="Business">
                            <option value="sales">Sales</option>
                            <option value="marketing">Marketing</option>
                            <option value="finance">Finance</option>
                        </optgroup>
                        <optgroup label="Support">
                            <option value="hr">Human Resources</option>
                            <option value="it">IT Support</option>
                            <option value="customer">Customer Service</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="s2-example">
                <label class="s2-label">
                    Select City
                    <span class="s2-hint">By region</span>
                </label>
                <div class="select-wrapper">
                    <select>
                        <option value="">-- Select City --</option>
                        <optgroup label="Java">
                            <option value="jkt">Jakarta</option>
                            <option value="sby">Surabaya</option>
                            <option value="bdg">Bandung</option>
                        </optgroup>
                        <optgroup label="Sumatra">
                            <option value="mdn">Medan</option>
                            <option value="pmb">Palembang</option>
                            <option value="pku">Pekanbaru</option>
                        </optgroup>
                        <optgroup label="Sulawesi">
                            <option value="mns">Manado</option>
                            <option value="mks">Makassar</option>
                        </optgroup>
                    </select>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <h4 style="font-size: 14px; margin-bottom: 12px;">Features:</h4>
                <ul class="feature-list">
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Optgroup support</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Category grouping</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Emoji icons</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Hierarchical options</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Multi-Select -->
<div class="s2-section-title">
    <i class="fa-solid fa-check-double"></i>
    Multi-Select <span class="badge badge-success">Popular</span>
</div>

<div class="select2-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-tags"></i>
                </div>
                <div>
                    <h3>Tags Selection</h3>
                    <p class="card-subtitle">Multiple tags with remove</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="s2-example">
                <label class="s2-label">
                    Select Skills
                    <span class="s2-hint">Multi-select</span>
                </label>
                <div class="multi-select-tags">
                    <span class="multi-select-tag">
                        JavaScript
                        <span class="remove-tag">×</span>
                    </span>
                    <span class="multi-select-tag">
                        Laravel
                        <span class="remove-tag">×</span>
                    </span>
                    <span class="multi-select-tag">
                        React
                        <span class="remove-tag">×</span>
                    </span>
                    <input type="text" class="multi-select-input" placeholder="Add more...">
                </div>
                <div class="s2-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Click × to remove tag
                </div>
            </div>

            <div class="s2-example">
                <label class="s2-label">
                    Select Interests
                    <span class="s2-hint">Hobbies</span>
                </label>
                <div class="multi-select-tags">
                    <span class="multi-select-tag">
                        📚 Reading
                        <span class="remove-tag">×</span>
                    </span>
                    <span class="multi-select-tag">
                        🎵 Music
                        <span class="remove-tag">×</span>
                    </span>
                    <input type="text" class="multi-select-input" placeholder="Add more...">
                </div>
                <div class="s2-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Emoji tags supported
                </div>
            </div>

            <div class="s2-example">
                <label class="s2-label">
                    Select Technologies
                    <span class="s2-hint">Development stack</span>
                </label>
                <div class="multi-select-tags">
                    <span class="multi-select-tag">
                        HTML5
                        <span class="remove-tag">×</span>
                    </span>
                    <span class="multi-select-tag">
                        CSS3
                        <span class="remove-tag">×</span>
                    </span>
                    <span class="multi-select-tag">
                        JavaScript
                        <span class="remove-tag">×</span>
                    </span>
                    <span class="multi-select-tag">
                        PHP
                        <span class="remove-tag">×</span>
                    </span>
                    <span class="multi-select-tag">
                        MySQL
                        <span class="remove-tag">×</span>
                    </span>
                    <input type="text" class="multi-select-input" placeholder="Add more...">
                </div>
            </div>

            <div class="divider"></div>

            <div class="select-preview">
                <div class="select-preview-label">Selected Technologies:</div>
                <div class="select-preview-value">HTML5, CSS3, JavaScript, PHP, MySQL</div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-list-check"></i>
                </div>
                <div>
                    <h3>Native Multi-Select</h3>
                    <p class="card-subtitle">Ctrl+Click selection</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="s2-example">
                <label class="s2-label">
                    Select Permissions
                    <span class="s2-hint">Hold Ctrl</span>
                </label>
                <div class="select-wrapper">
                    <select multiple style="height: 120px;">
                        <option value="create" selected>✅ Create</option>
                        <option value="read" selected>👁️ Read</option>
                        <option value="update" selected>✏️ Update</option>
                        <option value="delete">🗑️ Delete</option>
                        <option value="export">📤 Export</option>
                        <option value="import">📥 Import</option>
                    </select>
                </div>
                <div class="s2-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Hold Ctrl to select multiple
                </div>
            </div>

            <div class="s2-example">
                <label class="s2-label">
                    Select Features
                    <span class="s2-hint">Multiple</span>
                </label>
                <div class="select-wrapper">
                    <select multiple style="height: 120px;">
                        <option value="dark">🌙 Dark Mode</option>
                        <option value="notifications" selected>🔔 Notifications</option>
                        <option value="analytics" selected>📊 Analytics</option>
                        <option value="api">🔌 API Access</option>
                        <option value="backup">💾 Backup</option>
                    </select>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <h4 style="font-size: 14px; margin-bottom: 12px;">Multi-Select Features:</h4>
                <ul class="feature-list">
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Tag-based selection</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Remove individual tags</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Native Ctrl+Click</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Search and filter</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- With Icons & Search -->
<div class="s2-section-title">
    <i class="fa-solid fa-magnifying-glass"></i>
    Select with Icons & Search
</div>

<div class="select2-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-icons"></i>
                </div>
                <div>
                    <h3>Select with Left Icon</h3>
                    <p class="card-subtitle">Icon inside select</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="s2-example">
                <label class="s2-label">
                    User Role
                    <span class="s2-hint">👤 icon</span>
                </label>
                <div class="select-wrapper select-with-icon" data-icon="user-shield">
                    <i class="fa-solid fa-user-shield"></i>
                    <select>
                        <option value="">-- Select Role --</option>
                        <option value="admin" selected>Administrator</option>
                        <option value="editor">Editor</option>
                        <option value="author">Author</option>
                        <option value="user">User</option>
                        <option value="guest">Guest</option>
                    </select>
                </div>
            </div>

            <div class="s2-example">
                <label class="s2-label">
                    Payment Method
                    <span class="s2-hint">💳 icon</span>
                </label>
                <div class="select-wrapper select-with-icon" data-icon="credit-card">
                    <i class="fa-solid fa-credit-card"></i>
                    <select>
                        <option value="">-- Select Payment --</option>
                        <option value="visa" selected>💳 Visa</option>
                        <option value="mastercard">💳 Mastercard</option>
                        <option value="paypal">🅿️ PayPal</option>
                        <option value="bank">🏦 Bank Transfer</option>
                        <option value="crypto">₿ Crypto</option>
                    </select>
                </div>
            </div>

            <div class="s2-example">
                <label class="s2-label">
                    Priority Level
                    <span class="s2-hint">⚡ icon</span>
                </label>
                <div class="select-wrapper select-with-icon" data-icon="flag">
                    <i class="fa-solid fa-flag"></i>
                    <select>
                        <option value="">-- Select Priority --</option>
                        <option value="critical">🔴 Critical</option>
                        <option value="high">🟠 High</option>
                        <option value="medium" selected>🟡 Medium</option>
                        <option value="low">🟢 Low</option>
                    </select>
                </div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Icons improve visual identification and UX
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div>
                    <h3>Search Functionality</h3>
                    <p class="card-subtitle">Type to filter options</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="s2-example">
                <label class="s2-label">
                    Search Country
                    <span class="s2-hint">Type to search</span>
                </label>
                <div class="select-wrapper">
                    <select>
                        <option value="">🔍 Search country...</option>
                        <option value="id">🇮🇩 Indonesia</option>
                        <option value="us">🇺🇸 United States</option>
                        <option value="uk">🇬🇧 United Kingdom</option>
                        <option value="jp">🇯🇵 Japan</option>
                        <option value="kr">🇰🇷 South Korea</option>
                        <option value="sg">🇸🇬 Singapore</option>
                        <option value="my">🇲🇾 Malaysia</option>
                        <option value="au">🇦🇺 Australia</option>
                        <option value="ca">🇨🇦 Canada</option>
                        <option value="de">🇩🇪 Germany</option>
                        <option value="fr">🇫🇷 France</option>
                        <option value="it">🇮🇹 Italy</option>
                    </select>
                </div>
                <div class="s2-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    12+ countries, searchable
                </div>
            </div>

            <div class="s2-example">
                <label class="s2-label">
                    Search Product
                    <span class="s2-hint">Large dataset</span>
                </label>
                <div class="select-wrapper">
                    <select>
                        <option value="">🔍 Search product...</option>
                        <option value="laptop">💻 Laptop Pro 15</option>
                        <option value="phone">📱 Smartphone X</option>
                        <option value="tablet">📟 Tablet Air</option>
                        <option value="watch">⌚ Smart Watch</option>
                        <option value="headphone">🎧 Wireless Headphones</option>
                        <option value="camera">📷 Digital Camera</option>
                        <option value="speaker">🔊 Bluetooth Speaker</option>
                    </select>
                </div>
                <div class="s2-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Type "phone" to filter
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <h4 style="font-size: 14px; margin-bottom: 12px;">Search Features:</h4>
                <ul class="feature-list">
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Real-time filtering</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Case-insensitive search</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Keyboard navigation</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Large dataset support</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- States & Disabled -->
<div class="s2-section-title">
    <i class="fa-solid fa-circle-check"></i>
    States & Disabled Options
</div>

<div class="select2-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-check"></i>
                </div>
                <div>
                    <h3>Valid State</h3>
                    <p class="card-subtitle">Green border, success</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="s2-example">
                <label class="s2-label">Country (Valid)</label>
                <div class="select-wrapper">
                    <select class="is-valid">
                        <option value="">-- Select Country --</option>
                        <option value="id" selected>🇮🇩 Indonesia</option>
                        <option value="us">🇺🇸 United States</option>
                        <option value="uk">🇬🇧 United Kingdom</option>
                    </select>
                </div>
                <div class="s2-helper" style="color: var(--success);">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Valid selection</span>
                </div>
            </div>

            <div class="s2-example">
                <label class="s2-label">Language (Valid)</label>
                <div class="select-wrapper">
                    <select class="is-valid">
                        <option value="">-- Select Language --</option>
                        <option value="en">🇬🇧 English</option>
                        <option value="id" selected>🇮🇩 Bahasa Indonesia</option>
                        <option value="jp">🇯🇵 日本語</option>
                    </select>
                </div>
                <div class="s2-helper" style="color: var(--success);">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Language selected</span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Green border indicates valid selection
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-danger">
                    <i class="fa-solid fa-circle-xmark"></i>
                </div>
                <div>
                    <h3>Invalid State</h3>
                    <p class="card-subtitle">Red border, error message</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="s2-example">
                <label class="s2-label">Country (Required)</label>
                <div class="select-wrapper">
                    <select class="is-invalid">
                        <option value="">-- Select Country --</option>
                        <option value="id">🇮🇩 Indonesia</option>
                        <option value="us">🇺🇸 United States</option>
                        <option value="uk">🇬🇧 United Kingdom</option>
                    </select>
                </div>
                <div class="s2-helper" style="color: var(--danger);">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <span>Country is required</span>
                </div>
            </div>

            <div class="s2-example">
                <label class="s2-label">Role (Required)</label>
                <div class="select-wrapper">
                    <select class="is-invalid">
                        <option value="">-- Select Role --</option>
                        <option value="admin">Administrator</option>
                        <option value="editor">Editor</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <div class="s2-helper" style="color: var(--danger);">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    <span>Please select a role</span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Red border indicates missing required field
            </div>
        </div>
    </div>
</div>

<!-- Disabled Selects -->
<div class="s2-section-title">
    <i class="fa-solid fa-ban"></i>
    Disabled Selects & Options
</div>

<div class="select2-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div>
                    <h3>Disabled Select</h3>
                    <p class="card-subtitle">Non-interactive dropdown</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="s2-example">
                <label class="s2-label">Disabled Country</label>
                <div class="select-wrapper">
                    <select disabled>
                        <option value="id" selected>🇮🇩 Indonesia</option>
                        <option value="us">🇺🇸 United States</option>
                        <option value="uk">🇬🇧 United Kingdom</option>
                    </select>
                </div>
                <div class="s2-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Cannot be changed
                </div>
            </div>

            <div class="s2-example">
                <label class="s2-label">Disabled Role</label>
                <div class="select-wrapper">
                    <select disabled>
                        <option value="admin" selected>Administrator</option>
                        <option value="editor">Editor</option>
                        <option value="user">User</option>
                    </select>
                </div>
                <div class="s2-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Read-only value
                </div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Disabled selects have 50% opacity and no pointer events
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-ban"></i>
                </div>
                <div>
                    <h3>Disabled Options</h3>
                    <p class="card-subtitle">Individual disabled items</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="s2-example">
                <label class="s2-label">Plan Selection</label>
                <div class="select-wrapper">
                    <select>
                        <option value="">-- Select Plan --</option>
                        <option value="free">Free Plan</option>
                        <option value="basic" selected>Basic Plan ($9/mo)</option>
                        <option value="pro">Pro Plan ($29/mo)</option>
                        <option value="enterprise" disabled>Enterprise (Coming Soon)</option>
                    </select>
                </div>
                <div class="s2-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Enterprise option is disabled
                </div>
            </div>

            <div class="s2-example">
                <label class="s2-label">Payment Method</label>
                <div class="select-wrapper">
                    <select>
                        <option value="">-- Select Payment --</option>
                        <option value="visa" selected>💳 Visa</option>
                        <option value="mastercard">💳 Mastercard</option>
                        <option value="paypal" disabled>🅿️ PayPal (Unavailable)</option>
                        <option value="bank">🏦 Bank Transfer</option>
                    </select>
                </div>
                <div class="s2-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    PayPal temporarily unavailable
                </div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Disabled options appear grayed out in dropdown
            </div>
        </div>
    </div>
</div>

<!-- Registration Form Example -->
<div class="s2-section-title">
    <i class="fa-solid fa-clipboard-list"></i>
    Registration Form Example
</div>

<div class="select2-grid full-width">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-user-plus"></i>
                </div>
                <div>
                    <h3>User Registration</h3>
                    <p class="card-subtitle">Complete form with various select types</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form style="max-width: 800px;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div class="s2-example">
                        <label class="s2-label">Country <span style="color: var(--danger);">*</span></label>
                        <div class="select-wrapper">
                            <select required>
                                <option value="">-- Select Country --</option>
                                <option value="id">🇮🇩 Indonesia</option>
                                <option value="us">🇺🇸 United States</option>
                                <option value="uk">🇬🇧 United Kingdom</option>
                                <option value="jp">🇯🇵 Japan</option>
                                <option value="sg">🇸🇬 Singapore</option>
                            </select>
                        </div>
                    </div>

                    <div class="s2-example">
                        <label class="s2-label">Language <span style="color: var(--danger);">*</span></label>
                        <div class="select-wrapper">
                            <select required>
                                <option value="">-- Select Language --</option>
                                <option value="en">🇬🇧 English</option>
                                <option value="id">🇮🇩 Bahasa Indonesia</option>
                                <option value="jp">🇯🇵 日本語</option>
                                <option value="kr">🇰🇷 한국어</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="s2-example">
                    <label class="s2-label">Role <span style="color: var(--danger);">*</span></label>
                    <div class="select-wrapper">
                        <select required>
                            <option value="">-- Select Role --</option>
                            <option value="user">👤 User</option>
                            <option value="creator">✍️ Content Creator</option>
                            <option value="admin">👨‍💼 Administrator</option>
                        </select>
                    </div>
                </div>

                <div class="s2-example">
                    <label class="s2-label">Interests (Multi-select)</label>
                    <div class="multi-select-tags">
                        <span class="multi-select-tag">
                            💻 Technology
                            <span class="remove-tag">×</span>
                        </span>
                        <span class="multi-select-tag">
                            📱 Mobile
                            <span class="remove-tag">×</span>
                        </span>
                        <input type="text" class="multi-select-input" placeholder="Add more...">
                    </div>
                </div>

                <div class="s2-example">
                    <label class="s2-label">Timezone</label>
                    <div class="select-wrapper">
                        <select>
                            <option value="">-- Select Timezone --</option>
                            <option value="wib" selected>WIB (UTC+7)</option>
                            <option value="wita">WITA (UTC+8)</option>
                            <option value="wit">WIT (UTC+9)</option>
                            <option value="est">EST (UTC-5)</option>
                            <option value="pst">PST (UTC-8)</option>
                        </select>
                    </div>
                </div>

                <div style="display: flex; gap: 12px; margin-top: 24px;">
                    <button type="submit" class="btn btn-primary" style="flex: 1;">
                        <i class="fa-solid fa-user-plus"></i>
                        Register
                    </button>
                    <button type="reset" class="btn btn-secondary">
                        <i class="fa-solid fa-rotate-left"></i>
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Implementation Guide -->
<div class="select2-grid full-width">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-code"></i>
                </div>
                <div>
                    <h3>Implementation Guide</h3>
                    <p class="card-subtitle">How to implement Select2 with jQuery</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="code-block">
                <div style="color: var(--text-tertiary); margin-bottom: 8px;">1. Include Select2:</div>
                <code style="color: var(--accent);">
                    &lt;link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /&gt;<br>
                    &lt;script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"&gt;&lt;/script&gt;
                </code>
            </div>

            <div class="code-block">
                <div style="color: var(--text-tertiary); margin-bottom: 8px; margin-top: 16px;">2. Initialize Basic Select2:</div>
                <code style="color: var(--success);">
                    $(document).ready(function() {<br>
                    &nbsp;&nbsp;$('#countrySelect').select2({<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;placeholder: 'Select a country',<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;allowClear: true,<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;width: '100%'<br>
                    &nbsp;&nbsp;});<br>
                    });
                </code>
            </div>

            <div class="code-block">
                <div style="color: var(--text-tertiary); margin-bottom: 8px; margin-top: 16px;">3. Initialize Multi-Select:</div>
                <code style="color: var(--warning);">
                    $('#skillsSelect').select2({<br>
                    &nbsp;&nbsp;placeholder: 'Select skills',<br>
                    &nbsp;&nbsp;closeOnSelect: false,<br>
                    &nbsp;&nbsp;tags: true,<br>
                    &nbsp;&nbsp;width: '100%'<br>
                    });
                </code>
            </div>

            <div class="code-block">
                <div style="color: var(--text-tertiary); margin-bottom: 8px; margin-top: 16px;">4. With AJAX Search:</div>
                <code style="color: var(--info);">
                    $('#searchSelect').select2({<br>
                    &nbsp;&nbsp;ajax: {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;url: '/api/search',<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;delay: 250,<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;data: function (params) {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return { q: params.term };<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;},<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;minimumInputLength: 2<br>
                    &nbsp;&nbsp;}<br>
                    });
                </code>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <h4 style="font-size: 14px; margin-bottom: 12px;">Popular Libraries:</h4>
                <ul class="feature-list">
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>Select2</strong> - jQuery-based, feature-rich</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>Choices.js</strong> - Vanilla JS, modern</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>Tom Select</strong> - Lightweight, taggable</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>React Select</strong> - React component</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    // Initialize all basic select elements with Select2
    $('.select-wrapper select').not('[multiple]').each(function() {
        const $select = $(this);
        const $wrapper = $select.closest('.select-wrapper');
        
        $select.select2({
            placeholder: function() {
                return $(this).data('placeholder') || 'Select an option';
            },
            allowClear: true,
            width: '100%',
            language: {
                noResults: function() {
                    return 'No results found';
                },
                searching: function() {
                    return 'Searching...';
                }
            }
        });
        
        // Mark wrapper as initialized to hide original icon
        $wrapper.addClass('select2-initialized');
    });
    
    // Initialize multi-select with Select2
    $('select[multiple]').select2({
        placeholder: 'Select options',
        closeOnSelect: false,
        width: '100%',
        allowClear: true
    });
    
    // Multi-select tag removal
    $(document).on('click', '.remove-tag', function() {
        $(this).parent('.multi-select-tag').fadeOut(200, function() {
            $(this).remove();
            updatePreview();
        });
    });
    
    // Add new tag on enter
    $('.multi-select-input').on('keypress', function(e) {
        if (e.which === 13 && $(this).val().trim() !== '') {
            const tag = $('<span class="multi-select-tag">' + 
                $(this).val().trim() + 
                ' <span class="remove-tag">×</span></span>');
            $(this).before(tag);
            $(this).val('');
            updatePreview();
        }
    });
    
    // Update preview box
    function updatePreview() {
        const previewValue = $('.select-preview-value');
        if (previewValue.length) {
            const tags = [];
            $('.multi-select-tag').each(function() {
                tags.push($(this).text().replace('×', '').trim());
            });
            if (tags.length > 0) {
                previewValue.text(tags.join(', '));
            }
        }
    }
    
    // Live update for single select preview
    $('.select-wrapper select').on('change', function() {
        const previewValue = $('.select-preview-value');
        if (previewValue.length && !$(this).attr('multiple')) {
            const selectedText = $(this).find('option:selected').text();
            const selectedValue = $(this).val();
            if (selectedValue) {
                previewValue.text(selectedText);
            }
        }
    });
});
</script>
@endpush
