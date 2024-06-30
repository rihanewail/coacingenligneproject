<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificat extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'lien', 'Date'];

    public function coach() {
        return $this->belongsTo(Coach::class, 'idcoach');
    }

    public function nutritionist() {
        return $this->belongsTo(Nutritionist::class, 'idnutritionniste');
    }
    public function utilisateur() {
        return $this->belongsTo(Nutritionist::class, 'idnutritionniste');
    }
}


