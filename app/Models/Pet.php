<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pet extends Model
{
    use HasFactory;
    protected $filable = [
        "name",
        "race",
        "weigth",
        "birthDate",
        "gender",
    ];
    public function specie():BelongsTo
    {
        return $this->belongsTo(Specie::class);
    }
    public function owner():BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }
}
