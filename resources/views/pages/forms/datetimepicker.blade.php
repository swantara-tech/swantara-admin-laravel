@extends('layouts.app')

@section('title', 'Datetimepicker')

@push('styles')
@endpush

@section('content')
<div class="page-header">
    <div>
        <h1>Datetimepicker</h1>
        <p>Date and time picker components dengan berbagai format dan preset</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-calendar-days"></i>
            <span>Try Picker</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card" style="margin-bottom: 24px; border-left: 4px solid var(--accent);">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">Date & Time Picker Libraries</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Popular libraries include <strong>Flatpickr</strong>, <strong>Bootstrap Datepicker</strong>, and native HTML5 <code>&lt;input type="date"&gt;</code>. Examples below show formatted outputs and configurations.</p>
            </div>
        </div>
    </div>
</div>

<!-- Date Pickers -->
<div class="dtp-section-title">
    <i class="fa-solid fa-calendar-days"></i>
    Date Pickers <span class="badge badge-primary">Essential</span>
</div>

<div class="datetimepicker-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-calendar"></i>
                </div>
                <div>
                    <h3>Single Date</h3>
                    <p class="card-subtitle">Date selection formats</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dtp-example">
                <label class="dtp-label">
                    Default Date
                    <span class="dtp-pattern">YYYY-MM-DD</span>
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-calendar-days"></i>
                    </span>
                    <input type="date" class="form-control" value="2026-05-31">
                </div>
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Format: <code>YYYY-MM-DD</code>
                </div>
            </div>

            <div class="dtp-example">
                <label class="dtp-label">
                    Date with Icon
                    <span class="dtp-pattern">DD/MM/YYYY</span>
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-calendar-check"></i>
                    </span>
                    <input type="text" class="form-control" value="31/05/2026" readonly>
                </div>
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Display: <code>DD/MM/YYYY</code>
                </div>
            </div>

            <div class="dtp-example">
                <label class="dtp-label">
                    Date Range Start
                    <span class="dtp-pattern">From Date</span>
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-calendar-plus"></i>
                    </span>
                    <input type="date" class="form-control" value="2026-01-01">
                </div>
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Range start date
                </div>
            </div>

            <div class="dtp-example">
                <label class="dtp-label">
                    Date Range End
                    <span class="dtp-pattern">To Date</span>
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-calendar-minus"></i>
                    </span>
                    <input type="date" class="form-control" value="2026-12-31">
                </div>
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Range end date
                </div>
            </div>

            <div class="divider"></div>

            <div class="date-display">
                <div class="date-display-label">Selected Date:</div>
                <div class="date-display-value">31 May 2026 (Sunday)</div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-calendar-week"></i>
                </div>
                <div>
                    <h3>Month & Year</h3>
                    <p class="card-subtitle">Month and year pickers</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dtp-example">
                <label class="dtp-label">
                    Month Picker
                    <span class="dtp-pattern">YYYY-MM</span>
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-calendar"></i>
                    </span>
                    <input type="month" class="form-control" value="2026-05">
                </div>
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Format: <code>YYYY-MM</code>
                </div>
            </div>

            <div class="dtp-example">
                <label class="dtp-label">
                    Year Picker
                    <span class="dtp-pattern">YYYY</span>
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-calendar-day"></i>
                    </span>
                    <input type="text" class="form-control" value="2026" readonly>
                </div>
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Format: <code>YYYY</code>
                </div>
            </div>

            <div class="dtp-example">
                <label class="dtp-label">
                    Week Picker
                    <span class="dtp-pattern">YYYY-W##</span>
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-calendar-week"></i>
                    </span>
                    <input type="week" class="form-control" value="2026-W22">
                </div>
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Format: <code>YYYY-W##</code>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <h4 style="font-size: 14px; margin-bottom: 12px;">Features:</h4>
                <ul class="feature-list">
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Native HTML5 date inputs</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Calendar popup interface</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Month/Year selection</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Week number support</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Time Pickers -->
<div class="dtp-section-title">
    <i class="fa-solid fa-clock"></i>
    Time Pickers
</div>

<div class="datetimepicker-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div>
                    <h3>Time Selection</h3>
                    <p class="card-subtitle">24-hour and 12-hour formats</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dtp-example">
                <label class="dtp-label">
                    24-Hour Format
                    <span class="dtp-pattern">HH:MM</span>
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-clock"></i>
                    </span>
                    <input type="time" class="form-control" value="14:30">
                </div>
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Format: <code>HH:MM</code> (24-hour)
                </div>
            </div>

            <div class="dtp-example">
                <label class="dtp-label">
                    12-Hour Format
                    <span class="dtp-pattern">HH:MM AM/PM</span>
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-sun"></i>
                    </span>
                    <input type="text" class="form-control" value="02:30 PM" readonly>
                </div>
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Format: <code>HH:MM AM/PM</code>
                </div>
            </div>

            <div class="dtp-example">
                <label class="dtp-label">
                    Time with Seconds
                    <span class="dtp-pattern">HH:MM:SS</span>
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-stopwatch"></i>
                    </span>
                    <input type="text" class="form-control" value="14:30:45" readonly>
                </div>
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Format: <code>HH:MM:SS</code>
                </div>
            </div>

            <div class="divider"></div>

            <div class="date-display">
                <div class="date-display-label">Current Time:</div>
                <div class="date-display-value">14:30:45 (2:30 PM)</div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-business-time"></i>
                </div>
                <div>
                    <h3>Time Range</h3>
                    <p class="card-subtitle">Start and end time</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dtp-example">
                <label class="dtp-label">
                    Start Time
                    <span class="dtp-pattern">From</span>
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-play"></i>
                    </span>
                    <input type="time" class="form-control" value="09:00">
                </div>
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Opening time
                </div>
            </div>

            <div class="dtp-example">
                <label class="dtp-label">
                    End Time
                    <span class="dtp-pattern">To</span>
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-stop"></i>
                    </span>
                    <input type="time" class="form-control" value="17:00">
                </div>
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Closing time
                </div>
            </div>

            <div class="dtp-example">
                <label class="dtp-label">
                    Duration
                </label>
                <div class="date-display">
                    <div class="date-display-label">Calculated Duration:</div>
                    <div class="date-display-value">8 hours (09:00 - 17:00)</div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <h4 style="font-size: 14px; margin-bottom: 12px;">Time Features:</h4>
                <ul class="feature-list">
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>24-hour format (00-23)</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>12-hour format (AM/PM)</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Seconds support</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Time range calculation</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- DateTime Combined -->
<div class="dtp-section-title">
    <i class="fa-solid fa-calendar-clock"></i>
    DateTime Combined <span class="badge badge-success">Popular</span>
</div>

<div class="datetimepicker-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div>
                    <h3>Date & Time</h3>
                    <p class="card-subtitle">Combined date-time selection</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dtp-example">
                <label class="dtp-label">
                    Event DateTime
                    <span class="dtp-pattern">DD/MM/YYYY HH:MM</span>
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-calendar-clock"></i>
                    </span>
                    <input type="datetime-local" class="form-control" value="2026-06-15T14:30">
                </div>
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Format: <code>DD/MM/YYYY HH:MM</code>
                </div>
            </div>

            <div class="dtp-example">
                <label class="dtp-label">
                    Meeting Schedule
                    <span class="dtp-pattern">From</span>
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-calendar-plus"></i>
                    </span>
                    <input type="datetime-local" class="form-control" value="2026-06-15T10:00">
                </div>
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Meeting start time
                </div>
            </div>

            <div class="dtp-example">
                <label class="dtp-label">
                    Meeting End
                    <span class="dtp-pattern">To</span>
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-calendar-minus"></i>
                    </span>
                    <input type="datetime-local" class="form-control" value="2026-06-15T12:00">
                </div>
                <div class="dtp-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Meeting end time
                </div>
            </div>

            <div class="divider"></div>

            <div class="date-display">
                <div class="date-display-label">Meeting Duration:</div>
                <div class="date-display-value">2 hours (10:00 - 12:00)</div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-hourglass-start"></i>
                </div>
                <div>
                    <h3>Date Range Picker</h3>
                    <p class="card-subtitle">Start and end date selection</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dtp-example">
                <label class="dtp-label">
                    Check-in Date
                    <span class="dtp-pattern">Arrival</span>
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-plane-arrival"></i>
                    </span>
                    <input type="date" class="form-control" value="2026-07-01">
                </div>
            </div>

            <div class="dtp-example">
                <label class="dtp-label">
                    Check-out Date
                    <span class="dtp-pattern">Departure</span>
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="fa-solid fa-plane-departure"></i>
                    </span>
                    <input type="date" class="form-control" value="2026-07-07">
                </div>
            </div>

            <div class="dtp-example">
                <label class="dtp-label">
                    Stay Duration
                </label>
                <div class="date-display">
                    <div class="date-display-label">Total Nights:</div>
                    <div class="date-display-value">6 nights (Jul 1 - Jul 7)</div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="preset-buttons">
                <button class="preset-btn">Today</button>
                <button class="preset-btn">Tomorrow</button>
                <button class="preset-btn">This Week</button>
                <button class="preset-btn">Next Week</button>
                <button class="preset-btn">This Month</button>
            </div>
        </div>
    </div>
</div>

<!-- Preset Ranges -->
<div class="dtp-section-title">
    <i class="fa-solid fa-bolt"></i>
    Preset Date Ranges
</div>

<div class="datetimepicker-grid full-width">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-list-check"></i>
                </div>
                <div>
                    <h3>Quick Select Presets</h3>
                    <p class="card-subtitle">One-click date range selection</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px;">
                <div style="padding: 12px; border: 1px solid var(--border); border-radius: var(--radius-md); cursor: pointer; transition: var(--transition-fast);" onmouseover="this.style.borderColor='var(--accent)'; this.style.background='var(--accent-light)'" onmouseout="this.style.borderColor='var(--border)'; this.style.background='transparent'">
                    <div style="font-weight: 600; font-size: 13px; margin-bottom: 4px;">📅 Today</div>
                    <div style="font-size: 11px; color: var(--text-tertiary);">May 31, 2026</div>
                </div>

                <div style="padding: 12px; border: 1px solid var(--border); border-radius: var(--radius-md); cursor: pointer; transition: var(--transition-fast);" onmouseover="this.style.borderColor='var(--accent)'; this.style.background='var(--accent-light)'" onmouseout="this.style.borderColor='var(--border)'; this.style.background='transparent'">
                    <div style="font-weight: 600; font-size: 13px; margin-bottom: 4px;">📆 Yesterday</div>
                    <div style="font-size: 11px; color: var(--text-tertiary);">May 30, 2026</div>
                </div>

                <div style="padding: 12px; border: 1px solid var(--border); border-radius: var(--radius-md); cursor: pointer; transition: var(--transition-fast);" onmouseover="this.style.borderColor='var(--accent)'; this.style.background='var(--accent-light)'" onmouseout="this.style.borderColor='var(--border)'; this.style.background='transparent'">
                    <div style="font-weight: 600; font-size: 13px; margin-bottom: 4px;">📊 This Week</div>
                    <div style="font-size: 11px; color: var(--text-tertiary);">May 25 - 31</div>
                </div>

                <div style="padding: 12px; border: 1px solid var(--border); border-radius: var(--radius-md); cursor: pointer; transition: var(--transition-fast);" onmouseover="this.style.borderColor='var(--accent)'; this.style.background='var(--accent-light)'" onmouseout="this.style.borderColor='var(--border)'; this.style.background='transparent'">
                    <div style="font-weight: 600; font-size: 13px; margin-bottom: 4px;">📈 Last Week</div>
                    <div style="font-size: 11px; color: var(--text-tertiary);">May 18 - 24</div>
                </div>

                <div style="padding: 12px; border: 1px solid var(--border); border-radius: var(--radius-md); cursor: pointer; transition: var(--transition-fast);" onmouseover="this.style.borderColor='var(--accent)'; this.style.background='var(--accent-light)'" onmouseout="this.style.borderColor='var(--border)'; this.style.background='transparent'">
                    <div style="font-weight: 600; font-size: 13px; margin-bottom: 4px;">📅 This Month</div>
                    <div style="font-size: 11px; color: var(--text-tertiary);">May 1 - 31</div>
                </div>

                <div style="padding: 12px; border: 1px solid var(--border); border-radius: var(--radius-md); cursor: pointer; transition: var(--transition-fast);" onmouseover="this.style.borderColor='var(--accent)'; this.style.background='var(--accent-light)'" onmouseout="this.style.borderColor='var(--border)'; this.style.background='transparent'">
                    <div style="font-weight: 600; font-size: 13px; margin-bottom: 4px;">📉 Last Month</div>
                    <div style="font-size: 11px; color: var(--text-tertiary);">Apr 1 - 30</div>
                </div>

                <div style="padding: 12px; border: 1px solid var(--border); border-radius: var(--radius-md); cursor: pointer; transition: var(--transition-fast);" onmouseover="this.style.borderColor='var(--accent)'; this.style.background='var(--accent-light)'" onmouseout="this.style.borderColor='var(--border)'; this.style.background='transparent'">
                    <div style="font-weight: 600; font-size: 13px; margin-bottom: 4px;">📆 Last 7 Days</div>
                    <div style="font-size: 11px; color: var(--text-tertiary);">May 24 - 31</div>
                </div>

                <div style="padding: 12px; border: 1px solid var(--border); border-radius: var(--radius-md); cursor: pointer; transition: var(--transition-fast);" onmouseover="this.style.borderColor='var(--accent)'; this.style.background='var(--accent-light)'" onmouseout="this.style.borderColor='var(--border)'; this.style.background='transparent'">
                    <div style="font-weight: 600; font-size: 13px; margin-bottom: 4px;">📊 Last 30 Days</div>
                    <div style="font-size: 11px; color: var(--text-tertiary);">May 1 - 31</div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <h4 style="font-size: 14px; margin-bottom: 12px;">Custom Range:</h4>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                    <div class="dtp-example">
                        <label class="dtp-label">From Date</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fa-solid fa-calendar-plus"></i>
                            </span>
                            <input type="date" class="form-control" value="2026-05-01">
                        </div>
                    </div>

                    <div class="dtp-example">
                        <label class="dtp-label">To Date</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fa-solid fa-calendar-minus"></i>
                            </span>
                            <input type="date" class="form-control" value="2026-05-31">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Booking Form Example -->
<div class="dtp-section-title">
    <i class="fa-solid fa-clipboard-list"></i>
    Booking Form Example
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
                    <p class="card-subtitle">Real-world example with date/time pickers</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form style="max-width: 800px;">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div class="dtp-example">
                        <label class="dtp-label">Check-in Date <span style="color: var(--danger);">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fa-solid fa-plane-arrival"></i>
                            </span>
                            <input type="date" class="form-control" value="2026-07-01" required>
                        </div>
                    </div>

                    <div class="dtp-example">
                        <label class="dtp-label">Check-out Date <span style="color: var(--danger);">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fa-solid fa-plane-departure"></i>
                            </span>
                            <input type="date" class="form-control" value="2026-07-07" required>
                        </div>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div class="dtp-example">
                        <label class="dtp-label">Check-in Time</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fa-solid fa-clock"></i>
                            </span>
                            <input type="time" class="form-control" value="14:00">
                        </div>
                    </div>

                    <div class="dtp-example">
                        <label class="dtp-label">Check-out Time</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fa-solid fa-clock"></i>
                            </span>
                            <input type="time" class="form-control" value="12:00">
                        </div>
                    </div>
                </div>

                <div class="dtp-example">
                    <label class="dtp-label">Special Request Date (Optional)</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fa-solid fa-calendar-check"></i>
                        </span>
                        <input type="datetime-local" class="form-control">
                    </div>
                    <div class="dtp-helper">
                        <i class="fa-solid fa-circle-info"></i>
                        For scheduled services or events
                    </div>
                </div>

                <div class="divider"></div>

                <div class="date-display" style="margin-bottom: 20px;">
                    <div class="date-display-label">Booking Summary:</div>
                    <div class="date-display-value">6 nights | Jul 1 - Jul 7, 2026</div>
                </div>

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
<div class="datetimepicker-grid full-width">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-code"></i>
                </div>
                <div>
                    <h3>Implementation Guide</h3>
                    <p class="card-subtitle">How to implement datetime pickers with Flatpickr</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="code-block">
                <div style="color: var(--text-tertiary); margin-bottom: 8px;">1. Include Flatpickr:</div>
                <code style="color: var(--accent);">
                    &lt;link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"&gt;<br>
                    &lt;script src="https://cdn.jsdelivr.net/npm/flatpickr"&gt;&lt;/script&gt;
                </code>
            </div>

            <div class="code-block">
                <div style="color: var(--text-tertiary); margin-bottom: 8px; margin-top: 16px;">2. Initialize Date Picker:</div>
                <code style="color: var(--success);">
                    flatpickr("#dateInput", {<br>
                    &nbsp;&nbsp;dateFormat: "d/m/Y",<br>
                    &nbsp;&nbsp;minDate: "today",<br>
                    &nbsp;&nbsp;disableMobile: true<br>
                    });
                </code>
            </div>

            <div class="code-block">
                <div style="color: var(--text-tertiary); margin-bottom: 8px; margin-top: 16px;">3. Initialize DateTime Picker:</div>
                <code style="color: var(--warning);">
                    flatpickr("#datetimeInput", {<br>
                    &nbsp;&nbsp;enableTime: true,<br>
                    &nbsp;&nbsp;dateFormat: "d/m/Y H:i",<br>
                    &nbsp;&nbsp;time_24hr: true,<br>
                    &nbsp;&nbsp;minDate: "today"<br>
                    });
                </code>
            </div>

            <div class="code-block">
                <div style="color: var(--text-tertiary); margin-bottom: 8px; margin-top: 16px;">4. Initialize Date Range:</div>
                <code style="color: var(--info);">
                    flatpickr("#rangeInput", {<br>
                    &nbsp;&nbsp;mode: "range",<br>
                    &nbsp;&nbsp;dateFormat: "d/m/Y",<br>
                    &nbsp;&nbsp;minDate: "today"<br>
                    });
                </code>
            </div>

            <div class="divider"></div>

            <div class="form-group">
                <h4 style="font-size: 14px; margin-bottom: 12px;">Popular Libraries:</h4>
                <ul class="feature-list">
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>Flatpickr</strong> - Lightweight, feature-rich</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>Bootstrap Datepicker</strong> - Bootstrap integration</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>HTML5 Native</strong> - No library needed</span>
                    </li>
                    <li>
                        <i class="fa-solid fa-circle-check"></i>
                        <span><strong>React Datepicker</strong> - React component</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
