<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Don extends Model
{
    use HasFactory;

    // Nom de la table (optionnel, mais on peut préciser)
    protected $table = 'dons';

    // Colonnes autorisées pour Don::create() ou update()
    protected $fillable = [
        'nom',
        'email',
        'montant',
        'message',
        'moyen',
    ];
}
