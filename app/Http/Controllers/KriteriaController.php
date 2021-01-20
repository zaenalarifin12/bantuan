<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kriteria;
use App\SubKriteria;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::get();

        return view("kriteria.index", compact("kriteria"));
    }

    public function create()
    {
        return view("kriteria.create");
    }

    public function store(Request $request)
    {
        Kriteria::create([
            "nama"  => $request->nama,
            "type"  => $request->type
        ]);

        alert()->success('Success Message', 'Kriteria berhasil ditambahkan');


        return redirect("/kriteria");
    }

    public function edit($id)
    {
        $kriteria  = Kriteria::findOrFail($id);
        
        return view("kriteria.edit", compact("kriteria"));
    }

    public function update(Request $request, $id)
    {        
        $kriteria  = Kriteria::findOrFail($id);
        
        $kriteria->update([
            "nama"  => $request->nama,
            "type"  => $request->type
        ]);

        alert()->success('Success Message', 'Alternatif berhasil diedit');


        return redirect("/kriteria");
    }

    public function destroy($id)
    {
        $kriteria  = Kriteria::findOrFail($id);
        $kriteria->delete();

        alert()->success('Success Message', 'Alternatif berhasil dihapus');

        return redirect("/kriteria");
    }
}
