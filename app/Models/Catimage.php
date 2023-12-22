<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catimage extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_photo',
        'cat_id',


    ];

    public function catimage()
    {
        return $this->belongsTo(Cat::class, 'cat_id');
    }
}