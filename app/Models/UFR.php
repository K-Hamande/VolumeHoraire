<?php

namespace App\Models;

use App\Models\Departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ufr extends Model
{
    use HasFactory;

    protected $table = 'ufrs';

    protected $primaryKey = 'id';

    protected $fillable = ['intitule','sigle'];
    
    public function departements()
    {
        return $this->hasMany(Departement::class);
    }
}
