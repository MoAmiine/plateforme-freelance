<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorieMission extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom'
    ];

    public function missions()
    {
        return $this->hasMany(Mission::class);
    }
}