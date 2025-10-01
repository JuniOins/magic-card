<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Magic Card - Accueil</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet" />

  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background: #f8f9fa;
      color: white;
    }

    /* Fond image en arrière-plan */
    .background-container {
      position: fixed;
      top: 0; left: 0; right: 0; bottom: 0;
      background-image: url('pexels-alexander-pollinger-137430820-10261121.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      z-index: -2;
    }
    /* Overlay sombre pour lisibilité */
    .background-overlay {
      position: fixed;
      top: 0; left: 0; right: 0; bottom: 0;
      background-color: rgba(0,0,0,0.5);
      z-index: -1;
    }

    .navbar {
      box-shadow: 0 2px 4px rgba(0,0,0,.1);
      background-color: #fff !important;
      color: #444;
    }
    .navbar-nav .nav-link {
      position: relative;
      transition: color 0.3s ease;
      font-weight: 600;
      color: #444 !important;
    }
    .navbar-nav .nav-link::after {
      content: "";
      position: absolute;
      width: 0%;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: #6f42c1;
      transition: width 0.3s ease;
    }
    .navbar-nav .nav-link:hover::after,
    .navbar-nav .nav-link.active::after {
      width: 100%;
    }

    .btn-primary {
      background: #0767f8;
      border: none;
      transition: background-color 0.3s ease, transform 0.2s ease;
      font-weight: 600;
    }
    .btn-primary:hover {
      background-color: #324ca3;
      transform: scale(1.05);
    }

    /* Section hero */
    .hero {
      background: rgba(102, 126, 234, 0.6);
      color: white;
      padding: 80px 20px;
      text-align: center;
      margin: 50px auto 50px auto;
      border-radius: 12px;
      max-width: 900px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    }
    .hero h1 {
      font-weight: 700;
      font-size: 3rem;
      margin-bottom: 20px;
    }
    .hero p {
      font-weight: 400;
      font-size: 1.25rem;
      margin-bottom: 30px;
    }

    footer {
      background-color: #222;
    }
  </style>
</head>
<body>

  <div class="background-container"></div>
  <div class="background-overlay"></div>

  <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
      <!-- LOGO -->
      <a class="navbar-brand fw-bold d-flex align-items-center" href="/">
        <img src="{{ asset('logo.png') }}" alt="Logo Magic Card" width="40" height="40" class="me-2">
        Magic Card
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="/">Accueil</a></li>
          <li class="nav-item"><a class="nav-link" href="/equipements">Équipements</a></li>
          <li class="nav-item"><a class="nav-link" href="/secure">Sécurisation de motos</a></li>
          <li class="nav-item"><a class="nav-link" href="/formations">Formations</a></li>
          <li class="nav-item"><a class="nav-link" href="/dons">Dons</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Section Hero -->
  <section class="hero" data-aos="fade-down">
    <div class="container">
      <h1>Bienvenue chez Magic Card</h1>
      <p>
        Votre destination pour des équipements électroniques de haute qualité et 
        des solutions innovantes pour la <strong>sécurisation des motos au Bénin</strong>.  
        Nous vous proposons non seulement des produits électroniques fiables, mais aussi 
        des dispositifs modernes pour lutter contre le vol de motos : 
        systèmes GPS, alarmes intelligentes et verrous électroniques.
      </p>
      <a href="/equipements" class="btn btn-primary btn-lg shadow">Découvrez nos produits</a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-4 mt-5">
    <div class="container">
      <h5 class="mb-3">&copy; 2025 Magic Card - Sécurisation & équipements électroniques</h5>
      <p>
        📍 Nous sommes situés à <strong>Kpota (Abomey-Calavi)</strong>,<br>
        dans la von juste à côté de la station <strong>Ewell</strong>.
      </p>
      <p>
        📞 Contact : <a href="tel:+2290154804096" class="text-warning">+229 01 54 80 40 96</a>
      </p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init({
      duration: 800,
      once: true
    });

    window.addEventListener('DOMContentLoaded', () => {
      document.body.classList.add('loaded');
    });

    document.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', e => {
        const href = link.getAttribute('href');
        if (href && !href.startsWith('#') && !href.startsWith('mailto:') && !href.startsWith('javascript:')) {
          e.preventDefault();
          document.body.classList.remove('loaded');
          setTimeout(() => window.location.href = href, 500);
        }
      });
    });
  </script>

</body>
</html>
