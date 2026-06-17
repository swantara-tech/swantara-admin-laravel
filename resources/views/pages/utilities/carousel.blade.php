@extends('layouts.app')

@section('title', 'Carousel')
@section('breadcrumb', 'Carousel')

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Carousel</h1>
        <p>Dynamic slideshow components for showcasing images, content, and media with smooth transitions</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-images"></i>
            <span>Try Carousel</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card dsgt-cr-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">What are Carousels?</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Carousels are dynamic slideshow components that display multiple items in a limited space. They support automatic playback, manual navigation, indicators, and smooth transitions. Carousels are perfect for hero sections, image galleries, product showcases, testimonials, and featured content.</p>
            </div>
        </div>
    </div>
</div>

<!-- Basic Carousel -->
<div class="dsgt-cr-section-title">
    <i class="fa-solid fa-images"></i>
    Basic Carousel <span class="badge badge-primary">Essential</span>
</div>

<div class="dsgt-cr-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-image"></i>
                </div>
                <div>
                    <h3>Hero Carousel</h3>
                    <p class="card-subtitle">Full-width slideshow with overlay</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-cr-example">
                <span class="dsgt-cr-example-label">Hero Slider with Content</span>
                <div class="dsgt-cr" id="heroCarousel" data-autoplay="5000">
                    <div class="dsgt-cr-container">
                        <div class="dsgt-cr-track">
                            <div class="dsgt-cr-slide">
                                <div class="dsgt-cr-slide-placeholder bg-gradient-1">
                                    <i class="fa-solid fa-rocket"></i>
                                </div>
                                <div class="dsgt-cr-overlay">
                                    <h3 class="dsgt-cr-slide-title">Launch Your Project</h3>
                                    <p class="dsgt-cr-slide-description">Build amazing experiences with our platform</p>
                                    <button class="dsgt-cr-slide-btn">
                                        <i class="fa-solid fa-arrow-right"></i> Get Started
                                    </button>
                                </div>
                            </div>
                            <div class="dsgt-cr-slide">
                                <div class="dsgt-cr-slide-placeholder bg-gradient-2">
                                    <i class="fa-solid fa-palette"></i>
                                </div>
                                <div class="dsgt-cr-overlay">
                                    <h3 class="dsgt-cr-slide-title">Beautiful Design</h3>
                                    <p class="dsgt-cr-slide-description">Create stunning interfaces with modern tools</p>
                                    <button class="dsgt-cr-slide-btn">
                                        <i class="fa-solid fa-eye"></i> View Examples
                                    </button>
                                </div>
                            </div>
                            <div class="dsgt-cr-slide">
                                <div class="dsgt-cr-slide-placeholder bg-gradient-3">
                                    <i class="fa-solid fa-chart-line"></i>
                                </div>
                                <div class="dsgt-cr-overlay">
                                    <h3 class="dsgt-cr-slide-title">Grow Your Business</h3>
                                    <p class="dsgt-cr-slide-description">Scale with powerful analytics and insights</p>
                                    <button class="dsgt-cr-slide-btn">
                                        <i class="fa-solid fa-chart-bar"></i> Learn More
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <button class="dsgt-cr-nav dsgt-cr-nav-prev" onclick="MetroAdmin.moveDSGTCarousel('heroCarousel', -1)">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button class="dsgt-cr-nav dsgt-cr-nav-next" onclick="MetroAdmin.moveDSGTCarousel('heroCarousel', 1)">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                    
                    <div class="dsgt-cr-indicators">
                        <div class="dsgt-cr-indicator active" onclick="MetroAdmin.goToDSGTSlide('heroCarousel', 0)"></div>
                        <div class="dsgt-cr-indicator" onclick="MetroAdmin.goToDSGTSlide('heroCarousel', 1)"></div>
                        <div class="dsgt-cr-indicator" onclick="MetroAdmin.goToDSGTSlide('heroCarousel', 2)"></div>
                    </div>
                    
                    <div class="dsgt-cr-counter">
                        <span class="current">1</span> / <span class="total">3</span>
                    </div>
                </div>
                <div class="dsgt-cr-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Auto-plays every 5 seconds with navigation and indicators
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-play-circle"></i>
                </div>
                <div>
                    <h3>Auto-play Carousel</h3>
                    <p class="card-subtitle">With progress bar indicator</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-cr-example">
                <span class="dsgt-cr-example-label">Auto-play with Progress</span>
                <div class="dsgt-cr" id="autoCarousel" data-autoplay="3000">
                    <div class="dsgt-cr-container">
                        <div class="dsgt-cr-track">
                            <div class="dsgt-cr-slide">
                                <div class="dsgt-cr-slide-placeholder bg-gradient-4">
                                    <i class="fa-solid fa-leaf"></i>
                                </div>
                                <div class="dsgt-cr-overlay">
                                    <h3 class="dsgt-cr-slide-title">Nature Inspired</h3>
                                    <p class="dsgt-cr-slide-description">Design with natural elements</p>
                                </div>
                            </div>
                            <div class="dsgt-cr-slide">
                                <div class="dsgt-cr-slide-placeholder bg-gradient-5">
                                    <i class="fa-solid fa-sun"></i>
                                </div>
                                <div class="dsgt-cr-overlay">
                                    <h3 class="dsgt-cr-slide-title">Bright & Bold</h3>
                                    <p class="dsgt-cr-slide-description">Vibrant colors and gradients</p>
                                </div>
                            </div>
                            <div class="dsgt-cr-slide">
                                <div class="dsgt-cr-slide-placeholder bg-gradient-1">
                                    <i class="fa-solid fa-cloud"></i>
                                </div>
                                <div class="dsgt-cr-overlay">
                                    <h3 class="dsgt-cr-slide-title">Cloud Solutions</h3>
                                    <p class="dsgt-cr-slide-description">Modern cloud infrastructure</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <button class="dsgt-cr-nav dsgt-cr-nav-prev" onclick="MetroAdmin.moveDSGTCarousel('autoCarousel', -1)">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button class="dsgt-cr-nav dsgt-cr-nav-next" onclick="MetroAdmin.moveDSGTCarousel('autoCarousel', 1)">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                    
                    <div class="dsgt-cr-indicators">
                        <div class="dsgt-cr-indicator active" onclick="MetroAdmin.goToDSGTSlide('autoCarousel', 0)"></div>
                        <div class="dsgt-cr-indicator" onclick="MetroAdmin.goToDSGTSlide('autoCarousel', 1)"></div>
                        <div class="dsgt-cr-indicator" onclick="MetroAdmin.goToDSGTSlide('autoCarousel', 2)"></div>
                    </div>
                    
                    <div class="dsgt-cr-progress"></div>
                </div>
                <div class="dsgt-cr-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Progress bar shows time until next slide (3 seconds)
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Carousel with Thumbnails -->
<div class="dsgt-cr-section-title">
    <i class="fa-solid fa-th"></i>
    Carousel with Thumbnails <span class="badge badge-info">Gallery</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-image"></i>
            </div>
            <div>
                <h3>Thumbnail Navigation</h3>
                <p class="card-subtitle">Click thumbnails to navigate</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="cr-example">
            <span class="cr-example-label">Image Gallery with Thumbnails</span>
            <div class="dsgt-cr dsgt-cr-with-thumbnails" id="thumbnailCarousel">
                <div class="dsgt-cr-container">
                    <div class="dsgt-cr-track">
                        <div class="dsgt-cr-slide">
                            <div class="dsgt-cr-slide-placeholder bg-gradient-1">
                                <i class="fa-solid fa-mountain"></i>
                            </div>
                        </div>
                        <div class="dsgt-cr-slide">
                            <div class="dsgt-cr-slide-placeholder bg-gradient-2">
                                <i class="fa-solid fa-water"></i>
                            </div>
                        </div>
                        <div class="dsgt-cr-slide">
                            <div class="dsgt-cr-slide-placeholder bg-gradient-3">
                                <i class="fa-solid fa-tree"></i>
                            </div>
                        </div>
                        <div class="dsgt-cr-slide">
                            <div class="dsgt-cr-slide-placeholder bg-gradient-4">
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <div class="dsgt-cr-slide">
                            <div class="dsgt-cr-slide-placeholder bg-gradient-5">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="dsgt-cr-nav dsgt-cr-nav-prev" onclick="MetroAdmin.moveDSGTCarousel('thumbnailCarousel', -1)">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="dsgt-cr-nav dsgt-cr-nav-next" onclick="MetroAdmin.moveDSGTCarousel('thumbnailCarousel', 1)">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
            
            <div class="dsgt-cr-thumbnails">
                <div class="dsgt-cr-thumbnail active" onclick="MetroAdmin.goToDSGTSlide('thumbnailCarousel', 0)">
                    <div class="dsgt-cr-thumbnail-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white;">
                        <i class="fa-solid fa-mountain"></i>
                    </div>
                </div>
                <div class="dsgt-cr-thumbnail" onclick="MetroAdmin.goToDSGTSlide('thumbnailCarousel', 1)">
                    <div class="dsgt-cr-thumbnail-image" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); display: flex; align-items: center; justify-content: center; color: white;">
                        <i class="fa-solid fa-water"></i>
                    </div>
                </div>
                <div class="dsgt-cr-thumbnail" onclick="MetroAdmin.goToDSGTSlide('thumbnailCarousel', 2)">
                    <div class="dsgt-cr-thumbnail-image" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); display: flex; align-items: center; justify-content: center; color: white;">
                        <i class="fa-solid fa-tree"></i>
                    </div>
                </div>
                <div class="dsgt-cr-thumbnail" onclick="MetroAdmin.goToDSGTSlide('thumbnailCarousel', 3)">
                    <div class="dsgt-cr-thumbnail-image" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d 100%); display: flex; align-items: center; justify-content: center; color: white;">
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <div class="dsgt-cr-thumbnail" onclick="MetroAdmin.goToDSGTSlide('thumbnailCarousel', 4)">
                    <div class="dsgt-cr-thumbnail-image" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); display: flex; align-items: center; justify-content: center; color: white;">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
            </div>
            <div class="cr-helper">
                <i class="fa-solid fa-circle-info"></i>
                Click thumbnails below to navigate directly to any slide
            </div>
        </div>
    </div>
</div>

<!-- Card Carousel -->
<div class="dsgt-cr-section-title">
    <i class="fa-solid fa-id-card"></i>
    Card Carousel <span class="badge badge-warning">Products</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-shopping-bag"></i>
            </div>
            <div>
                <h3>Product Showcase</h3>
                <p class="card-subtitle">Multiple cards visible with smooth sliding</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="cr-example">
            <span class="cr-example-label">Product Cards Slider</span>
            <div class="dsgt-cr" id="cardCarousel" style="padding: 0 48px;">
                <div class="dsgt-cr-container">
                    <div class="dsgt-cr-cards-track">
                        <div class="dsgt-cr-card-item">
                            <div class="dsgt-cr-card-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                <i class="fa-solid fa-laptop"></i>
                            </div>
                            <div class="dsgt-cr-card-body">
                                <h4 class="dsgt-cr-card-title">Laptop Pro</h4>
                                <p class="dsgt-cr-card-text">High-performance laptop for professionals</p>
                            </div>
                        </div>
                        <div class="dsgt-cr-card-item">
                            <div class="dsgt-cr-card-image" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                                <i class="fa-solid fa-mobile-screen"></i>
                            </div>
                            <div class="dsgt-cr-card-body">
                                <h4 class="dsgt-cr-card-title">Smartphone X</h4>
                                <p class="dsgt-cr-card-text">Latest smartphone with AI features</p>
                            </div>
                        </div>
                        <div class="dsgt-cr-card-item">
                            <div class="dsgt-cr-card-image" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                                <i class="fa-solid fa-headphones"></i>
                            </div>
                            <div class="dsgt-cr-card-body">
                                <h4 class="dsgt-cr-card-title">Wireless Headphones</h4>
                                <p class="dsgt-cr-card-text">Premium sound quality with ANC</p>
                            </div>
                        </div>
                        <div class="dsgt-cr-card-item">
                            <div class="dsgt-cr-card-image" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d 100%);">
                                <i class="fa-solid fa-tablet-screen-button"></i>
                            </div>
                            <div class="dsgt-cr-card-body">
                                <h4 class="dsgt-cr-card-title">Tablet Ultra</h4>
                                <p class="dsgt-cr-card-text">Creative tablet with stylus support</p>
                            </div>
                        </div>
                        <div class="dsgt-cr-card-item">
                            <div class="dsgt-cr-card-image" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                                <i class="fa-solid fa-camera"></i>
                            </div>
                            <div class="dsgt-cr-card-body">
                                <h4 class="dsgt-cr-card-title">DSLR Camera</h4>
                                <p class="dsgt-cr-card-text">Professional photography equipment</p>
                            </div>
                        </div>
                        <div class="dsgt-cr-card-item">
                            <div class="dsgt-cr-card-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                                <i class="fa-solid fa-keyboard"></i>
                            </div>
                            <div class="dsgt-cr-card-body">
                                <h4 class="dsgt-cr-card-title">Mechanical Keyboard</h4>
                                <p class="dsgt-cr-card-text">RGB mechanical gaming keyboard</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="dsgt-cr-nav dsgt-cr-nav-prev" onclick="MetroAdmin.moveDSGTCardCarousel('cardCarousel', -1)" style="left: 0;">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="dsgt-cr-nav dsgt-cr-nav-next" onclick="MetroAdmin.moveDSGTCardCarousel('cardCarousel', 1)" style="right: 0;">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
            <div class="cr-helper">
                <i class="fa-solid fa-circle-info"></i>
                Shows 3 cards at a time, swipe to see more products
            </div>
        </div>
    </div>
</div>

<!-- Vertical Carousel -->
<div class="dsgt-cr-section-title">
    <i class="fa-solid fa-arrows-up-down"></i>
    Vertical Carousel
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-secondary">
                <i class="fa-solid fa-arrow-down"></i>
            </div>
            <div>
                <h3>Vertical Slideshow</h3>
                <p class="card-subtitle">Slides move up and down</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-cr-example">
            <span class="dsgt-cr-example-label">Vertical Navigation</span>
            <div class="dsgt-cr dsgt-cr-vertical" id="verticalCarousel">
                <div class="dsgt-cr-container">
                    <div class="dsgt-cr-track">
                        <div class="dsgt-cr-slide">
                            <div class="dsgt-cr-slide-placeholder bg-gradient-3">
                                <i class="fa-solid fa-globe"></i>
                            </div>
                            <div class="dsgt-cr-overlay">
                                <h3 class="dsgt-cr-slide-title">Global Reach</h3>
                                <p class="dsgt-cr-slide-description">Connect with users worldwide</p>
                            </div>
                        </div>
                        <div class="dsgt-cr-slide">
                            <div class="dsgt-cr-slide-placeholder bg-gradient-1">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div class="dsgt-cr-overlay">
                                <h3 class="dsgt-cr-slide-title">Secure Platform</h3>
                                <p class="dsgt-cr-slide-description">Enterprise-grade security</p>
                            </div>
                        </div>
                        <div class="dsgt-cr-slide">
                            <div class="dsgt-cr-slide-placeholder bg-gradient-2">
                                <i class="fa-solid fa-bolt"></i>
                            </div>
                            <div class="dsgt-cr-overlay">
                                <h3 class="dsgt-cr-slide-title">Lightning Fast</h3>
                                <p class="dsgt-cr-slide-description">Optimized for performance</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="dsgt-cr-nav dsgt-cr-nav-prev" onclick="MetroAdmin.moveDSGTVerticalCarousel('verticalCarousel', -1)">
                    <i class="fa-solid fa-chevron-up"></i>
                </button>
                <button class="dsgt-cr-nav dsgt-cr-nav-next" onclick="MetroAdmin.moveDSGTVerticalCarousel('verticalCarousel', 1)">
                    <i class="fa-solid fa-chevron-down"></i>
                </button>
                
                <div class="dsgt-cr-indicators">
                    <div class="dsgt-cr-indicator active" onclick="MetroAdmin.goToDSGTVerticalSlide('verticalCarousel', 0)"></div>
                    <div class="dsgt-cr-indicator" onclick="MetroAdmin.goToDSGTVerticalSlide('verticalCarousel', 1)"></div>
                    <div class="dsgt-cr-indicator" onclick="MetroAdmin.goToDSGTVerticalSlide('verticalCarousel', 2)"></div>
                </div>
            </div>
            <div class="dsgt-cr-helper">
                <i class="fa-solid fa-circle-info"></i>
                Vertical carousel with up/down navigation
            </div>
        </div>
    </div>
</div>

<!-- Fade Transition Carousel -->
<div class="dsgt-cr-section-title">
    <i class="fa-solid fa-wand-magic-sparkles"></i>
    Fade Transition Carousel <span class="badge badge-purple">Advanced</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-purple">
                <i class="fa-solid fa-layer-group"></i>
            </div>
            <div>
                <h3>Fade Effect</h3>
                <p class="card-subtitle">Smooth crossfade between slides</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-cr-example">
            <span class="dsgt-cr-example-label">Crossfade Transition</span>
            <div class="dsgt-cr" id="fadeCarousel" data-autoplay="4000">
                <div class="dsgt-cr-container">
                    <div class="dsgt-cr-track">
                        <div class="dsgt-cr-slide">
                            <div class="dsgt-cr-slide-placeholder bg-gradient-5">
                                <i class="fa-solid fa-mountain-sun"></i>
                            </div>
                            <div class="dsgt-cr-overlay">
                                <h3 class="dsgt-cr-slide-title">Scenic Views</h3>
                                <p class="dsgt-cr-slide-description">Beautiful landscape photography</p>
                            </div>
                        </div>
                        <div class="dsgt-cr-slide">
                            <div class="dsgt-cr-slide-placeholder bg-gradient-2">
                                <i class="fa-solid fa-city"></i>
                            </div>
                            <div class="dsgt-cr-overlay">
                                <h3 class="dsgt-cr-slide-title">Urban Life</h3>
                                <p class="dsgt-cr-slide-description">City architecture and design</p>
                            </div>
                        </div>
                        <div class="dsgt-cr-slide">
                            <div class="dsgt-cr-slide-placeholder bg-gradient-4">
                                <i class="fa-solid fa-camera-retro"></i>
                            </div>
                            <div class="dsgt-cr-overlay">
                                <h3 class="dsgt-cr-slide-title">Photography</h3>
                                <p class="dsgt-cr-slide-description">Professional photo gallery</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="dsgt-cr-nav dsgt-cr-nav-prev" onclick="MetroAdmin.moveDSGTCarousel('fadeCarousel', -1)">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="dsgt-cr-nav dsgt-cr-nav-next" onclick="MetroAdmin.moveDSGTCarousel('fadeCarousel', 1)">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
                
                <div class="dsgt-cr-indicators">
                    <div class="dsgt-cr-indicator active" onclick="MetroAdmin.goToDSGTSlide('fadeCarousel', 0)"></div>
                    <div class="dsgt-cr-indicator" onclick="MetroAdmin.goToDSGTSlide('fadeCarousel', 1)"></div>
                    <div class="dsgt-cr-indicator" onclick="MetroAdmin.goToDSGTSlide('fadeCarousel', 2)"></div>
                </div>
            </div>
            <div class="dsgt-cr-helper">
                <i class="fa-solid fa-circle-info"></i>
                Smooth fade transitions between slides (4s autoplay)
            </div>
        </div>
    </div>
</div>

<!-- Fullscreen Carousel -->
<div class="dsgt-cr-section-title">
    <i class="fa-solid fa-expand"></i>
    Fullscreen Carousel <span class="badge badge-danger">Immersive</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-danger">
                <i class="fa-solid fa-tv"></i>
            </div>
            <div>
                <h3>Fullscreen Hero</h3>
                <p class="card-subtitle">Full viewport height carousel</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-cr-example">
            <span class="dsgt-cr-example-label">Full Viewport Slider</span>
            <div class="dsgt-cr" id="fullscreenCarousel" data-autoplay="6000">
                <div class="dsgt-cr-container" style="height: 500px;">
                    <div class="dsgt-cr-track">
                        <div class="dsgt-cr-slide">
                            <div class="dsgt-cr-slide-placeholder bg-gradient-1" style="height: 500px;">
                                <i class="fa-solid fa-rocket" style="font-size: 80px;"></i>
                            </div>
                            <div class="dsgt-cr-overlay" style="padding: 60px 40px 40px;">
                                <h3 class="dsgt-cr-slide-title" style="font-size: 36px;">Launch Product</h3>
                                <p class="dsgt-cr-slide-description" style="font-size: 18px; margin-bottom: 20px;">Revolutionary platform for modern teams</p>
                                <button class="dsgt-cr-slide-btn" style="padding: 12px 32px; font-size: 16px;">
                                    <i class="fa-solid fa-play"></i> Start Now
                                </button>
                            </div>
                        </div>
                        <div class="dsgt-cr-slide">
                            <div class="dsgt-cr-slide-placeholder bg-gradient-3" style="height: 500px;">
                                <i class="fa-solid fa-gem" style="font-size: 80px;"></i>
                            </div>
                            <div class="dsgt-cr-overlay" style="padding: 60px 40px 40px;">
                                <h3 class="dsgt-cr-slide-title" style="font-size: 36px;">Premium Quality</h3>
                                <p class="dsgt-cr-slide-description" style="font-size: 18px; margin-bottom: 20px;">Enterprise-grade solutions</p>
                                <button class="dsgt-cr-slide-btn" style="padding: 12px 32px; font-size: 16px;">
                                    <i class="fa-solid fa-crown"></i> Upgrade
                                </button>
                            </div>
                        </div>
                        <div class="dsgt-cr-slide">
                            <div class="dsgt-cr-slide-placeholder bg-gradient-5" style="height: 500px;">
                                <i class="fa-solid fa-users" style="font-size: 80px;"></i>
                            </div>
                            <div class="dsgt-cr-overlay" style="padding: 60px 40px 40px;">
                                <h3 class="dsgt-cr-slide-title" style="font-size: 36px;">Join Community</h3>
                                <p class="dsgt-cr-slide-description" style="font-size: 18px; margin-bottom: 20px;">10,000+ developers worldwide</p>
                                <button class="dsgt-cr-slide-btn" style="padding: 12px 32px; font-size: 16px;">
                                    <i class="fa-solid fa-user-plus"></i> Sign Up
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="dsgt-cr-nav dsgt-cr-nav-prev" onclick="MetroAdmin.moveDSGTCarousel('fullscreenCarousel', -1)" style="width: 56px; height: 56px; font-size: 24px;">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="dsgt-cr-nav dsgt-cr-nav-next" onclick="MetroAdmin.moveDSGTCarousel('fullscreenCarousel', 1)" style="width: 56px; height: 56px; font-size: 24px;">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
                
                <div class="dsgt-cr-counter" style="top: 30px; right: 30px; font-size: 16px; padding: 8px 16px;">
                    <span class="current">1</span> / <span class="total">3</span>
                </div>
            </div>
            <div class="dsgt-cr-helper">
                <i class="fa-solid fa-circle-info"></i>
                Large hero carousel with call-to-action buttons (6s autoplay)
            </div>
        </div>
    </div>
</div>

<!-- Testimonial Carousel -->
<div class="dsgt-cr-section-title">
    <i class="fa-solid fa-quote-left"></i>
    Testimonial Carousel <span class="badge badge-success">Social Proof</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-comments"></i>
            </div>
            <div>
                <h3>Customer Reviews</h3>
                <p class="card-subtitle">Showcase client testimonials</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-cr-example">
            <span class="dsgt-cr-example-label">Client Testimonials</span>
            <div class="dsgt-cr" id="testimonialCarousel" data-autoplay="5000">
                <div class="dsgt-cr-container">
                    <div class="dsgt-cr-track">
                        <div class="dsgt-cr-slide">
                            <div style="padding: 40px; background: var(--bg-secondary);">
                                <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 20px;">
                                    <div style="width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                                        JD
                                    </div>
                                    <div>
                                        <h4 style="margin: 0; font-size: 18px;">John Doe</h4>
                                        <p style="margin: 4px 0 0 0; font-size: 14px; color: var(--text-secondary);">CEO, Tech Corp</p>
                                    </div>
                                </div>
                                <p style="font-size: 16px; line-height: 1.6; font-style: italic; color: var(--text-primary);">
                                    "This platform transformed our workflow completely. The team collaboration features are outstanding and the analytics dashboard provides incredible insights."
                                </p>
                                <div style="color: #fbbf24; font-size: 18px; margin-top: 16px;">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="dsgt-cr-slide">
                            <div style="padding: 40px; background: var(--bg-secondary);">
                                <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 20px;">
                                    <div style="width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                                        SM
                                    </div>
                                    <div>
                                        <h4 style="margin: 0; font-size: 18px;">Sarah Miller</h4>
                                        <p style="margin: 4px 0 0 0; font-size: 14px; color: var(--text-secondary);">Designer, Creative Studio</p>
                                    </div>
                                </div>
                                <p style="font-size: 16px; line-height: 1.6; font-style: italic; color: var(--text-primary);">
                                    "As a designer, I appreciate the attention to detail and user experience. The interface is intuitive and the customization options are limitless."
                                </p>
                                <div style="color: #fbbf24; font-size: 18px; margin-top: 16px;">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="dsgt-cr-slide">
                            <div style="padding: 40px; background: var(--bg-secondary);">
                                <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 20px;">
                                    <div style="width: 60px; height: 60px; border-radius: 50%; background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 24px; font-weight: bold;">
                                        RC
                                    </div>
                                    <div>
                                        <h4 style="margin: 0; font-size: 18px;">Robert Chen</h4>
                                        <p style="margin: 4px 0 0 0; font-size: 14px; color: var(--text-secondary);">Developer, StartupXYZ</p>
                                    </div>
                                </div>
                                <p style="font-size: 16px; line-height: 1.6; font-style: italic; color: var(--text-primary);">
                                    "The API documentation is excellent and the integration process was seamless. We reduced our development time by 40% using this solution."
                                </p>
                                <div style="color: #fbbf24; font-size: 18px; margin-top: 16px;">
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
                
                <button class="dsgt-cr-nav dsgt-cr-nav-prev" onclick="MetroAdmin.moveDSGTCarousel('testimonialCarousel', -1)">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="dsgt-cr-nav dsgt-cr-nav-next" onclick="MetroAdmin.moveDSGTCarousel('testimonialCarousel', 1)">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
                
                <div class="dsgt-cr-indicators">
                    <div class="dsgt-cr-indicator active" onclick="MetroAdmin.goToDSGTSlide('testimonialCarousel', 0)"></div>
                    <div class="dsgt-cr-indicator" onclick="MetroAdmin.goToDSGTSlide('testimonialCarousel', 1)"></div>
                    <div class="dsgt-cr-indicator" onclick="MetroAdmin.goToDSGTSlide('testimonialCarousel', 2)"></div>
                </div>
            </div>
            <div class="dsgt-cr-helper">
                <i class="fa-solid fa-circle-info"></i>
                Customer testimonials with avatars and star ratings (5s autoplay)
            </div>
        </div>
    </div>
</div>

<!-- Center Mode Carousel -->
<div class="dsgt-cr-section-title">
    <i class="fa-solid fa-bullseye"></i>
    Center Mode Carousel <span class="badge badge-info">Gallery</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-images"></i>
            </div>
            <div>
                <h3>Focus Mode</h3>
                <p class="card-subtitle">Center slide highlighted with side previews</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-cr-example">
            <span class="dsgt-cr-example-label">Center-Focused Gallery</span>
            <div class="dsgt-cr" id="centerCarousel" style="padding: 0 80px;">
                <div class="dsgt-cr-container">
                    <div class="dsgt-cr-cards-track">
                        <div class="dsgt-cr-card-item">
                            <div class="dsgt-cr-card-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); height: 250px;">
                                <i class="fa-solid fa-mountain" style="font-size: 48px;"></i>
                            </div>
                            <div class="dsgt-cr-card-body">
                                <h4 class="dsgt-cr-card-title">Mountains</h4>
                                <p class="dsgt-cr-card-text">Majestic peak photography</p>
                            </div>
                        </div>
                        <div class="dsgt-cr-card-item">
                            <div class="dsgt-cr-card-image" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); height: 250px;">
                                <i class="fa-solid fa-water" style="font-size: 48px;"></i>
                            </div>
                            <div class="dsgt-cr-card-body">
                                <h4 class="dsgt-cr-card-title">Ocean</h4>
                                <p class="dsgt-cr-card-text">Deep blue sea waves</p>
                            </div>
                        </div>
                        <div class="dsgt-cr-card-item">
                            <div class="dsgt-cr-card-image" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); height: 250px;">
                                <i class="fa-solid fa-tree" style="font-size: 48px;"></i>
                            </div>
                            <div class="dsgt-cr-card-body">
                                <h4 class="dsgt-cr-card-title">Forest</h4>
                                <p class="dsgt-cr-card-text">Green nature trails</p>
                            </div>
                        </div>
                        <div class="dsgt-cr-card-item">
                            <div class="dsgt-cr-card-image" style="background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); height: 250px;">
                                <i class="fa-solid fa-sun" style="font-size: 48px;"></i>
                            </div>
                            <div class="dsgt-cr-card-body">
                                <h4 class="dsgt-cr-card-title">Desert</h4>
                                <p class="dsgt-cr-card-text">Golden sand dunes</p>
                            </div>
                        </div>
                        <div class="dsgt-cr-card-item">
                            <div class="dsgt-cr-card-image" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); height: 250px;">
                                <i class="fa-solid fa-snowflake" style="font-size: 48px;"></i>
                            </div>
                            <div class="dsgt-cr-card-body">
                                <h4 class="dsgt-cr-card-title">Arctic</h4>
                                <p class="dsgt-cr-card-text">Frozen wonderland</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="dsgt-cr-nav dsgt-cr-nav-prev" onclick="MetroAdmin.moveDSGTCardCarousel('centerCarousel', -1)" style="left: 20px;">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button class="dsgt-cr-nav dsgt-cr-nav-next" onclick="MetroAdmin.moveDSGTCardCarousel('centerCarousel', 1)" style="right: 20px;">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
            <div class="dsgt-cr-helper">
                <i class="fa-solid fa-circle-info"></i>
                Card carousel with center focus and side previews
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="dsgt-cr-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="dsgt-cr-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>JavaScript API</h3>
                    <p class="card-subtitle">Carousel control functions</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <pre style="background: var(--bg-tertiary); padding: 16px; border-radius: 8px; font-size: 12px; overflow-x: auto;"><code>// Navigate carousel
moveCarousel('carouselId', direction);
// direction: -1 (prev), 1 (next)

// Go to specific slide
goToSlide('carouselId', index);

// Card carousel
moveCardCarousel('carouselId', direction);

// Vertical carousel
moveVerticalCarousel('carouselId', direction);
goToVerticalSlide('carouselId', index);</code></pre>
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
                    <p class="card-subtitle">When to use each carousel type</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" style="width: 100%; font-size: 13px;">
                <thead>
                    <tr>
                        <th>Carousel Type</th>
                        <th>Use Case</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Hero</strong></td>
                        <td>Landing pages, headers</td>
                    </tr>
                    <tr>
                        <td><strong>Auto-play</strong></td>
                        <td>Featured content, ads</td>
                    </tr>
                    <tr>
                        <td><strong>Thumbnails</strong></td>
                        <td>Image galleries, portfolios</td>
                    </tr>
                    <tr>
                        <td><strong>Card</strong></td>
                        <td>Products, testimonials</td>
                    </tr>
                    <tr>
                        <td><strong>Vertical</strong></td>
                        <td>Stories, mobile-first</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Carousel page initialization
$(document).ready(function() {
    console.log('📋 DSGT Carousel page loaded successfully');
});
</script>
@endpush