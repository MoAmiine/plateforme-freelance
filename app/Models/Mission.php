<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'budget',
        'duree',
        'statut',
        'user_id',
        'categorie_mission_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categorie()
    {
        return $this->belongsTo(CategorieMission::class, 'categorie_mission_id');
    }

    public function candidatures()
    {
        return $this->hasMany(Candidature::class);
    }
}