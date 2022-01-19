<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ukuran;

class UkuranController extends Controller
{
    public function getAll(){
        $ukuran = Ukuran::all();
        return view('ukuran.ukuran',['ukuran'=> $ukuran]);
    }
    public function add(){
        return view('ukuran.add_ukuran');
    }
    public function create(Request $request) {
        Ukuran::create([
            'ukuran' => $request->ukuran,
        ]);
        return redirect('/ukuran');
    }   
    public function edit($id){
        $ukuran = Ukuran::find($id);
        return view('ukuran.edit_ukuran',['ukuran'=>$ukuran]);
    }
    public function update($id, Request $request) {
        $ukuran = Ukuran::find($id);
        $ukuran->ukuran = $request->ukuran;
        $ukuran->save();
        return redirect('/ukuran');
    }
    public function delete($id){
        $ukuran = Ukuran::find($id);
        $ukuran->delete();
        return redirect('/ukuran');
    } 
}
