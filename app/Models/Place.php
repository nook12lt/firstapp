<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongTo(Category::class);
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }

    protected $fillable = [
        'category_id',
        'name',
        'latitude',
        'longitude',
    ];

}
