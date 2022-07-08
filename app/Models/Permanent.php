<?php

namespace App\Models;

use App\Models\Responsabilite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Permanent extends Model
{
    use HasFactory;
    protected $table = 'permanents';
    protected $filable = [
    "nom","prenom","telephone","matricule","email","ufr_id","grade_id","responsabilite_id", "attribution_id",
    ];

    public function grade():BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }


    public function responsabilite():BelongsTo
    {
        return $this->belongsto(Responsabilite::class);
    }

    public function attribution():BelongsTo
    {
        return $this->belongsTo(Attribution::class);;
    }
}
