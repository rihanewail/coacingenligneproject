<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;

    protected $fillable =      ['nom' ,
    'detaille',
 'type',
   'cour_id'];
   public function cours()  {
    return $this->belongsTo(cour::class,'cour_id');
   }

}
