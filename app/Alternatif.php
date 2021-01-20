<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    protected $table = "alternatif";

    protected $guarded = [];

    protected $hidden = ['pivot'];

    public function Kriteria()
    {
        return $this->belongsToMany(Kriteria::class, "alternatif_kriteria", "alternatif_id", "kriteria_id")
        ->withPivot("nilai");
    }
}
