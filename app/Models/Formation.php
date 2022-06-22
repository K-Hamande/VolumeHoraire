<?php

namespace App\Models;

use App\Models\Annee;
use App\Models\Niveau;
use App\Models\Filiere;
use App\Models\Permanent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Formation extends Model
{
    use HasFactory;
    protected $filable = ['intituleFormation'];

     public function niveaux()
     {
         return $this->belongsToMany(Niveau::class);
     }



     public function filieres()
     {
         return $this->belongsToMany(Filiere::class);
     }



    public function annee():BelongsTo
    {
        return $this->belongsTo(Annee::class);
    }


    public function ues():BelongsToMany
    {
        return $this->belongsToMany(Ue::class);
    }
}
