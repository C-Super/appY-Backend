<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcours extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'start_date', 'end_date', 'active', 'itineraire'];

    protected $casts = [
        'itineraire' => 'array',
    ];

    public function etapes()
    {
        return $this->hasMany(Etape::class);
    }
}
