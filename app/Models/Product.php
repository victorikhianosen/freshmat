<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'images' => 'array',
    ];

    protected $guarded = []; 

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function tags() {
        return $this->belongsTo(Tag::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

}
