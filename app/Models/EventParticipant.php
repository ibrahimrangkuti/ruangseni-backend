<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventParticipant extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'post_id'
    ];

    public function event()
    {
        return $this->hasMany(Event::class);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
