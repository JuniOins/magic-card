<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'description', 'prix', 'stock',
    ];

    public function commandes()
    {
        return $this->belongsToMany(Commande::class, 'commandes_equipements')
                    ->withPivot('quantite', 'prix_unitaire', 'total')
                    ->withTimestamps();
    }
}
