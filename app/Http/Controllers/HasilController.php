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
        
        return view("hasil.index");
    }
}