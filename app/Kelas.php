<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public function materis()
    {
        return $this->hasMany(Materi::class);
    }
}
