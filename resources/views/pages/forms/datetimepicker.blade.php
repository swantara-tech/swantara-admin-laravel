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
                    <pre class="bg-dark p-3 rounded text-dark" style=""><code>&lt;input type="text" class="form-control" data-toggle="flatpickr" placeholder="Select date..."&gt;</code></pre>

                    <h6 class="mt-4">2. Enable Time Picker</h6>
                    <pre class="bg-dark p-3 rounded text-dark" style=""><code>&lt;input type="text" class="form-control" data-toggle="flatpickr"
       data-show-time="true"
       placeholder="Select date and time..."&gt;</code></pre>

                    <h6 class="mt-4">3. Date Range Selection</h6>
                    <pre class="bg-dark p-3 rounded text-dark" style=""><code>&lt;input type="text" class="form-control" data-toggle="flatpickr"
       data-mode="range"
       placeholder="Select range..."&gt;</code></pre>

                    <h6 class="mt-4">4. Set Min/Max Dates</h6>
                    <pre class="bg-dark p-3 rounded text-dark" style=""><code>&lt;input type="text" class="form-control" data-toggle="flatpickr"
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
{{-- Flatpickr CSS sudah di app.css --}}
@endpush

@push('scripts')
<script src="{{ asset('assets/plugins/flatpickr/flatpickr.min.js') }}"></script>
<script>
$(document).ready(function () {

    // Set Indonesian locale
    if (typeof flatpickr !== 'undefined' && flatpickr.l10ns && flatpickr.l10ns.id) {
        flatpickr.localize(flatpickr.l10ns.id);
    }

    // Auto-init semua flatpickr dengan data-toggle="flatpickr"
    DSGTFlatpickr.autoInit();

    // Inline Calendar #1
    if ($('#inline-calendar-1').length) {
        DSGTFlatpickr.initInline('#inline-calendar-1', {
            onChange: function (selectedDates, dateStr) {
                $('#inline-date-1').text(dateStr || 'None');
            }
        });
    }

    // Inline Calendar #2
    if ($('#inline-calendar-2').length) {
        DSGTFlatpickr.initInline('#inline-calendar-2', {
            onChange: function (selectedDates, dateStr) {
                $('#inline-input-2').val(dateStr);
            }
        });
    }

    // Hotel Booking — linked check-in & check-out
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
                    DSGTFlatpickr.repositionOnScroll(instance);
                },
                onChange: function (selectedDates) {
                    if (selectedDates.length > 0) {
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
                    DSGTFlatpickr.repositionOnScroll(instance);
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

// Book Room function
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