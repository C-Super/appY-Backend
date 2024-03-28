<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'parcours_id', 'etape_actuelle_id', 'statut'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parcours()
    {
        return $this->belongsTo(Parcours::class);
    }

    public function etapeActuelle()
    {
        return $this->belongsTo(Etape::class, 'etape_actuelle_id');
    }
}
