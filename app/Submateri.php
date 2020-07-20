<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submateri extends Model
{
   public function materi()
    {
        return $this->hasMany(Materi::class);
    }
}
