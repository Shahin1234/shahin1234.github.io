<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $fillable = ["blog_id", "user_id", "comment", "created_at", "updated_at"];
    public function blog(){
        return $this->belongsTo(Blog::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
