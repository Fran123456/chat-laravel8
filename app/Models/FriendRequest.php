<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FriendRequest extends Model
{
    use HasFactory;

    protected $fillable = [
     'id','user_id','friend_request_id','status'
    ];

    public function user()
    {
       return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function friend_request()
    {
       return $this->belongsTo('App\Models\User', 'friend_request_id');
    }
}
