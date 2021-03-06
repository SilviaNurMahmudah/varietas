<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WarnaDaging;

class WDagingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        return redirect('/warna_daging')->with('status', 'Data berhasil ditambahkan');
    }
    public function edit($id){
        $warna_daging = WarnaDaging::find($id);
        return view('warna_daging.edit_wdaging',['warna_daging'=>$warna_daging]);
    }
    public function update($id, Request $request) {
        $warna_daging = WarnaDaging::find($id);
        $warna_daging->warna_daging = $request->warna_daging;
        $warna_daging->save();
        return redirect('/warna_daging')->with('status', 'Data berhasil diedit');
    }
    public function delete($id){
        $warna_daging = WarnaDaging::find($id);
        $warna_daging->delete();
        return redirect('/warna_daging')->with('status', 'Data berhasil dihapus');
    } 
}
