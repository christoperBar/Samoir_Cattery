<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rase extends Model
{
    use HasFactory;
    protected $fillable = [
        'ras_name',
    ];
    public function cats(): HasMany
    {
        return $this->hasMany(Cat::class, 'ras_id');
    }
}
