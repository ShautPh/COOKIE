<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'text',
        'user_id',
        'post_id'
    ];

    protected $hidden = [
        'post_id',
        'user_id',
        'updated_at',
    ];

    protected $casts = [
        'created_at' =>'date: l, d F Y'
    ];
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function post(){
        return $this->belongsTo(Post::class, 'post_id');
    }
}
