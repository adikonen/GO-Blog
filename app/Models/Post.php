<?php

namespace App\Models;

use App\Models\User;
use App\Models\PostCategory;
use App\Models\Comment;
use Carbon\Carbon;
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
    protected $appends = [
        "createdAtCarbon",
    ];

    public function getCreatedAtCarbonAttribute() : string 
    {
        return Carbon::make($this->created_at)->locale("id")->diffForHumans();
    }

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
