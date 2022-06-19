<?php

namespace App\Models;

use App\Models\Ue;
use App\Models\Departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Filiere extends Model
{
    use HasFactory;

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }

    public function formations()
    {
        return $this->belongsToMany(Formation::class);
    }

    public function ues()
    {
        return $this->belongsToMany(Ue::class);
    }
}
