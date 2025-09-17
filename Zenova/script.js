// DOM Content Loaded Event
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initNavigation();
    initScrollEffects();
    initAnimations();
    initModal();
    initContactForm();
    initBackToTop();
    initStatsCounter();
});

// Navigation functionality
function initNavigation() {
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');
    const header = document.querySelector('.header');
    
    // Mobile menu toggle
    if (navToggle && navMenu) {
        navToggle.addEventListener('click', function() {
            navToggle.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
    }
    
    // Close mobile menu when clicking on nav links
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            navToggle.classList.remove('active');
            navMenu.classList.remove('active');
        });
    });
    
    // Header scroll effect
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
    
    // Active nav link highlighting
    const sections = document.querySelectorAll('section[id]');
    const navLinksArray = Array.from(navLinks);
    
    window.addEventListener('scroll', function() {
        let currentSection = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 150;
            if (window.scrollY >= sectionTop) {
                currentSection = section.getAttribute('id');
            }
        });
        
        navLinksArray.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${currentSection}` || 
                (currentSection === 'hero' && link.getAttribute('href') === 'index.php')) {
                link.classList.add('active');
            }
        });
    });
}

// Scroll effects and animations
function initScrollEffects() {
    // Smooth scroll for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerHeight = document.querySelector('.header').offsetHeight;
                const targetPosition = target.offsetTop - headerHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    const animateElements = document.querySelectorAll('.project-card, .feature-card, .solution-card, .news-card, .stat-item');
    animateElements.forEach(el => {
        observer.observe(el);
    });
}

// Animation classes and effects
function initAnimations() {
    // Add CSS classes for animations
    const style = document.createElement('style');
    style.textContent = `
        .animate-fade-in {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .project-card, .feature-card, .solution-card, .news-card, .stat-item {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        
        .typing-animation {
            overflow: hidden;
            border-right: 0.15em solid #3b82f6;
            animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
        }
        
        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }
        
        @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: #3b82f6; }
        }
    `;
    document.head.appendChild(style);
    
    // Parallax effect for hero section
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const parallax = document.querySelector('.hero-section');
        if (parallax) {
            const speed = scrolled * 0.5;
            parallax.style.transform = `translateY(${speed}px)`;
        }
    });
}

// Modal functionality
function initModal() {
    const modal = document.getElementById('contactModal');
    const closeModal = document.getElementById('closeModal');
    const contactLinks = document.querySelectorAll('a[href="#contact"]');
    
    // Open modal
    contactLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            if (modal) {
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';
            }
        });
    });
    
    // Close modal
    if (closeModal) {
        closeModal.addEventListener('click', function() {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        });
    }
    
    // Close modal when clicking outside
    if (modal) {
        window.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        });
    }
    
    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal && modal.style.display === 'block') {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });
}

// Contact form handling
function initContactForm() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(contactForm);
            const data = Object.fromEntries(formData);
            
            // Basic validation
            if (!data.name || !data.email || !data.subject || !data.message) {
                showNotification('Please fill in all required fields.', 'error');
                return;
            }
            
            if (!isValidEmail(data.email)) {
                showNotification('Please enter a valid email address.', 'error');
                return;
            }
            
            // Simulate form submission
            const submitButton = contactForm.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;
            submitButton.textContent = 'Sending...';
            submitButton.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                showNotification('Thank you for your message! We\'ll get back to you soon.', 'success');
                contactForm.reset();
                document.getElementById('contactModal').style.display = 'none';
                document.body.style.overflow = 'auto';
                
                submitButton.textContent = originalText;
                submitButton.disabled = false;
            }, 2000);
        });
    }
}

// Back to top functionality
function initBackToTop() {
    const backToTopBtn = document.getElementById('backToTop');
    
    if (backToTopBtn) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
        });
        
        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
}

// Stats counter animation
function initStatsCounter() {
    const statNumbers = document.querySelectorAll('.stat-number');
    
    const countUp = (element, target) => {
        const increment = target / 100;
        let current = 0;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                element.textContent = target + (element.textContent.includes('+') ? '+' : '') + (element.textContent.includes('%') ? '%' : '');
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current) + (element.textContent.includes('+') ? '+' : '') + (element.textContent.includes('%') ? '%' : '');
            }
        }, 20);
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const text = element.textContent;
                const number = parseInt(text.replace(/\D/g, ''));
                
                if (number) {
                    element.textContent = '0' + (text.includes('+') ? '+' : '') + (text.includes('%') ? '%' : '');
                    countUp(element, number);
                }
                
                observer.unobserve(element);
            }
        });
    }, { threshold: 0.5 });
    
    statNumbers.forEach(stat => {
        observer.observe(stat);
    });
}

// Utility functions
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function showNotification(message, type = 'info') {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <span class="notification-message">${message}</span>
            <button class="notification-close">&times;</button>
        </div>
    `;
    
    // Add notification styles
    const style = document.createElement('style');
    style.textContent = `
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            z-index: 3000;
            min-width: 300px;
            max-width: 400px;
            transform: translateX(400px);
            transition: all 0.3s ease;
        }
        
        .notification.show {
            transform: translateX(0);
        }
        
        .notification-success {
            border-left: 4px solid #10b981;
        }
        
        .notification-error {
            border-left: 4px solid #ef4444;
        }
        
        .notification-info {
            border-left: 4px solid #3b82f6;
        }
        
        .notification-content {
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 1rem;
        }
        
        .notification-message {
            flex: 1;
            color: #374151;
            line-height: 1.5;
        }
        
        .notification-close {
            background: none;
            border: none;
            font-size: 1.25rem;
            color: #6b7280;
            cursor: pointer;
            padding: 0;
            line-height: 1;
        }
        
        .notification-close:hover {
            color: #374151;
        }
    `;
    
    if (!document.querySelector('#notification-styles')) {
        style.id = 'notification-styles';
        document.head.appendChild(style);
    }
    
    // Add to DOM
    document.body.appendChild(notification);
    
    // Show notification
    setTimeout(() => {
        notification.classList.add('show');
    }, 100);
    
    // Close notification functionality
    const closeBtn = notification.querySelector('.notification-close');
    closeBtn.addEventListener('click', () => {
        removeNotification(notification);
    });
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        if (notification.parentNode) {
            removeNotification(notification);
        }
    }, 5000);
}

function removeNotification(notification) {
    notification.classList.remove('show');
    setTimeout(() => {
        if (notification.parentNode) {
            notification.parentNode.removeChild(notification);
        }
    }, 300);
}

// Project card hover effects
function initProjectCardEffects() {
    const projectCards = document.querySelectorAll('.project-card');
    
    projectCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
}

// Lazy loading for images
function initLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
}

// Search functionality (if needed for future pages)
function initSearch() {
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');
    
    if (searchInput) {
        let searchTimeout;
        
        searchInput.addEventListener('input', function() {
            clearTimeout(searchTimeout);
            const query = this.value.trim();
            
            if (query.length < 3) {
                if (searchResults) {
                    searchResults.innerHTML = '';
                    searchResults.style.display = 'none';
                }
                return;
            }
            
            searchTimeout = setTimeout(() => {
                performSearch(query);
            }, 300);
        });
    }
}

function performSearch(query) {
    // Simulate search functionality
    const mockResults = [
        { title: 'Battery Energy Storage Systems', url: 'solutions.php#bess', type: 'Solution' },
        { title: 'Luzon Grid BESS Project', url: 'projects.php#luzon-grid', type: 'Project' },
        { title: 'Hybrid Power Systems', url: 'solutions.php#hybrid', type: 'Solution' }
    ];
    
    const filteredResults = mockResults.filter(item => 
        item.title.toLowerCase().includes(query.toLowerCase())
    );
    
    displaySearchResults(filteredResults);
}

function displaySearchResults(results) {
    const searchResults = document.getElementById('searchResults');
    
    if (!searchResults) return;
    
    if (results.length === 0) {
        searchResults.innerHTML = '<div class="search-no-results">No results found</div>';
    } else {
        const resultsHTML = results.map(result => `
            <div class="search-result-item">
                <a href="${result.url}">
                    <div class="search-result-title">${result.title}</div>
                    <div class="search-result-type">${result.type}</div>
                </a>
            </div>
        `).join('');
        
        searchResults.innerHTML = resultsHTML;
    }
    
    searchResults.style.display = 'block';
}

// Cookie consent (if needed)
function initCookieConsent() {
    const cookieConsent = localStorage.getItem('cookieConsent');
    
    if (!cookieConsent) {
        showCookieConsent();
    }
}

function showCookieConsent() {
    const consentBanner = document.createElement('div');
    consentBanner.className = 'cookie-consent';
    consentBanner.innerHTML = `
        <div class="cookie-content">
            <p>We use cookies to enhance your browsing experience and analyze our traffic. By continuing to use our site, you consent to our use of cookies.</p>
            <div class="cookie-actions">
                <button class="btn btn-primary accept-cookies">Accept</button>
                <button class="btn btn-outline decline-cookies">Decline</button>
            </div>
        </div>
    `;
    
    // Add cookie consent styles
    const style = document.createElement('style');
    style.textContent = `
        .cookie-consent {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: white;
            border-top: 1px solid #e5e7eb;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
            z-index: 2000;
            padding: 1rem;
        }
        
        .cookie-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 2rem;
        }
        
        .cookie-content p {
            flex: 1;
            margin: 0;
            color: #374151;
            font-size: 0.9rem;
        }
        
        .cookie-actions {
            display: flex;
            gap: 1rem;
        }
        
        .cookie-actions .btn {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
        }
        
        @media (max-width: 768px) {
            .cookie-content {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }
        }
    `;
    
    if (!document.querySelector('#cookie-styles')) {
        style.id = 'cookie-styles';
        document.head.appendChild(style);
    }
    
    document.body.appendChild(consentBanner);
    
    // Handle consent actions
    consentBanner.querySelector('.accept-cookies').addEventListener('click', () => {
        localStorage.setItem('cookieConsent', 'accepted');
        consentBanner.remove();
    });
    
    consentBanner.querySelector('.decline-cookies').addEventListener('click', () => {
        localStorage.setItem('cookieConsent', 'declined');
        consentBanner.remove();
    });
}

// Performance optimization
function initPerformanceOptimizations() {
    // Preload critical resources
    const preloadLinks = [
        { href: 'style.css', as: 'style' },
        { href: 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', as: 'style' }
    ];
    
    preloadLinks.forEach(link => {
        const preloadLink = document.createElement('link');
        preloadLink.rel = 'preload';
        preloadLink.href = link.href;
        preloadLink.as = link.as;
        document.head.appendChild(preloadLink);
    });
    
    // Optimize scroll performance
    let ticking = false;
    
    function updateScrollEffects() {
        // Update scroll-dependent effects here
        ticking = false;
    }
    
    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(updateScrollEffects);
            ticking = true;
        }
    });
}

// Error handling
window.addEventListener('error', function(e) {
    console.error('JavaScript Error:', e.error);
    // You could send this to an error reporting service
});

// Initialize additional features when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    initProjectCardEffects();
    initLazyLoading();
    initSearch();
    initPerformanceOptimizations();
    
    // Initialize cookie consent only if needed
    // initCookieConsent();
    
    // Add loading animation removal
    const loader = document.querySelector('.loader');
    if (loader) {
        setTimeout(() => {
            loader.style.opacity = '0';
            setTimeout(() => {
                loader.remove();
            }, 500);
        }, 1000);
    }
});

// Export functions for potential use in other scripts
window.ZenovaWebsite = {
    showNotification,
    isValidEmail,
    performSearch,
    initModal,
    initContactForm
};

// Solutions Page JavaScript

// Wait for DOM to load
document.addEventListener('DOMContentLoaded', function() {
    initializeSolutionsPage();
});

function initializeSolutionsPage() {
    // Only run if we're on the solutions page
    if (!document.querySelector('.solutions-page')) return;
    
    // Initialize all solution page features
    setupSolutionCards();
    setupDetailSections();
    setupAnimations();
    setupScrollEffects();
    setupProgressBars();
}

// Solution Cards Interaction
function setupSolutionCards() {
    const solutionCards = document.querySelectorAll('.solution-card');
    const learnMoreButtons = document.querySelectorAll('.learn-more-btn');
    
    // Add click handlers to learn more buttons
    learnMoreButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.stopPropagation();
            const target = this.getAttribute('data-target');
            showSolutionDetails(target);
        });
    });
    
    // Add hover effects to cards
    solutionCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
}

// Detail Sections Management
function setupDetailSections() {
    const closeButtons = document.querySelectorAll('.close-details');
    
    // Add click handlers to close buttons
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            hideAllDetails();
        });
    });
    
    // Close details when clicking outside
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('details-content')) {
            hideAllDetails();
        }
    });
}

// Show specific solution details
function showSolutionDetails(targetId) {
    // Hide all details first
    hideAllDetails();
    
    // Show the target details
    const targetDetail = document.getElementById(targetId);
    if (targetDetail) {
        targetDetail.classList.add('active');
        
        // Smooth scroll to the details
        setTimeout(() => {
            targetDetail.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }, 100);
        
        // Animate progress bars if they exist
        animateProgressBars(targetDetail);
        
        // Add backdrop
        addBackdrop();
    }
}

// Hide all detail sections
function hideAllDetails() {
    const allDetails = document.querySelectorAll('.details-content');
    allDetails.forEach(detail => {
        detail.classList.remove('active');
    });
    removeBackdrop();
}

// Add backdrop overlay
function addBackdrop() {
    removeBackdrop(); // Remove existing backdrop first
    
    const backdrop = document.createElement('div');
    backdrop.className = 'details-backdrop';
    backdrop.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 998;
        opacity: 0;
        transition: opacity 0.3s ease;
    `;
    
    document.body.appendChild(backdrop);
    
    // Trigger animation
    setTimeout(() => {
        backdrop.style.opacity = '1';
    }, 10);
    
    // Close on backdrop click
    backdrop.addEventListener('click', hideAllDetails);
}

// Remove backdrop overlay
function removeBackdrop() {
    const backdrop = document.querySelector('.details-backdrop');
    if (backdrop) {
        backdrop.style.opacity = '0';
        setTimeout(() => {
            backdrop.remove();
        }, 300);
    }
}

// Setup scroll-triggered animations
function setupScrollEffects() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                
                // Animate progress bars when they come into view
                if (entry.target.classList.contains('details-visual')) {
                    animateProgressBars(entry.target);
                }
                
                // Animate stats when they come into view
                if (entry.target.classList.contains('project-stats')) {
                    animateStats(entry.target);
                }
                
                // Animate pipeline when it comes into view
                if (entry.target.classList.contains('pipeline-chart')) {
                    animatePipelineChart(entry.target);
                }
            }
        });
    }, observerOptions);
    
    // Observe elements for scroll animations
    const animatedElements = document.querySelectorAll('.solution-card, .details-visual, .project-stats, .pipeline-chart');
    animatedElements.forEach(el => observer.observe(el));
}

// Animate progress bars
function animateProgressBars(container) {
    const progressBars = container.querySelectorAll('.fill');
    progressBars.forEach((bar, index) => {
        setTimeout(() => {
            const width = bar.style.width;
            bar.style.width = '0%';
            setTimeout(() => {
                bar.style.width = width;
            }, 100);
        }, index * 200);
    });
}

// Setup initial animations
function setupAnimations() {
    // Stagger animation for solution cards
    const solutionCards = document.querySelectorAll('.solution-card');
    solutionCards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.1}s`;
    });
    
    // Hero text animation
    const heroTitle = document.querySelector('.hero-title');
    const heroSubtitle = document.querySelector('.hero-subtitle');
    
    if (heroTitle) {
        setTimeout(() => {
            heroTitle.style.transform = 'translateY(0)';
            heroTitle.style.opacity = '1';
        }, 300);
    }
    
    if (heroSubtitle) {
        setTimeout(() => {
            heroSubtitle.style.transform = 'translateY(0)';
            heroSubtitle.style.opacity = '1';
        }, 600);
    }
}

// Setup progress bars animation
function setupProgressBars() {
    const progressBars = document.querySelectorAll('.fill');
    progressBars.forEach(bar => {
        const width = bar.style.width;
        bar.style.width = '0%';
        bar.dataset.targetWidth = width;
    });
}

// Animate statistics counters
function animateStats(container) {
    const statNumbers = container.querySelectorAll('.stat-number');
    statNumbers.forEach(stat => {
        const finalValue = stat.textContent;
        const numericValue = parseInt(finalValue.replace(/\D/g, ''));
        
        if (numericValue && numericValue > 0) {
            animateCounter(stat, 0, numericValue, finalValue, 2000);
        }
    });
}

// Counter animation function
function animateCounter(element, start, end, finalText, duration) {
    const startTime = performance.now();
    const isPercentage = finalText.includes('%');
    const hasPlus = finalText.includes('+');
    const prefix = finalText.match(/^\D*/)[0];
    const suffix = finalText.match(/\D*$/)[0];
    
    function updateCounter(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        
        // Easing function for smooth animation
        const easeOutQuart = 1 - Math.pow(1 - progress, 4);
        const current = Math.round(start + (end - start) * easeOutQuart);
        
        let displayValue = current.toString();
        if (isPercentage) displayValue += '%';
        if (hasPlus) displayValue += '+';
        if (finalText.includes('/')) displayValue = finalText.replace(/\d+/, current);
        
        element.textContent = prefix + displayValue + (isPercentage || hasPlus ? '' : suffix);
        
        if (progress < 1) {
            requestAnimationFrame(updateCounter);
        } else {
            element.textContent = finalText;
        }
    }
    
    requestAnimationFrame(updateCounter);
}

// Animate pipeline chart
function animatePipelineChart(container) {
    const stageBars = container.querySelectorAll('.stage-bar');
    stageBars.forEach((bar, index) => {
        const targetWidth = bar.style.width;
        bar.style.width = '0%';
        
        setTimeout(() => {
            bar.style.width = targetWidth;
        }, index * 300 + 200);
    });
}

// Smooth scrolling for anchor links
function setupSmoothScrolling() {
    const links = document.querySelectorAll('a[href^="#"]');
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Keyboard navigation support
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        hideAllDetails();
    }
});

// Add CSS for additional animations
function addDynamicStyles() {
    const style = document.createElement('style');
    style.textContent = `
        .animate-in {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        .details-content {
            z-index: 999;
            position: relative;
        }
        
        .details-backdrop {
            backdrop-filter: blur(3px);
        }
        
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
    `;
    document.head.appendChild(style);
}

// Initialize dynamic styles
addDynamicStyles();

// Performance optimization - lazy load heavy animations
function lazyLoadAnimations() {
    const heavyAnimationElements = document.querySelectorAll('.solution-card, .details-visual');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animation-ready');
                observer.unobserve(entry.target);
            }
        });
    }, {
        rootMargin: '100px'
    });
    
    heavyAnimationElements.forEach(el => observer.observe(el));
}

// Initialize lazy loading
lazyLoadAnimations();

// Touch device support
function setupTouchSupport() {
    const solutionCards = document.querySelectorAll('.solution-card');
    
    solutionCards.forEach(card => {
        card.addEventListener('touchstart', function() {
            this.classList.add('touch-active');
        });
        
        card.addEventListener('touchend', function() {
            this.classList.remove('touch-active');
        });
    });
}

// Initialize touch support
setupTouchSupport();

// Export functions for external use
window.SolutionsPage = {
    showSolutionDetails,
    hideAllDetails,
    animateProgressBars,
    animateStats
};