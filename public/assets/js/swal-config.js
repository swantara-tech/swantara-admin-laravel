/**
 * SweetAlert2 Custom Configuration
 * Auto-apply custom styling to all SweetAlert2 instances
 * Global configuration - no need to add customClass manually
 */

// Override SweetAlert2 default configuration
(function() {
    // Store original Swal.fire
    const originalSwalFire = Swal.fire;
    const originalSwalMixin = Swal.mixin;
    
    // Override Swal.fire to auto-apply custom class
    Swal.fire = function(config) {
        // If config is an object, add customClass automatically
        if (typeof config === 'object' && config !== null) {
            config.customClass = config.customClass || {};
            config.customClass.popup = 'custom-swal';
        }
        
        // Call original Swal.fire with modified config
        return originalSwalFire.call(Swal, config);
    };
    
    // Also override mixin to ensure consistency
    Swal.mixin = function(defaultParams) {
        defaultParams.customClass = defaultParams.customClass || {};
        defaultParams.customClass.popup = 'custom-swal';
        
        return originalSwalMixin.call(Swal, defaultParams);
    };
    
    // Preserve original methods if needed
    Swal.originalFire = originalSwalFire;
    Swal.originalMixin = originalSwalMixin;
})();

// Toast notification helper
function showToast(message, type = 'success', position = 'top-end') {
    const iconMap = {
        'success': 'success',
        'error': 'error',
        'warning': 'warning',
        'info': 'info'
    };
    
    return Swal.fire({
        icon: iconMap[type] || 'info',
        title: message,
        toast: true,
        position: position,
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        customClass: {
            popup: 'custom-swal-toast'
        }
    });
}

// Confirmation dialog helper
function showConfirm(title, text = '', confirmText = 'Ya', cancelText = 'Batal') {
    return Swal.fire({
        icon: 'warning',
        title: title,
        text: text,
        showCancelButton: true,
        confirmButtonColor: '#0078D4',
        cancelButtonColor: '#d33',
        confirmButtonText: confirmText,
        cancelButtonText: cancelText
    });
}

// Success notification helper
function showSuccess(title, text = '', timer = 2000) {
    return Swal.fire({
        icon: 'success',
        title: title,
        text: text,
        timer: timer,
        showConfirmButton: false
    });
}

// Error notification helper
function showError(title, text = '') {
    return Swal.fire({
        icon: 'error',
        title: title,
        text: text
    });
}

// Warning notification helper
function showWarning(title, text = '') {
    return Swal.fire({
        icon: 'warning',
        title: title,
        text: text
    });
}

// Info notification helper
function showInfo(title, text = '') {
    return Swal.fire({
        icon: 'info',
        title: title,
        text: text
    });
}

// Loading dialog helper
function showLoading(text = 'Loading...') {
    return Swal.fire({
        title: text,
        allowOutsideClick: false,
        allowEscapeKey: false,
        showConfirmButton: false,
        willOpen: () => {
            Swal.showLoading();
        }
    });
}

// Auto-close loading and show success
function showLoadingSuccess(text = 'Loading...', successTitle, successText, timer = 1500) {
    return Swal.fire({
        title: text,
        allowOutsideClick: false,
        allowEscapeKey: false,
        showConfirmButton: false,
        willOpen: () => {
            Swal.showLoading();
        },
        didOpen: () => {
            setTimeout(() => {
                Swal.fire({
                    icon: 'success',
                    title: successTitle,
                    text: successText,
                    timer: timer,
                    showConfirmButton: false
                });
            }, 1500);
        }
    });
}
