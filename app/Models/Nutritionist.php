<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nutritionist extends Model
{
    use HasFactory;

    protected $fillable = ['photo','email','nom', 'prenom', 'sex', 'Date_N', 'specialite', 'experience'];

    public function certificats() {
        return $this->hasMany(Certificat::class, 'idnutritionniste');
    }

    public function evenements() {
        return $this->hasMany(Evenement::class, 'idnutritionniste');
    }

    public function solutions() {
        return $this->hasMany(Solution::class, 'idnutritionniste');
    }

    public function alerts() {
        return $this->hasMany(Alert::class, 'idnutritionniste');
    }

    public function recettes() {
        return $this->hasMany(Recette::class, 'idnutritionniste');
    }

    public function recommandations() {
        return $this->hasMany(Recommandation::class, 'idnutritionniste');
    }

    public function objectifs() {
        return $this->hasMany(Objectif::class, 'idnutritionniste');
    }

    public function demandeSuivis() {
        return $this->hasMany(DemandeSuivi::class, 'idnutritionniste');
    }
    public function Users() {
        return $this->belongsTo(User::class);
    }

}
