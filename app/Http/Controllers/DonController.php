<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Don;

class DonController extends Controller
{
    public function create()
    {
        return view('don.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'montant' => 'required|numeric',
            'message' => 'nullable|string',
            'moyen' => 'required|in:mtn,moov,celtiis,carte',
        ]);

        Don::create($request->only(['nom', 'email', 'montant', 'message', 'moyen']));

        return redirect()->back()->with('success', '🙏 Merci pour votre don !');
    }
}
