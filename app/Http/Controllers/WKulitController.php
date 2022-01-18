<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WarnaKulit;

class WKulitController extends Controller
{
    public function getAll(){
        $warna_kulit = WarnaKulit::all();
        return view('warna_kulit.warna_kulit',['warna_kulit'=> $warna_kulit]);
    }
    public function add(){
        return view('warna_kulit.add_wkulit');
    }  
    public function create(Request $request) {
        WarnaKulit::create([
            'warna_kulit' => $request->warna_kulit,
        ]);
        return redirect('/warna_kulit');
    } 
    public function edit(){
        return view('warna_kulit.edit_warnakulit');
    } 
}
