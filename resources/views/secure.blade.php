<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Magic Card - Sécurisation de motos</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Google Fonts: Montserrat -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet" />
  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      font-size: 1.1rem;
      background: #F4F7FA;
      opacity: 0;
      transition: opacity 0.5s ease-in-out;
    }
    body.loaded { opacity: 1; }

    /* Navbar */
    .navbar {
      box-shadow: 0 2px 6px rgba(0,0,0,.1);
      background-color: #2C3E50 !important;
    }
    .navbar-nav .nav-link {
      position: relative;
      transition: color 0.3s ease;
      font-weight: 600;
      color: #ECF0F1 !important;
    }
    .navbar-nav .nav-link::after {
      content: "";
      position: absolute;
      width: 0%;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: #E67E22;
      transition: width 0.3s ease;
    }
    .navbar-nav .nav-link:hover::after,
    .navbar-nav .nav-link.active::after { width: 100%; }

    h1 {
      color: #1e5bdd;
      font-weight: 700;
      font-size: 2.8rem;
      margin-bottom: 40px;
      text-align: center;
    }

    .content {
      max-width: 850px;
      margin: auto;
      background: #ffffff;
      padding: 35px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(95, 61, 196, 0.15);
      font-size: 1.15rem;
      line-height: 1.6;
    }
    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }
    .card:hover { transform: translateY(-5px); }
    footer {
      background-color: #2C3E50;
      color: #ECF0F1;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold text-white d-flex align-items-center" href="/">
      <img src="{{ asset('logo.png') }}" alt="Logo Magic Card" width="40" height="40" class="me-2">
      Magic Card
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="/">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="/equipements">Équipements</a></li>
        <li class="nav-item"><a class="nav-link active" href="/secure">Sécurisation de motos</a></li>
        <li class="nav-item"><a class="nav-link" href="/formations">Formations</a></li>
        <li class="nav-item"><a class="nav-link" href="/dons">Dons</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Contenu principal -->
<div class="container my-5" data-aos="fade-up">
  <h1>🔒 Sécurisation de motos au Bénin</h1>
  <div class="content">
    <p>
      Au Bénin, le vol de motos est un problème majeur qui touche des milliers de personnes chaque année.
      Notre projet vise à apporter une solution innovante et fiable pour sécuriser votre moto grâce à la technologie.
    </p>

    <!-- Illustration -->
    <div class="text-center my-4">
      <img src="{{ asset('moto.jpg') }}" 
           alt="Moto sécurisée avec cadenas" 
           class="img-fluid rounded shadow"
           style="max-height: 400px; object-fit: cover;">
    </div>

    <div class="row text-center mt-4">
      <div class="col-md-4 mb-3">
        <div class="card p-3">
          <h5 class="fw-bold">🚨 Alarme intelligente</h5>
          <p>Détection de mouvements suspects et déclenchement immédiat d’une alarme sonore.</p>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card p-3">
          <h5 class="fw-bold">📍 Localisation GPS</h5>
          <p>Suivez votre moto en temps réel depuis votre smartphone, où que vous soyez.</p>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card p-3">
          <h5 class="fw-bold">🔑 Anti-démarrage</h5>
          <p>Empêche tout démarrage sans l’autorisation du propriétaire légitime.</p>
        </div>
      </div>
    </div>

    <div class="text-center mt-4">
      <a href="/contact" class="btn btn-primary btn-lg px-4 rounded-pill shadow">
        📞 Nous contacter
      </a>
    </div>
  </div>
</div>

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

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init({ duration: 800, once: true });

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

  // 🔄 Force le rechargement quand on revient en arrière
  window.addEventListener("pageshow", function (event) {
    if (event.persisted) {
      window.location.reload();
    }
  });
</script>

</body>
</html>
