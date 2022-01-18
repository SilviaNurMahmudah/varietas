<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WarnaDaging;

class WDagingController extends Controller
{
    public function getAll(){
        $warna_daging = WarnaDaging::all();
        return view('warna_daging.warna_daging',['warna_daging'=> $warna_daging]);
    }
    public function add(){
        return view('warna_daging.add_wdaging');
    }   
    public function create(Request $request) {
        WarnaDaging::create([
            'warna_daging' => $request->warna_daging,
        ]);
        return redirect('/warna_daging');
    }
    public function edit(){
        return view('warna_daging.edit_warnadaging');
    } 
}
