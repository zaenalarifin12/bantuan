<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    protected $table = "alternatif";

    protected $guarded = [];

    public function subKriteria()
    {
        return $this->belongsToMany(SubKriteria::class, "alternatif_kriteria", "alternatif_id", "sub_kriteria_id");
    }
}
