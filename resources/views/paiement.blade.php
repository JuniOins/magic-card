<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire Livraison & Paiement</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #eceff1, #f5f7fa);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .form-container {
      max-width: 800px;
      margin: 40px auto;
      background: #fff;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    h2 {
      font-weight: bold;
      color: #333;
      text-align: center;
      margin-bottom: 25px;
    }
    .form-section {
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 15px;
      margin-bottom: 25px;
      background: #fafafa;
    }
    .btn-custom {
      background: #007bff;
      color: white;
      border-radius: 30px;
      padding: 12px 25px;
      font-size: 16px;
      transition: 0.3s ease;
    }
    .btn-custom:hover {
      background: #0056b3;
      transform: translateY(-2px);
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="form-container">
      <h2>📦 Livraison & 💳 Paiement</h2>

      {{-- Messages --}}
      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('commandes.store') }}" method="POST">
        @csrf

        <!-- Section Livraison -->
        <div class="form-section">
          <h5>Informations de livraison</h5>
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Nom complet</label>
              <input type="text" name="nom" class="form-control" placeholder="Entrez votre nom complet" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Téléphone</label>
              <input type="tel" name="telephone" class="form-control" placeholder="Ex: +229 01 67 12 34 56" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" placeholder="exemple@email.com" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Ville</label>
              <select name="ville" class="form-select" required>
                <option value="">-- Sélectionnez une ville --</option>
                <option value="cotonou">Cotonou</option>
                <option value="porto-novo">Porto-Novo</option>
                <option value="abomey-calavi">Abomey-Calavi</option>
                <option value="parakou">Parakou</option>
                <option value="bohicon">Bohicon</option>
              </select>
            </div>
            <div class="col-12">
              <label class="form-label">Adresse complète</label>
              <input type="text" name="adresse" class="form-control" placeholder="Rue, Quartier, Maison N°..." required>
            </div>
          </div>
        </div>

        <!-- Section Paiement -->
        <div class="form-section">
          <h5>Informations de paiement</h5>
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Méthode de paiement</label>
              <select name="moyen_paiement" class="form-select" required>
                <option value="">-- Choisissez une méthode --</option>
                {{-- <option value="mobile-money">Mobile Money (MTN, Moov, Celtiis)</option> --}}
                {{-- <option value="carte">Carte Bancaire</option> --}}
                <option value="cash">Paiement à la livraison</option>
              </select>
            </div>

            <!-- Champ produit caché -->
            <input type="hidden" name="produit" value="{{ request('produit') }}">

            <div class="col-md-6">
              <label class="form-label">Montant</label>
              <input type="number" name="montant_total" class="form-control" 
                     value="{{ request('prix') }}" readonly>
            </div>
          </div>
        </div>

        <!-- Bouton -->
        <div class="text-center">
          <button type="submit" class="btn btn-custom">✅ Valider ma commande</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Script pour forcer le rechargement si retour arrière -->
  <script>
    window.addEventListener("pageshow", function (event) {
      if (event.persisted) {
        window.location.reload();
      }
    });
  </script>

</body>
</html>
