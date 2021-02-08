<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("sub_kriteria")->insert([

            ["id" => 1,     "kriteria_id"   => 1,       "nama"  =>   "8 m2/orang",      "nilai" => 5],
            ["id" => 2,     "kriteria_id"   => 1,       "nama"  =>	 "9-16 m2/orang",   "nilai" => 4],
            ["id" => 3,     "kriteria_id"   => 1,       "nama"  =>	 "17-24 m2/orang",  "nilai" => 3],
            ["id" => 4,     "kriteria_id"   => 1,       "nama"  =>	 "24m2/orang",      "nilai" => 2],

            ["id" => 5,     "kriteria_id" => 2,     "nama" =>	"keramik",              "nilai" => 1],
            ["id" => 6,     "kriteria_id" => 2,     "nama" =>	"tanah",                "nilai" => 2],
            ["id" => 7,     "kriteria_id" => 2,     "nama" =>	"bambu",                "nilai" => 3],
            ["id" => 8,     "kriteria_id" => 2,     "nama" =>	"semen",                "nilai" => 4],
            ["id" => 9,     "kriteria_id" => 2,     "nama" =>	"kayu",                 "nilai" => 5],
            
            ["id" => 12,    "kriteria_id" => 3,     "nama" =>	"kayu murah",               "nilai" => 5],
            ["id" => 13,    "kriteria_id" => 3,     "nama" =>	"bambu",                    "nilai" => 4],
            ["id" => 14,    "kriteria_id" => 3,     "nama" =>	"tembok tanpa plester",     "nilai" => 3],
            ["id" => 15,    "kriteria_id" => 3,     "nama" =>	"batu bata",                "nilai" => 2],
            ["id" => 16,    "kriteria_id" => 3,     "nama" =>	"plester",                  "nilai" => 1],

            ["id" => 17,    "kriteria_id" => 4,     "nama" =>	"tanpa fasilitas",              "nilai" => 6],
            ["id" => 18,    "kriteria_id" => 4,     "nama" =>	"bersama oranglain",            "nilai" => 2],

            ["id" => 19,    "kriteria_id" => 5,     "nama" =>	"sumur bor",                    "nilai" => 5],
            ["id" => 20,    "kriteria_id" => 5,     "nama" =>	"mata air tak terlindungi",     "nilai" => 4],
            ["id" => 21,    "kriteria_id" => 5,     "nama" =>	"air hujan",                    "nilai" => 3],
            ["id" => 22,    "kriteria_id" => 5,     "nama" =>	"sungai",                       "nilai" => 2],
            ["id" => 23,    "kriteria_id" => 5,     "nama" =>	"lending meteran",              "nilai" => 1],

            ["id" => 25,    "kriteria_id" => 6,     "nama" =>	"tidak memasak dirumah",        "nilai" => 6],
            ["id" => 26,    "kriteria_id" => 6,     "nama" =>	"arang",                        "nilai" => 5],
            ["id" => 27,    "kriteria_id" => 6,     "nama" =>	"kayu bakar",                   "nilai" => 4],
            ["id" => 28,    "kriteria_id" => 6,     "nama" =>	"minyak tanah",                 "nilai" => 3],
            ["id" => 29,    "kriteria_id" => 6,     "nama" =>	"gas 3 kg",                     "nilai" => 2],
            ["id" => 30,    "kriteria_id" => 6,     "nama" =>	"gas >3kg",                     "nilai" => 1],

            ["id" => 31,    "kriteria_id" => 7,     "nama" =>"<1 kali/minggu",           "nilai" => 5],
            ["id" => 32,    "kriteria_id" => 7,     "nama" =>"1 kali/minggu",            "nilai" => 4],
            ["id" => 33,    "kriteria_id" => 7,     "nama" =>"2 kali/minggu",            "nilai" => 3],
            ["id" => 34,    "kriteria_id" => 7,     "nama" =>"3 kali/minggu",            "nilai" => 2],
            ["id" => 35,    "kriteria_id" => 7,     "nama" =>">3 kali/minggu",           "nilai" => 1],

            ["id" => 36,    "kriteria_id" => 8,     "nama" =>"1",                       "nilai" => 4],
            ["id" => 37,    "kriteria_id" => 8,     "nama" =>"2",                       "nilai" => 3],
            ["id" => 38,    "kriteria_id" => 8,     "nama" =>"3",                       "nilai" => 2],
            ["id" => 39,    "kriteria_id" => 8,     "nama" =>">4",                      "nilai" => 1],

            ["id" => 40,    "kriteria_id" => 9,     "nama" => "1 kali/hari",            "nilai" => 5],
            ["id" => 41,    "kriteria_id" => 9,     "nama" => "2 kali/hari",            "nilai" => 4],
            ["id" => 42,    "kriteria_id" => 9,     "nama" => "3 kali/hari",            "nilai" => 3],
            ["id" => 43,    "kriteria_id" => 9,     "nama" => "4 kali/hari",            "nilai" => 2],
            ["id" => 44,    "kriteria_id" => 9,     "nama" => "4 kali/hari",            "nilai" => 1],

            ["id" => 45,    "kriteria_id" => 10,    "nama" =>"ya",                      "nilai" => 6],
            ["id" => 46,    "kriteria_id" => 10,    "nama" =>"tidak",                   "nilai" => 2],

            ["id" => 47,    "kriteria_id" => 11,    "nama" =>"<600rb/bulan",                 "nilai" => 4],
            ["id" => 48,    "kriteria_id" => 11,    "nama" =>"<600-1.000.000/bulan",         "nilai" => 3],
            ["id" => 49,    "kriteria_id" => 11,    "nama" =>"1.000.000-3.000.000/bulan",   "nilai" => 2],
            ["id" => 50,    "kriteria_id" => 11,    "nama" =>">3.000.000/bulan",             "nilai" => 1],

            ["id" => 51,    "kriteria_id" => 12,    "nama" =>"tidak sekolah",               "nilai" => 5],
            ["id" => 52,    "kriteria_id" => 12,    "nama" =>"tidak tamat SD",              "nilai" => 4],
            ["id" => 53,    "kriteria_id" => 12,    "nama" =>"tamat SD",                    "nilai" => 3],
            ["id" => 54,    "kriteria_id" => 12,    "nama" =>"tamat SMP",                   "nilai" => 2],
            ["id" => 55,    "kriteria_id" => 12,    "nama" =>"tamat SMA",                   "nilai" => 1],

            ["id" => 56,    "kriteria_id" => 13,    "nama" =>"<500.000",                     "nilai" => 4],
            ["id" => 57,    "kriteria_id" => 13,    "nama" =>"500.000-1.000.000",        "nilai" => 3],
            ["id" => 58,    "kriteria_id" => 13,    "nama" =>"1.000.000-2.000.000",      "nilai" => 2],
            ["id" => 59,    "kriteria_id" => 13,    "nama" =>">2.000.000",                "nilai" => 1],
        ]);
    }
}
