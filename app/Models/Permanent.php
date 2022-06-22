<?php

namespace App\Models;

use App\Models\Responsabilite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Permanent extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function grade():BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }


    public function responsabilite():BelongsTo
    {
        return $this->belongsto(Responsabilite::class);
    }
}
