<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;

    protected $fillable = [
        'auteur_id',
        'cible_id',
        'note',
        'commentaire'
    ];

    public function auteur()
    {
        return $this->belongsTo(User::class, 'auteur_id');
    }

    public function cible()
    {
        return $this->belongsTo(User::class, 'cible_id');
    }
}