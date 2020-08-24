<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $hidden = ['id','laravel_through_key','created_at','updated_at'];
    public function materi()
    {
        return $this->hasManyThrough(Submateri::class,Materi::class,'id','materis_id');
    }
    public function submateri()
    {
        return $this->hasManyThrough(Submateri::class,Materi::class,'id','materis_id');
    }
}
