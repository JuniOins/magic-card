<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Magic Card - Formations & Coaching</title>

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
      font-size: 3rem;
      margin-bottom: 40px;
      text-align: center;
    }

    .content {
      max-width: 700px;
      margin: auto;
      background: #ffffff;
      padding: 35px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(95, 61, 196, 0.15);
      font-size: 1.15rem;
      line-height: 1.6;
    }
    ul {
      list-style-type: disc;
      padding-left: 25px;
      font-weight: 500;
      font-size: 1.15rem;
    }

    /* Footer */
    footer {
      background-color: #2C3E50;
      color: #ECF0F1;
    }
  </style>
</head>
<body>

<!-- Navbar avec logo intégré -->
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
        <li class="nav-item"><a class="nav-link" href="/secure">Sécurisation de motos</a></li>
        <li class="nav-item"><a class="nav-link active" href="/formations">Formations</a></li>
        <li class="nav-item"><a class="nav-link" href="/dons">Dons</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Contenu principal -->
<div class="container my-5" data-aos="fade-up">
  <h1>Formations & Coaching</h1>
  <div class="content">
    <p>Apprenez à utiliser, entretenir et réparer vos appareils électroniques avec nos formations pratiques et interactives.</p>
    <ul>
      <li>Initiation à l’électronique</li>
      <li>Programmation Arduino</li>
      <li>Réparation de téléphones</li>
      <li>Ateliers pratiques avec nos experts</li>
    </ul>
  </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4 mt-5">
  <div class="container">
    <h5 class="mb-3">&copy; 2025 Magic Card - Sécurisation & d'équipements électroniques</h5>
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

  // ✅ Script pour recharger la page si retour arrière
  window.addEventListener("pageshow", function (event) {
    if (event.persisted) {
      window.location.reload();
    }
  });
</script>

</body>
</html>
