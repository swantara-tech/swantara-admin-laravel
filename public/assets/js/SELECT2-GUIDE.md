# Select2 Reusable Module Guide

## Overview
The Select2 initialization has been moved to a reusable JavaScript module located at `public/assets/js/select2-init.js`. This module provides easy-to-use functions for initializing Select2 across all pages.

## Files Structure
```
public/assets/js/select2-init.js     - Reusable Select2 initialization module
resources/views/pages/forms/select2.blade.php - Demo page
resources/views/layouts/app.blade.php - Layout with CDN includes
```

## CDN Dependencies
Already included in `layouts/app.blade.php`:
- **CSS**: `https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css`
- **JS**: `https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js`

## Quick Start

### Basic Usage (Auto-Initialize)
By default, Select2 will auto-initialize on document.ready for:
- All single selects: `.select-wrapper select`
- All multi selects: `select[multiple]`

Just include the script after Select2 CDN:
```blade
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('assets/js/select2-init.js') }}"></script>
@endpush
```

### Manual Initialization
Disable auto-init and call manually:
```javascript
// Disable auto-init
window.select2AutoInit = false;

// Initialize manually
$(document).ready(function() {
    Select2Init.init();
});
```

## API Reference

### Select2Init.init(config)
Initialize all Select2 components with custom configuration.

**Parameters:**
```javascript
{
    singleSelectOptions: {},      // Custom options for single selects
    multiSelectOptions: {},       // Custom options for multi selects
    enableTagRemoval: true,       // Enable tag removal functionality
    enableAddTag: true,           // Enable add tag on enter key
    enablePreview: true,          // Enable preview updates
    singleSelector: '.select-wrapper select',  // Selector for single selects
    multiSelector: 'select[multiple]'          // Selector for multi selects
}
```

**Example:**
```javascript
Select2Init.init({
    singleSelectOptions: {
        placeholder: 'Choose an option',
        allowClear: false
    },
    multiSelectOptions: {
        maximumSelectionLength: 3
    }
});
```

### Select2Init.initSingleSelect(selector, options)
Initialize only single select elements.

**Example:**
```javascript
Select2Init.initSingleSelect('#mySelect', {
    placeholder: 'Select item',
    allowClear: true
});
```

### Select2Init.initMultiSelect(selector, options)
Initialize only multi-select elements.

**Example:**
```javascript
Select2Init.initMultiSelect('#myMultiSelect', {
    placeholder: 'Select multiple',
    closeOnSelect: true
});
```

### Select2Init.initTagRemoval()
Enable tag removal for `.multi-select-tag .remove-tag`.

### Select2Init.initAddTag()
Enable adding tags on Enter key press for `.multi-select-input`.

### Select2Init.updatePreview()
Update the preview box with selected tags.

### Select2Init.destroy(selector)
Destroy Select2 instances.

**Example:**
```javascript
Select2Init.destroy('#mySelect');
```

### Select2Init.refresh(selector, config)
Destroy and re-initialize Select2 (useful after AJAX updates).

**Example:**
```javascript
// After loading dynamic content
$.ajax({
    url: '/api/options',
    success: function(data) {
        // Update select options
        $('#dynamicSelect').html(data.options);
        
        // Refresh Select2
        Select2Init.refresh('#dynamicSelect');
    }
});
```

## HTML Structure

### Single Select with Wrapper
```html
<div class="select-wrapper">
    <select id="countrySelect">
        <option value="">-- Select --</option>
        <option value="id">Indonesia</option>
        <option value="us">United States</option>
    </select>
</div>
```

### Select with Icon
```html
<div class="select-wrapper select-with-icon">
    <i class="fa-solid fa-user"></i>
    <select>
        <option value="">-- Select Role --</option>
        <option value="admin">Administrator</option>
        <option value="user">User</option>
    </select>
</div>
```

### Multi-Select with Tags
```html
<select multiple id="skillsSelect">
    <option value="js">JavaScript</option>
    <option value="php">PHP</option>
    <option value="laravel">Laravel</option>
</select>
```

### Tag Input (Manual)
```html
<div class="multi-select-tags">
    <span class="multi-select-tag">
        JavaScript
        <span class="remove-tag">×</span>
    </span>
    <input type="text" class="multi-select-input" placeholder="Add more...">
</div>
```

### Valid/Invalid States
```html
<!-- Valid -->
<div class="select-wrapper">
    <select class="is-valid">
        <option value="selected" selected>Selected Option</option>
    </select>
</div>

<!-- Invalid -->
<div class="select-wrapper">
    <select class="is-invalid">
        <option value="">-- Required --</option>
    </select>
</div>
```

## Customization

### Override Icon Mapping
Add custom icons to the icon map:
```javascript
Select2Init.iconMap['fa-custom-icon'] = '\\fXXX';
```

### Custom Language Settings
```javascript
Select2Init.init({
    singleSelectOptions: {
        language: {
            noResults: function() {
                return 'Tidak ada hasil ditemukan';
            },
            searching: function() {
                return 'Mencari...';
            }
        }
    }
});
```

## Use Cases

### Use Case 1: AJAX Dynamic Content
```javascript
$.ajax({
    url: '/api/countries',
    success: function(data) {
        $('#countrySelect').html(data.options);
        Select2Init.refresh('#countrySelect');
    }
});
```

### Use Case 2: Form Reset
```javascript
$('form').on('reset', function() {
    setTimeout(function() {
        Select2Init.refresh('select');
    }, 100);
});
```

### Use Case 3: Disable Auto-Init for Specific Page
```blade
@push('scripts')
<script>
    window.select2AutoInit = false;
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('assets/js/select2-init.js') }}"></script>
<script>
$(document).ready(function() {
    // Custom initialization
    Select2Init.init({
        singleSelectOptions: {
            minimumResultsForSearch: 10
        }
    });
});
</script>
@endpush
```

## Troubleshooting

### Select2 Not Initializing
1. Check if jQuery is loaded before Select2
2. Verify Select2 CDN is loaded
3. Check browser console for errors
4. Ensure `select2-init.js` is loaded after Select2

### Icons Not Showing
1. Verify wrapper has class `select-with-icon`
2. Check if icon element exists: `<i class="fa-solid fa-xxx"></i>`
3. Ensure Font Awesome is loaded

### Tags Not Working
1. Check if `.multi-select-tags` container exists
2. Verify `.remove-tag` and `.multi-select-input` classes
3. Ensure event handlers are attached

## Migration from Inline Script

**Before:**
```blade
@push('scripts')
<script>
$(document).ready(function() {
    // 150+ lines of initialization code
});
</script>
@endpush
```

**After:**
```blade
@push('scripts')
<script src="{{ asset('assets/js/select2-init.js') }}"></script>
@endpush
```

## Benefits
✅ **Reusable**: Use across multiple pages  
✅ **Maintainable**: Single source of truth  
✅ **Customizable**: Override options as needed  
✅ **Clean Code**: No inline JavaScript  
✅ **API**: Programmatic control  
✅ **Dynamic Content**: Easy refresh after AJAX  
