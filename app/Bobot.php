<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{
    protected $table = "bobot";

    protected $guarded = [];

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class, "kriteria_id");
    }
}
