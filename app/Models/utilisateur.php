<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utilisateur extends Model
{
    use HasFactory;
    protected $fillable = ['name','prenom','email','Date_N','taille','sex'];

    public function infomodevies() {
        return $this->hasOne(Infomodevie::class);
    }

    public function etatsantes() {
        return $this->hasMany(Etatsante::class);
    }


    public function feedbacks() {
        return $this->hasMany(Feedback::class, 'utilisateur_id');
    }


    public function reservations() {
        return $this->hasMany(Reservation::class, 'utilisateur_id');
    }

    public function alerts() {
        return $this->hasMany(Alert::class, 'utilisateur_id');
    }

    public function recettes() {
        return $this->hasMany(Recette::class, 'utilisateur_id');
    }

    public function recommandations() {
        return $this->hasMany(Recommandation::class, 'utilisateur_id');
    }

    public function objectifs() {
        return $this->hasMany(Objectif::class, 'utilisateur_id');
    }

    public function etatEvolutions() {
        return $this->hasMany(EtatEvolution::class, 'utilisateur_id');
    }

    public function demandeSuivis() {
        return $this->hasMany(DemandeSuivi::class, 'utilisateur_id');
    }
    public function infoetatsante() {
        return $this->hasOne(infoetatsante::class);
    }
    }

