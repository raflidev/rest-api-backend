<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roadmap extends Model
{
    public function kelas(){
        return $this->hasManyThrough(Kelas::class, KelasRoadmap::class, 'roadmaps_id', 'id');
    }
}
