<?php

namespace App\Models;

use App\Models\Ecue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ue extends Model
{
    use HasFactory;
    protected $fillable = ['intituleUE','creditUE'];

    public function Ecues()
    {
        return $this->hasMany(Ecue::class);
    }
}


