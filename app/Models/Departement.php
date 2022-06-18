<?php

namespace App\Models;

use App\Models\Ufr;
use App\Models\Filiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departement extends Model
{
    use HasFactory;

    protected $table = 'departements';

     protected $primaryKey = 'id';

    protected $fillable = ['intituleDepartement'];


    public function ufr()
    {
        return $this->belongsTo(Ufr::class);
    }


    public function filieres()
    {
        return $this->hasMany(Filiere::class);
    }
}
