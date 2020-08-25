<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $hidden = ['populer', 'pilihan'];
    public function materi()
    {
        return $this->hasManyThrough(Materi::class, Submateri::class, 'materis_id', 'id');
    }
    public function submateri()
    {
        return $this->hasManyThrough(Submateri::class, materi::class, 'kelas_id', 'materis_id');
    }

    public function mentor()
    {
        return $this->hasOneThrough(User::class, Mentor::class, 'kelas_id', 'id', 'id', 'user_id');
    }
}
