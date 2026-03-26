<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function profilFreelance()
    {
        return $this->hasOne(ProfilFreelance::class);
    }

    public function missions()
    {
        return $this->hasMany(Mission::class);
    }

    public function avisDonnes()
    {
        return $this->hasMany(Avis::class, 'auteur_id');
    }

    public function avisRecus()
    {
        return $this->hasMany(Avis::class, 'cible_id');
    }
}