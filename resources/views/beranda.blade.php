<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GatVent Events</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0f1630;
            color: white;
            font-family: Arial, sans-serif;
        }

        /* Navbar */
        .navbar {
            background-color: #1DA1F2;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .navbar-brand span {
            color: white;
        }

        /* Hero Section */
        .hero {
            background: url('hero-image.jpg') no-repeat center center/cover;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .hero h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        /* Events Section */
        .events {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .card-img {
            filter: brightness(0.7);
            transition: 0.3s;
        }

        .card:hover .card-img {
            filter: brightness(0.5);
        }

        /* Footer */
        .footer {
            background: #1a1a1a;
            color: #fff;
        }

        .footer ul {
            list-style: none;
            padding: 0;
        }

        .footer ul li {
            margin: 5px 0;
        }

        .footer ul li a {
            color: #fff;
            text-decoration: none;
        }

        /* Miscellaneous */
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>Gat</strong><span>Vent</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.products.tampilevents') }}">Events</a>
                    </li>


                </ul>

            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero text-center">
        <div class="container">
            <h1>Find awesome event<br>music here!</h1>
            <img src="" alt="">
        </div>
    </header>

    <!-- Events Section -->
    <section class="events py-5">
        <div class="container">
            <h2 class="text-white mb-4">Events</h2>
            <div class="row">
                <!-- Event 1 -->
                <div class="col-md-6 mb-4">
                    <div class="card bg-dark text-white border-0">
                        <!-- Gambar di bagian card -->
                        <img src="{{ asset('storage/images/lany.jpeg') }}" class="card-img" alt="Lany">

                        <!-- Overlay untuk teks di atas gambar -->
                        <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
                            <h5 class="card-title">LANY</h5>
                            <p class="card-text">LANY Live Concert<br>10 February 2025<br>Stadion Utama</p>
                            <button class="btn btn-primary me-2">Buy Ticket</button>
                            <button class="btn btn-outline-light">More Info</button>
                        </div>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="col-md-6 mb-4">
                    <div class="card bg-dark text-white border-0">
                        <!-- Gambar di bagian card -->
                        <img src="{{ asset('storage/images/Dewa.jpeg') }}" class="card-img" alt="Dewa">

                        <!-- Overlay untuk teks di atas gambar -->
                        <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
                            <h5 class="card-title">DEWA 19</h5>
                            <p class="card-text">DEWA 19 featuring All Stars 2.0<br>18 January 2025<br>Gelora Bung Karno (GBK)</p>
                            <button class="btn btn-primary me-2">Buy Ticket</button>
                            <button class="btn btn-outline-light">More Info</button>
                        </div>
                    </div>
                </div>

            <a href="#" class="text-white">View All &gt;&gt;</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-4">
        <div class="container text-center text-white">
            <div class="row">
                <div class="col-md-4">
                    <p>GatVent &copy; 2024 Copyright Reserved</p>
                </div>
                <div class="col-md-4">
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Blog</a></li>
                        <li><a href="#" class="text-white">Public With Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Contact Us</a></li>
                        <li><a href="#" class="text-white">Helps</a></li>
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
