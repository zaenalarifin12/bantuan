<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alternatif;
use App\SubKriteria;
use App\Kriteria;
use Illuminate\Support\Facades\DB;


class AlternatifController extends Controller
{
    public function index()
    {
        $alternatif = Alternatif::get();
        $kriteria   = Kriteria::orderBy("id")->get();

        return view("alternatif.index", compact("alternatif", "kriteria"));
    }

    public function create()
    {
        $kriteria = Kriteria::with(["subKriteria" => function($q){
            $q->orderBy("nilai", "ASC");
        }])->get();

        return view("alternatif.create", compact("kriteria"));
    }

    public function store(Request $request)
    {
        $alternatif = Alternatif::create([
            "nik"   => $request->nik,
            "nama"  => $request->nama,
            "jekel" => $request->jekel,
            "alamat"=> $request->alamat
        ]);
        
        for ($i=0; $i < count($request->nilai); $i++) { 
            DB::table("alternatif_kriteria")->insert([
                "alternatif_id"    => $alternatif->id,
                "sub_kriteria_id"  => $request->nilai[$i],
                "kriteria_id"  => $request->id[$i],
            ]);
        }
    
        alert()->success('Success Message', 'Alternatif berhasil ditambahkan');

        return redirect("/alternatif");
    }

    public function edit($id)
    {
        $alternatif = Alternatif::with(["subKriteria" => function($q){
            $q->orderBy("sub_kriteria_id", "ASC");
        }])->findOrFail($id);
        
        $kriteria = Kriteria::with(["subKriteria" => function($q){
            $q->orderBy("nilai", "ASC");
        }])->get();

        return view("alternatif.edit", compact(["alternatif", "kriteria"]));
    }

    
    public function update(Request $request, $id)
    {
        $alternatif = Alternatif::findOrFail($id);

        $alternatif->update([
            "nik"   => $request->nik,
            "nama"  => $request->nama,
            "jekel" => $request->jekel,
            "alamat"=> $request->alamat
        ]);
        
        DB::table("alternatif_kriteria")->where("alternatif_id", $id)->delete();

        for ($i=0; $i < count($request->nilai); $i++) { 
            DB::table("alternatif_kriteria")->insert([
                "alternatif_id"    => $alternatif->id,
                "sub_kriteria_id"  => $request->nilai[$i],
                "kriteria_id"  => $request->id[$i],
            ]);
        }
    
        alert()->success('Success Message', 'Alternatif berhasil diedit');

        return redirect("/alternatif");
        
    }

    public function destroy($id)
    {
        $alternatif = Alternatif::findOrFail($id);
        $alternatif->delete();

        alert()->success('Success Message', 'Alternatif berhasil dihapus');

        return redirect("/alternatif");
    }

}
