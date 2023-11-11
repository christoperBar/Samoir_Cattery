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
        'ras_id',
    ];

    public function ras()
    {
        return $this->belongsTo(Rase::class, 'ras_id');
    }
}
