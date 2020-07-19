<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
    
}
