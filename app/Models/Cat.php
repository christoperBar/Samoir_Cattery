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
        'is_adoptable',
        'maturity',
        'gender',
        'ras_id',

    ];

    public function ras()
    {
        return $this->belongsTo(Rase::class, 'ras_id');
    }

    public function child_tree()
    {
        return $this->hasOne(Child_tree::class, 'cat_child');
    }

    public function toms()
    {
        return $this->hasMany(Parent_tree::class, 'tom_id');
    }

    public function tabbies()
    {
        return $this->hasMany(Parent_tree::class, 'tabby_id');
    }
}
