<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReponseUtilisateur extends Model
{
    use HasFactory;

    protected $fillable = ['participation_id', 'epreuve_id'];

    public function participation()
    {
        return $this->belongsTo(Participation::class);
    }

    public function activite()
    {
        return $this->belongsTo(Activite::class);
    }
}
