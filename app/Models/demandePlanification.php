<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demandePlanification extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'description',
        'dateDebut',
        'dateFin',
        'prix',
        'coache_id',
    ];

    // Define relationships
    public function nutritionist()
    {
        return $this->belongsTo(Nutritionist::class);
    }

    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
