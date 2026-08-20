@extends('layouts.app')

@section('title', 'Dropdowns')
@section('breadcrumb', 'Dropdowns')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Dropdowns</h1>
        <p>Interactive menu components with smooth animations and modern design</p>
    </div>
</div>

<!-- Basic Dropdowns -->
<div class="section-title">
    <i class="fa-solid fa-caret-down"></i>
    Basic Dropdowns
</div>

<div class="demo-grid">
    <!-- Simple Dropdown -->
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-list"></i>
                </div>
                <div>
                    <h3>Simple Dropdown</h3>
                    <p class="card-subtitle">Basic menu with actions</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="demo-area">
                <div class="sw-dropdown" id="dropdown1">
                    <button class="sw-dropdown-trigger" onclick="MetroAdmin.toggleDropdown(this)">
                        <span>Actions</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="sw-dropdown-menu">
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-pen"></i>
                            <span>Edit</span>
                        </a>
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-copy"></i>
                            <span>Duplicate</span>
                        </a>
                        <div class="sw-dropdown-divider"></div>
                        <a href="#" class="sw-dropdown-item text-danger">
                            <i class="fa-solid fa-trash"></i>
                            <span>Delete</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Dropdown -->
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-check"></i>
                </div>
                <div>
                    <h3>Success Style</h3>
                    <p class="card-subtitle">Green themed dropdown</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="demo-area">
                <div class="sw-dropdown" id="dropdown2">
                    <button class="sw-dropdown-trigger btn-success" onclick="MetroAdmin.toggleDropdown(this)">
                        <i class="fa-solid fa-check-circle"></i>
                        <span>Success</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="sw-dropdown-menu">
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-check"></i>
                            <span>Approve</span>
                        </a>
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-upload"></i>
                            <span>Publish</span>
                        </a>
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-share"></i>
                            <span>Share</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Dropdown -->
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-exclamation"></i>
                </div>
                <div>
                    <h3>Warning Style</h3>
                    <p class="card-subtitle">Yellow themed dropdown</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="demo-area">
                <div class="sw-dropdown" id="dropdown3">
                    <button class="sw-dropdown-trigger btn-warning" onclick="MetroAdmin.toggleDropdown(this)">
                        <i class="fa-solid fa-exclamation-triangle"></i>
                        <span>Warning</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="sw-dropdown-menu">
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-flag"></i>
                            <span>Flag</span>
                        </a>
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-exclamation-circle"></i>
                            <span>Report</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Dropdown with Icons & Descriptions -->
<div class="section-title">
    <i class="fa-solid fa-icons"></i>
    Rich Content Dropdowns
</div>

<div class="demo-grid">
    <!-- Icons Dropdown -->
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-icons"></i>
                </div>
                <div>
                    <h3>With Icons</h3>
                    <p class="card-subtitle">Menu items with icon indicators</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="demo-area">
                <div class="sw-dropdown" id="dropdown4">
                    <button class="sw-dropdown-trigger" onclick="MetroAdmin.toggleDropdown(this)">
                        <i class="fa-solid fa-gear"></i>
                        <span>Settings</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="sw-dropdown-menu">
                        <a href="#" class="sw-dropdown-item">
                            <div class="dropdown-icon-box bg-primary">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="dropdown-item-content">
                                <div class="dropdown-item-title">Profile</div>
                                <div class="dropdown-item-desc">Manage your account</div>
                            </div>
                        </a>
                        <a href="#" class="sw-dropdown-item">
                            <div class="dropdown-icon-box bg-success">
                                <i class="fa-solid fa-bell"></i>
                            </div>
                            <div class="dropdown-item-content">
                                <div class="dropdown-item-title">Notifications</div>
                                <div class="dropdown-item-desc">Configure alerts</div>
                            </div>
                        </a>
                        <a href="#" class="sw-dropdown-item">
                            <div class="dropdown-icon-box bg-warning">
                                <i class="fa-solid fa-shield"></i>
                            </div>
                            <div class="dropdown-item-content">
                                <div class="dropdown-item-title">Security</div>
                                <div class="dropdown-item-desc">Password & 2FA</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- User Profile Dropdown -->
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-purple">
                    <i class="fa-solid fa-user-circle"></i>
                </div>
                <div>
                    <h3>User Profile</h3>
                    <p class="card-subtitle">With avatar and user info</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="demo-area">
                <div class="sw-dropdown" id="dropdown5">
                    <button class="sw-dropdown-trigger" onclick="MetroAdmin.toggleDropdown(this)">
                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=0078D4&color=fff&size=32" class="dropdown-avatar">
                        <span>John Doe</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="sw-dropdown-menu menu-lg">
                        <div class="dropdown-profile-header">
                            <img src="https://ui-avatars.com/api/?name=John+Doe&background=0078D4&color=fff&size=64" class="dropdown-profile-avatar">
                            <div class="dropdown-profile-info">
                                <h4>John Doe</h4>
                                <p>john@example.com</p>
                                <span class="badge badge-primary">Admin</span>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-user"></i>
                            <span>My Profile</span>
                        </a>
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-gear"></i>
                            <span>Settings</span>
                        </a>
                        <a href="#" class="sw-dropdown-item">
                            <i class="fa-solid fa-credit-card"></i>
                            <span>Billing</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="sw-dropdown-item text-danger">
                            <i class="fa-solid fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Dropdown Positions -->
<div class="section-title">
    <i class="fa-solid fa-arrows-left-right"></i>
    Dropdown Positions
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-position"></i>
            </div>
            <div>
                <h3>Positioning</h3>
                <p class="card-subtitle">Left, center, and right alignment</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="demo-area demo-row">
            <div class="sw-dropdown" id="dropdownLeft">
                <button class="sw-dropdown-trigger" onclick="MetroAdmin.toggleDropdown(this)">
                    <span>Left</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sw-dropdown-menu">
                    <a href="#" class="sw-dropdown-item">Option 1</a>
                    <a href="#" class="sw-dropdown-item">Option 2</a>
                    <a href="#" class="sw-dropdown-item">Option 3</a>
                </div>
            </div>

            <div class="sw-dropdown" id="dropdownCenter">
                <button class="sw-dropdown-trigger" onclick="MetroAdmin.toggleDropdown(this)">
                    <span>Center</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sw-dropdown-menu align-center">
                    <a href="#" class="sw-dropdown-item">Option 1</a>
                    <a href="#" class="sw-dropdown-item">Option 2</a>
                    <a href="#" class="sw-dropdown-item">Option 3</a>
                </div>
            </div>

            <div class="sw-dropdown" id="dropdownRight">
                <button class="sw-dropdown-trigger" onclick="MetroAdmin.toggleDropdown(this)">
                    <span>Right</span>
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                <div class="sw-dropdown-menu align-right">
                    <a href="#" class="sw-dropdown-item">Option 1</a>
                    <a href="#" class="sw-dropdown-item">Option 2</a>
                    <a href="#" class="sw-dropdown-item">Option 3</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
$(document).ready(function() {
    console.log('✅ Dropdowns page loaded');
});
</script>
@endpush
