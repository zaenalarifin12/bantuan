<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = "kriteria";

    protected $guarded = [];

    public function subKriteria()
    {
        return $this->hasMany(SubKriteria::class, "kriteria_id");
    }
}
