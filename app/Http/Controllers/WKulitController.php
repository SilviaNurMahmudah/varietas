<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\WarnaKulit;

class WKulitController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('manage')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
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
        return redirect('/warna_kulit')->with('status', 'Data berhasil ditambahkan');
    } 
    public function edit($id){
        $warna_kulit = WarnaKulit::find($id);
        return view('warna_kulit.edit_wkulit',['warna_kulit'=>$warna_kulit]);
    }
    public function update($id, Request $request) {
        $warna_kulit = WarnaKulit::find($id);
        $warna_kulit->warna_kulit = $request->warna_kulit;
        $warna_kulit->save();
        return redirect('/warna_kulit')->with('status', 'Data berhasil diedit');
    }
    public function delete($id){
        $warna_kulit = WarnaKulit::find($id);
        $warna_kulit->delete();
        return redirect('/warna_kulit')->with('status', 'Data berhasil dihapus');
    } 
}
