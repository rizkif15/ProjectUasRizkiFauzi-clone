<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - Dataku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #000; /* Background hitam */
            color: #fff; /* Warna teks putih */
        }
        .hero-section {
            background: #000;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .features-section {
            padding: 60px 0;
            background-color: #111; /* Background abu-abu sangat gelap */
            color: #ddd; /* Warna teks abu-abu terang */
        }
        .feature-icon {
            font-size: 3rem;
            color: #17a2b8;
        }
        .navbar-dark .navbar-brand,
        .navbar-dark .navbar-nav .nav-link {
            color: #fff;
        }
        .navbar-dark .navbar-nav .nav-link:hover {
            color: #17a2b8;
        }
        .btn-outline-light {
            color: #fff;
            border-color: #fff;
        }
        .btn-outline-light:hover {
            background-color: #fff;
            color: #000;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Dataku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <div>
            <h1 class="display-3">Selamat datang di Dataku</h1>
            <p class="lead">Platform pengelolaan data barang berbasis web.</p>
            <a href="{{route('profile.login')}}" class="btn btn-primary btn-lg">Login</a>
            <a href="{{route('profile.register')}}" class="btn btn-outline-light btn-lg">Sign Up</a>
        </div>
    </div>

    <!-- Features Section -->
    <div id="features" class="features-section text-center">
        <div class="container">
            <h2 class="mb-5">Features</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-icon mb-3">
                        <i class="bi bi-speedometer2"></i>
                    </div>
                    <h4>Fast Performance</h4>
                    <p>Data processing at lightning speed.</p>
                </div>
                <div class="col-md-4">
                    <div class="feature-icon mb-3">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    <h4>Secure</h4>
                    <p>Top-notch security for your data.</p>
                </div>
                <div class="col-md-4">
                    <div class="feature-icon mb-3">
                        <i class="bi bi-cloud-arrow-up"></i>
                    </div>
                    <h4>Cloud-Based</h4>
                    <p>Access your data from anywhere.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer id="contact" class="bg-dark text-white text-center py-4">
        <div class="container">
            <p>&copy; 2024 Dataku. All Rights Reserved.</p>
            <p>Contact us: <a href="mailto:rizkifauzi1512@gmail.com" class="text-white">rizkifauzi1512@gmail.com</a></p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
