@extends('layouts.app')

@section('title', 'Typeahead')

@push('styles')
@endpush

@section('content')
<div class="page-header">
    <div>
        <h1>Typeahead</h1>
        <p>Autocomplete search suggestions dengan dropdown results dan keyboard navigation</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-magnifying-glass"></i>
            <span>Try Typeahead</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card" style="margin-bottom: 24px; border-left: 4px solid var(--accent);">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What is Typeahead?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Typeahead provides autocomplete suggestions as users type. It improves UX by showing relevant results, reducing typing effort, and guiding input. Popular implementations include <strong>Typeahead.js</strong>, <strong>Autocomplete.js</strong>, and custom solutions.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Typeahead -->
<div class="ta-section-title">
    <i class="fa-solid fa-magnifying-glass"></i>
    Basic Typeahead <span class="badge badge-primary">Essential</span>
</div>

<div class="typeahead-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-globe"></i>
                </div>
                <div>
                    <h3>Country Search</h3>
                    <p class="card-subtitle">Type to search countries</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ta-example">
                <label class="ta-label">
                    Search Country
                    <span class="ta-hint">Type "Ind" or "Uni"</span>
                </label>
                <div class="typeahead-wrapper typeahead-with-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" class="typeahead-input" placeholder="Start typing country name..." value="Ind">
                    <div class="typeahead-dropdown">
                        <div class="typeahead-header">Countries (4 results)</div>
                        <div class="typeahead-item active">
                            <div class="typeahead-item-icon">🇮🇩</div>
                            <div class="typeahead-item-content">
                                <div class="typeahead-item-title"><span class="highlight">Ind</span>onesia</div>
                                <div class="typeahead-item-subtitle">Jakarta • Southeast Asia</div>
                            </div>
                            <div class="typeahead-item-badge">Popular</div>
                        </div>
                        <div class="typeahead-item">
                            <div class="typeahead-item-icon">🇮🇳</div>
                            <div class="typeahead-item-content">
                                <div class="typeahead-item-title"><span class="highlight">Ind</span>ia</div>
                                <div class="typeahead-item-subtitle">New Delhi • South Asia</div>
                            </div>
                        </div>
                        <div class="typeahead-item">
                            <div class="typeahead-item-icon">🇮🇸</div>
                            <div class="typeahead-item-content">
                                <div class="typeahead-item-title"><span class="highlight">Ind</span>iana (USA)</div>
                                <div class="typeahead-item-subtitle">Indianapolis • North America</div>
                            </div>
                        </div>
                        <div class="typeahead-item">
                            <div class="typeahead-item-icon">🇬🇧</div>
                            <div class="typeahead-item-content">
                                <div class="typeahead-item-title"><span class="highlight">Uni</span>ted Kingdom</div>
                                <div class="typeahead-item-subtitle">London • Europe</div>
                            </div>
                        </div>
                        <div class="typeahead-footer">↑↓ Navigate • Enter Select • Esc Close</div>
                    </div>
                </div>
                <div class="ta-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    4 results found for "Ind"
                </div>
            </div>

            <div class="ta-example">
                <label class="ta-label">
                    Search Language
                    <span class="ta-hint">No results</span>
                </label>
                <div class="typeahead-wrapper typeahead-with-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" class="typeahead-input" placeholder="Start typing language..." value="xyz">
                    <div class="typeahead-dropdown">
                        <div class="typeahead-empty">
                            <i class="fa-solid fa-circle-xmark"></i>
                            <div>No languages found for "xyz"</div>
                            <div style="font-size: 11px; margin-top: 4px;">Try different keywords</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <h4 style="font-size: 14px; margin-bottom: 12px;">Features:</h4>
                <ul class="feature-list">
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Real-time suggestions</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Highlight matching text</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Keyboard navigation</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Empty state handling</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div>
                    <h3>User Search</h3>
                    <p class="card-subtitle">Find users by name/email</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ta-example">
                <label class="ta-label">
                    Search Users
                    <span class="ta-hint">Type "John"</span>
                </label>
                <div class="typeahead-wrapper typeahead-with-icon">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" class="typeahead-input" placeholder="Search users..." value="John">
                    <div class="typeahead-dropdown">
                        <div class="typeahead-header">Users (3 results)</div>
                        <div class="typeahead-item active">
                            <div class="typeahead-item-icon">👤</div>
                            <div class="typeahead-item-content">
                                <div class="typeahead-item-title"><span class="highlight">John</span> Doe</div>
                                <div class="typeahead-item-subtitle">john@example.com • Admin</div>
                            </div>
                            <div class="typeahead-item-badge">Online</div>
                        </div>
                        <div class="typeahead-item">
                            <div class="typeahead-item-icon">👤</div>
                            <div class="typeahead-item-content">
                                <div class="typeahead-item-title"><span class="highlight">John</span> Smith</div>
                                <div class="typeahead-item-subtitle">john.smith@example.com • User</div>
                            </div>
                        </div>
                        <div class="typeahead-item">
                            <div class="typeahead-item-icon">👤</div>
                            <div class="typeahead-item-content">
                                <div class="typeahead-item-title"><span class="highlight">John</span>ny Cash</div>
                                <div class="typeahead-item-subtitle">jcash@example.com • Editor</div>
                            </div>
                        </div>
                        <div class="typeahead-footer">Showing 3 of 1,234 users</div>
                    </div>
                </div>
            </div>

            <div class="ta-example">
                <label class="ta-label">
                    Search Teams
                    <span class="ta-hint">Type "Dev"</span>
                </label>
                <div class="typeahead-wrapper typeahead-with-icon">
                    <i class="fa-solid fa-users"></i>
                    <input type="text" class="typeahead-input" placeholder="Search teams..." value="Dev">
                    <div class="typeahead-dropdown">
                        <div class="typeahead-header">Teams (2 results)</div>
                        <div class="typeahead-item">
                            <div class="typeahead-item-icon">👥</div>
                            <div class="typeahead-item-content">
                                <div class="typeahead-item-title"><span class="highlight">Dev</span>elopment Team</div>
                                <div class="typeahead-item-subtitle">12 members • Engineering</div>
                            </div>
                        </div>
                        <div class="typeahead-item">
                            <div class="typeahead-item-icon">👥</div>
                            <div class="typeahead-item-content">
                                <div class="typeahead-item-title"><span class="highlight">Dev</span>Ops Team</div>
                                <div class="typeahead-item-subtitle">8 members • Infrastructure</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Click on a result to select the user/team
            </div>
        </div>
    </div>
</div>

<!-- Advanced Typeahead -->
<div class="ta-section-title">
    <i class="fa-solid fa-wand-magic-sparkles"></i>
    Advanced Typeahead <span class="badge badge-success">Popular</span>
</div>

<div class="typeahead-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-box"></i>
                </div>
                <div>
                    <h3>Product Search</h3>
                    <p class="card-subtitle">E-commerce product finder</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ta-example">
                <label class="ta-label">
                    Search Products
                    <span class="ta-hint">Type "Phone"</span>
                </label>
                <div class="typeahead-wrapper typeahead-with-icon">
                    <i class="fa-solid fa-box"></i>
                    <input type="text" class="typeahead-input" placeholder="Search products..." value="Phone">
                    <div class="typeahead-dropdown">
                        <div class="typeahead-header">Products (5 results)</div>
                        <div class="typeahead-item active">
                            <div class="typeahead-item-icon">📱</div>
                            <div class="typeahead-item-content">
                                <div class="typeahead-item-title">iPhone 15 Pro</div>
                                <div class="typeahead-item-subtitle">Apple • $999 • ⭐ 4.8</div>
                            </div>
                            <div class="typeahead-item-badge">New</div>
                        </div>
                        <div class="typeahead-item">
                            <div class="typeahead-item-icon">📱</div>
                            <div class="typeahead-item-content">
                                <div class="typeahead-item-title">Samsung Galaxy S24</div>
                                <div class="typeahead-item-subtitle">Samsung • $899 • ⭐ 4.7</div>
                            </div>
                        </div>
                        <div class="typeahead-item">
                            <div class="typeahead-item-icon">📱</div>
                            <div class="typeahead-item-content">
                                <div class="typeahead-item-title">Google Pixel 8</div>
                                <div class="typeahead-item-subtitle">Google • $699 • ⭐ 4.6</div>
                            </div>
                            <div class="typeahead-item-badge" style="background: var(--success-bg); color: var(--success);">Sale</div>
                        </div>
                        <div class="typeahead-item">
                            <div class="typeahead-item-icon">📱</div>
                            <div class="typeahead-item-content">
                                <div class="typeahead-item-title">OnePlus 12</div>
                                <div class="typeahead-item-subtitle">OnePlus • $799 • ⭐ 4.5</div>
                            </div>
                        </div>
                        <div class="typeahead-item">
                            <div class="typeahead-item-icon">📱</div>
                            <div class="typeahead-item-content">
                                <div class="typeahead-item-title">Xiaomi 14 Pro</div>
                                <div class="typeahead-item-subtitle">Xiaomi • $649 • ⭐ 4.4</div>
                            </div>
                        </div>
                        <div class="typeahead-footer">Showing 5 of 2,456 products</div>
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <h4 style="font-size: 14px; margin-bottom: 12px;">Product Features:</h4>
                <ul class="feature-list">
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Product images/icons</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Price and rating display</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Category badges (New/Sale)</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Total results count</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div>
                    <h3>Location Search</h3>
                    <p class="card-subtitle">Address autocomplete</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ta-example">
                <label class="ta-label">
                    Search Address
                    <span class="ta-hint">Type "Jakarta"</span>
                </label>
                <div class="typeahead-wrapper typeahead-with-icon">
                    <i class="fa-solid fa-location-dot"></i>
                    <input type="text" class="typeahead-input" placeholder="Enter address..." value="Jakarta">
                    <div class="typeahead-dropdown">
                        <div class="typeahead-header">Locations (4 results)</div>
                        <div class="typeahead-item active">
                            <div class="typeahead-item-icon">🏙️</div>
                            <div class="typeahead-item-content">
                                <div class="typeahead-item-title"><span class="highlight">Jakarta</span> Pusat</div>
                                <div class="typeahead-item-subtitle">DKI Jakarta • Indonesia</div>
                            </div>
                        </div>
                        <div class="typeahead-item">
                            <div class="typeahead-item-icon">🏙️</div>
                            <div class="typeahead-item-content">
                                <div class="typeahead-item-title"><span class="highlight">Jakarta</span> Selatan</div>
                                <div class="typeahead-item-subtitle">DKI Jakarta • Indonesia</div>
                            </div>
                        </div>
                        <div class="typeahead-item">
                            <div class="typeahead-item-icon">🏙️</div>
                            <div class="typeahead-item-content">
                                <div class="typeahead-item-title"><span class="highlight">Jakarta</span> Barat</div>
                                <div class="typeahead-item-subtitle">DKI Jakarta • Indonesia</div>
                            </div>
                        </div>
                        <div class="typeahead-item">
                            <div class="typeahead-item-icon">🏙️</div>
                            <div class="typeahead-item-content">
                                <div class="typeahead-item-title"><span class="highlight">Jakarta</span> Utara</div>
                                <div class="typeahead-item-subtitle">DKI Jakarta • Indonesia</div>
                            </div>
                        </div>
                        <div class="typeahead-footer">Powered by Google Places API</div>
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Integrates with Google Places API for accurate addresses
            </div>
        </div>
    </div>
</div>

<!-- Loading & States -->
<div class="ta-section-title">
    <i class="fa-solid fa-spinner"></i>
    Loading & States
</div>

<div class="typeahead-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-circle-notch"></i>
                </div>
                <div>
                    <h3>Loading State</h3>
                    <p class="card-subtitle">Fetching results from API</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ta-example">
                <label class="ta-label">Search with Loading</label>
                <div class="typeahead-wrapper typeahead-with-icon typeahead-loading">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" class="typeahead-input" placeholder="Loading..." value="Search">
                </div>
                <div class="ta-helper">
                    <i class="fa-solid fa-circle-notch fa-spin"></i>
                    Fetching results from server...
                </div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Loading spinner appears while fetching data
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                </div>
                <div>
                    <h3>Recent Searches</h3>
                    <p class="card-subtitle">Quick access to history</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="ta-example">
                <label class="ta-label">Recent Searches</label>
                <div style="display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 12px;">
                    <div class="recent-search">
                        <i class="fa-solid fa-clock"></i>
                        <span>Laravel</span>
                        <span class="recent-search-remove">×</span>
                    </div>
                    <div class="recent-search">
                        <i class="fa-solid fa-clock"></i>
                        <span>React</span>
                        <span class="recent-search-remove">×</span>
                    </div>
                    <div class="recent-search">
                        <i class="fa-solid fa-clock"></i>
                        <span>Vue.js</span>
                        <span class="recent-search-remove">×</span>
                    </div>
                    <div class="recent-search">
                        <i class="fa-solid fa-clock"></i>
                        <span>JavaScript</span>
                        <span class="recent-search-remove">×</span>
                    </div>
                </div>
                <div class="ta-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Click to search again, × to remove
                </div>
            </div>

            <div class="divider"></div>

            <div class="helper-text">
                <i class="fa-solid fa-circle-info"></i>
                Recent searches improve user experience
            </div>
        </div>
    </div>
</div>

<!-- Search Form Example -->
<div class="ta-section-title">
    <i class="fa-solid fa-clipboard-list"></i>
    Search Form Example
</div>

<div class="typeahead-grid full-width">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div>
                    <h3>Advanced Search Form</h3>
                    <p class="card-subtitle">Multi-field search with typeahead</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form style="max-width: 800px;">
                <div class="ta-example">
                    <label class="ta-label">Search Products <span style="color: var(--danger);">*</span></label>
                    <div class="typeahead-wrapper typeahead-with-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" class="typeahead-input" placeholder="What are you looking for?" required>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div class="ta-example">
                        <label class="ta-label">Category</label>
                        <div class="typeahead-wrapper">
                            <input type="text" class="typeahead-input" placeholder="Select category...">
                        </div>
                    </div>

                    <div class="ta-example">
                        <label class="ta-label">Brand</label>
                        <div class="typeahead-wrapper">
                            <input type="text" class="typeahead-input" placeholder="Select brand...">
                        </div>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div class="ta-example">
                        <label class="ta-label">Price Range</label>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                            <input type="number" class="typeahead-input" placeholder="Min" min="0">
                            <input type="number" class="typeahead-input" placeholder="Max" min="0">
                        </div>
                    </div>

                    <div class="ta-example">
                        <label class="ta-label">Rating</label>
                        <div class="typeahead-wrapper">
                            <input type="text" class="typeahead-input" placeholder="Min rating...">
                        </div>
                    </div>
                </div>

                <div class="divider"></div>

                <div style="display: flex; gap: 12px;">
                    <button type="submit" class="btn btn-primary" style="flex: 1;">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        Search
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
<div class="typeahead-grid full-width">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-code"></i>
                </div>
                <div>
                    <h3>Implementation Guide</h3>
                    <p class="card-subtitle">How to implement typeahead with JavaScript</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="code-block">
                <div style="color: var(--text-tertiary); margin-bottom: 8px;">1. Include Typeahead.js:</div>
                <code style="color: var(--accent);">
                    &lt;script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"&gt;&lt;/script&gt;
                </code>
            </div>

            <div class="code-block">
                <div style="color: var(--text-tertiary); margin-bottom: 8px; margin-top: 16px;">2. Initialize Typeahead:</div>
                <code style="color: var(--success);">
                    $('#searchInput').typeahead({<br>
                    &nbsp;&nbsp;hint: true,<br>
                    &nbsp;&nbsp;highlight: true,<br>
                    &nbsp;&nbsp;minLength: 1<br>
                    }, {<br>
                    &nbsp;&nbsp;name: 'countries',<br>
                    &nbsp;&nbsp;source: substringMatcher(countries)<br>
                    });
                </code>
            </div>

            <div class="code-block">
                <div style="color: var(--text-tertiary); margin-bottom: 8px; margin-top: 16px;">3. AJAX Data Source:</div>
                <code style="color: var(--warning);">
                    $('#searchInput').typeahead(null, {<br>
                    &nbsp;&nbsp;source: function(query, syncResults, asyncResults) {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;$.ajax({<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;url: '/api/search',<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data: { q: query },<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;success: function(data) {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asyncResults(data);<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;});<br>
                    &nbsp;&nbsp;}<br>
                    });
                </code>
            </div>

            <div class="code-block">
                <div style="color: var(--text-tertiary); margin-bottom: 8px; margin-top: 16px;">4. Custom Template:</div>
                <code style="color: var(--info);">
                    $('#searchInput').typeahead(null, {<br>
                    &nbsp;&nbsp;display: 'name',<br>
                    &nbsp;&nbsp;templates: {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;empty: '&lt;div class="empty"&gt;No results&lt;/div&gt;',<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;suggestion: function(data) {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return '&lt;div&gt;' + data.name + '&lt;/div&gt;';<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
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
                        <span><strong>Typeahead.js</strong> - Twitter's implementation</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>Autocomplete.js</strong> - Lightweight, modern</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>Choices.js</strong> - Select + search</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>Custom Solution</strong> - Full control</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
