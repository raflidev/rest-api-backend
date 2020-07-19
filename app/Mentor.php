<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
