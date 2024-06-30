<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infomodevie extends Model
{
    use HasFactory;
    protected $fillable = [
        'worktype',
        'sleepHours',
        'natureFood',
        'waterTaken',
        'activity',

    ];

    // Define the relationship with the User model
    // public function utilisateur()
    // {
    //     return $this->belongsTo(utilisateur::class);
    // }
    public function utilisateur() {
        return $this->belongsTo(utilisateur::class);
    }
}
