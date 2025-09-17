<?php include 'header.php'; ?>

<main class="solutions-page">
    <!-- Hero Section -->
    <section class="solutions-hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Technical Solutions & Services</h1>
                <p class="hero-subtitle">Comprehensive energy storage and hybrid power solutions for modern grid challenges</p>
                <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
            </div>
        </div>
    </section>

    <!-- Solutions Grid -->
    <section class="solutions-grid-section">
        <div class="container">
            <div class="solutions-grid">
                <!-- BESS Card -->
                <div class="solution-card" data-solution="bess">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M15.67 4H14V2h-4v2H8.33C7.6 4 7 4.6 7 5.33v15.33C7 21.4 7.6 22 8.33 22h7.33c.74 0 1.34-.6 1.34-1.33V5.33C17 4.6 16.4 4 15.67 4z"/>
                        </svg>
                    </div>
                    <h3>Battery Energy Storage Systems (BESS)</h3>
                    <p>Advanced grid-scale, hybrid, and off-grid battery storage solutions for enhanced grid stability and energy management.</p>
                    <ul class="benefits-list">
                        <li>Frequency regulation</li>
                        <li>Peak shaving optimization</li>
                        <li>Grid stability enhancement</li>
                    </ul>
                    <button class="learn-more-btn" data-target="bess-details">Learn More</button>
                </div>

                <!-- Hybrid Systems Card -->
                <div class="solution-card" data-solution="hybrid">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <h3>Hybrid Power Systems (HPS)</h3>
                    <p>Integrated renewable energy solutions combining solar, wind, diesel, and storage technologies for optimal performance.</p>
                    <ul class="benefits-list">
                        <li>Solar + BESS integration</li>
                        <li>Diesel + BESS hybrid</li>
                        <li>Wind + Storage solutions</li>
                    </ul>
                    <button class="learn-more-btn" data-target="hybrid-details">Learn More</button>
                </div>

                <!-- EPC Card -->
                <div class="solution-card" data-solution="epc">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                        </svg>
                    </div>
                    <h3>Project Development & EPC</h3>
                    <p>End-to-end engineering, procurement, and construction services from initial feasibility studies to final commissioning.</p>
                    <ul class="benefits-list">
                        <li>Feasibility studies</li>
                        <li>Engineering & design</li>
                        <li>Construction & commissioning</li>
                    </ul>
                    <button class="learn-more-btn" data-target="epc-details">Learn More</button>
                </div>

                <!-- Power Ventures Card -->
                <div class="solution-card" data-solution="ventures">
                    <div class="card-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor">
                            <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                        </svg>
                    </div>
                    <h3>Power Venture Projects</h3>
                    <p>Strategic development of greenfield power projects with comprehensive licensing, joint venture structuring, and market participation.</p>
                    <ul class="benefits-list">
                        <li>Greenfield development</li>
                        <li>Joint venture structuring</li>
                        <li>RES licensing & PSA bidding</li>
                    </ul>
                    <button class="learn-more-btn" data-target="ventures-details">Learn More</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Sections -->
    <section class="solution-details">
        <div class="container">
            <!-- BESS Details -->
            <div id="bess-details" class="details-content">
                <div class="details-header">
                    <h2>Battery Energy Storage Systems (BESS)</h2>
                    <button class="close-details">×</button>
                </div>
                <div class="details-body">
                    <div class="details-grid">
                        <div class="details-text">
                            <h3>Grid-Scale Solutions</h3>
                            <p>Our BESS solutions provide critical grid services including frequency regulation, voltage support, and spinning reserves. These systems are designed to respond within milliseconds to grid disturbances, ensuring stable and reliable power delivery.</p>
                            
                            <h3>Key Applications</h3>
                            <div class="application-tags">
                                <span class="tag">Grid Stabilization</span>
                                <span class="tag">Peak Shaving</span>
                                <span class="tag">Load Shifting</span>
                                <span class="tag">Backup Power</span>
                            </div>

                            <h3>Technical Specifications</h3>
                            <ul>
                                <li>Capacity Range: 1MW to 100MW+</li>
                                <li>Response Time: <1 second</li>
                                <li>Round-trip Efficiency: 85-95%</li>
                                <li>Cycle Life: 6,000+ cycles</li>
                            </ul>
                        </div>
                        <div class="details-visual">
                            <div class="chart-placeholder">
                                <h4>BESS Performance Benefits</h4>
                                <div class="benefit-bars">
                                    <div class="benefit-bar">
                                        <span>Grid Stability</span>
                                        <div class="bar"><div class="fill" style="width: 95%"></div></div>
                                        <span>95%</span>
                                    </div>
                                    <div class="benefit-bar">
                                        <span>Peak Reduction</span>
                                        <div class="bar"><div class="fill" style="width: 85%"></div></div>
                                        <span>85%</span>
                                    </div>
                                    <div class="benefit-bar">
                                        <span>Efficiency</span>
                                        <div class="bar"><div class="fill" style="width: 90%"></div></div>
                                        <span>90%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hybrid Details -->
            <div id="hybrid-details" class="details-content">
                <div class="details-header">
                    <h2>Hybrid Power Systems</h2>
                    <button class="close-details">×</button>
                </div>
                <div class="details-body">
                    <div class="details-grid">
                        <div class="details-text">
                            <h3>Integrated Solutions</h3>
                            <p>Our hybrid systems combine multiple energy sources to create resilient, cost-effective power solutions. By integrating renewable generation with storage and backup systems, we optimize energy production and reduce operational costs.</p>
                            
                            <h3>Case Study Preview</h3>
                            <div class="case-study-card">
                                <h4>Industrial Microgrid Project</h4>
                                <p><strong>Configuration:</strong> 5MW Solar + 10MWh BESS + 2MW Diesel Backup</p>
                                <p><strong>Results:</strong> 40% reduction in energy costs, 99.9% uptime achieved</p>
                                <p><strong>Payback:</strong> 6.2 years with government incentives</p>
                            </div>

                            <h3>System Configurations</h3>
                            <div class="config-grid">
                                <div class="config-item">
                                    <h4>Solar + BESS</h4>
                                    <p>Maximizes solar utilization with energy storage for 24/7 power availability</p>
                                </div>
                                <div class="config-item">
                                    <h4>Wind + Storage</h4>
                                    <p>Smooths wind intermittency and provides firm power delivery</p>
                                </div>
                                <div class="config-item">
                                    <h4>Diesel + BESS</h4>
                                    <p>Reduces fuel consumption and maintenance through battery integration</p>
                                </div>
                            </div>
                        </div>
                        <div class="details-visual">
                            <div class="system-diagram">
                                <h4>Hybrid System Architecture</h4>
                                <div class="diagram-placeholder">
                                    <div class="component solar">Solar PV</div>
                                    <div class="component battery">BESS</div>
                                    <div class="component diesel">Diesel Gen</div>
                                    <div class="component grid">Grid Connection</div>
                                    <div class="component load">Load Center</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- EPC Details -->
            <div id="epc-details" class="details-content">
                <div class="details-header">
                    <h2>Project Development & EPC Services</h2>
                    <button class="close-details">×</button>
                </div>
                <div class="details-body">
                    <div class="details-grid">
                        <div class="details-text">
                            <h3>End-to-End Project Delivery</h3>
                            <p>From initial concept to final commissioning, our EPC services ensure seamless project execution with guaranteed performance and timely delivery. Our experienced team manages all aspects of project development.</p>
                            
                            <h3>Service Phases</h3>
                            <div class="phase-timeline">
                                <div class="phase-item active">
                                    <div class="phase-number">1</div>
                                    <div class="phase-content">
                                        <h4>Feasibility & Design</h4>
                                        <p>Site assessment, technical design, and financial modeling</p>
                                    </div>
                                </div>
                                <div class="phase-item">
                                    <div class="phase-number">2</div>
                                    <div class="phase-content">
                                        <h4>Procurement</h4>
                                        <p>Equipment sourcing, vendor management, and logistics coordination</p>
                                    </div>
                                </div>
                                <div class="phase-item">
                                    <div class="phase-number">3</div>
                                    <div class="phase-content">
                                        <h4>Construction</h4>
                                        <p>Installation, testing, and quality assurance processes</p>
                                    </div>
                                </div>
                                <div class="phase-item">
                                    <div class="phase-number">4</div>
                                    <div class="phase-content">
                                        <h4>Commissioning</h4>
                                        <p>System integration, performance testing, and handover</p>
                                    </div>
                                </div>
                            </div>

                            <h3>Project Portfolio</h3>
                            <ul>
                                <li>50+ MW of BESS projects delivered</li>
                                <li>25+ hybrid system installations</li>
                                <li>99.2% average system availability</li>
                                <li>Zero safety incidents record</li>
                            </ul>
                        </div>
                        <div class="details-visual">
                            <div class="project-stats">
                                <h4>Project Statistics</h4>
                                <div class="stat-card">
                                    <div class="stat-number">150+</div>
                                    <div class="stat-label">Projects Completed</div>
                                </div>
                                <div class="stat-card">
                                    <div class="stat-number">98%</div>
                                    <div class="stat-label">On-Time Delivery</div>
                                </div>
                                <div class="stat-card">
                                    <div class="stat-number">24/7</div>
                                    <div class="stat-label">Support Available</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ventures Details -->
            <div id="ventures-details" class="details-content">
                <div class="details-header">
                    <h2>Power Venture Projects</h2>
                    <button class="close-details">×</button>
                </div>
                <div class="details-body">
                    <div class="details-grid">
                        <div class="details-text">
                            <h3>Strategic Development</h3>
                            <p>We develop greenfield power projects from concept to commercial operation, focusing on renewable energy systems and storage integration. Our expertise spans regulatory compliance, financial structuring, and market participation.</p>
                            
                            <h3>Development Services</h3>
                            <div class="service-cards">
                                <div class="service-card">
                                    <h4>Greenfield Development</h4>
                                    <p>Site identification, preliminary design, and development roadmap creation</p>
                                </div>
                                <div class="service-card">
                                    <h4>Joint Venture Structuring</h4>
                                    <p>Partnership formation, risk allocation, and investment structuring</p>
                                </div>
                                <div class="service-card">
                                    <h4>RES Licensing</h4>
                                    <p>Renewable energy system permits and regulatory compliance</p>
                                </div>
                                <div class="service-card">
                                    <h4>PSA Bidding</h4>
                                    <p>Power supply agreement preparation and competitive bidding support</p>
                                </div>
                            </div>

                            <h3>Current Pipeline</h3>
                            <ul>
                                <li>500MW renewable projects in development</li>
                                <li>200MWh storage capacity planned</li>
                                <li>15+ strategic partnerships established</li>
                                <li>$2B+ project value under development</li>
                            </ul>
                        </div>
                        <div class="details-visual">
                            <div class="pipeline-chart">
                                <h4>Development Pipeline</h4>
                                <div class="pipeline-stages">
                                    <div class="stage">
                                        <div class="stage-bar" style="width: 30%"></div>
                                        <span>Early Stage (150MW)</span>
                                    </div>
                                    <div class="stage">
                                        <div class="stage-bar" style="width: 45%"></div>
                                        <span>Development (225MW)</span>
                                    </div>
                                    <div class="stage">
                                        <div class="stage-bar" style="width: 25%"></div>
                                        <span>Construction (125MW)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="solutions-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Explore Our Solutions?</h2>
                <p>Contact our technical team to discuss your specific requirements and discover how our solutions can benefit your project.</p>
                <div class="cta-buttons">
                    <a href="#contact" class="btn btn-primary">Get Consultation</a>
                    <a href="#portfolio" class="btn btn-secondary">View Case Studies</a>
                </div>
            </div>
        </div>
    </section>
</main>
// Insights Page JavaScript

<script>

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all functionality
    initializeFilters();
    initializeSearch();
    initializeSorting();
    initializeLoadMore();
    initializeNewsletter();
    initializeAnimations();
    initializeEngagement();
    initializeModalViews();
});

// Sample insights data for dynamic loading
const insightsData = [
    {
        id: 1,
        title: "Zenova Reports Strong Q2 2025 Performance with 200MW in New Projects",
        excerpt: "Company delivers record quarterly results driven by successful project completions and strategic partnership expansions across key markets.",
        category: "press",
        date: "2025-08-01",
        readTime: "5 min read",
        author: "Zenova Communications Team",
        image: "images/insights/quarterly-results.jpg",
        tags: ["Financial Results", "Growth"],
        views: 1200,
        shares: 45
    },
    {
        id: 2,
        title: "Advanced Grid Integration Strategies for Next-Generation BESS",
        excerpt: "Technical deep dive into modern approaches for integrating large-scale battery storage systems with existing electrical infrastructure.",
        category: "whitepaper",
        date: "2025-07-28",
        readTime: "18 min read",
        author: "Dr. Sarah Chen",
        image: "images/insights/grid-integration-advanced.jpg",
        tags: ["Grid Integration", "BESS", "Technical"],
        views: 3800,
        downloads: 247
    },
    {
        id: 3,
        title: "Renewable Energy Investment Trends: Asia-Pacific Market Analysis",
        excerpt: "Comprehensive analysis of investment flows, policy developments, and market opportunities across the Asia-Pacific renewable energy sector.",
        category: "market",
        date: "2025-07-22",
        readTime: "12 min read",
        author: "Market Research Team",
        image: "images/insights/apac-investment-trends.jpg",
        tags: ["Investment", "Asia-Pacific", "Market Trends"],
        views: 2150,
        shares: 78
    },
    {
        id: 4,
        title: "Clean Energy Summit 2025 - Melbourne",
        excerpt: "Join Zenova at Australia's leading clean energy conference. Our team will present on 'Scaling Battery Storage for Grid Resilience'.",
        category: "events",
        date: "2025-11-12",
        location: "Melbourne, Australia",
        status: "upcoming",
        image: "images/insights/melbourne-summit.jpg",
        tags: ["Conference", "Australia", "Grid Resilience"]
    }
];

let currentFilter = 'all';
let currentSort = 'date';
let currentPage = 1;
const itemsPerPage = 8;
let totalItems = 24; // Total available insights

// Filter functionality
function initializeFilters() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const insightCards = document.querySelectorAll('.insight-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const filterValue = this.getAttribute('data-category');
            currentFilter = filterValue;
            
            // Apply filter with smooth animation
            filterInsights(filterValue, insightCards);
            
            // Reset pagination
            currentPage = 1;
            updatePagination();
        });
    });
}

function filterInsights(filterValue, cards) {
    cards.forEach(card => {
        const cardCategory = card.getAttribute('data-category');
        
        if (filterValue === 'all' || cardCategory === filterValue) {
            card.classList.remove('filtered-out');
            setTimeout(() => {
                card.style.display = 'block';
            }, 100);
        } else {
            card.classList.add('filtered-out');
            setTimeout(() => {
                if (card.classList.contains('filtered-out')) {
                    card.style.display = 'none';
                }
            }, 300);
        }
    });

    // Update featured content based on filter
    updateFeaturedContent(filterValue);
}

function updateFeaturedContent(filter) {
    const featuredArticles = document.querySelectorAll('.featured-article');
    
    featuredArticles.forEach(article => {
        const articleCategory = article.getAttribute('data-category');
        if (filter === 'all' || articleCategory === filter) {
            article.style.opacity = '1';
            article.style.transform = 'scale(1)';
        } else {
            article.style.opacity = '0.5';
            article.style.transform = 'scale(0.95)';
        }
    });
}

// Search functionality
function initializeSearch() {
    const searchInput = document.getElementById('insightsSearch');
    if (!searchInput) return;

    let searchTimeout;
    
    searchInput.addEventListener('input', function() {
        clearTimeout(searchTimeout);
        const searchTerm = this.value.toLowerCase().trim();
        
        searchTimeout = setTimeout(() => {
            performSearch(searchTerm);
        }, 300);
    });
}

function performSearch(searchTerm) {
    const insightCards = document.querySelectorAll('.insight-card');
    const featuredArticles = document.querySelectorAll('.featured-article');
    
    // Search through insight cards
    insightCards.forEach(card => {
        const title = card.querySelector('.card-title').textContent.toLowerCase();
        const excerpt = card.querySelector('.card-excerpt').textContent.toLowerCase();
        const tags = Array.from(card.querySelectorAll('.tag')).map(tag => tag.textContent.toLowerCase()).join(' ');
        
        const matches = title.includes(searchTerm) || 
                       excerpt.includes(searchTerm) || 
                       tags.includes(searchTerm);
        
        if (searchTerm === '' || matches) {
            card.classList.remove('filtered-out');
            card.style.display = 'block';
        } else {
            card.classList.add('filtered-out');
            setTimeout(() => {
                if (card.classList.contains('filtered-out')) {
                    card.style.display = 'none';
                }
            }, 300);
        }
    });
    
    // Search through featured articles
    featuredArticles.forEach(article => {
        const title = article.querySelector('.article-title').textContent.toLowerCase();
        const excerpt = article.querySelector('.article-excerpt').textContent.toLowerCase();
        
        const matches = title.includes(searchTerm) || excerpt.includes(searchTerm);
        
        if (searchTerm === '' || matches) {
            article.style.opacity = '1';
            article.style.transform = 'scale(1)';
        } else {
            article.style.opacity = '0.5';
            article.style.transform = 'scale(0.95)';
        }
    });
}

// Sorting functionality
function initializeSorting() {
    const sortSelect = document.getElementById('sortBy');
    if (!sortSelect) return;

    sortSelect.addEventListener('change', function() {
        const sortValue = this.value;
        currentSort = sortValue;
        sortInsights(sortValue);
    });
}

function sortInsights(sortBy) {
    const insightsGrid = document.getElementById('insightsGrid');
    const cards = Array.from(insightsGrid.querySelectorAll('.insight-card'));
    
    cards.sort((a, b) => {
        switch (sortBy) {
            case 'date':
                return new Date(b.getAttribute('data-date')) - new Date(a.getAttribute('data-date'));
            case 'date-asc':
                return new Date(a.getAttribute('data-date')) - new Date(b.getAttribute('data-date'));
            case 'title':
                return a.querySelector('.card-title').textContent.localeCompare(b.querySelector('.card-title').textContent);
            case 'category':
                return a.getAttribute('data-category').localeCompare(b.getAttribute('data-category'));
            default:
                return 0;
        }
    });
    
    // Animate and reorder
    cards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        
        setTimeout(() => {
            insightsGrid.appendChild(card);
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, index * 50);
    });
}

// Load more functionality
function initializeLoadMore() {
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    const currentCountSpan = document.getElementById('currentCount');
    const totalCountSpan = document.getElementById('totalCount');
    
    if (!loadMoreBtn) return;

    loadMoreBtn.addEventListener('click', function() {
        loadMoreInsights();
    });
    
    // Initialize counts
    updatePagination();
}

function loadMoreInsights() {
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    const btnText = loadMoreBtn.querySelector('.btn-text');
    const btnSpinner = loadMoreBtn.querySelector('.btn-spinner');
    
    // Show loading state
    btnText.style.display = 'none';
    btnSpinner.style.display = 'inline-block';
    loadMoreBtn.disabled = true;
    
    // Simulate API call
    setTimeout(() => {
        // Generate new insights
        const insightsGrid = document.getElementById('insightsGrid');
        const newInsights = generateNewInsights(4); // Load 4 more items
        
        newInsights.forEach((insight, index) => {
            const card = createInsightCard(insight);
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            
            insightsGrid.appendChild(card);
            
            // Animate in
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 100);
        });
        
        // Update pagination
        currentPage++;
        updatePagination();
        
        // Reset button state
        btnText.style.display = 'inline-block';
        btnSpinner.style.display = 'none';
        loadMoreBtn.disabled = false;
        
    }, 1500);
}

function generateNewInsights(count) {
    const insights = [];
    const categories = ['press', 'market', 'whitepaper', 'events'];
    const baseTitles = [
        "Renewable Energy Market Update",
        "Technical Innovation in Battery Storage",
        "Industry Partnership Announcement",
        "Global Energy Policy Changes",
        "Sustainability Conference Participation"
    ];
    
    for (let i = 0; i < count; i++) {
        insights.push({
            id: Date.now() + i,
            title: baseTitles[i % baseTitles.length] + ` - ${Math.floor(Math.random() * 1000)}`,
            excerpt: "Comprehensive analysis of recent developments in the renewable energy sector with strategic insights for industry stakeholders.",
            category: categories[i % categories.length],
            date: new Date(2025, 6, Math.floor(Math.random() * 30) + 1).toISOString().split('T')[0],
            readTime: `${Math.floor(Math.random() * 20) + 5} min read`,
            author: "Zenova Research Team",
            image: `images/insights/placeholder-${i + 1}.jpg`,
            tags: ["Industry Analysis", "Market Trends"],
            views: Math.floor(Math.random() * 5000) + 500,
            shares: Math.floor(Math.random() * 100) + 10
        });
    }
    
    return insights;
}

function createInsightCard(insight) {
    const card = document.createElement('article');
    card.className = 'insight-card';
    card.setAttribute('data-category', insight.category);
    card.setAttribute('data-date', insight.date);
    
    const categoryClass = insight.category;
    const categoryName = insight.category.charAt(0).toUpperCase() + insight.category.slice(1);
    
    card.innerHTML = `
        <div class="card-image">
            <img src="${insight.image}" alt="${insight.title}">
            <div class="category-badge ${categoryClass}">${categoryName}</div>
        </div>
        <div class="card-content">
            <h3 class="card-title">${insight.title}</h3>
            <p class="card-excerpt">${insight.excerpt}</p>
            <div class="card-meta">
                <div class="meta-left">
                    <span class="publish-date">
                        <i class="fas fa-calendar"></i>
                        ${formatDate(insight.date)}
                    </span>
                    <span class="read-time">
                        <i class="fas fa-clock"></i>
                        ${insight.readTime}
                    </span>
                </div>
                <div class="engagement-stats">
                    <span class="shares">
                        <i class="fas fa-share"></i>
                        ${insight.shares}
                    </span>
                    <span class="views">
                        <i class="fas fa-eye"></i>
                        ${formatNumber(insight.views)}
                    </span>
                </div>
            </div>
            <div class="card-tags">
                ${insight.tags.map(tag => `<span class="tag">${tag}</span>`).join('')}
            </div>
        </div>
    `;
    
    return card;
}

function updatePagination() {
    const currentCountSpan = document.getElementById('currentCount');
    const totalCountSpan = document.getElementById('totalCount');
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    
    const currentCount = currentPage * itemsPerPage;
    const displayCount = Math.min(currentCount, totalItems);
    
    if (currentCountSpan) currentCountSpan.textContent = displayCount;
    if (totalCountSpan) totalCountSpan.textContent = totalItems;
    
    // Hide load more button if all items are loaded
    if (loadMoreBtn && displayCount >= totalItems) {
        loadMoreBtn.style.display = 'none';
    }
}

// Newsletter functionality
function initializeNewsletter() {
    const form = document.getElementById('newsletterForm');
    if (!form) return;

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const email = document.getElementById('newsletterEmail').value;
        const weeklyDigest = document.getElementById('weeklyDigest').checked;
        const breakingNews = document.getElementById('breakingNews').checked;
        
        // Show loading state
        const submitBtn = form.querySelector('.subscribe-btn');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Subscribing...';
        submitBtn.disabled = true;
        
        // Simulate API call
        setTimeout(() => {
            // Show success message
            showNotification('Successfully subscribed to newsletter!', 'success');
            
            // Reset form
            form.reset();
            document.getElementById('weeklyDigest').checked = true;
            
            // Reset button
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }, 2000);
    });
}

// Animation functionality
function initializeAnimations() {
    // Intersection Observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                
                // Stagger animations for grid items
                if (entry.target.classList.contains('insights-grid')) {
                    const cards = entry.target.querySelectorAll('.insight-card');
                    cards.forEach((card, index) => {
                        setTimeout(() => {
                            card.classList.add('slide-up');
                        }, index * 100);
                    });
                }
            }
        });
    }, observerOptions);

    // Observe elements
    const animateElements = document.querySelectorAll('.featured-content, .insights-grid, .newsletter-section');
    animateElements.forEach(el => observer.observe(el));

    // Counter animation for hero stats
    animateCounters();
}

function animateCounters() {
    const counters = document.querySelectorAll('.stat-number');
    
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const finalValue = parseInt(target.textContent.replace(/\D/g, ''));
                const suffix = target.textContent.replace(/[0-9]/g, '');
                
                animateValue(target, 0, finalValue, 2000, suffix);
                counterObserver.unobserve(target);
            }
        });
    });
    
    counters.forEach(counter => counterObserver.observe(counter));
}

function animateValue(element, start, end, duration, suffix = '') {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        const current = Math.floor(progress * (end - start) + start);
        element.textContent = current + suffix;
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

// Engagement functionality
function initializeEngagement() {
    // Social sharing
    document.addEventListener('click', function(e) {
        if (e.target.closest('.shares')) {
            const card = e.target.closest('.insight-card') || e.target.closest('.featured-article');
            const title = card.querySelector('.card-title, .article-title').textContent;
            shareContent(title, window.location.href);
        }
        
        // Download functionality
        if (e.target.closest('.download-btn')) {
            e.preventDefault();
            const button = e.target.closest('.download-btn');
            downloadWhitepaper(button);
        }
        
        // Event registration
        if (e.target.closest('.event-btn')) {
            const button = e.target.closest('.event-btn');
            const action = button.textContent.trim();
            handleEventAction(action, button);
        }
    });
}

function shareContent(title, url) {
    if (navigator.share) {
        navigator.share({
            title: title,
            url: url
        });
    } else {
        // Fallback to clipboard
        navigator.clipboard.writeText(url).then(() => {
            showNotification('Link copied to clipboard!', 'success');
        });
    }
}

function downloadWhitepaper(button) {
    const originalText = button.innerHTML;
    button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Preparing...';
    button.disabled = true;
    
    setTimeout(() => {
        // Simulate download
        showNotification('Whitepaper download started', 'success');
        
        // Reset button
        button.innerHTML = originalText;
        button.disabled = false;
        
        // Update download count
        const card = button.closest('.insight-card');
        const downloadsSpan = card.querySelector('.downloads');
        if (downloadsSpan) {
            const currentCount = parseInt(downloadsSpan.textContent);
            downloadsSpan.innerHTML = `<i class="fas fa-download"></i> ${currentCount + 1}`;
        }
    }, 2000);
}

function handleEventAction(action, button) {
    const originalText = button.textContent;
    
    switch(action) {
        case 'Register Interest':
        case 'Learn More':
            button.textContent = 'Processing...';
            setTimeout(() => {
                showNotification('Registration interest recorded', 'success');
                button.textContent = 'Registered ✓';
                button.classList.add('registered');
            }, 1500);
            break;
            
        case 'View Agenda':
        case 'View Highlights':
        case 'Download Materials':
            window.open('#', '_blank');
            break;
            
        default:
            console.log('Event action:', action);
    }
}

// Modal views for detailed content
function initializeModalViews() {
    document.addEventListener('click', function(e) {
        const card = e.target.closest('.insight-card, .featured-article');
        if (card && !e.target.closest('button, a, .engagement-stats')) {
            showInsightModal(card);
        }
    });
}

function showInsightModal(card) {
    const title = card.querySelector('.card-title, .article-title').textContent;
    const excerpt = card.querySelector('.card-excerpt, .article-excerpt').textContent;
    const category = card.querySelector('.category-badge, .article-category').textContent;
    const image = card.querySelector('img').src;
    
    const modal = createModal({
        title,
        excerpt,
        category,
        image
    });
    
    document.body.appendChild(modal);
    
    // Animate in
    setTimeout(() => {
        modal.classList.add('active');
    }, 10);
    
    // Close functionality
    const closeBtn = modal.querySelector('.modal-close');
    const overlay = modal.querySelector('.modal-overlay');
    
    [closeBtn, overlay].forEach(element => {
        element.addEventListener('click', () => {
            modal.classList.remove('active');
            setTimeout(() => {
                document.body.removeChild(modal);
            }, 300);
        });
    });
}

function createModal(content) {
    const modal = document.createElement('div');
    modal.className = 'insight-modal';
    modal.innerHTML = `
        <div class="modal-overlay"></div>
        <div class="modal-content">
            <button class="modal-close">&times;</button>
            <div class="modal-header">
                <img src="${content.image}" alt="${content.title}">
                <div class="modal-info">
                    <span class="modal-category">${content.category}</span>
                    <h2>${content.title}</h2>
                </div>
            </div>
            <div class="modal-body">
                <p>${content.excerpt}</p>
                <div class="modal-actions">
                    <button class="btn btn-primary">Read Full Article</button>
                    <button class="btn btn-outline">Share</button>
                </div>
            </div>
        </div>
    `;
    
    return modal;
}

// Utility functions
function formatDate(dateString) {
    const options = { year: 'numeric', month: 'short', day: 'numeric' };
    return new Date(dateString).toLocaleDateString('en-US', options);
}

function formatNumber(num) {
    if (num >= 1000) {
        return (num / 1000).toFixed(1) + 'k';
    }
    return num.toString();
}

function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-info-circle'}"></i>
            <span>${message}</span>
        </div>
        <button class="notification-close">&times;</button>
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.classList.add('show');
    }, 10);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        removeNotification(notification);
    }, 5000);
    
    // Manual close
    notification.querySelector('.notification-close').addEventListener('click', () => {
        removeNotification(notification);
    });
}

function removeNotification(notification) {
    notification.classList.remove('show');
    setTimeout(() => {
        if (document.body.contains(notification)) {
            document.body.removeChild(notification);
        }
    }, 300);
}

// Performance optimizations
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Error handling
window.addEventListener('error', function(e) {
    console.error('Insights page error:', e.error);
});

// Add CSS for modal and notifications
const additionalStyles = `
<style>
.insight-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1000;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.insight-modal.active {
    opacity: 1;
    visibility: visible;
}

.modal-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    cursor: pointer;
}

.modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0.9);
    background: white;
    border-radius: 20px;
    max-width: 800px;
    width: 90%;
    max-height: 90%;
    overflow-y: auto;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
}

.insight-modal.active .modal-content {
    transform: translate(-50%, -50%) scale(1);
}

.modal-close {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: rgba(255, 255, 255, 0.9);
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    font-size: 1.5rem;
    color: #64748b;
    cursor: pointer;
    z-index: 10;
    transition: all 0.3s ease;
}

.modal-close:hover {
    background: white;
    color: #1e293b;
}

.modal-header {
    position: relative;
}

.modal-header img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 20px 20px 0 0;
}

.modal-info {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
    color: white;
    padding: 3rem 2rem 2rem;
    border-radius: 0 0 0 0;
}

.modal-category {
    display: inline-block;
    padding: 0.5rem 1rem;
    background: rgba(124, 58, 237, 0.9);
    border-radius: 15px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: 1rem;
}

.modal-info h2 {
    font-size: 1.5rem;
    font-weight: 700;
    margin: 0;
    line-height: 1.3;
}

.modal-body {
    padding: 2rem;
}

.modal-body p {
    font-size: 1.125rem;
    line-height: 1.7;
    color: #475569;
    margin-bottom: 2rem;
}

.modal-actions {
    display: flex;
    gap: 1rem;
}

.notification {
    position: fixed;
    top: 2rem;
    right: 2rem;
    background: white;
    border-radius: 12px;
    padding: 1rem 1.5rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    border-left: 4px solid #7c3aed;
    z-index: 1001;
    transform: translateX(400px);
    transition: transform 0.3s ease;
    display: flex;
    align-items: center;
    gap: 1rem;
    min-width: 300px;
}

.notification.show {
    transform: translateX(0);
}

.notification.success {
    border-left-color: #22c55e;
}

.notification-content {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    flex: 1;
}

.notification-content i {
    color: #7c3aed;
    font-size: 1.25rem;
}

.notification.success .notification-content i {
    color: #22c55e;
}

.notification-close {
    background: none;
    border: none;
    font-size: 1.25rem;
    color: #64748b;
    cursor: pointer;
    padding: 0;
    width: 20px;
    height: 20px;
}

.registered {
    background-color: #22c55e !important;
    border-color: #22c55e !important;
}

@media (max-width: 768px) {
    .modal-content {
        width: 95%;
        margin: 1rem;
    }
    
    .modal-body {
        padding: 1.5rem;
    }
    
    .modal-actions {
        flex-direction: column;
    }
    
    .notification {
        right: 1rem;
        left: 1rem;
        min-width: auto;
    }
}
</style>
`;

document.head.insertAdjacentHTML('beforeend', additionalStyles);

</script>

<?php include 'footer.php'; ?>
<script src="script.js"></script>