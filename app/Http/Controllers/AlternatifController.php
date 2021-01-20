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
        $kriteria = Kriteria::orderBy("id")->get();

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
            "nama"  => $request->nama
        ]);
        
        for ($i=0; $i < count($request->nilai); $i++) { 
            DB::table("alternatif_kriteria")->insert([
                "alternatif_id"    => $alternatif->id,
                "kriteria_id"      => $request->id[$i],
                "nilai"            => $request->nilai[$i]
            ]);
        }
    
        return redirect("/alternatif");
    }

    public function edit($id)
    {
        $alternatif = Alternatif::with(["kriteria.subKriteria" => function($q){
            $q->orderBy("nilai", "ASC");
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
            "nama"  => $request->nama
        ]);
        
        DB::table("alternatif_kriteria")->where("alternatif_id", $id)->delete();

        for ($i=0; $i < count($request->nilai); $i++) { 
            DB::table("alternatif_kriteria")->insert([
                "alternatif_id"    => $alternatif->id,
                "kriteria_id"      => $request->id[$i],
                "nilai"            => $request->nilai[$i]
            ]);
        }

        return redirect("/alternatif");
    }

    public function destroy($id)
    {
        $alternatif = Alternatif::findOrFail($id);
        $alternatif->delete();

        return redirect("/alternatif");
    }

}
