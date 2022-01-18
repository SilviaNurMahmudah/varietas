<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bentuk;

class BentukController extends Controller
{
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
        return redirect('/bentuk');
    }
    public function edit(){
        return view('bentuk.edit_bentuk');
    } 
}
