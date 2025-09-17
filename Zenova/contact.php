<?php
// Include header
include 'header.php';
?>
                <link rel="stylesheet" href="style.css">
                <!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>
    /* Contact Page Styles */

/* Reset and Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #fff;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Typography */
h1 {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

h2 {
    font-size: 2.5rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    color: #2c3e50;
}

h3 {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    color: #34495e;
}

h4 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 0.25rem;
    color: #2c3e50;
}

p {
    margin-bottom: 1rem;
    color: #666;
}

/* Buttons */
.btn {
    display: inline-block;
    padding: 12px 24px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    text-align: center;
    transition: all 0.3s ease;
    cursor: pointer;
    border: none;
    font-size: 1rem;
    line-height: 1.5;
}

.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
}

.btn-secondary {
    background: white;
    color: #667eea;
    border: 2px solid #667eea;
}

.btn-secondary:hover {
    background: #667eea;
    color: white;
    transform: translateY(-2px);
}

.btn-sm {
    padding: 8px 16px;
    font-size: 0.875rem;
}

/* Contact Page Specific Styles */

/* Hero Section */
.contact-hero {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 100px 0;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.contact-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="1" fill="white" opacity="0.1"/><circle cx="10" cy="60" r="1" fill="white" opacity="0.1"/><circle cx="90" cy="30" r="1" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
    opacity: 0.3;
}

.contact-hero h1 {
    position: relative;
    z-index: 1;
    animation: fadeInUp 0.8s ease;
}

.hero-subtitle {
    font-size: 1.25rem;
    opacity: 0.9;
    position: relative;
    z-index: 1;
    animation: fadeInUp 0.8s ease 0.2s both;
}

/* Main Contact Section */
.contact-main {
    padding: 80px 0;
    background: #f8f9fa;
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: start;
}

/* Contact Info */
.contact-info {
    background: white;
    padding: 40px;
    border-radius: 16px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    height: fit-content;
}

.contact-intro {
    font-size: 1.1rem;
    margin-bottom: 2rem;
    color: #666;
}

.contact-item {
    display: flex;
    margin-bottom: 2.5rem;
    padding-bottom: 2rem;
    border-bottom: 1px solid #eee;
}

.contact-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.contact-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    flex-shrink: 0;
}

.contact-icon i {
    font-size: 1.5rem;
    color: white;
}

.contact-details h3 {
    margin-bottom: 0.5rem;
    color: #2c3e50;
}

.contact-details p {
    margin-bottom: 0;
    line-height: 1.6;
}

.contact-details a {
    color: #667eea;
    text-decoration: none;
    transition: color 0.3s ease;
}

.contact-details a:hover {
    color: #764ba2;
}

/* Contact Form */
.contact-form-section {
    background: white;
    padding: 40px;
    border-radius: 16px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
}

.form-intro {
    font-size: 1.1rem;
    margin-bottom: 2rem;
    color: #666;
}

.contact-form {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: #2c3e50;
}

.form-group input,
.form-group select,
.form-group textarea {
    padding: 12px 16px;
    border: 2px solid #e1e8ed;
    border-radius: 8px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background: white;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
}

.form-group input.error,
.form-group select.error,
.form-group textarea.error {
    border-color: #e74c3c;
    box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.1);
}

.form-group textarea {
    resize: vertical;
    min-height: 120px;
}

/* Checkbox Styles */
.checkbox-group {
    flex-direction: row;
    align-items: flex-start;
}

.checkbox-label {
    display: flex;
    align-items: flex-start;
    cursor: pointer;
    font-size: 0.95rem;
    line-height: 1.5;
    margin-bottom: 0;
}

.checkbox-label input[type="checkbox"] {
    display: none;
}

.checkmark {
    width: 20px;
    height: 20px;
    border: 2px solid #e1e8ed;
    border-radius: 4px;
    margin-right: 12px;
    flex-shrink: 0;
    position: relative;
    transition: all 0.3s ease;
    margin-top: 2px;
}

.checkbox-label input[type="checkbox"]:checked + .checkmark {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-color: #667eea;
}

.checkbox-label input[type="checkbox"]:checked + .checkmark::after {
    content: '✓';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 0.8rem;
    font-weight: bold;
}

.checkbox-label a {
    color: #667eea;
    text-decoration: none;
}

.checkbox-label a:hover {
    text-decoration: underline;
}

/* Submit Button */
.submit-btn {
    margin-top: 1rem;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 16px 32px;
    font-size: 1.1rem;
    position: relative;
    overflow: hidden;
}

.submit-btn:disabled {
    opacity: 0.7;
    cursor: not-allowed;
}

.submit-btn:not(:disabled):hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 35px rgba(102, 126, 234, 0.3);
}

/* Form Messages */
.form-message {
    margin-top: 1.5rem;
}

.alert {
    padding: 16px 20px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.alert-success {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.alert-error {
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

/* Map Section */
.map-section {
    padding: 80px 0 0 0;
    background: white;
}

.map-section h2 {
    text-align: center;
    margin-bottom: 1rem;
}

.map-intro {
    text-align: center;
    font-size: 1.1rem;
    margin-bottom: 3rem;
    color: #666;
}

.map-container {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
    margin-bottom: -50px;
}

.map-container iframe {
    width: 100%;
    height: 450px;
    filter: grayscale(20%);
    transition: filter 0.3s ease;
}

.map-container:hover iframe {
    filter: none;
}

.map-overlay {
    position: absolute;
    top: 20px;
    left: 20px;
    background: white;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    max-width: 300px;
}

.map-overlay h3 {
    margin-bottom: 0.5rem;
    color: #2c3e50;
}

.map-overlay p {
    margin-bottom: 1rem;
    font-size: 0.9rem;
}

/* Social Contact Section */
.social-contact {
    padding: 120px 0 80px 0;
    background: #f8f9fa;
}

.social-contact h2 {
    text-align: center;
    margin-bottom: 1rem;
}

.social-intro {
    text-align: center;
    font-size: 1.1rem;
    margin-bottom: 3rem;
    color: #666;
}

.social-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
}

/* Additional Contact Methods */
.additional-contact {
    background: white;
    padding: 40px;
    border-radius: 16px;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
}

.contact-methods {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.contact-method {
    display: flex;
    align-items: center;
    padding: 20px;
    border: 2px solid #f1f3f4;
    border-radius: 12px;
    text-decoration: none;
    transition: all 0.3s ease;
    color: inherit;
}

.contact-method:hover {
    border-color: #667eea;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.1);
}

.contact-method i {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    font-size: 1.2rem;
    color: white;
    flex-shrink: 0;
}

.contact-method h4 {
    margin-bottom: 0.25rem;
    color: #2c3e50;
}

.contact-method p {
    margin: 0;
    font-size: 0.9rem;
    color: #666;
}

/* CTA Section */
.contact-cta {
    padding: 80px 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    text-align: center;
}

.contact-cta h2 {
    color: white;
    margin-bottom: 1rem;
}

.contact-cta p {
    font-size: 1.1rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.cta-buttons .btn-secondary {
    background: rgba(255, 255, 255, 0.1);
    color: white;
    border-color: white;
}

.cta-buttons .btn-secondary:hover {
    background: white;
    color: #667eea;
}

/* Animations */
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

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.05);
    }
}

/* Responsive Design */
@media (max-width: 1024px) {
    .container {
        padding: 0 15px;
    }
    
    .contact-grid {
        gap: 40px;
    }
    
    .social-grid {
        gap: 40px;
    }
}

@media (max-width: 768px) {
    h1 {
        font-size: 2.5rem;
    }
    
    h2 {
        font-size: 2rem;
    }
    
    .contact-hero {
        padding: 60px 0;
    }
    
    .contact-main,
    .map-section,
    .social-contact,
    .contact-cta {
        padding: 60px 0;
    }
    
    .social-contact {
        padding: 80px 0 60px 0;
    }
    
    .contact-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .social-grid {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .contact-info,
    .contact-form-section,
    .social-links,
    .additional-contact {
        padding: 30px 20px;
    }
    
    .form-row {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .social-icons {
        grid-template-columns: 1fr;
    }
    
    .map-overlay {
        position: static;
        margin: 20px;
        max-width: none;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .cta-buttons .btn {
        width: 200px;
    }
}

@media (max-width: 480px) {
    h1 {
        font-size: 2rem;
    }
    
    .hero-subtitle {
        font-size: 1.1rem;
    }
    
    .contact-item {
        flex-direction: column;
        text-align: center;
    }
    
    .contact-icon {
        margin: 0 auto 15px auto;
    }
    
    .contact-method {
        flex-direction: column;
        text-align: center;
    }
    
    .contact-method i {
        margin: 0 0 15px 0;
    }
    
    .btn {
        width: 100%;
        max-width: 250px;
    }
}

/* Print Styles */
@media print {
    .contact-hero,
    .map-section,
    .social-contact,
    .contact-cta {
        display: none;
    }
    
    .contact-main {
        padding: 20px 0;
        background: white;
    }
    
    .contact-grid {
        display: block;
    }
    
    .contact-form-section {
        display: none;
    }
}
</style>
<main class="contact-page">
    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <h1>Get in Touch</h1>
            <p class="hero-subtitle">Ready to transform your business? Let's start the conversation.</p>
        </div>
    </section>

    <!-- Main Contact Section -->
    <section class="contact-main">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Information -->
                <div class="contact-info">
                    <h2>Contact Information</h2>
                    <p class="contact-intro">We're here to help you succeed. Reach out to us through any of the channels below.</p>
                    
                    <!-- Office Address -->
                    <div class="contact-item">
                        <div class="contact-icon">
                           <i class="bi bi-building"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Office Address</h3>
                            <p>123 Innovation Drive<br>
                            Tech Hub, Suite 500<br>
                            San Francisco, CA 94105<br>
                            United States</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-envelope-at"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Email Addresses</h3>
                            <p>
                                <strong>General Inquiries:</strong><br>
                                <a href="mailto:info@zenova.com">info@zenova.com</a><br><br>
                                <strong>Business & Partnerships:</strong><br>
                                <a href="mailto:business@zenova.com">business@zenova.com</a><br><br>
                                <strong>Investor Relations:</strong><br>
                                <a href="mailto:investors@zenova.com">investors@zenova.com</a><br><br>
                                <strong>Support:</strong><br>
                                <a href="mailto:support@zenova.com">support@zenova.com</a>
                            </p>
                        </div>
                    </div>

                    <!-- Phone Numbers -->
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Phone Numbers</h3>
                            <p>
                                <strong>Main Office:</strong><br>
                                <a href="tel:+1-555-123-4567">+1 (555) 123-4567</a><br><br>
                                <strong>Business Development:</strong><br>
                                <a href="tel:+1-555-123-4568">+1 (555) 123-4568</a><br><br>
                                <strong>Investor Line:</strong><br>
                                <a href="tel:+1-555-123-4569">+1 (555) 123-4569</a><br><br>
                                <strong>Support Hotline:</strong><br>
                                <a href="tel:+1-555-123-4570">+1 (555) 123-4570</a>
                            </p>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Business Hours</h3>
                            <p>
                                <strong>Monday - Friday:</strong> 9:00 AM - 6:00 PM PST<br>
                                <strong>Saturday:</strong> 10:00 AM - 4:00 PM PST<br>
                                <strong>Sunday:</strong> Closed<br><br>
                                <em>Emergency support available 24/7</em>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-section">
                    <h2>Send us a Message</h2>
                    <p class="form-intro">Fill out the form below and we'll get back to you within 24 hours.</p>
                    
                    <form class="contact-form" id="contactForm" method="POST" action="process-contact.php">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name *</label>
                                <input type="text" id="firstName" name="first_name" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name *</label>
                                <input type="text" id="lastName" name="last_name" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="company">Company/Organization</label>
                            <input type="text" id="company" name="company">
                        </div>

                        <div class="form-group">
                            <label for="inquiryType">Inquiry Type *</label>
                            <select id="inquiryType" name="inquiry_type" required>
                                <option value="">Select an option</option>
                                <option value="general">General Inquiry</option>
                                <option value="business">Business Partnership</option>
                                <option value="investor">Investor Relations</option>
                                <option value="support">Technical Support</option>
                                <option value="media">Media & Press</option>
                                <option value="careers">Career Opportunities</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="6" required placeholder="Please describe your inquiry in detail..."></textarea>
                        </div>

                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="newsletter" value="yes">
                                <span class="checkmark"></span>
                                Subscribe to our newsletter for updates and insights
                            </label>
                        </div>

                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="privacy" required>
                                <span class="checkmark"></span>
                                I agree to the <a href="privacy.php" target="_blank">Privacy Policy</a> and <a href="terms.php" target="_blank">Terms of Service</a> *
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary submit-btn">
                            <span class="btn-text">Send Message</span>
                            <span class="btn-loader" style="display: none;">
                                <i class="fas fa-spinner fa-spin"></i> Sending...
                            </span>
                        </button>
                    </form>

                    <!-- Success/Error Messages -->
                    <div id="formMessage" class="form-message" style="display: none;"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <h2>Find Our Office</h2>
            <p class="map-intro">Visit us at our San Francisco headquarters in the heart of the tech district.</p>
        </div>
        
        <div class="map-container">
            <!-- Google Maps Embed -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.019284279682!2d-122.39773868468238!3d37.79139827975825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085807c3f2b0b35%3A0x1b8f8a0f4e2e6b2b!2s123%20Mission%20St%2C%20San%20Francisco%2C%20CA%2094105%2C%20USA!5e0!3m2!1sen!2sus!4v1644123456789!5m2!1sen!2sus" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                title="Zenova Office Location">
            </iframe>
            
            <!-- Map Overlay Info -->
            <div class="map-overlay">
                <div class="map-info">
                    <h3>Zenova Headquarters</h3>
                    <p>123 Innovation Drive, Suite 500<br>San Francisco, CA 94105</p>
                    <a href="https://maps.google.com/?q=123+Innovation+Drive,+San+Francisco,+CA" target="_blank" class="btn btn-secondary btn-sm">
                        <i class="fas fa-directions"></i> Get Directions
                    </a>
                </div>
            </div>
        </div>
    </section>

<!-- Social Links & Additional Contact -->
<section class="social-contact">
    <div class="container">
        <h2>Connect With Us</h2>
        <p class="social-intro">Follow us on social media and stay updated with our latest news and insights.</p>
        
        <div class="social-links">
            <h3>Social Media</h3>
            <div class="social-icons">
                <a href="https://linkedin.com/company/zenova" target="_blank" class="social-link linkedin" aria-label="LinkedIn" title="LinkedIn">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="https://twitter.com/zenova" target="_blank" class="social-link twitter" aria-label="Twitter" title="Twitter">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="https://facebook.com/zenova" target="_blank" class="social-link facebook" aria-label="Facebook" title="Facebook">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://instagram.com/zenova" target="_blank" class="social-link instagram" aria-label="Instagram" title="Instagram">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="https://youtube.com/zenova" target="_blank" class="social-link youtube" aria-label="YouTube" title="YouTube">
                    <i class="bi bi-youtube"></i>
                </a>
                <a href="https://github.com/zenova" target="_blank" class="social-link github" aria-label="GitHub" title="GitHub">
                    <i class="bi bi-github"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CSS Enhancements -->
<style>
.social-contact {
    text-align: center;
    padding: 3rem 1rem;
    background: #f9f9f9;
}

.social-intro {
    color: #555;
    margin-bottom: 2rem;
}

.social-links {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
    margin-top: 1rem;
}

.social-link {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 55px;
    height: 55px;
    border-radius: 50%;
    font-size: 1.5rem;
    color: #fff;
    transition: all 0.3s ease;
}

.social-link.linkedin { background: #0A66C2; }
.social-link.twitter { background: #1DA1F2; }
.social-link.facebook { background: #1877F2; }
.social-link.instagram { background: radial-gradient(circle at 30% 30%, #feda75, #d62976, #4f5bd5); }
.social-link.youtube { background: #FF0000; }
.social-link.github { background: #171515; }

.social-link:hover {
    transform: translateY(-4px) scale(1.1);
    box-shadow: 0 6px 12px rgba(0,0,0,0.15);
}
</style>

                <!-- Additional Contact Methods -->
                <div class="additional-contact">
                    <h3>Other Ways to Reach Us</h3>
                    <div class="contact-methods">
                        <a href="https://calendly.com/zenova" target="_blank" class="contact-method">
                            <i class="fas fa-calendar-alt"></i>
                            <div>
                                <h4>Schedule a Meeting</h4>
                                <p>Book a consultation with our team</p>
                            </div>
                        </a>
                        
                        <a href="mailto:press@zenova.com" class="contact-method">
                            <i class="fas fa-newspaper"></i>
                            <div>
                                <h4>Press Inquiries</h4>
                                <p>Media and press relations</p>
                            </div>
                        </a>
                        
                        <a href="https://zenova.com/help" target="_blank" class="contact-method">
                            <i class="fas fa-question-circle"></i>
                            <div>
                                <h4>Help Center</h4>
                                <p>Self-service support and FAQs</p>
                            </div>
                        </a>
                        
                        <a href="https://status.zenova.com" target="_blank" class="contact-method">
                            <i class="fas fa-server"></i>
                            <div>
                                <h4>System Status</h4>
                                <p>Check our service status</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="contact-cta">
        <div class="container">
            <h2>Ready to Get Started?</h2>
            <p>Join thousands of satisfied customers who trust Zenova with their business needs.</p>
            <div class="cta-buttons">
                <a href="#contactForm" class="btn btn-primary">Send Message</a>
                <a href="tel:+1-555-123-4567" class="btn btn-secondary">Call Now</a>
            </div>
        </div>
    </section>
</main>

<script>
    // Contact Form Handler
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contactForm');
        const submitBtn = form.querySelector('.submit-btn');
        const btnText = submitBtn.querySelector('.btn-text');
        const btnLoader = submitBtn.querySelector('.btn-loader');
        const formMessage = document.getElementById('formMessage');

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading state
            btnText.style.display = 'none';
            btnLoader.style.display = 'inline-block';
            submitBtn.disabled = true;
            
            // Simulate form submission (replace with actual AJAX call)
            const formData = new FormData(form);
            
            // Replace this with your actual form submission logic
            setTimeout(() => {
                // Reset button state
                btnText.style.display = 'inline-block';
                btnLoader.style.display = 'none';
                submitBtn.disabled = false;
                
                // Show success message
                formMessage.innerHTML = `
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i>
                        Thank you for your message! We'll get back to you within 24 hours.
                    </div>
                `;
                formMessage.style.display = 'block';
                
                // Reset form
                form.reset();
                
                // Hide message after 5 seconds
                setTimeout(() => {
                    formMessage.style.display = 'none';
                }, 5000);
                
            }, 2000);
        });

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

        // Form validation enhancement
        const inputs = form.querySelectorAll('input, textarea, select');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                validateField(this);
            });
        });

        function validateField(field) {
            const value = field.value.trim();
            const isRequired = field.hasAttribute('required');
            
            // Remove existing error states
            field.classList.remove('error');
            
            if (isRequired && !value) {
                field.classList.add('error');
                return false;
            }
            
            // Email validation
            if (field.type === 'email' && value) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(value)) {
                    field.classList.add('error');
                    return false;
                }
            }
            
            return true;
        }
    });

    // Map interaction
    const mapContainer = document.querySelector('.map-container');
    if (mapContainer) {
        mapContainer.addEventListener('mouseenter', function() {
            this.style.filter = 'none';
        });
    }
</script>

<?php
// Include footer
include 'footer.php';
?>