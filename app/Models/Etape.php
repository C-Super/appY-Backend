<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etape extends Model
{
    use HasFactory;

    protected $fillable = ['parcours_id', 'name', 'description', 'latitude', 'longitude', 'order'];

    public function parcours()
    {
        return $this->belongsTo(Parcours::class);
    }

    public function activites()
    {
        return $this->hasMany(Activite::class);
    }
}
