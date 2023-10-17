<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable =  [
        'post_title',
        'post_desc',
        'post_thumbnail',
        'post_tags'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
