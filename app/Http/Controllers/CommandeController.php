<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande; // <-- ajouter cette ligne

class CommandeController extends Controller
{
    /**
     * Enregistrer une nouvelle commande
     */
    public function store(Request $request)
    {
        // Validation des champs
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email' => 'required|email',
            'ville' => 'required|string|max:100',
            'adresse' => 'required|string|max:255',
            'moyen_paiement' => 'required|string',
            'produit' => 'required|string|max:255',
            'montant_total' => 'required|numeric|min:0',
        ]);

        // Enregistrement dans la base de données
        Commande::create($validated);

        return redirect()->back()->with('success', '✅ Votre commande a été enregistrée avec succès !');
    }
}
