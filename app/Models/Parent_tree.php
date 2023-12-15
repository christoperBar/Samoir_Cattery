<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parent_tree extends Model
{
    use HasFactory;
    protected $fillable = [
        'tom_id',
        'tabby_id',
    ];

    public function tom_cat()
    {
        return $this->belongsTo(Cat::class, 'tom_id');
    }

    public function tabby_cat()
    {
        return $this->belongsTo(Cat::class, 'tabby_id');
    }

    public function parents()
    {
        return $this->hasMany(Child_tree::class, 'parent_id');
    }
}
