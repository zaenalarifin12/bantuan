<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kriteria;
use App\SubKriteria;

class SubKriteriaController extends Controller
{
    public function index()
    {
        $subKriteria = SubKriteria::orderBy("kriteria_id", "ASC")->orderBy("nilai", "ASC")->get();

        return view("subkriteria.index", compact("subKriteria"));
    }

    public function create()
    {
        $kriteria = Kriteria::get();

        return view("subkriteria.create", compact("kriteria"));
    }

    public function store(Request $request)
    {
        SubKriteria::create([
            "kriteria_id"   => $request->kriteria_id,
            "nama"          => $request->nama,
            "nilai"         => $request->nilai
        ]);

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
