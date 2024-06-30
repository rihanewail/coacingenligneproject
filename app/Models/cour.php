<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cour extends Model
{
    use HasFactory;
   protected $fillable=['date','user_id' ];
    public function produits()  {
       return  $this->hasMany(produit::class);
    }
    public function users() {
        return $this->belongsTo(User::class);
    }
}
