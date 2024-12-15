<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Real Estate Management System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <style>
            body {
                background: linear-gradient(to bottom right, #f8f9fa, #e9ecef);
                font-family: 'Figtree', sans-serif;
            }
            .navbar {
                background-color: #198754;
            }
            .navbar-brand {
                font-weight: bold;
                color: #fff !important;
            }
            .nav-link {
                color: #fff !important;
                transition: color 0.3s;
            }
            .nav-link:hover {
                color: #d4d4d4 !important;
            }
            .hero {
                height: 70vh;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                background: url('https://source.unsplash.com/1600x900/?real-estate,building') no-repeat center center/cover;
                color: #343a40;
            }
            .hero h1 {
                font-size: 2.5rem;
                font-weight: 700;
                text-shadow: 1px 1px 4px rgba(255, 255, 255, 0.9);
            }
            .hero p {
                font-size: 1.2rem;
                margin-top: 1rem;
            }
            .features {
                padding: 1rem 0;
            }
            .feature-box {
                background: #fff;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                padding: 1rem;
                text-align: center;
                transition: transform 0.3s;
            }
            .feature-box:hover {
                transform: translateY(-10px);
            }
            .feature-box i {
                font-size: 2.5rem;
                color: #198754;
                margin-bottom: 0.8rem;
            }
            .footer {
                background-color: #343a40;
                color: #adb5bd;
                padding: 0.8rem 0;
                text-align: center;
            }
            .footer a {
                color: #fff;
                text-decoration: none;
            }
            .footer a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">Real Estate Pro</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="hero">
            <div>
                <h1>Find Your Dream Property</h1>
                <p>Manage properties, agents, and clients all in one platform.</p>
                <a href="#" class="btn btn-success btn-lg mt-3">Get Started</a>
            </div>
        </div>

        <!-- Features Section -->
        <section class="features container mt-4">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-home"></i>
                        <h4>Manage Properties</h4>
                        <p>Easily add, edit, and list properties for sale or rent.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-user-tie"></i>
                        <h4>Agent Collaboration</h4>
                        <p>Work with agents to find the best deals for your clients.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fas fa-chart-line"></i>
                        <h4>Analytics</h4>
                        <p>Track performance and get insights with detailed analytics.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <p>&copy; 2024 Real Estate Pro. All rights reserved.</p>
                <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
