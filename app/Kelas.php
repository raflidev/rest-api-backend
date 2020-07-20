<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public function materi()
    {
        // return $this->hasManyThrough(Subateri::class,Materi::class,'submateri_id','id','id','submateri_id');
        return $this->hasManyThrough(Materi::class,Submateri::class,'id', 'submateri_id');
    }
    public function mentor()
    {
        return $this->hasOneThrough(User::class, Mentor::class, 'kelas_id','id','id','user_id');
    }
}
