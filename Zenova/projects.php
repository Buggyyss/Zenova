<?php include 'header.php'; ?>

<main class="solutions-page">
               
                <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
            </div>
        </div>
    </section>
        <!-- Hero Section -->
        <section class="projects-hero">
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title">Our Projects</h1>
                    <p class="hero-subtitle">Building the future of renewable energy through innovative solutions and strategic partnerships</p>
                    <div class="stats-grid">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">MW Capacity</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">1,200+</span>
                            <span class="stat-label">MWh Storage</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">25+</span>
                            <span class="stat-label">Projects</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">12</span>
                            <span class="stat-label">Countries</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Filter Section -->
        <section class="projects-filter">
            <div class="container">
                <div class="filter-controls">
                    <button class="filter-btn active" data-filter="all">All Projects</button>
                    <button class="filter-btn" data-filter="operational">Operational</button>
                    <button class="filter-btn" data-filter="construction">Under Construction</button>
                    <button class="filter-btn" data-filter="development">In Development</button>
                    <button class="filter-btn" data-filter="pipeline">Pipeline</button>
                </div>
                <div class="view-controls">
                    <button class="view-btn active" data-view="grid">
                        <i class="fas fa-th-large"></i>
                    </button>
                    <button class="view-btn" data-view="list">
                        <i class="fas fa-list"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- Featured Projects -->
        <section class="featured-projects">
            <div class="container">
                <h2 class="section-title">Featured Projects</h2>
                <div class="projects-grid" id="projectsGrid">
                    
                    <!-- Project Card 1 -->
                    <div class="project-card" data-status="operational" data-type="bess">
                        <div class="project-image">
                            <img src="images/projects/solar-farm-1.jpg" alt="Queensland Solar + BESS">
                            <div class="project-status operational">Operational</div>
                            <div class="project-capacity">150MW / 300MWh</div>
                        </div>
                        <div class="project-content">
                            <h3 class="project-name">Queensland Solar + BESS</h3>
                            <p class="project-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Queensland, Australia
                            </p>
                            <div class="project-details">
                                <div class="detail-item">
                                    <span class="detail-label">Technology:</span>
                                    <span class="detail-value">Solar PV + Battery Storage</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Partner:</span>
                                    <span class="detail-value">EnergyAustralia</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Commissioned:</span>
                                    <span class="detail-value">March 2024</span>
                                </div>
                            </div>
                            <div class="project-tags">
                                <span class="tag">Solar</span>
                                <span class="tag">BESS</span>
                                <span class="tag">Grid-Scale</span>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card 2 -->
                    <div class="project-card" data-status="construction" data-type="hybrid">
                        <div class="project-image">
                            <img src="images/projects/wind-solar-hybrid.jpg" alt="Texas Hybrid Complex">
                            <div class="project-status construction">Under Construction</div>
                            <div class="project-capacity">200MW / 400MWh</div>
                        </div>
                        <div class="project-content">
                            <h3 class="project-name">Texas Hybrid Complex</h3>
                            <p class="project-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Texas, USA
                            </p>
                            <div class="project-details">
                                <div class="detail-item">
                                    <span class="detail-label">Technology:</span>
                                    <span class="detail-value">Wind + Solar + BESS</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Partner:</span>
                                    <span class="detail-value">ERCOT Utilities</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Expected COD:</span>
                                    <span class="detail-value">Q3 2025</span>
                                </div>
                            </div>
                            <div class="project-tags">
                                <span class="tag">Wind</span>
                                <span class="tag">Solar</span>
                                <span class="tag">BESS</span>
                                <span class="tag">Hybrid</span>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card 3 -->
                    <div class="project-card" data-status="operational" data-type="bess">
                        <div class="project-image">
                            <img src="images/projects/battery-storage.jpg" alt="California Grid Storage">
                            <div class="project-status operational">Operational</div>
                            <div class="project-capacity">100MW / 400MWh</div>
                        </div>
                        <div class="project-content">
                            <h3 class="project-name">California Grid Storage</h3>
                            <p class="project-location">
                                <i class="fas fa-map-marker-alt"></i>
                                California, USA
                            </p>
                            <div class="project-details">
                                <div class="detail-item">
                                    <span class="detail-label">Technology:</span>
                                    <span class="detail-value">Lithium-ion BESS</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Partner:</span>
                                    <span class="detail-value">PG&E</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Commissioned:</span>
                                    <span class="detail-value">December 2023</span>
                                </div>
                            </div>
                            <div class="project-tags">
                                <span class="tag">BESS</span>
                                <span class="tag">Grid Services</span>
                                <span class="tag">Utility-Scale</span>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card 4 -->
                    <div class="project-card" data-status="development" data-type="solar">
                        <div class="project-image">
                            <img src="images/projects/solar-development.jpg" alt="European Solar Portfolio">
                            <div class="project-status development">In Development</div>
                            <div class="project-capacity">300MW / 150MWh</div>
                        </div>
                        <div class="project-content">
                            <h3 class="project-name">European Solar Portfolio</h3>
                            <p class="project-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Multiple Sites, EU
                            </p>
                            <div class="project-details">
                                <div class="detail-item">
                                    <span class="detail-label">Technology:</span>
                                    <span class="detail-value">Solar PV + Storage</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Partner:</span>
                                    <span class="detail-value">EU Energy Consortium</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Expected FID:</span>
                                    <span class="detail-value">Q1 2025</span>
                                </div>
                            </div>
                            <div class="project-tags">
                                <span class="tag">Solar</span>
                                <span class="tag">Portfolio</span>
                                <span class="tag">Development</span>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card 5 -->
                    <div class="project-card" data-status="pipeline" data-type="hybrid">
                        <div class="project-image">
                            <img src="images/projects/offshore-concept.jpg" alt="Offshore Hybrid Vision">
                            <div class="project-status pipeline">Pipeline</div>
                            <div class="project-capacity">500MW / 1000MWh</div>
                        </div>
                        <div class="project-content">
                            <h3 class="project-name">Offshore Hybrid Vision</h3>
                            <p class="project-location">
                                <i class="fas fa-map-marker-alt"></i>
                                North Sea Region
                            </p>
                            <div class="project-details">
                                <div class="detail-item">
                                    <span class="detail-label">Technology:</span>
                                    <span class="detail-value">Offshore Wind + Floating Solar</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Partner:</span>
                                    <span class="detail-value">Nordic Energy Alliance</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Target COD:</span>
                                    <span class="detail-value">2028</span>
                                </div>
                            </div>
                            <div class="project-tags">
                                <span class="tag">Offshore Wind</span>
                                <span class="tag">Floating Solar</span>
                                <span class="tag">Innovation</span>
                            </div>
                        </div>
                    </div>

                    <!-- Project Card 6 -->
                    <div class="project-card" data-status="operational" data-type="epc">
                        <div class="project-image">
                            <img src="images/projects/industrial-solar.jpg" alt="Singapore Industrial Solar">
                            <div class="project-status operational">Operational</div>
                            <div class="project-capacity">50MW / 100MWh</div>
                        </div>
                        <div class="project-content">
                            <h3 class="project-name">Singapore Industrial Solar</h3>
                            <p class="project-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Singapore
                            </p>
                            <div class="project-details">
                                <div class="detail-item">
                                    <span class="detail-label">Technology:</span>
                                    <span class="detail-value">Rooftop Solar + BESS</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Partner:</span>
                                    <span class="detail-value">SembCorp Industries</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Commissioned:</span>
                                    <span class="detail-value">August 2024</span>
                                </div>
                            </div>
                            <div class="project-tags">
                                <span class="tag">Rooftop</span>
                                <span class="tag">Industrial</span>
                                <span class="tag">BESS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Interactive Project Map -->
        <section class="project-map-section">
            <div class="container">
                <h2 class="section-title">Global Project Locations</h2>
                <div class="map-container">
                    <div id="projectMap" class="project-map"></div>
                    <div class="map-legend">
                        <h3>Legend</h3>
                        <div class="legend-item">
                            <span class="marker operational"></span>
                            <span>Operational</span>
                        </div>
                        <div class="legend-item">
                            <span class="marker construction"></span>
                            <span>Under Construction</span>
                        </div>
                        <div class="legend-item">
                            <span class="marker development"></span>
                            <span>In Development</span>
                        </div>
                        <div class="legend-item">
                            <span class="marker pipeline"></span>
                            <span>Pipeline</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pipeline Summary -->
        <section class="pipeline-summary">
            <div class="container">
                <h2 class="section-title">Pipeline Overview</h2>
                <div class="summary-grid">
                    <div class="summary-card">
                        <div class="card-header">
                            <h3>Capacity by Status</h3>
                            <div class="chart-toggle">
                                <button class="toggle-btn active" data-chart="mw">MW</button>
                                <button class="toggle-btn" data-chart="mwh">MWh</button>
                            </div>
                        </div>
                        <div class="chart-container">
                            <canvas id="capacityChart"></canvas>
                        </div>
                    </div>
                    
                    <div class="summary-card">
                        <div class="card-header">
                            <h3>Technology Mix</h3>
                        </div>
                        <div class="chart-container">
                            <canvas id="technologyChart"></canvas>
                        </div>
                    </div>
                </div>
                
                <!-- Pipeline Table -->
                <div class="pipeline-table-container">
                    <h3>Detailed Pipeline</h3>
                    <div class="table-responsive">
                        <table class="pipeline-table" id="pipelineTable">
                            <thead>
                                <tr>
                                    <th>Project Name</th>
                                    <th>Location</th>
                                    <th>Technology</th>
                                    <th>Capacity (MW)</th>
                                    <th>Storage (MWh)</th>
                                    <th>Status</th>
                                    <th>Expected COD</th>
                                    <th>Partner</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-status="operational">
                                    <td>Queensland Solar + BESS</td>
                                    <td>Queensland, Australia</td>
                                    <td>Solar PV + BESS</td>
                                    <td>150</td>
                                    <td>300</td>
                                    <td><span class="status operational">Operational</span></td>
                                    <td>Mar 2024</td>
                                    <td>EnergyAustralia</td>
                                </tr>
                                <tr data-status="operational">
                                    <td>California Grid Storage</td>
                                    <td>California, USA</td>
                                    <td>Li-ion BESS</td>
                                    <td>100</td>
                                    <td>400</td>
                                    <td><span class="status operational">Operational</span></td>
                                    <td>Dec 2023</td>
                                    <td>PG&E</td>
                                </tr>
                                <tr data-status="operational">
                                    <td>Singapore Industrial Solar</td>
                                    <td>Singapore</td>
                                    <td>Rooftop Solar + BESS</td>
                                    <td>50</td>
                                    <td>100</td>
                                    <td><span class="status operational">Operational</span></td>
                                    <td>Aug 2024</td>
                                    <td>SembCorp Industries</td>
                                </tr>
                                <tr data-status="construction">
                                    <td>Texas Hybrid Complex</td>
                                    <td>Texas, USA</td>
                                    <td>Wind + Solar + BESS</td>
                                    <td>200</td>
                                    <td>400</td>
                                    <td><span class="status construction">Construction</span></td>
                                    <td>Q3 2025</td>
                                    <td>ERCOT Utilities</td>
                                </tr>
                                <tr data-status="development">
                                    <td>European Solar Portfolio</td>
                                    <td>Multiple Sites, EU</td>
                                    <td>Solar PV + Storage</td>
                                    <td>300</td>
                                    <td>150</td>
                                    <td><span class="status development">Development</span></td>
                                    <td>Q2 2026</td>
                                    <td>EU Energy Consortium</td>
                                </tr>
                                <tr data-status="pipeline">
                                    <td>Offshore Hybrid Vision</td>
                                    <td>North Sea Region</td>
                                    <td>Offshore Wind + Floating Solar</td>
                                    <td>500</td>
                                    <td>1000</td>
                                    <td><span class="status pipeline">Pipeline</span></td>
                                    <td>2028</td>
                                    <td>Nordic Energy Alliance</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="projects-cta">
            <div class="container">
                <div class="cta-content">
                    <h2>Partner with Us</h2>
                    <p>Join Zenova in building the future of renewable energy. Let's discuss how we can collaborate on your next project.</p>
                    <div class="cta-buttons">
                        <a href="contact.php" class="btn btn-primary">Get in Touch</a>
                        <a href="investors.php" class="btn btn-outline">Investment Opportunities</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    // Projects Page JavaScript
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all functionality
    initializeFilters();
    initializeViewToggle();
    initializeMap();
    initializeCharts();
    initializeTableSort();
    initializeAnimations();
});

// Project data for map and charts
const projectData = [
    {
        name: "Queensland Solar + BESS",
        location: "Queensland, Australia",
        coordinates: [-27.4698, 153.0251],
        status: "operational",
        technology: "Solar PV + BESS",
        capacity: 150,
        storage: 300,
        partner: "EnergyAustralia",
        commissioned: "Mar 2024"
    },
    {
        name: "California Grid Storage",
        location: "California, USA",
        coordinates: [36.7783, -119.4179],
        status: "operational",
        technology: "Li-ion BESS",
        capacity: 100,
        storage: 400,
        partner: "PG&E",
        commissioned: "Dec 2023"
    },
    {
        name: "Singapore Industrial Solar",
        location: "Singapore",
        coordinates: [1.3521, 103.8198],
        status: "operational",
        technology: "Rooftop Solar + BESS",
        capacity: 50,
        storage: 100,
        partner: "SembCorp Industries",
        commissioned: "Aug 2024"
    },
    {
        name: "Texas Hybrid Complex",
        location: "Texas, USA",
        coordinates: [31.9686, -99.9018],
        status: "construction",
        technology: "Wind + Solar + BESS",
        capacity: 200,
        storage: 400,
        partner: "ERCOT Utilities",
        commissioned: "Q3 2025"
    },
    {
        name: "European Solar Portfolio",
        location: "Multiple Sites, EU",
        coordinates: [50.1109, 8.6821],
        status: "development",
        technology: "Solar PV + Storage",
        capacity: 300,
        storage: 150,
        partner: "EU Energy Consortium",
        commissioned: "Q2 2026"
    },
    {
        name: "Offshore Hybrid Vision",
        location: "North Sea Region",
        coordinates: [56.0, 3.0],
        status: "pipeline",
        technology: "Offshore Wind + Floating Solar",
        capacity: 500,
        storage: 1000,
        partner: "Nordic Energy Alliance",
        commissioned: "2028"
    }
];

// Filter functionality
function initializeFilters() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');
    const tableRows = document.querySelectorAll('#pipelineTable tbody tr');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const filterValue = this.getAttribute('data-filter');
            
            // Filter project cards
            projectCards.forEach(card => {
                if (filterValue === 'all' || card.getAttribute('data-status') === filterValue) {
                    card.style.opacity = '1';
                    card.style.transform = 'scale(1)';
                    card.style.display = 'block';
                    card.classList.remove('filtered-out');
                } else {
                    card.classList.add('filtered-out');
                    setTimeout(() => {
                        if (card.classList.contains('filtered-out')) {
                            card.style.display = 'none';
                        }
                    }, 300);
                }
            });

            // Filter table rows
            tableRows.forEach(row => {
                if (filterValue === 'all' || row.getAttribute('data-status') === filterValue) {
                    row.style.display = 'table-row';
                } else {
                    row.style.display = 'none';
                }
            });

            // Update charts based on filter
            updateChartsWithFilter(filterValue);
        });
    });
}

// View toggle functionality
function initializeViewToggle() {
    const viewButtons = document.querySelectorAll('.view-btn');
    const projectsGrid = document.getElementById('projectsGrid');

    viewButtons.forEach(button => {
        button.addEventListener('click', function() {
            viewButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const viewType = this.getAttribute('data-view');
            
            if (viewType === 'list') {
                projectsGrid.classList.add('list-view');
            } else {
                projectsGrid.classList.remove('list-view');
            }
        });
    });
}

// Interactive map initialization
function initializeMap() {
    const mapElement = document.getElementById('projectMap');
    if (!mapElement) return;

    // Initialize map
    const map = L.map('projectMap').setView([30, 0], 2);

    // Add tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors',
        maxZoom: 18
    }).addTo(map);

    // Custom marker icons
    const markerIcons = {
        operational: L.divIcon({
            className: 'custom-marker operational',
            html: '<div class="marker-dot"></div>',
            iconSize: [20, 20],
            iconAnchor: [10, 10]
        }),
        construction: L.divIcon({
            className: 'custom-marker construction',
            html: '<div class="marker-dot"></div>',
            iconSize: [20, 20],
            iconAnchor: [10, 10]
        }),
        development: L.divIcon({
            className: 'custom-marker development',
            html: '<div class="marker-dot"></div>',
            iconSize: [20, 20],
            iconAnchor: [10, 10]
        }),
        pipeline: L.divIcon({
            className: 'custom-marker pipeline',
            html: '<div class="marker-dot"></div>',
            iconSize: [20, 20],
            iconAnchor: [10, 10]
        })
    };

    // Add CSS for custom markers
    const markerStyles = `
        <style>
        .custom-marker {
            background: transparent;
            border: none;
        }
        .marker-dot {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0 2px 6px rgba(0,0,0,0.3);
        }
        .operational .marker-dot { background: #22c55e; }
        .construction .marker-dot { background: #fbbf24; }
        .development .marker-dot { background: #3b82f6; }
        .pipeline .marker-dot { background: #a855f7; }
        </style>
    `;
    document.head.insertAdjacentHTML('beforeend', markerStyles);

    // Add markers for each project
    projectData.forEach(project => {
        const marker = L.marker(project.coordinates, {
            icon: markerIcons[project.status]
        }).addTo(map);

        // Create popup content
        const popupContent = `
            <div class="map-popup">
                <h3>${project.name}</h3>
                <p><strong>Location:</strong> ${project.location}</p>
                <p><strong>Technology:</strong> ${project.technology}</p>
                <p><strong>Capacity:</strong> ${project.capacity}MW / ${project.storage}MWh</p>
                <p><strong>Status:</strong> <span class="status ${project.status}">${project.status.charAt(0).toUpperCase() + project.status.slice(1)}</span></p>
                <p><strong>Partner:</strong> ${project.partner}</p>
            </div>
        `;

        marker.bindPopup(popupContent);
    });

    // Add popup styles
    const popupStyles = `
        <style>
        .map-popup {
            min-width: 200px;
        }
        .map-popup h3 {
            margin: 0 0 10px 0;
            color: #1e293b;
            font-size: 1rem;
        }
        .map-popup p {
            margin: 5px 0;
            font-size: 0.875rem;
            color: #64748b;
        }
        .map-popup .status {
            padding: 2px 8px;
            border-radius: 10px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
        }
        .map-popup .status.operational {
            background: #dcfce7;
            color: #166534;
        }
        .map-popup .status.construction {
            background: #fef3c7;
            color: #92400e;
        }
        .map-popup .status.development {
            background: #dbeafe;
            color: #1e40af;
        }
        .map-popup .status.pipeline {
            background: #f3e8ff;
            color: #7c2d12;
        }
        </style>
    `;
    document.head.insertAdjacentHTML('beforeend', popupStyles);
}

// Charts initialization
function initializeCharts() {
    initializeCapacityChart();
    initializeTechnologyChart();
}

function initializeCapacityChart() {
    const ctx = document.getElementById('capacityChart');
    if (!ctx) return;

    const data = {
        labels: ['Operational', 'Construction', 'Development', 'Pipeline'],
        datasets: [{
            label: 'MW Capacity',
            data: [300, 200, 300, 500], // Sum of capacities by status
            backgroundColor: [
                'rgba(34, 197, 94, 0.8)',
                'rgba(251, 191, 36, 0.8)',
                'rgba(59, 130, 246, 0.8)',
                'rgba(168, 85, 247, 0.8)'
            ],
            borderColor: [
                'rgb(34, 197, 94)',
                'rgb(251, 191, 36)',
                'rgb(59, 130, 246)',
                'rgb(168, 85, 247)'
            ],
            borderWidth: 2,
            borderRadius: 8,
            borderSkipped: false
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    titleColor: 'white',
                    bodyColor: 'white',
                    borderColor: 'rgba(255, 255, 255, 0.2)',
                    borderWidth: 1,
                    cornerRadius: 8,
                    callbacks: {
                        label: function(context) {
                            return `${context.parsed.y} MW`;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)'
                    },
                    ticks: {
                        color: '#64748b',
                        callback: function(value) {
                            return value + ' MW';
                        }
                    }
                },
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        color: '#64748b'
                    }
                }
            },
            animation: {
                duration: 1000,
                easing: 'easeInOutQuart'
            }
        }
    };

    window.capacityChart = new Chart(ctx, config);

    // Toggle functionality
    const toggleButtons = document.querySelectorAll('.toggle-btn');
    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            toggleButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const chartType = this.getAttribute('data-chart');
            updateCapacityChart(chartType);
        });
    });
}

function updateCapacityChart(type) {
    if (!window.capacityChart) return;

    const mwData = [300, 200, 300, 500];
    const mwhData = [800, 400, 150, 1000];

    const newData = type === 'mwh' ? mwhData : mwData;
    const unit = type === 'mwh' ? 'MWh' : 'MW';

    window.capacityChart.data.datasets[0].data = newData;
    window.capacityChart.data.datasets[0].label = `${unit} Capacity`;
    
    window.capacityChart.options.plugins.tooltip.callbacks.label = function(context) {
        return `${context.parsed.y} ${unit}`;
    };
    
    window.capacityChart.options.scales.y.ticks.callback = function(value) {
        return value + ' ' + unit;
    };

    window.capacityChart.update('active');
}

function initializeTechnologyChart() {
    const ctx = document.getElementById('technologyChart');
    if (!ctx) return;

    const data = {
        labels: ['Solar + BESS', 'Wind + Solar', 'BESS Only', 'Hybrid Systems'],
        datasets: [{
            data: [40, 25, 20, 15],
            backgroundColor: [
                'rgba(251, 191, 36, 0.8)',
                'rgba(59, 130, 246, 0.8)',
                'rgba(34, 197, 94, 0.8)',
                'rgba(168, 85, 247, 0.8)'
            ],
            borderColor: [
                'rgb(251, 191, 36)',
                'rgb(59, 130, 246)',
                'rgb(34, 197, 94)',
                'rgb(168, 85, 247)'
            ],
            borderWidth: 2
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        padding: 20,
                        usePointStyle: true,
                        font: {
                            size: 12
                        },
                        color: '#64748b'
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    titleColor: 'white',
                    bodyColor: 'white',
                    borderColor: 'rgba(255, 255, 255, 0.2)',
                    borderWidth: 1,
                    cornerRadius: 8,
                    callbacks: {
                        label: function(context) {
                            return `${context.label}: ${context.parsed}%`;
                        }
                    }
                }
            },
            animation: {
                duration: 1000,
                easing: 'easeInOutQuart'
            },
            cutout: '60%'
        }
    };

    new Chart(ctx, config);
}

// Table sorting functionality
function initializeTableSort() {
    const table = document.getElementById('pipelineTable');
    if (!table) return;

    const headers = table.querySelectorAll('th');
    headers.forEach((header, index) => {
        header.style.cursor = 'pointer';
        header.addEventListener('click', () => sortTable(table, index));
        
        // Add sort indicator
        header.innerHTML += ' <i class="fas fa-sort sort-icon"></i>';
    });
}

function sortTable(table, columnIndex) {
    const tbody = table.querySelector('tbody');
    const rows = Array.from(tbody.querySelectorAll('tr'));
    const header = table.querySelectorAll('th')[columnIndex];
    const icon = header.querySelector('.sort-icon');
    
    // Reset all other sort icons
    table.querySelectorAll('.sort-icon').forEach(i => {
        if (i !== icon) {
            i.className = 'fas fa-sort sort-icon';
        }
    });
    
    // Determine sort direction
    const isAscending = icon.classList.contains('fa-sort') || icon.classList.contains('fa-sort-down');
    
    // Sort rows
    rows.sort((a, b) => {
        const aVal = a.cells[columnIndex].textContent.trim();
        const bVal = b.cells[columnIndex].textContent.trim();
        
        // Check if values are numeric
        const aNum = parseFloat(aVal);
        const bNum = parseFloat(bVal);
        
        if (!isNaN(aNum) && !isNaN(bNum)) {
            return isAscending ? aNum - bNum : bNum - aNum;
        }
        
        // String comparison
        return isAscending ? aVal.localeCompare(bVal) : bVal.localeCompare(aVal);
    });
    
    // Update icon
    icon.className = `fas fa-sort-${isAscending ? 'up' : 'down'} sort-icon`;
    
    // Reorder rows
    rows.forEach(row => tbody.appendChild(row));
}

// Update charts based on filter
function updateChartsWithFilter(filter) {
    if (!window.capacityChart) return;
    
    let filteredData;
    
    if (filter === 'all') {
        filteredData = [300, 200, 300, 500];
    } else {
        // Calculate data based on filter
        const statusIndex = ['operational', 'construction', 'development', 'pipeline'].indexOf(filter);
        filteredData = [0, 0, 0, 0];
        if (statusIndex !== -1) {
            const originalData = [300, 200, 300, 500];
            filteredData[statusIndex] = originalData[statusIndex];
        }
    }
    
    window.capacityChart.data.datasets[0].data = filteredData;
    window.capacityChart.update('active');
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
                entry.target.classList.add('animate-in');
                
                // Stagger animation for project cards
                if (entry.target.classList.contains('projects-grid')) {
                    const cards = entry.target.querySelectorAll('.project-card');
                    cards.forEach((card, index) => {
                        setTimeout(() => {
                            card.style.animation = `fadeInUp 0.6s ease-out ${index * 0.1}s both`;
                        }, 100);
                    });
                }
            }
        });
    }, observerOptions);

    // Observe elements for animation
    const animateElements = document.querySelectorAll('.projects-grid, .summary-grid, .pipeline-table-container');
    animateElements.forEach(el => observer.observe(el));

    // Counter animation for stats
    animateCounters();
}

function animateCounters() {
    const counters = document.querySelectorAll('.stat-number');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const finalValue = parseInt(target.textContent.replace(/\D/g, ''));
                const suffix = target.textContent.replace(/[0-9]/g, '');
                
                animateValue(target, 0, finalValue, 2000, suffix);
                observer.unobserve(target);
            }
        });
    });
    
    counters.forEach(counter => observer.observe(counter));
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

// Search functionality
function initializeSearch() {
    const searchInput = document.getElementById('projectSearch');
    if (!searchInput) return;

    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        const projectCards = document.querySelectorAll('.project-card');
        const tableRows = document.querySelectorAll('#pipelineTable tbody tr');

        // Filter project cards
        projectCards.forEach(card => {
            const projectName = card.querySelector('.project-name').textContent.toLowerCase();
            const projectLocation = card.querySelector('.project-location').textContent.toLowerCase();
            const projectTech = card.querySelector('.detail-value').textContent.toLowerCase();

            if (projectName.includes(searchTerm) || 
                projectLocation.includes(searchTerm) || 
                projectTech.includes(searchTerm)) {
                card.style.display = 'block';
                card.classList.remove('filtered-out');
            } else {
                card.classList.add('filtered-out');
                setTimeout(() => {
                    if (card.classList.contains('filtered-out')) {
                        card.style.display = 'none';
                    }
                }, 300);
            }
        });

        // Filter table rows
        tableRows.forEach(row => {
            const rowText = row.textContent.toLowerCase();
            if (rowText.includes(searchTerm)) {
                row.style.display = 'table-row';
            } else {
                row.style.display = 'none';
            }
        });
    });
}

// Lazy loading for images
function initializeLazyLoading() {
    const images = document.querySelectorAll('.project-image img');
    
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src || img.src;
                img.classList.add('loaded');
                imageObserver.unobserve(img);
            }
        });
    });

    images.forEach(img => {
        imageObserver.observe(img);
    });
}

// Project modal functionality
function initializeProjectModals() {
    const projectCards = document.querySelectorAll('.project-card');
    
    projectCards.forEach(card => {
        card.addEventListener('click', function() {
            const projectName = this.querySelector('.project-name').textContent;
            const projectData = getProjectDetails(projectName);
            showProjectModal(projectData);
        });
    });
}

function getProjectDetails(projectName) {
    return projectData.find(project => project.name === projectName) || {};
}

function showProjectModal(project) {
    const modal = createModal(project);
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

function createModal(project) {
    const modal = document.createElement('div');
    modal.className = 'project-modal';
    modal.innerHTML = `
        <div class="modal-overlay"></div>
        <div class="modal-content">
            <button class="modal-close">&times;</button>
            <div class="modal-header">
                <h2>${project.name}</h2>
                <span class="modal-status ${project.status}">${project.status}</span>
            </div>
            <div class="modal-body">
                <div class="modal-details">
                    <div class="detail-grid">
                        <div class="detail-item">
                            <span class="label">Location</span>
                            <span class="value">${project.location}</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">Technology</span>
                            <span class="value">${project.technology}</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">Capacity</span>
                            <span class="value">${project.capacity}MW / ${project.storage}MWh</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">Partner</span>
                            <span class="value">${project.partner}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `;
    
    return modal;
}

// Export/Print functionality
function initializeExportFunctions() {
    const exportBtn = document.getElementById('exportData');
    if (exportBtn) {
        exportBtn.addEventListener('click', exportProjectData);
    }
    
    const printBtn = document.getElementById('printProjects');
    if (printBtn) {
        printBtn.addEventListener('click', printProjectList);
    }
}

function exportProjectData() {
    const csvContent = convertToCSV(projectData);
    downloadCSV(csvContent, 'zenova-projects.csv');
}

function convertToCSV(data) {
    const headers = ['Name', 'Location', 'Technology', 'Capacity (MW)', 'Storage (MWh)', 'Status', 'Partner', 'Commissioned'];
    const csvRows = [headers.join(',')];
    
    data.forEach(project => {
        const row = [
            project.name,
            project.location,
            project.technology,
            project.capacity,
            project.storage,
            project.status,
            project.partner,
            project.commissioned
        ];
        csvRows.push(row.join(','));
    });
    
    return csvRows.join('\n');
}

function downloadCSV(content, filename) {
    const blob = new Blob([content], { type: 'text/csv' });
    const url = window.URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = filename;
    a.click();
    window.URL.revokeObjectURL(url);
}

function printProjectList() {
    const printContent = generatePrintContent();
    const printWindow = window.open('', '_blank');
    printWindow.document.write(printContent);
    printWindow.document.close();
    printWindow.print();
}

function generatePrintContent() {
    return `
        <!DOCTYPE html>
        <html>
        <head>
            <title>Zenova Power Ventures - Projects</title>
            <style>
                body { font-family: Arial, sans-serif; margin: 20px; }
                h1 { color: #1e293b; border-bottom: 2px solid #7c3aed; padding-bottom: 10px; }
                .project { margin-bottom: 20px; padding: 15px; border: 1px solid #e2e8f0; border-radius: 8px; }
                .project-name { font-size: 1.2em; font-weight: bold; color: #1e293b; }
                .project-details { margin-top: 10px; }
                .detail { margin-bottom: 5px; }
                .label { font-weight: bold; }
                .status { padding: 2px 8px; border-radius: 10px; font-size: 0.8em; text-transform: uppercase; }
                .operational { background: #dcfce7; color: #166534; }
                .construction { background: #fef3c7; color: #92400e; }
                .development { background: #dbeafe; color: #1e40af; }
                .pipeline { background: #f3e8ff; color: #7c2d12; }
            </style>
        </head>
        <body>
            <h1>Zenova Power Ventures - Project Portfolio</h1>
            ${projectData.map(project => `
                <div class="project">
                    <div class="project-name">${project.name}</div>
                    <div class="project-details">
                        <div class="detail"><span class="label">Location:</span> ${project.location}</div>
                        <div class="detail"><span class="label">Technology:</span> ${project.technology}</div>
                        <div class="detail"><span class="label">Capacity:</span> ${project.capacity}MW / ${project.storage}MWh</div>
                        <div class="detail"><span class="label">Status:</span> <span class="status ${project.status}">${project.status}</span></div>
                        <div class="detail"><span class="label">Partner:</span> ${project.partner}</div>
                        <div class="detail"><span class="label">Commissioned:</span> ${project.commissioned}</div>
                    </div>
                </div>
            `).join('')}
        </body>
        </html>
    `;
}

// Performance optimization
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

// Mobile optimizations
function initializeMobileOptimizations() {
    // Touch gestures for project cards
    let touchStartX = 0;
    let touchStartY = 0;
    
    document.addEventListener('touchstart', function(e) {
        touchStartX = e.touches[0].clientX;
        touchStartY = e.touches[0].clientY;
    });
    
    document.addEventListener('touchend', function(e) {
        const touchEndX = e.changedTouches[0].clientX;
        const touchEndY = e.changedTouches[0].clientY;
        const diffX = touchStartX - touchEndX;
        const diffY = touchStartY - touchEndY;
        
        // Detect swipe gestures
        if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 50) {
            const projectCard = e.target.closest('.project-card');
            if (projectCard) {
                if (diffX > 0) {
                    // Swipe left - show more details
                    projectCard.classList.add('swiped-left');
                } else {
                    // Swipe right - hide details
                    projectCard.classList.remove('swiped-left');
                }
            }
        }
    });
}

// Initialize additional features when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    // Add additional initializations
    setTimeout(() => {
        initializeSearch();
        initializeLazyLoading();
        initializeProjectModals();
        initializeExportFunctions();
        initializeMobileOptimizations();
    }, 100);
});

// Error handling
window.addEventListener('error', function(e) {
    console.error('Projects page error:', e.error);
});

// Cleanup on page unload
window.addEventListener('beforeunload', function() {
    // Clean up event listeners and intervals
    if (window.capacityChart) {
        window.capacityChart.destroy();
    }
});

// Add CSS for modal and additional styles
const additionalStyles = `
<style>
.project-modal {
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

.project-modal.active {
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
    transform: translate(-50%, -50%) scale(0.8);
    background: white;
    border-radius: 16px;
    max-width: 600px;
    width: 90%;
    max-height: 80%;
    overflow-y: auto;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
}

.project-modal.active .modal-content {
    transform: translate(-50%, -50%) scale(1);
}

.modal-close {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: none;
    border: none;
    font-size: 2rem;
    color: #64748b;
    cursor: pointer;
    z-index: 10;
}

.modal-header {
    padding: 2rem 2rem 1rem;
    border-bottom: 1px solid #f1f5f9;
}

.modal-header h2 {
    margin: 0;
    color: #1e293b;
}

.modal-status {
    display: inline-block;
    margin-top: 0.5rem;
    padding: 0.25rem 0.75rem;
    border-radius: 12px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.modal-body {
    padding: 1rem 2rem 2rem;
}

.detail-grid {
    display: grid;
    gap: 1rem;
}

.detail-item {
    display: flex;
    justify-content: space-between;
    padding: 0.75rem 0;
    border-bottom: 1px solid #f1f5f9;
}

.detail-item .label {
    font-weight: 600;
    color: #475569;
}

.detail-item .value {
    color: #64748b;
}

.project-card.swiped-left {
    transform: translateX(-10px);
    box-shadow: 0 10px 30px rgba(124, 58, 237, 0.2);
}

@media (max-width: 768px) {
    .modal-content {
        width: 95%;
        max-height: 85%;
    }
    
    .modal-header,
    .modal-body {
        padding-left: 1rem;
        padding-right: 1rem;
    }
    
    .detail-item {
        flex-direction: column;
        gap: 0.25rem;
    }
}
</style>
`;
</script>
document.head.insertAdjacentHTML('beforeend', additionalStyles);

<?php include 'footer.php'; ?>
<script src="script.js"></script>
