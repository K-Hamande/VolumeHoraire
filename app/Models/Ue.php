<?php

namespace App\Models;

use App\Models\Ecue;
use App\Models\Filiere;
use App\Models\Formation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ue extends Model
{
    use HasFactory;
    protected $fillable = ['intituleUE','creditUE'];

    public function Ecues()
    {
        return $this->hasMany(Ecue::class);
    }

    public function formations():BelongsToMany
    {
        return $this->belongsToMany(Formation::class);
    }

    public function filieres():BelongsToMany
    {
        return $this->belongsToMany(Filiere::class);
    }
}


