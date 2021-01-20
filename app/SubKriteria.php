<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubKriteria extends Model
{
    protected $table = "sub_kriteria";

    protected $guarded = [];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, "kriteria_id");
    }
    
    public function alternatif()
    {
        return $this->belongsToMany(Alternatif::class, "alternatif_kriteria", "sub_kriteria_id", "alternatif_id");
    }
}
