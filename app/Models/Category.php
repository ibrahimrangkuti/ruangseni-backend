<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function event()
    {
        return $this->hasMany(Event::class);
    }
}
