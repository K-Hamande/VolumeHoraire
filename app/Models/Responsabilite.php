<?php

namespace App\Models;

use App\Models\Permanent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Responsabilite extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function permanents():HasMany
    {
        return $this->hasMany(Permanent::class);
    }
}
