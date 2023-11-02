<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rase extends Model
{
    use HasFactory;
    protected $fillable = [
        'ras_name',
    ];
    public function rasCat(){
        return $this->hasMany(Cat::class, 'ras_id');
    }
}
