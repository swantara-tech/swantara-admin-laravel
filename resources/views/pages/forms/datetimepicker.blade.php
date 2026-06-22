@extends('layouts.app')

@section('title', 'Date & Time Picker')

@section('content')
<div class="dsgt-container-fluid">
    <!-- Page Header -->
    <div class="dsgt-row mb-4">
        <div class="dsgt-col-12">
            <div class="dsgt-page-header">
                <div>
                    <h1 class="dsgt-page-title">Date & Time Picker</h1>
                    <p class="dsgt-page-subtitle">Flatpickr - Lightweight and powerful date & time picker</p>
                </div>
                <a href="https://flatpickr.js.org/" target="_blank" class="btn btn-outline-primary">
                    <i class="fa-solid fa-book"></i> Documentation
                </a>
            </div>
        </div>
    </div>

    <!-- Info Alert -->
    <div class="dsgt-row mb-4">
        <div class="dsgt-col-12">
            <div class="alert alert-info d-flex align-items-start gap-3" role="alert" style="background: var(--bg-info); border: 1px solid var(--border-info); border-radius: var(--radius-lg); padding: 16px;">
                <i class="fa-solid fa-circle-info fa-lg" style="color: var(--info);"></i>
                <div>
                    <strong>Flatpickr</strong> is a lightweight, zero-dependency datetime picker. It's already included in the template - just add <code class="bg-light px-2 py-1 rounded">data-toggle="flatpickr"</code> to your input.
                </div>
            </div>
        </div>
    </div>

    <!-- Section 1: Basic Date Pickers -->
    <div class="section-title">
        <i class="fa-solid fa-calendar"></i>
        Basic Date Picker
    </div>

    <div class="dsgt-row g-4 mb-4">
        <!-- Simple Date Input -->
        <div class="dsgt-col-md-6">
            <div class="card" style="background: var(--surface); border: 1px solid var(--border-subtle); box-shadow: var(--shadow-card);">
                <div class="card-body">
                    <h5 class="card-title mb-3">Simple Date Input</h5>
                    <label class="form-label">Select Date</label>
                    <input type="text" class="form-control dsgt-flatpickr" data-toggle="flatpickr" placeholder="Select date...">
                    <small class="text-muted mt-2 d-block">Click to open calendar popup</small>
                </div>
            </div>
        </div>

        <!-- Date + Time Input -->
        <div class="dsgt-col-md-6">
            <div class="card" style="background: var(--surface); border: 1px solid var(--border-subtle); box-shadow: var(--shadow-card);">
                <div class="card-body">
                    <h5 class="card-title mb-3">Date & Time</h5>
                    <label class="form-label">Select Date & Time</label>
                    <input type="text" class="form-control dsgt-flatpickr" data-toggle="flatpickr" data-show-time="true" placeholder="Select date and time...">
                    <small class="text-muted mt-2 d-block">Includes 24-hour time selection</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 2: Inline Calendar -->
    <div class="section-title">
        <i class="fa-solid fa-calendar-week"></i>
        Inline Calendar
    </div>

    <div class="dsgt-row g-4 mb-4">
        <!-- Simple Inline Calendar -->
        <div class="dsgt-col-md-6">
            <div class="card" style="background: var(--surface); border: 1px solid var(--border-subtle); box-shadow: var(--shadow-card);">
                <div class="card-body">
                    <h5 class="card-title mb-3">Simple Inline Calendar</h5>
                    <div id="inline-calendar-1"></div>
                    <div class="mt-3">
                        <strong>Selected:</strong> <span id="inline-date-1" class="text-primary">None</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Inline Calendar with Display -->
        <div class="dsgt-col-md-6">
            <div class="card" style="background: var(--surface); border: 1px solid var(--border-subtle); box-shadow: var(--shadow-card);">
                <div class="card-body">
                    <h5 class="card-title mb-3">Calendar with Input</h5>
                    <div id="inline-calendar-2" class="mb-3"></div>
                    <label class="form-label">Hidden Input</label>
                    <input type="text" class="form-control" id="inline-input-2" readonly placeholder="Select from calendar above...">
                </div>
            </div>
        </div>
    </div>

    <!-- Section 3: Advanced Features -->
    <div class="section-title">
        <i class="fa-solid fa-sliders"></i>
        Advanced Features
    </div>

    <div class="dsgt-row g-4 mb-4">
        <!-- Date Range -->
        <div class="dsgt-col-md-6">
            <div class="card" style="background: var(--surface); border: 1px solid var(--border-subtle); box-shadow: var(--shadow-card);">
                <div class="card-body">
                    <h5 class="card-title mb-3">Date Range</h5>
                    <label class="form-label">Select Range</label>
                    <input type="text" class="form-control dsgt-flatpickr" data-toggle="flatpickr" data-mode="range" placeholder="Select start and end date...">
                    <small class="text-muted mt-2 d-block">Click two dates to select range</small>
                </div>
            </div>
        </div>

        <!-- Multiple Dates -->
        <div class="dsgt-col-md-6">
            <div class="card" style="background: var(--surface); border: 1px solid var(--border-subtle); box-shadow: var(--shadow-card);">
                <div class="card-body">
                    <h5 class="card-title mb-3">Multiple Dates</h5>
                    <label class="form-label">Select Multiple</label>
                    <input type="text" class="form-control dsgt-flatpickr" data-toggle="flatpickr" data-mode="multiple" placeholder="Select multiple dates...">
                    <small class="text-muted mt-2 d-block">Hold Ctrl/Cmd to select multiple</small>
                </div>
            </div>
        </div>

        <!-- Min/Max Dates -->
        <div class="dsgt-col-md-6">
            <div class="card" style="background: var(--surface); border: 1px solid var(--border-subtle); box-shadow: var(--shadow-card);">
                <div class="card-body">
                    <h5 class="card-title mb-3">Min & Max Dates</h5>
                    <label class="form-label">Restricted Range</label>
                    <input type="text" class="form-control dsgt-flatpickr" data-toggle="flatpickr" data-min-date="today" data-max-date="+30" placeholder="Next 30 days only...">
                    <small class="text-muted mt-2 d-block">Limited to next 30 days from today</small>
                </div>
            </div>
        </div>

        <!-- Week Numbers -->
        <div class="dsgt-col-md-6">
            <div class="card" style="background: var(--surface); border: 1px solid var(--border-subtle); box-shadow: var(--shadow-card);">
                <div class="card-body">
                    <h5 class="card-title mb-3">Week Numbers</h5>
                    <label class="form-label">Show Week Numbers</label>
                    <input type="text" class="form-control dsgt-flatpickr" data-toggle="flatpickr" data-week-numbers="true" placeholder="Select date...">
                    <small class="text-muted mt-2 d-block">Displays ISO week numbers on left</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 4: Real-World Example -->
    <div class="section-title">
        <i class="fa-solid fa-hotel"></i>
        Real-World Example: Hotel Booking
    </div>

    <div class="dsgt-row g-4 mb-4">
        <div class="dsgt-col-12">
            <div class="card" style="background: var(--surface); border: 1px solid var(--border-subtle); box-shadow: var(--shadow-card);">
                <div class="card-body">
                    <h5 class="card-title mb-4">Book a Room</h5>

                    <div class="dsgt-row g-3">
                        <div class="dsgt-col-md-5">
                            <label class="form-label">Check-in Date & Time</label>
                            <input type="text" class="form-control" id="checkin-date" placeholder="Select check-in...">
                        </div>

                        <div class="dsgt-col-md-5">
                            <label class="form-label">Check-out Date & Time</label>
                            <input type="text" class="form-control" id="checkout-date" placeholder="Select check-out...">
                        </div>

                        <div class="dsgt-col-md-2 d-flex align-items-end">
                            <button class="btn btn-primary w-100" onclick="bookRoom()">
                                <i class="fa-solid fa-check"></i> Book
                            </button>
                        </div>
                    </div>

                    <div class="mt-3">
                        <div class="dsgt-row g-2">
                            <div class="dsgt-col-md-6">
                                <div class="p-3 rounded" style="background: var(--bg-secondary); border: 1px solid var(--border-subtle);">
                                    <strong>Check-in:</strong> <span id="display-checkin" class="text-primary">-</span>
                                </div>
                            </div>
                            <div class="dsgt-col-md-6">
                                <div class="p-3 rounded" style="background: var(--bg-secondary); border: 1px solid var(--border-subtle);">
                                    <strong>Check-out:</strong> <span id="display-checkout" class="text-primary">-</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <small class="text-muted mt-3 d-block">
                        <i class="fa-solid fa-info-circle"></i> Check-out must be at least 1 day after check-in
                    </small>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 5: Implementation Guide -->
    <div class="section-title">
        <i class="fa-solid fa-code"></i>
        Implementation Guide
    </div>

    <div class="dsgt-row g-4 mb-4">
        <div class="dsgt-col-12">
            <div class="card" style="background: var(--surface); border: 1px solid var(--border-subtle); box-shadow: var(--shadow-card);">
                <div class="card-body">
                    <h5 class="card-title mb-3">Quick Start</h5>

                    <h6 class="mt-4">1. Basic Date Input</h6>
                    <pre class="bg-dark p-3 rounded" style="color: #e5e7eb !important;"><code>&lt;input type="text" class="form-control" data-toggle="flatpickr" placeholder="Select date..."&gt;</code></pre>

                    <h6 class="mt-4">2. Enable Time Picker</h6>
                    <pre class="bg-dark p-3 rounded" style="color: #e5e7eb !important;"><code>&lt;input type="text" class="form-control" data-toggle="flatpickr"
       data-show-time="true"
       placeholder="Select date and time..."&gt;</code></pre>

                    <h6 class="mt-4">3. Date Range Selection</h6>
                    <pre class="bg-dark p-3 rounded" style="color: #e5e7eb !important;"><code>&lt;input type="text" class="form-control" data-toggle="flatpickr"
       data-mode="range"
       placeholder="Select range..."&gt;</code></pre>

                    <h6 class="mt-4">4. Set Min/Max Dates</h6>
                    <pre class="bg-dark p-3 rounded" style="color: #e5e7eb !important;"><code>&lt;input type="text" class="form-control" data-toggle="flatpickr"
       data-min-date="today"
       data-max-date="+30"
       placeholder="Next 30 days..."&gt;</code></pre>

                    <h6 class="mt-4">Available Data Attributes</h6>
                    <ul class="mt-2">
                        <li><code>data-toggle="flatpickr"</code> - Initialize Flatpickr</li>
                        <li><code>data-show-time="true"</code> - Enable time picker (24h format)</li>
                        <li><code>data-mode="range|multiple"</code> - Selection mode</li>
                        <li><code>data-min-date</code> - Minimum selectable date (e.g., "today", "+7")</li>
                        <li><code>data-max-date</code> - Maximum selectable date (e.g., "+30", "2026-12-31")</li>
                        <li><code>data-week-numbers="true"</code> - Show ISO week numbers</li>
                        <li><code>data-date-format</code> - Custom format (e.g., "Y-m-d H:i")</li>
                        <li><code>data-allow-clear</code> - Enable clear button</li>
                    </ul>

                    <h6 class="mt-4">Features</h6>
                    <div class="dsgt-row g-2 mt-2">
                        <div class="dsgt-col-md-4">
                            <div class="p-2 rounded" style="background: var(--bg-secondary);">
                                <i class="fa-solid fa-check text-success"></i> Zero dependencies
                            </div>
                        </div>
                        <div class="dsgt-col-md-4">
                            <div class="p-2 rounded" style="background: var(--bg-secondary);">
                                <i class="fa-solid fa-check text-success"></i> Lightweight (6KB gzipped)
                            </div>
                        </div>
                        <div class="dsgt-col-md-4">
                            <div class="p-2 rounded" style="background: var(--bg-secondary);">
                                <i class="fa-solid fa-check text-success"></i> Mobile-friendly
                            </div>
                        </div>
                        <div class="dsgt-col-md-4">
                            <div class="p-2 rounded" style="background: var(--bg-secondary);">
                                <i class="fa-solid fa-check text-success"></i> Localization support
                            </div>
                        </div>
                        <div class="dsgt-col-md-4">
                            <div class="p-2 rounded" style="background: var(--bg-secondary);">
                                <i class="fa-solid fa-check text-success"></i> Inline calendar mode
                            </div>
                        </div>
                        <div class="dsgt-col-md-4">
                            <div class="p-2 rounded" style="background: var(--bg-secondary);">
                                <i class="fa-solid fa-check text-success"></i> Custom date formats
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/flatpickr/flatpickr.min.css') }}">
<style>
/* ============================================================
   FLATPICKR CUSTOM THEME — DSGT Metro Template
   Fix: overflow + positioning issue
   ============================================================ */

/* Override overflow pada container untuk flatpickr */
.dsgt-container-fluid,
.dsgt-row,
.dsgt-col-12,
.dsgt-col-md-6,
.dsgt-col-md-5,
.dsgt-col-md-2,
.card,
.card-body {
    overflow: visible !important;
}

/* 1. KONTAINER UTAMA */
.flatpickr-calendar {
    background: var(--surface, #fff) !important;
    border: 1px solid #e5e7eb !important;
    border-radius: 10px !important;
    box-shadow: 0 8px 24px rgba(0,0,0,0.12), 0 2px 8px rgba(0,0,0,0.06) !important;
    padding: 0 !important;
    font-size: 13px !important;
    font-family: inherit !important;
    width: 280px !important;
    z-index: 99999 !important;
    overflow: hidden !important;
    animation: fpFadeInDown 0.2s ease !important;
}

/* Kalau ada week numbers */
.flatpickr-calendar.hasWeeks {
    width: 322px !important;
}

/* Popup state */
.flatpickr-calendar.open {
    display: inline-block !important;
    opacity: 1 !important;
    visibility: visible !important;
}

/* Inline state */
.flatpickr-calendar.inline {
    display: block !important;
    position: relative !important;
    top: 0 !important;
    opacity: 1 !important;
    visibility: visible !important;
    box-shadow: none !important;
    border: 1px solid #e5e7eb !important;
    width: 100% !important;
    max-width: 340px !important;
}

/* Sembunyikan arrow/caret */
.flatpickr-calendar::before,
.flatpickr-calendar::after {
    display: none !important;
}

/* 2. HEADER BULAN */
.flatpickr-months {
    display: flex !important;
    align-items: center !important;
    background: #1a73e8 !important;
    color: #fff !important;
    padding: 0 !important;
    border-radius: 10px 10px 0 0 !important;
    height: 46px !important;
    position: relative !important;
}

.flatpickr-months .flatpickr-month {
    background: transparent !important;
    color: #fff !important;
    fill: #fff !important;
    height: 46px !important;
    flex: 1 !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    overflow: visible !important;
}

.flatpickr-months .flatpickr-prev-month,
.flatpickr-months .flatpickr-next-month {
    color: #fff !important;
    fill: #fff !important;
    padding: 0 14px !important;
    cursor: pointer !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    height: 46px !important;
    top: 0 !important;
    position: static !important;
    border-radius: 0 !important;
    transition: background 0.15s !important;
    text-decoration: none !important;
}

.flatpickr-months .flatpickr-prev-month:hover,
.flatpickr-months .flatpickr-next-month:hover {
    background: rgba(255,255,255,0.15) !important;
    color: #fff !important;
}

.flatpickr-months .flatpickr-prev-month.flatpickr-prev-month { border-radius: 10px 0 0 0 !important; }
.flatpickr-months .flatpickr-next-month.flatpickr-next-month { border-radius: 0 10px 0 0 !important; }

.flatpickr-months .flatpickr-prev-month svg,
.flatpickr-months .flatpickr-next-month svg {
    width: 14px !important;
    height: 14px !important;
    fill: #fff !important;
}

.flatpickr-months .flatpickr-prev-month svg path,
.flatpickr-months .flatpickr-next-month svg path {
    fill: #fff !important;
}

/* Month & Year Label */
.flatpickr-current-month {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 2px !important;
    font-size: 15px !important;
    font-weight: 600 !important;
    color: #fff !important;
    padding: 0 !important;
    position: static !important;
    width: auto !important;
    height: auto !important;
    left: auto !important;
}

.flatpickr-current-month .flatpickr-monthDropdown-months {
    background: transparent !important;
    border: none !important;
    color: #fff !important;
    font-size: 15px !important;
    font-weight: 600 !important;
    font-family: inherit !important;
    cursor: pointer !important;
    padding: 0 2px !important;
    margin: 0 !important;
    outline: none !important;
    appearance: none !important;
    -webkit-appearance: none !important;
}

.flatpickr-current-month .flatpickr-monthDropdown-months:focus {
    outline: none !important;
}

.flatpickr-current-month .flatpickr-monthDropdown-month {
    color: #374151 !important;
    background: #fff !important;
}

.flatpickr-current-month .numInputWrapper {
    display: inline-flex !important;
    align-items: center !important;
    width: auto !important;
}

.flatpickr-current-month input.cur-year {
    background: transparent !important;
    border: none !important;
    color: #fff !important;
    font-size: 15px !important;
    font-weight: 600 !important;
    font-family: inherit !important;
    padding: 0 20px 0 4px !important; /* Right padding for arrows */
    margin: 0 !important;
    width: 65px !important; /* Sufficient width for year + arrows */
    box-sizing: border-box !important;
    outline: none !important;
    cursor: text !important;
    appearance: textfield !important;
    -moz-appearance: textfield !important;
    -webkit-appearance: none !important;
}

/* Tampilkan spinner arrows year dengan positioning yang benar */
.numInputWrapper span {
    position: absolute !important;
    right: 2px !important;
    width: 14px !important;
    padding: 0 4px 0 2px !important;
    height: 50% !important;
    line-height: 50% !important;
    opacity: 1 !important; /* Make arrows visible */
    display: block !important;
    cursor: pointer !important;
    border: 1px solid rgba(255, 255, 255, .3) !important;
}

.numInputWrapper span:hover {
    background: rgba(255, 255, 255, .2) !important;
}

.numInputWrapper span.arrowUp {
    top: 0 !important;
    border-bottom: 0 !important;
}

.numInputWrapper span.arrowUp:after {
    border-left: 4px solid transparent !important;
    border-right: 4px solid transparent !important;
    border-bottom: 4px solid #fff !important; /* White arrow for indigo header */
    top: 26% !important;
}

.numInputWrapper span.arrowDown {
    top: 50% !important;
}

.numInputWrapper span.arrowDown:after {
    border-left: 4px solid transparent !important;
    border-right: 4px solid transparent !important;
    border-top: 4px solid #fff !important; /* White arrow for indigo header */
    top: 40% !important;
}

.numInputWrapper:hover {
    background: rgba(255, 255, 255, .1) !important;
}

/* 3. WEEKDAYS HEADER */
.flatpickr-weekdays {
    background: #f8fafc !important;
    border-bottom: 1px solid #e5e7eb !important;
    height: 32px !important;
    display: flex !important;
    align-items: center !important;
    padding: 0 !important;
    width: 100% !important;
}

.flatpickr-weekdays .flatpickr-weekdaycontainer {
    display: flex !important;
    flex: 1 !important;
    width: 100% !important;
}

span.flatpickr-weekday {
    flex: 1 !important;
    height: 32px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    color: #6b7280 !important;
    font-weight: 600 !important;
    font-size: 11px !important;
    text-transform: uppercase !important;
    letter-spacing: 0.05em !important;
    cursor: default !important;
    background: transparent !important;
    margin: 0 !important;
}

/* 4. INNER CONTAINER */
.flatpickr-innerContainer {
    display: flex !important;
    background: #fff !important;
    width: 100% !important;
    border: none !important;
}

.flatpickr-rContainer {
    flex: 1 !important;
    padding: 0 !important;
    width: 100% !important;
    display: block !important;
}

/* 5. WEEK NUMBERS COLUMN */
.flatpickr-weekwrapper {
    width: 42px !important;
    min-width: 42px !important;
    border-right: 1px solid #e5e7eb !important;
    background: #f8fafc !important;
    float: none !important;
    display: flex !important;
    flex-direction: column !important;
}

.flatpickr-weekwrapper .flatpickr-weekday {
    height: 32px !important;
    width: 42px !important;
    background: #f8fafc !important;
    border-bottom: 1px solid #e5e7eb !important;
    color: #6b7280 !important;
    font-weight: 600 !important;
    font-size: 11px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    text-transform: uppercase !important;
    letter-spacing: 0.05em !important;
}

.flatpickr-weekwrapper .flatpickr-weeks {
    padding: 0 !important;
    box-shadow: none !important;
}

.flatpickr-weekwrapper span.flatpickr-day {
    width: 42px !important;
    max-width: 42px !important;
    min-width: 42px !important;
    height: 38px !important;
    max-height: 38px !important;
    line-height: 38px !important;
    color: #9ca3af !important;
    font-size: 11px !important;
    font-weight: 500 !important;
    border-radius: 0 !important;
    border: none !important;
    border-bottom: 1px solid #f3f4f6 !important;
    background: transparent !important;
    cursor: default !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    box-shadow: none !important;
}

.flatpickr-weekwrapper span.flatpickr-day:hover {
    background: transparent !important;
    cursor: default !important;
}

/* 6. DAYS GRID */
.flatpickr-days {
    width: 100% !important;
    overflow: hidden !important;
    display: flex !important;
}

.dayContainer {
    width: 100% !important;
    min-width: unset !important;
    max-width: unset !important;
    display: flex !important;
    flex-wrap: wrap !important;
    padding: 0 !important;
    opacity: 1 !important;
    transform: none !important;
}

.flatpickr-day {
    flex: 1 0 14.2857% !important;
    max-width: 14.2857% !important;
    height: 38px !important;
    max-height: 38px !important;
    line-height: 38px !important;
    margin: 0 !important;
    border: none !important;
    border-bottom: 1px solid #f3f4f6 !important;
    border-radius: 0 !important;
    background: transparent !important;
    color: #374151 !important;
    cursor: pointer !important;
    font-size: 13px !important;
    font-weight: 400 !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    transition: background 0.12s, color 0.12s !important;
    box-sizing: border-box !important;
    position: relative !important;
}

/* Hover state */
.flatpickr-day:hover,
.flatpickr-day:focus {
    background: #eff6ff !important;
    color: #1a73e8 !important;
    outline: none !important;
    z-index: 2 !important;
}

/* Today */
.flatpickr-day.today {
    font-weight: 700 !important;
    color: #1a73e8 !important;
    background: #eff6ff !important;
}

.flatpickr-day.today::after {
    content: '' !important;
    position: absolute !important;
    bottom: 4px !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    width: 4px !important;
    height: 4px !important;
    border-radius: 50% !important;
    background: #1a73e8 !important;
}

.flatpickr-day.today:hover,
.flatpickr-day.today:focus {
    background: #dbeafe !important;
    color: #1a73e8 !important;
}

/* Selected */
.flatpickr-day.selected,
.flatpickr-day.selected:hover,
.flatpickr-day.selected:focus,
.flatpickr-day.selected.today,
.flatpickr-day.selected.today:hover {
    background: #1a73e8 !important;
    color: #fff !important;
    border-radius: 6px !important;
    font-weight: 600 !important;
    border-bottom-color: transparent !important;
    z-index: 3 !important;
}

.flatpickr-day.selected::after {
    display: none !important;
}

/* Range - Start */
.flatpickr-day.startRange,
.flatpickr-day.startRange:hover,
.flatpickr-day.startRange:focus {
    background: #1a73e8 !important;
    color: #fff !important;
    border-radius: 6px 0 0 6px !important;
    border-bottom-color: transparent !important;
    z-index: 3 !important;
}

/* Range - End */
.flatpickr-day.endRange,
.flatpickr-day.endRange:hover,
.flatpickr-day.endRange:focus {
    background: #1a73e8 !important;
    color: #fff !important;
    border-radius: 0 6px 6px 0 !important;
    border-bottom-color: transparent !important;
    z-index: 3 !important;
}

/* Range - Start & End same day */
.flatpickr-day.startRange.endRange,
.flatpickr-day.startRange.endRange:hover {
    border-radius: 6px !important;
}

/* Range - Middle */
.flatpickr-day.inRange,
.flatpickr-day.inRange:hover {
    background: #dbeafe !important;
    color: #1e40af !important;
    border-radius: 0 !important;
    border-bottom-color: transparent !important;
    box-shadow: none !important;
    z-index: 2 !important;
}

/* Prev/Next month days — visible tapi lebih redup */
.flatpickr-day.prevMonthDay,
.flatpickr-day.nextMonthDay {
    color: #c4c9d4 !important;
    background: transparent !important;
    cursor: default !important;
    border-bottom-color: #f3f4f6 !important;
}

.flatpickr-day.prevMonthDay:hover,
.flatpickr-day.nextMonthDay:hover {
    background: transparent !important;
    color: #c4c9d4 !important;
}

/* Disabled */
.flatpickr-day.flatpickr-disabled,
.flatpickr-day.flatpickr-disabled:hover {
    color: #d1d5db !important;
    background: transparent !important;
    cursor: not-allowed !important;
    text-decoration: line-through !important;
    opacity: 0.5 !important;
}

/* 7. TIME PICKER */
.flatpickr-time {
    display: flex !important;
    align-items: center !important;
    height: 44px !important;
    max-height: 44px !important;
    background: #f8fafc !important;
    border-top: 1px solid #e5e7eb !important;
    overflow: hidden !important;
}

.flatpickr-calendar.hasTime .flatpickr-time {
    height: 44px !important;
}

.flatpickr-time .numInputWrapper {
    flex: 1 !important;
    height: 44px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
}

.flatpickr-time input {
    background: transparent !important;
    border: none !important;
    border-radius: 0 !important;
    text-align: center !important;
    margin: 0 !important;
    padding: 0 !important;
    height: 44px !important;
    line-height: 44px !important;
    color: #374151 !important;
    font-size: 15px !important;
    font-weight: 600 !important;
    font-family: inherit !important;
    width: 100% !important;
    outline: none !important;
    box-shadow: none !important;
    appearance: textfield !important;
    -moz-appearance: textfield !important;
    cursor: pointer !important;
}

.flatpickr-time input:focus {
    background: #eff6ff !important;
    color: #1a73e8 !important;
}

.flatpickr-time .flatpickr-time-separator {
    color: #6b7280 !important;
    font-weight: 700 !important;
    font-size: 16px !important;
    line-height: 44px !important;
    user-select: none !important;
    width: 10px !important;
    text-align: center !important;
    flex-shrink: 0 !important;
}

.flatpickr-time .flatpickr-am-pm {
    color: #374151 !important;
    font-size: 13px !important;
    font-weight: 600 !important;
    cursor: pointer !important;
    padding: 0 8px !important;
    line-height: 44px !important;
    height: 44px !important;
    user-select: none !important;
    flex-shrink: 0 !important;
}

.flatpickr-time input:hover,
.flatpickr-time .flatpickr-am-pm:hover {
    background: #eff6ff !important;
    color: #1a73e8 !important;
}

/* 8. INPUT FIELD */
.flatpickr-input {
    cursor: pointer !important;
}

.flatpickr-input[readonly] {
    cursor: pointer !important;
    background-color: var(--bg-secondary, #f8fafc) !important;
}

/* 9. INLINE CALENDAR WRAPPER */
#inline-calendar-1,
#inline-calendar-2 {
    display: flex;
    justify-content: center;
}

#inline-calendar-1 .flatpickr-calendar,
#inline-calendar-2 .flatpickr-calendar {
    width: 100% !important;
    max-width: 340px !important;
}

/* 10. SECTION TITLE */
.section-title {
    padding: 12px 16px;
    background: var(--surface);
    border: 1px solid var(--border-subtle);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-card);
    margin: 32px 0 16px 0;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 16px;
    font-weight: 600;
    color: var(--text-primary);
}

.section-title:first-child {
    margin-top: 0;
}

/* 11. ANIMATION */
@keyframes fpFadeInDown {
    from {
        opacity: 0;
        transform: translateY(-8px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
@endpush

@push('scripts')
<script src="{{ asset('assets/plugins/flatpickr/flatpickr.min.js') }}"></script>
<script>
$(document).ready(function () {

    // Set Indonesian locale
    if (typeof flatpickr !== 'undefined' && flatpickr.l10ns && flatpickr.l10ns.id) {
        flatpickr.localize(flatpickr.l10ns.id);
    }

    // Helper: update posisi kalender saat scroll dengan smooth animation
    function repositionOnScroll(instance) {
        let ticking = false;
        let lastScrollY = 0;
        
        function handler() {
            lastScrollY = window.scrollY;
            
            // RequestAnimationFrame untuk smooth 60fps
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    if (instance.isOpen) {
                        // Tambahkan CSS transition untuk smooth movement
                        const calendar = instance.calendarContainer;
                        if (calendar) {
                            calendar.style.transition = 'top 0.1s ease-out, left 0.1s ease-out';
                        }
                        
                        instance._positionCalendar();
                        
                        // Remove transition setelah selesai (biar tidak interfere dengan interaksi lain)
                        setTimeout(() => {
                            if (calendar) {
                                calendar.style.transition = '';
                            }
                        }, 100);
                    }
                    ticking = false;
                });
                
                ticking = true;
            }
        }
        
        // Listen scroll dengan capture phase
        window.addEventListener('scroll', handler, { passive: true, capture: true });
        
        // Cleanup kalau kalender ditutup manual
        instance.config.onClose.push(function () {
            window.removeEventListener('scroll', handler, { capture: true });
        });
    }

    // ─────────────────────────────────────────────────────────────
    // 1. Basic Date Pickers — LAZY INIT (render saat first click)
    // ─────────────────────────────────────────────────────────────
    $('[data-toggle="flatpickr"]').each(function () {
        const $input = $(this);

        // Build config object (tapi JANGAN init sekarang)
        function buildConfig() {
            const config = {
                locale: 'id',
                dateFormat: 'd/m/Y',
                allowInput: false,
                disableMobile: true,
                static: false,  // Calendar akan di-render ke body
                onOpen: function (selectedDates, dateStr, instance) {
                    repositionOnScroll(instance);  // Update posisi saat scroll
                },
            };

            // Aktifkan time picker
            if ($input.data('show-time')) {
                config.enableTime  = true;
                config.time_24hr   = true;
                config.dateFormat  = 'd/m/Y H:i';
            }

            // Mode: range / multiple
            if ($input.data('mode')) {
                config.mode = $input.data('mode');
            }

            // Min / Max date
            if ($input.data('min-date')) config.minDate = $input.data('min-date');
            if ($input.data('max-date')) config.maxDate = $input.data('max-date');

            // Week numbers
            if ($input.data('week-numbers')) config.weekNumbers = true;

            // Custom date format
            if ($input.data('date-format')) config.dateFormat = $input.data('date-format');

            return config;
        }

        // LAZY INIT: Hanya init saat first click/focus
        let fpInitialized = false;
        let fpInstance = null;

        function initFlatpickr() {
            if (fpInitialized) return fpInstance;
            
            fpInstance = $input.flatpickr(buildConfig());
            fpInitialized = true;
            
            // Auto-open setelah init
            setTimeout(() => fpInstance.open(), 0);
            
            return fpInstance;
        }

        // Trigger init saat click atau focus
        $input.on('click focus', function (e) {
            if (!fpInitialized) {
                e.preventDefault();
                initFlatpickr();
            }
        });

        // Clear button (opsional)
        if ($input.data('allow-clear')) {
            $input.siblings('[data-clear]').on('click', function () {
                if (fpInstance) fpInstance.clear();
            });
        }
    });

    // ─────────────────────────────────────────────────────────────
    // 2. Inline Calendar #1 — tidak perlu closeOnScroll (inline)
    // ─────────────────────────────────────────────────────────────
    if ($('#inline-calendar-1').length) {
        flatpickr('#inline-calendar-1', {
            inline: true,
            locale: 'id',
            dateFormat: 'd/m/Y',
            onChange: function (selectedDates, dateStr) {
                $('#inline-date-1').text(dateStr || 'None');
            }
        });
    }

    // ─────────────────────────────────────────────────────────────
    // 3. Inline Calendar #2
    // ─────────────────────────────────────────────────────────────
    if ($('#inline-calendar-2').length) {
        flatpickr('#inline-calendar-2', {
            inline: true,
            locale: 'id',
            dateFormat: 'd/m/Y',
            onChange: function (selectedDates, dateStr) {
                $('#inline-input-2').val(dateStr);
            }
        });
    }

    // ─────────────────────────────────────────────────────────────
    // 4. Hotel Booking — linked check-in & check-out (LAZY INIT)
    // ─────────────────────────────────────────────────────────────
    if ($('#checkin-date').length && $('#checkout-date').length) {

        let checkinFp = null;
        let checkoutFp = null;

        // LAZY INIT untuk check-in
        function initCheckin() {
            if (checkinFp) return;
            
            checkinFp = flatpickr('#checkin-date', {
                locale: 'id',
                dateFormat: 'd/m/Y H:i',
                enableTime: true,
                time_24hr: true,
                minDate: 'today',
                static: false,
                onOpen: function (selectedDates, dateStr, instance) {
                    repositionOnScroll(instance);  // Update posisi saat scroll
                },
                onChange: function (selectedDates) {
                    if (selectedDates.length > 0) {
                        // Set minimum checkout = checkin + 1 hari
                        const minCheckout = new Date(selectedDates[0]);
                        minCheckout.setDate(minCheckout.getDate() + 1);
                        if (checkoutFp) checkoutFp.set('minDate', minCheckout);

                        $('#display-checkin').text(
                            selectedDates[0].toLocaleString('id-ID', {
                                day: '2-digit', month: 'long', year: 'numeric',
                                hour: '2-digit', minute: '2-digit'
                            })
                        );
                    }
                }
            });
        }

        // LAZY INIT untuk check-out
        function initCheckout() {
            if (checkoutFp) return;
            
            checkoutFp = flatpickr('#checkout-date', {
                locale: 'id',
                dateFormat: 'd/m/Y H:i',
                enableTime: true,
                time_24hr: true,
                minDate: new Date().fp_incr(1),
                static: false,
                onOpen: function (selectedDates, dateStr, instance) {
                    repositionOnScroll(instance);  // Update posisi saat scroll
                },
                onChange: function (selectedDates) {
                    if (selectedDates.length > 0) {
                        $('#display-checkout').text(
                            selectedDates[0].toLocaleString('id-ID', {
                                day: '2-digit', month: 'long', year: 'numeric',
                                hour: '2-digit', minute: '2-digit'
                            })
                        );
                    }
                }
            });
        }

        // Trigger lazy init
        $('#checkin-date').on('click focus', function (e) {
            if (!checkinFp) {
                e.preventDefault();
                initCheckin();
                setTimeout(() => checkinFp.open(), 0);
            }
        });

        $('#checkout-date').on('click focus', function (e) {
            if (!checkoutFp) {
                e.preventDefault();
                initCheckout();
                setTimeout(() => checkoutFp.open(), 0);
            }
        });
    }

});

// ─────────────────────────────────────────────────────────────
// Book Room function
// ─────────────────────────────────────────────────────────────
function bookRoom() {
    const checkin  = $('#checkin-date').val();
    const checkout = $('#checkout-date').val();

    if (!checkin || !checkout) {
        if (typeof MetroAdmin !== 'undefined' && MetroAdmin.showToast) {
            MetroAdmin.showToast('Pilih tanggal check-in dan check-out terlebih dahulu!', 'error');
        } else {
            alert('Pilih tanggal check-in dan check-out terlebih dahulu!');
        }
        return;
    }

    if (typeof MetroAdmin !== 'undefined' && MetroAdmin.showToast) {
        MetroAdmin.showToast('Kamar berhasil dipesan! ' + checkin + ' → ' + checkout, 'success');
    } else {
        alert('Kamar berhasil dipesan!\n' + checkin + ' → ' + checkout);
    }
}
</script>
@endpush