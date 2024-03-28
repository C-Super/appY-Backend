<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;

    protected $fillable = ['etape_id', 'description', 'type'];

    public function etape()
    {
        return $this->belongsTo(Etape::class);
    }
}
