<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
protected $fillable = ['nom', 'prenom', 'sex', 'Date_N', 'specialite', 'experience','email','photo'];

    public function certificats() {
        return $this->hasMany(Certificat::class, 'idcoach');
    }


    public function Users() {
        return $this->belongsTo(User::class);
    }

    public function evenements() {
        return $this->hasMany(Evenement::class, 'idcoach');
    }

    public function solutions() {
        return $this->hasMany(Solution::class, 'idcoach');
    }

    public function alerts() {
        return $this->hasMany(Alert::class, 'idcoach');
    }

    public function recettes() {
        return $this->hasMany(Recette::class, 'idcoach');
    }

    public function recommandations() {
        return $this->hasMany(Recommandation::class, 'idcoach');
    }

    public function objectifs() {
        return $this->hasMany(Objectif::class, 'idcoach');
    }

    public function demandeSuivis() {
        return $this->hasMany(DemandeSuivi::class);
    }
    public function demandePlanification() {
        return $this->hasMany(demandePlanification::class);
    }

}
