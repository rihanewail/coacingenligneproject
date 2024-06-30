<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demandeSuivi extends Model
{
    use HasFactory;
    protected $fillable=[


        'user_id',
        'coache_id',

    ];
    public function coaches()  {
        return $this->belongsTo(Coach::class);
    }
}
