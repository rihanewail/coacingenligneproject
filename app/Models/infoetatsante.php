<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infoetatsante extends Model
{
    use HasFactory;

    protected $fillable = ['poids'];

    public function utilisateur() {
        return $this->belongsTo(utilisateur::class);
    }

    public function etatSantes() {
        return $this->hasMany(EtatSante::class);
    }
}
