@extends('layouts.app')

@section('title', 'Basic Table')

@section('content')
<div class="page-header">
    <div>
        <h1>Basic Table</h1>
        <p>Simple table component untuk menampilkan data dalam format tabel</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-plus"></i>
            <span>Add Data</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card" style="margin-bottom: 24px; border-left: 4px solid var(--accent);">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What is Basic Table?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Basic table menampilkan data dalam baris dan kolom sederhana tanpa fitur tambahan seperti sorting, searching, atau pagination. Cocok untuk dataset kecil.</p>
            </div>
        </div>
    </div>
</div>

<!-- ============================================ -->
<!-- USER MANAGEMENT WITH ADVANCED FILTER         -->
<!-- ============================================ -->

<div class="content-card" style="margin-bottom: 24px;">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-users-gear"></i>
            </div>
            <div>
                <h3>User Management with Filter</h3>
                <p class="card-subtitle">Advanced filtering untuk pencarian data pengguna yang spesifik</p>
            </div>
        </div>
        <div class="badge badge-primary"><i class="fa-solid fa-filter" style="margin-right: 6px;"></i>Advanced</div>
    </div>
    <div class="card-body">
        <!-- Filter Section -->
        <div style="margin-bottom: 20px;">
            <!-- Advanced Search Toggle -->
            <div style="display: flex; justify-content: flex-end; margin-bottom: 12px;">
                <a href="#filterForm" class="dsgt-advanced-search-toggle" id="advancedSearchToggle">
                    <i class="fa-solid fa-sliders"></i>
                    <span>Advanced Search</span>
                    <i class="fa-solid fa-chevron-down" id="advancedSearchIcon"></i>
                </a>
            </div>

            <!-- Filter Form -->
            <div id="filterForm" class="dsgt-filter-form dsgt-filter-expanded">
                <form id="userFilterForm">
                    <div class="dsgt-filter-fields">
                        <!-- Filter: Username -->
                        <div class="dsgt-filter-row">
                            <label class="dsgt-filter-label">Username</label>
                            <div class="dsgt-filter-inputs">
                                <select class="dsgt-filter-operator">
                                    <option value="=">=</option>
                                    <option value="LIKE" selected>LIKE</option>
                                    <option value="LIKE -%">LIKE -%</option>
                                    <option value="!=">!=</option>
                                    <option value="IN">IN</option>
                                    <option value="NOT IN">NOT IN</option>
                                </select>
                                <input type="text" class="dsgt-filter-input" placeholder="Enter username...">
                            </div>
                        </div>

                        <!-- Filter: Email -->
                        <div class="dsgt-filter-row">
                            <label class="dsgt-filter-label">Email</label>
                            <div class="dsgt-filter-inputs">
                                <select class="dsgt-filter-operator">
                                    <option value="=">=</option>
                                    <option value="LIKE" selected>LIKE</option>
                                    <option value="LIKE -%">LIKE -%</option>
                                    <option value="!=">!=</option>
                                </select>
                                <input type="email" class="dsgt-filter-input" placeholder="Enter email...">
                            </div>
                        </div>

                        <!-- Filter: Role -->
                        <div class="dsgt-filter-row">
                            <label class="dsgt-filter-label">Role</label>
                            <div class="dsgt-filter-inputs">
                                <select class="dsgt-filter-operator">
                                    <option value="=" selected>=</option>
                                    <option value="!=">!=</option>
                                    <option value="IN">IN</option>
                                    <option value="NOT IN">NOT IN</option>
                                </select>
                                <select class="dsgt-filter-select">
                                    <option value="">All Roles</option>
                                    <option value="Administrator">Administrator</option>
                                    <option value="Editor">Editor</option>
                                    <option value="Author">Author</option>
                                    <option value="User">User</option>
                                    <option value="Support">Support</option>
                                    <option value="Analyst">Analyst</option>
                                </select>
                            </div>
                        </div>

                        <!-- Filter: Status -->
                        <div class="dsgt-filter-row">
                            <label class="dsgt-filter-label">Status</label>
                            <div class="dsgt-filter-inputs">
                                <select class="dsgt-filter-operator">
                                    <option value="=" selected>=</option>
                                    <option value="!=">!=</option>
                                </select>
                                <select class="dsgt-filter-select">
                                    <option value="">All Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Suspended">Suspended</option>
                                </select>
                            </div>
                        </div>

                        <!-- Filter: Date Range -->
                        <div class="dsgt-filter-row">
                            <label class="dsgt-filter-label">Created Date</label>
                            <div class="dsgt-filter-inputs" id="dateFilterContainer">
                                <select class="dsgt-filter-operator" id="dateOperator" onchange="dsgtToggleDateInputs('dateOperator', 'dateFilterContainer', 'dateInput1')">
                                    <option value=">=">>=</option>
                                    <option value="<="><=</option>
                                    <option value="=" selected>=</option>
                                    <option value="BETWEEN">⇄</option>
                                </select>
                                <input type="text" id="dateInput1" class="dsgt-filter-input dsgt-flatpickr" data-date-format="d/m/Y" placeholder="Select date...">
                            </div>
                        </div>

                        <!-- Filter: Updated Date (DateTime) -->
                        <div class="dsgt-filter-row">
                            <label class="dsgt-filter-label">Updated Date</label>
                            <div class="dsgt-filter-inputs" id="updatedDateFilterContainer">
                                <select class="dsgt-filter-operator" id="updatedDateOperator" onchange="dsgtToggleDateInputs('updatedDateOperator', 'updatedDateFilterContainer', 'updatedDateInput1')">
                                    <option value=">=">>=</option>
                                    <option value="<="><=</option>
                                    <option value="=" selected>=</option>
                                    <option value="BETWEEN">⇄</option>
                                </select>
                                <input type="text" id="updatedDateInput1" class="dsgt-filter-input dsgt-flatpickr" data-date-format="d/m/Y H:i" data-show-time="true" placeholder="Select date & time...">
                            </div>
                        </div>

                        <!-- Filter: Phone -->
                        <div class="dsgt-filter-row">
                            <label class="dsgt-filter-label">Phone</label>
                            <div class="dsgt-filter-inputs">
                                <select class="dsgt-filter-operator">
                                    <option value="=">=</option>
                                    <option value="LIKE" selected>LIKE</option>
                                    <option value="LIKE -%">LIKE -%</option>
                                </select>
                                <input type="tel" class="dsgt-filter-input" placeholder="+62 xxx-xxxx-xxxx">
                            </div>
                        </div>
                    </div>

                    <!-- Filter Actions -->
                    <div class="dsgt-filter-actions">
                        <button type="button" class="btn btn-secondary" onclick="dsgtResetFilterForm('userFilterForm', 'dateOperator')">
                            <i class="fa-solid fa-rotate-left" style="margin-right: 6px;"></i>
                            Reset
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa-solid fa-magnifying-glass" style="margin-right: 6px;"></i>
                            Filter
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="divider" style="margin: 20px 0;"></div>

        <!-- Table Controls -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 12px;">
            <div style="display: flex; align-items: center; gap: 8px;">
                <label style="font-size: 13px; color: var(--text-secondary);">Show</label>
                <select class="form-control" style="width: 70px; height: 36px; padding: 6px 12px;">
                    <option selected>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </select>
                <label style="font-size: 13px; color: var(--text-secondary);">entries</label>
            </div>
            <div style="position: relative;">
                <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 12px; top: 50%; transform: translateY(-50%); color: var(--text-tertiary); font-size: 14px; z-index: 1; pointer-events: none;"></i>
                <input type="text" class="form-control" placeholder="Quick search..." style="padding-left: 38px; min-width: 250px; height: 36px;">
            </div>
        </div>

        <!-- User Table -->
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 50px;">
                            <input type="checkbox" id="selectAllFiltered" style="cursor: pointer;">
                        </th>
                        <th style="width: 60px;">#</th>
                        <th>User</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Last Login</th>
                        <th style="width: 150px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" class="row-checkbox-filtered" style="cursor: pointer;"></td>
                        <td>1</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <img src="https://ui-avatars.com/api/?name=Admin+User&background=0078D4&color=fff&size=40" style="border-radius: 50%; width: 40px; height: 40px;" alt="Avatar">
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 2px;">Admin User</div>
                                    <div style="font-size: 12px; color: var(--text-tertiary);">@admin • Joined 2024-01-15</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-envelope" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>admin@example.com</span>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-phone" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>+62 812-3456-7890</span>
                            </div>
                        </td>
                        <td><span class="badge badge-primary"><i class="fa-solid fa-shield-halved" style="margin-right: 4px;"></i>Administrator</span></td>
                        <td><span class="badge badge-success"><i class="fa-solid fa-check-circle" style="margin-right: 4px;"></i>Active</span></td>
                        <td>
                            <div style="font-size: 13px;">2024-01-20</div>
                            <div style="font-size: 11px; color: var(--text-tertiary);">08:30 AM</div>
                        </td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <button class="btn btn-sm btn-info" title="View Details">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="row-checkbox-filtered" style="cursor: pointer;"></td>
                        <td>2</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=16C60C&color=fff&size=40" style="border-radius: 50%; width: 40px; height: 40px;" alt="Avatar">
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 2px;">Budi Santoso</div>
                                    <div style="font-size: 12px; color: var(--text-tertiary);">@budi • Joined 2024-02-20</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-envelope" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>budi@example.com</span>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-phone" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>+62 813-4567-8901</span>
                            </div>
                        </td>
                        <td><span class="badge badge-info"><i class="fa-solid fa-pen-to-square" style="margin-right: 4px;"></i>Editor</span></td>
                        <td><span class="badge badge-success"><i class="fa-solid fa-check-circle" style="margin-right: 4px;"></i>Active</span></td>
                        <td>
                            <div style="font-size: 13px;">2024-01-19</div>
                            <div style="font-size: 11px; color: var(--text-tertiary);">10:15 AM</div>
                        </td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <button class="btn btn-sm btn-info" title="View Details">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="row-checkbox-filtered" style="cursor: pointer;"></td>
                        <td>3</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <img src="https://ui-avatars.com/api/?name=Siti+Rahayu&background=FFB900&color=fff&size=40" style="border-radius: 50%; width: 40px; height: 40px;" alt="Avatar">
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 2px;">Siti Rahayu</div>
                                    <div style="font-size: 12px; color: var(--text-tertiary);">@siti • Joined 2024-03-10</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-envelope" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>siti@example.com</span>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-phone" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>+62 814-5678-9012</span>
                            </div>
                        </td>
                        <td><span class="badge badge-warning"><i class="fa-solid fa-pen-fancy" style="margin-right: 4px;"></i>Author</span></td>
                        <td><span class="badge badge-warning"><i class="fa-solid fa-clock" style="margin-right: 4px;"></i>Pending</span></td>
                        <td>
                            <div style="font-size: 13px;">2024-01-18</div>
                            <div style="font-size: 11px; color: var(--text-tertiary);">02:45 PM</div>
                        </td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <button class="btn btn-sm btn-info" title="View Details">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="row-checkbox-filtered" style="cursor: pointer;"></td>
                        <td>4</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <img src="https://ui-avatars.com/api/?name=Andi+Wijaya&background=E81123&color=fff&size=40" style="border-radius: 50%; width: 40px; height: 40px;" alt="Avatar">
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 2px;">Andi Wijaya</div>
                                    <div style="font-size: 12px; color: var(--text-tertiary);">@andi • Joined 2024-04-05</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-envelope" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>andi@example.com</span>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-phone" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>+62 815-6789-0123</span>
                            </div>
                        </td>
                        <td><span class="badge badge-secondary"><i class="fa-solid fa-user" style="margin-right: 4px;"></i>User</span></td>
                        <td><span class="badge badge-danger"><i class="fa-solid fa-times-circle" style="margin-right: 4px;"></i>Inactive</span></td>
                        <td>
                            <div style="font-size: 13px;">2024-01-10</div>
                            <div style="font-size: 11px; color: var(--text-tertiary);">09:20 AM</div>
                        </td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <button class="btn btn-sm btn-info" title="View Details">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="row-checkbox-filtered" style="cursor: pointer;"></td>
                        <td>5</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <img src="https://ui-avatars.com/api/?name=Dewi+Lestari&background=0078D4&color=fff&size=40" style="border-radius: 50%; width: 40px; height: 40px;" alt="Avatar">
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 2px;">Dewi Lestari</div>
                                    <div style="font-size: 12px; color: var(--text-tertiary);">@dewi • Joined 2024-05-12</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-envelope" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>dewi@example.com</span>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-phone" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>+62 816-7890-1234</span>
                            </div>
                        </td>
                        <td><span class="badge badge-info"><i class="fa-solid fa-pen-to-square" style="margin-right: 4px;"></i>Editor</span></td>
                        <td><span class="badge badge-success"><i class="fa-solid fa-check-circle" style="margin-right: 4px;"></i>Active</span></td>
                        <td>
                            <div style="font-size: 13px;">2024-01-19</div>
                            <div style="font-size: 11px; color: var(--text-tertiary);">11:30 AM</div>
                        </td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <button class="btn btn-sm btn-info" title="View Details">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="divider" style="margin: 20px 0;"></div>

        <!-- Pagination & Info -->
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;">
            <div style="font-size: 13px; color: var(--text-tertiary);">
                <i class="fa-solid fa-circle-info" style="margin-right: 6px;"></i>
                Showing <strong>1</strong> to <strong>5</strong> of <strong>5</strong> entries (filtered from 120 total)
            </div>
            <div style="display: flex; gap: 4px;">
                <button class="btn btn-sm btn-secondary" disabled>
                    <i class="fa-solid fa-chevron-left" style="margin-right: 4px;"></i>
                    Previous
                </button>
                <button class="btn btn-sm btn-primary">1</button>
                <button class="btn btn-sm btn-secondary">2</button>
                <button class="btn btn-sm btn-secondary">3</button>
                <button class="btn btn-sm btn-secondary">
                    Next
                    <i class="fa-solid fa-chevron-right" style="margin-left: 4px;"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Basic Table Example -->
<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-table"></i>
            </div>
            <div>
                <h3>User Management</h3>
                <p class="card-subtitle">Daftar pengguna terdaftar</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <!-- Table Controls -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 12px;">
            <div style="display: flex; align-items: center; gap: 8px;">
                <label style="font-size: 13px; color: var(--text-secondary);">Show</label>
                <select class="form-control" style="width: 70px; height: 36px; padding: 6px 12px;">
                    <option selected>10</option>
                    <option>25</option>
                    <option>50</option>
                    <option>100</option>
                </select>
                <label style="font-size: 13px; color: var(--text-secondary);">entries</label>
            </div>
            <div style="position: relative;">
                <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 12px; top: 50%; transform: translateY(-50%); color: var(--text-tertiary); font-size: 14px; z-index: 1; pointer-events: none;"></i>
                <input type="text" class="form-control" placeholder="Search users..." style="padding-left: 38px; min-width: 250px; height: 36px; position: relative;">
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 50px;">
                            <input type="checkbox" id="selectAll" style="cursor: pointer;">
                        </th>
                        <th style="width: 60px;">#</th>
                        <th>User</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th style="width: 150px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" class="row-checkbox" style="cursor: pointer;"></td>
                        <td>1</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <img src="https://ui-avatars.com/api/?name=Admin+User&background=0078D4&color=fff&size=40" style="border-radius: 50%; width: 40px; height: 40px;" alt="Avatar">
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 2px;">Admin User</div>
                                    <div style="font-size: 12px; color: var(--text-tertiary);">@admin</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-envelope" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>admin@example.com</span>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-phone" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>+62 812-3456-7890</span>
                            </div>
                        </td>
                        <td><span class="badge badge-primary"><i class="fa-solid fa-shield-halved" style="margin-right: 4px;"></i>Administrator</span></td>
                        <td><span class="badge badge-success"><i class="fa-solid fa-check-circle" style="margin-right: 4px;"></i>Active</span></td>
                        <td>
                            <div style="font-size: 13px;">2024-01-15</div>
                            <div style="font-size: 11px; color: var(--text-tertiary);">08:30 AM</div>
                        </td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <button class="btn btn-sm btn-info" title="View Details">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="row-checkbox" style="cursor: pointer;"></td>
                        <td>2</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=16C60C&color=fff&size=40" style="border-radius: 50%; width: 40px; height: 40px;" alt="Avatar">
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 2px;">Budi Santoso</div>
                                    <div style="font-size: 12px; color: var(--text-tertiary);">@budi</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-envelope" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>budi@example.com</span>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-phone" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>+62 813-4567-8901</span>
                            </div>
                        </td>
                        <td><span class="badge badge-info"><i class="fa-solid fa-pen-to-square" style="margin-right: 4px;"></i>Editor</span></td>
                        <td><span class="badge badge-success"><i class="fa-solid fa-check-circle" style="margin-right: 4px;"></i>Active</span></td>
                        <td>
                            <div style="font-size: 13px;">2024-02-20</div>
                            <div style="font-size: 11px; color: var(--text-tertiary);">10:15 AM</div>
                        </td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <button class="btn btn-sm btn-info" title="View Details">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="row-checkbox" style="cursor: pointer;"></td>
                        <td>3</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <img src="https://ui-avatars.com/api/?name=Siti+Rahayu&background=FFB900&color=fff&size=40" style="border-radius: 50%; width: 40px; height: 40px;" alt="Avatar">
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 2px;">Siti Rahayu</div>
                                    <div style="font-size: 12px; color: var(--text-tertiary);">@siti</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-envelope" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>siti@example.com</span>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-phone" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>+62 814-5678-9012</span>
                            </div>
                        </td>
                        <td><span class="badge badge-warning"><i class="fa-solid fa-pen-fancy" style="margin-right: 4px;"></i>Author</span></td>
                        <td><span class="badge badge-warning"><i class="fa-solid fa-clock" style="margin-right: 4px;"></i>Pending</span></td>
                        <td>
                            <div style="font-size: 13px;">2024-03-10</div>
                            <div style="font-size: 11px; color: var(--text-tertiary);">02:45 PM</div>
                        </td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <button class="btn btn-sm btn-info" title="View Details">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="row-checkbox" style="cursor: pointer;"></td>
                        <td>4</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <img src="https://ui-avatars.com/api/?name=Andi+Wijaya&background=E81123&color=fff&size=40" style="border-radius: 50%; width: 40px; height: 40px;" alt="Avatar">
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 2px;">Andi Wijaya</div>
                                    <div style="font-size: 12px; color: var(--text-tertiary);">@andi</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-envelope" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>andi@example.com</span>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-phone" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>+62 815-6789-0123</span>
                            </div>
                        </td>
                        <td><span class="badge badge-secondary"><i class="fa-solid fa-user" style="margin-right: 4px;"></i>User</span></td>
                        <td><span class="badge badge-danger"><i class="fa-solid fa-times-circle" style="margin-right: 4px;"></i>Inactive</span></td>
                        <td>
                            <div style="font-size: 13px;">2024-04-05</div>
                            <div style="font-size: 11px; color: var(--text-tertiary);">09:20 AM</div>
                        </td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <button class="btn btn-sm btn-info" title="View Details">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="row-checkbox" style="cursor: pointer;"></td>
                        <td>5</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <img src="https://ui-avatars.com/api/?name=Dewi+Lestari&background=0078D4&color=fff&size=40" style="border-radius: 50%; width: 40px; height: 40px;" alt="Avatar">
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 2px;">Dewi Lestari</div>
                                    <div style="font-size: 12px; color: var(--text-tertiary);">@dewi</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-envelope" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>dewi@example.com</span>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-phone" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>+62 816-7890-1234</span>
                            </div>
                        </td>
                        <td><span class="badge badge-info"><i class="fa-solid fa-pen-to-square" style="margin-right: 4px;"></i>Editor</span></td>
                        <td><span class="badge badge-success"><i class="fa-solid fa-check-circle" style="margin-right: 4px;"></i>Active</span></td>
                        <td>
                            <div style="font-size: 13px;">2024-05-12</div>
                            <div style="font-size: 11px; color: var(--text-tertiary);">11:30 AM</div>
                        </td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <button class="btn btn-sm btn-info" title="View Details">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="row-checkbox" style="cursor: pointer;"></td>
                        <td>6</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <img src="https://ui-avatars.com/api/?name=Rudi+Hermawan&background=8764B8&color=fff&size=40" style="border-radius: 50%; width: 40px; height: 40px;" alt="Avatar">
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 2px;">Rudi Hermawan</div>
                                    <div style="font-size: 12px; color: var(--text-tertiary);">@rudi</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-envelope" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>rudi@example.com</span>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-phone" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>+62 817-8901-2345</span>
                            </div>
                        </td>
                        <td><span class="badge badge-success"><i class="fa-solid fa-headset" style="margin-right: 4px;"></i>Support</span></td>
                        <td><span class="badge badge-success"><i class="fa-solid fa-check-circle" style="margin-right: 4px;"></i>Active</span></td>
                        <td>
                            <div style="font-size: 13px;">2024-06-18</div>
                            <div style="font-size: 11px; color: var(--text-tertiary);">03:15 PM</div>
                        </td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <button class="btn btn-sm btn-info" title="View Details">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="row-checkbox" style="cursor: pointer;"></td>
                        <td>7</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <img src="https://ui-avatars.com/api/?name=Maya+Sari&background=00B294&color=fff&size=40" style="border-radius: 50%; width: 40px; height: 40px;" alt="Avatar">
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 2px;">Maya Sari</div>
                                    <div style="font-size: 12px; color: var(--text-tertiary);">@maya</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-envelope" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>maya@example.com</span>
                            </div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 6px;">
                                <i class="fa-solid fa-phone" style="color: var(--text-tertiary); font-size: 12px;"></i>
                                <span>+62 818-9012-3456</span>
                            </div>
                        </td>
                        <td><span class="badge badge-primary"><i class="fa-solid fa-chart-simple" style="margin-right: 4px;"></i>Analyst</span></td>
                        <td><span class="badge badge-success"><i class="fa-solid fa-check-circle" style="margin-right: 4px;"></i>Active</span></td>
                        <td>
                            <div style="font-size: 13px;">2024-07-22</div>
                            <div style="font-size: 11px; color: var(--text-tertiary);">01:45 PM</div>
                        </td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <button class="btn btn-sm btn-info" title="View Details">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="divider"></div>

        <!-- Pagination & Info -->
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;">
            <div style="font-size: 13px; color: var(--text-tertiary);">
                <i class="fa-solid fa-circle-info" style="margin-right: 6px;"></i>
                Showing <strong>1</strong> to <strong>7</strong> of <strong>7</strong> entries
            </div>
            <div style="display: flex; gap: 4px;">
                <button class="btn btn-sm btn-secondary" disabled>
                    <i class="fa-solid fa-chevron-left" style="margin-right: 4px;"></i>
                    Previous
                </button>
                <button class="btn btn-sm btn-primary">1</button>
                <button class="btn btn-sm btn-secondary" disabled>
                    Next
                    <i class="fa-solid fa-chevron-right" style="margin-left: 4px;"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Product Inventory Table -->
<div class="content-card" style="margin-top: 24px;">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-box"></i>
            </div>
            <div>
                <h3>Product Inventory</h3>
                <p class="card-subtitle">Daftar produk dan stok tersedia</p>
            </div>
        </div>
        <button class="btn btn-success">
            <i class="fa-solid fa-plus"></i>
            <span>Add Product</span>
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th style="width: 60px;">#</th>
                        <th>Product</th>
                        <th>SKU</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Status</th>
                        <th style="width: 150px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fa-solid fa-laptop" style="color: white; font-size: 20px;"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 2px;">Laptop ASUS ROG</div>
                                    <div style="font-size: 12px; color: var(--text-tertiary);">Intel i7, 16GB RAM</div>
                                </div>
                            </div>
                        </td>
                        <td><code style="background: var(--bg-secondary); padding: 4px 8px; border-radius: 4px; font-size: 12px;">SKU-LPT-001</code></td>
                        <td><span class="badge badge-primary"><i class="fa-solid fa-laptop" style="margin-right: 4px;"></i>Electronics</span></td>
                        <td>
                            <div style="font-weight: 600; color: var(--accent);">Rp 18.500.000</div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <div style="flex: 1; height: 6px; background: var(--bg-secondary); border-radius: 3px; overflow: hidden;">
                                    <div style="width: 75%; height: 100%; background: linear-gradient(90deg, var(--success), #3dd84a); border-radius: 3px;"></div>
                                </div>
                                <span style="font-size: 12px; font-weight: 600;">45</span>
                            </div>
                        </td>
                        <td><span class="badge badge-success"><i class="fa-solid fa-check-circle" style="margin-right: 4px;"></i>In Stock</span></td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <button class="btn btn-sm btn-info" title="View Details">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fa-solid fa-mobile-screen" style="color: white; font-size: 20px;"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 2px;">iPhone 15 Pro</div>
                                    <div style="font-size: 12px; color: var(--text-tertiary);">256GB, Titanium</div>
                                </div>
                            </div>
                        </td>
                        <td><code style="background: var(--bg-secondary); padding: 4px 8px; border-radius: 4px; font-size: 12px;">SKU-PHN-002</code></td>
                        <td><span class="badge badge-primary"><i class="fa-solid fa-mobile-screen" style="margin-right: 4px;"></i>Smartphone</span></td>
                        <td>
                            <div style="font-weight: 600; color: var(--accent);">Rp 21.000.000</div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <div style="flex: 1; height: 6px; background: var(--bg-secondary); border-radius: 3px; overflow: hidden;">
                                    <div style="width: 20%; height: 100%; background: linear-gradient(90deg, var(--warning), #ffd43d); border-radius: 3px;"></div>
                                </div>
                                <span style="font-size: 12px; font-weight: 600;">8</span>
                            </div>
                        </td>
                        <td><span class="badge badge-warning"><i class="fa-solid fa-exclamation-triangle" style="margin-right: 4px;"></i>Low Stock</span></td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <button class="btn btn-sm btn-info" title="View Details">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fa-solid fa-headphones" style="color: white; font-size: 20px;"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 2px;">Sony WH-1000XM5</div>
                                    <div style="font-size: 12px; color: var(--text-tertiary);">Wireless, Noise Cancelling</div>
                                </div>
                            </div>
                        </td>
                        <td><code style="background: var(--bg-secondary); padding: 4px 8px; border-radius: 4px; font-size: 12px;">SKU-HDP-003</code></td>
                        <td><span class="badge badge-info"><i class="fa-solid fa-headphones" style="margin-right: 4px;"></i>Accessories</span></td>
                        <td>
                            <div style="font-weight: 600; color: var(--accent);">Rp 5.999.000</div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <div style="flex: 1; height: 6px; background: var(--bg-secondary); border-radius: 3px; overflow: hidden;">
                                    <div style="width: 90%; height: 100%; background: linear-gradient(90deg, var(--success), #3dd84a); border-radius: 3px;"></div>
                                </div>
                                <span style="font-size: 12px; font-weight: 600;">120</span>
                            </div>
                        </td>
                        <td><span class="badge badge-success"><i class="fa-solid fa-check-circle" style="margin-right: 4px;"></i>In Stock</span></td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <button class="btn btn-sm btn-info" title="View Details">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fa-solid fa-keyboard" style="color: white; font-size: 20px;"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 2px;">Logitech MX Keys</div>
                                    <div style="font-size: 12px; color: var(--text-tertiary);">Wireless, Backlit</div>
                                </div>
                            </div>
                        </td>
                        <td><code style="background: var(--bg-secondary); padding: 4px 8px; border-radius: 4px; font-size: 12px;">SKU-KBD-004</code></td>
                        <td><span class="badge badge-info"><i class="fa-solid fa-keyboard" style="margin-right: 4px;"></i>Accessories</span></td>
                        <td>
                            <div style="font-weight: 600; color: var(--accent);">Rp 1.850.000</div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <div style="flex: 1; height: 6px; background: var(--bg-secondary); border-radius: 3px; overflow: hidden;">
                                    <div style="width: 0%; height: 100%; background: linear-gradient(90deg, var(--danger), #ff6b6b); border-radius: 3px;"></div>
                                </div>
                                <span style="font-size: 12px; font-weight: 600;">0</span>
                            </div>
                        </td>
                        <td><span class="badge badge-danger"><i class="fa-solid fa-times-circle" style="margin-right: 4px;"></i>Out of Stock</span></td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <button class="btn btn-sm btn-info" title="View Details">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #30cfd0 0%, #330867 100%); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fa-solid fa-monitor" style="color: white; font-size: 20px;"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 600; margin-bottom: 2px;">LG UltraWide 34"</div>
                                    <div style="font-size: 12px; color: var(--text-tertiary);">4K, HDR, 144Hz</div>
                                </div>
                            </div>
                        </td>
                        <td><code style="background: var(--bg-secondary); padding: 4px 8px; border-radius: 4px; font-size: 12px;">SKU-MNT-005</code></td>
                        <td><span class="badge badge-primary"><i class="fa-solid fa-monitor" style="margin-right: 4px;"></i>Monitor</span></td>
                        <td>
                            <div style="font-weight: 600; color: var(--accent);">Rp 12.500.000</div>
                        </td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <div style="flex: 1; height: 6px; background: var(--bg-secondary); border-radius: 3px; overflow: hidden;">
                                    <div style="width: 50%; height: 100%; background: linear-gradient(90deg, var(--info), #3dd8f4); border-radius: 3px;"></div>
                                </div>
                                <span style="font-size: 12px; font-weight: 600;">25</span>
                            </div>
                        </td>
                        <td><span class="badge badge-success"><i class="fa-solid fa-check-circle" style="margin-right: 4px;"></i>In Stock</span></td>
                        <td>
                            <div style="display: flex; gap: 6px;">
                                <button class="btn btn-sm btn-info" title="View Details">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-secondary" title="Edit">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="divider"></div>

        <!-- Pagination & Info -->
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;">
            <div style="font-size: 13px; color: var(--text-tertiary);">
                <i class="fa-solid fa-circle-info" style="margin-right: 6px;"></i>
                Showing <strong>1</strong> to <strong>5</strong> of <strong>5</strong> entries
            </div>
            <div style="display: flex; gap: 4px;">
                <button class="btn btn-sm btn-secondary" disabled>
                    <i class="fa-solid fa-chevron-left" style="margin-right: 4px;"></i>
                    Previous
                </button>
                <button class="btn btn-sm btn-primary">1</button>
                <button class="btn btn-sm btn-secondary" disabled>
                    Next
                    <i class="fa-solid fa-chevron-right" style="margin-left: 4px;"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ============================================ -->
<!-- ADVANCED TABLE VARIANTS                      -->
<!-- ============================================ -->

<div style="margin-top: 48px;">
    <h2 style="font-size: 28px; font-weight: 700; margin-bottom: 8px; color: var(--text-primary);">
        <i class="fa-solid fa-layer-group" style="color: var(--accent);"></i> Advanced Table Variants
    </h2>
    <p style="font-size: 14px; color: var(--text-secondary); margin-bottom: 32px;">
        17 professional table styles untuk berbagai use case dan kebutuhan UI Anda.
    </p>
</div>

<!-- 1. Default Table -->
<div class="content-card" style="margin-bottom: 32px;">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-table"></i>
            </div>
            <div>
                <h3>1. Default Table</h3>
                <p class="card-subtitle">Basic table dengan style default, simple dan clean</p>
            </div>
        </div>
        <div class="badge badge-primary">Default</div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Employee</th>
                        <th>Department</th>
                        <th>Position</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1001</td>
                        <td><strong>John Smith</strong></td>
                        <td>Engineering</td>
                        <td>Senior Developer</td>
                        <td><span class="badge badge-success">Active</span></td>
                    </tr>
                    <tr>
                        <td>#1002</td>
                        <td><strong>Sarah Johnson</strong></td>
                        <td>Design</td>
                        <td>UI/UX Designer</td>
                        <td><span class="badge badge-success">Active</span></td>
                    </tr>
                    <tr>
                        <td>#1003</td>
                        <td><strong>Mike Davis</strong></td>
                        <td>Marketing</td>
                        <td>Marketing Manager</td>
                        <td><span class="badge badge-warning">On Leave</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- 2. Striped Rows -->
<div class="content-card" style="margin-bottom: 32px;">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                <i class="fa-solid fa-bars-staggered"></i>
            </div>
            <div>
                <h3>2. Striped Rows</h3>
                <p class="card-subtitle">Alternating row colors untuk improved readability</p>
            </div>
        </div>
        <div class="badge badge-info">Striped</div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>#ORD-2024-001</code></td>
                        <td>Alex Thompson</td>
                        <td>Laptop ASUS ROG</td>
                        <td><strong>Rp 18.500.000</strong></td>
                        <td>2024-01-15</td>
                    </tr>
                    <tr>
                        <td><code>#ORD-2024-002</code></td>
                        <td>Emma Wilson</td>
                        <td>iPhone 15 Pro</td>
                        <td><strong>Rp 21.000.000</strong></td>
                        <td>2024-01-16</td>
                    </tr>
                    <tr>
                        <td><code>#ORD-2024-003</code></td>
                        <td>David Brown</td>
                        <td>Sony WH-1000XM5</td>
                        <td><strong>Rp 5.999.000</strong></td>
                        <td>2024-01-17</td>
                    </tr>
                    <tr>
                        <td><code>#ORD-2024-004</code></td>
                        <td>Lisa Anderson</td>
                        <td>LG UltraWide 34"</td>
                        <td><strong>Rp 12.500.000</strong></td>
                        <td>2024-01-18</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- 3. Bordered Table -->
<div class="content-card" style="margin-bottom: 32px;">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                <i class="fa-solid fa-border-all"></i>
            </div>
            <div>
                <h3>3. Bordered Table</h3>
                <p class="card-subtitle">Table dengan borders di semua sisi untuk struktur yang jelas</p>
            </div>
        </div>
        <div class="badge badge-warning">Bordered</div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Quarter</th>
                        <th>Revenue</th>
                        <th>Expenses</th>
                        <th>Profit</th>
                        <th>Growth</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Q1 2024</strong></td>
                        <td>Rp 450.000.000</td>
                        <td>Rp 320.000.000</td>
                        <td style="color: var(--success); font-weight: 600;">Rp 130.000.000</td>
                        <td><span class="badge badge-success">+12.5%</span></td>
                    </tr>
                    <tr>
                        <td><strong>Q2 2024</strong></td>
                        <td>Rp 520.000.000</td>
                        <td>Rp 380.000.000</td>
                        <td style="color: var(--success); font-weight: 600;">Rp 140.000.000</td>
                        <td><span class="badge badge-success">+15.2%</span></td>
                    </tr>
                    <tr>
                        <td><strong>Q3 2024</strong></td>
                        <td>Rp 480.000.000</td>
                        <td>Rp 395.000.000</td>
                        <td style="color: var(--success); font-weight: 600;">Rp 85.000.000</td>
                        <td><span class="badge badge-danger">-8.3%</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- 4. Borderless Table -->
<div class="content-card" style="margin-bottom: 32px;">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-secondary">
                <i class="fa-solid fa-border-none"></i>
            </div>
            <div>
                <h3>4. Borderless Table</h3>
                <p class="card-subtitle">Minimalist table tanpa borders untuk clean look</p>
            </div>
        </div>
        <div class="badge badge-secondary">Borderless</div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th>Feature</th>
                        <th>Basic</th>
                        <th>Pro</th>
                        <th>Enterprise</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Storage</strong></td>
                        <td>10 GB</td>
                        <td>100 GB</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <td><strong>Users</strong></td>
                        <td>1 User</td>
                        <td>10 Users</td>
                        <td>Unlimited</td>
                    </tr>
                    <tr>
                        <td><strong>Support</strong></td>
                        <td>Email</td>
                        <td>Priority</td>
                        <td>24/7 Dedicated</td>
                    </tr>
                    <tr>
                        <td><strong>Price</strong></td>
                        <td><strong>Free</strong></td>
                        <td><strong style="color: var(--accent);">Rp 99.000/bln</strong></td>
                        <td><strong style="color: var(--accent);">Custom</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- 5. Hover Rows -->
<div class="content-card" style="margin-bottom: 32px;">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                <i class="fa-solid fa-hand-pointer"></i>
            </div>
            <div>
                <h3>5. Hover Rows</h3>
                <p class="card-subtitle">Highlight effect saat hover untuk better interactivity</p>
            </div>
        </div>
        <div class="badge badge-success">Interactive</div>
    </div>
    <div class="card-body">
        <div style="background: var(--bg-secondary); padding: 12px 16px; border-radius: 8px; margin-bottom: 16px;">
            <p style="margin: 0; font-size: 13px; color: var(--text-secondary);">
                <i class="fa-solid fa-circle-info" style="color: var(--accent);"></i>
                <strong>Hover over the rows</strong> to see the highlight effect in action!
            </p>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Project</th>
                        <th>Lead</th>
                        <th>Progress</th>
                        <th>Deadline</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Website Redesign</strong></td>
                        <td>Sarah Chen</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <div style="flex: 1; height: 6px; background: var(--bg-secondary); border-radius: 3px; overflow: hidden;">
                                    <div style="width: 75%; height: 100%; background: linear-gradient(90deg, var(--accent), #3dd8f4); border-radius: 3px;"></div>
                                </div>
                                <span style="font-size: 12px; font-weight: 600;">75%</span>
                            </div>
                        </td>
                        <td>2024-02-28</td>
                        <td><span class="badge badge-info">In Progress</span></td>
                    </tr>
                    <tr>
                        <td><strong>Mobile App</strong></td>
                        <td>Mike Johnson</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <div style="flex: 1; height: 6px; background: var(--bg-secondary); border-radius: 3px; overflow: hidden;">
                                    <div style="width: 100%; height: 100%; background: linear-gradient(90deg, var(--success), #3dd84a); border-radius: 3px;"></div>
                                </div>
                                <span style="font-size: 12px; font-weight: 600;">100%</span>
                            </div>
                        </td>
                        <td>2024-01-15</td>
                        <td><span class="badge badge-success">Completed</span></td>
                    </tr>
                    <tr>
                        <td><strong>API Integration</strong></td>
                        <td>Emma Davis</td>
                        <td>
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <div style="flex: 1; height: 6px; background: var(--bg-secondary); border-radius: 3px; overflow: hidden;">
                                    <div style="width: 45%; height: 100%; background: linear-gradient(90deg, var(--warning), #ffd43d); border-radius: 3px;"></div>
                                </div>
                                <span style="font-size: 12px; font-weight: 600;">45%</span>
                            </div>
                        </td>
                        <td>2024-03-15</td>
                        <td><span class="badge badge-warning">Delayed</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- 6. Compact Table -->
<div class="content-card" style="margin-bottom: 32px;">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                <i class="fa-solid fa-compress"></i>
            </div>
            <div>
                <h3>6. Compact Table</h3>
                <p class="card-subtitle">Reduced padding untuk space efficiency, ideal untuk dense data</p>
            </div>
        </div>
        <div class="badge badge-warning">Compact</div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-sm table-hover">
                <thead>
                    <tr>
                        <th>Log ID</th>
                        <th>Timestamp</th>
                        <th>Level</th>
                        <th>Message</th>
                        <th>Source</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>#LOG-001</code></td>
                        <td>2024-01-20 08:15:23</td>
                        <td><span class="badge badge-success">INFO</span></td>
                        <td>User login successful</td>
                        <td>Auth Service</td>
                    </tr>
                    <tr>
                        <td><code>#LOG-002</code></td>
                        <td>2024-01-20 08:16:45</td>
                        <td><span class="badge badge-warning">WARN</span></td>
                        <td>High memory usage detected (85%)</td>
                        <td>System Monitor</td>
                    </tr>
                    <tr>
                        <td><code>#LOG-003</code></td>
                        <td>2024-01-20 08:17:12</td>
                        <td><span class="badge badge-danger">ERROR</span></td>
                        <td>Database connection timeout</td>
                        <td>DB Service</td>
                    </tr>
                    <tr>
                        <td><code>#LOG-004</code></td>
                        <td>2024-01-20 08:18:30</td>
                        <td><span class="badge badge-success">INFO</span></td>
                        <td>Cache cleared successfully</td>
                        <td>Cache Service</td>
                    </tr>
                    <tr>
                        <td><code>#LOG-005</code></td>
                        <td>2024-01-20 08:19:05</td>
                        <td><span class="badge badge-info">DEBUG</span></td>
                        <td>API response time: 245ms</td>
                        <td>API Gateway</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- 7. Dense Table -->
<div class="content-card" style="margin-bottom: 32px;">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-table-list"></i>
            </div>
            <div>
                <h3>7. Dense Table</h3>
                <p class="card-subtitle">Ultra-compact dengan minimal spacing untuk data-heavy applications</p>
            </div>
        </div>
        <div class="badge badge-info">Dense</div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-sm table-bordered table-hover" style="font-size: 13px;">
                <thead>
                    <tr>
                        <th>Symbol</th>
                        <th>Price</th>
                        <th>Change</th>
                        <th>Change %</th>
                        <th>Volume</th>
                        <th>Market Cap</th>
                        <th>High</th>
                        <th>Low</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>AAPL</strong></td>
                        <td>$185.92</td>
                        <td style="color: var(--success);">+2.45</td>
                        <td><span class="badge badge-success">+1.33%</span></td>
                        <td>52.3M</td>
                        <td>$2.89T</td>
                        <td>$187.20</td>
                        <td>$183.50</td>
                    </tr>
                    <tr>
                        <td><strong>GOOGL</strong></td>
                        <td>$141.80</td>
                        <td style="color: var(--danger);">-1.23</td>
                        <td><span class="badge badge-danger">-0.86%</span></td>
                        <td>28.7M</td>
                        <td>$1.78T</td>
                        <td>$143.50</td>
                        <td>$140.90</td>
                    </tr>
                    <tr>
                        <td><strong>MSFT</strong></td>
                        <td>$378.91</td>
                        <td style="color: var(--success);">+5.67</td>
                        <td><span class="badge badge-success">+1.52%</span></td>
                        <td>21.4M</td>
                        <td>$2.82T</td>
                        <td>$380.00</td>
                        <td>$375.20</td>
                    </tr>
                    <tr>
                        <td><strong>TSLA</strong></td>
                        <td>$248.42</td>
                        <td style="color: var(--danger);">-8.15</td>
                        <td><span class="badge badge-danger">-3.18%</span></td>
                        <td>125.8M</td>
                        <td>$789B</td>
                        <td>$256.80</td>
                        <td>$245.10</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- 8. Responsive Table -->
<div class="content-card" style="margin-bottom: 32px;">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon" style="background: linear-gradient(135deg, #30cfd0 0%, #330867 100%);">
                <i class="fa-solid fa-mobile-screen"></i>
            </div>
            <div>
                <h3>8. Responsive Table</h3>
                <p class="card-subtitle">Auto-scroll horizontal di mobile untuk maintain readability</p>
            </div>
        </div>
        <div class="badge badge-primary">Responsive</div>
    </div>
    <div class="card-body">
        <div style="background: var(--bg-secondary); padding: 12px 16px; border-radius: 8px; margin-bottom: 16px; border-left: 3px solid var(--accent);">
            <p style="margin: 0; font-size: 13px; color: var(--text-secondary);">
                <i class="fa-solid fa-lightbulb" style="color: var(--warning);"></i>
                <strong>Resize your browser</strong> to see the horizontal scroll effect on smaller screens!
            </p>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Country</th>
                        <th>Population</th>
                        <th>Area (km²)</th>
                        <th>GDP (USD)</th>
                        <th>GDP per Capita</th>
                        <th>Growth Rate</th>
                        <th>Life Expectancy</th>
                        <th>Literacy Rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>🇺🇸 United States</strong></td>
                        <td>331M</td>
                        <td>9,833,520</td>
                        <td>$25.46T</td>
                        <td>$76,398</td>
                        <td><span class="badge badge-success">+2.1%</span></td>
                        <td>78.9 years</td>
                        <td>99%</td>
                    </tr>
                    <tr>
                        <td><strong>🇨🇳 China</strong></td>
                        <td>1.41B</td>
                        <td>9,596,961</td>
                        <td>$17.96T</td>
                        <td>$12,720</td>
                        <td><span class="badge badge-success">+8.1%</span></td>
                        <td>77.4 years</td>
                        <td>96.8%</td>
                    </tr>
                    <tr>
                        <td><strong>🇮🇩 Indonesia</strong></td>
                        <td>273M</td>
                        <td>1,904,569</td>
                        <td>$1.32T</td>
                        <td>$4,838</td>
                        <td><span class="badge badge-success">+3.7%</span></td>
                        <td>71.6 years</td>
                        <td>96%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- 9. Fixed Header -->
<div class="content-card" style="margin-bottom: 32px;">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-anchor"></i>
            </div>
            <div>
                <h3>9. Fixed Header</h3>
                <p class="card-subtitle">Header tetap terlihat saat scroll untuk long tables</p>
            </div>
        </div>
        <div class="badge badge-warning">Fixed</div>
    </div>
    <div class="card-body">
        <div class="table-responsive" style="max-height: 300px; overflow-y: auto;">
            <table class="table table-hover" style="position: relative;">
                <thead style="position: sticky; top: 0; z-index: 10; background: var(--bg-secondary);">
                    <tr>
                        <th>Transaction ID</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Amount</th>
                        <th>Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>#TRX-001</code></td>
                        <td>2024-01-01</td>
                        <td>Opening Balance</td>
                        <td>-</td>
                        <td>-</td>
                        <td><strong>Rp 10,000,000</strong></td>
                    </tr>
                    <tr>
                        <td><code>#TRX-002</code></td>
                        <td>2024-01-05</td>
                        <td>Salary Payment</td>
                        <td><span class="badge badge-success">Income</span></td>
                        <td style="color: var(--success);">+Rp 8,000,000</td>
                        <td><strong>Rp 18,000,000</strong></td>
                    </tr>
                    <tr>
                        <td><code>#TRX-003</code></td>
                        <td>2024-01-08</td>
                        <td>Rent Payment</td>
                        <td><span class="badge badge-danger">Expense</span></td>
                        <td style="color: var(--danger);">-Rp 2,500,000</td>
                        <td><strong>Rp 15,500,000</strong></td>
                    </tr>
                    <tr>
                        <td><code>#TRX-004</code></td>
                        <td>2024-01-12</td>
                        <td>Grocery Shopping</td>
                        <td><span class="badge badge-danger">Expense</span></td>
                        <td style="color: var(--danger);">-Rp 850,000</td>
                        <td><strong>Rp 14,650,000</strong></td>
                    </tr>
                    <tr>
                        <td><code>#TRX-005</code></td>
                        <td>2024-01-15</td>
                        <td>Freelance Project</td>
                        <td><span class="badge badge-success">Income</span></td>
                        <td style="color: var(--success);">+Rp 3,500,000</td>
                        <td><strong>Rp 18,150,000</strong></td>
                    </tr>
                    <tr>
                        <td><code>#TRX-006</code></td>
                        <td>2024-01-18</td>
                        <td>Utilities Bill</td>
                        <td><span class="badge badge-danger">Expense</span></td>
                        <td style="color: var(--danger);">-Rp 650,000</td>
                        <td><strong>Rp 17,500,000</strong></td>
                    </tr>
                    <tr>
                        <td><code>#TRX-007</code></td>
                        <td>2024-01-20</td>
                        <td>Online Course</td>
                        <td><span class="badge badge-info">Education</span></td>
                        <td style="color: var(--danger);">-Rp 1,200,000</td>
                        <td><strong>Rp 16,300,000</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- 10. Fixed Column -->
<div class="content-card" style="margin-bottom: 32px;">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-arrows-left-right"></i>
            </div>
            <div>
                <h3>10. Fixed Column</h3>
                <p class="card-subtitle">First column tetap visible saat horizontal scroll</p>
            </div>
        </div>
        <div class="badge badge-success">Fixed Column</div>
    </div>
    <div class="card-body">
        <div class="table-responsive" style="max-height: 300px; overflow: auto;">
            <table class="table table-bordered table-hover" style="min-width: 1200px;">
                <thead>
                    <tr>
                        <th style="position: sticky; left: 0; background: var(--bg-secondary); z-index: 11; min-width: 200px; box-shadow: 2px 0 5px rgba(0,0,0,0.1);">Product Name</th>
                        <th>Jan</th>
                        <th>Feb</th>
                        <th>Mar</th>
                        <th>Apr</th>
                        <th>May</th>
                        <th>Jun</th>
                        <th>Jul</th>
                        <th>Aug</th>
                        <th>Sep</th>
                        <th>Oct</th>
                        <th>Nov</th>
                        <th>Dec</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="position: sticky; left: 0; background: var(--bg-primary); z-index: 10; font-weight: 600; box-shadow: 2px 0 5px rgba(0,0,0,0.1);">Laptop ASUS ROG</td>
                        <td>45</td><td>52</td><td>48</td><td>61</td><td>58</td><td>67</td><td>72</td><td>69</td><td>74</td><td>81</td><td>88</td><td>95</td>
                    </tr>
                    <tr>
                        <td style="position: sticky; left: 0; background: var(--bg-primary); z-index: 10; font-weight: 600; box-shadow: 2px 0 5px rgba(0,0,0,0.1);">iPhone 15 Pro</td>
                        <td>82</td><td>78</td><td>85</td><td>91</td><td>88</td><td>95</td><td>102</td><td>98</td><td>105</td><td>112</td><td>118</td><td>125</td>
                    </tr>
                    <tr>
                        <td style="position: sticky; left: 0; background: var(--bg-primary); z-index: 10; font-weight: 600; box-shadow: 2px 0 5px rgba(0,0,0,0.1);">Sony WH-1000XM5</td>
                        <td>120</td><td>115</td><td>128</td><td>135</td><td>142</td><td>138</td><td>145</td><td>152</td><td>148</td><td>155</td><td>162</td><td>170</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- 11. Sticky Header & Column Combined -->
<div class="content-card" style="margin-bottom: 32px;">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                <i class="fa-solid fa-layer-group"></i>
            </div>
            <div>
                <h3>11. Sticky Header + Column</h3>
                <p class="card-subtitle">Combined sticky header dan first column untuk maximum usability</p>
            </div>
        </div>
        <div class="badge badge-primary">Advanced</div>
    </div>
    <div class="card-body">
        <div class="table-responsive" style="max-height: 300px; overflow: auto;">
            <table class="table table-bordered table-hover" style="min-width: 1200px;">
                <thead style="position: sticky; top: 0; z-index: 10; background: var(--bg-secondary);">
                    <tr>
                        <th style="position: sticky; left: 0; background: var(--bg-secondary); z-index: 12; min-width: 180px; box-shadow: 2px 2px 5px rgba(0,0,0,0.15);">Metric</th>
                        <th>Week 1</th><th>Week 2</th><th>Week 3</th><th>Week 4</th><th>Week 5</th><th>Week 6</th><th>Week 7</th><th>Week 8</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="position: sticky; left: 0; background: var(--bg-primary); z-index: 9; font-weight: 600; box-shadow: 2px 0 5px rgba(0,0,0,0.1);">Page Views</td>
                        <td>12.5K</td><td>13.2K</td><td>14.8K</td><td>15.1K</td><td>16.3K</td><td>17.8K</td><td>18.5K</td><td>19.2K</td>
                    </tr>
                    <tr>
                        <td style="position: sticky; left: 0; background: var(--bg-primary); z-index: 9; font-weight: 600; box-shadow: 2px 0 5px rgba(0,0,0,0.1);">Unique Visitors</td>
                        <td>8.2K</td><td>8.7K</td><td>9.1K</td><td>9.5K</td><td>10.2K</td><td>10.8K</td><td>11.3K</td><td>11.9K</td>
                    </tr>
                    <tr>
                        <td style="position: sticky; left: 0; background: var(--bg-primary); z-index: 9; font-weight: 600; box-shadow: 2px 0 5px rgba(0,0,0,0.1);">Bounce Rate</td>
                        <td>42%</td><td>40%</td><td>38%</td><td>37%</td><td>35%</td><td>34%</td><td>32%</td><td>31%</td>
                    </tr>
                    <tr>
                        <td style="position: sticky; left: 0; background: var(--bg-primary); z-index: 9; font-weight: 600; box-shadow: 2px 0 5px rgba(0,0,0,0.1);">Avg. Session</td>
                        <td>3:45</td><td>3:52</td><td>4:08</td><td>4:15</td><td>4:28</td><td>4:35</td><td>4:42</td><td>4:55</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- 12. Caption Table -->
<div class="content-card" style="margin-bottom: 32px;">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                <i class="fa-solid fa-closed-captioning"></i>
            </div>
            <div>
                <h3>12. Caption Table</h3>
                <p class="card-subtitle">Table caption untuk accessibility dan SEO optimization</p>
            </div>
        </div>
        <div class="badge badge-info">Accessible</div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <caption style="caption-side: top; padding: 12px 0; font-weight: 600; color: var(--text-primary);">
                    <i class="fa-solid fa-circle-info" style="color: var(--accent);"></i>
                    Table 1: Employee Performance Metrics - Q4 2024
                </caption>
                <thead>
                    <tr>
                        <th>Employee</th>
                        <th>Tasks Completed</th>
                        <th>Avg. Rating</th>
                        <th>Attendance</th>
                        <th>Performance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>John Smith</strong></td>
                        <td>145</td>
                        <td><span style="color: var(--warning);">★★★★★</span> 4.8</td>
                        <td>98%</td>
                        <td><span class="badge badge-success">Excellent</span></td>
                    </tr>
                    <tr>
                        <td><strong>Sarah Johnson</strong></td>
                        <td>138</td>
                        <td><span style="color: var(--warning);">★★★★★</span> 4.7</td>
                        <td>96%</td>
                        <td><span class="badge badge-success">Excellent</span></td>
                    </tr>
                    <tr>
                        <td><strong>Mike Davis</strong></td>
                        <td>125</td>
                        <td><span style="color: var(--warning);">★★★★</span><span style="color: var(--text-tertiary);">★</span> 4.3</td>
                        <td>94%</td>
                        <td><span class="badge badge-info">Good</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- 13. Table Footer -->
<div class="content-card" style="margin-bottom: 32px;">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-table-footer"></i>
            </div>
            <div>
                <h3>13. Table Footer</h3>
                <p class="card-subtitle">Footer row dengan summary data dan calculated totals</p>
            </div>
        </div>
        <div class="badge badge-warning">Summary</div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Q1 Sales</th>
                        <th>Q2 Sales</th>
                        <th>Q3 Sales</th>
                        <th>Q4 Sales</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Laptop ASUS ROG</strong></td>
                        <td>Rp 185M</td>
                        <td>Rp 210M</td>
                        <td>Rp 195M</td>
                        <td>Rp 240M</td>
                        <td><strong>Rp 830M</strong></td>
                    </tr>
                    <tr>
                        <td><strong>iPhone 15 Pro</strong></td>
                        <td>Rp 315M</td>
                        <td>Rp 290M</td>
                        <td>Rp 325M</td>
                        <td>Rp 380M</td>
                        <td><strong>Rp 1.31B</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Sony WH-1000XM5</strong></td>
                        <td>Rp 60M</td>
                        <td>Rp 72M</td>
                        <td>Rp 68M</td>
                        <td>Rp 85M</td>
                        <td><strong>Rp 285M</strong></td>
                    </tr>
                </tbody>
                <tfoot style="background: var(--bg-secondary); font-weight: 600;">
                    <tr>
                        <td><strong>GRAND TOTAL</strong></td>
                        <td>Rp 560M</td>
                        <td>Rp 572M</td>
                        <td>Rp 588M</td>
                        <td>Rp 705M</td>
                        <td style="color: var(--accent); font-size: 16px;"><strong>Rp 2.425B</strong></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<!-- 14. Empty State Table -->
<div class="content-card" style="margin-bottom: 32px;">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-secondary">
                <i class="fa-solid fa-inbox"></i>
            </div>
            <div>
                <h3>14. Empty State Table</h3>
                <p class="card-subtitle">Beautiful empty state untuk zero data scenarios</p>
            </div>
        </div>
        <div class="badge badge-secondary">Empty State</div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 60px 20px;">
                            <div style="max-width: 400px; margin: 0 auto;">
                                <div style="width: 120px; height: 120px; margin: 0 auto 24px; background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fa-solid fa-inbox" style="font-size: 48px; color: var(--accent);"></i>
                                </div>
                                <h4 style="margin-bottom: 8px; color: var(--text-primary);">No Orders Yet</h4>
                                <p style="color: var(--text-secondary); margin-bottom: 20px; font-size: 14px;">Get started by creating your first order. Click the button below to add a new order.</p>
                                <button class="btn btn-primary">
                                    <i class="fa-solid fa-plus"></i>
                                    <span>Create First Order</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- 15. Loading State Table -->
<div class="content-card" style="margin-bottom: 32px;">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                <i class="fa-solid fa-spinner"></i>
            </div>
            <div>
                <h3>15. Loading State Table</h3>
                <p class="card-subtitle">Skeleton loading animation untuk better UX saat data fetching</p>
            </div>
        </div>
        <div class="badge badge-info">Loading</div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th><div class="dsgt-shimmer" style="height: 16px; border-radius: 4px; width: 80px;"></div></th>
                        <th><div class="dsgt-shimmer" style="height: 16px; border-radius: 4px; width: 120px;"></div></th>
                        <th><div class="dsgt-shimmer" style="height: 16px; border-radius: 4px; width: 150px;"></div></th>
                        <th><div class="dsgt-shimmer" style="height: 16px; border-radius: 4px; width: 100px;"></div></th>
                        <th><div class="dsgt-shimmer" style="height: 16px; border-radius: 4px; width: 90px;"></div></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><div class="dsgt-shimmer" style="height: 40px; border-radius: 4px;"></div></td>
                        <td><div class="dsgt-shimmer" style="height: 40px; border-radius: 4px;"></div></td>
                        <td><div class="dsgt-shimmer" style="height: 40px; border-radius: 4px;"></div></td>
                        <td><div class="dsgt-shimmer" style="height: 40px; border-radius: 4px;"></div></td>
                        <td><div class="dsgt-shimmer" style="height: 40px; border-radius: 4px;"></div></td>
                    </tr>
                    <tr>
                        <td><div class="dsgt-shimmer" style="height: 40px; border-radius: 4px;"></div></td>
                        <td><div class="dsgt-shimmer" style="height: 40px; border-radius: 4px;"></div></td>
                        <td><div class="dsgt-shimmer" style="height: 40px; border-radius: 4px;"></div></td>
                        <td><div class="dsgt-shimmer" style="height: 40px; border-radius: 4px;"></div></td>
                        <td><div class="dsgt-shimmer" style="height: 40px; border-radius: 4px;"></div></td>
                    </tr>
                    <tr>
                        <td><div class="dsgt-shimmer" style="height: 40px; border-radius: 4px;"></div></td>
                        <td><div class="dsgt-shimmer" style="height: 40px; border-radius: 4px;"></div></td>
                        <td><div class="dsgt-shimmer" style="height: 40px; border-radius: 4px;"></div></td>
                        <td><div class="dsgt-shimmer" style="height: 40px; border-radius: 4px;"></div></td>
                        <td><div class="dsgt-shimmer" style="height: 40px; border-radius: 4px;"></div></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- 16. Dark Table -->
<div class="content-card" style="margin-bottom: 32px;">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon" style="background: linear-gradient(135deg, #2d3748 0%, #1a202c 100%);">
                <i class="fa-solid fa-moon"></i>
            </div>
            <div>
                <h3>16. Dark Table</h3>
                <p class="card-subtitle">Dark theme table untuk high contrast dan modern aesthetics</p>
            </div>
        </div>
        <div class="badge" style="background: #2d3748; color: white;">Dark Theme</div>
    </div>
    <div class="card-body" style="padding: 0;">
        <div class="dsgt-dark-table">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>
                                <i class="fa-solid fa-server dsgt-icon-blue"></i>
                                Server Name
                            </th>
                            <th>
                                <i class="fa-solid fa-network-wired dsgt-icon-green"></i>
                                IP Address
                            </th>
                            <th>
                                <i class="fa-solid fa-microchip dsgt-icon-orange"></i>
                                CPU Usage
                            </th>
                            <th>
                                <i class="fa-solid fa-memory dsgt-icon-purple"></i>
                                Memory
                            </th>
                            <th>
                                <i class="fa-solid fa-hard-drive dsgt-icon-cyan"></i>
                                Disk
                            </th>
                            <th>
                                <i class="fa-solid fa-circle-info dsgt-icon-pink"></i>
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="dsgt-server-info">
                                    <div class="dsgt-server-icon dsgt-bg-success">
                                        <i class="fa-solid fa-server"></i>
                                    </div>
                                    <div>
                                        <div class="dsgt-server-name">Production Server</div>
                                        <div class="dsgt-server-region">US-East-1</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <code class="dsgt-ip-code">192.168.1.100</code>
                            </td>
                            <td>
                                <div class="dsgt-progress-container">
                                    <div class="dsgt-progress-bar">
                                        <div class="dsgt-progress-fill dsgt-progress-success" style="width: 45%;"></div>
                                    </div>
                                    <span class="dsgt-progress-value dsgt-text-success">45%</span>
                                </div>
                            </td>
                            <td>
                                <div class="dsgt-progress-container">
                                    <div class="dsgt-progress-bar">
                                        <div class="dsgt-progress-fill dsgt-progress-warning" style="width: 62%;"></div>
                                    </div>
                                    <span class="dsgt-progress-value dsgt-text-warning">62%</span>
                                </div>
                            </td>
                            <td>
                                <div class="dsgt-progress-container">
                                    <div class="dsgt-progress-bar">
                                        <div class="dsgt-progress-fill dsgt-progress-warning" style="width: 78%;"></div>
                                    </div>
                                    <span class="dsgt-progress-value dsgt-text-warning">78%</span>
                                </div>
                            </td>
                            <td>
                                <span class="dsgt-status-badge dsgt-status-online">
                                    <span class="dsgt-status-dot dsgt-pulse"></span>
                                    Online
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dsgt-server-info">
                                    <div class="dsgt-server-icon dsgt-bg-info">
                                        <i class="fa-solid fa-server"></i>
                                    </div>
                                    <div>
                                        <div class="dsgt-server-name">Staging Server</div>
                                        <div class="dsgt-server-region">EU-West-1</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <code class="dsgt-ip-code">192.168.1.101</code>
                            </td>
                            <td>
                                <div class="dsgt-progress-container">
                                    <div class="dsgt-progress-bar">
                                        <div class="dsgt-progress-fill dsgt-progress-success" style="width: 32%;"></div>
                                    </div>
                                    <span class="dsgt-progress-value dsgt-text-success">32%</span>
                                </div>
                            </td>
                            <td>
                                <div class="dsgt-progress-container">
                                    <div class="dsgt-progress-bar">
                                        <div class="dsgt-progress-fill dsgt-progress-success" style="width: 48%;"></div>
                                    </div>
                                    <span class="dsgt-progress-value dsgt-text-success">48%</span>
                                </div>
                            </td>
                            <td>
                                <div class="dsgt-progress-container">
                                    <div class="dsgt-progress-bar">
                                        <div class="dsgt-progress-fill dsgt-progress-success" style="width: 55%;"></div>
                                    </div>
                                    <span class="dsgt-progress-value dsgt-text-success">55%</span>
                                </div>
                            </td>
                            <td>
                                <span class="dsgt-status-badge dsgt-status-online">
                                    <span class="dsgt-status-dot dsgt-pulse"></span>
                                    Online
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dsgt-server-info">
                                    <div class="dsgt-server-icon dsgt-bg-warning">
                                        <i class="fa-solid fa-server"></i>
                                    </div>
                                    <div>
                                        <div class="dsgt-server-name">Development Server</div>
                                        <div class="dsgt-server-region">AP-Southeast-1</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <code class="dsgt-ip-code">192.168.1.102</code>
                            </td>
                            <td>
                                <div class="dsgt-progress-container">
                                    <div class="dsgt-progress-bar">
                                        <div class="dsgt-progress-fill dsgt-progress-danger" style="width: 78%;"></div>
                                    </div>
                                    <span class="dsgt-progress-value dsgt-text-danger">78%</span>
                                </div>
                            </td>
                            <td>
                                <div class="dsgt-progress-container">
                                    <div class="dsgt-progress-bar">
                                        <div class="dsgt-progress-fill dsgt-progress-danger" style="width: 85%;"></div>
                                    </div>
                                    <span class="dsgt-progress-value dsgt-text-danger">85%</span>
                                </div>
                            </td>
                            <td>
                                <div class="dsgt-progress-container">
                                    <div class="dsgt-progress-bar">
                                        <div class="dsgt-progress-fill dsgt-progress-danger" style="width: 92%;"></div>
                                    </div>
                                    <span class="dsgt-progress-value dsgt-text-danger">92%</span>
                                </div>
                            </td>
                            <td>
                                <span class="dsgt-status-badge dsgt-status-high-load">
                                    <span class="dsgt-status-dot dsgt-pulse"></span>
                                    High Load
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dsgt-server-info">
                                    <div class="dsgt-server-icon dsgt-bg-secondary">
                                        <i class="fa-solid fa-server"></i>
                                    </div>
                                    <div>
                                        <div class="dsgt-server-name">Backup Server</div>
                                        <div class="dsgt-server-region">US-West-2</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <code class="dsgt-ip-code">192.168.1.103</code>
                            </td>
                            <td>
                                <div class="dsgt-progress-container">
                                    <div class="dsgt-progress-bar">
                                        <div class="dsgt-progress-fill dsgt-progress-success" style="width: 12%;"></div>
                                    </div>
                                    <span class="dsgt-progress-value dsgt-text-success">12%</span>
                                </div>
                            </td>
                            <td>
                                <div class="dsgt-progress-container">
                                    <div class="dsgt-progress-bar">
                                        <div class="dsgt-progress-fill dsgt-progress-success" style="width: 25%;"></div>
                                    </div>
                                    <span class="dsgt-progress-value dsgt-text-success">25%</span>
                                </div>
                            </td>
                            <td>
                                <div class="dsgt-progress-container">
                                    <div class="dsgt-progress-bar">
                                        <div class="dsgt-progress-fill dsgt-progress-success" style="width: 35%;"></div>
                                    </div>
                                    <span class="dsgt-progress-value dsgt-text-success">35%</span>
                                </div>
                            </td>
                            <td>
                                <span class="dsgt-status-badge dsgt-status-offline">
                                    <span class="dsgt-status-dot"></span>
                                    Standby
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- 17. Striped + Hover + Bordered Combined -->
<div class="content-card" style="margin-bottom: 32px;">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon" style="background: linear-gradient(135deg, #38b2ac 0%, #319795 100%);">
                <i class="fa-solid fa-wand-magic-sparkles"></i>
            </div>
            <div>
                <h3>17. Combined Styles</h3>
                <p class="card-subtitle">Striped + Hover + Bordered untuk maximum visual appeal</p>
            </div>
        </div>
        <div class="badge badge-success">Pro</div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Invoice</th>
                        <th>Client</th>
                        <th>Service</th>
                        <th>Amount</th>
                        <th>Due Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>#INV-2024-001</code></td>
                        <td><strong>PT. Maju Jaya</strong></td>
                        <td>Web Development</td>
                        <td><strong>Rp 45.000.000</strong></td>
                        <td>2024-02-15</td>
                        <td><span class="badge badge-success"><i class="fa-solid fa-check"></i> Paid</span></td>
                    </tr>
                    <tr>
                        <td><code>#INV-2024-002</code></td>
                        <td><strong>CV. Karya Mandiri</strong></td>
                        <td>Mobile App</td>
                        <td><strong>Rp 68.000.000</strong></td>
                        <td>2024-02-20</td>
                        <td><span class="badge badge-warning"><i class="fa-solid fa-clock"></i> Pending</span></td>
                    </tr>
                    <tr>
                        <td><code>#INV-2024-003</code></td>
                        <td><strong>PT. Teknologi Nusantara</strong></td>
                        <td>UI/UX Design</td>
                        <td><strong>Rp 25.000.000</strong></td>
                        <td>2024-01-30</td>
                        <td><span class="badge badge-danger"><i class="fa-solid fa-exclamation"></i> Overdue</span></td>
                    </tr>
                    <tr>
                        <td><code>#INV-2024-004</code></td>
                        <td><strong>Startup Digital Indonesia</strong></td>
                        <td>API Integration</td>
                        <td><strong>Rp 35.000.000</strong></td>
                        <td>2024-03-01</td>
                        <td><span class="badge badge-info"><i class="fa-solid fa-hourglass"></i> Processing</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Note: Advanced Search Filter functionality is now handled globally in app.js
// All CSS classes are prefixed with dsgt-* for reusability

// Select All Checkbox Functionality for Filtered Table
document.addEventListener('DOMContentLoaded', function() {
    const selectAllFiltered = document.getElementById('selectAllFiltered');
    const rowCheckboxesFiltered = document.querySelectorAll('.row-checkbox-filtered');
    
    // Select all checkboxes for filtered table
    if (selectAllFiltered) {
        selectAllFiltered.addEventListener('change', function() {
            rowCheckboxesFiltered.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });
    }
    
    // Update select all state when individual checkbox changes for filtered table
    rowCheckboxesFiltered.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const allChecked = Array.from(rowCheckboxesFiltered).every(cb => cb.checked);
            const someChecked = Array.from(rowCheckboxesFiltered).some(cb => cb.checked);
            
            if (selectAllFiltered) {
                selectAllFiltered.checked = allChecked;
                selectAllFiltered.indeterminate = someChecked && !allChecked;
            }
        });
    });
});
</script>
@endpush
