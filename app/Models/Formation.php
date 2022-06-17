<?php

namespace App\Models;

use App\Models\Niveau;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formation extends Model
{
    use HasFactory;
    protected $filable = ['intituleFormation'];

    public function niveaux()
    {
        return $this->belongsToMany(Niveau::class);
    }
}
