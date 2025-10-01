<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Magic Card - Dons</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet" />
  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      font-size: 1.15rem;
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
      background-color: #22a8e6;
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
      max-width: 600px;
      margin: auto;
      background: white;
      padding: 40px 35px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(95, 61, 196, 0.15);
      font-size: 1.1rem;
    }

    .btn-warning {
      background: #5186d4;
      border: none;
      color: #fff;
      font-weight: 600;
      font-size: 1.25rem;
      padding: 14px 35px;
      border-radius: 8px;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }
    .btn-warning:hover {
      background: #0077B6;
      transform: scale(1.05);
    }

    footer {
      background-color: #2C3E50;
      color: #ECF0F1;
      font-size: 1rem;
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
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="/">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="/equipements">Équipements</a></li>
        <li class="nav-item"><a class="nav-link" href="/secure">Sécurisation de Motos</a></li>
        <li class="nav-item"><a class="nav-link" href="/formations">Formations</a></li>
        <li class="nav-item"><a class="nav-link active" href="/dons">Dons</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Contenu principal -->
<div class="container my-5" data-aos="fade-up">
  <h1>Faire un don</h1>
  <div class="content">
    <p class="text-center mb-4">
      Votre soutien nous aide à poursuivre notre mission d’innovation, de sécurisation et de formation en électronique. 🙏
    </p>

    <!-- 🔔 Affichage des messages -->
    @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
      </div>
    @endif

    @if($errors->any())
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul class="mb-0">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
      </div>
    @endif

    <!-- Formulaire de don -->
    <form method="POST" action="{{ route('dons.store') }}">
      @csrf
      <div class="mb-3">
        <label for="nom" class="form-label">Nom complet</label>
        <input type="text" name="nom" id="nom" class="form-control" placeholder="Entrez votre nom" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Adresse Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="exemple@mail.com" required>
      </div>
      <div class="mb-3">
        <label for="montant" class="form-label">Montant du don (FCFA)</label>
        <input type="number" name="montant" id="montant" class="form-control" placeholder="Entrez le montant" required>
      </div>
      <div class="mb-3">
        <label for="moyen" class="form-label">Moyen de paiement</label>
        <select name="moyen" id="moyen" class="form-select" required>
          <option value="">-- Sélectionnez --</option>
          <option value="mtn">MTN Mobile Money</option>
          <option value="moov">Moov Money</option>
          <option value="celtiis">Celtiis Cash</option>
          <option value="carte">Carte bancaire</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message (optionnel)</label>
        <textarea name="message" id="message" class="form-control" rows="3" placeholder="Laissez un petit mot si vous le souhaitez..."></textarea>
      </div>
      <button type="submit" class="btn btn-warning w-100">💝 Envoyer le don</button>
    </form>
  </div>
</div>

<!-- Footer -->
<footer class="text-white text-center py-4 mt-5">
  <div class="container">
    <h5 class="mb-3">&copy; 2025 Magic Card - Sécurisation & Équipements électroniques</h5>
    <p>📍 Situés à <strong>Kpota (Abomey-Calavi)</strong>, dans la von près de la station <strong>Ewell</strong>.</p>
    <p>📞 Contact : <a href="tel:+2290154804096" class="text-warning">+229 01 54 80 40 96</a></p>
  </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({ duration: 800, once: true });
  window.addEventListener('DOMContentLoaded', () => { document.body.classList.add('loaded'); });

  // Animation navigation douce
  document.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', e => {
      const href = link.getAttribute('href');
      if (href && !href.startsWith('#') && !href.startsWith('mailto:')) {
        e.preventDefault();
        document.body.classList.remove('loaded');
        setTimeout(() => window.location.href = href, 500);
      }
    });
  });

  // Recharger si retour arrière
  window.addEventListener("pageshow", function (event) {
    if (event.persisted) { window.location.reload(); }
  });
</script>

</body>
</html>
