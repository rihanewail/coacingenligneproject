<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etatsante extends Model
{
    use HasFactory;
    protected $fillable = ['photo', 'description'];

    public function infoEtatSante() {
        return $this->belongsTo(InfoEtatSante::class, 'idinfoetatsante');
    }
}
