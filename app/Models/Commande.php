<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'nom', 'telephone', 'email', 'ville', 'adresse',
        'montant_total', 'moyen_paiement', 'statut'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function equipements()
    {
        return $this->belongsToMany(Equipement::class, 'commandes_equipements')
                    ->withPivot('quantite', 'prix_unitaire', 'total')
                    ->withTimestamps();
    }
}
