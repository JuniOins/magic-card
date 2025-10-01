<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faire un Don - Magic Card</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f4f6f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .form-container {
      background: #fff;
      padding: 25px 30px;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
      width: 340px;
      border: 2px solid #00BFFF;
    }
    h1 {
      text-align: center;
      font-size: 1.8rem;
      margin-bottom: 25px;
      color: #3561f0;
    }
    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
    }
    input, select, button {
      width: 100%;
      padding: 10px 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
      font-family: 'Montserrat', sans-serif;
    }
    button {
      background-color: #00BFFF;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
      font-weight: 600;
      transition: all 0.3s ease;
    }
    button:hover {
      background-color: #0077B6;
      transform: scale(1.05);
    }
    .alert {
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 6px;
      font-size: 14px;
    }
    .alert-success {
      background-color: #d4edda;
      color: #155724;
    }
    .alert-error {
      background-color: #f8d7da;
      color: #721c24;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Faire un Don</h1>

    {{-- Messages de succès --}}
    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    {{-- Affichage des erreurs --}}
    @if ($errors->any())
      <div class="alert alert-error">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('dons.store') }}" method="POST">
      @csrf

      <label for="nom">Nom complet</label>
      <input type="text" id="nom" name="nom" placeholder="Votre nom complet" required>

      <label for="email">Adresse Email</label>
      <input type="email" id="email" name="email" placeholder="Votre email" required>

      <label for="montant">Montant (FCFA)</label>
      <input type="number" id="montant" name="montant" placeholder="Ex: 5000" required>

      <label for="message">Message (optionnel)</label>
      <input type="text" id="message" name="message" placeholder="Votre message ou dédicace">

      <label for="moyen">Moyen de paiement</label>
      <select id="moyen" name="moyen" required>
        <option value="">-- Sélectionnez --</option>
        <option value="mtn">MTN MoMo</option>
        <option value="moov">Moov Money</option>
        <option value="celtiis">Celtiis Pay</option>
        <option value="carte">Carte bancaire</option>
      </select>

      <button type="submit">Faire un don</button>
    </form>
  </div>
</body>
</html>
