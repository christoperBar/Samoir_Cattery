<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;
    protected $fillable = [
        'cat_name',
        'birthday',
        'color',
        'cat_photo',
        'can_adopt',
        'maturity',
        'gender',
        'ras_id',

    ];

    public function ras()
    {
        return $this->belongsTo(Rase::class, 'ras_id');
    }
}
