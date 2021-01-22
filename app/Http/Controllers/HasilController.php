<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alternatif;
use App\Kriteria;
use App\Bobot;
use App\SubKriteria;
use Illuminate\Support\Facades\DB;
use PDF;

class HasilController extends Controller
{
    public function index()
    {
        return view("hasil.index");
    }

    public function cetak()
    {
        $pdf = PDF::loadView('hasil.cetak')->setOptions(['defaultFont' => 'sans-serif']);
        
        return $pdf->stream('penduduk.pdf');
    }
}