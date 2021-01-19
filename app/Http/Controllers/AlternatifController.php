<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alternatif;
use App\SubKriteria;

class AlternatifController extends Controller
{
    public function index()
    {
        $alternatif = Alternatif::get();
        return view("alternatif.index", compact("alternatif"));
    }

    public function create()
    {
        $subKriteria = SubKriteria::get();

        return view("alternatif.create", compact("subKriteria"));
    }

    public function store(Request $request)
    {
        $all_sub = $request->sub_kriteria;

        foreach(count($all_sub) as $item){
            Alternatif::create([
                "sub_kriteria_id"   => $item,
                "nama"              => $request->nama,
                "nilai"             => $request->nilai
            ]);
        }
    
        return redirect("/subkriteria");
    }

    public function edit($id)
    {
        $subKriteria = SubKriteria::findOrFail($id);
        $kriteria = Kriteria::get();

        return view("subkriteria.edit", compact(["subKriteria", "kriteria"]));
    }

    
    public function update(Request $request, $id)
    {
        $subKriteria = SubKriteria::findOrFail($id);

        $subKriteria->update([
            "kriteria_id"   => $request->kriteria_id,
            "nama"          => $request->nama,
            "nilai"         => $request->nilai
        ]);

        return redirect("/subkriteria");
    }

    public function destroy($id)
    {
        $subKriteria = SubKriteria::findOrFail($id);
        $subKriteria->delete();

        return redirect("/subkriteria");
    }

}
