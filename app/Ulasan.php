<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
