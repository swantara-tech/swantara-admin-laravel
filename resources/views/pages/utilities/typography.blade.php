@extends('layouts.app')

@section('title', 'Typography')
@section('breadcrumb', 'Typography')



@section('content')
<!-- Page Header -->
<div class="page-header">
    <div>
        <h1>Typography</h1>
        <p>Text styling, headings, paragraphs, lists, and typographic elements for consistent content presentation</p>
    </div>
    <div style="display: flex; gap: 10px;">
        <button class="btn btn-secondary">
            <i class="fa-solid fa-book"></i>
            <span>Documentation</span>
        </button>
        <button class="btn btn-primary">
            <i class="fa-solid fa-font"></i>
            <span>Font Guide</span>
        </button>
    </div>
</div>

<!-- Info Alert -->
<div class="content-card sw-typo-info-card">
    <div class="card-body" style="padding: 16px 20px;">
        <div style="display: flex; gap: 12px; align-items: start;">
            <i class="fa-solid fa-circle-info" style="color: var(--accent); font-size: 20px; margin-top: 2px;"></i>
            <div style="flex: 1;">
                <h4 style="margin-bottom: 4px; font-size: 14px;">Typography System</h4>
                <p style="font-size: 13px; color: var(--text-secondary); margin: 0;">Typography is the foundation of good design. This template uses a modern typography system with clear hierarchy, optimal readability, and consistent spacing. The system includes headings (H1-H6), paragraphs, lists, blockquotes, code blocks, and various text utilities that create a cohesive visual language across your application.</p>
            </div>
        </div>
    </div>
</div>

<!-- Headings -->
<div class="sw-typo-section-title">
    <i class="fa-solid fa-heading"></i>
    Headings <span class="badge badge-primary">Essential</span>
</div>

<div class="sw-typo-showcase">
    <h3 class="sw-typo-showcase-title">Heading Hierarchy</h3>
    <div class="sw-heading-showcase">
        <h1>Heading 1 <span class="sw-heading-meta">36px / 700</span></h1>
        <h2>Heading 2 <span class="sw-heading-meta">30px / 700</span></h2>
        <h3>Heading 3 <span class="sw-heading-meta">24px / 600</span></h3>
        <h4>Heading 4 <span class="sw-heading-meta">20px / 600</span></h4>
        <h5>Heading 5 <span class="sw-heading-meta">16px / 600</span></h5>
        <h6>Heading 6 <span class="sw-heading-meta">14px / 600</span></h6>
    </div>
    <div class="sw-typo-helper">
        <i class="fa-solid fa-circle-info"></i>
        Six heading levels with clear visual hierarchy
    </div>
</div>

<!-- Heading with Subtitle -->
<div class="sw-typo-section-title">
    <i class="fa-solid fa-text-height"></i>
    Headings with Subtitle
</div>

<div class="sw-typo-showcase">
    <h3 class="sw-typo-showcase-title">Page Titles</h3>
    <div class="sw-heading-showcase">
        <h1 style="margin-bottom: 4px;">Dashboard Overview</h1>
        <p style="color: var(--text-secondary); margin: 0 0 24px 0;">Welcome back, here's what's happening today</p>
        
        <h2 style="margin-bottom: 4px;">Recent Activity</h2>
        <p style="color: var(--text-secondary); margin: 0 0 24px 0;">Your latest actions and notifications</p>
        
        <h3 style="margin-bottom: 4px;">Quick Stats</h3>
        <p style="color: var(--text-secondary); margin: 0 0 0 0;">Performance metrics and analytics</p>
    </div>
    <div class="sw-typo-helper">
        <i class="fa-solid fa-circle-info"></i>
        Headings paired with descriptive subtitles
    </div>
</div>

<!-- Paragraphs -->
<div class="sw-typo-section-title">
    <i class="fa-solid fa-paragraph"></i>
    Paragraphs
</div>

<div class="sw-typo-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-align-left"></i>
                </div>
                <div>
                    <h3>Text Sizes</h3>
                    <p class="card-subtitle">Lead, normal, and small text</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-typo-example">
                <span class="sw-typo-example-label">Paragraph Variants</span>
                <p class="sw-paragraph-lead">
                    Lead paragraph: This is larger introductory text that draws attention and provides an overview of the content.
                </p>
                <hr class="sw-typo-hr">
                <p class="sw-paragraph-normal">
                    Normal paragraph: This is the standard text size used for body content. It provides optimal readability for long-form content and is the most commonly used text style.
                </p>
                <hr class="sw-typo-hr">
                <p class="sw-paragraph-small">
                    Small paragraph: Used for supplementary information, captions, and less important text that doesn't need to stand out.
                </p>
                <div class="sw-typo-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    18px lead, 14px normal, 12px small
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-text-width"></i>
                </div>
                <div>
                    <h3>Drop Cap</h3>
                    <p class="card-subtitle">Decorative first letter</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-typo-example">
                <span class="sw-typo-example-label">Drop Cap Style</span>
                <p class="sw-drop-cap" style="font-size: 14px; line-height: 1.7; color: var(--text-secondary);">
                    Typography is the art and technique of arranging type to make written language legible, readable, and appealing when displayed. The arrangement of type involves selecting typefaces, point sizes, line lengths, line-spacing, and letter-spacing, as well as adjusting space between pairs of letters.
                </p>
                <div class="sw-typo-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    First letter enlarged and styled
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Text Formatting -->
<div class="sw-typo-section-title">
    <i class="fa-solid fa-bold"></i>
    Text Formatting
</div>

<div class="sw-typo-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-warning">
                    <i class="fa-solid fa-font"></i>
                </div>
                <div>
                    <h3>Font Weights</h3>
                    <p class="card-subtitle">Light to bold variations</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-typo-example">
                <span class="sw-typo-example-label">Weight Classes</span>
                <p class="sw-font-weight-light">Light (300) - Subtle and elegant</p>
                <p class="sw-font-weight-normal">Normal (400) - Standard text</p>
                <p class="sw-font-weight-medium">Medium (500) - Slightly emphasized</p>
                <p class="sw-font-weight-semibold">Semibold (600) - Moderate emphasis</p>
                <p class="sw-font-weight-bold">Bold (700) - Strong emphasis</p>
                <div class="sw-typo-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Five weight options available
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-capslock"></i>
                </div>
                <div>
                    <h3>Text Transform</h3>
                    <p class="card-subtitle">Case transformations</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-typo-example">
                <span class="sw-typo-example-label">Transform Classes</span>
                <p class="sw-text-uppercase">Uppercase text transformation</p>
                <p class="sw-text-lowercase">LOWERCASE TEXT TRANSFORMATION</p>
                <p class="sw-text-capitalize">capitalize each word transformation</p>
                <p class="sw-text-decoration-underline">Underlined text decoration</p>
                <p class="sw-text-decoration-line-through">Line-through text decoration</p>
                <div class="sw-typo-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Transform and decoration utilities
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Inline Elements -->
<div class="sw-typo-section-title">
    <i class="fa-solid fa-pen-fancy"></i>
    Inline Elements
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-primary">
                <i class="fa-solid fa-highlighter"></i>
            </div>
            <div>
                <h3>Text Elements</h3>
                <p class="card-subtitle">Code, marks, abbreviations</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-typo-example">
            <span class="sw-typo-example-label">Inline Components</span>
            <div style="margin-bottom: 16px;">
                <p style="font-size: 14px; margin-bottom: 8px;">
                    <strong>Bold text:</strong> Use <span class="sw-typo-code">&lt;strong&gt;</span> for importance
                </p>
                <p style="font-size: 14px; margin-bottom: 8px;">
                    <em>Italic text:</em> Use <span class="sw-typo-code">&lt;em&gt;</span> for emphasis
                </p>
                <p style="font-size: 14px; margin-bottom: 8px;">
                    <span class="sw-typo-mark">Highlighted text:</span> Use mark for emphasis
                </p>
                <p style="font-size: 14px; margin-bottom: 8px;">
                    <span class="sw-typo-abbr" title="Cascading Style Sheets">CSS</span>: Abbreviation with tooltip
                </p>
                <p style="font-size: 14px; margin-bottom: 8px;">
                    <span class="sw-typo-code">code snippets</span>: Inline code styling
                </p>
                <p style="font-size: 14px; margin-bottom: 0;">
                    <span class="sw-text-gradient" style="font-weight: 600;">Gradient text:</span> Eye-catching effects
                </p>
            </div>
            <div class="sw-typo-helper">
                <i class="fa-solid fa-circle-info"></i>
                Various inline text styling options
            </div>
        </div>
    </div>
</div>

<!-- Blockquotes -->
<div class="sw-typo-section-title">
    <i class="fa-solid fa-quote-left"></i>
    Blockquotes
</div>

<div class="typo-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-quote-right"></i>
                </div>
                <div>
                    <h3>Default Blockquote</h3>
                    <p class="card-subtitle">Standard quote style</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-typo-example">
                <span class="sw-typo-example-label">Primary Quote</span>
                <blockquote class="sw-typo-blockquote">
                    <p>"Good design is as little design as possible. Less, but better — because it concentrates on the essential aspects."
                    </p>
                    <footer>Dieter Rams, Designer</footer>
                </blockquote>
                <div class="sw-typo-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Left border accent with attribution
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-quote-right"></i>
                </div>
                <div>
                    <h3>Color Variants</h3>
                    <p class="card-subtitle">Different border colors</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-typo-example">
                <span class="sw-typo-example-label">Success Quote</span>
                <blockquote class="sw-typo-blockquote sw-blockquote-success">
                    <p>"Success is not final, failure is not fatal: it is the courage to continue that counts."</p>
                    <footer>Winston Churchill</footer>
                </blockquote>
                <blockquote class="sw-typo-blockquote sw-blockquote-warning">
                    <p>"The only way to do great work is to love what you do."</p>
                    <footer>Steve Jobs</footer>
                </blockquote>
                <div class="sw-typo-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Contextual color emphasis
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Lists -->
<div class="sw-typo-section-title">
    <i class="fa-solid fa-list"></i>
    Lists
</div>

<div class="typo-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-list-ul"></i>
                </div>
                <div>
                    <h3>Unordered List</h3>
                    <p class="card-subtitle">Bullet point list</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-typo-example">
                <span class="sw-typo-example-label">Bullet List</span>
                <ul class="sw-typo-list">
                    <li>First item with bullet point</li>
                    <li>Second item with description text</li>
                    <li>Third item in the list</li>
                    <li>Fourth and final item</li>
                </ul>
                <div class="sw-typo-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Custom bullet styling
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-success">
                    <i class="fa-solid fa-list-ol"></i>
                </div>
                <div>
                    <h3>Ordered List</h3>
                    <p class="card-subtitle">Numbered sequence</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-typo-example">
                <span class="sw-typo-example-label">Numbered List</span>
                <ol class="sw-typo-list sw-typo-list-ordered">
                    <li>First step in the process</li>
                    <li>Second step to complete</li>
                    <li>Third step for completion</li>
                    <li>Final step to finish</li>
                </ol>
                <div class="sw-typo-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Sequential numbered items
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-info">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <div>
                    <h3>Icon List</h3>
                    <p class="card-subtitle">Checkmark bullets</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="sw-typo-example">
                <span class="sw-typo-example-label">Feature List</span>
                <ul class="sw-typo-list sw-typo-list-icon">
                    <li>Responsive design included</li>
                    <li>Modern UI components</li>
                    <li>Cross-browser compatibility</li>
                    <li>Accessible markup</li>
                </ul>
                <div class="sw-typo-helper">
                    <i class="fa-solid fa-circle-info"></i>
                    Icon-based list items
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Code Blocks -->
<div class="sw-typo-section-title">
    <i class="fa-solid fa-code"></i>
    Code Blocks
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-warning">
                <i class="fa-solid fa-file-code"></i>
            </div>
            <div>
                <h3>Preformatted Code</h3>
                <p class="card-subtitle">Code display blocks</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-typo-example">
            <span class="sw-typo-example-label">Code Example</span>
            <div class="sw-typo-pre">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Document&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Hello World&lt;/h1&gt;
    &lt;p&gt;Welcome to the web.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
            </div>
            <div class="sw-typo-helper">
                <i class="fa-solid fa-circle-info"></i>
                Monospace font with preserved spacing
            </div>
        </div>
    </div>
</div>

<!-- Horizontal Rules -->
<div class="sw-typo-section-title">
    <i class="fa-solid fa-minus"></i>
    Horizontal Rules
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-info">
                <i class="fa-solid fa-arrows-left-right"></i>
            </div>
            <div>
                <h3>Dividers</h3>
                <p class="card-subtitle">Visual separators</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-typo-example">
            <span class="sw-typo-example-label">Rule Variants</span>
            <p style="font-size: 14px; margin-bottom: 16px;">Content above the divider</p>
            <hr class="sw-typo-hr">
            <p style="font-size: 12px; color: var(--text-secondary); margin: 16px 0;">Default gradient rule</p>
            
            <hr class="sw-typo-hr sw-typo-hr-thick">
            <p style="font-size: 12px; color: var(--text-secondary); margin: 16px 0;">Thick accent rule</p>
            
            <hr class="sw-typo-hr sw-typo-hr-dashed">
            <p style="font-size: 12px; color: var(--text-secondary); margin: 16px 0;">Dashed rule</p>
            
            <p style="font-size: 14px; margin-top: 16px; margin-bottom: 0;">Content below the divider</p>
            
            <div class="typo-helper">
                <i class="fa-solid fa-circle-info"></i>
                Three divider styles available
            </div>
        </div>
    </div>
</div>

<!-- Typography Scale -->
<div class="sw-typo-section-title">
    <i class="fa-solid fa-ruler-vertical"></i>
    Typography Scale
</div>

<div class="content-card">
    <div class="card-header">
        <div class="card-header-left">
            <div class="card-icon bg-success">
                <i class="fa-solid fa-arrows-up-down"></i>
            </div>
            <div>
                <h3>Size Reference</h3>
                <p class="card-subtitle">Complete size spectrum</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="sw-typo-showcase">
            <h3 class="sw-typo-showcase-title">Font Size Scale</h3>
            <div style="margin-bottom: 12px;">
                <span style="font-size: 11px; color: var(--text-secondary);">11px - Caption text</span>
            </div>
            <div style="margin-bottom: 12px;">
                <span class="sw-typo-small">12px - Small text / Helper text</span>
            </div>
            <div style="margin-bottom: 12px;">
                <span style="font-size: 13px; color: var(--text-secondary);">13px - Secondary text</span>
            </div>
            <div style="margin-bottom: 12px;">
                <span style="font-size: 14px; color: var(--text-primary);">14px - Body text (default)</span>
            </div>
            <div style="margin-bottom: 12px;">
                <span class="sw-typo-large">18px - Large text / Lead</span>
            </div>
            <div style="margin-bottom: 12px;">
                <span style="font-size: 20px; font-weight: 600; color: var(--text-primary);">20px - H4 heading</span>
            </div>
            <div style="margin-bottom: 12px;">
                <span style="font-size: 24px; font-weight: 600; color: var(--text-primary);">24px - H3 heading</span>
            </div>
            <div style="margin-bottom: 12px;">
                <span style="font-size: 30px; font-weight: 700; color: var(--text-primary);">30px - H2 heading</span>
            </div>
            <div>
                <span style="font-size: 36px; font-weight: 700; color: var(--text-primary);">36px - H1 heading</span>
            </div>
            <div class="sw-typo-helper">
                <i class="fa-solid fa-circle-info"></i>
                Consistent scale from 11px to 36px
            </div>
        </div>
    </div>
</div>

<!-- Usage Guide -->
<div class="sw-typo-section-title">
    <i class="fa-solid fa-code"></i>
    Usage & Best Practices
</div>

<div class="sw-typo-grid">
    <div class="content-card">
        <div class="card-header">
            <div class="card-header-left">
                <div class="card-icon bg-primary">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div>
                    <h3>CSS Classes</h3>
                    <p class="card-subtitle">Typography utilities</p>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table" style="width: 100%; font-size: 13px;">
                <thead>
                    <tr>
                        <th>Class</th>
                        <th>Purpose</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>.font-weight-*</code></td>
                        <td>Light/Normal/Bold</td>
                    </tr>
                    <tr>
                        <td><code>.text-uppercase</code></td>
                        <td>Uppercase text</td>
                    </tr>
                    <tr>
                        <td><code>.text-center</code></td>
                        <td>Center alignment</td>
                    </tr>
                    <tr>
                        <td><code>.typo-code</code></td>
                        <td>Inline code</td>
                    </tr>
                    <tr>
                        <td><code>.typo-blockquote</code></td>
                        <td>Block quote</td>
                    </tr>
                    <tr>
                        <td><code>.typo-list</code></td>
                        <td>Custom list</td>
                    </tr>
                </tbody>
            </table>
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
                    <p class="card-subtitle">Typography guidelines</p>
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
                        <td><strong>Use hierarchy</strong></td>
                        <td>Clear structure</td>
                    </tr>
                    <tr>
                        <td><strong>Limit fonts</strong></td>
                        <td>Consistent look</td>
                    </tr>
                    <tr>
                        <td><strong>Proper spacing</strong></td>
                        <td>Readability</td>
                    </tr>
                    <tr>
                        <td><strong>Line length</strong></td>
                        <td>60-75 chars ideal</td>
                    </tr>
                    <tr>
                        <td><strong>Contrast</strong></td>
                        <td>Accessibility</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
// Typography page initialization
$(document).ready(function() {
    console.log('✨ SW Typography page loaded successfully');
    
    // Initialize typography via MetroAdmin
    if (typeof MetroAdmin !== 'undefined') {
        MetroAdmin.initTypographies();
        
        // Add click-to-copy for code elements
        $('.sw-typo-code').on('click', function() {
            const text = $(this).text();
            navigator.clipboard.writeText(text).then(() => {
                $(this).css({
                    'background': 'var(--success)',
                    'color': 'white'
                });
                
                setTimeout(() => {
                    $(this).css({
                        'background': 'rgba(0, 0, 0, 0.04)',
                        'color': 'var(--danger)'
                    });
                }, 1000);
            });
        }).css('cursor', 'pointer').attr('title', 'Click to copy');
        
        // Font Guide button in header
        $('.page-header .btn-primary').on('click', function() {
            $('html, body').animate({
                scrollTop: $('.sw-typo-showcase').first().offset().top - 100
            }, 800);
        });
    }
});
</script>
@endpush