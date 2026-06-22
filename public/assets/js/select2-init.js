/**
 * Select2 Initialization Module
 * Reusable Select2 initialization for all pages
 * 
 * Usage:
 * 1. Include this script after jQuery and Select2 CDN
 * 2. Add class 'select2-auto-init' to enable auto-initialization
 * 3. Or call Select2Init.init() manually
 */

const Select2Init = {
    // Icon Unicode mapping for Font Awesome icons
    iconMap: {
        'fa-user-shield': '\\f505',
        'fa-credit-card': '\\f09d',
        'fa-flag': '\\f024',
        'fa-globe': '\\f0ac',
        'fa-layer-group': '\\f5fd',
        'fa-list-check': '\\f0ae',
        'fa-check-double': '\\f560',
        'fa-tags': '\\f02c',
        'fa-magnifying-glass': '\\f002',
        'fa-icons': '\\f86d',
        'fa-circle-check': '\\f058',
        'fa-circle-xmark': '\\f057',
        'fa-ban': '\\f05e',
        'fa-lock': '\\f023',
        'fa-clipboard-list': '\\f46d',
        'fa-user-plus': '\\f234',
        'fa-code': '\\f121',
        'fa-building': '\\f1ad',
        'fa-box': '\\f466',
        'fa-truck': '\\f0d1',
        'fa-star': '\\f005',
        'fa-envelope': '\\f0e0',
        'fa-phone': '\\f095',
        'fa-calendar-days': '\\f073',
        'fa-location-dot': '\\f3c5',
        'fa-briefcase': '\\f0b1',
        'fa-dollar-sign': '\\f155',
        'fa-bell': '\\f0f3',
        'fa-shield-halved': '\\f3ed',
        'fa-palette': '\\f53f'
    },

    /**
     * Get icon Unicode from Font Awesome class
     * @param {jQuery} $icon - jQuery icon element
     * @returns {string|null} Unicode value or null
     */
    getIconUnicode($icon) {
        for (const [key, value] of Object.entries(this.iconMap)) {
            if ($icon.hasClass(key)) {
                return value;
            }
        }
        return null;
    },

    /**
     * Initialize single select elements
     * @param {jQuery|string} selector - jQuery selector or element
     * @param {Object} options - Additional Select2 options
     */
    initSingleSelect(selector = '.select-wrapper select', options = {}) {
        const defaultOptions = {
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
        };

        const mergedOptions = $.extend(true, {}, defaultOptions, options);

        $(selector).not('[multiple]').each(function() {
            const $select = $(this);
            const $wrapper = $select.closest('.select-wrapper');
            
            $select.select2(mergedOptions);
            
            // Mark wrapper as initialized to hide original icon
            $wrapper.addClass('select2-initialized');
            
            // If wrapper has icon, clone it into Select2 container
            Select2Init.handleIcon($select, $wrapper);
        });
    },

    /**
     * Handle icon for Select2 with icon wrapper
     * @param {jQuery} $select - Select element
     * @param {jQuery} $wrapper - Wrapper element
     */
    handleIcon($select, $wrapper) {
        if ($wrapper.hasClass('select-with-icon')) {
            const $icon = $wrapper.find('i.fa-solid, i.fas, i.far, i.fab');
            if ($icon.length) {
                const $select2Container = $select.next('.select2-container');
                $select2Container.addClass('select-with-icon');
                
                // Clone the icon and prepend to Select2 selection
                const $clonedIcon = $icon.clone();
                $clonedIcon.css({
                    'position': 'absolute',
                    'left': '14px',
                    'top': '50%',
                    'transform': 'translateY(-50%)',
                    'pointer-events': 'none',
                    'z-index': '2'
                });
                $select2Container.find('.select2-selection').css('position', 'relative');
                $select2Container.find('.select2-selection').prepend($clonedIcon);
            }
        }
    },

    /**
     * Initialize multi-select elements
     * @param {jQuery|string} selector - jQuery selector or element
     * @param {Object} options - Additional Select2 options
     */
    initMultiSelect(selector = 'select[multiple]', options = {}) {
        const defaultOptions = {
            placeholder: 'Select options',
            closeOnSelect: false,
            width: '100%',
            allowClear: true
        };

        const mergedOptions = $.extend(true, {}, defaultOptions, options);
        $(selector).select2(mergedOptions);
    },

    /**
     * Initialize tag removal functionality
     * @param {string} selector - Remove tag button selector
     */
    initTagRemoval(selector = '.remove-tag') {
        $(document).on('click', selector, function() {
            $(this).parent('.multi-select-tag').fadeOut(200, function() {
                $(this).remove();
                Select2Init.updatePreview();
            });
        });
    },

    /**
     * Initialize add new tag on enter key
     * @param {string} selector - Input field selector
     */
    initAddTag(selector = '.multi-select-input') {
        $(selector).on('keypress', function(e) {
            if (e.which === 13 && $(this).val().trim() !== '') {
                const tag = $('<span class="multi-select-tag">' + 
                    $(this).val().trim() + 
                    ' <span class="remove-tag">×</span></span>');
                $(this).before(tag);
                $(this).val('');
                Select2Init.updatePreview();
            }
        });
    },

    /**
     * Update preview box with selected tags
     */
    updatePreview() {
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
    },

    /**
     * Initialize live update for single select preview
     * @param {string} selector - Select element selector
     */
    initSelectPreview(selector = '.select-wrapper select') {
        $(selector).on('change', function() {
            const previewValue = $('.select-preview-value');
            if (previewValue.length && !$(this).attr('multiple')) {
                const selectedText = $(this).find('option:selected').text();
                const selectedValue = $(this).val();
                if (selectedValue) {
                    previewValue.text(selectedText);
                }
            }
        });
    },

    /**
     * Initialize all Select2 components
     * Call this on document.ready or when dynamic content is loaded
     * @param {Object} config - Configuration object
     */
    init(config = {}) {
        const {
            singleSelectOptions = {},
            multiSelectOptions = {},
            enableTagRemoval = true,
            enableAddTag = true,
            enablePreview = true,
            singleSelector = '.select-wrapper select',
            multiSelector = 'select[multiple]'
        } = config;

        // Initialize single selects
        this.initSingleSelect(singleSelector, singleSelectOptions);

        // Initialize multi selects
        this.initMultiSelect(multiSelector, multiSelectOptions);

        // Initialize tag functionality
        if (enableTagRemoval) {
            this.initTagRemoval();
        }

        if (enableAddTag) {
            this.initAddTag();
        }

        if (enablePreview) {
            this.initSelectPreview(singleSelector);
        }
    },

    /**
     * Destroy Select2 instances (useful for cleanup)
     * @param {string} selector - Select element selector
     */
    destroy(selector = 'select') {
        $(selector).select2('destroy');
    },

    /**
     * Refresh Select2 instances (useful after AJAX updates)
     * @param {string} selector - Select element selector
     * @param {Object} config - Configuration object
     */
    refresh(selector = 'select', config = {}) {
        this.destroy(selector);
        this.init(config);
    }
};

// Auto-initialize when document is ready (only if not disabled)
if (typeof window.select2AutoInit === 'undefined' || window.select2AutoInit !== false) {
    $(document).ready(function() {
        Select2Init.init();
    });
}
