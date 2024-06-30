<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demandeInscription extends Model
{
    protected $table = 'demande_inscriptions';  // Assuming this is your table name

    protected $fillable = [
        'email',
        'nom',
        'prenom',
        'sex',
        'date_N',
        'specialite',
        'experience',
    ];
    public function utilisateur() {
        return $this->belongsTo(demandeInscription::class, 'idnutritionniste');
    }
}


