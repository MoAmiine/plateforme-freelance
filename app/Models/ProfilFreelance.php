<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilFreelance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tarif_journalier',
        'experience',
        'disponibilite',
        'note_moyenne'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function competences()
    {
        return $this->belongsToMany(Competence::class);
    }

    public function candidatures()
    {
        return $this->hasMany(Candidature::class);
    }
}

