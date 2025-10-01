<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Magic Card - Contact</title>

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

    .navbar {
      box-shadow: 0 2px 6px rgba(0,0,0,.1);
      background-color: #2C3E50 !important;
    }
    .navbar-nav .nav-link {
      font-weight: 600;
      color: #ECF0F1 !important;
      position: relative;
      transition: color 0.3s ease;
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
      font-size: 2.5rem;
      margin-bottom: 30px;
      text-align: center;
    }

    .contact-container {
      max-width: 750px;
      margin: auto;
      background: #ffffff;
      padding: 35px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(95, 61, 196, 0.15);
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
        <li class="nav-item"><a class="nav-link" href="/secure">Sécurisation de motos</a></li>
        <li class="nav-item"><a class="nav-link" href="/formations">Formations</a></li>
        <li class="nav-item"><a class="nav-link" href="/dons">Dons</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Contenu principal -->
<div class="container my-5" data-aos="fade-up">
  <h1>📞 Contactez-nous</h1>
  <div class="contact-container">

    <!-- Message de confirmation -->
    @if(session('success'))
      <div class="alert alert-success text-center">
        ✅ {{ session('success') }}
      </div>
    @endif

    <!-- Formulaire -->
    <form action="{{ route('contact.send') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="nom" class="form-label">Nom complet</label>
        <input type="text" name="nom" id="nom" class="form-control"
               placeholder="Écrivez ici votre nom et prénoms" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Adresse email</label>
        <input type="email" name="email" id="email" class="form-control"
               placeholder="Ex: exemple@gmail.com" required>
      </div>

      <div class="mb-3">
        <label for="message" class="form-label">Votre message</label>
        <textarea name="message" id="message" rows="5" class="form-control"
                  placeholder="Écrivez ici votre message..." required></textarea>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary btn-lg px-4 rounded-pill shadow">
          ✉️ Envoyer
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4 mt-5">
  <div class="container">
    <h5 class="mb-3">&copy; 2025 Magic Card - Sécurisation & équipements électroniques</h5>
    <p>
      📍 Situés à <strong>Kpota (Abomey-Calavi)</strong>,<br>
      à côté de la station <strong>Ewell</strong>.
    </p>
    <p>
      📞 <a href="tel:+2290154804096" class="text-warning">+229 01 54 80 40 96</a>
    </p>
  </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({ duration: 800, once: true });
  window.addEventListener('DOMContentLoaded', () => { document.body.classList.add('loaded'); });
</script>

</body>
</html>
