<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    public function post()
{
    return $this->belongsTo(Post::class);
}

protected $fillable = ['post_id', 'commenter_name', 'comment'];

}
