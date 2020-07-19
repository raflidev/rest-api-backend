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
        return $this->hasOneThrough(User::class, Mentor::class, 'kelas_id','id','id','user_id');
    }
}
