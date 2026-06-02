/**
 * Custom Toast Notification System
 * Menggunakan custom toast dengan animasi slide-in
 * Mengganti SweetAlert2 dan Metro UI Toast
 */

// Toast container
let toastContainer = null;

// Toast configuration
const toastConfig = {
    timer: 4000,
    success: {
        icon: '✓',
        text: 'Success'
    },
    error: {
        icon: '✕',
        text: 'Error'
    },
    warning: {
        icon: '⚠',
        text: 'Warning'
    },
    info: {
        icon: 'ℹ',
        text: 'Info'
    }
};

// Initialize toast container
function initToastContainer() {
    if (!toastContainer) {
        toastContainer = document.createElement('ul');
        toastContainer.className = 'custom-notifications';
        document.body.appendChild(toastContainer);
    }
    return toastContainer;
}

// Remove toast
function removeToast(toast) {
    toast.classList.add('hide');
    if (toast.timeoutId) clearTimeout(toast.timeoutId);
    setTimeout(() => toast.remove(), 300);
}

// Create toast
function createToast(type, message) {
    const container = initToastContainer();
    const config = toastConfig[type] || toastConfig.info;
    
    const toast = document.createElement('li');
    toast.className = `custom-toast ${type}`;
    toast.innerHTML = `
        <div class="toast-column">
            <span class="toast-icon">${config.icon}</span>
            <span class="toast-message">${message}</span>
        </div>
        <span class="toast-close" onclick="removeToast(this.parentElement)">×</span>
    `;
    
    container.appendChild(toast);
    toast.timeoutId = setTimeout(() => removeToast(toast), toastConfig.timer);
    
    return toast;
}

// ========================
// Toast helper
// ========================
function showToast(message, type = 'success', position = 'top-right') {
    // Position handling (will be controlled by CSS)
    const container = initToastContainer();
    container.className = `custom-notifications position-${position}`;
    
    return createToast(type, message);
}


// ========================
// Dialog helpers (Metro UI Notify)
// ========================
function showConfirm(title, text = '', confirmText = 'Ya', cancelText = 'Batal') {
    return new Promise((resolve) => {
        const notify = Metro.notify.create(
            `<div>
                <p style="margin-bottom: 12px;">${text}</p>
                <div style="display: flex; gap: 8px; justify-content: flex-end;">
                    <button class="button button-small" id="notify-cancel">${cancelText}</button>
                    <button class="button button-small primary" id="notify-confirm">${confirmText}</button>
                </div>
            </div>`,
            title,
            {
                width: 400,
                keepOpen: true,
                clsNotify: 'dialog-notify',
                onClose: () => resolve({ isConfirmed: false, isDenied: false, dismiss: 'close' })
            }
        );

        setTimeout(() => {
            const confirmBtn = document.getElementById('notify-confirm');
            const cancelBtn = document.getElementById('notify-cancel');

            if (confirmBtn) {
                confirmBtn.addEventListener('click', () => {
                    Metro.notify.kill(notify);
                    resolve({ isConfirmed: true, isDenied: false });
                });
            }

            if (cancelBtn) {
                cancelBtn.addEventListener('click', () => {
                    Metro.notify.kill(notify);
                    resolve({ isConfirmed: false, isDenied: false, dismiss: 'cancel' });
                });
            }
        }, 100);
    });
}

function showSuccess(title, text = '', timer = 2000) {
    return Metro.notify.create(text || title, title, {
        timeout: timer,
        clsNotify: 'success'
    });
}

function showError(title, text = '') {
    return Metro.notify.create(text || title, title, {
        timeout: 5000,
        keepOpen: true,
        clsNotify: 'alert'
    });
}

function showWarning(title, text = '') {
    return Metro.notify.create(text || title, title, {
        timeout: 5000,
        clsNotify: 'warning'
    });
}

function showInfo(title, text = '') {
    return Metro.notify.create(text || title, title, {
        timeout: 5000,
        clsNotify: 'info'
    });
}

function showLoading(text = 'Loading...') {
    return Metro.notify.create(
        `<div style="display: flex; align-items: center; gap: 12px;">
            <span class="mif-spinner animate-spin"></span>
            <span>${text}</span>
        </div>`,
        null,
        {
            keepOpen: true,
            clsNotify: 'loading-notify',
            width: 300
        }
    );
}

function showLoadingSuccess(text = 'Loading...', successTitle, successText, timer = 1500) {
    const loadingNotify = showLoading(text);

    setTimeout(() => {
        Metro.notify.kill(loadingNotify);
        showSuccess(successTitle, successText, timer);
    }, 1500);

    return loadingNotify;
}