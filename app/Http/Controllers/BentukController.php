<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bentuk;

class BentukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getAll(){
        $bentuk = Bentuk::all();
        return view('bentuk.bentuk',['bentuk'=> $bentuk]);
    }
    public function add(){
        return view('bentuk.add_bentuk');
    }   
    public function create(Request $request) {
        Bentuk::create([
            'bentuk' => $request->bentuk,
        ]);
        return redirect('/bentuk')->with('status', 'Data berhasil ditambahkan');
    }
    public function edit($id){
        $bentuk = Bentuk::find($id);
        return view('bentuk.edit_bentuk',['bentuk'=>$bentuk]);
    }
    public function update($id, Request $request) {
        $bentuk = Bentuk::find($id);
        $bentuk->bentuk = $request->bentuk;
        $bentuk->save();
        return redirect('/bentuk')->with('status', 'Data berhasil diedit');
    }
    public function delete($id){
        $bentuk = Bentuk::find($id);
        $bentuk->delete();
        return redirect('/bentuk')->with('status', 'Data berhasil dihapus');
    }  
}
