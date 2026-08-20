@extends('layouts.app')

@section('title', 'Timelines')
@section('breadcrumb', 'Timelines')

@push('styles')
<!-- SW Timelines styles are now in app.css -->
@endpush

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Timelines</h1>
        <p>Chronological event displays that show activities, milestones, and progress over time</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <span>History</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card sw-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What are Timelines?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Timelines are visual representations of events arranged chronologically. They help users understand the sequence of activities, track progress, and visualize historical data. Timelines are commonly used for activity feeds, project milestones, version history, and process flows.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Timeline -->
<div class="sw-timeline-section-title">
    <i class="fa-solid fa-bars-staggered"></i>
    Basic Timeline <span class="badge badge-primary">Essential</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-clock"></i>
            </div>
            <div>
                <h3>Vertical Timeline</h3>
                <p class="card-subtitle">Standard timeline layout</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-timeline-example">
            <span class="sw-timeline-example-label">Activity Feed</span>
            <div class="sw-demo-timeline">
                <div class="sw-timeline-item">
                    <div class="sw-timeline-dot"></div>
                    <div class="sw-timeline-content">
                        <h4 class="sw-timeline-title">Project Created</h4>
                        <div class="sw-timeline-date">Today at 10:30 AM</div>
                        <p class="sw-timeline-description">New project "Swantara Admin" has been created with initial setup and configuration.</p>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="sw-timeline-dot sw-timeline-dot-success"></div>
                    <div class="sw-timeline-content">
                        <h4 class="sw-timeline-title">Task Completed</h4>
                        <div class="sw-timeline-date">Today at 11:45 AM</div>
                        <p class="sw-timeline-description">User authentication module has been successfully implemented and tested.</p>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="sw-timeline-dot sw-timeline-dot-warning"></div>
                    <div class="sw-timeline-content">
                        <h4 class="sw-timeline-title">Review Pending</h4>
                        <div class="sw-timeline-date">Today at 2:00 PM</div>
                        <p class="sw-timeline-description">Dashboard components are ready for review. Please check the UI/UX implementation.</p>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="sw-timeline-dot sw-timeline-dot-info"></div>
                    <div class="sw-timeline-content">
                        <h4 class="sw-timeline-title">Comment Added</h4>
                        <div class="sw-timeline-date">Today at 3:30 PM</div>
                        <p class="sw-timeline-description">Team member left feedback on the navigation component design.</p>
                    </div>
                </div>
            </div>
            <div class="sw-timeline-helper">
                <i class="fa-solid fa-circle-info"></i>
                Chronological activity display
            </div>
        </div>
    </div>
</div>

<!-- Timeline with Icons -->
<div class="sw-timeline-section-title">
    <i class="fa-solid fa-icons"></i>
    Timeline with Icons
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-circle-check"></i>
            </div>
            <div>
                <h3>Icon Timeline</h3>
                <p class="card-subtitle">Descriptive icon indicators</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-timeline-example">
            <span class="sw-timeline-example-label">Project Milestones</span>
            <div class="sw-demo-timeline">
                <div class="sw-timeline-item">
                    <div class="sw-timeline-icon">
                        <i class="fa-solid fa-rocket"></i>
                    </div>
                    <div class="sw-timeline-content">
                        <h4 class="sw-timeline-title">Project Launch</h4>
                        <div class="sw-timeline-date">January 15, 2024</div>
                        <p class="sw-timeline-description">Initial project setup and repository created with base configuration.</p>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="sw-timeline-icon" style="background: var(--success);">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <div class="sw-timeline-content">
                        <h4 class="sw-timeline-title">Development Phase</h4>
                        <div class="sw-timeline-date">February 1, 2024</div>
                        <p class="sw-timeline-description">Core features implementation including authentication and dashboard.</p>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="sw-timeline-icon" style="background: var(--warning);">
                        <i class="fa-solid fa-bug"></i>
                    </div>
                    <div class="sw-timeline-content">
                        <h4 class="sw-timeline-title">Testing & QA</h4>
                        <div class="sw-timeline-date">March 10, 2024</div>
                        <p class="sw-timeline-description">Comprehensive testing phase with bug fixes and performance optimization.</p>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="sw-timeline-icon" style="background: var(--danger);">
                        <i class="fa-solid fa-flag-checkered"></i>
                    </div>
                    <div class="sw-timeline-content">
                        <h4 class="sw-timeline-title">Release v1.0</h4>
                        <div class="sw-timeline-date">April 1, 2024</div>
                        <p class="sw-timeline-description">Production deployment with full feature set and documentation.</p>
                    </div>
                </div>
            </div>
            <div class="sw-timeline-helper">
                <i class="fa-solid fa-circle-info"></i>
                Icon-based milestone tracking
            </div>
        </div>
    </div>
</div>

<!-- Horizontal Timeline -->
<div class="sw-timeline-section-title">
    <i class="fa-solid fa-arrows-left-right"></i>
    Horizontal Timeline
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-right-left"></i>
            </div>
            <div>
                <h3>Horizontal Layout</h3>
                <p class="card-subtitle">Left to right timeline</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-timeline-example">
            <span class="sw-timeline-example-label">Version History</span>
            <div class="sw-timeline-horizontal">
                <div class="sw-timeline-horizontal-item">
                    <div class="sw-timeline-horizontal-date">v1.0</div>
                    <div class="sw-timeline-horizontal-dot"></div>
                    <div class="sw-timeline-horizontal-title">Initial Release</div>
                </div>
                
                <div class="sw-timeline-horizontal-item">
                    <div class="sw-timeline-horizontal-date">v1.1</div>
                    <div class="sw-timeline-horizontal-dot" style="background: var(--success); box-shadow: 0 0 0 2px var(--success);"></div>
                    <div class="sw-timeline-horizontal-title">Bug Fixes</div>
                </div>
                
                <div class="sw-timeline-horizontal-item">
                    <div class="sw-timeline-horizontal-date">v1.2</div>
                    <div class="sw-timeline-horizontal-dot" style="background: var(--warning); box-shadow: 0 0 0 2px var(--warning);"></div>
                    <div class="sw-timeline-horizontal-title">New Features</div>
                </div>
                
                <div class="sw-timeline-horizontal-item">
                    <div class="sw-timeline-horizontal-date">v2.0</div>
                    <div class="sw-timeline-horizontal-dot" style="background: var(--info); box-shadow: 0 0 0 2px var(--info);"></div>
                    <div class="sw-timeline-horizontal-title">Major Update</div>
                </div>
                
                <div class="sw-timeline-horizontal-item">
                    <div class="sw-timeline-horizontal-date">v2.1</div>
                    <div class="sw-timeline-horizontal-dot" style="background: var(--danger); box-shadow: 0 0 0 2px var(--danger);"></div>
                    <div class="sw-timeline-horizontal-title">Security Patch</div>
                </div>
            </div>
            <div class="sw-timeline-helper">
                <i class="fa-solid fa-circle-info"></i>
                Scroll horizontally to see all versions
            </div>
        </div>
    </div>
</div>

<!-- Timeline with Badges -->
<div class="sw-timeline-section-title">
    <i class="fa-solid fa-tag"></i>
    Timeline with Badges
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-bookmark"></i>
            </div>
            <div>
                <h3>Badged Timeline</h3>
                <p class="card-subtitle">Status badges and labels</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-timeline-example">
            <span class="sw-timeline-example-label">Order Status</span>
            <div class="sw-demo-timeline">
                <div class="sw-timeline-item">
                    <div class="timeline-dot timeline-dot-success"></div>
                    <div class="sw-timeline-content">
                        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 4px;">
                            <h4 class="sw-timeline-title" style="margin: 0;">Order Placed</h4>
                            <span class="badge badge-success">Completed</span>
                        </div>
                        <div class="sw-timeline-date">Jan 15, 2024 - 10:30 AM</div>
                        <p class="sw-timeline-description">Order #12345 has been successfully placed and confirmed.</p>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="timeline-dot timeline-dot-success"></div>
                    <div class="sw-timeline-content">
                        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 4px;">
                            <h4 class="sw-timeline-title" style="margin: 0;">Payment Confirmed</h4>
                            <span class="badge badge-success">Completed</span>
                        </div>
                        <div class="sw-timeline-date">Jan 15, 2024 - 10:35 AM</div>
                        <p class="sw-timeline-description">Payment of $299.99 has been processed successfully.</p>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="timeline-dot timeline-dot-warning"></div>
                    <div class="sw-timeline-content">
                        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 4px;">
                            <h4 class="sw-timeline-title" style="margin: 0;">Processing</h4>
                            <span class="badge badge-warning">In Progress</span>
                        </div>
                        <div class="sw-timeline-date">Jan 16, 2024 - 2:00 PM</div>
                        <p class="sw-timeline-description">Order is being prepared for shipment.</p>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="timeline-dot timeline-dot-info"></div>
                    <div class="sw-timeline-content">
                        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 4px;">
                            <h4 class="sw-timeline-title" style="margin: 0;">Shipped</h4>
                            <span class="badge badge-info">In Transit</span>
                        </div>
                        <div class="sw-timeline-date">Jan 17, 2024 - 9:00 AM</div>
                        <p class="sw-timeline-description">Package has been shipped via Express Delivery. Tracking: ABC123XYZ</p>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="sw-timeline-dot"></div>
                    <div class="sw-timeline-content" style="opacity: 0.5;">
                        <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 4px;">
                            <h4 class="sw-timeline-title" style="margin: 0;">Delivered</h4>
                            <span class="badge badge-secondary">Pending</span>
                        </div>
                        <div class="sw-timeline-date">Expected: Jan 18, 2024</div>
                        <p class="sw-timeline-description">Awaiting delivery confirmation.</p>
                    </div>
                </div>
            </div>
            <div class="sw-timeline-helper">
                <i class="fa-solid fa-circle-info"></i>
                Order tracking with status badges
            </div>
        </div>
    </div>
</div>

<!-- Centered Timeline -->
<div class="sw-timeline-section-title">
    <i class="fa-solid fa-align-center"></i>
    Centered Timeline
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-danger">
                <i class="fa-solid fa-grip-lines"></i>
            </div>
            <div>
                <h3>Alternating Timeline</h3>
                <p class="card-subtitle">Left and right layout</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-timeline-example" style="overflow-x: auto;">
            <span class="sw-timeline-example-label">Company History</span>
            <div class="demo-timeline timeline-centered">
                <div class="sw-timeline-item">
                    <div class="sw-timeline-dot"></div>
                    <div class="sw-timeline-content">
                        <h4 class="sw-timeline-title">Company Founded</h4>
                        <div class="sw-timeline-date">2010</div>
                        <p class="sw-timeline-description">Started with a team of 3 in a small office.</p>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="timeline-dot timeline-dot-success"></div>
                    <div class="sw-timeline-content">
                        <h4 class="sw-timeline-title">First Product Launch</h4>
                        <div class="sw-timeline-date">2012</div>
                        <p class="sw-timeline-description">Released our flagship product to the market.</p>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="timeline-dot timeline-dot-warning"></div>
                    <div class="sw-timeline-content">
                        <h4 class="sw-timeline-title">Series A Funding</h4>
                        <div class="sw-timeline-date">2015</div>
                        <p class="sw-timeline-description">Raised $5M to expand operations and team.</p>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="timeline-dot timeline-dot-info"></div>
                    <div class="sw-timeline-content">
                        <h4 class="sw-timeline-title">Global Expansion</h4>
                        <div class="sw-timeline-date">2018</div>
                        <p class="sw-timeline-description">Opened offices in 5 countries worldwide.</p>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="timeline-dot timeline-dot-danger"></div>
                    <div class="sw-timeline-content">
                        <h4 class="sw-timeline-title">IPO Success</h4>
                        <div class="sw-timeline-date">2024</div>
                        <p class="sw-timeline-description">Went public with successful stock market listing.</p>
                    </div>
                </div>
            </div>
            <div class="sw-timeline-helper">
                <i class="fa-solid fa-circle-info"></i>
                Alternating left-right timeline (responsive: stacks on mobile)
            </div>
        </div>
    </div>
</div>

<!-- Timeline with Images -->
<div class="sw-timeline-section-title">
    <i class="fa-solid fa-images"></i>
    Timeline with Media
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-photo-film"></i>
            </div>
            <div>
                <h3>Media Timeline</h3>
                <p class="card-subtitle">Images and media content</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-timeline-example">
            <span class="sw-timeline-example-label">Project Gallery</span>
            <div class="sw-demo-timeline">
                <div class="sw-timeline-item">
                    <div class="sw-timeline-icon">
                        <i class="fa-solid fa-image"></i>
                    </div>
                    <div class="sw-timeline-content">
                        <h4 class="sw-timeline-title">Design Mockups Created</h4>
                        <div class="sw-timeline-date">Week 1</div>
                        <p class="sw-timeline-description">Initial design concepts and wireframes completed.</p>
                        <div style="margin-top: 12px; display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px;">
                            <div style="height: 60px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 6px;"></div>
                            <div style="height: 60px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); border-radius: 6px;"></div>
                            <div style="height: 60px; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); border-radius: 6px;"></div>
                        </div>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="sw-timeline-icon" style="background: var(--success);">
                        <i class="fa-solid fa-video"></i>
                    </div>
                    <div class="sw-timeline-content">
                        <h4 class="sw-timeline-title">Demo Video Recorded</h4>
                        <div class="sw-timeline-date">Week 3</div>
                        <p class="sw-timeline-description">Product demonstration video created for marketing.</p>
                        <div style="margin-top: 12px; height: 100px; background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); border-radius: 6px; display: flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-play-circle" style="font-size: 40px; color: white;"></i>
                        </div>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="sw-timeline-icon" style="background: var(--warning);">
                        <i class="fa-solid fa-file-pdf"></i>
                    </div>
                    <div class="sw-timeline-content">
                        <h4 class="sw-timeline-title">Documentation Published</h4>
                        <div class="sw-timeline-date">Week 4</div>
                        <p class="sw-timeline-description">Complete user guide and API documentation released.</p>
                        <div style="margin-top: 12px; padding: 12px; background: rgba(0, 0, 0, 0.03); border-radius: 6px;">
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <i class="fa-solid fa-file-lines" style="color: var(--danger); font-size: 20px;"></i>
                                <div style="flex: 1;">
                                    <div style="font-size: 13px; font-weight: 600;">User_Guide_v1.0.pdf</div>
                                    <div style="font-size: 11px; color: var(--text-secondary);">2.4 MB • 45 pages</div>
                                </div>
                                <button class="btn btn-sm btn-primary">
                                    <i class="fa-solid fa-download"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sw-timeline-helper">
                <i class="fa-solid fa-circle-info"></i>
                Timeline with images, videos, and documents
            </div>
        </div>
    </div>
</div>

<!-- Timeline with Actions -->
<div class="sw-timeline-section-title">
    <i class="fa-solid fa-hand-pointer"></i>
    Timeline with Actions
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-gear"></i>
            </div>
            <div>
                <h3>Interactive Timeline</h3>
                <p class="card-subtitle">Action buttons and controls</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-timeline-example">
            <span class="sw-timeline-example-label">Task Management</span>
            <div class="sw-demo-timeline">
                <div class="sw-timeline-item">
                    <div class="timeline-dot timeline-dot-success"></div>
                    <div class="sw-timeline-content">
                        <div style="display: flex; justify-content: space-between; align-items: start;">
                            <div style="flex: 1;">
                                <h4 class="sw-timeline-title">Setup Development Environment</h4>
                                <div class="sw-timeline-date">Completed: Jan 10, 2024</div>
                                <p class="sw-timeline-description">Installed all required dependencies and configured local server.</p>
                            </div>
                            <button class="btn btn-sm btn-success" style="margin-left: 12px;">
                                <i class="fa-solid fa-check"></i> Done
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="timeline-dot timeline-dot-success"></div>
                    <div class="sw-timeline-content">
                        <div style="display: flex; justify-content: space-between; align-items: start;">
                            <div style="flex: 1;">
                                <h4 class="sw-timeline-title">Database Schema Design</h4>
                                <div class="sw-timeline-date">Completed: Jan 12, 2024</div>
                                <p class="sw-timeline-description">Created comprehensive database structure with all required tables.</p>
                            </div>
                            <button class="btn btn-sm btn-secondary" style="margin-left: 12px;">
                                <i class="fa-solid fa-eye"></i> View
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="timeline-dot timeline-dot-warning"></div>
                    <div class="sw-timeline-content">
                        <div style="display: flex; justify-content: space-between; align-items: start;">
                            <div style="flex: 1;">
                                <h4 class="sw-timeline-title">API Development</h4>
                                <div class="sw-timeline-date">Due: Jan 20, 2024</div>
                                <p class="sw-timeline-description">Building RESTful API endpoints for all core features.</p>
                                <div style="margin-top: 12px; display: flex; gap: 8px;">
                                    <button class="btn btn-sm btn-primary">
                                        <i class="fa-solid fa-play"></i> Start
                                    </button>
                                    <button class="btn btn-sm btn-warning">
                                        <i class="fa-solid fa-pause"></i> Pause
                                    </button>
                                    <button class="btn btn-sm btn-danger">
                                        <i class="fa-solid fa-flag"></i> Flag
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sw-timeline-helper">
                <i class="fa-solid fa-circle-info"></i>
                Actionable timeline with buttons and controls
            </div>
        </div>
    </div>
</div>

<!-- Timeline with Progress -->
<div class="sw-timeline-section-title">
    <i class="fa-solid fa-bars-progress"></i>
    Timeline with Progress
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-chart-line"></i>
            </div>
            <div>
                <h3>Progress Timeline</h3>
                <p class="card-subtitle">Completion percentage indicators</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-timeline-example">
            <span class="sw-timeline-example-label">Course Progress</span>
            <div class="sw-demo-timeline">
                <div class="sw-timeline-item">
                    <div class="timeline-dot timeline-dot-success"></div>
                    <div class="sw-timeline-content">
                        <h4 class="sw-timeline-title">Introduction to Laravel</h4>
                        <div class="sw-timeline-date">Module 1 • Completed</div>
                        <p class="sw-timeline-description">Learn the basics of Laravel framework and MVC architecture.</p>
                        <div style="margin-top: 12px;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 4px;">
                                <span style="font-size: 11px; font-weight: 600; color: var(--success);">100% Complete</span>
                                <span style="font-size: 11px; color: var(--text-secondary);">12/12 lessons</span>
                            </div>
                            <div style="height: 6px; background: rgba(0, 0, 0, 0.05); border-radius: 3px; overflow: hidden;">
                                <div style="width: 100%; height: 100%; background: var(--success); border-radius: 3px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="timeline-dot timeline-dot-success"></div>
                    <div class="sw-timeline-content">
                        <h4 class="sw-timeline-title">Database & Migrations</h4>
                        <div class="sw-timeline-date">Module 2 • Completed</div>
                        <p class="sw-timeline-description">Master database operations, migrations, and Eloquent ORM.</p>
                        <div style="margin-top: 12px;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 4px;">
                                <span style="font-size: 11px; font-weight: 600; color: var(--success);">100% Complete</span>
                                <span style="font-size: 11px; color: var(--text-secondary);">15/15 lessons</span>
                            </div>
                            <div style="height: 6px; background: rgba(0, 0, 0, 0.05); border-radius: 3px; overflow: hidden;">
                                <div style="width: 100%; height: 100%; background: var(--success); border-radius: 3px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="timeline-dot timeline-dot-warning"></div>
                    <div class="sw-timeline-content">
                        <h4 class="sw-timeline-title">Authentication & Authorization</h4>
                        <div class="sw-timeline-date">Module 3 • In Progress</div>
                        <p class="sw-timeline-description">Implement user authentication, roles, and permissions system.</p>
                        <div style="margin-top: 12px;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 4px;">
                                <span style="font-size: 11px; font-weight: 600; color: var(--warning);">60% Complete</span>
                                <span style="font-size: 11px; color: var(--text-secondary);">6/10 lessons</span>
                            </div>
                            <div style="height: 6px; background: rgba(0, 0, 0, 0.05); border-radius: 3px; overflow: hidden;">
                                <div style="width: 60%; height: 100%; background: var(--warning); border-radius: 3px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="sw-timeline-item">
                    <div class="sw-timeline-dot"></div>
                    <div class="sw-timeline-content" style="opacity: 0.5;">
                        <h4 class="sw-timeline-title">API Development</h4>
                        <div class="sw-timeline-date">Module 4 • Not Started</div>
                        <p class="sw-timeline-description">Build RESTful APIs with Laravel Sanctum authentication.</p>
                        <div style="margin-top: 12px;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 4px;">
                                <span style="font-size: 11px; font-weight: 600; color: var(--text-secondary);">0% Complete</span>
                                <span style="font-size: 11px; color: var(--text-secondary);">0/8 lessons</span>
                            </div>
                            <div style="height: 6px; background: rgba(0, 0, 0, 0.05); border-radius: 3px; overflow: hidden;">
                                <div style="width: 0%; height: 100%; background: var(--text-secondary); border-radius: 3px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sw-timeline-helper">
                <i class="fa-solid fa-circle-info"></i>
                Progress tracking with completion bars
            </div>
        </div>
    </div>
</div>

<!-- Interactive Timeline Builder -->
<div class="sw-timeline-section-title">
    <i class="fa-solid fa-wand-magic-sparkles"></i>
    Interactive Demo <span class="badge badge-success">New</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-clock-rotate-left"></i>
            </div>
            <div>
                <h3>Timeline Configuration</h3>
                <p class="card-subtitle">Build and preview custom timelines</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div style="display: grid; grid-template-columns: 280px 1fr; gap: 32px;">
            <!-- Controls -->
            <div style="border-right: 1px solid var(--border-color); padding-right: 24px;">
                <h4 style="font-size: 14px; margin-bottom: 16px; color: var(--text-primary);">Settings</h4>
                
                <div style="margin-bottom: 16px;">
                    <label style="font-size: 12px; font-weight: 600; color: var(--text-secondary); display: block; margin-bottom: 8px;">Timeline Type</label>
                    <select id="timelineType" class="form-control" onchange="MetroAdmin.updateSWTimeline({
                        type: this.value,
                        count: parseInt(document.getElementById('timelineItems').value),
                        colorTheme: document.getElementById('timelineColor').value,
                        showDates: document.getElementById('showDates').value === 'yes'
                    })" style="width: 100%;">
                        <option value="vertical">Vertical</option>
                        <option value="icons">With Icons</option>
                        <option value="horizontal">Horizontal</option>
                    </select>
                </div>
                
                <div style="margin-bottom: 16px;">
                    <label style="font-size: 12px; font-weight: 600; color: var(--text-secondary); display: block; margin-bottom: 8px;">Items Count</label>
                    <input type="range" id="timelineItems" class="form-range" min="2" max="6" value="4" oninput="document.getElementById('itemsCount').textContent = this.value; MetroAdmin.updateSWTimeline({
                        type: document.getElementById('timelineType').value,
                        count: parseInt(this.value),
                        colorTheme: document.getElementById('timelineColor').value,
                        showDates: document.getElementById('showDates').value === 'yes'
                    })" style="width: 100%;">
                    <div style="text-align: center; font-size: 12px; color: var(--text-secondary); margin-top: 4px;">
                        <span id="itemsCount">4</span> items
                    </div>
                </div>
                
                <div style="margin-bottom: 16px;">
                    <label style="font-size: 12px; font-weight: 600; color: var(--text-secondary); display: block; margin-bottom: 8px;">Color Theme</label>
                    <select id="timelineColor" class="form-control" onchange="MetroAdmin.updateSWTimeline({
                        type: document.getElementById('timelineType').value,
                        count: parseInt(document.getElementById('timelineItems').value),
                        colorTheme: this.value,
                        showDates: document.getElementById('showDates').value === 'yes'
                    })" style="width: 100%;">
                        <option value="mixed">Mixed Colors</option>
                        <option value="accent">Accent Only</option>
                        <option value="success">Success Only</option>
                        <option value="gradient">Gradient Dots</option>
                    </select>
                </div>
                
                <div style="margin-bottom: 16px;">
                    <label style="font-size: 12px; font-weight: 600; color: var(--text-secondary); display: block; margin-bottom: 8px;">Show Dates</label>
                    <select id="showDates" class="form-control" onchange="MetroAdmin.updateSWTimeline({
                        type: document.getElementById('timelineType').value,
                        count: parseInt(document.getElementById('timelineItems').value),
                        colorTheme: document.getElementById('timelineColor').value,
                        showDates: this.value === 'yes'
                    })" style="width: 100%;">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                
                <button class="btn btn-secondary" onclick="MetroAdmin.resetSWTimelineDemo()" style="width: 100%;">
                    <i class="fa-solid fa-rotate-left"></i> Reset to Default
                </button>
            </div>
            
            <!-- Preview -->
            <div>
                <h4 style="font-size: 14px; margin-bottom: 16px; color: var(--text-primary);">Live Preview</h4>
                
                <div style="min-height: 400px; background: rgba(0, 0, 0, 0.02); border: 1px solid var(--border-color); border-radius: 8px; padding: 24px;">
                    <div id="timelinePreview" class="sw-demo-timeline">
                        <!-- Timeline will be rendered here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="sw-timeline-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="sw-timeline-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>HTML Structure</h3>
                    <p class="card-subtitle">Basic timeline markup</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-code-block">
// SW Metro Template - Timeline API<br>
<br>
// Update timeline dynamically<br>
MetroAdmin.updateSWTimeline({<br>
&nbsp;&nbsp;type: 'vertical', // vertical, icons, horizontal<br>
&nbsp;&nbsp;count: 4,<br>
&nbsp;&nbsp;colorTheme: 'mixed', // mixed, accent, gradient<br>
&nbsp;&nbsp;showDates: true<br>
});<br>
<br>
// Generate timeline HTML<br>
MetroAdmin.generateSWTimeline({<br>
&nbsp;&nbsp;type: 'vertical', // vertical, horizontal, centered<br>
&nbsp;&nbsp;data: [<br>
&nbsp;&nbsp;&nbsp;&nbsp;{ title: 'Event 1', date: 'Jan 1', description: 'Desc', icon: 'fa-solid fa-flag' }<br>
&nbsp;&nbsp;],<br>
&nbsp;&nbsp;withIcons: true,<br>
&nbsp;&nbsp;colorTheme: 'mixed',<br>
&nbsp;&nbsp;showDates: true<br>
});<br>
<br>
// Reset demo<br>
MetroAdmin.resetSWTimelineDemo();
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>
                <div>
                    <h3>Best Practices</h3>
                    <p class="card-subtitle">Timeline guidelines</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" style="width: 100%; font-size: 13px;">
                <thead>
                    <tr>
                        <th>Practice</th>
                        <th>Benefit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Use colors</strong></td>
                        <td>Status indication</td>
                    </tr>
                    <tr>
                        <td><strong>Add icons</strong></td>
                        <td>Visual context</td>
                    </tr>
                    <tr>
                        <td><strong>Keep concise</strong></td>
                        <td>Easy scanning</td>
                    </tr>
                    <tr>
                        <td><strong>Show dates</strong></td>
                        <td>Chronological order</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Timelines page initialization
$(document).ready(function() {
    console.log('🕐 SW Timelines page loaded successfully');
    
    // Update items count display
    $('#timelineItems').on('input', function() {
        $('#itemsCount').text($(this).val());
    });
    
    // Initial render
    if (typeof MetroAdmin !== 'undefined') {
        MetroAdmin.updateSWTimeline({
            type: 'vertical',
            count: 4,
            colorTheme: 'mixed',
            showDates: true
        });
        
        MetroAdmin.showSWInfoToast('Welcome to the Timelines demo page!');
    }
});
</script>
@endpush
