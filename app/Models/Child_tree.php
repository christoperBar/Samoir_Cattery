<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child_tree extends Model
{
    use HasFactory;
    protected $fillable = [
        'cat_child',
        'parent_id',
    ];

    public function child_cat()
    {
        return $this->belongsTo(Cat::class, 'cat_child');
    }

    public function parents()
    {
        return $this->belongsTo(Parent_tree::class, 'parent_id');
    }
}
