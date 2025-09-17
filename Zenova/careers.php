<?php include 'header.php'; ?>

<main class="solutions-page">
                <link rel="stylesheet" href="style.css">
               
                <style>
           /* Zenova Careers - Professional Enhanced CSS */

/* Advanced CSS Variables */
:root {
    /* Primary Colors */
    --primary-50: #eff6ff;
    --primary-100: #dbeafe;
    --primary-500: #3b82f6;
    --primary-600: #2563eb;
    --primary-700: #1d4ed8;
    --primary-900: #1e3a8a;
    
    /* Neutral Colors */
    --gray-50: #f8fafc;
    --gray-100: #f1f5f9;
    --gray-200: #e2e8f0;
    --gray-300: #cbd5e1;
    --gray-400: #94a3b8;
    --gray-500: #64748b;
    --gray-600: #475569;
    --gray-700: #334155;
    --gray-800: #1e293b;
    --gray-900: #0f172a;
    
    /* Accent Colors */
    --accent-amber: #f59e0b;
    --accent-emerald: #10b981;
    --accent-purple: #8b5cf6;
    --accent-pink: #ec4899;
    
    /* Advanced Shadows */
    --shadow-xs: 0 1px 2px 0 rgb(0 0 0 / 0.05);
    --shadow-sm: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
    --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
    --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
    --shadow-2xl: 0 25px 50px -12px rgb(0 0 0 / 0.25);
    --shadow-inner: inset 0 2px 4px 0 rgb(0 0 0 / 0.05);
    
    /* Glass morphism */
    --glass-bg: rgba(255, 255, 255, 0.85);
    --glass-border: rgba(255, 255, 255, 0.2);
    --glass-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    
    /* Gradients */
    --gradient-primary: linear-gradient(135deg, var(--primary-600) 0%, var(--primary-700) 100%);
    --gradient-accent: linear-gradient(135deg, var(--accent-amber) 0%, var(--accent-pink) 100%);
    --gradient-subtle: linear-gradient(135deg, var(--gray-50) 0%, var(--primary-50) 100%);
    --gradient-dark: linear-gradient(135deg, var(--gray-800) 0%, var(--gray-900) 100%);
    
    /* Border Radius */
    --radius-sm: 6px;
    --radius-md: 8px;
    --radius-lg: 12px;
    --radius-xl: 16px;
    --radius-2xl: 24px;
    --radius-full: 9999px;
    
    /* Transitions */
    --transition-fast: all 0.15s ease;
    --transition-base: all 0.3s ease;
    --transition-slow: all 0.5s ease;
    --transition-bounce: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    
    /* Typography */
    --font-display: 'Inter', system-ui, -apple-system, sans-serif;
    --font-body: 'Inter', system-ui, -apple-system, sans-serif;
    --font-mono: 'JetBrains Mono', 'Fira Code', monospace;
}

/* Advanced Base Styles */
.zenova-careers {
    font-family: var(--font-body);
    line-height: 1.7;
    color: var(--gray-800);
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 24px;
    position: relative;
}

.zenova-careers::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at 20% 20%, rgba(59, 130, 246, 0.05) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(245, 158, 11, 0.05) 0%, transparent 50%);
    pointer-events: none;
    z-index: -1;
}

/* Professional Section Headers */
.section-title {
    font-family: var(--font-display);
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    font-weight: 800;
    text-align: center;
    margin: 80px 0 60px 0;
    color: var(--gray-900);
    position: relative;
    background: var(--gradient-primary);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    letter-spacing: -0.02em;
}

.section-title::before {
    content: '';
    position: absolute;
    top: -20px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 4px;
    background: var(--gradient-accent);
    border-radius: var(--radius-full);
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -20px;
    left: 50%;
    transform: translateX(-50%);
    width: 120px;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--primary-600), transparent);
    border-radius: var(--radius-full);
}

/* Enhanced Why Work at Zenova Section */
.why-zenova {
    margin-bottom: 120px;
    position: relative;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 32px;
    margin-top: 60px;
}

.benefit-card {
    background: var(--glass-bg);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    padding: 48px 32px;
    border-radius: var(--radius-2xl);
    text-align: center;
    box-shadow: var(--glass-shadow);
    transition: var(--transition-bounce);
    position: relative;
    overflow: hidden;
    isolation: isolate;
}

.benefit-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: var(--gradient-subtle);
    opacity: 0;
    transition: var(--transition-base);
    z-index: -1;
    border-radius: var(--radius-2xl);
}

.benefit-card:hover::before {
    opacity: 1;
}

.benefit-card:hover {
    transform: translateY(-12px) scale(1.02);
    box-shadow: var(--shadow-2xl);
    border-color: var(--primary-600);
}

.benefit-icon {
    width: 80px;
    height: 80px;
    background: var(--gradient-primary);
    border-radius: var(--radius-2xl);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 24px;
    font-size: 2rem;
    color: white;
    box-shadow: var(--shadow-lg);
    transition: var(--transition-bounce);
    position: relative;
    overflow: hidden;
}

.benefit-icon::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
    transition: left 0.6s ease;
}

.benefit-card:hover .benefit-icon::before {
    left: 100%;
}

.benefit-card:hover .benefit-icon {
    transform: rotate(10deg) scale(1.1);
    box-shadow: var(--shadow-xl);
}

.benefit-card h3 {
    font-family: var(--font-display);
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 16px;
    color: var(--gray-900);
    letter-spacing: -0.01em;
}

.benefit-card p {
    color: var(--gray-600);
    line-height: 1.8;
    font-size: 1.1rem;
}

/* Premium Open Positions Section */
.open-positions {
    margin-bottom: 120px;
    padding: 80px 0;
    background: var(--gradient-subtle);
    border-radius: var(--radius-2xl);
    position: relative;
    overflow: hidden;
}

.open-positions::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: var(--gradient-accent);
}

.positions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 32px;
    margin-top: 40px;
}

.position-card {
    background: white;
    padding: 40px;
    border-radius: var(--radius-xl);
    box-shadow: var(--shadow-sm);
    border: 1px solid var(--gray-200);
    transition: var(--transition-base);
    position: relative;
    overflow: hidden;
}

.position-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 0;
    background: var(--gradient-primary);
    transition: height 0.3s ease;
}

.position-card:hover::before {
    height: 100%;
}

.position-card:hover {
    box-shadow: var(--shadow-xl);
    transform: translateY(-8px);
    border-color: var(--primary-600);
}

.position-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 20px;
    gap: 16px;
}

.position-title {
    font-family: var(--font-display);
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--gray-900);
    margin: 0;
    letter-spacing: -0.01em;
}

.department-tag {
    background: var(--gradient-primary);
    color: white;
    padding: 8px 16px;
    border-radius: var(--radius-full);
    font-size: 0.875rem;
    font-weight: 600;
    white-space: nowrap;
    box-shadow: var(--shadow-sm);
    letter-spacing: 0.025em;
}

.position-meta {
    display: flex;
    gap: 24px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.position-meta span {
    color: var(--gray-500);
    font-size: 0.95rem;
    display: flex;
    align-items: center;
    gap: 8px;
    font-weight: 500;
}

.position-meta i {
    color: var(--primary-600);
    width: 16px;
}

.position-description {
    color: var(--gray-600);
    margin-bottom: 32px;
    line-height: 1.8;
    font-size: 1.05rem;
}

/* Sophisticated Culture & Values Section */
.culture-values {
    margin-bottom: 120px;
    position: relative;
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 48px;
    margin-top: 60px;
}

.value-item {
    text-align: center;
    padding: 32px 24px;
    position: relative;
    transition: var(--transition-base);
}

.value-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 0;
    height: 2px;
    background: var(--gradient-primary);
    transition: width 0.4s ease;
    border-radius: var(--radius-full);
}

.value-item:hover::before {
    width: 60px;
}

.value-item:hover {
    transform: translateY(-8px);
}

.value-icon {
    width: 120px;
    height: 120px;
    background: white;
    border: 3px solid var(--primary-600);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 32px;
    font-size: 3rem;
    color: var(--primary-600);
    transition: var(--transition-bounce);
    box-shadow: var(--shadow-lg);
    position: relative;
    overflow: hidden;
}

.value-icon::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: var(--gradient-primary);
    opacity: 0;
    transition: var(--transition-base);
    border-radius: inherit;
}

.value-item:hover .value-icon::before {
    opacity: 1;
}

.value-item:hover .value-icon {
    color: white;
    transform: scale(1.15) rotate(10deg);
    box-shadow: var(--shadow-2xl);
    border-color: transparent;
}

.value-item h3 {
    font-family: var(--font-display);
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 20px;
    color: var(--gray-900);
    letter-spacing: -0.01em;
}

.value-item p {
    color: var(--gray-600);
    line-height: 1.8;
    font-size: 1.1rem;
    max-width: 300px;
    margin: 0 auto;
}

/* Executive Programs Section */
.programs-section {
    margin-bottom: 120px;
    padding: 80px 0;
    background: var(--gradient-dark);
    border-radius: var(--radius-2xl);
    position: relative;
    overflow: hidden;
}

.programs-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Ccircle cx='30' cy='30' r='1'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

.programs-section .section-title {
    color: white;
    background: linear-gradient(135deg, white 0%, var(--accent-amber) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.programs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
    gap: 48px;
    margin-top: 60px;
    position: relative;
    z-index: 1;
}

.program-card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    padding: 48px;
    border-radius: var(--radius-2xl);
    box-shadow: var(--shadow-2xl);
    border: 1px solid rgba(255, 255, 255, 0.3);
    transition: var(--transition-base);
    position: relative;
    overflow: hidden;
}

.program-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: var(--gradient-accent);
    transform: scaleX(0);
    transition: transform 0.3s ease;
    transform-origin: left;
}

.program-card:hover::before {
    transform: scaleX(1);
}

.program-card:hover {
    transform: translateY(-12px) scale(1.02);
    box-shadow: 0 32px 64px -12px rgba(0, 0, 0, 0.25);
}

.program-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 36px;
    padding-bottom: 24px;
    border-bottom: 2px solid var(--gray-100);
    gap: 20px;
}

.program-title {
    font-family: var(--font-display);
    font-size: 1.875rem;
    font-weight: 800;
    color: var(--gray-900);
    margin: 0;
    letter-spacing: -0.02em;
}

.program-duration {
    background: var(--gradient-accent);
    color: white;
    padding: 12px 20px;
    border-radius: var(--radius-full);
    font-size: 0.95rem;
    font-weight: 700;
    white-space: nowrap;
    box-shadow: var(--shadow-md);
    letter-spacing: 0.025em;
}

.program-section h4 {
    color: var(--gray-900);
    font-family: var(--font-display);
    font-size: 1.25rem;
    font-weight: 700;
    margin: 32px 0 20px 0;
    letter-spacing: -0.01em;
    position: relative;
    padding-left: 20px;
}

.program-section h4::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 4px;
    height: 24px;
    background: var(--gradient-primary);
    border-radius: var(--radius-full);
}

.program-list {
    list-style: none;
    padding: 0;
    margin-bottom: 32px;
    display: grid;
    gap: 12px;
}

.program-list li {
    position: relative;
    padding: 16px 16px 16px 48px;
    color: var(--gray-700);
    line-height: 1.7;
    font-size: 1.05rem;
    background: var(--gray-50);
    border-radius: var(--radius-lg);
    transition: var(--transition-base);
    border-left: 3px solid transparent;
}

.program-list li:hover {
    background: var(--primary-50);
    border-left-color: var(--primary-600);
    transform: translateX(4px);
}

.program-list li::before {
    content: '✓';
    position: absolute;
    left: 18px;
    top: 50%;
    transform: translateY(-50%);
    color: white;
    background: var(--gradient-primary);
    width: 20px;
    height: 20px;
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 0.75rem;
    box-shadow: var(--shadow-sm);
}

/* Premium CTA Section */
.cta-section {
    text-align: center;
    padding: 100px 48px;
    background: var(--gradient-primary);
    color: white;
    border-radius: var(--radius-2xl);
    margin-bottom: 80px;
    position: relative;
    overflow: hidden;
}

.cta-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 70% 70%, rgba(245, 158, 11, 0.1) 0%, transparent 50%);
}

.cta-title {
    font-family: var(--font-display);
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 900;
    margin-bottom: 24px;
    color: white;
    letter-spacing: -0.02em;
    position: relative;
    z-index: 1;
}

.cta-subtitle {
    font-size: 1.375rem;
    margin-bottom: 48px;
    opacity: 0.95;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.7;
    position: relative;
    z-index: 1;
}

.cta-buttons {
    display: flex;
    gap: 24px;
    justify-content: center;
    flex-wrap: wrap;
    position: relative;
    z-index: 1;
}

/* Enhanced Professional Buttons */
.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 16px 32px;
    border-radius: var(--radius-full);
    font-family: var(--font-display);
    font-weight: 700;
    text-decoration: none;
    transition: var(--transition-bounce);
    border: none;
    cursor: pointer;
    font-size: 1.05rem;
    text-align: center;
    min-width: 180px;
    position: relative;
    overflow: hidden;
    letter-spacing: 0.025em;
    text-transform: uppercase;
    box-shadow: var(--shadow-lg);
}

.btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
    transition: left 0.5s ease;
}

.btn:hover::before {
    left: 100%;
}

.btn-primary {
    background: white;
    color: var(--primary-600);
}

.btn-primary:hover {
    transform: translateY(-4px) scale(1.05);
    box-shadow: var(--shadow-2xl);
    background: var(--gray-50);
}

.btn-secondary {
    background: transparent;
    color: white;
    border: 2px solid white;
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

.btn-secondary:hover {
    background: white;
    color: var(--primary-600);
    transform: translateY(-4px) scale(1.05);
    box-shadow: var(--shadow-2xl);
}

.btn-outline-light {
    background: rgba(255, 255, 255, 0.1);
    color: white;
    border: 2px solid rgba(255, 255, 255, 0.5);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
}

.btn-outline-light:hover {
    background: white;
    color: var(--primary-600);
    border-color: white;
    transform: translateY(-4px) scale(1.05);
    box-shadow: var(--shadow-2xl);
}

/* Advanced Responsive Design */
@media (max-width: 1024px) {
    .zenova-careers {
        padding: 0 20px;
    }
    
    .programs-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .zenova-careers {
        padding: 0 16px;
    }
    
    .section-title {
        font-size: 2.5rem;
        margin: 60px 0 40px 0;
    }
    
    .benefits-grid,
    .positions-grid,
    .values-grid {
        grid-template-columns: 1fr;
        gap: 24px;
    }
    
    .position-header,
    .program-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 16px;
    }
    
    .position-meta {
        flex-direction: column;
        gap: 12px;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .btn {
        width: 100%;
        max-width: 280px;
    }
    
    .benefit-card,
    .position-card,
    .program-card {
        padding: 32px 24px;
    }
    
    .open-positions,
    .programs-section {
        padding: 60px 24px;
    }
    
    .cta-section {
        padding: 80px 32px;
    }
    
    .value-icon {
        width: 100px;
        height: 100px;
        font-size: 2.5rem;
    }
}

@media (max-width: 480px) {
    .section-title {
        font-size: 2rem;
    }
    
    .cta-title {
        font-size: 2rem;
    }
    
    .benefit-card h3,
    .value-item h3 {
        font-size: 1.5rem;
    }
    
    .position-title,
    .program-title {
        font-size: 1.375rem;
    }
    
    .benefit-icon {
        width: 70px;
        height: 70px;
        font-size: 1.75rem;
    }
    
    .value-icon {
        width: 80px;
        height: 80px;
        font-size: 2rem;
    }
}

/* Premium Focus States */
.btn:focus,
.position-card:focus,
.benefit-card:focus,
.program-card:focus,
.value-item:focus {
    outline: 3px solid var(--primary-600);
    outline-offset: 4px;
    border-radius: var(--radius-lg);
}

/* Advanced Animation Classes */
.fade-in {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94), transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

.fade-in.visible {
    opacity: 1;
    transform: translateY(0);
}

.slide-in-left {
    opacity: 0;
    transform: translateX(-50px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

.slide-in-left.visible {
    opacity: 1;
    transform: translateX(0);
}

.slide-in-right {
    opacity: 0;
    transform: translateX(50px);
    transition: opacity 0.8s ease, transform 0.8s ease;
}

.slide-in-right.visible {
    opacity: 1;
    transform: translateX(0);
}

/* Premium Loading States */
.btn:disabled {
    opacity: 0.6;
    cursor: not-allowed;
    transform: none !important;
}

.btn.loading {
    position: relative;
    color: transparent;
}

.btn.loading::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 20px;
    height: 20px;
    border: 2px solid transparent;
    border-top: 2px solid currentColor;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    to { transform: translate(-50%, -50%) rotate(360deg); }
}

/* High-end Print Styles */
@media print {
    .cta-section,
    .btn {
        display: none;
    }
    
    .zenova-careers {
        max-width: none;
        padding: 0;
    }
    
    .section-title {
        color: var(--gray-900) !important;
        background: none !important;
        -webkit-text-fill-color: var(--gray-900) !important;
        page-break-after: avoid;
    }
    
    .benefit-card,
    .position-card,
    .program-card,
    .value-item {
        break-inside: avoid;
        box-shadow: none;
        border: 1px solid var(--gray-300);
        margin-bottom: 20px;
    }
    
    .open-positions,
    .programs-section {
        background: white !important;
        color: var(--gray-900) !important;
    }
    
    .programs-section .section-title {
        color: var(--gray-900) !important;
        background: none !important;
        -webkit-text-fill-color: var(--gray-900) !important;
    }
}

/* Premium Dark Mode Support */
@media (prefers-color-scheme: dark) {
    :root {
        --gray-50: #0f172a;
        --gray-100: #1e293b;
        --gray-200: #334155;
        --gray-300: #475569;
        --gray-400: #64748b;
        --gray-500: #94a3b8;
        --gray-600: #cbd5e1;
        --gray-700: #e2e8f0;
        --gray-800: #f1f5f9;
        --gray-900: #f8fafc;
        
        --glass-bg: rgba(15, 23, 42, 0.85);
        --glass-border: rgba(255, 255, 255, 0.1);
    }
}

/* Micro-interactions and Advanced Animations */
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

@keyframes pulse {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.8; }
}

@keyframes shimmer {
    0% { background-position: -1000px 0; }
    100% { background-position: 1000px 0; }
}

.benefit-card:nth-child(1) { animation-delay: 0.1s; }
.benefit-card:nth-child(2) { animation-delay: 0.2s; }
.benefit-card:nth-child(3) { animation-delay: 0.3s; }
.benefit-card:nth-child(4) { animation-delay: 0.4s; }

.position-card:nth-child(1) { animation-delay: 0.1s; }
.position-card:nth-child(2) { animation-delay: 0.2s; }
.position-card:nth-child(3) { animation-delay: 0.3s; }
.position-card:nth-child(4) { animation-delay: 0.4s; }

.value-item:nth-child(1) { animation-delay: 0.1s; }
.value-item:nth-child(2) { animation-delay: 0.2s; }
.value-item:nth-child(3) { animation-delay: 0.3s; }
.value-item:nth-child(4) { animation-delay: 0.4s; }
.value-item:nth-child(5) { animation-delay: 0.5s; }
.value-item:nth-child(6) { animation-delay: 0.6s; }

/* Accessibility Enhancements */
@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
    }
    
    .benefit-card,
    .position-card,
    .program-card,
    .value-item {
        transform: none !important;
    }
}

/* High Contrast Mode Support */
@media (prefers-contrast: high) {
    .benefit-card,
    .position-card,
    .program-card {
        border: 2px solid var(--gray-900);
    }
    
    .btn {
        border: 2px solid currentColor;
    }
    
    .section-title::before,
    .section-title::after {
        display: none;
    }
}

/* Enhanced Typography Scale */
.text-xs { font-size: 0.75rem; line-height: 1rem; }
.text-sm { font-size: 0.875rem; line-height: 1.25rem; }
.text-base { font-size: 1rem; line-height: 1.5rem; }
.text-lg { font-size: 1.125rem; line-height: 1.75rem; }
.text-xl { font-size: 1.25rem; line-height: 1.75rem; }
.text-2xl { font-size: 1.5rem; line-height: 2rem; }
.text-3xl { font-size: 1.875rem; line-height: 2.25rem; }
.text-4xl { font-size: 2.25rem; line-height: 2.5rem; }
.text-5xl { font-size: 3rem; line-height: 1; }
.text-6xl { font-size: 3.75rem; line-height: 1; }

/* Professional Utility Classes */
.backdrop-blur { backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); }
.backdrop-blur-sm { backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px); }
.backdrop-blur-lg { backdrop-filter: blur(40px); -webkit-backdrop-filter: blur(40px); }

.glass-effect {
    background: var(--glass-bg);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid var(--glass-border);
    box-shadow: var(--glass-shadow);
}

.gradient-text {
    background: var(--gradient-primary);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.gradient-border {
    border: 2px solid transparent;
    background: linear-gradient(white, white) padding-box,
                var(--gradient-primary) border-box;
}

/* Loading Skeleton Animations */
.skeleton {
    background: linear-gradient(90deg, var(--gray-200) 25%, var(--gray-100) 50%, var(--gray-200) 75%);
    background-size: 200% 100%;
    animation: shimmer 2s infinite;
}

.skeleton-text {
    height: 1rem;
    border-radius: var(--radius-sm);
    margin-bottom: 0.5rem;
}

.skeleton-title {
    height: 1.5rem;
    border-radius: var(--radius-sm);
    margin-bottom: 1rem;
    width: 60%;
}

.skeleton-card {
    height: 200px;
    border-radius: var(--radius-lg);
}

/* Professional Scrollbar Styling */
::-webkit-scrollbar {
    width: 8px;
    height: 8px;
}

::-webkit-scrollbar-track {
    background: var(--gray-100);
    border-radius: var(--radius-full);
}

::-webkit-scrollbar-thumb {
    background: var(--gradient-primary);
    border-radius: var(--radius-full);
    transition: var(--transition-base);
}

::-webkit-scrollbar-thumb:hover {
    background: var(--primary-700);
}

/* Selection Styling */
::selection {
    background: var(--primary-600);
    color: white;
}

::-moz-selection {
    background: var(--primary-600);
    color: white;
}

/* Enhanced Performance Optimizations */
.zenova-careers {
    contain: layout style paint;
}

.benefit-card,
.position-card,
.program-card,
.value-item {
    contain: layout paint;
    will-change: transform, box-shadow;
}

.benefit-card:hover,
.position-card:hover,
.program-card:hover,
.value-item:hover {
    will-change: auto;
}

/* Professional Tooltip System */
.tooltip {
    position: relative;
    cursor: help;
}

.tooltip::before {
    content: attr(data-tooltip);
    position: absolute;
    bottom: 125%;
    left: 50%;
    transform: translateX(-50%);
    padding: 8px 12px;
    background: var(--gray-900);
    color: white;
    font-size: 0.875rem;
    border-radius: var(--radius-md);
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: var(--transition-base);
    z-index: 1000;
}

.tooltip::after {
    content: '';
    position: absolute;
    bottom: 118%;
    left: 50%;
    transform: translateX(-50%);
    border: 5px solid transparent;
    border-top-color: var(--gray-900);
    opacity: 0;
    pointer-events: none;
    transition: var(--transition-base);
}

.tooltip:hover::before,
.tooltip:hover::after {
    opacity: 1;
}

/* Professional Badge System */
.badge {
    display: inline-flex;
    align-items: center;
    padding: 4px 12px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    border-radius: var(--radius-full);
    transition: var(--transition-base);
}

.badge-primary {
    background: var(--primary-100);
    color: var(--primary-700);
}

.badge-success {
    background: #dcfce7;
    color: #166534;
}

.badge-warning {
    background: #fef3c7;
    color: #92400e;
}

.badge-info {
    background: #dbeafe;
    color: #1e40af;
}

/* Enterprise-level Status Indicators */
.status-indicator {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 0.875rem;
    font-weight: 500;
}

.status-dot {
    width: 8px;
    height: 8px;
    border-radius: var(--radius-full);
    animation: pulse 2s infinite;
}

.status-active .status-dot {
    background: var(--accent-emerald);
}

.status-pending .status-dot {
    background: var(--accent-amber);
}

.status-closed .status-dot {
    background: var(--gray-400);
    animation: none;
}

/* Professional Form Styling (if needed) */
.form-group {
    margin-bottom: 24px;
}

.form-label {
    display: block;
    font-weight: 600;
    color: var(--gray-700);
    margin-bottom: 8px;
    font-size: 0.875rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.form-input {
    width: 100%;
    padding: 16px;
    border: 2px solid var(--gray-200);
    border-radius: var(--radius-lg);
    font-size: 1rem;
    transition: var(--transition-base);
    background: white;
}

.form-input:focus {
    outline: none;
    border-color: var(--primary-600);
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.form-input:invalid {
    border-color: #dc2626;
}

.form-input:invalid:focus {
    box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
}

/* Enhanced Mobile Touch Targets */
@media (max-width: 768px) {
    .btn {
        min-height: 48px;
        padding: 16px 24px;
    }
    
    .position-card,
    .benefit-card,
    .program-card {
        cursor: pointer;
        -webkit-tap-highlight-color: transparent;
    }
    
    .position-card:active,
    .benefit-card:active,
    .program-card:active {
        transform: scale(0.98);
    }
}
                </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
            </div>
        </div>
    </section>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Join Our Team</h1>
            <p class="hero-subtitle">Build the future with Zenova and make an impact that matters</p>
        </div>
    </section>

    <!-- Why Work at Zenova Section -->
    <section class="why-zenova">
        <div class="container">
            <h2>Why Work at Zenova</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Innovation First</h3>
                    <p>Work on cutting-edge projects that push the boundaries of technology and create meaningful solutions.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Collaborative Culture</h3>
                    <p>Join a diverse team of passionate professionals who support each other's growth and success.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Growth Opportunities</h3>
                    <p>Accelerate your career with mentorship, training programs, and challenging projects that expand your skills.</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3>Work-Life Balance</h3>
                    <p>Enjoy flexible working arrangements, competitive benefits, and a culture that values your well-being.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Open Positions Section -->
    <section class="open-positions">
        <div class="container">
            <h2>Open Positions</h2>
            <div class="positions-container">
                <div class="position-card">
                    <div class="position-header">
                        <h3>Senior Software Engineer</h3>
                        <span class="department">Engineering</span>
                    </div>
                    <div class="position-details">
                        <p class="location"><i class="fas fa-map-marker-alt"></i> Remote / San Francisco</p>
                        <p class="type"><i class="fas fa-clock"></i> Full-time</p>
                    </div>
                    <p class="position-description">
                        Join our engineering team to build scalable solutions and drive technical innovation across our platform.
                    </p>
                    <a href="#apply" class="btn btn-primary">Apply Now</a>
                </div>

                <div class="position-card">
                    <div class="position-header">
                        <h3>Product Manager</h3>
                        <span class="department">Product</span>
                    </div>
                    <div class="position-details">
                        <p class="location"><i class="fas fa-map-marker-alt"></i> New York / Remote</p>
                        <p class="type"><i class="fas fa-clock"></i> Full-time</p>
                    </div>
                    <p class="position-description">
                        Lead product strategy and work cross-functionally to deliver exceptional user experiences.
                    </p>
                    <a href="#apply" class="btn btn-primary">Apply Now</a>
                </div>

                <div class="position-card">
                    <div class="position-header">
                        <h3>UX/UI Designer</h3>
                        <span class="department">Design</span>
                    </div>
                    <div class="position-details">
                        <p class="location"><i class="fas fa-map-marker-alt"></i> Los Angeles / Remote</p>
                        <p class="type"><i class="fas fa-clock"></i> Full-time</p>
                    </div>
                    <p class="position-description">
                        Create intuitive and beautiful user interfaces that delight our customers and drive engagement.
                    </p>
                    <a href="#apply" class="btn btn-primary">Apply Now</a>
                </div>

                <div class="position-card">
                    <div class="position-header">
                        <h3>Marketing Specialist</h3>
                        <span class="department">Marketing</span>
                    </div>
                    <div class="position-details">
                        <p class="location"><i class="fas fa-map-marker-alt"></i> Chicago / Hybrid</p>
                        <p class="type"><i class="fas fa-clock"></i> Full-time</p>
                    </div>
                    <p class="position-description">
                        Drive brand awareness and lead generation through creative campaigns and data-driven strategies.
                    </p>
                    <a href="#apply" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            
            <div class="no-positions-message" style="display: none;">
                <p>We don't have any open positions at the moment, but we're always looking for talented individuals. Feel free to send us your resume for future opportunities!</p>
                <a href="#contact" class="btn btn-secondary">Send Resume</a>
            </div>
        </div>
    </section>

    <!-- Culture & Values Section -->
    <section class="culture-values">
        <div class="container">
            <h2>Culture & Values</h2>
            <div class="values-grid">
                <div class="value-item">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>We encourage creative thinking and bold ideas that challenge the status quo and drive progress.</p>
                </div>
                <div class="value-item">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Integrity</h3>
                    <p>We operate with transparency, honesty, and ethical practices in everything we do.</p>
                </div>
                <div class="value-item">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Passion</h3>
                    <p>We're driven by our love for what we do and our commitment to making a positive impact.</p>
                </div>
                <div class="value-item">
                    <div class="value-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h3>Collaboration</h3>
                    <p>We believe diverse perspectives and teamwork lead to the best solutions and outcomes.</p>
                </div>
                <div class="value-item">
                    <div class="value-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3>Excellence</h3>
                    <p>We strive for the highest quality in our work and continuously seek to improve and grow.</p>
                </div>
                <div class="value-item">
                    <div class="value-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3>Impact</h3>
                    <p>We're committed to creating solutions that make a meaningful difference in people's lives.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Internship & Graduate Program Section -->
    <section class="programs">
        <div class="container">
            <h2>Internship & Graduate Program</h2>
            <div class="programs-content">
                <div class="program-card">
                    <div class="program-header">
                        <h3>Summer Internship Program</h3>
                        <span class="program-duration">10-12 weeks</span>
                    </div>
                    <div class="program-details">
                        <h4>What You'll Get:</h4>
                        <ul>
                            <li>Hands-on experience with real projects</li>
                            <li>Mentorship from senior team members</li>
                            <li>Professional development workshops</li>
                            <li>Networking opportunities with industry leaders</li>
                            <li>Competitive compensation and benefits</li>
                        </ul>
                        <h4>Eligible Candidates:</h4>
                        <ul>
                            <li>Currently pursuing a degree in relevant field</li>
                            <li>Strong academic performance</li>
                            <li>Passion for technology and innovation</li>
                            <li>Excellent communication and teamwork skills</li>
                        </ul>
                    </div>
                    <a href="#apply-intern" class="btn btn-primary">Apply for Internship</a>
                </div>

                <div class="program-card">
                    <div class="program-header">
                        <h3>Graduate Training Program</h3>
                        <span class="program-duration">12 months</span>
                    </div>
                    <div class="program-details">
                        <h4>Program Highlights:</h4>
                        <ul>
                            <li>Structured rotations across different departments</li>
                            <li>Executive mentorship and coaching</li>
                            <li>Leadership development curriculum</li>
                            <li>Fast-track to permanent positions</li>
                            <li>Collaborative cohort experience</li>
                        </ul>
                        <h4>Requirements:</h4>
                        <ul>
                            <li>Recent graduate (within 2 years)</li>
                            <li>Bachelor's or Master's degree</li>
                            <li>Demonstrated leadership potential</li>
                            <li>Strong analytical and problem-solving skills</li>
                        </ul>
                    </div>
                    <a href="#apply-graduate" class="btn btn-primary">Apply for Graduate Program</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Ready to Join Zenova?</h2>
            <p>Take the next step in your career and be part of something extraordinary.</p>
            <div class="cta-buttons">
                <a href="#positions" class="btn btn-primary">View Open Positions</a>
                <a href="mailto:careers@zenova.com" class="btn btn-secondary">Contact HR</a>
            </div>
        </div>
    </section>
</main>

<script>
    // Add any specific JavaScript for careers page
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
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

        // Add animation to cards on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all cards
        document.querySelectorAll('.benefit-card, .position-card, .value-item, .program-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    });
</script>

<?php
// Include footer
include 'footer.php';
?>