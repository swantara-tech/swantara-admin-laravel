@extends('layouts.app')

@section('title', 'Datetimepicker')

@push('styles')
<style>
    /* Flatpickr custom styling to match DSGT theme */
    .flatpickr-calendar {
        z-index: 1060 !important;
        box-shadow: 0 4px 20px rgba(0,0,0,0.15) !important;
        border: 1px solid var(--border-color, #e0e0e0) !important;
        border-radius: 8px !important;
    }
    
    .flatpickr-day.selected {
        background: var(--accent, #0078d4) !important;
        border-color: var(--accent, #0078d4) !important;
    }
    
    .flatpickr-day.selected:hover {
        background: var(--accent-dark, #005a9e) !important;
    }
    
    .flatpickr-day.today {
        border-color: var(--accent, #0078d4) !important;
    }
    
    .flatpickr-current-month .flatpickr-monthDropdown-months,
    .flatpickr-current-month input.cur-year {
        font-weight: 600 !important;
    }
    
    .flatpickr-time input {
        color: var(--text-primary, #333) !important;
    }
</style>
@endpush

@push('scripts')
<script>
$(document).ready(function() {
    // Initialize all flatpickr instances
    $('.dsgt-flatpickr').each(function() {
        const $input = $(this);
        const config = {
            locale: 'id',
            dateFormat: 'd/m/Y',
            allowInput: true,
            disableMobile: true
        };
        
        // Check if time picker is enabled
        if ($input.data('show-time') === true || $input.data('enable-time')) {
            config.enableTime = true;
            config.time_24hr = true;
            config.dateFormat = 'd/m/Y H:i';
            
            if ($input.data('initial-time')) {
                config.defaultDate = $input.val() || new Date();
            }
        }
        
        // Min/Max dates
        if ($input.data('min-date')) {
            config.minDate = $input.data('min-date');
        }
        if ($input.data('max-date')) {
            config.maxDate = $input.data('max-date');
        }
        
        // Week start (Monday = 1)
        if ($input.data('week-start') === 1) {
            config.locale = 'id'; // Indonesian locale already starts on Monday
        }
        
        $input.flatpickr(config);
    });
    
    // Inline calendars
    $('.dsgt-flatpickr-inline').each(function() {
        const $container = $(this);
        const config = {
            inline: true,
            locale: 'id',
            dateFormat: 'd/m/Y',
            disableMobile: true
        };
        
        if ($container.data('show-time')) {
            config.enableTime = true;
            config.time_24hr = true;
        }
        
        if ($container.data('multi-select')) {
            config.mode = 'multiple';
        }
        
        if ($container.data('week-start') === 1) {
            config.locale = 'id';
        }
        
        $container.flatpickr(config);
    });
});
</script>
@endpush

@section('content')
<div class="page-header">
    <div>
        <h1>Datetimepicker</h1>
        <p>Date and time picker components menggunakan Flatpickr</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <a href="https://flatpickr.js.org/" target="_blank" class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </a>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card" style="margin-bottom: 24px; border-left: 4px solid var(--accent);">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">Flatpickr Date & Time Components</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">
                    Flatpickr adalah lightweight datepicker yang powerful dan customizable. 
                    Mendukung <strong>date picker</strong>, <strong>time picker</strong>, <strong>datetime picker</strong>, 
                    <strong>inline calendar</strong>, dan <strong>multi-select</strong>. Lebih ringan dan modern dibanding Metro UI.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Calendar Picker Section -->
<div class="dtp-section-title">
    <i class="fa-solid fa-calendar-days"></i>
    Date Picker <span class="badge badge-primary">Recommended</span>
</div>

<div class="datetimepicker-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-calendar"></i>
                </div>
                <div>
                    <h3>Basic Date Picker</h3>
                    <p class="card-subtitle">Input field with calendar popup</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dtp-example">
                <label class="dtp-label">
                    Default
                    <span class="dtp-pattern">class="dsgt-flatpickr"</span>
                </label>
                <input type="text" class="dsgt-flatpickr" placeholder="Select date...">
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Basic date picker dengan format default (DD/MM/YYYY)
                </div>
            </div>

            <div class="dtp-example">
                <label class="dtp-label">
                    With Value
                    <span class="dtp-pattern">value="15/06/2026"</span>
                </label>
                <input type="text" class="dsgt-flatpickr" value="15/06/2026">
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Dengan initial value
                </div>
            </div>

            <div class="dtp-example">
                <label class="dtp-label">
                    Custom Format
                    <span class="dtp-pattern">data-date-format="d/m/Y"</span>
                </label>
                <input type="text" class="dsgt-flatpickr" 
                       data-date-format="d/m/Y" 
                       value="15/06/2026">
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Format: <code>DD/MM/YYYY</code>
                </div>
            </div>

            <div class="dtp-example">
                <label class="dtp-label">
                    With Clear Button
                    <span class="dtp-pattern">allowInput + wrap</span>
                </label>
                <div class="input-group">
                    <input type="text" class="dsgt-flatpickr" 
                           data-allow-clear="true"
                           data-date-format="D, d M Y"
                           value="01/07/2026"
                           placeholder="Select date...">
                    <button class="btn btn-outline-secondary" type="button" data-clear>
                        <i class="fa-solid fa-times"></i>
                    </button>
                </div>
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Dengan tombol clear & format: <code>DD, MMM YYYY</code>
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div>
                    <h3>Date + Time Picker</h3>
                    <p class="card-subtitle">Date and time selection</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dtp-example">
                <label class="dtp-label">
                    DateTime
                    <span class="dtp-pattern">data-show-time="true"</span>
                </label>
                <input type="text" class="dsgt-flatpickr" 
                       data-show-time="true"
                       data-date-format="d/m/Y H:i">
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Date picker dengan time selection (24-hour)
                </div>
            </div>

            <div class="dtp-example">
                <label class="dtp-label">
                    With Initial Time
                    <span class="dtp-pattern">value with time</span>
                </label>
                <input type="text" class="dsgt-flatpickr" 
                       data-show-time="true"
                       data-date-format="d/m/Y H:i"
                       value="15/06/2026 14:30">
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Dengan waktu awal 14:30
                </div>
            </div>

            <div class="dtp-example">
                <label class="dtp-label">
                    Min/Max Date
                    <span class="dtp-pattern">Restricted range</span>
                </label>
                <input type="text" class="dsgt-flatpickr" 
                       data-min-date="2026-01-01"
                       data-max-date="2026-12-31"
                       data-date-format="d/m/Y"
                       placeholder="Select date in 2026...">
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Hanya bisa pilih tanggal tahun 2026
                </div>
            </div>

            <div class="dtp-example">
                <label class="dtp-label">
                    Week Numbers
                    <span class="dtp-pattern">week-numbers="true"</span>
                </label>
                <input type="text" class="dsgt-flatpickr" 
                       data-week-numbers="true"
                       data-date-format="d/m/Y"
                       placeholder="Select date...">
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Dengan nomor minggu (minggu dimulai Senin)
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Inline Calendar Section -->
<div class="dtp-section-title">
    <i class="fa-solid fa-calendar"></i>
    Inline Calendar
</div>

<div class="datetimepicker-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-calendar"></i>
                </div>
                <div>
                    <h3>Basic Calendar</h3>
                    <p class="card-subtitle">Embedded calendar display</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dtp-example">
                <label class="dtp-label">
                    Default Calendar
                    <span class="dtp-pattern">class="dsgt-flatpickr-inline"</span>
                </label>
                <div class="dsgt-flatpickr-inline"></div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-calendar-check"></i>
                </div>
                <div>
                    <h3>Calendar with Time</h3>
                    <p class="card-subtitle">Inline calendar with time selection</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dtp-example">
                <label class="dtp-label">
                    With Time
                    <span class="dtp-pattern">data-show-time="true"</span>
                </label>
                <div class="dsgt-flatpickr-inline" 
                     data-show-time="true"
                     data-default-date="09:30"></div>
            </div>
        </div>
    </div>
</div>

<!-- Multi-Select & Wide Calendar -->
<div class="dtp-section-title">
    <i class="fa-solid fa-calendar-week"></i>
    Advanced Calendar
</div>

<div class="datetimepicker-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-list-check"></i>
                </div>
                <div>
                    <h3>Multi Select</h3>
                    <p class="card-subtitle">Select multiple dates</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dtp-example">
                <label class="dtp-label">
                    Multi-Select Calendar
                    <span class="dtp-pattern">data-multi-select="true"</span>
                </label>
                <div class="dsgt-flatpickr-inline" 
                     data-multi-select="true"
                     data-week-start="1"></div>
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Klik beberapa tanggal untuk multi-select
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-arrows-left-right"></i>
                </div>
                <div>
                    <h3>Week Numbers</h3>
                    <p class="card-subtitle">Calendar with week numbers</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dtp-example">
                <label class="dtp-label">
                    Week Numbers
                    <span class="dtp-pattern">data-week-numbers="true"</span>
                </label>
                <div class="dsgt-flatpickr-inline" 
                     data-week-numbers="true"
                     data-week-start="1"></div>
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Layout dengan nomor minggu
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Booking Form Example -->
<div class="dtp-section-title">
    <i class="fa-solid fa-clipboard-list"></i>
    Real-World Form Example
</div>

<div class="datetimepicker-grid full-width">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-hotel"></i>
                </div>
                <div>
                    <h3>Hotel Booking Form</h3>
                    <p class="card-subtitle">Contoh penggunaan di form nyata</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form style="max-width: 800px;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                    <div class="dtp-example">
                        <label class="dtp-label">Check-in Date & Time <span style="color: var(--danger);">*</span></label>
                        <input type="text" class="dsgt-flatpickr" 
                               data-show-time="true"
                               data-date-format="d/m/Y H:i"
                               data-min-date="2026-01-01"
                               id="checkin-date"
                               placeholder="Select check-in...">
                    </div>

                    <div class="dtp-example">
                        <label class="dtp-label">Check-out Date & Time <span style="color: var(--danger);">*</span></label>
                        <input type="text" class="dsgt-flatpickr" 
                               data-show-time="true"
                               data-date-format="d/m/Y H:i"
                               data-min-date="2026-01-01"
                               id="checkout-date"
                               placeholder="Select check-out...">
                    </div>
                </div>

                <div class="dtp-example" style="margin-bottom: 20px;">
                    <label class="dtp-label">Event Date & Time (Optional)</label>
                    <input type="text" class="dsgt-flatpickr" 
                           data-show-time="true"
                           data-date-format="d/m/Y H:i"
                           placeholder="Select event date...">
                    <div class="dtp-helper">
                        <i class="fa-solid fa-circle-info"></i>
                        Untuk layanan atau event terjadwal
                    </div>
                </div>

                <div class="divider"></div>

                <div style="display: flex; gap: 12px;">
                    <button type="submit" class="btn btn-primary" style="flex: 1;">
                        <i class="fa-solid fa-calendar-check"></i>
                        Book Now
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
<div class="dtp-section-title">
    <i class="fa-solid fa-code"></i>
    Implementation Guide
</div>

<div class="datetimepicker-grid full-width">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-code"></i>
                </div>
                <div>
                    <h3>Usage Examples</h3>
                    <p class="card-subtitle">How to implement Flatpickr date/time pickers</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="code-block">
                <div style="color: var(--text-tertiary); margin-bottom: 8px;">1. Date Picker (Input + Popup):</div>
                <code style="color: var(--accent);">
                    &lt;input type="text" class="dsgt-flatpickr"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-date-format="d/m/Y"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-min-date="2026-01-01"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-show-time="true"&gt;
                </code>
            </div>

            <div class="code-block">
                <div style="color: var(--text-tertiary); margin-bottom: 8px; margin-top: 16px;">2. Inline Calendar:</div>
                <code style="color: var(--info);">
                    &lt;div class="dsgt-flatpickr-inline"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-multi-select="true"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-show-time="true"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-week-numbers="true"&gt;&lt;/div&gt;
                </code>
            </div>

            <div class="code-block">
                <div style="color: var(--text-tertiary); margin-bottom: 8px; margin-top: 16px;">3. JavaScript API:</div>
                <code style="color: var(--text-primary);">
                    // Get/Set value<br>
                    const fp = $("#myPicker").flatpickr();<br>
                    fp.setDate('25/12/2026');<br>
                    const value = fp.selectedDates[0];
                </code>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <h4 style="font-size: 14px; margin-bottom: 12px;">Available Features:</h4>
                <ul class="feature-list">
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>dsgt-flatpickr</strong> - Input + calendar popup (recommended)</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>dsgt-flatpickr-inline</strong> - Inline embedded calendar</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>Time picker</strong> - 24-hour format with data-show-time="true"</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>Multi-select</strong> - Select multiple dates</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>Week numbers</strong> - Show ISO week numbers</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
