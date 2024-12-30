<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    protected $fillable = ['name', 'image_categori', 'is_locked'];

    public function questions()
    {
        return $this->hasMany(Question::class, 'category_id', 'id');
    }
}