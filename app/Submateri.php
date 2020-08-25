<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submateri extends Model
{
    protected $hidden = ['materis_id','laravel_through_key','created_at','updated_at'];
   public function materi()
    {
        return $this->hasMany(Materi::class);
    }

//     public function submateri()
//     {
//         return $this->hasManyThrough(Materi::class);
//     }
}
