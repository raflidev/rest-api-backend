<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public function materi()
    {
        return $this->hasMany(Materi::class);
    }
    public function mentor()
    {
        return $this->hasManyThrough(Mentor::class,User::class,'id', 'kelas_id');
    }
}
