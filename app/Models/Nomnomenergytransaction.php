<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomnomenergytransaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'buyer',
        'buyer_contact',
        'quantity',
        'status',
        'total',

    ];
}