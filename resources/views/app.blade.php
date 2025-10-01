<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Magic Card - @yield('title')</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f8f9fa;
        }
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
        }
        .btn-primary {
            background: #6f42c1;
            border: none;
        }
        .btn-primary:hover {
            background: #5a32a3;
        }
        footer {
            background: #343a40;
        }
        .card:hover {
            box-shadow: 0 8px 20px rgba(111, 66, 193, 0.4);
            transform: translateY(-5px);
            transition: all 0.3s ease-in-out;
        }
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
            margin-bottom: 50px;
            border-radius: 8px;
        }
        .feature-icon {
            font-size: 48px;
            color: #6f42c1;
            margin-bottom: 15px;
        }
    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">Magic Card</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto fw-semibold">
                <li class="nav-item"><a class="nav-link" href="/">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="/equipements">Équipements</a></li>
                <li class="nav-item"><a class="nav-link" href="/secure">Sécurisation de Motos</a></li>
                <li class="nav-item"><a class="nav-link" href="/formations">Formations</a></li>
                <li class="nav-item"><a class="nav-link" href="/dons">Dons</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container my-5">
    @yield('content')
</div>

<footer class="text-white text-center py-4 mt-5">
    &copy; {{ date('Y') }} Magic Card - Vente d'équipements électroniques
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
