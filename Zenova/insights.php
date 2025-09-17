<?php include 'header.php'; ?>

<main class="solutions-page">
               
                <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
            </div>
        </div>
    </section>
        <!-- Hero Section -->
        <section class="insights-hero">
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title">Insights & News</h1>
                    <p class="hero-subtitle">Stay ahead with the latest developments in renewable energy, market trends, and Zenova's thought leadership</p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number">50+</span>
                            <span class="stat-label">Publications</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">15+</span>
                            <span class="stat-label">Whitepapers</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100+</span>
                            <span class="stat-label">Industry Events</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-animation">
                <div class="floating-elements">
                    <div class="element element-1"></div>
                    <div class="element element-2"></div>
                    <div class="element element-3"></div>
                    <div class="element element-4"></div>
                </div>
            </div>
        </section>

        <!-- Filter and Search Section -->
        <section class="insights-controls">
            <div class="container">
                <div class="controls-wrapper">
                    <div class="category-filters">
                        <button class="filter-btn active" data-category="all">
                            <i class="fas fa-th"></i>
                            All Content
                        </button>
                        <button class="filter-btn" data-category="press">
                            <i class="fas fa-newspaper"></i>
                            Press Releases
                        </button>
                        <button class="filter-btn" data-category="market">
                            <i class="fas fa-chart-line"></i>
                            Market Updates
                        </button>
                        <button class="filter-btn" data-category="whitepaper">
                            <i class="fas fa-file-alt"></i>
                            Whitepapers
                        </button>
                        <button class="filter-btn" data-category="events">
                            <i class="fas fa-calendar-alt"></i>
                            Industry Events
                        </button>
                    </div>
                    <div class="search-controls">
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" id="insightsSearch" placeholder="Search insights...">
                        </div>
                        <div class="sort-controls">
                            <select id="sortBy">
                                <option value="date">Latest First</option>
                                <option value="date-asc">Oldest First</option>
                                <option value="title">Title A-Z</option>
                                <option value="category">By Category</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Content -->
        <section class="featured-content">
            <div class="container">
                <h2 class="section-title">Featured Insights</h2>
                <div class="featured-grid">
                    <article class="featured-article main-feature" data-category="whitepaper">
                        <div class="article-image">
                            <img src="images/insights/battery-storage-future.jpg" alt="Battery Storage Technology">
                            <div class="article-category whitepaper">Whitepaper</div>
                            <div class="read-time">15 min read</div>
                        </div>
                        <div class="article-content">
                            <h3 class="article-title">The Future of Battery Energy Storage Systems: A Technical Deep Dive</h3>
                            <p class="article-excerpt">Comprehensive analysis of next-generation BESS technologies, market drivers, and implementation strategies for utility-scale deployments across global markets.</p>
                            <div class="article-meta">
                                <div class="author-info">
                                    <img src="images/team/dr-sarah-chen.jpg" alt="Dr. Sarah Chen" class="author-avatar">
                                    <div class="author-details">
                                        <span class="author-name">Dr. Sarah Chen</span>
                                        <span class="author-title">CTO</span>
                                    </div>
                                </div>
                                <div class="article-date">
                                    <i class="fas fa-calendar"></i>
                                    August 5, 2025
                                </div>
                            </div>
                            <div class="article-tags">
                                <span class="tag">BESS</span>
                                <span class="tag">Technology</span>
                                <span class="tag">Grid Storage</span>
                            </div>
                        </div>
                    </article>

                    <div class="secondary-features">
                        <article class="featured-article secondary-feature" data-category="press">
                            <div class="article-image">
                                <img src="images/insights/partnership-announcement.jpg" alt="Partnership Announcement">
                                <div class="article-category press">Press Release</div>
                            </div>
                            <div class="article-content">
                                <h3 class="article-title">Zenova Announces Strategic Partnership with Nordic Energy Alliance</h3>
                                <p class="article-excerpt">Collaboration to develop 500MW offshore hybrid renewable energy project in the North Sea region.</p>
                                <div class="article-meta">
                                    <span class="article-date">August 3, 2025</span>
                                    <span class="read-time">3 min read</span>
                                </div>
                            </div>
                        </article>

                        <article class="featured-article secondary-feature" data-category="market">
                            <div class="article-image">
                                <img src="images/insights/energy-markets-2025.jpg" alt="Energy Market Analysis">
                                <div class="article-category market">Market Update</div>
                            </div>
                            <div class="article-content">
                                <h3 class="article-title">Global Renewable Energy Markets: Q3 2025 Analysis</h3>
                                <p class="article-excerpt">Quarterly market insights covering pricing trends, policy developments, and emerging opportunities.</p>
                                <div class="article-meta">
                                    <span class="article-date">July 30, 2025</span>
                                    <span class="read-time">8 min read</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content Grid -->
        <section class="insights-grid-section">
            <div class="container">
                <div class="insights-grid" id="insightsGrid">
                    
                    <!-- Press Releases -->
                    <article class="insight-card" data-category="press" data-date="2025-08-01">
                        <div class="card-image">
                            <img src="images/insights/quarterly-results.jpg" alt="Q2 2025 Results">
                            <div class="category-badge press">Press Release</div>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Zenova Reports Strong Q2 2025 Performance with 200MW in New Projects</h3>
                            <p class="card-excerpt">Company delivers record quarterly results driven by successful project completions and strategic partnership expansions across key markets.</p>
                            <div class="card-meta">
                                <div class="meta-left">
                                    <span class="publish-date">
                                        <i class="fas fa-calendar"></i>
                                        August 1, 2025
                                    </span>
                                    <span class="read-time">
                                        <i class="fas fa-clock"></i>
                                        5 min read
                                    </span>
                                </div>
                                <div class="engagement-stats">
                                    <span class="shares">
                                        <i class="fas fa-share"></i>
                                        45
                                    </span>
                                    <span class="views">
                                        <i class="fas fa-eye"></i>
                                        1.2k
                                    </span>
                                </div>
                            </div>
                            <div class="card-tags">
                                <span class="tag">Financial Results</span>
                                <span class="tag">Growth</span>
                            </div>
                        </div>
                    </article>

                    <article class="insight-card" data-category="press" data-date="2025-07-25">
                        <div class="card-image">
                            <img src="images/insights/california-project.jpg" alt="California BESS Project">
                            <div class="category-badge press">Press Release</div>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Zenova Completes 400MWh Battery Storage System in California</h3>
                            <p class="card-excerpt">Landmark project enhances grid stability and renewable energy integration for Pacific Gas & Electric Company.</p>
                            <div class="card-meta">
                                <div class="meta-left">
                                    <span class="publish-date">
                                        <i class="fas fa-calendar"></i>
                                        July 25, 2025
                                    </span>
                                    <span class="read-time">
                                        <i class="fas fa-clock"></i>
                                        4 min read
                                    </span>
                                </div>
                                <div class="engagement-stats">
                                    <span class="shares">
                                        <i class="fas fa-share"></i>
                                        62
                                    </span>
                                    <span class="views">
                                        <i class="fas fa-eye"></i>
                                        2.1k
                                    </span>
                                </div>
                            </div>
                            <div class="card-tags">
                                <span class="tag">BESS</span>
                                <span class="tag">California</span>
                                <span class="tag">Grid Storage</span>
                            </div>
                        </div>
                    </article>

                    <!-- Market Updates -->
                    <article class="insight-card" data-category="market" data-date="2025-07-30">
                        <div class="card-image">
                            <img src="images/insights/energy-storage-trends.jpg" alt="Energy Storage Market">
                            <div class="category-badge market">Market Update</div>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Energy Storage Market Reaches $50B Milestone: Key Trends and Opportunities</h3>
                            <p class="card-excerpt">Analysis of market drivers, technological advances, and regional growth patterns shaping the global energy storage landscape.</p>
                            <div class="card-meta">
                                <div class="meta-left">
                                    <span class="publish-date">
                                        <i class="fas fa-calendar"></i>
                                        July 30, 2025
                                    </span>
                                    <span class="read-time">
                                        <i class="fas fa-clock"></i>
                                        12 min read
                                    </span>
                                </div>
                                <div class="engagement-stats">
                                    <span class="shares">
                                        <i class="fas fa-share"></i>
                                        89
                                    </span>
                                    <span class="views">
                                        <i class="fas fa-eye"></i>
                                        3.5k
                                    </span>
                                </div>
                            </div>
                            <div class="card-tags">
                                <span class="tag">Market Analysis</span>
                                <span class="tag">Energy Storage</span>
                                <span class="tag">Trends</span>
                            </div>
                        </div>
                    </article>

                    <article class="insight-card" data-category="market" data-date="2025-07-15">
                        <div class="card-image">
                            <img src="images/insights/renewable-policy.jpg" alt="Renewable Energy Policy">
                            <div class="category-badge market">Market Update</div>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Global Renewable Energy Policy Landscape: Mid-2025 Review</h3>
                            <p class="card-excerpt">Comprehensive overview of policy developments, incentive programs, and regulatory changes across major renewable energy markets.</p>
                            <div class="card-meta">
                                <div class="meta-left">
                                    <span class="publish-date">
                                        <i class="fas fa-calendar"></i>
                                        July 15, 2025
                                    </span>
                                    <span class="read-time">
                                        <i class="fas fa-clock"></i>
                                        10 min read
                                    </span>
                                </div>
                                <div class="engagement-stats">
                                    <span class="shares">
                                        <i class="fas fa-share"></i>
                                        73
                                    </span>
                                    <span class="views">
                                        <i class="fas fa-eye"></i>
                                        2.8k
                                    </span>
                                </div>
                            </div>
                            <div class="card-tags">
                                <span class="tag">Policy</span>
                                <span class="tag">Regulations</span>
                                <span class="tag">Global Markets</span>
                            </div>
                        </div>
                    </article>

                    <!-- Technical Whitepapers -->
                    <article class="insight-card" data-category="whitepaper" data-date="2025-07-10">
                        <div class="card-image">
                            <img src="images/insights/hybrid-systems.jpg" alt="Hybrid Energy Systems">
                            <div class="category-badge whitepaper">Whitepaper</div>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Optimizing Hybrid Renewable Energy Systems: Design Methodologies and Performance Analysis</h3>
                            <p class="card-excerpt">Technical analysis of hybrid wind-solar-storage configurations, including modeling approaches, optimization strategies, and real-world performance data.</p>
                            <div class="card-meta">
                                <div class="meta-left">
                                    <span class="publish-date">
                                        <i class="fas fa-calendar"></i>
                                        July 10, 2025
                                    </span>
                                    <span class="read-time">
                                        <i class="fas fa-clock"></i>
                                        25 min read
                                    </span>
                                </div>
                                <div class="engagement-stats">
                                    <span class="downloads">
                                        <i class="fas fa-download"></i>
                                        156
                                    </span>
                                    <span class="views">
                                        <i class="fas fa-eye"></i>
                                        4.2k
                                    </span>
                                </div>
                            </div>
                            <div class="card-tags">
                                <span class="tag">Hybrid Systems</span>
                                <span class="tag">Optimization</span>
                                <span class="tag">Technical</span>
                            </div>
                            <div class="download-section">
                                <button class="download-btn">
                                    <i class="fas fa-file-pdf"></i>
                                    Download PDF
                                </button>
                            </div>
                        </div>
                    </article>

                    <article class="insight-card" data-category="whitepaper" data-date="2025-06-28">
                        <div class="card-image">
                            <img src="images/insights/grid-integration.jpg" alt="Grid Integration">
                            <div class="category-badge whitepaper">Whitepaper</div>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Grid Integration Challenges for Large-Scale Battery Storage: Solutions and Best Practices</h3>
                            <p class="card-excerpt">Detailed examination of technical and regulatory challenges in utility-scale BESS deployment, with practical solutions and industry best practices.</p>
                            <div class="card-meta">
                                <div class="meta-left">
                                    <span class="publish-date">
                                        <i class="fas fa-calendar"></i>
                                        June 28, 2025
                                    </span>
                                    <span class="read-time">
                                        <i class="fas fa-clock"></i>
                                        20 min read
                                    </span>
                                </div>
                                <div class="engagement-stats">
                                    <span class="downloads">
                                        <i class="fas fa-download"></i>
                                        203
                                    </span>
                                    <span class="views">
                                        <i class="fas fa-eye"></i>
                                        5.1k
                                    </span>
                                </div>
                            </div>
                            <div class="card-tags">
                                <span class="tag">Grid Integration</span>
                                <span class="tag">BESS</span>
                                <span class="tag">Utilities</span>
                            </div>
                            <div class="download-section">
                                <button class="download-btn">
                                    <i class="fas fa-file-pdf"></i>
                                    Download PDF
                                </button>
                            </div>
                        </div>
                    </article>

                    <!-- Industry Events -->
                    <article class="insight-card" data-category="events" data-date="2025-09-15">
                        <div class="card-image">
                            <img src="images/insights/energy-summit-2025.jpg" alt="Global Energy Summit">
                            <div class="category-badge events">Upcoming Event</div>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Global Energy Summit 2025 - Singapore</h3>
                            <p class="card-excerpt">Join Zenova's leadership team at Asia's premier energy conference. CEO Michael Zhang will deliver a keynote on "The Future of Energy Storage in Asia-Pacific".</p>
                            <div class="card-meta">
                                <div class="meta-left">
                                    <span class="publish-date">
                                        <i class="fas fa-calendar"></i>
                                        September 15-17, 2025
                                    </span>
                                    <span class="location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Singapore
                                    </span>
                                </div>
                                <div class="event-status">
                                    <span class="status upcoming">Upcoming</span>
                                </div>
                            </div>
                            <div class="card-tags">
                                <span class="tag">Conference</span>
                                <span class="tag">Keynote</span>
                                <span class="tag">Asia-Pacific</span>
                            </div>
                            <div class="event-actions">
                                <button class="event-btn primary">Register Interest</button>
                                <button class="event-btn secondary">View Agenda</button>
                            </div>
                        </div>
                    </article>

                    <article class="insight-card" data-category="events" data-date="2025-08-20">
                        <div class="card-image">
                            <img src="images/insights/renewable-energy-expo.jpg" alt="Renewable Energy Expo">
                            <div class="category-badge events">Past Event</div>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">International Renewable Energy Expo - Dubai</h3>
                            <p class="card-excerpt">Zenova showcased cutting-edge BESS technology and announced new partnerships in the Middle East region. View highlights and presentation materials.</p>
                            <div class="card-meta">
                                <div class="meta-left">
                                    <span class="publish-date">
                                        <i class="fas fa-calendar"></i>
                                        July 20-22, 2025
                                    </span>
                                    <span class="location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        Dubai, UAE
                                    </span>
                                </div>
                                <div class="event-status">
                                    <span class="status completed">Completed</span>
                                </div>
                            </div>
                            <div class="card-tags">
                                <span class="tag">Exhibition</span>
                                <span class="tag">Middle East</span>
                                <span class="tag">Partnerships</span>
                            </div>
                            <div class="event-actions">
                                <button class="event-btn secondary">View Highlights</button>
                                <button class="event-btn secondary">Download Materials</button>
                            </div>
                        </div>
                    </article>

                    <article class="insight-card" data-category="events" data-date="2025-10-05">
                        <div class="card-image">
                            <img src="images/insights/battery-tech-conference.jpg" alt="Battery Technology Conference">
                            <div class="category-badge events">Upcoming Event</div>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Advanced Battery Technology Conference - San Francisco</h3>
                            <p class="card-excerpt">Dr. Sarah Chen, CTO, will present on "Next-Generation Battery Chemistries for Grid-Scale Applications" at this premier technical conference.</p>
                            <div class="card-meta">
                                <div class="meta-left">
                                    <span class="publish-date">
                                        <i class="fas fa-calendar"></i>
                                        October 5-7, 2025
                                    </span>
                                    <span class="location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        San Francisco, USA
                                    </span>
                                </div>
                                <div class="event-status">
                                    <span class="status upcoming">Upcoming</span>
                                </div>
                            </div>
                            <div class="card-tags">
                                <span class="tag">Technical Conference</span>
                                <span class="tag">Battery Technology</span>
                                <span class="tag">Innovation</span>
                            </div>
                            <div class="event-actions">
                                <button class="event-btn primary">Learn More</button>
                                <button class="event-btn secondary">Contact Us</button>
                            </div>
                        </div>
                    </article>

                </div>

                <!-- Load More Section -->
                <div class="load-more-section">
                    <button class="load-more-btn" id="loadMoreBtn">
                        <span class="btn-text">Load More Insights</span>
                        <span class="btn-spinner" style="display: none;">
                            <i class="fas fa-spinner fa-spin"></i>
                        </span>
                    </button>
                    <p class="showing-count">Showing <span id="currentCount">8</span> of <span id="totalCount">24</span> insights</p>
                </div>
            </div>
        </section>

        <!-- Newsletter Subscription -->
        <section class="newsletter-section">
            <div class="container">
                <div class="newsletter-content">
                    <div class="newsletter-text">
                        <h2>Stay Informed</h2>
                        <p>Get the latest insights, market updates, and industry news delivered directly to your inbox.</p>
                    </div>
                    <form class="newsletter-form" id="newsletterForm">
                        <div class="form-group">
                            <input type="email" id="newsletterEmail" placeholder="Enter your email address" required>
                            <button type="submit" class="subscribe-btn">
                                <span class="btn-text">Subscribe</span>
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                        <div class="form-options">
                            <label class="checkbox-label">
                                <input type="checkbox" id="weeklyDigest" checked>
                                <span class="checkmark"></span>
                                Weekly digest
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" id="breakingNews">
                                <span class="checkmark"></span>
                                Breaking news alerts
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="insights-cta">
            <div class="container">
                <div class="cta-content">
                    <h2>Partner with Industry Leaders</h2>
                    <p>Connect with Zenova's experts to discuss market opportunities, technical solutions, and strategic partnerships in renewable energy.</p>
                    <div class="cta-buttons">
                        <a href="contact.php" class="btn btn-primary">
                            <i class="fas fa-handshake"></i>
                            Schedule a Meeting
                        </a>
                        <a href="about.php#team" class="btn btn-outline">
                            <i class="fas fa-users"></i>
                            Meet Our Experts
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    
    <!-- Existing Scripts -->
    <script src="script.js"></script>
