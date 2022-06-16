<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecue extends Model
{
    use HasFactory;
    protected $filable = ['intituleEcue','CodeEcue','Ue_id'];

    public function Ue()
    {
        return $this->belongsTo(Ue::class);
    }
}
