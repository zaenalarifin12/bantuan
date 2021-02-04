<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kriteria')->insert([
            ["id" => 1	, "nama" => "luas lantai",                                  "type"  =>  "cost" ],
            ["id" => 2	, "nama" => "jenis lantai",                                 "type"  =>  "cost" ],
            ["id" => 3	, "nama" => "dinding",                                      "type"  =>  "cost" ],
            ["id" => 4	, "nama" => "Buang Air Besar",                              "type"  =>  "cost" ],
            ["id" => 5	, "nama" => "sumber air minum",                             "type"  =>  "cost" ],
            ["id" => 6	, "nama" => "bahan bakar",                                  "type"  =>  "cost" ],
            ["id" => 7	, "nama" => "konsumsi daging/susu/ayam",                    "type"  =>  "cost" ],
            ["id" => 8	, "nama" => "stel pakaian setahun",                         "type"  =>  "cost" ],
            ["id" => 9	, "nama" => "makan perhari",                                "type"  =>  "cost" ],
            ["id" => 10, "nama"  => "tidak sanggup berobat ke poliklinik",          "type"  =>  "cost" ],
            ["id" => 11, "nama"  => "penghasilan KK",                               "type"  =>  "cost" ],
            ["id" => 12, "nama"  => "pendidikan sekolah",                           "type"  =>  "cost" ],
            ["id" => 13, "nama"  => "tidak memiliki tabungan/barang mudah dijual",  "type"  =>  "cost" ],
        ]);

        DB::table('bobot')->insert([
            ["id" => 1, "kriteria_id"   => 1,  "nilai"  => 0.05],
            ["id" => 2, "kriteria_id"   => 2,  "nilai"  => 0.25],
            ["id" => 3, "kriteria_id"   => 3,  "nilai"  => 0.15],
            ["id" => 4, "kriteria_id"   => 4,  "nilai"  => 0.02],
            ["id" => 5, "kriteria_id"   => 5,  "nilai"  => 0.10],
            ["id" => 6, "kriteria_id"   => 6,  "nilai"  => 0.03],
            ["id" => 7, "kriteria_id"   => 7,  "nilai"  => 0.05],
            ["id" => 8, "kriteria_id"   => 8,  "nilai"  => 0.04],
            ["id" => 9, "kriteria_id"   => 9,  "nilai"  => 0.05],
            ["id" => 10, "kriteria_id"  => 10, "nilai"  => 0.04],
            ["id" => 11, "kriteria_id"  => 11, "nilai"  => 0.10],
            ["id" => 12, "kriteria_id"  => 12, "nilai"  => 0.10],
            ["id" => 13, "kriteria_id"  => 13, "nilai"  => 0.02],
        ]);
    }
}
