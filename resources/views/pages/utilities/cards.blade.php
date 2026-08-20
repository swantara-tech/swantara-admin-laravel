@extends('layouts.app')

@section('title', 'Cards')
@section('breadcrumb', 'Cards')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Cards</h1>
        <p>Flexible content containers with various layouts for displaying information, statistics, and media</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-id-card"></i>
            <span>Try Cards</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card sw-cd-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What are Cards?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Cards are versatile UI components that group related content and actions. They provide a consistent container for displaying information in a structured way. Cards can contain images, text, buttons, and other elements, making them perfect for dashboards, profiles, pricing tables, social feeds, and more.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Cards -->
<div class="sw-cd-section-title">
    <i class="fa-solid fa-id-card"></i>
    Basic Cards <span class="badge badge-primary">Essential</span>
</div>

<div class="sw-cd-grid">
    <div class="sw-cd-modern">
        <div class="sw-cd-image-placeholder bg-gradient-1">
            <i class="fa-solid fa-image"></i>
        </div>
        <div class="sw-cd-body">
            <h3 class="sw-cd-title">Card with Image</h3>
            <p class="sw-cd-subtitle">Media content card</p>
            <p class="sw-cd-text">This card features a gradient placeholder image area. Perfect for showcasing products, portfolio items, or blog posts with visual content.</p>
            <button class="sw-btn sw-btn-primary sw-btn-sm">
                <i class="fa-solid fa-arrow-right"></i> Read More
            </button>
        </div>
    </div>

    <div class="sw-cd-modern">
        <div class="sw-cd-body">
            <h3 class="sw-cd-title">Simple Card</h3>
            <p class="sw-cd-subtitle">Text-only content card</p>
            <p class="sw-cd-text">A clean card layout without images. Ideal for displaying text content, announcements, or informational blocks in a structured format.</p>
            <div style="display: flex; gap: 8px;">
                <button class="sw-btn sw-btn-primary sw-btn-sm">
                    <i class="fa-solid fa-check"></i> Accept
                </button>
                <button class="sw-btn sw-btn-outline-secondary sw-btn-sm">
                    <i class="fa-solid fa-ban"></i> Decline
                </button>
            </div>
        </div>
    </div>

    <div class="sw-cd-modern">
        <div class="sw-cd-image-placeholder bg-gradient-2">
            <i class="fa-solid fa-chart-line"></i>
        </div>
        <div class="sw-cd-body">
            <h3 class="sw-cd-title">Card with Badge</h3>
            <p class="sw-cd-subtitle">Featured content indicator</p>
            <p class="sw-cd-text">Cards can include badges to highlight status, categories, or special attributes. Great for e-commerce products or featured content.</p>
            <span class="custom-badge badge-success badge-with-icon">
                <i class="fa-solid fa-check-circle"></i> New
            </span>
        </div>
        <div class="sw-cd-footer">
            <span style="font-size: 13px; color: var(--text-secondary);">Last updated 3 mins ago</span>
            <button class="sw-btn sw-btn-ghost-primary sw-btn-sm">
                <i class="fa-solid fa-ellipsis"></i>
            </button>
        </div>
    </div>
</div>

<!-- Stat Cards -->
<div class="sw-cd-section-title">
    <i class="fa-solid fa-chart-bar"></i>
    Statistics Cards <span class="badge badge-success">Dashboard</span>
</div>

<div class="sw-cd-grid">
    <div class="sw-cd-stat">
        <div class="sw-cd-stat-icon bg-soft-primary">
            <i class="fa-solid fa-users"></i>
        </div>
        <div class="sw-cd-stat-content">
            <h3 class="sw-cd-stat-value">12,458</h3>
            <p class="sw-cd-stat-label">Total Users</p>
            <span class="sw-cd-stat-change positive">
                <i class="fa-solid fa-arrow-up"></i> +12.5%
            </span>
        </div>
    </div>

    <div class="sw-cd-stat">
        <div class="sw-cd-stat-icon bg-soft-success">
            <i class="fa-solid fa-dollar-sign"></i>
        </div>
        <div class="sw-cd-stat-content">
            <h3 class="sw-cd-stat-value">$48,295</h3>
            <p class="sw-cd-stat-label">Revenue</p>
            <span class="sw-cd-stat-change positive">
                <i class="fa-solid fa-arrow-up"></i> +8.3%
            </span>
        </div>
    </div>

    <div class="sw-cd-stat">
        <div class="sw-cd-stat-icon bg-soft-warning">
            <i class="fa-solid fa-shopping-cart"></i>
        </div>
        <div class="sw-cd-stat-content">
            <h3 class="sw-cd-stat-value">1,842</h3>
            <p class="sw-cd-stat-label">Orders</p>
            <span class="sw-cd-stat-change negative">
                <i class="fa-solid fa-arrow-down"></i> -3.2%
            </span>
        </div>
    </div>

    <div class="sw-cd-stat">
        <div class="sw-cd-stat-icon bg-soft-danger">
            <i class="fa-solid fa-eye"></i>
        </div>
        <div class="sw-cd-stat-content">
            <h3 class="sw-cd-stat-value">24,589</h3>
            <p class="sw-cd-stat-label">Page Views</p>
            <span class="sw-cd-stat-change positive">
                <i class="fa-solid fa-arrow-up"></i> +18.7%
            </span>
        </div>
    </div>
</div>

<!-- Profile Cards -->
<div class="sw-cd-section-title">
    <i class="fa-solid fa-user-circle"></i>
    Profile Cards <span class="badge badge-info">Social</span>
</div>

<div class="sw-cd-grid">
    <div class="sw-cd-profile">
        <img src="https://ui-avatars.com/api/?name=John+Doe&background=0078D4&color=fff&size=200" class="sw-cd-profile-avatar" alt="Profile">
        <h3 class="sw-cd-profile-name">John Doe</h3>
        <p class="sw-cd-profile-role">Full Stack Developer</p>
        <div class="sw-cd-profile-stats">
            <div class="sw-cd-profile-stat-item">
                <h4 class="sw-cd-profile-stat-value">248</h4>
                <p class="sw-cd-profile-stat-label">Posts</p>
            </div>
            <div class="sw-cd-profile-stat-item">
                <h4 class="sw-cd-profile-stat-value">12.5K</h4>
                <p class="sw-cd-profile-stat-label">Followers</p>
            </div>
            <div class="sw-cd-profile-stat-item">
                <h4 class="sw-cd-profile-stat-value">842</h4>
                <p class="sw-cd-profile-stat-label">Following</p>
            </div>
        </div>
        <div style="display: flex; gap: 8px;">
            <button class="sw-btn sw-btn-primary" style="flex: 1;">
                <i class="fa-solid fa-user-plus"></i> Follow
            </button>
            <button class="sw-btn sw-btn-outline-secondary">
                <i class="fa-solid fa-envelope"></i>
            </button>
        </div>
    </div>

    <div class="sw-cd-profile">
        <img src="https://ui-avatars.com/api/?name=Jane+Smith&background=16C60C&color=fff&size=200" class="sw-cd-profile-avatar" alt="Profile">
        <h3 class="sw-cd-profile-name">Jane Smith</h3>
        <p class="sw-cd-profile-role">UI/UX Designer</p>
        <div class="sw-cd-profile-stats">
            <div class="sw-cd-profile-stat-item">
                <h4 class="sw-cd-profile-stat-value">156</h4>
                <p class="sw-cd-profile-stat-label">Posts</p>
            </div>
            <div class="sw-cd-profile-stat-item">
                <h4 class="sw-cd-profile-stat-value">8.2K</h4>
                <p class="sw-cd-profile-stat-label">Followers</p>
            </div>
            <div class="sw-cd-profile-stat-item">
                <h4 class="sw-cd-profile-stat-value">524</h4>
                <p class="sw-cd-profile-stat-label">Following</p>
            </div>
        </div>
        <div style="display: flex; gap: 8px;">
            <button class="sw-btn sw-btn-success" style="flex: 1;">
                <i class="fa-solid fa-check"></i> Following
            </button>
            <button class="sw-btn sw-btn-outline-secondary">
                <i class="fa-solid fa-envelope"></i>
            </button>
        </div>
    </div>
</div>

<!-- Pricing Cards -->
<div class="sw-cd-section-title">
    <i class="fa-solid fa-tags"></i>
    Pricing Cards <span class="badge badge-warning">E-commerce</span>
</div>

<div class="sw-cd-grid">
    <div class="sw-cd-pricing">
        <h3 class="sw-cd-pricing-name">Basic</h3>
        <p style="color: var(--text-secondary); margin: 0;">For individuals</p>
        <div class="sw-cd-pricing-price">
            $9<span>/month</span>
        </div>
        <ul class="sw-cd-pricing-features">
            <li><i class="fa-solid fa-check"></i> 5 Projects</li>
            <li><i class="fa-solid fa-check"></i> 10GB Storage</li>
            <li><i class="fa-solid fa-check"></i> Basic Support</li>
            <li class="disabled"><i class="fa-solid fa-times"></i> Custom Domain</li>
            <li class="disabled"><i class="fa-solid fa-times"></i> Analytics</li>
        </ul>
        <button class="sw-btn sw-btn-outline-primary" style="width: 100%;">
            Get Started
        </button>
    </div>

    <div class="sw-cd-pricing featured">
        <h3 class="sw-cd-pricing-name">Professional</h3>
        <p style="color: var(--text-secondary); margin: 0;">For growing teams</p>
        <div class="sw-cd-pricing-price">
            $29<span>/month</span>
        </div>
        <ul class="sw-cd-pricing-features">
            <li><i class="fa-solid fa-check"></i> Unlimited Projects</li>
            <li><i class="fa-solid fa-check"></i> 100GB Storage</li>
            <li><i class="fa-solid fa-check"></i> Priority Support</li>
            <li><i class="fa-solid fa-check"></i> Custom Domain</li>
            <li><i class="fa-solid fa-check"></i> Analytics</li>
        </ul>
        <button class="sw-btn sw-btn-primary" style="width: 100%;">
            Get Started
        </button>
    </div>

    <div class="sw-cd-pricing">
        <h3 class="sw-cd-pricing-name">Enterprise</h3>
        <p style="color: var(--text-secondary); margin: 0;">For organizations</p>
        <div class="sw-cd-pricing-price">
            $99<span>/month</span>
        </div>
        <ul class="sw-cd-pricing-features">
            <li><i class="fa-solid fa-check"></i> Everything in Pro</li>
            <li><i class="fa-solid fa-check"></i> Unlimited Storage</li>
            <li><i class="fa-solid fa-check"></i> 24/7 Support</li>
            <li><i class="fa-solid fa-check"></i> Custom Integration</li>
            <li><i class="fa-solid fa-check"></i> Advanced Analytics</li>
        </ul>
        <button class="sw-btn sw-btn-outline-primary" style="width: 100%;">
            Contact Sales
        </button>
    </div>
</div>

<!-- Social Cards -->
<div class="sw-cd-section-title">
    <i class="fa-solid fa-share-nodes"></i>
    Social Media Cards <span class="badge badge-primary">Feed</span>
</div>

<div class="sw-cd-grid-2">
    <div class="sw-cd-social">
        <div class="sw-cd-social-header">
            <img src="https://ui-avatars.com/api/?name=Sarah+Johnson&background=FFB900&color=fff&size=96" class="sw-cd-social-avatar" alt="User">
            <div class="sw-cd-social-user-info">
                <h4>Sarah Johnson</h4>
                <p>2 hours ago • <i class="fa-solid fa-globe"></i></p>
            </div>
        </div>
        <div class="sw-cd-social-body">
            <p class="sw-cd-social-text">Just launched our new product! 🚀 Excited to share this milestone with everyone. Check it out and let me know what you think!</p>
            <div class="sw-cd-image-placeholder bg-gradient-4" style="height: 250px;">
                <i class="fa-solid fa-rocket"></i>
            </div>
        </div>
        <div class="sw-cd-social-footer">
            <button class="sw-cd-social-action liked">
                <i class="fa-solid fa-heart"></i> 248
            </button>
            <button class="sw-cd-social-action">
                <i class="fa-solid fa-comment"></i> 42
            </button>
            <button class="sw-cd-social-action">
                <i class="fa-solid fa-share"></i> Share
            </button>
        </div>
    </div>

    <div class="sw-cd-social">
        <div class="sw-cd-social-header">
            <img src="https://ui-avatars.com/api/?name=Mike+Wilson&background=0078D4&color=fff&size=96" class="sw-cd-social-avatar" alt="User">
            <div class="sw-cd-social-user-info">
                <h4>Mike Wilson</h4>
                <p>5 hours ago • <i class="fa-solid fa-globe"></i></p>
            </div>
        </div>
        <div class="sw-cd-social-body">
            <p class="sw-cd-social-text">Beautiful sunset from today's hiking trip! Nature never fails to amaze me. 🌅⛰️</p>
        </div>
        <div class="sw-cd-social-footer">
            <button class="sw-cd-social-action">
                <i class="fa-regular fa-heart"></i> 156
            </button>
            <button class="sw-cd-social-action">
                <i class="fa-solid fa-comment"></i> 28
            </button>
            <button class="sw-cd-social-action">
                <i class="fa-solid fa-share"></i> Share
            </button>
        </div>
    </div>
</div>

<!-- Testimonial Cards -->
<div class="sw-cd-section-title">
    <i class="fa-solid fa-quote-left"></i>
    Testimonial Cards <span class="badge badge-success">Reviews</span>
</div>

<div class="sw-cd-grid">
    <div class="sw-cd-testimonial">
        <p class="sw-cd-testimonial-quote">This platform has completely transformed how we manage our projects. The interface is intuitive and the features are exactly what we needed. Highly recommended!</p>
        <div class="sw-cd-testimonial-author">
            <img src="https://ui-avatars.com/api/?name=Emily+Davis&background=16C60C&color=fff&size=96" class="sw-cd-testimonial-avatar" alt="Author">
            <div class="sw-cd-testimonial-author-info">
                <h4>Emily Davis</h4>
                <p>CEO, TechStart Inc.</p>
                <div class="sw-cd-testimonial-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="sw-cd-testimonial">
        <p class="sw-cd-testimonial-quote">Outstanding customer support and regular updates. The team behind this product truly cares about user experience. It's rare to find such dedication in today's market.</p>
        <div class="sw-cd-testimonial-author">
            <img src="https://ui-avatars.com/api/?name=Robert+Chen&background=0078D4&color=fff&size=96" class="sw-cd-testimonial-avatar" alt="Author">
            <div class="sw-cd-testimonial-author-info">
                <h4>Robert Chen</h4>
                <p>Product Manager, InnovateCo</p>
                <div class="sw-cd-testimonial-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Notification Cards -->
<div class="sw-cd-section-title">
    <i class="fa-solid fa-bell"></i>
    Notification Cards <span class="badge badge-warning">Alerts</span>
</div>

<div class="sw-cd-grid-2">
    <div class="sw-cd-modern">
        <div class="sw-cd-body" style="display: flex; gap: 16px; align-items: start;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--success-bg); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-check-circle" style="color: var(--success); font-size: 24px;"></i>
            </div>
            <div style="flex: 1;">
                <h4 style="margin: 0 0 4px 0; font-size: 15px; font-weight: 600;">Payment Successful</h4>
                <p style="margin: 0 0 8px 0; font-size: 13px; color: var(--text-secondary);">Your payment of $299.00 has been processed successfully.</p>
                <span style="font-size: 12px; color: var(--text-tertiary);">2 minutes ago</span>
            </div>
        </div>
    </div>

    <div class="sw-cd-modern">
        <div class="sw-cd-body" style="display: flex; gap: 16px; align-items: start;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--warning-bg); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-exclamation-triangle" style="color: var(--warning); font-size: 24px;"></i>
            </div>
            <div style="flex: 1;">
                <h4 style="margin: 0 0 4px 0; font-size: 15px; font-weight: 600;">Storage Almost Full</h4>
                <p style="margin: 0 0 8px 0; font-size: 13px; color: var(--text-secondary);">You've used 9.2GB of 10GB. Consider upgrading your plan.</p>
                <span style="font-size: 12px; color: var(--text-tertiary);">1 hour ago</span>
            </div>
        </div>
    </div>

    <div class="sw-cd-modern">
        <div class="sw-cd-body" style="display: flex; gap: 16px; align-items: start;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--danger-bg); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-times-circle" style="color: var(--danger); font-size: 24px;"></i>
            </div>
            <div style="flex: 1;">
                <h4 style="margin: 0 0 4px 0; font-size: 15px; font-weight: 600;">Login Failed</h4>
                <p style="margin: 0 0 8px 0; font-size: 13px; color: var(--text-secondary);">Invalid credentials. Please check your email and password.</p>
                <span style="font-size: 12px; color: var(--text-tertiary);">3 hours ago</span>
            </div>
        </div>
    </div>

    <div class="sw-cd-modern">
        <div class="sw-cd-body" style="display: flex; gap: 16px; align-items: start;">
            <div style="width: 48px; height: 48px; border-radius: 12px; background: var(--info-bg); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                <i class="fa-solid fa-info-circle" style="color: var(--info); font-size: 24px;"></i>
            </div>
            <div style="flex: 1;">
                <h4 style="margin: 0 0 4px 0; font-size: 15px; font-weight: 600;">New Update Available</h4>
                <p style="margin: 0 0 8px 0; font-size: 13px; color: var(--text-secondary);">Version 2.5.0 is ready to install. Restart to apply updates.</p>
                <span style="font-size: 12px; color: var(--text-tertiary);">5 hours ago</span>
            </div>
        </div>
    </div>
</div>

<!-- Media Cards -->
<div class="sw-cd-section-title">
    <i class="fa-solid fa-photo-film"></i>
    Media Cards <span class="badge badge-info">Content</span>
</div>

<div class="sw-cd-grid">
    <div class="sw-cd-modern">
        <div class="sw-cd-image-placeholder bg-gradient-1" style="position: relative;">
            <i class="fa-solid fa-play-circle" style="font-size: 64px; opacity: 0.9;"></i>
            <div style="position: absolute; bottom: 12px; right: 12px; background: rgba(0,0,0,0.8); color: white; padding: 4px 12px; border-radius: 6px; font-size: 12px; font-weight: 600;">
                <i class="fa-solid fa-clock"></i> 12:34
            </div>
        </div>
        <div class="sw-cd-body">
            <h3 class="sw-cd-title">Tutorial: Getting Started</h3>
            <p class="sw-cd-subtitle">Video Tutorial • 15K views</p>
            <p class="sw-cd-text">Learn the basics of using our platform in this comprehensive video tutorial.</p>
        </div>
    </div>

    <div class="sw-cd-modern">
        <div style="position: relative;">
            <div class="sw-cd-image-placeholder bg-gradient-2" style="height: 200px;">
                <i class="fa-solid fa-music" style="font-size: 48px;"></i>
            </div>
            <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 16px; background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                <div style="display: flex; align-items: center; gap: 8px; color: white;">
                    <button style="width: 36px; height: 36px; border-radius: 50%; border: none; background: white; color: var(--accent); cursor: pointer; display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-play"></i>
                    </button>
                    <div>
                        <div style="font-size: 14px; font-weight: 600;">Now Playing</div>
                        <div style="font-size: 12px; opacity: 0.8;">Background Music</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sw-cd-body">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <span style="font-size: 13px; color: var(--text-secondary);">3:45 / 5:20</span>
                <div style="display: flex; gap: 8px;">
                    <button class="sw-btn sw-btn-ghost-primary sw-btn-icon sw-btn-sm">
                        <i class="fa-solid fa-backward-step"></i>
                    </button>
                    <button class="sw-btn sw-btn-primary sw-btn-icon sw-btn-sm">
                        <i class="fa-solid fa-pause"></i>
                    </button>
                    <button class="custom-btn btn-ghost-primary btn-icon btn-sm">
                        <i class="fa-solid fa-forward-step"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="sw-cd-modern">
        <div class="sw-cd-image-placeholder bg-gradient-4" style="height: 200px;">
            <i class="fa-solid fa-images" style="font-size: 48px;"></i>
        </div>
        <div class="sw-cd-body">
            <h3 class="sw-cd-title">Photo Gallery</h3>
            <p class="sw-cd-subtitle">24 Photos • Last updated 2 days ago</p>
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px; margin-top: 12px;">
                <div style="aspect-ratio: 1; background: var(--bg-secondary); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                    <i class="fa-solid fa-image" style="color: var(--text-tertiary);"></i>
                </div>
                <div style="aspect-ratio: 1; background: var(--bg-secondary); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                    <i class="fa-solid fa-image" style="color: var(--text-tertiary);"></i>
                </div>
                <div style="aspect-ratio: 1; background: var(--bg-secondary); border-radius: 8px; display: flex; align-items: center; justify-content: center; position: relative;">
                    <i class="fa-solid fa-image" style="color: var(--text-tertiary);"></i>
                    <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.6); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 18px; font-weight: 700;">+21</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Task/Project Cards -->
<div class="sw-cd-section-title">
    <i class="fa-solid fa-list-check"></i>
    Task & Project Cards <span class="badge badge-primary">Management</span>
</div>

<div class="sw-cd-grid">
    <div class="sw-cd-modern">
        <div class="sw-cd-body">
            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 16px;">
                <div>
                    <h3 class="sw-cd-title" style="margin: 0;">Website Redesign</h3>
                    <p class="sw-cd-subtitle" style="margin: 4px 0 0 0;">Project • Due in 5 days</p>
                </div>
                <span class="custom-badge badge-warning badge-with-icon">
                    <i class="fa-solid fa-clock"></i> In Progress
                </span>
            </div>
            
            <div style="margin-bottom: 16px;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                    <span style="font-size: 13px; color: var(--text-secondary);">Progress</span>
                    <span style="font-size: 13px; font-weight: 600;">65%</span>
                </div>
                <div style="height: 8px; background: var(--bg-secondary); border-radius: 4px; overflow: hidden;">
                    <div style="height: 100%; width: 65%; background: linear-gradient(90deg, var(--warning), #FFB900); border-radius: 4px;"></div>
                </div>
            </div>

            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div style="display: flex; gap: -8px;">
                    <img src="https://ui-avatars.com/api/?name=John&background=0078D4&color=fff&size=64" style="width: 32px; height: 32px; border-radius: 50%; border: 2px solid var(--surface);" alt="User">
                    <img src="https://ui-avatars.com/api/?name=Jane&background=16C60C&color=fff&size=64" style="width: 32px; height: 32px; border-radius: 50%; border: 2px solid var(--surface); margin-left: -8px;" alt="User">
                    <img src="https://ui-avatars.com/api/?name=Mike&background=FFB900&color=fff&size=64" style="width: 32px; height: 32px; border-radius: 50%; border: 2px solid var(--surface); margin-left: -8px;" alt="User">
                </div>
                <button class="sw-btn sw-btn-ghost-primary sw-btn-sm">
                    <i class="fa-solid fa-arrow-right"></i> View Details
                </button>
            </div>
        </div>
    </div>

    <div class="sw-cd-modern">
        <div class="sw-cd-body">
            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 16px;">
                <div>
                    <h3 class="sw-cd-title" style="margin: 0;">Mobile App Development</h3>
                    <p class="sw-cd-subtitle" style="margin: 4px 0 0 0;">Project • Due in 12 days</p>
                </div>
                <span class="custom-badge badge-success badge-with-icon">
                    <i class="fa-solid fa-check-circle"></i> On Track
                </span>
            </div>
            
            <div style="margin-bottom: 16px;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                    <span style="font-size: 13px; color: var(--text-secondary);">Progress</span>
                    <span style="font-size: 13px; font-weight: 600;">82%</span>
                </div>
                <div style="height: 8px; background: var(--bg-secondary); border-radius: 4px; overflow: hidden;">
                    <div style="height: 100%; width: 82%; background: linear-gradient(90deg, var(--success), #16C60C); border-radius: 4px;"></div>
                </div>
            </div>

            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div style="display: flex; gap: -8px;">
                    <img src="https://ui-avatars.com/api/?name=Sarah&background=E81123&color=fff&size=64" style="width: 32px; height: 32px; border-radius: 50%; border: 2px solid var(--surface);" alt="User">
                    <img src="https://ui-avatars.com/api/?name=Tom&background=00BCF2&color=fff&size=64" style="width: 32px; height: 32px; border-radius: 50%; border: 2px solid var(--surface); margin-left: -8px;" alt="User">
                </div>
                <button class="sw-btn sw-btn-ghost-success sw-btn-sm">
                    <i class="fa-solid fa-arrow-right"></i> View Details
                </button>
            </div>
        </div>
    </div>

    <div class="sw-cd-modern">
        <div class="sw-cd-body">
            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 16px;">
                <div>
                    <h3 class="sw-cd-title" style="margin: 0;">Database Migration</h3>
                    <p class="sw-cd-subtitle" style="margin: 4px 0 0 0;">Task • Overdue</p>
                </div>
                <span class="custom-badge badge-danger badge-with-icon">
                    <i class="fa-solid fa-exclamation-circle"></i> Urgent
                </span>
            </div>
            
            <div style="margin-bottom: 16px;">
                <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                    <span style="font-size: 13px; color: var(--text-secondary);">Progress</span>
                    <span style="font-size: 13px; font-weight: 600;">30%</span>
                </div>
                <div style="height: 8px; background: var(--bg-secondary); border-radius: 4px; overflow: hidden;">
                    <div style="height: 100%; width: 30%; background: linear-gradient(90deg, var(--danger), #E81123); border-radius: 4px;"></div>
                </div>
            </div>

            <div style="display: flex; justify-content: space-between; align-items: center;">
                <div style="display: flex; gap: -8px;">
                    <img src="https://ui-avatars.com/api/?name=Alex&background=808080&color=fff&size=64" style="width: 32px; height: 32px; border-radius: 50%; border: 2px solid var(--surface);" alt="User">
                </div>
                <button class="sw-btn sw-btn-ghost-danger sw-btn-sm">
                    <i class="fa-solid fa-arrow-right"></i> View Details
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Achievement/Stats Cards -->
<div class="sw-cd-section-title">
    <i class="fa-solid fa-trophy"></i>
    Achievement & Stats Cards <span class="badge badge-success">Gamification</span>
</div>

<div class="sw-cd-grid">
    <div class="sw-cd-modern" style="text-align: center; padding: 32px 24px;">
        <div style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, #FFD700, #FFA500); margin: 0 auto 16px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 24px rgba(255, 215, 0, 0.3);">
            <i class="fa-solid fa-trophy" style="font-size: 36px; color: white;"></i>
        </div>
        <h3 style="font-size: 20px; font-weight: 700; margin: 0 0 8px 0;">Top Performer</h3>
        <p style="font-size: 13px; color: var(--text-secondary); margin: 0 0 16px 0;">Congratulations! You've completed 100 tasks this month.</p>
        <div style="display: flex; justify-content: center; gap: 24px; padding-top: 16px; border-top: 1px solid var(--border-color);">
            <div>
                <div style="font-size: 24px; font-weight: 700; color: var(--accent);">100</div>
                <div style="font-size: 12px; color: var(--text-secondary);">Tasks Done</div>
            </div>
            <div>
                <div style="font-size: 24px; font-weight: 700; color: var(--success);">98%</div>
                <div style="font-size: 12px; color: var(--text-secondary);">Success Rate</div>
            </div>
        </div>
    </div>

    <div class="sw-cd-modern" style="text-align: center; padding: 32px 24px;">
        <div style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, var(--accent), #00BCF2); margin: 0 auto 16px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 24px rgba(0, 120, 212, 0.3);">
            <i class="fa-solid fa-fire" style="font-size: 36px; color: white;"></i>
        </div>
        <h3 style="font-size: 20px; font-weight: 700; margin: 0 0 8px 0;">7 Day Streak</h3>
        <p style="font-size: 13px; color: var(--text-secondary); margin: 0 0 16px 0;">Keep it up! You're on fire this week.</p>
        <div style="display: flex; justify-content: center; gap: 8px;">
            <div style="width: 36px; height: 36px; border-radius: 50%; background: var(--success); display: flex; align-items: center; justify-content: center; color: white; font-size: 12px; font-weight: 700;">M</div>
            <div style="width: 36px; height: 36px; border-radius: 50%; background: var(--success); display: flex; align-items: center; justify-content: center; color: white; font-size: 12px; font-weight: 700;">T</div>
            <div style="width: 36px; height: 36px; border-radius: 50%; background: var(--success); display: flex; align-items: center; justify-content: center; color: white; font-size: 12px; font-weight: 700;">W</div>
            <div style="width: 36px; height: 36px; border-radius: 50%; background: var(--success); display: flex; align-items: center; justify-content: center; color: white; font-size: 12px; font-weight: 700;">T</div>
            <div style="width: 36px; height: 36px; border-radius: 50%; background: var(--success); display: flex; align-items: center; justify-content: center; color: white; font-size: 12px; font-weight: 700;">F</div>
            <div style="width: 36px; height: 36px; border-radius: 50%; background: var(--success); display: flex; align-items: center; justify-content: center; color: white; font-size: 12px; font-weight: 700;">S</div>
            <div style="width: 36px; height: 36px; border-radius: 50%; background: var(--success); display: flex; align-items: center; justify-content: center; color: white; font-size: 12px; font-weight: 700;">S</div>
        </div>
    </div>

    <div class="sw-cd-modern" style="text-align: center; padding: 32px 24px;">
        <div style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, #667eea, #764ba2); margin: 0 auto 16px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 24px rgba(102, 126, 234, 0.3);">
            <i class="fa-solid fa-medal" style="font-size: 36px; color: white;"></i>
        </div>
        <h3 style="font-size: 20px; font-weight: 700; margin: 0 0 8px 0;">Level 15</h3>
        <p style="font-size: 13px; color: var(--text-secondary); margin: 0 0 16px 0;">2,450 / 3,000 XP to next level</p>
        <div style="height: 12px; background: var(--bg-secondary); border-radius: 6px; overflow: hidden;">
            <div style="height: 100%; width: 82%; background: linear-gradient(90deg, #667eea, #764ba2); border-radius: 6px;"></div>
        </div>
        <div style="font-size: 12px; color: var(--text-secondary); margin-top: 8px;">82% Complete</div>
    </div>
</div>

<!-- Usage Guide -->
<div class="sw-cd-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="sw-cd-grid-2">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>HTML Structure</h3>
                    <p class="card-subtitle">Basic card markup</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <pre style="background: var(--bg-tertiary); padding: 16px; border-radius: 8px; font-size: 12px; overflow-x: auto;"><code>&lt;!-- Basic Card --&gt;
&lt;div class="modern-card"&gt;
  &lt;div class="card-body-custom"&gt;
    &lt;h3 class="card-title-custom"&gt;
      Card Title
    &lt;/h3&gt;
    &lt;p class="card-text-custom"&gt;
      Card content here
    &lt;/p&gt;
    &lt;button class="custom-btn btn-primary"&gt;
      Action
    &lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>
                <div>
                    <h3>Best Practices</h3>
                    <p class="card-subtitle">When to use each card type</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" style="width: 100%; font-size: 13px;">
                <thead>
                    <tr>
                        <th>Card Type</th>
                        <th>Use Case</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Basic</strong></td>
                        <td>Content blocks, articles</td>
                    </tr>
                    <tr>
                        <td><strong>Statistics</strong></td>
                        <td>Dashboards, KPIs</td>
                    </tr>
                    <tr>
                        <td><strong>Profile</strong></td>
                        <td>User profiles, teams</td>
                    </tr>
                    <tr>
                        <td><strong>Pricing</strong></td>
                        <td>SaaS, subscriptions</td>
                    </tr>
                    <tr>
                        <td><strong>Social</strong></td>
                        <td>Feeds, posts</td>
                    </tr>
                    <tr>
                        <td><strong>Testimonial</strong></td>
                        <td>Reviews, feedback</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Cards page initialization
$(document).ready(function() {
    console.log('📋 SW Cards page loaded successfully');
});
</script>
@endpush