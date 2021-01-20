<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    protected $table = "kriteria";

    protected $guarded = [];

    protected $hidden = ['pivot'];


    public function alternatif()
    {
        return $this->belongsToMany(Alternatif::class, "alternatif_kriteria", "kriteria_id", "alternatif_id")
        ->withPivot("nilai")
        ;
    }

    public function subKriteria()
    {
        return $this->hasMany(SubKriteria::class, "kriteria_id");
    }

    public function bobot()
    {
        return $this->hasOne(Bobot::class, "kriteria_id");
    }
}
