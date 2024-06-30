<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role',

        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function cours() {
        return $this->hasMany(cour::class);
    }
    public function Coach() {
        return $this->hasOne(Coach::class, 'user_id');
    }
    public function Admin() {
        return $this->hasOne(Admin::class, 'user_id');
    }
    public function Nutritionist() {
        return $this->hasOne(Nutritionist::class, 'user_id');
    }
    public function utilisateur() {
        return $this->hasone(utilisateur::class, 'user_id');
    }
    public function infomodevies() {
        return $this->hasMany(Infomodevie::class);
    }

    public function etatsantes() {
        return $this->hasMany(Etatsante::class);
    }
}
