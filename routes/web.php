<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

// Auth Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.email');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard Route (requires auth)
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// User Management Routes
Route::get('/users', function () {
    return view('pages.users.index');
})->name('users.index');

Route::get('/roles', function () {
    return view('pages.roles.index');
})->name('roles.index');

Route::get('/permissions', function () {
    return view('pages.permissions.index');
})->name('permissions.index');

// Product Management Routes
Route::get('/products', function () {
    return view('pages.products.index');
})->name('products.index');

Route::get('/inventory', function () {
    return view('pages.inventory.index');
})->name('inventory.index');

// Sales Routes
Route::get('/orders', function () {
    return view('pages.orders.index');
})->name('orders.index');

// Reports Routes
Route::get('/reports', function () {
    return view('pages.reports.index');
})->name('reports.index');

// Tables Routes
Route::prefix('tables')->group(function () {
    Route::get('/basic', function () {
        return view('pages.tables.basic');
    })->name('tables.basic');
    
    Route::get('/datatable', function () {
        return view('pages.tables.datatable');
    })->name('tables.datatable');
});

// System Routes
Route::get('/notifications', function () {
    return view('pages.notifications.index');
})->name('notifications.index');

Route::get('/settings', function () {
    return view('pages.settings.index');
})->name('settings.index');

// Account Routes
Route::get('/profile', function () {
    return view('pages.profile.index');
})->name('profile.index');

// Forms Routes
Route::prefix('forms')->group(function () {
    Route::get('/elements', function () {
        return view('pages.forms.elements');
    })->name('forms.elements');
    
    Route::get('/validation', function () {
        return view('pages.forms.validation');
    })->name('forms.validation');
    
    Route::get('/base-input', function () {
        return view('pages.forms.base-input');
    })->name('forms.base-input');
    
    Route::get('/checkbox-radio', function () {
        return view('pages.forms.checkbox-radio');
    })->name('forms.checkbox-radio');
    
    Route::get('/input-groups', function () {
        return view('pages.forms.input-groups');
    })->name('forms.input-groups');
    
    Route::get('/input-masks', function () {
        return view('pages.forms.input-masks');
    })->name('forms.input-masks');
    
    Route::get('/floating-labels', function () {
        return view('pages.forms.floating-labels');
    })->name('forms.floating-labels');
    
    Route::get('/datetimepicker', function () {
        return view('pages.forms.datetimepicker');
    })->name('forms.datetimepicker');
    
    Route::get('/touch-spin', function () {
        return view('pages.forms.touch-spin');
    })->name('forms.touch-spin');
    
    Route::get('/select2', function () {
        return view('pages.forms.select2');
    })->name('forms.select2');
    
    Route::get('/switch', function () {
        return view('pages.forms.switch');
    })->name('forms.switch');
    
    Route::get('/range-slider', function () {
        return view('pages.forms.range-slider');
    })->name('forms.range-slider');
    
    Route::get('/typeahead', function () {
        return view('pages.forms.typeahead');
    })->name('forms.typeahead');
    
    Route::get('/textarea', function () {
        return view('pages.forms.textarea');
    })->name('forms.textarea');
    
    Route::get('/clipboard', function () {
        return view('pages.forms.clipboard');
    })->name('forms.clipboard');
    
    Route::get('/file-upload', function () {
        return view('pages.forms.file-upload');
    })->name('forms.file-upload');
    
    Route::get('/dual-list', function () {
        return view('pages.forms.dual-list');
    })->name('forms.dual-list');
    
    Route::get('/default', function () {
        return view('pages.forms.default');
    })->name('forms.default');
});

// Utilities Routes
Route::prefix('utilities')->group(function () {
    Route::get('/accordions', function () {
        return view('pages.utilities.accordions');
    })->name('utilities.accordions');
    
    Route::get('/alerts', function () {
        return view('pages.utilities.alerts');
    })->name('utilities.alerts');
    
    Route::get('/images', function () {
        return view('pages.utilities.images');
    })->name('utilities.images');
    
    Route::get('/badges', function () {
        return view('pages.utilities.badges');
    })->name('utilities.badges');
    
    Route::get('/breadcrumb', function () {
        return view('pages.utilities.breadcrumb');
    })->name('utilities.breadcrumb');
    
    Route::get('/buttons', function () {
        return view('pages.utilities.buttons');
    })->name('utilities.buttons');
    
    Route::get('/cards', function () {
        return view('pages.utilities.cards');
    })->name('utilities.cards');
    
    Route::get('/carousel', function () {
        return view('pages.utilities.carousel');
    })->name('utilities.carousel');
    
    Route::get('/collapse', function () {
        return view('pages.utilities.collapse');
    })->name('utilities.collapse');
    
    Route::get('/colors', function () {
        return view('pages.utilities.colors');
    })->name('utilities.colors');
    
    Route::get('/dropdowns', function () {
        return view('pages.utilities.dropdowns');
    })->name('utilities.dropdowns');
    
    Route::get('/videos', function () {
        return view('pages.utilities.videos');
    })->name('utilities.videos');
    
    Route::get('/grid', function () {
        return view('pages.utilities.grid');
    })->name('utilities.grid');
    
    Route::get('/links', function () {
        return view('pages.utilities.links');
    })->name('utilities.links');
    
    Route::get('/list-group', function () {
        return view('pages.utilities.list-group');
    })->name('utilities.list-group');
    
    Route::get('/modals', function () {
        return view('pages.utilities.modals');
    })->name('utilities.modals');
    
    Route::get('/notifications', function () {
        return view('pages.utilities.notifications');
    })->name('utilities.notifications');
    
    Route::get('/offcanvas', function () {
        return view('pages.utilities.offcanvas');
    })->name('utilities.offcanvas');
    
    Route::get('/placeholders', function () {
        return view('pages.utilities.placeholders');
    })->name('utilities.placeholders');
    
    Route::get('/pagination', function () {
        return view('pages.utilities.pagination');
    })->name('utilities.pagination');
    
    Route::get('/popovers', function () {
        return view('pages.utilities.popovers');
    })->name('utilities.popovers');
    
    Route::get('/progress', function () {
        return view('pages.utilities.progress');
    })->name('utilities.progress');
    
    Route::get('/scrollspy', function () {
        return view('pages.utilities.scrollspy');
    })->name('utilities.scrollspy');
    
    Route::get('/tabs', function () {
        return view('pages.utilities.tabs');
    })->name('utilities.tabs');
    
    Route::get('/tooltips', function () {
        return view('pages.utilities.tooltips');
    })->name('utilities.tooltips');
    
    Route::get('/typography', function () {
        return view('pages.utilities.typography');
    })->name('utilities.typography');
    
    Route::get('/toasts', function () {
        return view('pages.utilities.toasts');
    })->name('utilities.toasts');
    
    Route::get('/spinners', function () {
        return view('pages.utilities.spinners');
    })->name('utilities.spinners');
    
    Route::get('/skeletons', function () {
        return view('pages.utilities.skeletons');
    })->name('utilities.skeletons');
    
    Route::get('/avatars', function () {
        return view('pages.utilities.avatars');
    })->name('utilities.avatars');
    
    Route::get('/timelines', function () {
        return view('pages.utilities.timelines');
    })->name('utilities.timelines');
});
