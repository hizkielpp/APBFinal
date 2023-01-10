<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PetaController extends Controller
{
    public function index()
    {
        $petas = DB::select('select * from petaBidang');
        return view('peta_bidang.index')->with('petas',$petas);
    }
}
