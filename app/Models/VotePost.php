<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VotePost extends Model
{
    use HasFactory;
    
    protected $table = 'vote_post';
    protected $guarded = [];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
