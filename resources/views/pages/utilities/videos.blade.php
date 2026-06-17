@extends('layouts.app')

@section('title', 'Videos')
@section('breadcrumb', 'Videos')

@push('styles')
@endpush

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Videos</h1>
        <p>Responsive video embeds, galleries, playlists, and video player components for multimedia content</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary" onclick="MetroAdmin.openDSGTVideoModal('dQw4w9WgXcQ')">
            <i class="fa-solid fa-play"></i>
            <span>Watch Demo</span>
        </button>
        <button class="btn btn-danger" onclick="window.openLockedVideo('dQw4w9WgXcQ')">
            <i class="fa-solid fa-lock"></i>
            <span>Locked Video</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="dsgt-video-info-card content-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">Video Components</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">This page demonstrates various video embedding techniques including responsive YouTube/Vimeo embeds, HTML5 video players, video cards with thumbnails, playlists, and modal video players. All videos use responsive wrappers that maintain proper aspect ratios across all screen sizes, ensuring optimal viewing experience on desktop, tablet, and mobile devices.</p>
            </div>
        </div>
    </div>
</div>

<!-- YouTube Embed -->
<div class="dsgt-video-section-title">
    <i class="fa-brands fa-youtube"></i>
    YouTube Embed <span class="badge badge-danger">Popular</span>
</div>

<div class="dsgt-video-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-danger">
                    <i class="fa-brands fa-youtube"></i>
                </div>
                <div>
                    <h3>16:9 Ratio</h3>
                    <p class="card-subtitle">Standard widescreen</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-video-example">
                <span class="dsgt-video-example-label">YouTube Video</span>
                <div class="dsgt-video-wrapper dsgt-video-ratio-16-9">
                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                            title="YouTube video" 
                            allowfullscreen>
                    </iframe>
                </div>
                <div class="dsgt-video-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Responsive 16:9 aspect ratio
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-expand"></i>
                </div>
                <div>
                    <h3>4:3 Ratio</h3>
                    <p class="card-subtitle">Classic standard</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-video-example">
                <span class="dsgt-video-example-label">Classic Ratio</span>
                <div class="dsgt-video-wrapper dsgt-video-ratio-4-3">
                    <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                            title="YouTube video" 
                            allowfullscreen>
                    </iframe>
                </div>
                <div class="dsgt-video-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Traditional 4:3 aspect ratio
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Vimeo Embed -->
<div class="dsgt-video-section-title">
    <i class="fa-brands fa-vimeo"></i>
    Vimeo Embed
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-brands fa-vimeo-v"></i>
            </div>
            <div>
                <h3>Vimeo Player</h3>
                <p class="card-subtitle">Professional video hosting</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-video-example">
            <span class="dsgt-video-example-label">Vimeo Video</span>
            <div class="dsgt-video-wrapper dsgt-video-ratio-16-9">
                <iframe src="https://player.vimeo.com/video/76979871" 
                        title="Vimeo video" 
                        allowfullscreen>
                </iframe>
            </div>
            <div class="dsgt-video-helper">
                <i class="fa-solid fa-circle-info"></i>
                High-quality Vimeo embed
            </div>
        </div>
    </div>
</div>

<!-- HTML5 Video -->
<div class="dsgt-video-section-title">
    <i class="fa-solid fa-film"></i>
    HTML5 Video
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-video"></i>
            </div>
            <div>
                <h3>Native Video Player</h3>
                <p class="card-subtitle">HTML5 video element</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-video-example">
            <span class="dsgt-video-example-label">HTML5 Video</span>
            <div class="dsgt-video-wrapper dsgt-video-ratio-16-9" style="background: linear-gradient(135deg, var(--accent), #1A86D9); display: flex; align-items: center; justify-content: center;">
                <div style="text-align: center; color: white;">
                    <i class="fa-solid fa-video" style="font-size: 48px; margin-bottom: 12px; display: block;"></i>
                    <p style="font-size: 16px; font-weight: 600; margin: 0;">HTML5 Video Player</p>
                    <p style="font-size: 13px; margin: 8px 0 0 0; opacity: 0.9;">Add your video source to enable playback</p>
                </div>
            </div>
            <div class="dsgt-video-embed-info">
                <p style="font-size: 12px; color: var(--text-secondary); margin: 0 0 8px 0; font-weight: 600;">HTML Code:</p>
                <div class="dsgt-video-embed-code">
&lt;video controls poster="thumbnail.jpg"&gt;
  &lt;source src="video.mp4" type="video/mp4"&gt;
  &lt;source src="video.webm" type="video/webm"&gt;
  Your browser does not support the video tag.
&lt;/video&gt;
                </div>
            </div>
            <div class="dsgt-video-helper">
                <i class="fa-solid fa-circle-info"></i>
                Native browser video player
            </div>
        </div>
    </div>
</div>

<!-- Video Cards -->
<div class="dsgt-video-section-title">
    <i class="fa-solid fa-clone"></i>
    Video Cards
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-layer-group"></i>
            </div>
            <div>
                <h3>Video Gallery</h3>
                <p class="card-subtitle">Thumbnail cards with metadata</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-video-example" style="padding: 0; background: transparent; border: none;">
            <span class="dsgt-video-example-label" style="padding: 0 24px;">Normal Video Cards (Closable)</span>
            <div class="dsgt-video-gallery-grid" style="padding: 0 24px 24px;">
                <!-- Video Card 1 -->
                <div class="dsgt-video-card" onclick="MetroAdmin.openDSGTVideoModal('dQw4w9WgXcQ')">
                    <div class="dsgt-video-card-thumbnail">
                        <img src="https://picsum.photos/seed/video1/640/360" alt="Video 1">
                        <div class="dsgt-video-card-play">
                            <i class="fa-solid fa-play"></i>
                        </div>
                        <div class="dsgt-video-card-duration">3:32</div>
                    </div>
                    <div class="dsgt-video-card-content">
                        <h4 class="dsgt-video-card-title">Introduction to Web Development</h4>
                        <div class="dsgt-video-card-meta">
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-eye"></i> 12.5K
                            </span>
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-heart"></i> 856
                            </span>
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-clock"></i> 2 days ago
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Video Card 2 -->
                <div class="dsgt-video-card" onclick="MetroAdmin.openDSGTVideoModal('dQw4w9WgXcQ')">
                    <div class="dsgt-video-card-thumbnail">
                        <img src="https://picsum.photos/seed/video2/640/360" alt="Video 2">
                        <div class="dsgt-video-card-play">
                            <i class="fa-solid fa-play"></i>
                        </div>
                        <div class="dsgt-video-card-duration">5:18</div>
                    </div>
                    <div class="dsgt-video-card-content">
                        <h4 class="dsgt-video-card-title">CSS Grid Layout Tutorial</h4>
                        <div class="dsgt-video-card-meta">
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-eye"></i> 8.3K
                            </span>
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-heart"></i> 542
                            </span>
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-clock"></i> 5 days ago
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Video Card 3 -->
                <div class="dsgt-video-card" onclick="MetroAdmin.openDSGTVideoModal('dQw4w9WgXcQ')">
                    <div class="dsgt-video-card-thumbnail">
                        <img src="https://picsum.photos/seed/video3/640/360" alt="Video 3">
                        <div class="dsgt-video-card-play">
                            <i class="fa-solid fa-play"></i>
                        </div>
                        <div class="dsgt-video-card-duration">8:45</div>
                    </div>
                    <div class="dsgt-video-card-content">
                        <h4 class="dsgt-video-card-title">JavaScript ES6 Features</h4>
                        <div class="dsgt-video-card-meta">
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-eye"></i> 15.2K
                            </span>
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-heart"></i> 1.2K
                            </span>
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-clock"></i> 1 week ago
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Video Card 4 -->
                <div class="dsgt-video-card" onclick="MetroAdmin.openDSGTVideoModal('dQw4w9WgXcQ')">
                    <div class="dsgt-video-card-thumbnail">
                        <img src="https://picsum.photos/seed/video4/640/360" alt="Video 4">
                        <div class="dsgt-video-card-play">
                            <i class="fa-solid fa-play"></i>
                        </div>
                        <div class="dsgt-video-card-duration">12:20</div>
                    </div>
                    <div class="dsgt-video-card-content">
                        <h4 class="dsgt-video-card-title">React Hooks Deep Dive</h4>
                        <div class="dsgt-video-card-meta">
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-eye"></i> 22.1K
                            </span>
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-heart"></i> 1.8K
                            </span>
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-clock"></i> 2 weeks ago
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dsgt-video-helper" style="margin: 0 24px 24px;">
                <i class="fa-solid fa-circle-info"></i>
                Click any card to play video in modal (can be closed with X, ESC, or backdrop click)
            </div>
        </div>
    </div>
</div>

<!-- Locked Video Cards -->
<div class="dsgt-video-section-title">
    <i class="fa-solid fa-lock"></i>
    Locked Video Cards <span class="badge badge-danger">Cannot Close</span>
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-danger">
                <i class="fa-solid fa-shield-halved"></i>
            </div>
            <div>
                <h3>Mandatory Videos</h3>
                <p class="card-subtitle">Unclosable modal - programmatic close only</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="dsgt-video-example" style="padding: 0; background: transparent; border: none;">
            <span class="dsgt-video-example-label" style="padding: 0 24px;">🔒 Locked Video Cards (Unclosable)</span>
            <div class="dsgt-video-gallery-grid" style="padding: 0 24px 24px;">
                <!-- Locked Video Card 1 -->
                <div class="dsgt-video-card" onclick="window.openLockedVideo('dQw4w9WgXcQ')" style="position: relative;">
                    <div class="dsgt-video-card-thumbnail">
                        <img src="https://picsum.photos/seed/locked1/640/360" alt="Locked Video 1">
                        <div class="dsgt-video-card-play" style="background: rgba(220, 53, 69, 0.9);">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <div class="dsgt-video-card-duration">3:32</div>
                        <div style="position: absolute; top: 8px; left: 8px; background: var(--danger); color: white; padding: 4px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">
                            <i class="fa-solid fa-lock"></i> LOCKED
                        </div>
                    </div>
                    <div class="dsgt-video-card-content">
                        <h4 class="dsgt-video-card-title">🔒 Mandatory Safety Training</h4>
                        <p style="font-size: 12px; color: var(--danger); margin: 4px 0 0 0; font-weight: 500;">
                            <i class="fa-solid fa-circle-exclamation"></i> Must watch - cannot be closed
                        </p>
                        <div class="dsgt-video-card-meta">
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-eye"></i> Required
                            </span>
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-clock"></i> 3 min 32 sec
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Locked Video Card 2 -->
                <div class="dsgt-video-card" onclick="window.openLockedVideo('dQw4w9WgXcQ')" style="position: relative;">
                    <div class="dsgt-video-card-thumbnail">
                        <img src="https://picsum.photos/seed/locked2/640/360" alt="Locked Video 2">
                        <div class="dsgt-video-card-play" style="background: rgba(220, 53, 69, 0.9);">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <div class="dsgt-video-card-duration">5:18</div>
                        <div style="position: absolute; top: 8px; left: 8px; background: var(--danger); color: white; padding: 4px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">
                            <i class="fa-solid fa-lock"></i> LOCKED
                        </div>
                    </div>
                    <div class="dsgt-video-card-content">
                        <h4 class="dsgt-video-card-title">🔒 Company Policy Overview</h4>
                        <p style="font-size: 12px; color: var(--danger); margin: 4px 0 0 0; font-weight: 500;">
                            <i class="fa-solid fa-circle-exclamation"></i> Must watch - cannot be closed
                        </p>
                        <div class="dsgt-video-card-meta">
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-eye"></i> Required
                            </span>
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-clock"></i> 5 min 18 sec
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Locked Video Card 3 -->
                <div class="dsgt-video-card" onclick="window.openLockedVideo('dQw4w9WgXcQ')" style="position: relative;">
                    <div class="dsgt-video-card-thumbnail">
                        <img src="https://picsum.photos/seed/locked3/640/360" alt="Locked Video 3">
                        <div class="dsgt-video-card-play" style="background: rgba(220, 53, 69, 0.9);">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <div class="dsgt-video-card-duration">8:45</div>
                        <div style="position: absolute; top: 8px; left: 8px; background: var(--danger); color: white; padding: 4px 8px; border-radius: 4px; font-size: 11px; font-weight: 600;">
                            <i class="fa-solid fa-lock"></i> LOCKED
                        </div>
                    </div>
                    <div class="dsgt-video-card-content">
                        <h4 class="dsgt-video-card-title">🔒 New Employee Onboarding</h4>
                        <p style="font-size: 12px; color: var(--danger); margin: 4px 0 0 0; font-weight: 500;">
                            <i class="fa-solid fa-circle-exclamation"></i> Must watch - cannot be closed
                        </p>
                        <div class="dsgt-video-card-meta">
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-eye"></i> Required
                            </span>
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-clock"></i> 8 min 45 sec
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Force Close Demo Card -->
                <div class="dsgt-video-card" onclick="showForceCloseDemo()" style="position: relative; border: 2px dashed var(--success); background: rgba(16, 185, 129, 0.05);">
                    <div class="dsgt-video-card-thumbnail" style="background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(16, 185, 129, 0.05)); display: flex; align-items: center; justify-content: center;">
                        <div style="text-align: center; color: var(--success);">
                            <i class="fa-solid fa-unlock-keyhole" style="font-size: 48px; margin-bottom: 8px;"></i>
                            <p style="font-size: 14px; font-weight: 600; margin: 0;">Force Close Demo</p>
                        </div>
                    </div>
                    <div class="dsgt-video-card-content">
                        <h4 class="dsgt-video-card-title">🔓 Force Close Programmatically</h4>
                        <p style="font-size: 12px; color: var(--success); margin: 4px 0 0 0; font-weight: 500;">
                            <i class="fa-solid fa-code"></i> Open locked modal, then close via console
                        </p>
                        <div class="dsgt-video-card-meta">
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-terminal"></i> Developer
                            </span>
                            <span class="dsgt-video-card-meta-item">
                                <i class="fa-solid fa-circle-info"></i> Demo
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dsgt-video-embed-info" style="margin: 0 24px 16px;">
                <p style="font-size: 12px; color: var(--text-secondary); margin: 0 0 8px 0; font-weight: 600;">🔒 Locked Modal Features:</p>
                <div style="font-size: 12px; color: var(--text-secondary); line-height: 1.6;">
                    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 4px;">
                        <i class="fa-solid fa-xmark" style="color: var(--danger);"></i>
                        <span><strong>X Button:</strong> Hidden - user cannot see close button</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 4px;">
                        <i class="fa-solid fa-keyboard" style="color: var(--danger);"></i>
                        <span><strong>ESC Key:</strong> Disabled - pressing ESC does nothing</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 4px;">
                        <i class="fa-solid fa-hand-pointer" style="color: var(--danger);"></i>
                        <span><strong>Backdrop Click:</strong> Blocked - clicking outside does nothing</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <i class="fa-solid fa-unlock" style="color: var(--success);"></i>
                        <span><strong>Force Close:</strong> <code style="background: var(--border-color); padding: 2px 6px; border-radius: 3px;">MetroAdmin.forceCloseVideoModal()</code></span>
                    </div>
                </div>
            </div>
            <div class="dsgt-video-helper" style="margin: 0 24px 24px;">
                <i class="fa-solid fa-circle-info"></i>
                Locked modal can ONLY be closed programmatically via JavaScript: <code style="background: var(--border-color); padding: 2px 6px; border-radius: 3px;">MetroAdmin.forceCloseVideoModal()</code>
            </div>
        </div>
    </div>
</div>

<!-- Video Playlist -->
<div class="dsgt-video-section-title">
    <i class="fa-solid fa-list-ol"></i>
    Video Playlist
</div>

<div class="dsgt-video-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-bars-staggered"></i>
                </div>
                <div>
                    <h3>Course Playlist</h3>
                    <p class="card-subtitle">Sequential video lessons</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-video-example" style="padding: 0; background: transparent; border: none;">
                <div class="dsgt-video-playlist">
                    <div class="dsgt-video-playlist-header">
                        <h4 class="dsgt-video-playlist-title">Web Development Course</h4>
                        <p class="dsgt-video-playlist-count">8 videos • 2 hours 45 minutes</p>
                    </div>
                    <div class="dsgt-video-playlist-items">
                        <div class="dsgt-video-playlist-item active">
                            <div class="dsgt-video-playlist-thumb">
                                <img src="https://picsum.photos/seed/lesson1/240/135" alt="Lesson 1">
                                <span class="dsgt-video-playlist-thumb-duration">15:30</span>
                            </div>
                            <div class="video-playlist-info">
                                <h5 class="video-playlist-item-title">1. Introduction to HTML</h5>
                                <p class="video-playlist-item-meta">15 min 30 sec</p>
                            </div>
                        </div>
                        
                        <div class="dsgt-video-playlist-item">
                            <div class="dsgt-video-playlist-thumb">
                                <img src="https://picsum.photos/seed/lesson2/240/135" alt="Lesson 2">
                                <span class="dsgt-video-playlist-thumb-duration">22:15</span>
                            </div>
                            <div class="video-playlist-info">
                                <h5 class="video-playlist-item-title">2. CSS Fundamentals</h5>
                                <p class="video-playlist-item-meta">22 min 15 sec</p>
                            </div>
                        </div>
                        
                        <div class="dsgt-video-playlist-item">
                            <div class="dsgt-video-playlist-thumb">
                                <img src="https://picsum.photos/seed/lesson3/240/135" alt="Lesson 3">
                                <span class="dsgt-video-playlist-thumb-duration">18:45</span>
                            </div>
                            <div class="video-playlist-info">
                                <h5 class="video-playlist-item-title">3. JavaScript Basics</h5>
                                <p class="video-playlist-item-meta">18 min 45 sec</p>
                            </div>
                        </div>
                        
                        <div class="dsgt-video-playlist-item">
                            <div class="dsgt-video-playlist-thumb">
                                <img src="https://picsum.photos/seed/lesson4/240/135" alt="Lesson 4">
                                <span class="dsgt-video-playlist-thumb-duration">25:00</span>
                            </div>
                            <div class="video-playlist-info">
                                <h5 class="video-playlist-item-title">4. Responsive Design</h5>
                                <p class="video-playlist-item-meta">25 min 0 sec</p>
                            </div>
                        </div>
                        
                        <div class="dsgt-video-playlist-item">
                            <div class="dsgt-video-playlist-thumb">
                                <img src="https://picsum.photos/seed/lesson5/240/135" alt="Lesson 5">
                                <span class="dsgt-video-playlist-thumb-duration">20:30</span>
                            </div>
                            <div class="video-playlist-info">
                                <h5 class="video-playlist-item-title">5. Advanced CSS Techniques</h5>
                                <p class="video-playlist-item-meta">20 min 30 sec</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dsgt-video-helper" style="margin-top: 16px;">
                    <i class="fa-solid fa-circle-info"></i>
                    Click playlist items to switch video
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-shapes"></i>
                </div>
                <div>
                    <h3>Aspect Ratios</h3>
                    <p class="card-subtitle">Different video dimensions</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-video-example">
                <span class="video-example-label">Ratio Comparison</span>
                <div style="margin-bottom: 16px;">
                    <p style="font-size: 12px; color: var(--text-secondary); margin-bottom: 8px; font-weight: 600;">21:9 (Ultra Wide)</p>
                    <div class="dsgt-video-wrapper dsgt-video-ratio-21-9">
                        <div class="dsgt-video-placeholder" style="background: linear-gradient(135deg, var(--success), #0FA80A);">
                            <span>21:9 Cinematic</span>
                        </div>
                    </div>
                </div>
                
                <div style="margin-bottom: 16px;">
                    <p style="font-size: 12px; color: var(--text-secondary); margin-bottom: 8px; font-weight: 600;">16:9 (Widescreen)</p>
                    <div class="dsgt-video-wrapper dsgt-video-ratio-16-9">
                        <div class="dsgt-video-placeholder" style="background: linear-gradient(135deg, var(--accent), #1A86D9);">
                            <span>16:9 Standard</span>
                        </div>
                    </div>
                </div>
                
                <div style="margin-bottom: 16px;">
                    <p style="font-size: 12px; color: var(--text-secondary); margin-bottom: 8px; font-weight: 600;">4:3 (Classic)</p>
                    <div class="dsgt-video-wrapper dsgt-video-ratio-4-3">
                        <div class="dsgt-video-placeholder" style="background: linear-gradient(135deg, var(--warning), #FF8C00);">
                            <span>4:3 Classic</span>
                        </div>
                    </div>
                </div>
                
                <div>
                    <p style="font-size: 12px; color: var(--text-secondary); margin-bottom: 8px; font-weight: 600;">1:1 (Square)</p>
                    <div class="dsgt-video-wrapper dsgt-video-ratio-1-1">
                        <div class="dsgt-video-placeholder" style="background: linear-gradient(135deg, var(--danger), #C50F1F);">
                            <span>1:1 Square</span>
                        </div>
                    </div>
                </div>
                
                <div class="dsgt-video-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Four aspect ratio options
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Video Modal -->
<div id="videoModal" class="dsgt-video-modal">
    <div class="dsgt-video-modal-content" onclick="event.stopPropagation()">
        <button class="dsgt-video-modal-close" onclick="MetroAdmin.closeDSGTVideoModal()">
            <i class="fa-solid fa-times"></i>
        </button>
        <div class="dsgt-video-modal-wrapper">
            <iframe id="videoModalIframe" src="" allowfullscreen></iframe>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="dsgt-video-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="dsgt-video-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>Embed Code</h3>
                    <p class="card-subtitle">Responsive video wrapper</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="dsgt-video-embed-info" style="margin: 0;">
                <p style="font-size: 12px; color: var(--text-secondary); margin: 0 0 8px 0; font-weight: 600;">YouTube Embed:</p>
                <div class="dsgt-video-embed-code">
&lt;div class="video-wrapper video-ratio-16-9"&gt;
  &lt;iframe src="https://www.youtube.com/embed/VIDEO_ID" 
          allowfullscreen&gt;
  &lt;/iframe&gt;
&lt;/div&gt;
                </div>
                
                <p style="font-size: 12px; color: var(--text-secondary); margin: 16px 0 8px 0; font-weight: 600;">Vimeo Embed:</p>
                <div class="dsgt-video-embed-code">
&lt;div class="video-wrapper video-ratio-16-9"&gt;
  &lt;iframe src="https://player.vimeo.com/video/VIDEO_ID" 
          allowfullscreen&gt;
  &lt;/iframe&gt;
&lt;/div&gt;
                </div>
                
                <p style="font-size: 12px; color: var(--text-secondary); margin: 16px 0 8px 0; font-weight: 600;">JavaScript API:</p>
                <div class="dsgt-video-embed-code">
// Normal modal (can be closed)
MetroAdmin.openDSGTVideoModal('VIDEO_ID');

// Locked modal (cannot be closed by user)
MetroAdmin.openDSGTVideoModalLocked('VIDEO_ID');

// Force close locked modal (programmatically)
MetroAdmin.forceCloseVideoModal();
                </div>
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
                    <p class="card-subtitle">Video embedding guidelines</p>
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
                        <td><strong>Use wrappers</strong></td>
                        <td>Responsive sizing</td>
                    </tr>
                    <tr>
                        <td><strong>Set aspect ratio</strong></td>
                        <td>Proper dimensions</td>
                    </tr>
                    <tr>
                        <td><strong>Lazy load</strong></td>
                        <td>Faster page load</td>
                    </tr>
                    <tr>
                        <td><strong>Add thumbnails</strong></td>
                        <td>Visual preview</td>
                    </tr>
                    <tr>
                        <td><strong>Modal player</strong></td>
                        <td>Focus viewing</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Force expose locked modal function globally to avoid 'this' context issues
window.openLockedVideo = function(videoId) {
    console.log('🔓 [INLINE] Opening locked video:', videoId);
    if (typeof MetroAdmin !== 'undefined') {
        MetroAdmin.openDSGTVideoModal(videoId, true);
    } else {
        console.error('❌ MetroAdmin not found!');
    }
};

// Force close demo function
function showForceCloseDemo() {
    // Open locked modal
    window.openLockedVideo('dQw4w9WgXcQ');
    
    // Show instructions
    setTimeout(() => {
        console.log('%c🔒 LOCKED VIDEO MODAL DEMO', 'font-size: 16px; font-weight: bold; color: #dc3545;');
        console.log('%cThis modal cannot be closed by user interaction.', 'font-size: 12px; color: #6c757d;');
        console.log('%cTry: X button (hidden), ESC key (blocked), Backdrop click (blocked)', 'font-size: 12px; color: #6c757d;');
        console.log('');
        console.log('%c✅ TO CLOSE: Run this command in console:', 'font-size: 12px; font-weight: bold; color: #10b981;');
        console.log('%cMetroAdmin.forceCloseVideoModal()', 'font-size: 14px; font-weight: bold; color: #10b981; background: #f0fdf4; padding: 8px; border-radius: 4px;');
    }, 500);
}

// Videos page initialization
$(document).ready(function() {
    console.log('✨ DSGT Videos page loaded successfully');
    
    // Initialize videos via MetroAdmin
    if (typeof MetroAdmin !== 'undefined') {
        MetroAdmin.initVideos();
        console.log('✅ MetroAdmin.initVideos() called');
        console.log('✅ Locked modal function available:', typeof MetroAdmin.openDSGTVideoModalLocked);
    }
});
</script>
@endpush