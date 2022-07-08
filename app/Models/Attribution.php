<?php

namespace App\Models;

use App\Models\Permanent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attribution extends Model
{
    use HasFactory;

    public function permanents()
    {
        return$this->hasMany(Permanent::class);
    }
}
