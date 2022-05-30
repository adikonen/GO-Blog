<?php

namespace App\Models;

use App\Models\User;
use App\Models\PostCategory;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [
        "id",
        "created_at",
        "updated_at"
    ];
    public function user()
    {
        return $this->belongsTo(User::class);    
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function postCategory()
    {
        return $this->belongsTo(PostCategory::class);
    }
}
