<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Specie extends Model
{
    use HasFactory;
    protected $fillable = [
        "name"
    ];
    public function pets():HasMany
    {
        return $this->hasMany(Pet::class);
    }
}
