<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alimentM;
use App\Models\saisonM;

class aliment_saisonC extends Controller
{
    public function index()
    {
       $lesSaisons = saisonM::all();

       return view('accueilV', ['lesSaisons'=>$lesSaisons]);
    }
    public function detailA(int $id)
    {
        $uneS = saisonM::where('idSais', $id)->first();
        return view('detailAlimentV', ['uneS'=>$uneS]);
    }
}
