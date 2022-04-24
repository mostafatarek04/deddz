<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;
    public function user(){
        return$this->belongsTo(User::class);
    }

    public function subscribers(){
        return$this->belongsToMany(User::class,'activity_user','activity_id','user_id')->withPivot(['user_name','user_img']);
    }

//    public function subs(){
//        return $this->hasManyThrough(User::class,Activities::class);
//    }
}
