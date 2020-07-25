<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mading extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    protected $hidden = ['email', 'skill', 'user_id'];
}
