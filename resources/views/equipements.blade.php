<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Magic Card - Équipements</title>

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

    /* Cartes */
    .card {
      border: none;
      border-radius: 12px;
      background: #ffffff;
      transition: all 0.3s ease-in-out;
      height: 100%;
      display: flex;
      flex-direction: column;
    }

    /* Images spécifiques */
    .multimetre-img,
    .oscilloscope-img,
    .kit-arduino-img {
      width: 100%;
      height: auto;
      object-fit: contain;
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
      background-color: #f4f4f4;
    }

    /* Autres images */
    .card-img-top:not(.multimetre-img):not(.oscilloscope-img):not(.kit-arduino-img) {
      object-fit: cover;
      height: 200px;
    }

    .card-body {
      flex: 1 1 auto;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .btn-primary {
      background-color: #E67E22;
      border: none;
      color: #ffffff;
      font-weight: 600;
      border-radius: 8px;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }
    .btn-primary:hover {
      background-color: #D35400;
      transform: scale(1.05);
    }

    footer {
      background-color: #2C3E50;
      color: #ECF0F1;
    }
  </style>
</head>
<body>

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
        <li class="nav-item"><a class="nav-link active" href="/equipements">Équipements</a></li>
        <li class="nav-item"><a class="nav-link" href="/secure">Sécurisation de motos</a></li>
        <li class="nav-item"><a class="nav-link" href="/formations">Formations</a></li>
        <li class="nav-item"><a class="nav-link" href="/dons">Dons</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container my-5">
  <h1>Nos Équipements</h1>
  <div class="row g-4">
    <!-- Multimètre -->
    <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="100">
      <div class="card shadow-sm w-100">
        <img src="multimetre_numerique.jpg" class="card-img-top multimetre-img" alt="Multimètre numérique" />
        <div class="card-body">
          <div>
            <h5 class="card-title">Multimètre numérique</h5>
            <p class="card-text">Multimètre précis pour toutes vos mesures électriques.</p>
          </div>
          <p class="fw-bold text-primary">Prix : 15 000 FCFA</p>
          <a href="{{ url('paiement') }}?produit=Multimetre&prix=15000" class="btn btn-primary w-100">Commander</a>
        </div>
      </div>
    </div>

    <!-- Oscilloscope -->
    <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="200">
      <div class="card shadow-sm w-100">
        <img src="oscilloscope_portable.jpg" class="card-img-top oscilloscope-img" alt="Oscilloscope portable" />
        <div class="card-body">
          <div>
            <h5 class="card-title">Oscilloscope portable</h5>
            <p class="card-text">Outil idéal pour visualiser des signaux électriques en temps réel.</p>
          </div>
          <p class="fw-bold text-primary">Prix : 45 000 FCFA</p>
          <a href="{{ url('paiement') }}?produit=Oscilloscope&prix=45000" class="btn btn-primary w-100">Commander</a>
        </div>
      </div>
    </div>

    <!-- Kit Arduino -->
    <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="300">
      <div class="card shadow-sm w-100">
        <img src="kit_arduino.jpg" class="card-img-top kit-arduino-img" alt="Kit Arduino" />
        <div class="card-body">
          <div>
            <h5 class="card-title">Kit Arduino</h5>
            <p class="card-text">Kit complet pour apprendre la programmation et l’électronique.</p>
          </div>
          <p class="fw-bold text-primary">Prix : 25 000 FCFA</p>
          <a href="{{ url('paiement') }}?produit=Kit&prix=25000" class="btn btn-primary w-100">Commander</a>
        </div>
      </div>
    </div>

    <!-- Fer à souder -->
    <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="400">
      <div class="card shadow-sm w-100">
        <img src="fer_souder.jpg" class="card-img-top rounded-top" alt="Fer à souder" />
        <div class="card-body">
          <div>
            <h5 class="card-title">Fer à souder</h5>
            <p class="card-text">Indispensable pour assembler et réparer vos circuits électroniques.</p>
          </div>
          <p class="fw-bold text-primary">Prix : 10 000 FCFA</p>
          <a href="{{ url('paiement') }}?produit=Fer&prix=10000" class="btn btn-primary w-100">Commander</a>
        </div>
      </div>
    </div>

    <!-- Alimentation de laboratoire -->
    <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="500">
      <div class="card shadow-sm w-100">
        <img src="alimentation_de_laboratoire.jpg" class="card-img-top rounded-top" alt="Alimentation de laboratoire" />
        <div class="card-body">
          <div>
            <h5 class="card-title">Alimentation de laboratoire</h5>
            <p class="card-text">Source d’énergie stable pour vos expériences électroniques.</p>
          </div>
          <p class="fw-bold text-primary">Prix : 55 000 FCFA</p>
          <a href="{{ url('paiement') }}?produit=Alimentation&prix=55000" class="btn btn-primary w-100">Commander</a>
        </div>
      </div>
    </div>

    <!-- Pack de capteurs -->
    <div class="col-md-4 d-flex" data-aos="fade-up" data-aos-delay="600">
      <div class="card shadow-sm w-100">
        <img src="capteur_arduino.png" class="card-img-top rounded-top" alt="Pack de capteurs" />
        <div class="card-body">
          <div>
            <h5 class="card-title">Pack de capteurs</h5>
            <p class="card-text">Pack varié (température, mouvement, lumière, etc.).</p>
          </div>
          <p class="fw-bold text-primary">Prix : 18 000 FCFA</p>
          <a href="{{ url('paiement') }}?produit=Capteur&prix=18000" class="btn btn-primary w-100">Commander</a>
        </div>
      </div>
    </div>
  </div>
</div>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init({ duration: 800, once: true });

  window.addEventListener('DOMContentLoaded', () => {
    document.body.classList.add('loaded');
  });

  // Animation lors des clics sur les liens
  document.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', e => {
      const href = link.getAttribute('href');
      if (href && !href.startsWith('#') && !href.startsWith('mailto:') && !href.startsWith('javascript:')) {
        e.preventDefault();
        document.body.classList.remove('loaded');
        setTimeout(() => {
          window.location.href = href;
        }, 400);
      }
    });
  });

  // Réactiver l'affichage correct lors d’un retour arrière (back/forward)
  window.addEventListener('pageshow', (event) => {
    if (event.persisted) {
      document.body.classList.add('loaded');
    }
  });
</script>

</body>
</html>
