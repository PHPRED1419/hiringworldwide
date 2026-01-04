<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta tags to prevent search engine indexing -->
    <meta name="robots" content="noindex, nofollow, noarchive, nosnippet, noodp, noimageindex">
    <meta name="googlebot" content="noindex, nofollow">
    <meta name="bingbot" content="noindex, nofollow">
    <title>Site Under Construction | Coming Soon</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        
        .header {
            margin-bottom: 40px;
        }
        
        .logo {
            font-size: 2.8rem;
            font-weight: 800;
            color: #2c3e50;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }
        
        .logo-icon {
            color: #3498db;
            animation: pulse 2s infinite;
        }
        
        .tagline {
            font-size: 1.2rem;
            color: #7f8c8d;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .main-content {
            background-color: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            max-width: 800px;
            width: 100%;
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
        }
        
        .construction-icon {
            font-size: 5rem;
            color: #f39c12;
            margin-bottom: 25px;
            animation: bounce 3s infinite;
        }
        
        h1 {
            color: #2c3e50;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .description {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .progress-container {
            margin: 40px 0;
        }
        
        .progress-label {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            font-weight: 600;
            color: #2c3e50;
        }
        
        .progress-bar {
            height: 12px;
            background-color: #ecf0f1;
            border-radius: 6px;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #3498db, #2ecc71);
            width: 65%;
            border-radius: 6px;
            animation: progress-animation 2s ease-in-out;
        }
        
        .countdown {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 40px 0;
            flex-wrap: wrap;
        }
        
        .countdown-item {
            background-color: #2c3e50;
            color: white;
            border-radius: 10px;
            padding: 15px 10px;
            min-width: 80px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .countdown-value {
            font-size: 2rem;
            font-weight: 700;
            display: block;
        }
        
        .countdown-label {
            font-size: 0.9rem;
            text-transform: uppercase;
            opacity: 0.8;
        }
        
        .contact-info {
            background-color: #f8f9fa;
            border-radius: 12px;
            padding: 25px;
            margin-top: 30px;
        }
        
        .contact-title {
            font-size: 1.3rem;
            color: #2c3e50;
            margin-bottom: 15px;
        }
        
        .contact-details {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 25px;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #555;
        }
        
        .contact-icon {
            color: #3498db;
            font-size: 1.2rem;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
        }
        
        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background-color: #ecf0f1;
            border-radius: 50%;
            color: #2c3e50;
            font-size: 1.3rem;
            transition: all 0.3s ease;
        }
        
        .social-link:hover {
            background-color: #3498db;
            color: white;
            transform: translateY(-5px);
        }
        
        .seo-notice {
            background-color: #f8f9fa;
            border-left: 4px solid #3498db;
            padding: 15px;
            margin-top: 20px;
            text-align: left;
            font-size: 0.9rem;
            color: #666;
            border-radius: 0 8px 8px 0;
        }
        
        .seo-notice i {
            color: #3498db;
            margin-right: 8px;
        }
        
        .footer {
            margin-top: 40px;
            padding: 20px;
            color: #7f8c8d;
            font-size: 0.9rem;
            border-top: 1px solid #eee;
            width: 100%;
        }
        
        .construction-animation {
            position: absolute;
            bottom: -30px;
            right: -30px;
            font-size: 8rem;
            opacity: 0.05;
            z-index: 0;
            transform: rotate(-15deg);
        }
        
        /* Animations */
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        @keyframes progress-animation {
            0% { width: 0%; }
            100% { width: 65%; }
        }
        
        /* Responsive design */
        @media (max-width: 768px) {
            .main-content {
                padding: 30px 20px;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .construction-icon {
                font-size: 4rem;
            }
            
            .countdown-item {
                min-width: 70px;
                padding: 12px 8px;
            }
            
            .countdown-value {
                font-size: 1.7rem;
            }
            
            .construction-animation {
                font-size: 5rem;
                bottom: -20px;
                right: -20px;
            }
            
            .logo {
                font-size: 2.2rem;
            }
        }
        
        @media (max-width: 480px) {
            .countdown {
                gap: 10px;
            }
            
            .countdown-item {
                min-width: 60px;
                padding: 10px 5px;
            }
            
            .contact-details {
                flex-direction: column;
                gap: 15px;
            }
            
            .logo {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <i class="fas fa-cube logo-icon"></i>
                <span>hiringworldwide.com</span>
            </div>
            <p class="tagline">Building the future of digital experiences</p>
        </div>
        
        <div class="main-content">
            <div class="construction-animation">
                <i class="fas fa-tools"></i>
            </div>
            
            <div class="construction-icon">
                <i class="fas fa-hard-hat"></i>
            </div>
            
            <h1>Website Under Construction</h1>
            
            <p class="description">
                We're working hard to bring you an amazing new website experience. 
                Our team is currently implementing the final touches to ensure everything 
                is perfect for our launch. Thank you for your patience!
            </p>
            
            <div class="seo-notice">
                <i class="fas fa-search"></i>
                <strong>SEO Note:</strong> This page is configured with "noindex, nofollow" meta tags to prevent search engines from indexing it while under construction.
            </div>
            
            <div class="progress-container">
                <div class="progress-label">
                    <span>Development Progress</span>
                    <span>65%</span>
                </div>
                <div class="progress-bar">
                    <div class="progress-fill"></div>
                </div>
            </div>
            
            <div class="countdown">
                <div class="countdown-item">
                    <span class="countdown-value" id="days">00</span>
                    <span class="countdown-label">Days</span>
                </div>
                <div class="countdown-item">
                    <span class="countdown-value" id="hours">00</span>
                    <span class="countdown-label">Hours</span>
                </div>
                <div class="countdown-item">
                    <span class="countdown-value" id="minutes">00</span>
                    <span class="countdown-label">Minutes</span>
                </div>
                <div class="countdown-item">
                    <span class="countdown-value" id="seconds">00</span>
                    <span class="countdown-label">Seconds</span>
                </div>
            </div>
            
            <div class="contact-info">
                <h3 class="contact-title">Get in Touch</h3>
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="fas fa-envelope contact-icon"></i>
                        <span>info@hiringworldwide.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone contact-icon"></i>
                        <span>N/A</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt contact-icon"></i>
                        <span>N/A</span>
                    </div>
                </div>
            </div>
            
            <div class="social-links">
                <a href="#" class="social-link">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-link">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-link">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-link">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
        
        <div class="footer">
            <p>&copy; 2023 hiringworldwide. All Rights Reserved. | Site Under Construction | Page is not indexed by search engines</p>
        </div>
    </div>

    <script>
        // Countdown Timer
        function updateCountdown() {
            // Set launch date (3 months from now)
            const launchDate = new Date();
            launchDate.setMonth(launchDate.getMonth() + 3);
            
            const now = new Date().getTime();
            const timeRemaining = launchDate - now;
            
            // Calculate days, hours, minutes, seconds
            const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);
            
            // Update display
            document.getElementById('days').textContent = days.toString().padStart(2, '0');
            document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
            document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
        }
        
        // Initialize countdown and update every second
        updateCountdown();
        setInterval(updateCountdown, 1000);
        
        // Add some interactivity to the progress bar
        document.querySelector('.progress-bar').addEventListener('mouseover', function() {
            this.style.transform = 'scale(1.02)';
            this.style.transition = 'transform 0.3s ease';
        });
        
        document.querySelector('.progress-bar').addEventListener('mouseout', function() {
            this.style.transform = 'scale(1)';
        });
    </script>
</body>
</html>