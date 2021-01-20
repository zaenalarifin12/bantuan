<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alternatif;
use App\Kriteria;
use App\Bobot;
use App\SubKriteria;
use Illuminate\Support\Facades\DB;

class HasilController extends Controller
{
    public function index()
    {
        // ambil data alternatif
        $alternatif = Alternatif::get()->toArray();
        $kriteria = Kriteria::get()->toArray();
        $nilai = DB::table("alternatif_kriteria")
            ->orderBy("alternatif_id", "ASC")
            ->orderBy("kriteria_id", "ASC")
            ->get()->toArray();

        // dd($nilai);

        $nilai_asli = [];
        // untuk menampung alternatif nilai asli menjadi array
        for ($i=0; $i < count($alternatif); $i++) { 
            
            $id = $alternatif[$i]["id"];

            $hasil_per = DB::table("alternatif_kriteria")
            ->orderBy("alternatif_id", "ASC")
            ->orderBy("kriteria_id", "ASC")
            ->where("alternatif_id", $id)
            ->get()->toArray();

            $j = 0;
            foreach($hasil_per as $item){
                $nilai_asli[$id][$item->kriteria_id] = $item->sub_kriteria_id;
            }
        }

        // ==================== buat array kriteria
        $nilai_kriteria = [];

        for ($i=0; $i < count($kriteria); $i++) { 

            $id = $kriteria[$i]["id"];

            $hasil_per = DB::table("alternatif_kriteria")
            ->orderBy("alternatif_id", "ASC")
            ->orderBy("kriteria_id", "ASC")
            ->where("kriteria_id", $id)
            ->get()->toArray();

            $j = 0;
            foreach($hasil_per as $item){
                $nilai_kriteria[$item->kriteria_id][$j++] = $item->sub_kriteria_id;
            }
        }


        $nilai_normalisasi = [];
        
        foreach($nilai_asli as $key => $value){
            
            foreach($value as $item1 => $value1){
                
                // jika kriteria == cost 
                $kriteria = Kriteria::findOrFail($item1);
                
                if($kriteria->type == "cost"){
                    $temp_hasil = min($nilai_kriteria[$item1]) / $value1;
                }else{
                    $temp_hasil = $value1 / max($nilai_kriteria[$item1]);
                }                

                $nilai_normalisasi[$key][$item1] = $temp_hasil;
            }
          
        }

        
        // kalikan normalisasi dengan bobot
        $hasil_alternatif = [];

        $hasil_akhir = [];

        foreach($nilai_normalisasi as $key => $value){
            
            $hasil_per_al = [];

            foreach($value as $item1 => $value1){
                
                $bobot = Bobot::where("kriteria_id", $item1)->first();
                
                $temp_hasil = $value1 * $bobot->nilai;
        
                array_push($hasil_per_al, $temp_hasil);
            }

            $hasil_alternatif[$key] =  array_sum($hasil_per_al);
        }

        arsort($hasil_alternatif);

        return view("hasil.index", compact("hasil_alternatif"));
    }
}