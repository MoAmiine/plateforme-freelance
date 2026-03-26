<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;

    protected $fillable = [
        'mission_id',
        'profil_freelance_id',
        'lettre_motivation',
        'tarif_propose',
        'statut'
    ];

    public function mission()
    {
        return $this->belongsTo(Mission::class);
    }

    public function freelance()
    {
        return $this->belongsTo(ProfilFreelance::class, 'profil_freelance_id');
    }
}