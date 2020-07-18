<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    public function kelas()
    {
        return $this->hasOne(Kelas::class);
    }
}
