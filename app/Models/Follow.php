<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    // マスアサインメントを許可するフィールドを指定
    protected $fillable = ['user_id', 'following_id', 'followed_id'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'follow_user', 'follow_id', 'user_id');
    }

}
