<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cattransaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'adopter',
        'adopter_contact',
        'status',
        'total',
        'cat_id',

    ];

    public function ras()
    {
        return $this->belongsTo(Rase::class, 'cat_id');
    }
}
