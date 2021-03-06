<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bobot;
use App\Kriteria;

class BobotController extends Controller
{
    
    public function index()
    {
        $bobot = Bobot::get();
        return view("bobot.index", compact("bobot"));
    }

    public function create()
    {
        $bobot      = Bobot::get("kriteria_id")->toArray();
        
        $temp_kriteria = [];

        foreach($bobot as $item){
            array_push($temp_kriteria, $item["kriteria_id"]);
        }

        $kriteria   = Kriteria::whereNotIn('id', $temp_kriteria)->get();

        return view("bobot.create", compact("kriteria"));
    }

    public function store(Request $request)
    {
        
        Bobot::create([
            "kriteria_id"   => $request->kriteria_id,
            "nilai"         => $request->nilai
        ]);

        alert()->success('Success Message', 'Bobot berhasil ditambahkan');

        return redirect("/bobot");
    }

    public function edit($id)
    {
        $bobot = Bobot::findOrFail($id);

        
        return view("bobot.edit", compact("bobot"));
    }

    public function update(Request $request, $id)
    {
        $bobot = Bobot::findOrFail($id);

        $bobot->update([
            "kriteria_id"   => $request->kriteria_id,
            "nilai"         => $request->nilai
        ]);

        alert()->success('Success Message', 'Bobot berhasil diedit');

        return redirect("/bobot");
    }

    public function destroy($id)
    {
        $bobot = Bobot::findOrFail($id);
        $bobot->delete();
        
        alert()->success('Success Message', 'Bobot berhasil dihapus');

        return redirect("/bobot");
    }
}
