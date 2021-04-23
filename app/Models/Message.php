<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //use HasFactory;
    protected $fillable = [
     'id','message','user_id'
    ];

   public function user()
   {
      return $this->belongsTo('App\Models\User', 'user_id');
   }
}
