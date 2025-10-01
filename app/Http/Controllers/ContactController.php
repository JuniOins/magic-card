<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Affiche le formulaire de contact
    public function show()
    {
        return view('contact'); // Assure-toi que la vue 'contact.blade.php' existe
    }

    // Traite l'envoi du formulaire
    public function send(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        Contact::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', '✅ Merci pour votre message, nous vous contacterons très bientôt.');
    }
}
