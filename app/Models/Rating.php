<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    function relationtoUser(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
