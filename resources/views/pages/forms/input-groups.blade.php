@extends('layouts.app')

@section('title', 'Input Groups')

@push('styles')
@endpush

@section('content')
<div class="page-header">
    <div>
        <h1>Input Groups</h1>
        <p>Kombinasikan input dengan text, icon, button, dan dropdown</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-layer-group"></i>
            <span>View Examples</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card" style="margin-bottom: 24px; border-left: 4px solid var(--accent);">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">Input Groups Overview</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Input groups allow you to prepend or append text, icons, buttons, or dropdowns to form inputs. Perfect for creating enhanced form controls with contextual information.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Input Groups -->
<div class="ig-section-title">
    <i class="fa-solid fa-object-group"></i>
    Basic Input Groups <span class="badge badge-primary">Essential</span>
</div>

<div class="input-groups-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-circle-plus"></i>
                </div>
                <div>
                    <h3>Prepend Addons</h3>
                    <p class="card-subtitle">Text/icon before input</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ig-example">
                <label class="ig-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" placeholder="Username">
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Website URL</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-globe"></i>
                    </span>
                    <input type="url" class="form-control" placeholder="https://example.com">
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Email Address</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-envelope"></i>
                    </span>
                    <input type="email" class="form-control" placeholder="name@example.com">
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Phone Number</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-phone"></i>
                    </span>
                    <input type="tel" class="form-control" placeholder="+62 812-3456-7890">
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-circle-minus"></i>
                </div>
                <div>
                    <h3>Append Addons</h3>
                    <p class="card-subtitle">Text/icon after input</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ig-example">
                <label class="ig-label">Website Domain</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="yourdomain">
                    <span class="input-group-text">.com</span>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Price (USD)</label>
                <div class="input-group">
                    <input type="number" class="form-control" placeholder="0.00">
                    <span class="input-group-text">USD</span>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Weight (kg)</label>
                <div class="input-group">
                    <input type="number" class="form-control" placeholder="0">
                    <span class="input-group-text">kg</span>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Search</label>
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search...">
                    <span class="input-group-text">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Both Sides Input Groups -->
<div class="ig-section-title">
    <i class="fa-solid fa-left-right"></i>
    Both Sides Input Groups
</div>

<div class="input-groups-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-arrows-left-right"></i>
                </div>
                <div>
                    <h3>Prepend & Append</h3>
                    <p class="card-subtitle">Addons on both sides</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ig-example">
                <label class="ig-label">Full URL</label>
                <div class="input-group">
                    <span class="input-group-text">https://</span>
                    <input type="text" class="form-control" placeholder="www.example.com">
                    <span class="input-group-text">.com</span>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Price Range</label>
                <div class="input-group">
                    <span class="input-group-text">$
                    </span>
                    <input type="number" class="form-control" placeholder="0">
                    <span class="input-group-text">.00</span>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Email with Domain</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-envelope"></i>
                    </span>
                    <input type="email" class="form-control" placeholder="username">
                    <span class="input-group-text">@gmail.com</span>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Phone with Country Code</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-phone"></i>
                    </span>
                    <input type="tel" class="form-control" placeholder="812-3456-7890">
                    <span class="input-group-text">+62</span>
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-coins"></i>
                </div>
                <div>
                    <h3>Multiple Addons</h3>
                    <p class="card-subtitle">Chain multiple elements</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ig-example">
                <label class="ig-label">Name</label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-user"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="First name">
                    <input type="text" class="form-control" placeholder="Last name">
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Amount with Currency</label>
                <div class="input-group">
                    <span class="input-group-text">$
                    </span>
                    <input type="number" class="form-control" placeholder="0.00">
                    <span class="input-group-text">.00</span>
                    <span class="input-group-text">USD</span>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <h4 style="font-size: 14px; margin-bottom: 12px;">Features:</h4>
                <ul class="feature-list">
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Prepend text/icons</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Append text/icons</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Multiple addons</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Seamless styling</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Button Input Groups -->
<div class="ig-section-title">
    <i class="fa-solid fa-hand-pointer"></i>
    Button Input Groups <span class="badge badge-success">Popular</span>
</div>

<div class="input-groups-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-square-plus"></i>
                </div>
                <div>
                    <h3>Button Append</h3>
                    <p class="card-subtitle">Button after input</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ig-example">
                <label class="ig-label">Search</label>
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search...">
                    <button class="btn btn-primary">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        Search
                    </button>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Send Message</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type message...">
                    <button class="btn btn-success">
                        <i class="fa-solid fa-paper-plane"></i>
                        Send
                    </button>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Subscribe</label>
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="Enter your email">
                    <button class="btn btn-info">
                        Subscribe
                    </button>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Copy to Clipboard</label>
                <div class="input-group">
                    <input type="text" class="form-control" value="https://example.com/abc123" readonly>
                    <button class="btn btn-secondary">
                        <i class="fa-solid fa-copy"></i>
                        Copy
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-square-minus"></i>
                </div>
                <div>
                    <h3>Button Prepend</h3>
                    <p class="card-subtitle">Button before input</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ig-example">
                <label class="ig-label">Create New</label>
                <div class="input-group">
                    <button class="btn btn-primary">
                        <i class="fa-solid fa-plus"></i>
                        Add
                    </button>
                    <input type="text" class="form-control" placeholder="Item name">
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Upload File</label>
                <div class="input-group">
                    <button class="btn btn-warning">
                        <i class="fa-solid fa-upload"></i>
                        Upload
                    </button>
                    <input type="file" class="form-control">
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Download</label>
                <div class="input-group">
                    <button class="btn btn-success">
                        <i class="fa-solid fa-download"></i>
                        Get
                    </button>
                    <input type="text" class="form-control" placeholder="File URL" readonly>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <h4 style="font-size: 14px; margin-bottom: 12px;">Button Variants:</h4>
                <ul class="feature-list">
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Primary, Secondary, Success</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Warning, Danger, Info</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>With icons</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Disabled state</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Dropdown Input Groups -->
<div class="ig-section-title">
    <i class="fa-solid fa-caret-down"></i>
    Dropdown Input Groups
</div>

<div class="input-groups-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-list"></i>
                </div>
                <div>
                    <h3>Dropdown Prepend</h3>
                    <p class="card-subtitle">Dropdown before input</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ig-example">
                <label class="ig-label">Protocol & URL</label>
                <div class="input-group">
                    <select class="form-control" style="max-width: 120px;">
                        <option>https://</option>
                        <option>http://</option>
                        <option>ftp://</option>
                    </select>
                    <input type="text" class="form-control" placeholder="www.example.com">
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Currency Converter</label>
                <div class="input-group">
                    <select class="form-control" style="max-width: 100px;">
                        <option>USD</option>
                        <option>EUR</option>
                        <option>GBP</option>
                        <option>IDR</option>
                    </select>
                    <input type="number" class="form-control" placeholder="0.00">
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Phone with Country</label>
                <div class="input-group">
                    <select class="form-control" style="max-width: 100px;">
                        <option>🇮🇩 +62</option>
                        <option>🇺🇸 +1</option>
                        <option>🇬🇧 +44</option>
                        <option>🇯🇵 +81</option>
                    </select>
                    <input type="tel" class="form-control" placeholder="812-3456-7890">
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div>
                    <h3>Dropdown Append</h3>
                    <p class="card-subtitle">Dropdown after input</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ig-example">
                <label class="ig-label">Search Filter</label>
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search...">
                    <select class="form-control" style="max-width: 130px;">
                        <option>All</option>
                        <option>Users</option>
                        <option>Products</option>
                        <option>Orders</option>
                    </select>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Amount with Currency</label>
                <div class="input-group">
                    <input type="number" class="form-control" placeholder="0.00">
                    <select class="form-control" style="max-width: 100px;">
                        <option>USD</option>
                        <option>EUR</option>
                        <option>GBP</option>
                    </select>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Email with Domain</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="username">
                    <select class="form-control" style="max-width: 150px;">
                        <option>@gmail.com</option>
                        <option>@yahoo.com</option>
                        <option>@outlook.com</option>
                        <option>@company.com</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Checkbox & Radio Input Groups -->
<div class="ig-section-title">
    <i class="fa-solid fa-square-check"></i>
    Checkbox & Radio Input Groups
</div>

<div class="input-groups-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-square-check"></i>
                </div>
                <div>
                    <h3>Checkbox Prepend</h3>
                    <p class="card-subtitle">Checkbox before input</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ig-example">
                <label class="ig-label">Agree to Terms</label>
                <div class="input-group">
                    <div class="input-group-text">
                        <input type="checkbox">
                    </div>
                    <input type="text" class="form-control" placeholder="I agree to the terms and conditions" readonly>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Remember Me</label>
                <div class="input-group">
                    <div class="input-group-text">
                        <input type="checkbox" checked>
                    </div>
                    <input type="text" class="form-control" value="Keep me logged in" readonly>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Subscribe Newsletter</label>
                <div class="input-group">
                    <div class="input-group-text">
                        <input type="checkbox">
                    </div>
                    <input type="email" class="form-control" placeholder="Enter email for newsletter">
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-circle-dot"></i>
                </div>
                <div>
                    <h3>Radio Prepend</h3>
                    <p class="card-subtitle">Radio button before input</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ig-example">
                <label class="ig-label">Payment Method</label>
                <div class="input-group">
                    <div class="input-group-text">
                        <input type="radio" name="payment" checked>
                    </div>
                    <input type="text" class="form-control" value="Credit Card" readonly>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Shipping Option</label>
                <div class="input-group">
                    <div class="input-group-text">
                        <input type="radio" name="shipping">
                    </div>
                    <input type="text" class="form-control" placeholder="Standard Shipping (5-7 days)">
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Contact Preference</label>
                <div class="input-group">
                    <div class="input-group-text">
                        <input type="radio" name="contact" checked>
                    </div>
                    <input type="email" class="form-control" placeholder="Email contact">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Input with Dropdown -->
<div class="ig-section-title">
    <i class="fa-solid fa-list-dropdown"></i>
    Input with Dropdown <span class="badge badge-warning">Popular</span>
</div>

<div class="input-groups-grid">
    <!-- Dropdown on Left -->
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <div>
                    <h3>Dropdown Prepend (Left)</h3>
                    <p class="card-subtitle">Dropdown before input field</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ig-example">
                <label class="ig-label">Search with Category</label>
                <div class="input-group">
                    <div class="dropdown input-group-dropdown">
                        <button class="btn btn-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-folder"></i>
                            <span>All Categories</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-value="all"><i class="fa-solid fa-layer-group"></i> All Categories</a></li>
                            <li><a class="dropdown-item" href="#" data-value="products"><i class="fa-solid fa-box"></i> Products</a></li>
                            <li><a class="dropdown-item" href="#" data-value="services"><i class="fa-solid fa-briefcase"></i> Services</a></li>
                            <li><a class="dropdown-item" href="#" data-value="blog"><i class="fa-solid fa-newspaper"></i> Blog</a></li>
                            <li><a class="dropdown-item" href="#" data-value="support"><i class="fa-solid fa-headset"></i> Support</a></li>
                        </ul>
                    </div>
                    <input type="text" class="form-control" placeholder="Search...">
                    <button class="btn btn-primary" type="button">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Phone with Country Code</label>
                <div class="input-group">
                    <div class="dropdown input-group-dropdown">
                        <button class="btn btn-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="flag-icon">🇮🇩</span>
                            <span>+62</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-value="+62"><span class="flag-icon">🇮🇩</span> Indonesia (+62)</a></li>
                            <li><a class="dropdown-item" href="#" data-value="+1"><span class="flag-icon">🇺🇸</span> USA (+1)</a></li>
                            <li><a class="dropdown-item" href="#" data-value="+44"><span class="flag-icon">🇬🇧</span> UK (+44)</a></li>
                            <li><a class="dropdown-item" href="#" data-value="+81"><span class="flag-icon">🇯🇵</span> Japan (+81)</a></li>
                            <li><a class="dropdown-item" href="#" data-value="+86"><span class="flag-icon">🇨🇳</span> China (+86)</a></li>
                            <li><a class="dropdown-item" href="#" data-value="+61"><span class="flag-icon">🇦🇺</span> Australia (+61)</a></li>
                        </ul>
                    </div>
                    <input type="tel" class="form-control" placeholder="812-3456-7890">
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Currency Amount</label>
                <div class="input-group">
                    <div class="dropdown input-group-dropdown">
                        <button class="btn btn-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-dollar-sign"></i>
                            <span>USD</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-value="USD"><i class="fa-solid fa-dollar-sign"></i> USD - US Dollar</a></li>
                            <li><a class="dropdown-item" href="#" data-value="EUR"><i class="fa-solid fa-euro-sign"></i> EUR - Euro</a></li>
                            <li><a class="dropdown-item" href="#" data-value="GBP"><i class="fa-solid fa-sterling-sign"></i> GBP - British Pound</a></li>
                            <li><a class="dropdown-item" href="#" data-value="IDR"><i class="fa-solid fa-rupiah-sign"></i> IDR - Indonesian Rupiah</a></li>
                            <li><a class="dropdown-item" href="#" data-value="JPY"><i class="fa-solid fa-yen-sign"></i> JPY - Japanese Yen</a></li>
                        </ul>
                    </div>
                    <input type="number" class="form-control" placeholder="0.00">
                </div>
            </div>
        </div>
    </div>

    <!-- Dropdown on Right -->
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
                <div>
                    <h3>Dropdown Append (Right)</h3>
                    <p class="card-subtitle">Dropdown after input field</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ig-example">
                <label class="ig-label">Email with Domain</label>
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="username">
                    <div class="dropdown input-group-dropdown">
                        <button class="btn btn-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>@gmail.com</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-value="@gmail.com">@gmail.com</a></li>
                            <li><a class="dropdown-item" href="#" data-value="@yahoo.com">@yahoo.com</a></li>
                            <li><a class="dropdown-item" href="#" data-value="@outlook.com">@outlook.com</a></li>
                            <li><a class="dropdown-item" href="#" data-value="@company.com">@company.com</a></li>
                            <li><a class="dropdown-item" href="#" data-value="custom">Custom Domain...</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">API Endpoint</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="api/v1/resource">
                    <div class="dropdown input-group-dropdown">
                        <button class="btn btn-dropdown btn-dropdown-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>GET</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-value="GET"><i class="fa-solid fa-circle-check text-success"></i> GET</a></li>
                            <li><a class="dropdown-item" href="#" data-value="POST"><i class="fa-solid fa-circle-plus text-primary"></i> POST</a></li>
                            <li><a class="dropdown-item" href="#" data-value="PUT"><i class="fa-solid fa-circle-arrow-up text-warning"></i> PUT</a></li>
                            <li><a class="dropdown-item" href="#" data-value="DELETE"><i class="fa-solid fa-circle-xmark text-danger"></i> DELETE</a></li>
                            <li><a class="dropdown-item" href="#" data-value="PATCH"><i class="fa-solid fa-circle-half-stroke text-info"></i> PATCH</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Filter Value</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter value">
                    <div class="dropdown input-group-dropdown">
                        <button class="btn btn-dropdown btn-dropdown-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-filter"></i>
                            <span>equals</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-value="equals"><i class="fa-solid fa-equals"></i> equals</a></li>
                            <li><a class="dropdown-item" href="#" data-value="contains"><i class="fa-solid fa-percent"></i> contains</a></li>
                            <li><a class="dropdown-item" href="#" data-value="starts"><i class="fa-solid fa-arrow-right"></i> starts with</a></li>
                            <li><a class="dropdown-item" href="#" data-value="ends"><i class="fa-solid fa-arrow-left"></i> ends with</a></li>
                            <li><a class="dropdown-item" href="#" data-value="regex"><i class="fa-solid fa-code"></i> regex</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dropdown Both Sides -->
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-arrows-left-right"></i>
                </div>
                <div>
                    <h3>Dropdown on Both Sides</h3>
                    <p class="card-subtitle">Dropdowns before and after input</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ig-example">
                <label class="ig-label">Advanced Search</label>
                <div class="input-group">
                    <div class="dropdown input-group-dropdown">
                        <button class="btn btn-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <span>Contains</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-value="contains"><i class="fa-solid fa-percent"></i> Contains</a></li>
                            <li><a class="dropdown-item" href="#" data-value="equals"><i class="fa-solid fa-equals"></i> Equals</a></li>
                            <li><a class="dropdown-item" href="#" data-value="starts"><i class="fa-solid fa-arrow-right"></i> Starts With</a></li>
                            <li><a class="dropdown-item" href="#" data-value="ends"><i class="fa-solid fa-arrow-left"></i> Ends With</a></li>
                        </ul>
                    </div>
                    <input type="text" class="form-control" placeholder="Search term...">
                    <div class="dropdown input-group-dropdown">
                        <button class="btn btn-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-folder"></i>
                            <span>All Fields</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-value="all"><i class="fa-solid fa-layer-group"></i> All Fields</a></li>
                            <li><a class="dropdown-item" href="#" data-value="name"><i class="fa-solid fa-user"></i> Name</a></li>
                            <li><a class="dropdown-item" href="#" data-value="email"><i class="fa-solid fa-envelope"></i> Email</a></li>
                            <li><a class="dropdown-item" href="#" data-value="phone"><i class="fa-solid fa-phone"></i> Phone</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Price Range</label>
                <div class="input-group">
                    <div class="dropdown input-group-dropdown">
                        <button class="btn btn-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-dollar-sign"></i>
                            <span>USD</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-value="USD"><i class="fa-solid fa-dollar-sign"></i> USD</a></li>
                            <li><a class="dropdown-item" href="#" data-value="EUR"><i class="fa-solid fa-euro-sign"></i> EUR</a></li>
                            <li><a class="dropdown-item" href="#" data-value="IDR"><i class="fa-solid fa-rupiah-sign"></i> IDR</a></li>
                        </ul>
                    </div>
                    <input type="number" class="form-control" placeholder="0">
                    <div class="dropdown input-group-dropdown">
                        <button class="btn btn-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>per unit</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-value="unit">per unit</a></li>
                            <li><a class="dropdown-item" href="#" data-value="kg">per kg</a></li>
                            <li><a class="dropdown-item" href="#" data-value="hour">per hour</a></li>
                            <li><a class="dropdown-item" href="#" data-value="month">per month</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Date Range Filter</label>
                <div class="input-group">
                    <div class="dropdown input-group-dropdown">
                        <button class="btn btn-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-calendar"></i>
                            <span>From</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-value="from"><i class="fa-solid fa-calendar-day"></i> From Date</a></li>
                            <li><a class="dropdown-item" href="#" data-value="to"><i class="fa-solid fa-calendar-check"></i> To Date</a></li>
                        </ul>
                    </div>
                    <input type="date" class="form-control">
                    <div class="dropdown input-group-dropdown">
                        <button class="btn btn-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-clock"></i>
                            <span>Today</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" data-value="today">Today</a></li>
                            <li><a class="dropdown-item" href="#" data-value="yesterday">Yesterday</a></li>
                            <li><a class="dropdown-item" href="#" data-value="week">This Week</a></li>
                            <li><a class="dropdown-item" href="#" data-value="month">This Month</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Segmented Buttons -->
<div class="ig-section-title">
    <i class="fa-solid fa-grip"></i>
    Segmented Buttons <span class="badge badge-info">Advanced</span>
</div>

{{-- Segmented Buttons Section --}}
<div class="input-groups-grid">
    <!-- Basic Segmented Buttons -->
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-toggle-on"></i>
                </div>
                <div>
                    <h3>Basic Segmented Buttons</h3>
                    <p class="card-subtitle">Toggle between multiple options</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ig-example">
                <label class="ig-label">View Mode</label>
                <div class="btn-group-segmented" role="group" aria-label="View mode selector">
                    <button type="button" class="btn-segment active" data-value="grid">
                        <i class="fa-solid fa-grid-2"></i>
                        <span>Grid</span>
                    </button>
                    <button type="button" class="btn-segment" data-value="list">
                        <i class="fa-solid fa-list"></i>
                        <span>List</span>
                    </button>
                    <button type="button" class="btn-segment" data-value="table">
                        <i class="fa-solid fa-table-columns"></i>
                        <span>Table</span>
                    </button>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Status Filter</label>
                <div class="btn-group-segmented" role="group" aria-label="Status filter">
                    <button type="button" class="btn-segment active" data-value="all">
                        <span>All</span>
                    </button>
                    <button type="button" class="btn-segment" data-value="active">
                        <span>Active</span>
                    </button>
                    <button type="button" class="btn-segment" data-value="inactive">
                        <span>Inactive</span>
                    </button>
                    <button type="button" class="btn-segment" data-value="pending">
                        <span>Pending</span>
                    </button>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Time Range</label>
                <div class="btn-group-segmented" role="group" aria-label="Time range">
                    <button type="button" class="btn-segment" data-value="day">
                        <span>24H</span>
                    </button>
                    <button type="button" class="btn-segment active" data-value="week">
                        <span>7D</span>
                    </button>
                    <button type="button" class="btn-segment" data-value="month">
                        <span>30D</span>
                    </button>
                    <button type="button" class="btn-segment" data-value="year">
                        <span>1Y</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Icon Segmented Buttons -->
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-icons"></i>
                </div>
                <div>
                    <h3>Icon Segmented Buttons</h3>
                    <p class="card-subtitle">Icon-only segmented controls</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ig-example">
                <label class="ig-label">Text Alignment</label>
                <div class="btn-group-segmented btn-group-icons" role="group" aria-label="Text alignment">
                    <button type="button" class="btn-segment btn-segment-icon" data-value="left" title="Align Left">
                        <i class="fa-solid fa-align-left"></i>
                    </button>
                    <button type="button" class="btn-segment btn-segment-icon active" data-value="center" title="Align Center">
                        <i class="fa-solid fa-align-center"></i>
                    </button>
                    <button type="button" class="btn-segment btn-segment-icon" data-value="right" title="Align Right">
                        <i class="fa-solid fa-align-right"></i>
                    </button>
                    <button type="button" class="btn-segment btn-segment-icon" data-value="justify" title="Justify">
                        <i class="fa-solid fa-align-justify"></i>
                    </button>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Sort Order</label>
                <div class="btn-group-segmented btn-group-icons" role="group" aria-label="Sort order">
                    <button type="button" class="btn-segment btn-segment-icon active" data-value="asc" title="Ascending">
                        <i class="fa-solid fa-arrow-down-a-z"></i>
                    </button>
                    <button type="button" class="btn-segment btn-segment-icon" data-value="desc" title="Descending">
                        <i class="fa-solid fa-arrow-down-z-a"></i>
                    </button>
                    <button type="button" class="btn-segment btn-segment-icon" data-value="custom" title="Custom">
                        <i class="fa-solid fa-sliders"></i>
                    </button>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Display Density</label>
                <div class="btn-group-segmented btn-group-icons" role="group" aria-label="Display density">
                    <button type="button" class="btn-segment btn-segment-icon" data-value="compact" title="Compact">
                        <i class="fa-solid fa-compress"></i>
                    </button>
                    <button type="button" class="btn-segment btn-segment-icon active" data-value="comfortable" title="Comfortable">
                        <i class="fa-solid fa-expand"></i>
                    </button>
                    <button type="button" class="btn-segment btn-segment-icon" data-value="spacious" title="Spacious">
                        <i class="fa-solid fa-arrows-to-circle"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Color Variants -->
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-palette"></i>
                </div>
                <div>
                    <h3>Color Variants</h3>
                    <p class="card-subtitle">Different color schemes</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ig-example">
                <label class="ig-label">Priority Level</label>
                <div class="btn-group-segmented" role="group" aria-label="Priority level">
                    <button type="button" class="btn-segment btn-segment-danger" data-value="urgent">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <span>Urgent</span>
                    </button>
                    <button type="button" class="btn-segment btn-segment-warning" data-value="high">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <span>High</span>
                    </button>
                    <button type="button" class="btn-segment btn-segment-success" data-value="normal">
                        <i class="fa-solid fa-check-circle"></i>
                        <span>Normal</span>
                    </button>
                    <button type="button" class="btn-segment btn-segment-info" data-value="low">
                        <i class="fa-solid fa-circle-info"></i>
                        <span>Low</span>
                    </button>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Theme Selection</label>
                <div class="btn-group-segmented" role="group" aria-label="Theme selection">
                    <button type="button" class="btn-segment btn-segment-primary active" data-value="light">
                        <i class="fa-solid fa-sun"></i>
                        <span>Light</span>
                    </button>
                    <button type="button" class="btn-segment btn-segment-dark" data-value="dark">
                        <i class="fa-solid fa-moon"></i>
                        <span>Dark</span>
                    </button>
                    <button type="button" class="btn-segment btn-segment-secondary" data-value="auto">
                        <i class="fa-solid fa-desktop"></i>
                        <span>Auto</span>
                    </button>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Approval Status</label>
                <div class="btn-group-segmented" role="group" aria-label="Approval status">
                    <button type="button" class="btn-segment btn-segment-success active" data-value="approved">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Approved</span>
                    </button>
                    <button type="button" class="btn-segment btn-segment-warning" data-value="pending">
                        <i class="fa-solid fa-clock"></i>
                        <span>Pending</span>
                    </button>
                    <button type="button" class="btn-segment btn-segment-danger" data-value="rejected">
                        <i class="fa-solid fa-circle-xmark"></i>
                        <span>Rejected</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Size Variants -->
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                </div>
                <div>
                    <h3>Size Variants</h3>
                    <p class="card-subtitle">Small, default, and large sizes</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ig-example">
                <label class="ig-label">Small Size</label>
                <div class="btn-group-segmented btn-group-sm" role="group" aria-label="Small size">
                    <button type="button" class="btn-segment active" data-value="small">
                        <span>Small</span>
                    </button>
                    <button type="button" class="btn-segment" data-value="medium">
                        <span>Medium</span>
                    </button>
                    <button type="button" class="btn-segment" data-value="large">
                        <span>Large</span>
                    </button>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Default Size</label>
                <div class="btn-group-segmented" role="group" aria-label="Default size">
                    <button type="button" class="btn-segment active" data-value="basic">
                        <span>Basic</span>
                    </button>
                    <button type="button" class="btn-segment" data-value="standard">
                        <span>Standard</span>
                    </button>
                    <button type="button" class="btn-segment" data-value="premium">
                        <span>Premium</span>
                    </button>
                </div>
            </div>

            <div class="ig-example">
                <label class="ig-label">Large Size</label>
                <div class="btn-group-segmented btn-group-lg" role="group" aria-label="Large size">
                    <button type="button" class="btn-segment active" data-value="starter">
                        <i class="fa-solid fa-rocket"></i>
                        <span>Starter</span>
                    </button>
                    <button type="button" class="btn-segment" data-value="professional">
                        <i class="fa-solid fa-briefcase"></i>
                        <span>Professional</span>
                    </button>
                    <button type="button" class="btn-segment" data-value="enterprise">
                        <i class="fa-solid fa-building"></i>
                        <span>Enterprise</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
/* Input Group Dropdown Styles */
.input-group-dropdown {
    position: relative;
    z-index: 1050 !important;
}

/* Elevate container when dropdown is shown */
.ig-example:has(.show) {
    position: relative;
    z-index: 100;
}

/* Ensure dropdown menu appears above all content */
.input-group-dropdown .dropdown-menu {
    position: absolute;
    z-index: 1050;
    margin-top: 4px;
    border: 1px solid var(--border-color);
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    border-radius: var(--border-radius);
    padding: 4px 0;
    min-width: 180px;
    background: var(--bg-primary);
}

/* Prevent parent containers from clipping dropdown - scoped to input-groups page only */
.input-groups-grid .input-group,
.input-groups-grid .ig-example {
    overflow: visible !important;
}

/* Only apply to cards that contain input groups with dropdowns */
.input-groups-grid .content-card .card-body:has(.input-group-dropdown) {
    overflow: visible !important;
}

.input-group-dropdown .btn-dropdown {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 8px 12px;
    border: 1px solid var(--border-color);
    border-right: none;
    background: var(--bg-secondary);
    color: var(--text-primary);
    font-size: 13px;
    font-weight: 500;
    border-radius: var(--border-radius) 0 0 var(--border-radius);
    cursor: pointer;
    transition: all 0.2s ease;
    white-space: nowrap;
    position: relative;
}

/* Remove right border from dropdown when it's not the last element */
.input-group .input-group-dropdown:not(:last-child) .btn-dropdown {
    border-right: none;
}

.input-group .input-group-dropdown:last-child .btn-dropdown {
    border-radius: 0 var(--border-radius) var(--border-radius) 0;
    border-right: 1px solid var(--border-color);
    border-left: none;
}

/* Input field border adjustments */
.input-group .form-control {
    border-left: 1px solid #d1d5db !important;
}

.input-group .form-control:first-child {
    border-left: 1px solid #d1d5db !important;
}

.input-group .form-control:last-child {
    border-right: 1px solid #d1d5db !important;
}

/* Button at the end */
.input-group .btn:last-child {
    border-radius: 0 var(--border-radius) var(--border-radius) 0;
}

.input-group-dropdown .btn-dropdown:hover {
    background: var(--bg-hover);
    border-color: var(--accent);
    z-index: 10;
}

.input-group-dropdown .btn-dropdown.show {
    background: var(--bg-hover);
    border-color: var(--accent);
    box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.15);
    z-index: 20;
}

/* Focus states for form controls */
.input-group .form-control:focus {
    z-index: 5;
    border-color: var(--accent);
    box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
}

.input-group-dropdown .btn-dropdown .flag-icon {
    font-size: 16px;
}

/* Color variants for dropdown buttons */
.btn-dropdown-success {
    background: var(--success) !important;
    color: #fff !important;
    border-color: var(--success) !important;
}

.btn-dropdown-success:hover,
.btn-dropdown-success.show {
    background: var(--success-dark) !important;
    border-color: var(--success-dark) !important;
}

.btn-dropdown-info {
    background: var(--info) !important;
    color: #fff !important;
    border-color: var(--info) !important;
}

.btn-dropdown-info:hover,
.btn-dropdown-info.show {
    background: var(--info-dark) !important;
    border-color: var(--info-dark) !important;
}

.btn-dropdown-warning {
    background: var(--warning) !important;
    color: #000 !important;
    border-color: var(--warning) !important;
}

.btn-dropdown-warning:hover,
.btn-dropdown-warning.show {
    background: var(--warning-dark) !important;
    border-color: var(--warning-dark) !important;
}

.btn-dropdown-danger {
    background: var(--danger) !important;
    color: #fff !important;
    border-color: var(--danger) !important;
}

.btn-dropdown-danger:hover,
.btn-dropdown-danger.show {
    background: var(--danger-dark) !important;
    border-color: var(--danger-dark) !important;
}

/* Dropdown menu styling */
.input-group-dropdown .dropdown-menu {
    margin-top: 4px;
    border: 1px solid var(--border-color);
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    border-radius: var(--border-radius);
    padding: 4px 0;
    min-width: 180px;
    background: var(--bg-primary);
}

/* Remove bullet points from dropdown menu */
ul.dropdown-menu.show {
    list-style-type: none !important;
    list-style-image: none !important;
    list-style-position: outside;
    padding-left: 0px !important;
}

/* Ensure no bullets on list items */
ul.dropdown-menu.show li {
    list-style-type: none !important;
}

.input-group-dropdown .dropdown-item {
    padding: 8px 16px;
    font-size: 13px;
    color: var(--text-primary);
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all 0.15s ease;
}

.input-group-dropdown .dropdown-item:hover {
    background: var(--bg-hover);
    color: var(--accent);
}

.input-group-dropdown .dropdown-item i {
    font-size: 14px;
    width: 16px;
    text-align: center;
}

/* Segmented Button Group */
.btn-group-segmented {
    display: inline-flex;
    gap: 0;
    border-radius: var(--border-radius);
    overflow: hidden;
    border: 1px solid var(--border-color);
    background: var(--bg-secondary);
}

.btn-group-segmented.btn-group-icons {
    width: 100%;
}

/* Individual Segment */
.btn-segment {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    padding: 8px 16px;
    border: none;
    background: transparent;
    color: var(--text-secondary);
    font-size: 13px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.2s ease;
    white-space: nowrap;
    position: relative;
}

.btn-segment:hover {
    background: var(--bg-hover);
    color: var(--text-primary);
}

.btn-segment.active {
    background: var(--accent);
    color: #fff;
    font-weight: 600;
}

.btn-segment:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
}

/* Icon-only segments */
.btn-segment-icon {
    padding: 8px 12px;
    min-width: 40px;
}

.btn-segment-icon i {
    font-size: 14px;
}

/* Color variants */
.btn-segment-primary.active {
    background: var(--primary);
}

.btn-segment-success.active {
    background: var(--success);
}

.btn-segment-warning.active {
    background: var(--warning);
    color: #000;
}

.btn-segment-danger.active {
    background: var(--danger);
}

.btn-segment-info.active {
    background: var(--info);
}

.btn-segment-dark.active {
    background: var(--dark);
}

.btn-segment-secondary.active {
    background: var(--secondary);
}

/* Size variants */
.btn-group-sm .btn-segment {
    padding: 6px 12px;
    font-size: 12px;
}

.btn-group-lg .btn-segment {
    padding: 12px 20px;
    font-size: 14px;
}

.btn-group-lg .btn-segment i {
    font-size: 16px;
}

/* Responsive */
@media (max-width: 768px) {
    .btn-group-segmented {
        width: 100%;
    }
    
    .btn-segment {
        flex: 1;
        padding: 8px 8px;
    }
    
    .btn-segment span {
        display: none;
    }
    
    .btn-segment i {
        margin: 0;
    }
}
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    // Input group dropdown selection handler
    $('.input-group-dropdown .dropdown-item').on('click', function(e) {
        e.preventDefault();
        
        const dropdown = $(this).closest('.input-group-dropdown');
        const button = dropdown.find('.btn-dropdown');
        const selectedValue = $(this).data('value');
        
        // Update button content
        button.find('span').html($(this).html());
        
        // Store selected value
        button.data('selected', selectedValue);
        
        console.log('Dropdown selected:', selectedValue);
    });
    
    // Segmented button click handler
    $('.btn-segment').on('click', function() {
        const group = $(this).closest('.btn-group-segmented');
        
        // Remove active class from siblings
        group.find('.btn-segment').removeClass('active');
        
        // Add active class to clicked button
        $(this).addClass('active');
        
        // Get selected value
        const selectedValue = $(this).data('value');
        console.log('Segment selected:', selectedValue);
    });
});
</script>
@endpush

<!-- Complete Form Example -->
<div class="ig-section-title">
    <i class="fa-solid fa-clipboard-list"></i>
    Complete Form Example
</div>

<div class="input-groups-grid full-width">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <div>
                    <h3>E-Commerce Checkout Form</h3>
                    <p class="card-subtitle">Real-world example with various input groups</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form style="max-width: 800px;">
                <div class="form-group">
                    <label style="font-weight: 600; margin-bottom: 8px; display: block;">Email Address <span style="color: var(--danger);">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <input type="email" class="form-control" placeholder="your@email.com" required>
                    </div>
                </div>

                <div class="form-group">
                    <label style="font-weight: 600; margin-bottom: 8px; display: block;">Phone Number</label>
                    <div class="input-group">
                        <select class="form-control" style="max-width: 120px;">
                            <option>🇮🇩 +62</option>
                            <option>🇺🇸 +1</option>
                            <option>🇬🇧 +44</option>
                        </select>
                        <input type="tel" class="form-control" placeholder="812-3456-7890">
                    </div>
                </div>

                <div class="form-group">
                    <label style="font-weight: 600; margin-bottom: 8px; display: block;">Website (Optional)</label>
                    <div class="input-group">
                        <span class="input-group-text">https://</span>
                        <input type="text" class="form-control" placeholder="www.yoursite.com">
                        <span class="input-group-text">.com</span>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="form-group">
                    <label style="font-weight: 600; margin-bottom: 8px; display: block;">Payment Information <span style="color: var(--danger);">*</span></label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-credit-card"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Card number" maxlength="19" required>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="MM/YY" maxlength="5" required>
                            <span class="input-group-text">
                                <i class="fa-solid fa-calendar"></i>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="CVC" maxlength="4" required>
                            <span class="input-group-text">
                                <i class="fa-solid fa-lock"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label style="font-weight: 600; margin-bottom: 8px; display: block;">Promo Code</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter promo code">
                        <button class="btn btn-success">
                            Apply
                        </button>
                    </div>
                </div>

                <div class="form-group">
                    <label style="font-weight: 600; margin-bottom: 8px; display: block;">Donation Amount (Optional)</label>
                    <div class="input-group">
                        <span class="input-group-text">$
                        </span>
                        <input type="number" class="form-control" placeholder="0.00">
                        <span class="input-group-text">USD</span>
                    </div>
                </div>

                <div class="divider"></div>

                <div style="display: flex; gap: 12px; margin-top: 24px;">
                    <button type="submit" class="btn btn-primary" style="flex: 1;">
                        <i class="fa-solid fa-lock"></i>
                        Complete Purchase
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

<!-- Usage Guidelines -->
<div class="input-groups-grid full-width">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>
                <div>
                    <h3>When to Use Input Groups</h3>
                    <p class="card-subtitle">Best practices and use cases</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="input-groups-grid three-cols">
                <div>
                    <h4 style="font-size: 14px; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                        <span style="font-size: 24px;">🔤</span>
                        Text Addons
                    </h4>
                    <ul class="feature-list">
                        <li><i class="fa-solid fa-check"></i> Email @ symbol</li>
                        <li><i class="fa-solid fa-check"></i> Currency symbols</li>
                        <li><i class="fa-solid fa-check"></i> URL protocols</li>
                        <li><i class="fa-solid fa-check"></i> File extensions</li>
                        <li><i class="fa-solid fa-check"></i> Units of measurement</li>
                    </ul>
                </div>
                <div>
                    <h4 style="font-size: 14px; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                        <span style="font-size: 24px;">🔘</span>
                        Button Addons
                    </h4>
                    <ul class="feature-list">
                        <li><i class="fa-solid fa-check"></i> Search buttons</li>
                        <li><i class="fa-solid fa-check"></i> Submit actions</li>
                        <li><i class="fa-solid fa-check"></i> Copy to clipboard</li>
                        <li><i class="fa-solid fa-check"></i> Upload triggers</li>
                        <li><i class="fa-solid fa-check"></i> Download links</li>
                    </ul>
                </div>
                <div>
                    <h4 style="font-size: 14px; margin-bottom: 12px; display: flex; align-items: center; gap: 8px;">
                        <span style="font-size: 24px;">📋</span>
                        Dropdown Addons
                    </h4>
                    <ul class="feature-list">
                        <li><i class="fa-solid fa-check"></i> Currency selection</li>
                        <li><i class="fa-solid fa-check"></i> Country codes</li>
                        <li><i class="fa-solid fa-check"></i> Protocol choice</li>
                        <li><i class="fa-solid fa-check"></i> Category filter</li>
                        <li><i class="fa-solid fa-check"></i> Domain selection</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
